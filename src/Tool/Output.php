<?php
namespace MartynBiz\Translate\Tool;

/**
 * A simple class that let's us color text in the output, and
 * crop
 */
class Output
{
	const BLACK = "\033[0;30m";
	const DARK_GRAY = "\033[1;30m";
	const BLUE = "\033[0;34m";
	const LIGHT_BLUE = "\033[1;34m";
	const GREEN = "\033[0;32m";
	const LIGHT_GREEN = "\033[1;32m";
	const CYAN = "\033[0;36m";
	const LIGHT_CYAN = "\033[1;36m";
	const RED = "\033[0;31m";
	const LIGHT_RED = "\033[1;31m";
	const PURPLE = "\033[0;35m";
	const LIGHT_PURPLE = "\033[1;35m";
	const BROWN = "\033[0;33m";
	const YELLOW = "\033[1;33m";
	const LIGHT_GRAY = "\033[0;37m";
	const WHITE = "\033[1;37m";

	const BG_BLACK = "\033[40m";
	const BG_RED = "\033[41m";
	const BG_GREEN = "\033[42m";
	const BG_YELLOW = "\033[43m";
	const BG_BLUE = "\033[44m";
	const BG_MAGENTA = "\033[45m";
	const BG_CYAN = "\033[46m";
	const BG_LIGHT_GRAY = "\033[47m";

	public function _($text, $color='')
	{
		return $color . $text . chr(27) . "[0m";
	}

	public function success($text)
	{
		return self::_($text, self::GREEN);
	}

	public function warning($text)
	{
		return self::_($text, self::BG_YELLOW);
	}

	public function highlight($text)
	{
		return self::_($text, self::BROWN);
	}

	public function error($text)
	{
		return self::_($text, self::RED);
	}

	public function crop($text)
	{
		$text = str_replace(PHP_EOL, '\\n', $text);
		$text = (strlen($text) > 50) ? substr($text, 0, 47) . '...' : $text;

		return $text;
	}
}