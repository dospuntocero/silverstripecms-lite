<?php
class Attachment extends File {

	static $belongs_many_many = array(
		'Pages' => 'Page',
	);

	public static $default_sort = "Sorting ASC";

}