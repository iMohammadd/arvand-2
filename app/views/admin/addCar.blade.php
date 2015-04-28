@extends('master')
@section('title') لیست خودروها @endsection
@section('head')
    <script>
        var editor = CKEDITOR.inline('info');
    </script>
@endsection
@section('heading')
افزودن خودرو
@endsection
@section('body')
    @include('cars.add')
@endsection
@section('sidebar')
    @include('sidebar')
@endsection