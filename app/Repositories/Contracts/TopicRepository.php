<?php
/**
 * Created by PhpStorm.
 * User: quantien
 * Date: 11/2/18
 * Time: 12:58 PM
 */

namespace App\Repositories\Contracts;

use App\Models\Topic;

interface TopicRepository extends AbstractRepository
{
    public function getAll($data = []);

    public function store($data = []);

    public function find($id);

    public function update($id, $data = []);

    public function show($id);

    public function delete($id);
}