 <div class="form-group">
 <label style="font-size:125%;">Update Page</label>

                               <label>Title</label>
                                 <input name="Pagetitle" class="form-control" placeholder="name" value="{{$page->title}}">

                               <!-- <label>Insert Media</label>
                                 <a rel="1" type="button" class="btn btn-outline btn-default newWindow" >Media</a><br> -->
                                  <label>NavTag</label>
                               <select name="nav_id" class="form-control" >
                                          <option value="0" @if(!$page->nav()->exists()) selected @endif>none</option>
                                          @foreach($navs as $nav)
                                                <option value="{{$nav->id}}" @if($page->nav()->exists() && $nav->id==$page->nav->id) selected @endif >{{$nav->name}}</option>
                                           @endforeach
                                </select>
                                 <label>Placement</label>
                                 <input name="placement" class="form-control" placeholder="Placement no" value="{{$page->placement}}">


                            </div>



                            <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Contents
                                    </div>
                                    <!-- .panel-heading -->
                                    <div class="panel-body">
                                        <div class="panel-group" id="accordion">

                        @foreach($page->features as $key => $feature)
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$key}} " aria-expanded="false" class="collapsed"> Content {{$key+1}}</a>
                                        </h4>
                                    </div>
                                    <div id="collapse{{$key}}" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">

                                            <label>Product Name </label>
                                       <input name="title[]" class="form-control" placeholder="Name" value="{{$feature->title}}">


                                       <label> Information of product </label>
                                       <textarea rows="4" name="content[]" class="form-control" placeholder="Content">{{$feature->content}}</textarea>

                                        <label>Price </label>
                                       <input name="icon[{{$key}}][0][name]" class="form-control" placeholder="icon" value="{{$feature->icons->get(0)->name}}" type="hidden">
                                        <input name="icon[{{$key}}][0][description]" value="{{$feature->icons->get(0)->description}}">

                                        <label>Per </label>
                                       <input name="icon[{{$key}}][1][name]" class="form-control" placeholder="icon" value="{{$feature->icons->get(1)->name}}" type="hidden">
                                        <input name="icon[{{$key}}][1][description]" value="{{$feature->icons->get(1)->description}}">

                                        <br>

                                     @for( $j=0; $j< 4; $j++ )

                                       <label>Property {{$j+1}} </label>
                                       <input name="icon[{{$key}}][{{$j+2}}][name]" class="form-control" placeholder="icon" value="{{$feature->icons->get($j+2)->name}}">
                                       <label>Description of Property {{$j+1}} </label>
                                        <input name="icon[{{$key}}][{{$j+2}}][description]" value="{{$feature->icons->get($j+2)->description}}">

                                        <br>
                                      @endfor

                                        @for( $j=0; $j< 1; $j++ )
                                        <label> Button href </label>
                                        <input name="link[{{$key}}][{{$j}}][href]" class="form-control" placeholder="link" value="{{$feature->buttons->get($j)->href}}">
                                        <label> Button Name </label>
                                        <input name="link[{{$key}}][{{$j}}][name]" class="form-control" placeholder="link" value="{{$feature->buttons->get($j)->name}}" >


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

                                </div>


                            </div>
                        </div>
                        <!-- .panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>


   <div class="form-group">
                             <button type="submit" class="btn btn-success " id="update" > Update </button>

                            <fieldset id="groupp">
                               <div class="radio">
                                    <label>
                                        <input type="radio" name="status" id="optionsActive" value="1" @if($page->status==1) checked @endif > Active
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="status" id="optionsPassive" value="0" @if($page->status==0) checked @endif > Passive
                                    </label>
                                </div>
                              </fieldset>
                        </div>


                          </form>
