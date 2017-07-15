<form method="post" action="{{route('page.update',['page'=> 0])}}">
                      {{csrf_field()}}


                      <?php $page = App\page::find(0);?>
 <div class="form-group">
 <label style="font-size:125%;">Update Page</label>
 <br>

                               <label>Hero Text</label>
                                 <input name="Pagetitle" class="form-control" placeholder="Hero Text" value="{{$page->title}}">


                            </div>

                           <label> Button 1 name </label>
                                   <input name="Pagelinks[0][name]" class="form-control" placeholder="name" value="{{$page->buttons->get(0)->name}}" >
                            <label> Button 1 href </label>
                                    <input name="Pagelinks[0][href]" class="form-control" placeholder="link" value="{{$page->buttons->get(0)->href}}">
                            <label> Button 2 name </label>
                                   <input name="Pagelinks[1][name]" class="form-control" placeholder="name" value="{{$page->buttons->get(1)->name}}" >
                            <label> Button 2 href </label>
                                    <input name="Pagelinks[1][href]" class="form-control" placeholder="link" value="{{$page->buttons->get(1)->href}}">


                            <label>Background Image</label>
                                 <select name="Pageimage[]" class="form-control">
                                          @foreach($images as $image)
                                                <option value="{{$image->id}}" @if($page->images->get(0)->id==$image->id) selected @endif >{{$image->name}}</option>
                                           @endforeach
                               </select>

                            <label> Logo </label>
                                 <select name="Pageimage[]" class="form-control">
                                          @foreach($images as $image)
                                                <option value="{{$image->id}}" @if($page->images->get(1)->id==$image->id) selected @endif >{{$image->name}}</option>
                                           @endforeach
                               </select>

                            <label> Logo on Sticky</label>
                                 <select name="Pageimage[]" class="form-control">
                                          @foreach($images as $image)
                                                <option value="{{$image->id}}" @if($page->images->get(2)->id==$image->id) selected @endif >{{$image->name}}</option>
                                           @endforeach
                               </select>

                                <input type="radio" name="status" id="optionsActive" value="0" hidden checked>

                                <button type="submit" class="btn btn-success " id="update" > Save </button>

                          </form>






