@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->name }}</h3>
                </div>
            </div>
        </aside>
        <div class="col-xs-8">
            <!--<ul class="nav nav-tab nav-justified">-->
            <!--    <li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}">-->
            <!--        <a href="{{ rote('users.show', ['id' => $user->id] }}">Microposts-->
            <!--        <span class="badge">{{ $count_microposts }}</span></a>-->
            <!--    </li>-->
            <!--    <li><a href="#">Followings</a></li>-->
            <!--    <li><a href="#">Followers</a></li>-->
            <!--</ul>-->
            <!--@if (count($microposts) > 0)-->
            <!--    @include('microposts.microposts', ['microposts' => $microposts])-->
            <!--@endif-->
        </div>
    </div>
@endsection