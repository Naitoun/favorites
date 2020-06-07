<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    // To change default parameters

    // Table name
    protected $table = 'links';
    // Primary Key
    public $primaryKey = 'id';
    // TImestamps
    public $timestamps = true;

    protected $guarded = [];


    /**
     * Get the category that owns the link
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
