<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model
{
    use SoftDeletes;
    /**
     * [$table description]
     * @var string
     */
    protected $table= 'reports';

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
        'report_table_id',
        'report_table_type',
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
     * Get all of the owning reportTable models.
     */
    public function reportTable()
    {
        return $this->morphTo();
    }
}

class Post extends Model
{
    /**
     * Get all of the post's reports.
     */
    public function reports()
    {
        return $this->morphMany('App\Models\Report', 'reportTable');
    }
}

class Confession extends Model
{
    /**
     * Get all of the confession's reports.
     */
    public function reports()
    {
        return $this->morphMany('App\Models\Report', 'reportTable');
    }
}
