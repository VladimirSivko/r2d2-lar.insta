<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Picture;

class PictureController extends Controller {

    /**
     * Создание нового экземпляра контроллера.
     *
     * @return void
     */
    public function __construct() {
	$this->middleware('auth');
    }

    /**
     * Отображение списка всех задач пользователя.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request) {
	return view('pictures.index');
    }

    public function store(Request $request) {

	$picture = new Picture($request->except('img'));
	if ($request->hasFile('img')) {
	    $file = $request->file('img');
	    $destinationPath = public_path() . '/house/uploads/';
	    $filename = str_random(20) . '.' . $file->getClientOriginalExtension() ?: 'png';
	    $page->img = $filename;
	    if ($request->hasFile('img')) {
		$request->file('img')->move($destinationPath, $filename);
	    }
	}
	$picture->save();

	return redirect()->route('picture.index');
    }

}
