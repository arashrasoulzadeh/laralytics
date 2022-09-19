<?php

namespace arashrasoulzadeh\Laralytics\Traits;

trait StorageTrait
{
    public function store( string $key, $value )
    {
        \Illuminate\Support\Facades\Storage::set($key,$value);
    }
    public function retrieve( string $key, $default )
    {
        \Illuminate\Support\Facades\Storage::get($key,$default);
    }
}
