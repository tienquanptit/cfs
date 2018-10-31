<?php
/**
 * Created by PhpStorm.
 * User: quantien
 * Date: 10/31/18
 * Time: 3:08 PM
 */

namespace App\Repositories\Contracts;

use App\Models\Confession;

interface ConfessionRepository extends AbstractRepository
{
    public function getAll($data = []);

    public function destroy($id);
}

?>
