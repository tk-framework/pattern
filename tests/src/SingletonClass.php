<?php
/**
 * Copyright by Timon Kreis - All Rights Reserved
 * Visit https://www.timonkreis.de
 */
declare(strict_types = 1);

namespace TimonKreis\Framework\Pattern\Tests;

use TimonKreis\Framework;

/**
 * @category tk-framework
 * @package pattern
 */
class SingletonClass
{
	use Framework\Pattern\SingletonTrait;

	/**
	 * @var string
	 */
	public static $value = '';
}
