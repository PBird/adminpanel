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

          margin-left:8px;
          margin-right: 10px;
          margin-bottom: 10px;
          float:right;
          padding: 10px 10px 10px 10px;



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
                         <a type="button" class="btn btn-success" id="createbtn" href="{{route('nav.create')}}">Create New</a>

                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>

                                        <th>Name</th>
                                        <th>Associated Page</th>
                                        <th>Tag</th>
                                        <th>Created</th>
                                        <th>Updated</th>
                                        <th>Status</th>

                                    </tr>
                                </thead>
                                <tbody>

                                  @foreach($navs as $nav)

                                   <tr class="odd gradeX">
                                          <td>{{$nav->name}}</td>
                                          <td>{{$nav->page_id}}</td>
                                          <td>{{$nav->tag}}</td>
                                          <td>{{$nav->created_at}}</td>
                                          <td>{{$nav->updated_at}}</td>
                                        <td>
                                        @if($nav->status==1)
                                        <p class="fa fa-plus"> Active</p>
                                        @else <p class="fa fa-minus"> Passive </p>
                                        @endif </td>
                                          <td> <a type="button" class="btn btn-warning" style="margin-right:8px" href="{{route('nav.edit',['id' => $nav->id ])}}">Edit</a>
                                        <a type="button" class="btn btn-danger" href="{{route('nav.delete',['nav' => $nav->id ])}}">Delete</a>  </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->

                        </div>







                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->


@endsection('content')