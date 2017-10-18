@extends('layout')
@section('content')
	<div class="container">
		<div class="row">
			<h1>Стати</h1>
		
		@foreach($articles as $article) 
			
			<div class="article">
				<h3>{{ $article->title }}</h3>
				<p class="lead">{{ $article->text }}</p>
				<div class="article__date">Статься добавлена: {{ $article->created_at }}</div>
				<div class="article__trash">
					<a href="{{ route('deleteArticle') }}/{{$article->id}}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
				</div>
			</div>

		@endforeach
		</div>
	</div>
@endsection

