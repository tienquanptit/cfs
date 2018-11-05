<?php
/**
 * Created by PhpStorm.
 * User: quantien
 * Date: 11/2/18
 * Time: 1:00 PM
 */

namespace App\Repositories\Eloquents;


use App\Models\Topic;
use App\Repositories\Contracts\TopicRepository;
use Illuminate\Support\Facades\Auth;

class TopicEloquentRepository extends AbstractEloquentRepository implements TopicRepository
{

    public function model()
    {
        return new Topic;
    }

    public function getAll($data = [])
    {
        return $this->model()->all();
    }

    public function store($data = [])
    {
        return $this->model()->create($data);
    }

    public function find($id)
    {
        return $this->model()->findOrFail($id);
    }

    public function update($id, $data = [])
    {
        $model = $this->model()->findOrFail($id);

        return $model->update($data);
    }

    public function show($id)
    {
        $model = $this->model()->findOrFail($id);

        return $model;
    }

    public function delete($id)
    {
        $model = $this->model()->findOrFail($id);

        return $model->delete();
    }

//    xu ly link anh truoc khi dua vao db
    public function cutLinkImage($image)
    {
        $link_image = '';
//        cut link save database
        $trimmed = explode('/', $image);
        $sizeOf = sizeof($trimmed);
//        dd($trimmed[$sizeOf-1]);
        $link_image = $trimmed[$sizeOf - 1];

        return $link_image;
    }
}