<?php
namespace App\Services;

use App\Models\JobOperator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class JobOperatorService
{
    /**
     */
    public function __construct()
    {
    }

    public function index()
    {
        return JobOperator::whereNull('deleted_at')->orderBy('name', 'asc')->get();
    }
}
