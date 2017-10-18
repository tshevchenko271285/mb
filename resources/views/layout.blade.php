@section('head')
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Первый проект на Laravel</title>
	<link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../public/css/custom.css">
</head>
<body>
@show

@section('menu')
	<div class="container">
		<div class="row">
			<ul class="nav nav-pills">
				<li role="presentation" class="menu_item text-center"><a href="{{ route('index') }}">Главная</a></li>
				<li role="presentation" class="menu_item text-center"><a href="{{ route('about') }}">Обо мне</a></li>
				<li role="presentation" class="menu_item text-center"><a href="{{ route('addarticle') }}">Добваить статью</a></li>
				<li role="presentation" class="menu_item text-center"><a href="{{ route('articles') }}">Статьи</a></li>
				<li role="presentation" class="menu_item text-center"><a href="{{ route('contact') }}">Контакты</a></li>
			</ul>
		</div>
	</div>
@show

@yield('content')


@section('down')
</body>
</html>
@show