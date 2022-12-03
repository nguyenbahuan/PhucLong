<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSanPhamRequest;
use App\Http\Requests\UpdateSanPhamRequest;

use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $uri = str_replace($request->url(), '',$request->fullUrl());
        $category = "";
        $_GET['category'] != null ? $category = $_GET['category'] : $category = "drink" ;
// 
        $data_product = SanPham::all()->where("LoaiSanPham" , "=" , $category );
        return view( 'phuclong.product' , ['data' => $data_product] );
    }
    public function indexAdmin(){
        $data_product = SanPham::all();
        return view('admin.admin', compact('data_product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.create_product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSanPhamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $request->validate([
        //     'TenSanPham' => 'required|string|max:255',
        //     'LoaiSanPham' => 'required|string|max:255',
        //     'TenTiengAnh' => 'required',
        //     'GiaTien' => 'required',
        //     'imgSanPham' => 'required',
        // ]);
        SanPham::insert([
            'TenSanPham' => $request->sanpham,
            'LoaiSanPham' => $request->loai,
            'TenTiengAnh' => $request->kl,
            'GiaTien' => $request->gia,
            'imgSanPham' => $request->anh,
        ]);

        return redirect('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function show(SanPham $sanPham)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        $data_product = SanPham::find($id);
        return view('admin.edit_product', compact('data_product'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSanPhamRequest  $request
     * @param  \App\Models\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $data_product = SanPham::find($id);
        $data_product->update([
            'TenSanPham' => $request->sanpham,
            'LoaiSanPham' => $request->loai,
            'TenTiengAnh' => $request->kl,
            'GiaTien' => $request->gia,
            'imgSanPham' => $request->anh,
        ]);

        return redirect('admin');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = SanPham::find($id);
        $product->delete();
        return redirect('admin');
    }
}