<?php
/**
 * @author Timon Kreis <mail@timonkreis.de>
 * @copyright 2020 Timon Kreis
 * @license http://www.opensource.org/licenses/mit-license.html
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
