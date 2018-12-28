@extends('layouts.app')

@section('content')

<!-- Bootstrap шаблон... -->

<div class="panel-body">
    <!-- Отображение ошибок проверки ввода -->
    @include('common.errors')

    <!-- Форма добавления изображения -->
    <form action="/admin/picture" enctype="multipart/form-data" method="post">
	{{ csrf_field() }}
	<div class="form-group">
	    <input type="text" name="title" class="form-control" placeholder="Заголовок">
            <input type="hidden" name="path_to_picture"/>
	</div>
	<div class="form-group">
	    <input type="file" name="image" accept="image/*">
	</div>
	<button type="submit" class="btn btn-default btn-block">Добавить картинку</button>
    </form>
</div>

<!-- TODO: Текущие задачи -->
@endsection