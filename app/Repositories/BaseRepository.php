<?php
namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository
{
    public function save(Model $model, $data)
    {
        $model->fill($data);
        if (!empty($data['password'])) {
            $model->password = app('hash')->make($data['password']);
        }
        $model->save();
        return $model;
    }
}
