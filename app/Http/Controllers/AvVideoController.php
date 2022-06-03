<?php

namespace App\Http\Controllers;

use App\Models\AvVideo;
use App\Http\Requests\StoreAvVideoRequest;
use App\Http\Requests\UpdateAvVideoRequest;

class AvVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('av.videos_index', ['videos' => AvVideo::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAvVideoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAvVideoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AvVideo  $avVideo
     * @return \Illuminate\Http\Response
     */
    public function show(AvVideo $avVideo)
    {
        return view('av.videos_show', ['video' => $avVideo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AvVideo  $avVideo
     * @return \Illuminate\Http\Response
     */
    public function edit(AvVideo $avVideo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAvVideoRequest  $request
     * @param  \App\Models\AvVideo  $avVideo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAvVideoRequest $request, AvVideo $avVideo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AvVideo  $avVideo
     * @return \Illuminate\Http\Response
     */
    public function destroy(AvVideo $avVideo)
    {
        //
    }
}
