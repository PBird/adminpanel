@extends('panel.layouts.master')

@section('extracss')

  <style type="text/css">

        .form-group
        {

            width: 55%;
            margin:2% auto;

        }
        button {
            width: 25%;
            margin:10px auto;

        }
         label {
          width: 50%;
          margin: 1% auto;
        }

  </style>

@endsection('extracss')

@section('content')

@include('panel.layouts.nav')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">

                          @include('panel.layouts.errors')
                          @include('panel.layouts.confirm')

                             <form method="post" action="{{route('nav.store')}}">

                             {{csrf_field()}}


                               <label>Name</label>
                               <input name="name" class="form-control" placeholder="Name" value="">

                               <label>Tag</label>
                               <input name="tag" class="form-control" placeholder="tag" value="">

                                <fieldset id="group 0">
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


                           <button type="submit" class="btn btn-success " id="update" > Create </button>


                            </form>




                         </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->


@endsection('content')