<form method="post" action="{{route('page.update',['page'=> 2])}}">
                      {{csrf_field()}}


                      <?php $page = App\page::find(2);?>
 <div class="form-group">
 <label style="font-size:125%;">Update Page</label>
 <br>

                               <label> Footer Text </label>
                                 <input name="Pagetitle" class="form-control" placeholder="Hero Text" value="{{$page->title}}">

   </div>


                          @foreach($page->features as $key => $feature)
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$key}} " aria-expanded="false" class="collapsed"> Content {{$key+1}}</a>
                                        </h4>
                                    </div>
                                    <div id="collapse{{$key}}" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">

                                       <input name="title[]" class="form-control" placeholder="title" value="{{$feature->title}}" type="hidden">


                                @if($feature->icons()->exists())
                                   @for( $j=0; $j< 1; $j++ )

                                         <label>Icon {{$key-4}} </label>
                                         <input name="icon[{{$key}}][{{$j}}][name]" class="form-control" placeholder="icon" value="{{$feature->icons->get($j)->name}}">

                                          <input name="icon[{{$key}}][{{$j}}][description]" value="{{$feature->icons->get($j)->description}}" type="hidden">
                                          <br>
                                   @endfor
                                 @endif

                                 @for( $j=0; $j< 1; $j++ )

                                  <label @if($feature->icons()->exists()) hidden  @endif>Name button </label>
                                    <input name="link[{{$key}}][{{$j}}][name]" class="form-control" placeholder="name" value="{{$feature->buttons->get($j)->name}}" @if($feature->icons()->exists()) type="hidden"  @endif>
                                    <label>Link </label>
                                    <input name="link[{{$key}}][{{$j}}][href]" class="form-control" placeholder="link" value="{{$feature->buttons->get($j)->href}}">

                                  @endfor


                                      <fieldset id="group{{$key}}">
                                           <div class="radio">
                                           <label>
                                              <input type="radio" name="statusFeature[{{$key}}]" id="optionsActive" value="1"  @if($feature->status==1) checked @endif> Active
                                          </label>
                                          </div>
                                           <div class="radio">
                                          <label>
                                              <input type="radio" name="statusFeature[{{$key}}]" id="optionsPassive" value="0" @if($feature->status==0) checked @endif > Passive
                                          </label>
                                              </div>
                                       </fieldset>
                                       </div>
                                     </div>
                                   </div>
                                  @endforeach






                                <input type="radio" name="status" id="optionsActive" value="0" hidden checked>

                                <button type="submit" class="btn btn-success " id="update" > Save </button>

                          </form>