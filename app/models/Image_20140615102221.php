<?php

class Image extends Eloquent {
	const TYPE_CASE       = 1;//案例
	const TYPE_HOME_SLIDE = 2;//首页slide

	protected $table    = 'images';
	public  $timestamps = false;

	/**
	 * 查询案例的图片
	 *
	 * @param Builder $query
	 *
	 * @return Builder
	 */
	public function scopeCases($query)
	{
		return $query->whereType(static::TYPE_CASE);
	}

	/**
	 * 查询首页的图片
	 *
	 * @param Builder $query
	 *
	 * @return Builder
	 */
	public function scopeHomeSlide($query)
	{
		return $query->whereType(static::TYPE_HOME_SLIDE);
	}

	/**
	 * 设置案例图片
	 * 
	 * @param array $images
	 * @param integer $caseId
	 *
	 * @return void
	 */
	public static function setCaseImages($images, $caseId)
	{
		self::where('case_id', $caseId)->delete();
		$inserts = array();
		foreach (array_values($images) as $sort => $imgSrc) {
			if (!empty($imgSrc)) {
				$inserts[] = array(
							  'case_id' => $caseId,
							  'src'     => $imgSrc,
							  'sort'    => $sort,
							  'type'    => static::TYPE_CASE,
							 );
			}
		}

		self::insert($inserts);
	}

	/**
	 * 设置首页幻灯版
	 *
	 * @param array $images
	 *
	 * @return void
	 */
	public static function setHomeSlideImages($images, $links)
	{
		//Log::info($images);
		self::whereType(static::TYPE_HOME_SLIDE)->delete();
		$inserts = array();
		$i = 0;
		foreach (array_values($images) as $sort => $imgSrc) {
			$link = !empty($links[$i]) ? $links[$i] : '';
			$i++;
			if (!empty($imgSrc)) {
				$inserts[] = array(
							  'case_id' => 0,
							  'src'     => $imgSrc,
							  'link'    => $link,
							  'sort'    => $sort,
							  'type'    => static::TYPE_HOME_SLIDE,
							 );
			}
		}

		self::insert($inserts);
	}

	/**
	 * 获取案例图片
	 *
	 * @return Collection
	 */
	public static function getCaseImages($caseId)
	{
		return self::whereType(static::TYPE_CASE)->whereCaseId($caseId)->orderBy('sort', 'DESC')->get();
	}

	/**
	 * 获取首页slide图片
	 *
	 * @return Collection
	 */
	public static function getHomeSlideImages()
	{
		return self::whereType(static::TYPE_HOME_SLIDE)->orderBy('sort', 'ASC')->get();
	}
}