<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Picture;
use Illuminate\Support\Facades\Storage;

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

        if ($request->isMethod('post')) {

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                //$file->move(public_path() . '/pictures', 'filename.img');
                Storage::put('public/images/'.$file->getClientOriginalName(),file_get_contents($request->file('image')->getRealPath()));
            }
            $new_picture = new Picture;
            $new_picture->title = $request->title;
            $new_picture->path_to_picture = $file->getClientOriginalName();
            $new_picture->save();
            return redirect('/pictures');
        }
    }

}
