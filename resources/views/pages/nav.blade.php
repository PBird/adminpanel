<nav >
<?php
  $header = App\page::findOrFail(1);

 ?>
                <div class="row">

                    <img  @if($header->images()->exists()) src="{{$header->images->get(1)->path}}"  alt="{{$header->images->get(1)->description}}" @endif class="logo" >
                    <img @if($header->images()->exists()) src="{{$header->images->get(2)->path}}"   alt="{{$header->images->get(2)->description}}" @endif class="logo-black" >

                    <ul class="main-nav js--main-nav">


                    @foreach($navs as $nav)
                        <li> <a href="#{{$nav->tag}}"  >{{$nav->name}}</a> </li>
                    @endforeach

                    </ul>
                    <a  class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>

                </div>

</nav>