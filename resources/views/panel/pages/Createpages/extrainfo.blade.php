 <div class="form-group">
 <label style="font-size:125%;">Create <span style="color:red;">{{$template->name}}</span> Page</label>

                               <label>Title</label>
                                 <input name="Pagetitle" class="form-control" placeholder="name" value="">


                               <!-- <label>Insert Media</label>
                                 <a rel="1" type="button" class="btn btn-outline btn-default newWindow" >Media</a><br> -->
                                <label>NavTag</label>
                               <select name="nav_id" class="form-control">
                                          <option value="0" >none</option>
                                          @foreach($navs as $nav)
                                                <option value="{{$nav->id}}" >{{$nav->name}}</option>
                                           @endforeach
                                </select>

                                 <label>Placement</label>
                                 <input name="placement" class="form-control" placeholder="Placement no" value="">
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



                          @for ($i = 0; $i < 4; $i++)
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$i}} " aria-expanded="false" class="collapsed"> Content {{$i+1}}</a>
                                        </h4>
                                    </div>
                                    <div id="collapse{{$i}}" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                            <label>Title</label>
                                       <input name="title[]" class="form-control" placeholder="title" value="">



                                 @for( $j=0; $j< 1; $j++ )
                                 <label>Image (900x600)</label>
                                 <select name="Featureimage[{{$i}}][{{$j}}]" class="form-control">
                                          <option value="0" >none</option>
                                          @foreach($images as $image)
                                                <option value="{{$image->id}}" >{{$image->name}}</option>
                                           @endforeach
                                 </select>
                                  @endfor


                                 @for( $j=0; $j< 3; $j++ )

                                       <label>Icon {{$j+1}} </label>
                                       <input name="icon[{{$i}}][{{$j}}][name]" class="form-control" placeholder="icon" value="">
                                       <label>Description of Icon {{$j+1}} </label>
                                        <input name="icon[{{$i}}][{{$j}}][description]" value="">
                                 @endfor

                                 @for( $j=0; $j<1; $j++ )
                                    <label>Link </label>
                                    <input name="link[{{$i}}][{{$j}}][href]" class="form-control" placeholder="link" value="">
                                    <input name="link[{{$i}}][{{$j}}][name]" class="form-control" placeholder="link" value="" type="hidden">
                                  @endfor


                                       <label>Content</label>
                                       <textarea rows="4" name="content[]" class="form-control" placeholder="Content"></textarea>

                                       <fieldset id="group{{$i}}">
                                           <div class="radio">
                                           <label>
                                              <input type="radio" name="statusFeature[{{$i}}]" id="optionsActive" value="1" checked> Active
                                          </label>
                                          </div>
                                           <div class="radio">
                                          <label>
                                              <input type="radio" name="statusFeature[{{$i}}]" id="optionsPassive" value="0" > Passive
                                          </label>
                                              </div>
                                       </fieldset>
                                       </div>
                                     </div>
                                   </div>
                                 @endfor

                                </div>


                            </div>
                        </div>
                        <!-- .panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>


   <div class="form-group">
                             <button type="submit" class="btn btn-success " id="update" > Create </button>

                             <fieldset id="groupp">
                               <div class="radio">
                                    <label>
                                        <input type="radio" name="status" id="optionsActive" value="1" checked> Active
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="status" id="optionsPassive" value="0" > Passive
                                    </label>
                                </div>
                              </fieldset>
                        </div>


                          </form>
