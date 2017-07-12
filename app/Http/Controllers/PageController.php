<?php

namespace App\Http\Controllers;

use App\page;
use App\template;
use App\nav;
use App\image;
use Illuminate\Http\Request;

class PageController extends Controller
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
        $templates= template::all();
        return view('panel.pages.templateChoose')->with('templates',$templates);
    }

    public function Pagecreate(Request $request)
    {

       $template = template::find($request->input('template'));

       $navs=nav::all();

       $images = image::all();

       return view('panel.pages.pageCreate')->with('template',$template)->with('navs',$navs)->with('images',$images);

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $this->validate($request,
            [
                'placement' => 'required|unique:pages'

            ]);


        $template = template::find($request->input('template_id'));

        $pageData['title']=$request->input('Pagetitle');
        $pageData['description']=$request->input('Pagedescription');
        $pageData['placement']=$request->input('placement');
        $pageData['status'] = $request->input('status');

        $page=$template->pages()->create($pageData);

        $featureTitle =  $request->input('title');
        $featureContent = $request->input('content');
        $featureStatus = $request->input('statusFeature');

        $featurelength = count($featureTitle);
        $icons = $request->input('icon');
        $pageImages= $request->input('Pageimage');
        $featureImages= $request->input('Featureimage');
        $links = $request->input('link');

        if($pageImages)
            foreach ($pageImages as $key => $pageImage) {
                if($pageImage>0)
                    {
                        $image= image::find($pageImage);
                        $page->images()->save($image);
                    }

                }


         // if($featureImages)
         //    foreach ($featureImages as $key => $featureImage) {
         //        if($featureImage>0)
         //            {
         //                $image= image::find($featureImage);
         //                $feature->images()->save($image);
         //            }

         //        }


        for($i=0;$i<$featurelength;$i++)
        {
            $feature = $page->features()->create( ['title'=> $featureTitle[$i], 'content' => $featureContent[$i], 'Status'=> $featureStatus[$i] ] );

            for($j=0;$j<count($icons[$i]);$j++)
                {

                    $iconName= $icons[$i][$j]['name'];
                    $iconDesc = $icons[$i][$j]['description'];
                    $feature->icons()->create(['name' => $iconName, 'description' => $iconDesc]);

                }

            for($j=0;$j<count($links[$i]);$j++)
                {
                    $href = $links[$i][$j]['href'];
                    $name = $links[$i][$j]['name'];
                    $feature->buttons()->create(['href' => $href, 'name' => $name]);
                }


                 for($j=0;$j<count($featureImages[$i]);$j++)
                 {
                    if($featureImages[$i][$j]>0)
                    {
                        $image= image::find($featureImages[$i][$j]);
                         $feature->images()->save($image);

                   }
                 }


        }

        $nav_id=$request->input('nav_id');

        if($nav_id>0)
       {
            $nav=nav::find($nav_id);
            $page->nav()->save($nav);
       }


       return back()->with('success', 'Updated Successfully')->withInput();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(page $page)
    {
        //
    }
}
