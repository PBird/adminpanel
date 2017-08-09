@extends('panel.layouts.master')

@section('extracss')


    <link href={{asset("adminpanel/vendor/morrisjs/morris.css")}} rel="stylesheet">


@endsection('extracss')


@section('content')


@include('panel.layouts.nav')



@endsection('content')


@section('exscripts')

    <!-- Morris Charts JavaScript -->
    <script src={{asset("adminpanel/vendor/raphael/raphael.min.js")}}></script>
    <script src={{asset("adminpanel/vendor/morrisjs/morris.min.js")}}></script>
    <script src={{asset("adminpanel/data/morris-data.js")}}></script>


@endsection('exscripts')



