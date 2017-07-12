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

                             <form method="post" action="{{route('page.store')}}">
                             <input name="template_id" value="{{$template->id}}" hidden>
                             {{csrf_field()}}


                             @include('panel.pages.Createpages.'.$template->file_name);



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