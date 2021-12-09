<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Services\TransactionService;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * TransactionService
     *
     * @var TransactionService $transactionService TransactionService
    */
    protected $transactionService;

    /**
     * TransactionController constructor
     *
     * @param TransactionService $transactionService TransactionService
    */
    public function __construct(TransactionService $transactionService)
    {
        $this->transactionService = $transactionService;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request Request
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function index(Request $request)
    {
        $input = $request->all([
            'user_id',
            'monthly',
        ]);

        $result = $this->transactionService->list($input);

        return $this->response('', $result);
    }

    /**
     * Display the specified resource.
     *
     * @param Transaction $transaction Transaction
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Transaction $transaction)
    {
        $transaction['bank'] = $transaction->bank()->first(['name', 'sort_name']);
        $transaction['user'] = $transaction->user()->first(['user_name', 'phone_nums']);

        return $this->response('', $transaction);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Transaction $transaction Transaction
     * @param Request     $request     Request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Transaction $transaction, Request $request)
    {
        $result = $this->transactionService->update($transaction, $request->status);
        return $this->response('', $result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
