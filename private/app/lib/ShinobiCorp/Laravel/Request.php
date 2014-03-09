<?php namespace ShinobiCorp\Laravel;

class Request extends \Illuminate\Support\Facades\Request {
	public static function addClassIfActive($name, $classNames, $addClassAttribute = true, $prefixSpace = true) {
		$buffer = (string)'';

		if(Request::is($name)) {
			$buffer = $classNames;
			if($addClassAttribute) $buffer = 'class="'.$buffer.'"';
			if($prefixSpace) $buffer = ' ' . $buffer;
		}

		return $buffer;
	}
}