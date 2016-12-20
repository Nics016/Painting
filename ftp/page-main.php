<?php 
get_header();
if (have_posts()):
	while(have_posts()):
		the_post();
?>
<!-- MAIN -->
<main>
	<?php 
		the_content();
	 ?>
	 <?php 
	 	// GETTING ACF
 		$email_to_send = get_field("email_to_send");
 		$right_side_form_picture = get_field("right_side_form_picture");
 		$i = 0;
 		while (have_rows("pluses")){
 			the_row();
 			$pluses_pic[$i] = get_sub_field("plus_pic");
 			$pluses_title[$i] = get_sub_field("plus_title");
 			$pluses_text[$i] = get_sub_field("plus_text");
 			$i++;
 		}
 		$explanation_text = get_field("explanation_text");
 		$i = 0;
 		while (have_rows("examples_works")){
 			the_row();
 			$examples_title[$i] = get_sub_field("example_works_title");
 			$examples_pic[$i] = get_sub_field("example_works_picture");
 			echo $example_pic[$i];
 			$i++;
 		}
 		$reviews_title = get_field("reviews_title");
 		$i = 0;
 		while (have_rows("reviews")){
 			the_row();
 			$reviews_pic[$i] = get_sub_field("review_face_pic");
 			$reviews_text[$i] = get_sub_field("review_text");
 			$reviews_name[$i] = get_sub_field("reviewer_name");
 			$i++;
 		}
 		$team_title = get_field("team_title");
 		$i = 0;
 		while (have_rows("members")){
 			the_row();
 			$members_pic[$i] = get_sub_field("member_face_pic");
 			$members_name[$i] = get_sub_field("member_name");
 			$members_description[$i] = get_sub_field("member_description");
 			$i++;
 		}
 		$video_title = get_field("video_title");
 		$video_link = get_field("video_link");
 		$bottom_form_title = get_field("bottom_form_title");
 		$bottom_form_text = get_field("bottom_form_text");
 		$bottom_form_input_placeholder = get_field("bottom_form_input_placeholder");


	 	// RECEIVING REQUEST

	 	// getting fields
	 	// top form
	 	$name = check_input($_POST['first_name'])." ".check_input($_POST['last_name']);
	 	$email = check_input($_POST['email']);
	 	$phone = check_input($_POST['phone']);
	 	$description = check_input($_POST['project_description']);
	 	$painting_type = check_input($_POST['painting_type']);

	 	// bottom form
	 	$what_service = check_input($_POST['what_service']);

	 	// sending email
	 	if ($name != "" && $name != " "){
	 		$content = "<h1>New client - ".$name."</h1>".
	 		"<h3> email: ".$email."</h3>".
	 		"<h3> phone: ".$phone."</h3>".
	 		"<p><b>Project Description:</b> ".$description."</p>".
	 		"<p> <b>Painting-Type:</b> ".$painting_type."</p>";
	 		$title = "New Requeste of a Quote - ".$name;
	 		SendEmail($email_to_send, $title, $content);

		 	// creating new Client post
		 	// Создание нового поста типа Clients со всеми данными
			$post_id = wp_insert_post(array (
				'post_type' => 'clients',
				'post_title' => "Client - ".$name,
				'post_status' => 'publish',
				'post_content' => $content
			));
			// присваиваем номер клиента
			$my_post = array(
			      'ID'           => $post_id,
			  );
			wp_update_post( $my_post );
	 	}
	  ?>
	 <!-- CONSIDERITDONE -->
	 <div class="consideritdone" id="request">
	 	<div class="container">
	 		<div class="consideritdone-wrapper clearfix">
	 			<form action="" class="consideritdone-form" method="post" id="consideritdone-form-id">
	 				<span class="consideritdone-form-title">
	 					Request a Quote
	 				</span>
	 				<div class="consideritdone-form-line">
	 					<label class="consideritdone-form-line-label clearfix">
	 						First Name <span class="requied-field">*</span>
	 						<input type="text" name="first_name" class="checking-input" id="name_id">
	 					</label>
	 				</div>
					<div class="consideritdone-form-line">
	 					<label class="consideritdone-form-line-label clearfix">
	 						Last Name
	 						<input type="text" name="last_name">
	 					</label>
	 				</div>
	 				<div class="consideritdone-form-line">
	 					<label class="consideritdone-form-line-label clearfix">
	 						Email 
	 						<input type="text" name="email">
	 					</label>
	 				</div>
	 				<div class="consideritdone-form-line">
	 					<label class="consideritdone-form-line-label clearfix">
	 						Phone <span class="requied-field">*</span>
	 						<input type="text" name="phone" class="checking-input" id="phone_id">
	 					</label>
	 				</div>
	 				<div class="consideritdone-form-line">
	 					<label class="consideritdone-form-line-label clearfix">
	 						Project Description <span class="requied-field">*</span>
	 						<textarea name="project_description" cols="3" class="checking-input" id="description_id"><?= $what_service ?></textarea>
	 					</label>
	 				</div>
	 				<div class="consideritdone-form-line">
	 					<label class="consideritdone-form-line-label clearfix">
	 						Interior / Exterior
	 						<select name="painting_type" id="">
	 							<option value="none">-None-</option>
	 							<option value="Interior">Interior</option>
	 							<option value="Exterior">Exterior</option>
	 						</select>
	 					</label>
	 				</div>
					<div class="consideritdone-form-line">
						<input type="submit" class="consideritdone-form-line-submit" value="Submit">
					</div>
	 			</form>
	 			<img src="<?= $right_side_form_picture ?>" alt="" class="consideritdone-pic">
	 		</div>
	 	</div>
	 </div>
	 <!-- END OF CONSIDERITDONE -->

	 <!-- PLUSES -->
	 <div class="pluses" id="pluses">
	 	<div class="container">
	 		<div class="pluses-elements clearfix">
	 			<?php 
	 				$i = 0;
	 				foreach ($pluses_pic as $plus_pic):
	 			 ?>
	 			<div class="pluses-elements-item">
	 				<img src="<?= $pluses_pic[$i] ?>" alt="" class="pluses-elements-item-pic">
	 				<span class="pluses-elements-item-title">
	 					<?= $pluses_title[$i] ?>
	 				</span>
	 				<span class="pluses-elements-item-text">
	 					<?= $pluses_text[$i] ?>
	 				</span>
	 			</div>
	 			<?php 
	 				$i++;
	 				endforeach;
	 			 ?>
	 		</div>
	 	</div>
	 </div>
	 <!-- END OF PLUSES -->

	 <!-- EXPLANATION -->
	 <div class="explanation" id="explanation">
	 	<div class="container">
	 		<div class="explanation-wrapper">
		 		<span class="explanation-title">
		 			<?= $explanation_text ?>
		 		</span>
				<?php 
	 				$i = 0;
	 				foreach ($examples_title as $example_title):
	 			 ?>
		 		<div class="explanation-element">
		 			<span class="explanation-element-title">
		 				<?= $examples_title[$i] ?>
		 			</span>
		 			<img src="<?= $examples_pic[$i] ?>" alt="" class="explanation-element-pic">
		 		</div>
		 		<?php 
	 				$i++;
	 				endforeach;
	 			 ?>
	 		</div>
	 	</div>
	 </div>
	 <!-- END OF EXPLANATION -->

	 <!-- REVIEWS -->
	 <div class="reviews" id="reviews">
	 	<div class="container">
	 		<span class="reviews-title">
	 			<?= $reviews_title ?>
	 		</span>
			<div class="reviews-elements clearfix">
				<?php 
	 				$i = 0;
	 				foreach ($reviews_pic as $rev):
	 			 ?>
				<div class="reviews-elements-item">
					<img src="<?= $reviews_pic[$i] ?>" alt="" class="reviews-elements-item-pic">
					<span class="reviews-elements-item-text">
						<?= $reviews_text[$i] ?><br>
						<em>-<?= $reviews_name[$i] ?></em>
					</span>				
					<img src="<?= get_template_directory_uri()."/img/stars.png" ?>" alt="" class="reviews-elements-item-stars">
				</div>
				<?php 
	 				$i++;
	 				endforeach;
	 			 ?>
			</div>
	 	</div>
	 </div>
	 <!-- END OF REVIEWS -->

	 <!-- TEAM -->
	 <div class="team" id="team">
	 	<div class="container">
	 		<span class="team-title">
	 			<?= $team_title ?>
	 		</span>
			<div class="team-all">
				<?php 
	 				$i = 0;
	 				foreach ($members_pic as $mem):
	 			 ?>
				<div class="team-all-member clearfix">
					<div class="team-all-member-face">
						<img src="<?= $members_pic[$i] ?>" alt="" class="team-all-member-face-pic">
						<span class="team-all-member-face-name">
						<?= $members_name[$i] ?>
						</span>
					</div>
					<span class="team-all-member-text"><?= $members_description[$i] ?></span>
				</div>
				<?php 
	 				$i++;
	 				endforeach;
	 			 ?>
			</div>
	 	</div>
	 </div>
	 <!-- END OF TEAM -->

	 <!-- VIDEO -->
	 <div class="video">
	 	<div class="container">
	 		<div class="video-wrapper">
	 			<span class="video-title"><?= $video_title ?></span>
	 			<iframe width="920" height="529" src="<?= $video_link ?>" frameborder="0" allowfullscreen></iframe>
	 		</div>
		 </div>
	 </div>
	 <!-- END OF VIDEO -->

	 <!-- GETSTARTED -->
	 <div class="getstarted">
	 	<div class="container">
	 		<span class="getstarted-title">
	 			<?= $bottom_form_title ?>
	 		</span>
	 		<span class="getstarted-text">
	 			<?= $bottom_form_text ?>
	 		</span>
	 		<div class="getstarted-line clearfix">
	 			<form action="" method="post">
	 				<input type="text" class="getstarted-line-input" placeholder="<?= $bottom_form_input_placeholder ?>" name="what_service">
	 				<input type="submit" class="getstarted-line-submit" value="Get Started">
	 			</form>
	 		</div>
	 	</div>
	 </div>
	 <!-- END OF GETSTARTED -->
</main>
<!-- END OF MAIN -->
<?php 
	endwhile;
endif;
get_footer(); 
?>