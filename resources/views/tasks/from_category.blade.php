@extends('master')
@section('title','Lista zadań z kategorii')

@section('content')
<div class="row">
    <div class="col-sm-8">
        <h3>Kategoria <b>{{ $category->name }}</b></h3>
        @if(!empty($category->description))
        <blockquote><i>{!! $category->description !!}</i></blockquote>
        @endif
    </div>
    <div class="col-sm-4 text-right">
        <a class="btn btn-xs btn-warning fa fa-pencil" href="{{ route('edit_category',$category->id) }}"> Edytuj</a>
    </div>
</div>
    <h4>Lista zadań: </h4>
    <ul class="list-group">
        @if(count($tasks)!=0)
            @foreach($tasks as $task)
                <li class="list-group-item">
                    <span class="badge"></span>
                    <h4 class="list-group-item-heading">
                        <a href="{{ route('task_details', [$task->id]) }}">{{ $task->title }}</a>
                    </h4>
                    <p class="list-group-item-text">
                        @if(strlen($task->target)<300)
                        {!! $task->target !!}
                        @else
                        {!! substr($task->target,0,300) !!}<a href="{{ route('task_details', [$task->id]) }}">... Czytaj dalej</a>
                        @endif
                        <span class="tags italic">
                            @forelse($task->tags as $tag)
                                <span>{{ $tag->name }}</span>
                            @empty
                                Brak tagów
                            @endforelse
                        </span>
                    </p>
                </li>
            @endforeach
        @else
            <h5>Brak zarejestrowanych zadań dla wybranej kategorii.</h5>
        @endif
    </ul>
@endsection