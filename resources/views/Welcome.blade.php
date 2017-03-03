@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        <div class="row">
            <aside class="col-xs-4">
                <h1>ユーザー：{{ $user->name }}</h1>
                <!--<h1>{{ $user->id }}</h1>-->
                {!! Form::open(['route' => ['tasks.store']]) !!}
                    <div class="form-group">
                        {!! Form::label('content', 'Content:') !!}
                        {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '3']) !!}
                        
                        {!! Form::label('status', 'Status:') !!}
                        {!! Form::text('status', old('status'), ['class' => 'form-control']) !!}
                        {!! Form::hidden('id', $user->id) !!}
                    </div>
                    {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                {!! Form::close() !!}
            </aside>
            <div class="col-xs-8">
                @if (count($tasks) > 0)
                    <ul>
                        @foreach ($tasks as $task)
                            <li><h4>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}
                            :{{ $task->status }} > {{ $task->content }}</h4></li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>

    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>タスクリスト</h1>
                {!! link_to_route('login.get', 'Login now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection
