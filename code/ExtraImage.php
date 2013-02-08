<?php
class ExtraImage extends Image {


	static $belongs_many_many = array(
		'Pages' => 'Page'
	);

  public static $default_sort = "Sorting ASC";
}