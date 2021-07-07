
<?php
$h2='My To Do List';
$btn_name='Add';
$myTask='';
?>

@extends('layouts.master')

@section('content')
{{--    //adminheader--}}

    @include('partials.errors')
{{--    @if(Session::has('info'))--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <p class="alert alert-info">{{ Session::get('info') }}</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endif--}}
    <form action="{{ route('admin.create') }}" method="post">
        {{--    @if()--}}
        {{--    <a href="">Login</a>--}}
        {{--    <a href="">SignUp</a>--}}
        {{--    <a href="">Logout</a>--}}

        <div id="myDIV" class="header">
            <h2>{{$h2}}</h2>
            {{csrf_field()}}
            <input type="text" class="addInput" id="title" name="title" placeholder="Title..." value={{$myTask}}>
            <button type="submit" class="addBtn">{{$btn_name}}</button>
        </div>
    </form>


{{--    //container--}}


    @foreach($tasks as $task)
    <ul id="myUL">
        <li>
            <div class="task"> {{ $task->title }} </div>
            <div class="action">
                <a href="{{ route('admin.edit', ['id' => $task->id]) }}"><i class="fa fa-edit"></i></a>
            </div>
            <div class="action">
                <a href="{{route('admin.delete',['id'=>$task->id])}}"><i class="fa fa-trash-alt"></i></a>
            </div>
        </li>
    </ul>
    @endforeach
@endsection
