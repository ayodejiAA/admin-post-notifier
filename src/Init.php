<?php

/**
 * @package AdminPostNotifier
 * 
 */

namespace AdminPostNotifier;

final class Init {

  public static function init_service() 
  {
    return [
      Notifications::class,
    ];
  }

   public static function init_services() 
   {
    foreach(self::init_service() as $class) {
      $service = self::instantiate($class);
      if (method_exists($service, 'register') ) {
        $service->register();
      }
    }
  }

  private static function instantiate( $class )
	{
		$service = new $class();
		return $service;
	}
}
