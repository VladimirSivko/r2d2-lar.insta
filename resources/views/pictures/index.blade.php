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

@if (count($pictures) > 0)
<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Мои изображения</h2>
    </div>
    <br/>
    <div class="panel-body">
	<dl>
	    @foreach ($pictures as $picture)
	    <dt>{{ $picture->title }}</dt>
            <dd><img src="{{asset('storage/images/'.$picture->path_to_picture)}}" width="400" height="200"></dd>
	    @endforeach
	</dl>
    </div>
</div>
@endif
<!-- TODO: Текущие задачи -->
@endsection