<?php

namespace App\Http\Controllers;

use App\Processing;
use Illuminate\Http\Request;

class ProcessingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $processing = Processing::all();
        return view('admin.admin-content.processing.index', compact('processing'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin-content.processing.create');
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
            'content_bn' => 'required',
            'content_en' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,webp',
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('photos');
        }

        Processing::create($inputs);
        session()->flash('create', 'Data Created Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Processing  $processing
     * @return \Illuminate\Http\Response
     */
    public function show(Processing $processing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Processing  $processing
     * @return \Illuminate\Http\Response
     */
    public function edit(Processing $processing)
    {
        return view('admin.admin-content.processing.edit',compact('processing'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Processing  $processing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Processing $processing)
    {
        $inputs = \request()->validate([
            'title_bn' => 'required',
            'title_en' => 'required',
            'content_bn' => 'required',
            'content_en' => 'required',
            'image' => 'mimes:jpeg,jpg,png,webp',
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('photos');
        } else {
            $inputs['image'] = $processing->image;
        }

        $processing->update($inputs);
        session()->flash('create', 'Data Updated Successfully');
        return redirect()->route('processing.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Processing  $processing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Processing $processing)
    {
        $processing->delete();
        session()->flash('delete', 'Data Deleted Successfully');

        return redirect()->route("processing.index");
    }
}
