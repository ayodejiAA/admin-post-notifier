<?php 

/**
 * @package AdminPostNotifier
 */

namespace Src;

class Notifications extends Admin{

  public function register() 
  {
    if($this->is_user_contributor()) add_action( 'pending_post', array($this, 'send_notification'), 10, 2);
	}

  public function send_notification($_, $post)
  {
    $post_author_name = get_author_name($post->post_author);

    $email_to = $this->admin_email;
    $email_subject = "A new post is awaiting your review";
    $email_body = "$post_author_name just submitted a new post for review.\r\n\r\nTitle: $post->post_title";

    wp_mail( $email_to , $email_subject, $email_body);
  }
}
