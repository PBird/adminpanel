<?php

namespace App\Http\Controllers;

use App\page;
use App\template;
use App\nav;
use App\image;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

        $pages = page::all();

        return view('panel.pages.page_showall')->with('pages',$pages);
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
        $pageLinks= $request->input('Pagelinks');
        $featureImages= $request->input('Featureimage');
        $links = $request->input('link');

        if($pageImages)
            foreach ($pageImages as $key => $pageImage) {
                    {
                        $image= image::find($pageImage);
                        $page->images()->save($image);
                    }

                }

          if($pageLinks)
            foreach ($pageLinks as $key => $pageLink) {
                    {
                        $href = $pageLink['href'];
                        $name= $pageLink['name'];
                        $page->buttons()->create(['name'=> $name, 'href' => $href]);
                    }

                }



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


       return back()->with('success', 'Created Successfully')->withInput();

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


        $navs=nav::all();
        $images=image::all();

        return view('panel.pages.Updatepages.chooseUpdateTemp')->with('page', $page)->with('navs',$navs)->with('images',$images);

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
           $this->validate($request,
            [
                'placement' => Rule::unique('pages')->ignore($page->id)

            ]);

            $pageData['title']=$request->input('Pagetitle');
            $pageData['description']=$request->input('Pagedescription');
            $pageData['placement']=$request->input('placement');
            $pageData['status'] = $request->input('status');

            $page->update($pageData);

            $featureTitle =  $request->input('title');
            $featureContent = $request->input('content');
            $featureStatus = $request->input('statusFeature');

            $featurelength = count($featureTitle);
            $icons = $request->input('icon');
            $pageImages= $request->input('Pageimage');
            $pageLinks= $request->input('Pagelinks');
            $featureImages= $request->input('Featureimage');
            $links = $request->input('link');

            if($pageImages)
            {
                $page->images()->detach();
                $page->images()->attach($pageImages);
            }

            if($pageLinks)
          {
                $page->buttons()->delete();
           foreach ($pageLinks as $key => $pageLink) {
                    {
                        $href = $pageLink['href'];
                        $name= $pageLink['name'];
                        $page->buttons()->create(['name'=> $name, 'href' => $href]);
                    }

                }
            }


            foreach ($page->features as $key => $feature)
        {
             $feature->update( ['title'=> $featureTitle[$key], 'content' => $featureContent[$key], 'Status'=> $featureStatus[$key] ] );



               if($feature->icons()->exists())
                   {
                         $feature->icons()->delete();
                        for($j=0;$j<count($icons[$key]);$j++)
                            {

                                $iconName= $icons[$key][$j]['name'];
                                $iconDesc = $icons[$key][$j]['description'];
                                $feature->icons()->create(['name' => $iconName, 'description' => $iconDesc]);

                            }
                    }

                if($feature->buttons()->exists())
                    {
                        $feature->buttons()->delete();
                        for($j=0;$j<count($links[$key]);$j++)
                            {
                                $href = $links[$key][$j]['href'];
                                $name = $links[$key][$j]['name'];
                                $feature->buttons()->create(['href' => $href, 'name' => $name]);
                        }

                    }

                       if($feature->images()->exists())
                            $feature->images()->sync($featureImages[$key]);


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
     * Remove the specified resource from storage.
     *
     * @param  \App\page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(page $page)
    {

        $page->delete();
        return back()->with('success','Deleted Successfully');
    }
}
