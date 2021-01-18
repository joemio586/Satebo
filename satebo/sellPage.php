<?php 
include("includes/header.php");

?>
<html>
<head>
	<title>Satebo - Buy Sell Trade</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">	
</head>
<body>

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
		<div class="main_column column">
			<form class="post_form" action="sellPage.php" method="POST" enctype="multipart/form-data">
				<div class="topsellbar">
					<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
					<input type="text" name="title" value="Post Title...">
						<i class="fa fa-usd" aria-hidden="true"></i>
						<input type="text" name="price" value="Price...">
							<i class="fa fa-building" aria-hidden="true"></i>
							<input type="text" name="city" value="City...">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
									<input type="text" name="zipcode" value="Zipcode...">
				</div>
			<textarea name="description_text" id="description_text" placeholder="Title Description..."></textarea>
				<input type="file" name="fileToUpload" id="fileToUpload">
				<input type="submit" name="post" id="sell_button" value="Sell">
			</form>
		</div>