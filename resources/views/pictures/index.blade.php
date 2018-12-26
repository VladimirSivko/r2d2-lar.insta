@extends('layouts.app')

@section('content')

<!-- Bootstrap шаблон... -->

<div class="panel-body">
    <!-- Отображение ошибок проверки ввода -->
    @include('common.errors')

    <!-- Форма добавления изображения -->
    <form action="/admin/page" enctype="multipart/form-data" method="post">
	{{ csrf_field() }}
	<div class="form-group">
	    <input type="text" name="title" class="form-control" placeholder="Заголовок">
	</div>
	<div class="form-group">
	    <input type="file" name="img" accept="image/*">
	</div>
	<button type="submit" class="btn btn-default btn-block">Добавить картинку</button>
    </form>
</div>

<!-- TODO: Текущие задачи -->
@endsection