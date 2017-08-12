<nav >
<?php
  $header = App\page::findOrFail(1);

  $check = $header->images()->exists();

 ?>
                <div class="row">

                    <img  @if($check && $header->images()->wherePivot('id','=','1')->first()!==null ) src="{{$header->images()->wherePivot('id','=','1')->first()->path}}"  alt="{{$header->images()->wherePivot('id','=','1')->first()->description}}" @endif class="logo" >
                    <img @if($check && $header->images()->wherePivot('id','=','2')->first()!==null) src="{{$header->images()->wherePivot('id','=','2')->first()->path}}"   alt="{{$header->images()->wherePivot('id','=','2')->first()->description}}" @endif class="logo-black" >

                    <ul class="main-nav js--main-nav">


                    @foreach($navs as $nav)
                        <li> <a href="#{{$nav->tag}}"  >{{$nav->name}}</a> </li>
                    @endforeach

                    </ul>
                    <a  class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>

                </div>

</nav>