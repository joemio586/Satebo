<?php 
include("includes/header.php");

?>

	<div class="user_details column">
		<a href="<?php echo $userLoggedIn; ?>">  <img src="<?php echo $user['profile_pic']; ?>"> </a>

		<div class="user_details_left_right">
			<a href="<?php echo $userLoggedIn; ?>">
			<?php 
			echo $user['first_name'] . " " . $user['last_name'];

			 ?>
			</a>
			<br>
			<div class="poslik">
			<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
			<?php echo "Posts: " . $user['num_posts'] . " - ";?> 
			<i class="fa fa-thumbs-up" aria-hidden="true"></i>
			<?php
			 echo "Likes: " . $user['num_likes'];
			 ?>
			
			
			</div>
		</div>

	</div>