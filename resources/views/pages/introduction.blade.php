<?php


if($page->nav()->exists())
    $tag = $page->nav->tag;
else
     $tag="#";

if($page->images()->exists())
{
     $mainimage= $page->images()->wherePivot('id','=','0')->first();
     $subimage1 = $page->images()->wherePivot('id','=','1')->first();
     $subimage2 = $page->images()->wherePivot('id','=','2')->first();
}

?>


<section class="section-steps " id="{{$tag}}">

            <div class="row ">

                <h2> {{$page->title}}  </h2>


            </div>
            <div class="row clearfix">

            @if($mainimage!==null)
                <div class="col span_1_of_2 steps-box">


                    <img src="{{asset($mainimage->path)}}" alt="" class="app-screen">


                </div>

                <div class="col span_1_of_2 steps-box">
            @else
                 <div class="col span_2_of_2 steps-box">
            @endif

             <?php
                    $features = $page->features()->whereStatus(1)->get();
            ?>


                @foreach($features as $feature)

                    <div class="works-step">
                        <div>{{$feature->title}}</div>

                        <p>{{$feature->content}}</p>

                    </div>
                @endforeach
                @if($subimage1!==null)
                    <a href="{{$page->buttons->first()->href}}" class="btn-app"> <img src="{{asset($subimage1->path)}}" alt="{{$subimage1->description}}">  </a>
                @endif
                @if($subimage2!==null)
                    <a href="{{$page->buttons->get(1)->href}}" class="btn-app"> <img src="{{asset($subimage2->path)}}" alt="{{$subimage2->description}}">  </a>
                @endif

                </div>


            </div>


        </section>