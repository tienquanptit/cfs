<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Like extends Model
{
    use SoftDeletes;
    /**
     * [$table description]
     * @var string
     */
    protected $table= 'likes';

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
        'like_table_id',
        'like_table_type',
        'type',
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
    public function likeTable()
    {
        return $this->morphTo();
    }
}

class Post extends Model
{
    /**
     * Get all of the post's likes.
     */
    public function likes()
    {
        return $this->morphMany('App\Models\Like', 'likeTable');
    }
}

class Confession extends Model
{
    /**
     * Get all of the Confession's likes.
     */
    public function comments()
    {
        return $this->morphMany('App\Models\Like', 'likeTable');
    }
}
