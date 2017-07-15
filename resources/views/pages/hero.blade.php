  <div class="hero-text-box">
                    <h1> {!!App\page::find(0)->title!!} </h1>
                    <a class="btn btn-full js--scroll-to-plans" href="{{App\page::find(0)->buttons->get(0)->href}}"> {{App\page::find(0)->buttons->get(0)->name}} </a>
                    <a class="btn btn-ghost js--scroll-to-start" href="{{App\page::find(0)->buttons->get(1)->href}}"> {{App\page::find(0)->buttons->get(1)->name}} </a>
 </div>