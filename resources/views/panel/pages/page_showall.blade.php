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

@include('panel.layouts.errors')
@include('panel.layouts.confirm')
                         <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Template</th>
                                        <th>Title</th>
                                        <th>NavTag</th>
                                        <th>Created</th>
                                        <th>Updated</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                  @foreach($pages as $page)

                                   <tr class="odd gradeX">
                                    <td> <label>
                                       <input type="checkbox" value=" {{$page->id}} ">
                                        </label></td>
                                          <td>{{$page->template->name}}</td>
                                          <td>{{str_limit($page->title,15) }}</td>
                                          @if($page->nav()->exists())
                                          <td>{{$page->nav->name}}</td>
                                          @else
                                          <td> none </td>
                                          @endif

                                          <td>{{$page->created_at}}</td>
                                         <td>{{$page->updated_at}}</td>



                                        <td>
                                        @if($page->status==1)
                                        <p class="fa fa-plus"> Active</p>
                                        @else <p class="fa fa-minus"> Passive </p>
                                        @endif </td>
                                          <td> <a type="button" class="btn btn-warning" style="margin-right:8px" href="{{route('page.edit',['id' => $page->id ])}}">Edit</a>
                                        <a type="button" class="btn btn-danger" href="{{route('page.delete',['page' => $page->id ])}}">Delete</a>  </td>

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
