

<?php


if($page->nav()->exists())
    $tag = $page->nav->tag;
else
     $tag="#";


?>


<section class="section-testimonials clearfix" style="background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)) @if($page->images()->exists()) , url({{$page->images->get(0)->path}}) ; @endif">

            <div class="row">

                <h2> {{ $page->title}} </h2>

            </div>

            <div class="row">

                 <?php
                    $features = $page->features()->whereStatus(1)->get();
                    $Countfeature = count($features);
                ?>

                 @foreach($features as $feature)
                    <div class="col span_1_of_{{$Countfeature}}">

                        <blockquote>

                       {{$feature->content}}
                        <cite> <img @if($feature->images()->exists()) src="{{asset($feature->images->first()->path)}}" alt="{{$feature->images->first()->description}}" @endif > {{ $feature->title}}</cite>
                        </blockquote>


                    </div>

                @endforeach


            </div>

        </section>