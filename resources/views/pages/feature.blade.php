
<?php


if($page->nav()->exists())
    $tag = '#'.$page->nav->tag;
else
     $tag="#";


?>


<section class="section-features js--section-features clearfix" id="{{$tag}}">
            <div class="row clearfix">

                <h2>{{ $page->title}} </h2>
                <p class="long-copy">
                        {{$page->description}}
                </p>

            </div>

            <?php
                    $features = $page->features()->whereStatus(1)->get();
                    $Countfeature = count($features);
            ?>

            <div class="row clearfix">

            @foreach($features as $feature)

                  <div class="col span_1_of_{{$Countfeature}} box">

                                 <i class="{{$feature->icons->first()->name }} icon-big"></i>
                                <h3> {{$feature->title}} </h3>


                                <p>
                                     {{$feature->content}}
                                </p>

                 </div>
            @endforeach



            </div>

        </section>