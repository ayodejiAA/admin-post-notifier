<?php

/**
 * @package AdminPostNotifier
 */

namespace AdminPostNotifier;

class Admin extends Base{
  public $current_user;
  public $admin_email; 

  function __construct() 
  {
    $this->current_user = wp_get_current_user();
    $this->admin_email = get_bloginfo('admin_email');
  }

  function is_user_contributor()
  {
    $result = array_intersect( [self::$allowed_role], $this->current_user->roles );

    if(empty($result)) {
      return false;
    } else {
      return true;
    }
  }
}
