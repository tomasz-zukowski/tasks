@extends('master')
@section('header')
<script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js') }}">
$(document).ready(function() {
    CKEDITOR.replace( 'ckeditor',
    {
        customConfig : 'config.js',
        toolbar : 'simple'
    })
});
</script>
<style type="text/css" rel="stylesheet">
.labels label {
    float: left;
    border: 1px solid silver;
    min-width: 100px;
    padding: 5px;
    text-align: center;
    border-radius: 5px;
    margin-right: 5px;
    font-weight: normal;
    padding-top: -10px;
}
.labels label:hover {
    background-color: #dddddd;
}

.labels:after {
  content:'';
  display:block;
  clear:both;
}
</style>
@endsection

@section('title','Dodawanie nowego zadania')

@section('content')
<h4>Dodawanie nowego zadania</h4>
<form method="POST" enctype="multipart/form-data" autocomplete="off">
    {!! csrf_field() !!}
    <label>Kategoria</label>
    <select name="category" class="form-control input-sm" style="width: 300px;" required>
    @foreach($categories as $category)
    <option value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
    </select>

    <label>Tytuł</label>
    <input type="text" placeholder="Tytuł zadania" name="title" required class="form-control input-sm">

    <label>Opis zadania</label>
    <textarea placeholder="Opis zadania" name="description" required class="ckeditor" rows="6"></textarea>

    <label>Tagi</label>
    <input type="text" class="form-control" name="tags" />

    <label>Cel zadania</label>
    <textarea placeholder="Cel zadania" name="target" class="ckeditor" rows="3"></textarea>
    <input type="file" name="target_file" class="form-control input-sm" />

    <label>Poziom trudności</label>
    <div class="labels">
    @foreach($levels as $level)
        <label><input type="radio" name="level" value="{{ $level->id }}" required> {{ $level->levelName }}</label>
    @endforeach
    </div>

    <label>Punkty</label>
    <input type="number" name="points" min="10" step="10" style="width: 300px;" class="form-control input-sm" required>

    <label>Czas na realizację [min]</label>
    <input type="number" name="time" min="5" step="5" style="width: 300px;" class="form-control input-sm" required>

    <br />

    <input type="submit" class="btn btn-primary btn-sm" value="Zapisz zadanie" style="float: right;">
    <input type="reset" class="btn btn-info btn-sm" value="Wyczyść" style="float: right; margin-right: 5px;">
</form>
@endsection