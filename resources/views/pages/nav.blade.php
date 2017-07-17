<nav >

                <div class="row">

                    <img src="{{App\page::find(0)->images->get(1)->path}}" alt="Omnifood logo" class="logo" >
                    <img src="{{App\page::find(0)->images->get(2)->path}}" alt="Omnifood logo" class="logo-black" >

                    <ul class="main-nav">

                    @foreach($navs as $nav)
                        <li> <a href="#{{$nav->tag}}"  >{{$nav->name}}</a> </li>
                    @endforeach


                    </ul>

                </div>

</nav>