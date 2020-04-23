<?php

$h2='My #'.$task->id.' task';
$btn_name='Update';
$myTask=$task->title;

?>

@extends('layouts.master')

@section('content')
    {{--    //adminheader--}}

    @include('partials.errors')
    <form action="{{route('admin.update')}}" method="post">
        {{--    @if()--}}
        {{--    <a href="">Login</a>--}}
        {{--    <a href="">SignUp</a>--}}
        {{--    <a href="">Logout</a>--}}

        <div class="header">
            <h2>{{$h2}}</h2>
            {{csrf_field()}}
            <input type="text" class="addInput" id="title" name="title" placeholder="Title..." value="{{$myTask}}">
            <input type="hidden" name="id" value="{{ $task->id }}">
            <button type="submit" class="addBtn">{{$btn_name}}</button>
        </div>
    </form>


    {{--    //container--}}
    @if(Session::has('info'))
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info">{{ Session::get('info') }}</p>
            </div>
        </div>
    @endif

@endsection
