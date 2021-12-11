<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Bank;
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
        $histories = Wallet::where('user_id', 1)->orderBy('created_at', 'desc')->get();
        return view('components.my-wallet', ['banks'=> $banks, 'histories'=> $histories]);
    }

    public function postMyWallet(Request $request)
    {
        $params = [
            'bank_id' => $request->bank_id,
            'vnd_nums' => $request->vnd_nums,
            'reference_code' => $request->reference_code,
            'user_id'=> 1
        ];
        $validator = Validator::make($params, [
            'bank_id' => 'required|numeric|exists:banks,id',
            'vnd_nums' => 'required|numeric|min:100000',
            'reference_code' => 'required',
        ], [
            'vnd_nums.min' => 'Số tiền phải lớn hơn hoặc bằng 100.000 vnđ'
        ]);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }
        $params['status'] = 1;
        $params['coin'] = $params['vnd_nums'] / 100000;
        // dd($params);
        Wallet::create($params);
        return redirect()->back()->with('message', 'Đang xử lý yêu cầu');
    }
}
