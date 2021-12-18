<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Services\ProgramService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * ProgramService
     *
     * @var ProgramService $programService
    */
    protected $programService;

    /**
     * ProgramController constructor
     *
     * @param ProgramService $programService ProgramService
    */
    public function __construct(ProgramService $programService)
    {
        $this->programService = $programService;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request Request
     *
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        $inputs = $request->all([
            'name',
            'started_at_from',
            'started_at_to',
            'end_at_from',
            'end_at_to',
            'page',
            'status',
        ]);

        $result = $this->programService->list($inputs);

        return $this->response('', $result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request Request
     *
     * @return JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function create(Request $request)
    {
        $attributes = $request->all([
            'name',
            'title',
            'content',
            'term',
            'requirement',
            'protection_range',
            'customer_rule',
            'time_waiting',
            'fee',
            'status',
            'started_at',
            'end_at',
        ]);

        $result = $this->programService->add($attributes);

        return $this->responseCreated('', $result);
    }

    /**
     * Display the specified resource.
     *
     * @param Program $program Program
     *
     * @return JsonResponse
     */
    public function show(Program $program)
    {
        return $this->response('', $program);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Program $program Program
     * @param Request $request Request
     *
     * @return JsonResponse
     */
    public function update(Program $program, Request $request)
    {
        $attributes = $request->all([
            'name',
            'title',
            'content',
            'term',
            'requirement',
            'protection_range',
            'customer_rule',
            'time_waiting',
            'fee',
            'status',
            'started_at',
            'end_at',
        ]);

        $result = $this->programService->update($program, $attributes);

        return $this->response('', $result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Program $program Program
     *
     * @return JsonResponse
     */
    public function destroy(Program $program)
    {
        $program->delete();

        return $this->response('', null);
    }

    public function all()
    {
        $result = $this->programService->getAll();
        return $this->response('', $result);
    }
}
