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
                        <div class="form-group">
                             <label>Choose Page Template</label>
                             <form method="get" action="{{route('page.Pagecreate')}}">
                             {{csrf_field()}}
                             <select name='template' class="form-control">
                                     @foreach($templates as $template)
                                        <option  value="{{$template->id}}"> {{$template->name}} </option>
                                   @endforeach
                               </select>
                                     <button type="submit" class="btn btn-success " > Select </button>
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

