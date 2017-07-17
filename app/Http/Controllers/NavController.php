<?php

namespace App\Http\Controllers;

use App\nav;
use Illuminate\Http\Request;

class NavController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $navs = nav::all();
        return view('panel.pages.nav_show')->with('navs',$navs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('panel.pages.Createpages.nav_create');
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


        nav::create($request->all());

        return back()->with('success','Created Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\nav  $nav
     * @return \Illuminate\Http\Response
     */
    public function show(nav $nav)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\nav  $nav
     * @return \Illuminate\Http\Response
     */
    public function edit(nav $nav)
    {
        //

        return view('panel.pages.Updatepages.nav_update')->with('nav',$nav);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\nav  $nav
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nav $nav)
    {

        $nav->update($request->all());

        return back()->with('success','Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\nav  $nav
     * @return \Illuminate\Http\Response
     */
    public function destroy(nav $nav)
    {
         $nav->delete();

         return back()->with('success','Deleted Succesfully');
    }
}
