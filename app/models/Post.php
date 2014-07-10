<?php

class Post extends Eloquent {
    protected $table      = 'posts';
    protected $softDelete = true;

    public function category()
    {
    	return $this->belongsTo('Category', 'post_category');
    }

}