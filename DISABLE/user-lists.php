<?php
/*
 * Functions for adding problems (posts) to favourites (1), finished (2) and projects (3) 
 */

	
// nonce - ensure the request is unique and valid to prevent duplicate database insertion and more
// if ( !wp_verify_nonce( $_REQUEST['nonce'], "my_user_vote_nonce")) {
//    exit("No naughty business please");
// }

function update_data() {
// $post_ID = $_POST['post_ID'];
// $user_ID = $_POST['user_ID'];
// $list_no = $_POST['list_no'];

// $user_ID = 1;
// $post_ID = 2000;
// $list_no = 1;

// Get value from database if exists - if not =$value = 0
global $wpdb;
$value = $wpdb->get_results( 'SELECT * FROM wp_user_lists WHERE user_id = '.$user_ID , OBJECT );

//var_dump( $value );
//echo '<br>';

// if $value exist in database
if( $value ) {
	// remove value
	//echo 'remove value';

	$update = $wpdb->delete( 
		'wp_user_lists', 
		array( 
			'post_id' => $post_ID,
			'user_id' => $user_ID,
			'list_no' => $list_no
			), 
		array( '%d', '%d', '%d' ) 
	);	
	
	
} else {
	// add value
	//echo 'add value';
	$update = $wpdb->insert( 
		'wp_user_lists', 
		array( 
			'user_id' => $user_ID,
			'post_id' => $post_ID,
			'list_no' => $list_no 
		), 
		array( 
			'%d', 
			'%d',
			'%d'
		) 
	);
}

// Update wp_postemta with no. of favourites, finished or projects
// if( $result ) {
// 	$update = update_post_meta($_REQUEST["post_id"], "votes", $new_vote_count);	
// }



// if adding new value to database failed -The results array
if($update == false) { // add values to $result
	$result['type'] = "error";
} else {
	$result['type'] = "success";
}

$result = json_encode($result); // encode and return the results
echo $result;

// // Check if request is AJAX or not
// if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
// 	$result = json_encode($result); // encode and return the results
// 	echo $result;
// } else {
// 	header("Location: ".$_SERVER["HTTP_REFERER"]); // return the user to original page
// }

die();
}

update_data();

?>

