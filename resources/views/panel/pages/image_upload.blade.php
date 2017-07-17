@extends('panel.layouts.master')

@section('extracss')

  <style type="text/css">

        .form-group
        {

            width: 50%;
            margin:10% auto;

        }
        button {
            width: 25%;
            margin:10px auto;

        }
        #createbtn {

          display: block;
          margin-left:8px;
          margin-right: 10px;
          margin-bottom: 10px;
          float:left;
          padding: 10px 10px 10px 10px;



        }
        .listimage {

          display: inline-block;
          float:left;

        }

        .listimage li {
          float: left;
          padding: 5px;
          margin-right: 10px;
          width: 200px;
          max-width: 200px;

        }

  </style>

@endsection('extracss')

@section('content')

@include('panel.layouts.nav')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">

@include('panel.layouts.errors')
@include('panel.layouts.confirm')
                         <div class="panel-body">


                       <form action="{{route('image.store')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                            <div class="form-group">
                                    <label>Image Upload</label>
                                    <input type="file" name="image" value="upload">

                                     <label>Image alt</label>
                                    <input name="description" class="form-control" placeholder="Alt" value="">
                                    <button type="submit" class="btn btn-outline btn-default">Upload Image</button>
                            </div>
                        </form>





                        </div>



                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->


@endsection('content')