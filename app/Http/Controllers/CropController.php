<?php

namespace App\Http\Controllers;

use App\Crop;
use Illuminate\Http\Request;

class CropController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crops = Crop::all();
        return view('admin.admin-content.crop.index', compact('crops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin-content.crop.create');
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
            'image' => 'required|mimes:jpeg,jpg,png,webp',
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('photos');
        }

        Crop::create($inputs);
        session()->flash('create', 'Data Created Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Crop  $crop
     * @return \Illuminate\Http\Response
     */
    public function show(Crop $crop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Crop  $crop
     * @return \Illuminate\Http\Response
     */
    public function edit(Crop $crop)
    {
        return view('admin.admin-content.crop.edit',compact('crop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Crop  $crop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crop $crop)
    {
        $inputs = \request()->validate([
            'title_bn' => 'required',
            'title_en' => 'required',
            'image' => 'mimes:jpeg,jpg,png,webp',
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('photos');
        } else {
            $inputs['image'] = $crop->image;
        }

        $crop->update($inputs);
        session()->flash('create', 'Data Updated Successfully');
        return redirect()->route('crop.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Crop  $crop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crop $crop)
    {
        $crop->delete();
        session()->flash('delete', 'Data Deleted Successfully');

        return redirect()->route("crop.index");
    }
}
