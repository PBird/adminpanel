  <div class="hero-text-box">
  <?php
    $header=App\page::findOrFail(1);

  ?>
                    <h1> {!!$header->title!!} </h1>
                    <a class="btn btn-full js--scroll-to-plans" href="{{ $header->buttons->get(0)->href}}"> {{$header->buttons->get(0)->name}} </a>
                    <a class="btn btn-ghost js--scroll-to-start" href="{{ $header->buttons->get(1)->href}}"> {{$header->buttons->get(1)->name}} </a>
 </div>