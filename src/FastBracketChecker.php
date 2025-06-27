<?php

namespace ComorDev\FastBracketCheck;

class FastBracketChecker
{
	public static function isValid($code)
	{
		if($code == null ||
			mb_strpos($code, '{') === false && mb_strpos($code, '}')  === false){
			return true;
		}
		$baseLen = mb_strlen($code, 'UTF-8');
		for($i = 0; $i < $baseLen; $i++){
			$char = mb_substr($code, $i, 1, "UTF-8");
			if($char == '{'){
				$code = mb_substr($code, $i, $baseLen - $i);
				break;
			} elseif($char == '}'){
				return false;
			}
		}

		$len = mb_strlen($code, 'UTF-8');
		for($i = $len - 1; $i >= 0; $i--){
			$char = mb_substr($code, $i, 1, "UTF-8");
			if($char == '}'){
				$code = mb_substr($code, 0, $len - ($len - $i - 1));
				break;
			} elseif($char == '{'){
				return false;
			}
		}

		$bracketOpen = substr_count($code, '{');
		$bracketClose = substr_count($code, '}');
		return $bracketOpen == $bracketClose;
	}
}