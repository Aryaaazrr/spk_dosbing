<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Aspek extends Model
{
    protected $table = 'tbl_aspek';

    protected $primaryKey = 'id_aspek';

    protected $guarded = [];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id_aspek = Str::uuid();
        });
    }

    public function kriteria()
    {
        return $this->hasMany(Kriteria::class, 'id_aspek', 'id_aspek');
    }
}