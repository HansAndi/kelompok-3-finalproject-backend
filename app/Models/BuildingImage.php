<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuildingImage extends Model
{
    use HasFactory;

    protected $fillable = ['building_id', 'image'];

    public function building()
    {
        return $this->belongsTo(Building::class);
    }
}
