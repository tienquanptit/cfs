<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Follow extends Model
{
    use SoftDeletes;
    /**
     * [$table description]
     * @var string
     */
    protected $table= 'follows';

    /**
     * [$dates description]
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * [$fillable description]
     * @var [type]
     */
    protected $fillable = [
        'user_id',
        'follow_table_id',
        'follow_table_type',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * Get users: One to many
     * @return [type] [description]
     */
    public function users() {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    /**
     * Get all of the owning followTable models.
     */
    public function followTable()
    {
        return $this->morphTo();
    }
}

class User extends Model
{
    /**
     * Get all of the user's follows.
     */
    public function follows()
    {
        return $this->morphMany('App\Models\Follow', 'followTable');
    }
}

class Topic extends Model
{
    /**
     * Get all of the topic's follows.
     */
    public function follows()
    {
        return $this->morphMany('App\Models\Follow', 'followTable');
    }
}
