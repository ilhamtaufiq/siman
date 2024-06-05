<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tpu extends Model
{
    use HasFactory;
    protected $table = "tbl_tpu";

    /**
     * Get all of the makam for the Tpu
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function makam()
    {
        return $this->hasMany(Makam::class);
    }
}
