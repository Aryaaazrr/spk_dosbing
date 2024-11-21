<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Kriteria extends Model
{
    protected $table = 'tbl_kriteria';

    protected $primaryKey = 'id_kriteria';

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
            $model->id_kriteria = Str::uuid();
        });
    }

    public function aspek()
    {
        return $this->belongsTo(Aspek::class, 'id_aspek', 'id_aspek');
    }

    public function subkriteria()
    {
        return $this->hasMany(Subkriteria::class, 'id_kriteria', 'id_kriteria');
    }

    public function profile()
    {
        return $this->hasMany(Profile::class, 'id_kriteria', 'id_kriteria');
    }
}