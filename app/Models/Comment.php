<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;
    /**
     * [$table description]
     * @var string
     */
    protected $table= 'comments';

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
        'parent_id',
        'content',
        'comment_table_id',
        'comment_table_type',
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
     * Get all of the owning commentTable models.
     */
    public function commentTable()
    {
        return $this->morphTo();
    }
}

class Post extends Model
{
    /**
     * Get all of the post's comments.
     */
    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentTable');
    }
}

class Confession extends Model
{
    /**
     * Get all of the confession's comments.
     */
    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentTable');
    }
}
