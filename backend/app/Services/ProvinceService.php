<?php
namespace App\Services;

use App\Models\Province;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ProvinceService
{
    /**
     */
    public function __construct()
    {
    }

    public function index()
    {
        return Province::whereNull('deleted_at')->orderBy('name', 'asc')->get();
    }
}
