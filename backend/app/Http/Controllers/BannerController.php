<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Services\BannerService;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * BannerService
     *
     * @var BannerService
    */
    protected $bannerService;

    /**
     * BannerController Constructor
     *
     * @param BannerService $bannerService BannerService
     *
     */
    public function __construct(BannerService $bannerService)
    {
        $this->bannerService = $bannerService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $attributes = $request->all([
            'title',
            'content',
        ]);

        $result = $this->bannerService->list($attributes);

        return $this->response('', $result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request Request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        $attributes = $request->all([
            'title',
            'content',
            'file_image',
        ]);

        $result = $this->bannerService->create($attributes);

        return $this->responseCreated('', $result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Banner $banner Banner
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Banner $banner)
    {
        return $this->response('', $banner);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Banner  $banner  Banner
     * @param Request $request Request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Banner $banner, Request $request)
    {
        $attributes = $request->all([
            'title',
            'content',
            'file_image',
        ]);

        $result = $this->bannerService->updateBanner($banner, $attributes);

        return $this->response('', $result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Banner $banner Banner
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();

        return $this->responseNoContent();
    }
}
