
          <div class="row clearfix">

              <div class="col span_1_of_2">

                  <ul class="footer-nav">


                  <?php
                        $footer = App\page::findOrFail(2);
                        $features = $footer->features()->whereStatus(1)->get();
                    ?>

                    @foreach($features as $key=>$feature)

                      <li> <a href="{{$feature->buttons->get(0)->href}}"> {{$feature->buttons->get(0)->name }} </a> </li>
                      @break($features->get($key+1)->icons()->exists())

                      @endforeach
                  </ul>
              </div>

              <div class="col span_1_of_2 ">

                  <ul class="social-links">

                  @foreach($features as $key => $feature)
                    @if($feature->icons()->exists())
                      <li> <a href="{{$feature->buttons->get(0)->href }}"><i class="{{$feature->icons->get(0)->name }}"></i>  </a> </li>
                     @endif
                  @endforeach



                  </ul>


              </div>


          </div>

          <div class="row">
            <p>

                {!!$footer->title!!}

            </p>
          </div>

