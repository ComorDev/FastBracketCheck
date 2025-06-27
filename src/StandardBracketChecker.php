<?php

namespace ComorDev\FastBracketCheck;

class StandardBracketChecker
{
	public static function isValid($code)
	{
		$stack = [];
		$length = mb_strlen($code, 'UTF-8');

		for ($i = 0; $i < $length; $i++) {
			$char = mb_substr($code, $i, 1, 'UTF-8');

			if ($char === '{') {
				$stack[] = '{';
			} elseif ($char === '}') {
				if (empty($stack)) {
					return false;
				}
				array_pop($stack);
			}
		}

		return empty($stack);
	}
}