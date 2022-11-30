<?php

namespace App\Http\Controllers;

use App\Models\BinhLuan;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBinhLuanRequest;
use App\Http\Requests\UpdateBinhLuanRequest;

class BinhLuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreBinhLuanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBinhLuanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BinhLuan  $binhLuan
     * @return \Illuminate\Http\Response
     */
    public function show(BinhLuan $binhLuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BinhLuan  $binhLuan
     * @return \Illuminate\Http\Response
     */
    public function edit(BinhLuan $binhLuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBinhLuanRequest  $request
     * @param  \App\Models\BinhLuan  $binhLuan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBinhLuanRequest $request, BinhLuan $binhLuan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BinhLuan  $binhLuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(BinhLuan $binhLuan)
    {
        //
    }
}
