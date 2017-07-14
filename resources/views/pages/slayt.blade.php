
<?php

if($page->nav()->exists())
    $tag = '#'.$page->nav->tag;
else
     $tag="#";

?>

 <section class="section-meals" id="{{$tag}}">


             <?php
                    $features = $page->features()->whereStatus(1)->get();
                    $countFeature = count($features);
            ?>

            <ul class="meals-showcase">

               @foreach($features as $key => $feature)

                 @break($key > ($countFeature/2)-1)

                <li style="width:{{100/($countFeature/2.0)}}%">
                    <figure class="meal-photo">
                        <img src="{{asset($feature->images->first()->path)}}" alt="{{$feature->images->first()->description}}">
                    </figure>
                </li>

               @endforeach

           </ul>



         <?php

            $features = $features->slice(($countFeature/2));

           ?>

           <ul class="meals-showcase clearfix">

                  @foreach($features as $key => $feature)

                <li style="width:{{100/($countFeature/2.0)}}%">
                    <figure class="meal-photo">
                        <img src="{{asset($feature->images->first()->path)}}" alt="{{$feature->images->first()->description}}" >
                    </figure>
                </li>

                @endforeach

            </ul>





   </section>