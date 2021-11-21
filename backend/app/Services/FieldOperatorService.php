<?php
namespace App\Services;

use App\Models\FieldOperator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class FieldOperatorService
{
    /**
     */
    public function __construct()
    {
    }

    public function index()
    {
        return FieldOperator::whereNull('deleted_at')->orderBy('name', 'asc')->get();
    }
}
