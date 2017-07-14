@extends('layouts.master')

@section('head')

    @include('pages.head')

@endsection('head')

@section('header')

    @include('pages.nav')
    @include('pages.hero')

@endsection('header')

@section('body')


    @foreach($pages as $page)

        <?php $pageTempname= $page->template->file_name ?>
        @include('pages.'.$pageTempname)



    @endforeach

@section('footer')

    @include('pages.footer')

@endsection('footer')






@endsection('body')
