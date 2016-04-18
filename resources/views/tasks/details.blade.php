@extends('master')
@section('title','Szczegóły zadania')
@section('head')
<div class="row">
    <div class="col-sm-6"></div>
    <div class="col-sm-6 text-right">
        <a class="btn btn-xs btn-warning fa fa-pencil" href="{{ route('edit_task',$task->id) }}"> Edytuj</a>
    </div>
</div>
@endsection
@section('content')
<h4><a href="{{ route("tasks_from_category",$task->category->id) }}">{{ $task->category->name }}</a> / <i>{{ $task->title }}</i></h4>
<h5><i>{{ $task->created_at }}</i></h5>
<div class="row">
    <div class="col-sm-3">
        <div class="star{{$task->level->level}}">{{ $task->level->levelName }}</div>
    </div>
    <div class="col-sm-2">
        Liczba punktów: <b>{{ $task->points }} pkt</b>
    </div>
    <div class="col-sm-4">
        Czas przewidziany na realizację: <b>{{ $task->time }} min</b>
    </div>
    <div class="col-sm-3">
        Twoja ocena:<br />
        Data przesłania rozwiązania
    </div>
</div>
<div class="row" style="margin-top: 30px;">
    <div class="col-sm-7">
        <h4>Opis zadania:</h4>
        {!! $task->description !!}
        <br />
        <span class="tags italic">
            @forelse($task->tags as $tag)
                <span>{{ $tag->name }}</span>
            @empty
                Brak tagów
            @endforelse
        </span>
    </div>
    <div class="col-sm-5">
        <h4>Cel zadania:</h4>
        @if(!empty($task->target))
        <p>{!! $task->target !!}</p>
            @if(!empty($files))
                @foreach($files as $f)
                    @if(!is_dir($f))
                        <a href="{{asset('uploads/tasks/'.$task->id.'/'.$f)}}">
                            <img class="img-target img-thumbnail" src="{{ asset('uploads/tasks/'.$task->id.'/'.$f) }}"/>
                        </a>
                    @endif
                @endforeach
            @endif
        @else
        <p>Brak szczegółów odnośnie celu zadania. Przeczytaj uważnie opis!</p>
        @endif
    </div>
</div>
@endsection