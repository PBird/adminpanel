

<?php


if($page->nav()->exists())
    $tag = $page->nav->tag;
else
     $tag="#";



?>



<section class="section-cities clearfix" id="{{$tag}}">

             <div class="row">

                    <h2> {{$page->title}} </h2>

             </div>
            <div class="row clearfix">


            <?php
                    $features = $page->features()->whereStatus(1)->get();
                    $countFeature = count($features)
            ?>

            @foreach($features as $feature)

                    <div class="col span_1_of_{{$countFeature}} box">

                        <img @if($feature->images()->exists()) src="{{asset($feature->images->first()->path)}}" alt="{{asset($feature->images->first()->description)}}" @endif>

                        <h3> {{$feature->title}} </h3>

                        @foreach($feature->icons as $key => $icon)
                        <div class="city-feature">

                            @if($key<2)
                             <i class="{{$icon->name }} icon-small "></i> {{$icon->description}}
                             @else
                               <i class="{{$icon->name }} icon-small "></i> <a href="{{$feature->buttons->first()->href}}"> {{$icon->description}} </a>
                            @endif



                        </div>
                        @endforeach

                    </div>
            @endforeach









             </div>






        </section>