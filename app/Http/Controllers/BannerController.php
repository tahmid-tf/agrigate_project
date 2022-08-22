<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::all();
        return view('admin.admin-content.banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin-content.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = \request()->validate([
            'title_bn' => 'required',
            'title_en' => 'required',
//            'content_bn' => 'required',
//            'content_en' => 'required',
            'image' => 'mimes:jpeg,jpg,png',
            'banner' => 'required',
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('photos');
        }else{
            $inputs['image'] = '';
        }

        Banner::create($inputs);
        session()->flash('create', 'Data Created Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('admin.admin-content.banner.edit',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        $inputs = \request()->validate([
            'title_bn' => 'required',
            'title_en' => 'required',
//            'content_bn' => 'required',
//            'content_en' => 'required',
            'image' => 'mimes:jpeg,jpg,png',
//            'banner' => 'required',
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('photos');
        } else {
            $inputs['image'] = $banner->image;
        }

        $banner->update($inputs);
        session()->flash('create', 'Data Updated Successfully');
        return redirect()->route('banner.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();
        session()->flash('delete', 'Data Deleted Successfully');

        return redirect()->route("banner.index");
    }
}
