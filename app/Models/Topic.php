<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Topic extends Model
{
    use SoftDeletes;
    /**
     * [$table description]
     * @var string
     */
    protected $table = 'topics';

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
        'name',
        'images',
        'slug',
        'status',
        'set_time',
        'select_time',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * Get posts: One to many
     * @return [type] [description]
     */
    public function posts()
    {
        return $this->hasMany('App\Models\Post', 'topic_id');
    }

    /**
     * Get users: Many to many
     * @return [type] [description]
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
