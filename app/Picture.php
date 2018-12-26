<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model {

    /**
     * Массово присваиваемые атрибуты.
     *
     * @var array
     */
    protected $fillable = ['path_to_picture'];

    /**
     * Получить пользователя - владельца данной задачи
     */
    public function user() {
	return $this->belongsTo(User::class);
    }

}
