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

  </style>

@endsection('extracss')

@section('content')

@include('panel.layouts.nav')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                <div class="col-lg-12">
                @include('panel.layouts.errors')
                @include('panel.layouts.confirm')

                        <div class="form-group">

                        @include('panel.pages.Updatepages.'.$page);

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