<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Support\Str;

class Makam extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $table = 'tbl_makam';
    protected $keyType = 'string';
    public $incrementing = false;
    public static function boot() {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }

     /**
     * Get the ahli_waris that owns the Makam
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ahliwaris()
    {
        return $this->belongsTo(AhliWaris::class);
    }

    /**
     * Get the tpu that owns the Makam
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tpu()
    {
        return $this->belongsTo(Tpu::class);
    }

}
