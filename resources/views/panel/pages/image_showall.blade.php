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

        table td {

          padding: 2px;
          margin: 2px;

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
                         <a type="button" class="btn btn-success" id="createbtn" href="{{route('image.upload')}}">Upload </a>
                         <br><br><br>

                            <table>

                              <tbody>

                            @foreach($images as $key=>$image)

                                @if($key%6==0)
                                <tr>
                                @endif

                                <td>
                                  <table id="intable" >
                                      <tr>
                                        <td>

                                          <img style="max-width: 150px; max-height: 150px;" src="{{asset($image->path)}}">
                                           </td>

                                     </tr>

                                        <tr>
                                           <td> <label> Name : {{$image->name}} </label> <br></td>

                                         </tr>
                                         <tr>
                                          <td> <label> Alt : {{$image->description}} </label></td>

                                          </tr>
                                          <tr>
                                            <td>  <a type="button" class="btn btn-danger" id="createbtn" href="{{route('image.destroy',['image' => $image->id])}}">Delete </a>  </td>

                                          </tr>

                                     </table>
                                  </td>


                               @if($key%6==5)
                                </tr>
                                @endif

                              @endforeach



                              </tbody>
                            </table>


                        </div>







                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->


@endsection('content')