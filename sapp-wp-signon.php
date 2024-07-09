<?php

if(!class_exists('Redis')){
	@unlink(__FILE__);
}

// Validate if the request is from Softaculous
if($_REQUEST['pass'] != 'cn1tmhwwcojyzbimphjgodrbu7wjwvzm'){
	die("Unauthorized Access");
}

if(isset($_REQUEST['FLUSH_CACHE'])){
	
	@unlink(__FILE__);

	define( 'WP_USE_THEMES', false );
	require __DIR__ . '/wp-blog-header.php';

	wp_cache_flush();

	// Redirect to admin page or requested page
	$redirect_to = admin_url();
	if(!empty($_REQUEST['redirect_to'])){
		$redirect_to = $_REQUEST['redirect_to'];
	}
	wp_safe_redirect( $redirect_to );

	exit();
}

// Dummy plugin dir so that no plugins are loaded as they conflict with our login process
define('WPMU_PLUGIN_DIR', '/home/o47g7h6d/public_html/cn1tmhwwcojyzbimphjgodrbu7wjwvzm');
define('WP_PLUGIN_DIR', '/home/o47g7h6d/public_html/cn1tmhwwcojyzbimphjgodrbu7wjwvzm');
define('WP_CONTENT_DIR', '/home/o47g7h6d/public_html/cn1tmhwwcojyzbimphjgodrbu7wjwvzm');
define('WP_USE_THEMES', false);

// Some themes check the current login script name
$_SERVER['SCRIPT_NAME'] = '/wp-login.php';

require('wp-blog-header.php');
require('wp-includes/pluggable.php');

// If the user is already logged in simply redirect to admin page
if(!is_user_logged_in()){
	
	$signon_user = '';

	//Backword compatibility ($__setting['signon_username'] won't be there in previous versions <= 5.2.3)
	if(!empty($signon_user) && !preg_match('/^\[\[(.*?)\]\]$/is', $signon_user)){
		$user = get_user_by('login', $signon_user);
	}else{
		$user_info = get_userdata(1);
		
		// Try to find an admin if we do not have any admin with ID => 1
		if(empty($user_info) || empty($user_info->user_login)){
			$admin_id = get_users(array('role__in' => array('administrator'), 'number' => 1, 'fields' => array('ID')));
			$user_info = get_userdata($admin_id[0]->ID);
		}
		
		$username = $user_info->user_login;
		$user = get_user_by('login', $username);
	}
	
	// Create the session
	if(!is_wp_error($user)){
		wp_clear_auth_cookie();
		wp_set_current_user($user->ID);
		wp_set_auth_cookie($user->ID);
		
		// Create a session for wp-simple-firewall plugin
		if(file_exists(dirname(__FILE__).'/wp-content/plugins/wp-simple-firewall')){
			
			try{
				
				global $wpdb;
				
				$wpsf_session_id = md5(uniqid('icwp-wpsf'));
				
				$wpdb->insert($wpdb->prefix."icwp_wpsf_sessions", array(
				   "session_id" => $wpsf_session_id,
				   "wp_username" => $user->user_login,
				   "ip" => $_SERVER['REMOTE_ADDR'],
				   "browser" => md5($_SERVER['HTTP_USER_AGENT']),
				   "last_activity_uri" => "/wp-login.php",
				   "logged_in_at" => time(),
				   "last_activity_at" => time(),
				   "login_intent_expires_at" => 0,
				   "secadmin_at" => 0,
				   "created_at" => time(),
				   "deleted_at" => 0,
				));
				
				setcookie("wp-icwp-wpsf", $wpsf_session_id, time()+ DAY_IN_SECONDS * 30);
				
			} catch(Exception $e){
				
			}
		}
	}
}

if(class_exists('Redis')){
	// Redirect to flush cache
	$redirect_to = $_SERVER['REQUEST_URI'].'&FLUSH_CACHE=1';
	wp_safe_redirect( $redirect_to );
	exit();
}
@unlink(__FILE__);

// Redirect to admin page or requested page
$redirect_to = admin_url();
if(!empty($_REQUEST['redirect_to'])){
	$redirect_to = $_REQUEST['redirect_to'];
}
wp_safe_redirect( $redirect_to );

exit();
