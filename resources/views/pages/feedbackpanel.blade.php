

<?php


if($page->nav()->exists())
    $tag = $page->nav->tag;
else
     $tag="#";


?>


<section class="section-testimonials clearfix">

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
                        <cite> <img src="{{asset($feature->images->first()->path)}}"> {{ $feature->title}}</cite>
                        </blockquote>


                    </div>

                @endforeach


            </div>

        </section>