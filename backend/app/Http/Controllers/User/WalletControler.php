<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use App\Models\Transaction;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class WalletControler extends Controller
{
    //

    public function getMyWallet()
    {
        $banks = Bank::orderBy('name', 'asc')->get();
        $histories = Transaction::where('user_id', 1)->orderBy('created_at', 'desc')->get();
        $total = Wallet::where('user_id', 1)->first();
        return view('components.my-wallet', ['banks'=> $banks, 'histories'=> $histories, 'total' => $total]);
    }

    public function postMyWallet(Request $request)
    {
        $params = [
            'bank_id' => $request->bank_id,
            'amount' => $request->amount,
            'code_reference' => $request->code_reference,
            'user_id'=> 1,
            'done_at' => now(),
            'status' => 1
        ];
        $validator = Validator::make($params, [
            'bank_id' => 'required|numeric|exists:banks,id',
            'amount' => 'required|numeric|min:100000',
            'code_reference' => 'required',
        ], [
            'amount.min' => 'Số tiền phải lớn hơn hoặc bằng 100.000 vnđ'
        ]);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }
        // $params['coin'] = $params['vnd_nums'] / 100000;
        // dd($params);
        Transaction::create($params);
        return redirect()->back()->with('message', 'Đang xử lý yêu cầu');
    }
}
