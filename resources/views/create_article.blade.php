@extends('layout');

@section('content')
<div class="container">
	<form action="{{ route('addarticle') }}" method="post">

	  <div class="form-group">
	    <label for="exampleInputEmail1">Тема статьи</label>
	    <input name="title" type="text" class="form-control" placeholder="Тема">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputPassword1">Текст статьи</label>
	    <textarea name='text' class="form-control" rows="10" placeholder="Текст статьи..."></textarea>
	  </div>
{{ csrf_field() }}
	  <button type="submit" class="btn btn-default">Добавить</button>

	</form>
</div>

@endsection()