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
	 <!-- CONSIDERITDONE -->
	 <div class="consideritdone" id="request">
	 	<div class="container">
	 		<div class="consideritdone-wrapper clearfix">
	 			<form action="" class="consideritdone-form" method="post">
	 				<span class="consideritdone-form-title">
	 					Request a Quote
	 				</span>
	 				<div class="consideritdone-form-line">
	 					<label class="consideritdone-form-line-label clearfix">
	 						First Name
	 						<input type="text" name="first_name">
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
	 						Phone
	 						<input type="text" name="phone">
	 					</label>
	 				</div>
	 				<div class="consideritdone-form-line">
	 					<label class="consideritdone-form-line-label clearfix">
	 						Project Description
	 						<textarea name="project_description" cols="3"></textarea>
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
	 			<img src="<?= get_template_directory_uri()."/img/consideritdone-pic.png" ?>" alt="" class="consideritdone-pic">
	 		</div>
	 	</div>
	 </div>
	 <!-- END OF CONSIDERITDONE -->

	 <!-- PLUSES -->
	 <div class="pluses" id="pluses">
	 	<div class="container">
	 		<div class="pluses-elements clearfix">
	 			<div class="pluses-elements-item">
	 				<img src="<?= get_template_directory_uri()."/img/pluses_1.png" ?>" alt="" class="pluses-elements-item-pic">
	 				<span class="pluses-elements-item-title">
	 					Highest Quality
	 				</span>
	 				<span class="pluses-elements-item-text">
	 					Our goal is to provide the highest quality work with no headaches to our clients
	 				</span>
	 			</div>
	 			<div class="pluses-elements-item">
	 				<img src="<?= get_template_directory_uri()."/img/pluses_2.jpeg" ?>" alt="" class="pluses-elements-item-pic">
	 				<span class="pluses-elements-item-title">
	 					Full Service
	 				</span>
	 				<span class="pluses-elements-item-text">
	 					"The Good Painers LLC" is a full service for interior painting company serving the Seattle City and surrounding areas.
	 				</span>
	 			</div>
	 			<div class="pluses-elements-item">
	 				<img src="<?= get_template_directory_uri()."/img/pluses_3.png" ?>" alt="" class="pluses-elements-item-pic">
	 				<span class="pluses-elements-item-title">
	 					Professionalism
	 				</span>
	 				<span class="pluses-elements-item-text">
	 					We are glad to make a new life or revive the life on any interior surface or walls . It's our pleasure to create a visual comfort for every interior space.
	 				</span>
	 			</div>
	 		</div>
	 	</div>
	 </div>
	 <!-- END OF PLUSES -->

	 <!-- EXPLANATION -->
	 <div class="explanation" id="explanation">
	 	<div class="container">
	 		<div class="explanation-wrapper">
		 		<span class="explanation-title">
		 			Explanation of our process
		 		</span>

		 		<div class="explanation-element">
		 			<span class="explanation-element-title">
		 				Fireplace color change
		 			</span>
		 			<img src="<?= get_template_directory_uri()."/img/example_1.jpg" ?>" alt="" class="explanation-element-pic">
		 		</div>
		 		<div class="explanation-element">
		 			<span class="explanation-element-title">
		 				Staining the cabinets
		 			</span>
		 			<img src="<?= get_template_directory_uri()."/img/example_2.jpg" ?>" alt="" class="explanation-element-pic">
		 		</div>
		 		<div class="explanation-element">
		 			<span class="explanation-element-title">
		 				Hall painting
		 			</span>
		 			<img src="<?= get_template_directory_uri()."/img/example_3.jpg" ?>" alt="" class="explanation-element-pic">
		 		</div>
	 		</div>
	 	</div>
	 </div>
	 <!-- END OF EXPLANATION -->

	 <!-- REVIEWS -->
	 <div class="reviews" id="reviews">
	 	<div class="container">
	 		<span class="reviews-title">
	 			Don't Take Our Word For it...
	 		</span>
			<div class="reviews-elements clearfix">
				<div class="reviews-elements-item">
					<img src="<?= get_template_directory_uri()."/img/face_1.jpg" ?>" alt="" class="reviews-elements-item-pic">
					<span class="reviews-elements-item-text">
						They were <b>great to work with</b>, prompt, and even completed the job early. They left us with paint should we ever need to touch up the area, which is a nice addition.<br>
						<em>-Andrew H.</em>
					</span>				
					<img src="<?= get_template_directory_uri()."/img/stars.png" ?>" alt="" class="reviews-elements-item-stars">
				</div>
				<div class="reviews-elements-item">
					<img src="<?= get_template_directory_uri()."/img/face_2.jpg" ?>" alt="" class="reviews-elements-item-pic">
					<span class="reviews-elements-item-text">
						<b>Thank you!!!</b> These guys were fantastic to work with. They're the first contractors that I have worked with in Seattle that acted like professionals, and the work was fantastic. <b>Everybody showed up on time</b>, communication was great, and the process was very easy. <br><em>-Gheorghe I. </em>
					</span>				
					<img src="<?= get_template_directory_uri()."/img/stars.png" ?>" alt="" class="reviews-elements-item-stars">
				</div>
				<div class="reviews-elements-item">
					<img src="<?= get_template_directory_uri()."/img/face_3.jpg" ?>" alt="" class="reviews-elements-item-pic">
					<span class="reviews-elements-item-text">
						<b>Very professional</b>, decent crew. Prompt communication. The end result was pretty good - painted a 2-car garage. I liked the fact that they <b>came down for a free estimate the next day</b>, showed me before/after photos of a similar project they completed recently and performed the job on time.<br>
						<em>-Abdullah U.</em>
					</span>				
					<img src="<?= get_template_directory_uri()."/img/stars.png" ?>" alt="" class="reviews-elements-item-stars">
				</div>
			</div>
	 	</div>
	 </div>
	 <!-- END OF REVIEWS -->

	 <!-- TEAM -->
	 <div class="team" id="team">
	 	<div class="container">
	 		<span class="team-title">
	 			Our Team
	 		</span>
			<div class="team-all">
				<div class="team-all-member clearfix">
					<div class="team-all-member-face">
						<img src="<?= get_template_directory_uri()."/img/team_1.jpg" ?>" alt="" class="team-all-member-face-pic">
						<span class="team-all-member-face-name">
						Oleg Cibotenco
						</span>
					</div>
					<span class="team-all-member-text">Oleg finished the College of construction in 2012 for an Interior Designer and had been working for 2 years in an international company as a color expert. Then he moved in USA and started to work as a painter in a general contractor company.</span>
				</div>
				<div class="team-all-member clearfix">
					<div class="team-all-member-face">
						<img src="<?= get_template_directory_uri()."/img/team_2.jpg" ?>" alt="" class="team-all-member-face-pic">
						<span class="team-all-member-face-name">
						John Macovenco
						</span>
					</div>
					<span class="team-all-member-text">In 2010 John finished College of Construction of East Europe then he moved to Moscow and has been working in drywall installation and finishing for more than 2 years after that move to Italy and work for 1 year with faux-finish. He came in USA in 2013 and was hired in a construction company as a painter and a faux-finish expert.</span>
				</div>
				<div class="team-all-member clearfix">
					<div class="team-all-member-face">
						<img src="<?= get_template_directory_uri()."/img/team_3.jpg" ?>" alt="" class="team-all-member-face-pic">
						<span class="team-all-member-face-name">
						Nicolae Schirliu
						</span>
					</div>
					<span class="team-all-member-text">Nicolae finished Community College with construction profile in 2012 then he started working as a painter and a bidder. For now he is working at this position for more than 3 years.</span>
				</div>
			</div>
	 	</div>
	 </div>
	 <!-- END OF TEAM -->

	 <!-- VIDEO -->
	 <div class="video">
	 	<div class="container">
	 		<div class="video-wrapper">
	 			<span class="video-title">How do we work</span>
	 			<iframe width="920" height="529" src="https://www.youtube.com/embed/cXDgkJa9JQ4" frameborder="0" allowfullscreen></iframe>
	 		</div>
		 </div>
	 </div>
	 <!-- END OF VIDEO -->

	 <!-- GETSTARTED -->
	 <div class="getstarted">
	 	<div class="container">
	 		<span class="getstarted-title">
	 			Consider it done
	 		</span>
	 		<span class="getstarted-text">
	 			From Interior Painting and Exterior Painting to Faux Finish, we bring you the right pros for every project on your list.
	 		</span>
	 		<div class="getstarted-line clearfix">
	 			<form action="">
	 				<input type="text" class="getstarted-line-input" placeholder="What service do you need?">
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