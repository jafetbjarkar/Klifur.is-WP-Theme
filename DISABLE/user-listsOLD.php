<?php
/*
 * Functions for adding problems (posts) to favourites, finished and projects 
 */

$favourites  = isset($_POST['favourites']) ? $_POST['favourites'] : null;
$post_ID  = isset($_POST['favourites']) ? $_POST['name'] : null;

echo $favourites;


function add_to_list( $user_ID, $post_ID, $list ) {
	//$user_id = this.$user_id;
	
	echo 'User ID: '.$user_ID.'<br>';
	echo 'Post ID: '.$post_ID;
}
function remove_from_list() {
	
}