<?php

namespace App\Services;

use App\Services\WalletService;
use App\Models\Transaction;
use App\Models\Wallet;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class TransactionService
{
    /**
    */
    public function __construct()
    {
    }

    /**
     * List Transactions
     *
     * @param array $inputs Input
     *
     * @return mixed|array|Transaction
     * @throws ValidationException
     */
    public function list(array $inputs)
    {
        $validator = Validator::make($inputs, [
           'user_id' => 'nullable|numeric|exists:users,id',
           'monthly' => 'nullable|date_format:m-Y',
           'page'    => 'nullable|numeric',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        $query = Transaction::query();

        if (! empty($inputs['user_id'])) {
            $query->where('user_id', $inputs['user_id']);
        }

        if (! empty($inputs['monthly'])) {
            $monthly = Carbon::parse('01-' . $inputs['monthly']);
            $start_at = $monthly->firstOfMonth()->format('Y-m-d H:i:s');
            $end_at = $monthly->endOfMonth()->format('Y-m-d H:i:s');
            $query->whereBetween('created_at', [$start_at, $end_at]);
        }

        return $query->orderBy('created_at', 'desc')
            ->paginate(!empty($inputs['page_limit']) ? $inputs['page_limit'] : 10);
    }

    /**
     * Update status transaction
     *
     * @param Transaction $transaction Transaction
     * @param integer     $status      Status
     *
     * @return mixed|array
     * @throws ValidationException
     */
    public function update(Transaction $transaction, int $status)
    {
        $validator = Validator::make(['status' => $status], [
            'status' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        if ($status == 2) {
            $totalMoney = Wallet::query()
                ->where('user_id', $transaction->user_id)
                ->first();

            if ($totalMoney) {
                (int) $totalMoney->vnd_nums += (int) $transaction->amount;
                (float) $totalMoney->coin += (float) ($transaction->amount / 100000);
                $totalMoney->save();
            }
        }

        return $transaction->update([
           'status' => $status,
        ]);
    }
}
