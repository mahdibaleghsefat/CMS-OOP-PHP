<hr />
<?php 


$user = new User();

// $user->username = "sdg";
// $user->password = "sdg";
// $user->first_name = "sdg";
// $user->last_name = "sdg";
// $user->create();

// $user = User::find_user_by_id(2);
// $user->last_name = "lsdfjn lsjf";
// $user->update();

$user = User::find_user_by_id(4);
$user->delete();


?>