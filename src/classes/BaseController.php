<?php
namespace MyApiCore\System;

use \Psr\Container\ContainerInterface as ContainerInterface;

/**
 * Class BaseController
 * @package MyApiCore\System
 */
class BaseController {

	/**
	 * BaseController constructor.
	 *
	 * @param $container
	 */
	public function __construct(ContainerInterface $container)
	{
		$this->container = $container;
	}

	/**
	 * Get a property of the ContainerInterface
	 *
	 * @param $property
	 * @return mixed
	 */
	public function __get($property) {
		if($this->container->has($property)) {
			return $this->container->get($property);
		}

		return $this->{$property};
	}
}