

<?php


if($page->nav()->exists())
    $tag = $page->nav->tag;
else
     $tag="#";



?>




<section class="section-plans js--section-plans clearfix" id="{{$tag}}">

        <div class="row">

            <h2> {{$page->title}} </h2>

            </div>

            <?php
                    $features = $page->features()->whereStatus(1)->get();
                    $countFeature = count($features)
            ?>

            <div class="row">

            @foreach($features as $feature)
                <div class="col span_1_of_{{$countFeature}}">
                    <div class="plan-box">
                        <div>
                            <h3>  {{$feature->title}} </h3>
                            <?php

                                $icons = $feature->icons;

                            ?>


                            <p class="plan-price"> {{$icons->get(0)->description}} <span> {{$icons->get(1)->description}} </span>  </p>
                            <p class="plan-price-meal"> @if($feature->content) {{$feature->content}} @else &nbsp @endif </p>
                        </div>
                        <div>
                            <ul>
                                <li> <i class="{{$icons->get(2)->name}} icon-small"> </i> {{$icons->get(2)->description}} </li>

                                <li> <i class="{{$icons->get(3)->name}} icon-small"> </i>{{$icons->get(3)->description}} </li>

                                <li> <i class="{{$icons->get(4)->name}} icon-small"> </i> {{$icons->get(4)->description}} </li>

                                <li> <i class="{{$icons->get(5)->name}} icon-small"> </i> {{$icons->get(5)->description}} </li>

                            </ul>
                        </div>

                        <div>

                            <a href="{{$feature->buttons->get(0)->href}}" class="btn btn-full"> {{$feature->buttons->get(0)->name}} </a>
                     </div>

                    </div>
                </div>
                @endforeach


            </div>

        </section>