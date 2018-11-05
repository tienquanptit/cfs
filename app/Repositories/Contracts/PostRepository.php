<?php
/**
 * Created by PhpStorm.
 * User: quantien
 * Date: 11/4/18
 * Time: 6:20 PM
 */

namespace App\Repositories\Contracts;


interface PostRepository extends AbstractRepository
{
    public function getAll($data = []);

    public function show($id);

    public function delete($id);
}