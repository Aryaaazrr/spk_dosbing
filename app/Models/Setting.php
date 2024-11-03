<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public const TITLE = 'title';
    public const KEYWORD = 'keyword';
    public const DESCRIPTION = 'description';
    public const LOGO = 'logo';
    protected $table = 'tbl_setting';

    protected $fillable = [
        'key',
        'locale',
        'value',
        'additional_value',
        'json_value',
        'additional_json_value',
    ];

    public function scopeKey($query, $key)
    {
        return $query->where('key', $key);
    }

    public function scopeLocale($query, $lang)
    {
        return $query->whereLocale($lang);
    }

    public function getJsonValueAttribute($value)
    {
        return json_decode($value);
    }

    public function getAdditionalJsonValueAttribute($value)
    {
        return json_decode($value);
    }
}