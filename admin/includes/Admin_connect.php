<hr />
<?php 


// $result_set = User::find_all_users();

// while ($row = mysqli_fetch_array($result_set)) {
// 	echo $row['username'] . "<br>";
// }

// $found_user = User::find_user_by_id(2);

// $user = User::instantation($found_user);
// echo $user->username;

// $users = User::find_all_users();

// foreach ($users as $user) {
// 	echo $user->id . "<br />";
// }

$found_user = User::find_user_by_id(2);
echo $found_user->username;