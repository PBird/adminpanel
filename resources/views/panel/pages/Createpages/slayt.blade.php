 <div class="form-group">
 <label style="font-size:125%;">Create <span style="color:red;">{{$template->name}}</span> Page</label>



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




                              @for ($i = 0; $i < 8; $i++)
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$i}} " aria-expanded="false" class="collapsed"> {{$i+1}}. Image </a>
                                        </h4>
                                    </div>
                                    <div id="collapse{{$i}}" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">

                                      <input name="title[]" class="form-control" placeholder="title" value="" type="hidden">

                                        @for( $j=0; $j< 1; $j++ )
                                 <select name="Featureimage[{{$i}}][{{$j}}]" class="form-control">


                                          @foreach($images as $image)
                                                <option value="{{$image->id}}" >{{$image->name}}</option>
                                           @endforeach
                                 </select>
                                  @endfor


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
