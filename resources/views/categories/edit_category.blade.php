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
@endsection
@section('title','Edycja kategorii')
@section('content')
    <h4>Edycja kategorii</h4>
    <form method="POST">
        <label>Nazwa kategorii</label>
        <input type="text" class="form-control" name="category_name" placeholder="Nazwa kategorii" value="{{$category->name}}" style="width: 300px;" required />
        <label>Opis</label>
        <textarea class="ckeditor" name="description" placeholder="Opis kategorii">{!!$category->description!!}</textarea>
        <br />
        <input type="submit" value="Zapisz zmiany" class="btn btn-sm btn-primary">
    </form>
@endsection