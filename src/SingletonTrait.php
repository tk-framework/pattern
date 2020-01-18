<?php
/**
 * Copyright by Timon Kreis - All Rights Reserved
 * Visit https://www.timonkreis.de
 */
declare(strict_types = 1);

namespace TimonKreis\Framework\Pattern;

/**
 * @category tk-framework
 * @package pattern
 */
trait SingletonTrait
{
	/**
	 * Create an instance of the class
	 *
	 * @param array $parameters
	 * @return $this
	 */
	public static function getInstance(...$parameters) : object
	{
		static $instance = null;

		if ($instance === null) {
			$instance = new static(...$parameters);
		}

		return $instance;
	}

	/**
	 * Instanciates the class
	 *
	 * @param array $parameters
	 */
	protected function __construct(...$parameters) {}

	/**
	 * Prevent cloning the object
	 */
	protected function __clone() {}

	/**
	 * Prevent serializing the object
	 */
	protected function __sleep() {}

	/**
	 * Prevent unserializing the object
	 */
	protected function __wakeup() {}
}
