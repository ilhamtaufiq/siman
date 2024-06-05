<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class AhliWaris extends Model implements HasMedia

{
    use HasFactory;
    use InteractsWithMedia;
    protected $table = "tbl_ahliwaris";

    /**
     * Get all of the makam for the AhliWaris
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function makam()
    {
        return $this->hasMany(Makam::class);
    }
}
