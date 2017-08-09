<nav >

                <div class="row">

                    <img src="{{App\page::find(0)->images->get(1)->path}}" alt="Omnifood logo" class="logo" >
                    <img src="{{App\page::find(0)->images->get(2)->path}}" alt="Omnifood logo" class="logo-black" >

                    <ul class="main-nav js--main-nav">

                    @foreach($navs as $nav)
                        <li> <a href="#{{$nav->tag}}"  >{{$nav->name}}</a> </li>
                    @endforeach

                    </ul>
                    <a  class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>

                </div>

</nav>