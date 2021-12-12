<?php

namespace App\Services;

use App\Models\Transaction;
use App\Models\User;
use App\Models\Wallet;

Class WalletService {

    /**
    */
    public function __construct()
    {
    }

    /**
     * Get total money
     *
     * @param User $user User
     *
     * @return integer
    */
    public function getTotalMoney(User $user)
    {
        return $user->wallet()->first()->vnd_nums;
    }
}
