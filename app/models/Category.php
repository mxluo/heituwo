<?php

class Category extends Eloquent {

	const TYPE_INDUSTRY  = 1; // 行业
	const TYPE_SPECIALTY = 2; // 专业

    protected $table    = 'categories';
    public  $timestamps = false;

    public function scopeIndustry($query)
    {
    	return $query->whereType(static::TYPE_INDUSTRY);
    }

    public function scopeSpecialty($query)
    {
    	return $query->whereType(static::TYPE_SPECIALTY);
    }
}