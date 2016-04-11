@extends('master')

@section('title','Lista kategorii')
@section('content')
    <h3>Lista kategorii</h3>
        <div class="row">
            <div class="col-sm-12 text-right">
                <a class="btn btn-primary btn-xs" href="{{ route('new_category') }}">Nowa kategoria +</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th>Nazwa kategorii</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>
                            <a href="{{ route('tasks_from_category',[$category->id]) }}">{{ $category->name }}</a>
                        </td>
                        <td class="text-right">
                            <span class="badge">{{$category->task->count()}}</span>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection
