<?php

class Cases extends Eloquent {
    protected $table      = 'cases';
    protected $softDelete = true;

    /**
     * 案例图片
     *
     * @return Builder
     */
    public function images()
    {
    	return $this->hasMany('Image', 'case_id')->orderBy('sort', 'ASC');
    }

    /**
     * 获取案例第一张图片
     *
     * @return string
     */
    public function case_image()
    {
        $images = $this->images->toArray();

        return array_get(array_shift($images), 'src');
    }
}