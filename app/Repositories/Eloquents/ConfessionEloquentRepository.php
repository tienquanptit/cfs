<?php
/**
 * Created by PhpStorm.
 * User: quantien
 * Date: 10/31/18
 * Time: 2:39 PM
 */

namespace App\Repositories\Eloquents;


use App\Models\Confession;
use App\Repositories\Contracts\ConfessionRepository;

class ConfessionEloquentRepository extends AbstractEloquentRepository implements ConfessionRepository
{
    public function model()
    {
        // TODO: Implement model() method.
        return new Confession;
    }

    public function getAll($data = [])
    {
        // TODO: Implement getAll() method.
        return $this->model()->all();
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
        $model = $this->model()->findOrFail($id);

        return $model->delete();
    }
}

//Note: Dam nhan vai tro chinh tuong tac voi Model.