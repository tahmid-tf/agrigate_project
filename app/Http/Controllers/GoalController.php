<?php

namespace App\Http\Controllers;

use App\Goal;
use Illuminate\Http\Request;

class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goals = Goal::all();
        return view('admin.admin-content.goal.index', compact('goals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin-content.goal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = \request()->validate([
            'title_bn' => 'required',
            'title_en' => 'required',
            'content_bn' => 'required',
            'content_en' => 'required',
            'hex_color' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('photos');
        }

        Goal::create($inputs);
        session()->flash('create', 'Data Created Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Goal $goal
     * @return \Illuminate\Http\Response
     */
    public function show(Goal $goal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Goal $goal
     * @return \Illuminate\Http\Response
     */
    public function edit(Goal $goal)
    {
        return view('admin.admin-content.goal.edit', compact('goal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Goal $goal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Goal $goal)
    {
        $inputs = \request()->validate([
            'title_bn' => 'required',
            'title_en' => 'required',
            'content_bn' => 'required',
            'content_en' => 'required',
            'hex_color' => 'required',
            'image' => 'mimes:jpeg,jpg,png',
        ]);


        if (request('image')) {
            $inputs['image'] = \request('image')->store('photos');
        } else {
            $inputs['image'] = $goal->image;
        }

        $goal->update($inputs);
        session()->flash('create', 'Data Updated Successfully');
        return redirect()->route('goal.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Goal $goal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Goal $goal)
    {
        $goal->delete();
        session()->flash('delete', 'Data Deleted Successfully');

        return redirect()->route("goal.index");
    }
}
