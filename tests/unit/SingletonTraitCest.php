<?php
/**
 * @author Timon Kreis <mail@timonkreis.de>
 * @copyright 2020 Timon Kreis
 * @license http://www.opensource.org/licenses/mit-license.html
 */
declare(strict_types = 1);

use TimonKreis\Framework;

/**
 * @category tk-framework
 * @package pattern
 */
class SingletonTraitCest
{
	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function testWorkingSingletonPattern(Framework\Test\UnitTester $I) : void
	{
		$value = 'test';

		$singletonClass = Framework\Pattern\Tests\SingletonClass::getInstance();
		$singletonClass::$value = $value;

		unset($singletonClass);

		$singletonClass = Framework\Pattern\Tests\SingletonClass::getInstance();

		$I->assertEquals($value, $singletonClass::$value);
	}
}
