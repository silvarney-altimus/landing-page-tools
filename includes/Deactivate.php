<?php

namespace LPT;

defined( 'ABSPATH' ) || exit;

class Deactivate
{
	protected function __construct()
	{
	}

	public static function deactivate()
	{
		flush_rewrite_rules();
	}
}
