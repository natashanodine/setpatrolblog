<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<!--<div class="row headerImage">
			<div class="col-12">
				<?php echo first_image(); ?>
			</div>
		</div>-->

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
		
		
		<div class="container">
			<div class="row singlePost">
				<div class="row">
					<div class="col-12 singlePostHeader">		
						<h2><?php the_title(); ?> thbvcsdfghjkl</h2>
					</div>
				</div>
				<div class="row singlePostHeaderMeta">
					<div class="col-12 singlePostHeaderMetaParagraph">		
						
				 	 <p >By: <?php the_author() ?> <span style="float:right;"><?php the_time('j.n.Y') ?></span></p>

					</div>
				</div>
					
					<div class="entry row singlePostContent">
						<div class="col-12">
						
						<?php the_content(); ?>

						<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
						
						<?php the_tags( 'Tags: ', ', ', ''); ?>
					</div>
					</div>
					<div class="row">
						<div class="col-12 singleMeta">
					 		 <p><?php comments_popup_link(' No Comments', ' 1 Comment', ' % Comments', ' comments-link', ''); ?></p>
					 	</div>
					 </div>

					</div>
					<div class="entry row singlePostComments">
						<div class="col-12">						
							<?php edit_post_link('Edit this entry','','.'); ?>
							<?php comments_template(); ?>
						</div>
					</div>
				</div>	

					
			</div>
		</div>

	

	<?php endwhile; endif; ?>
	
</div>

<?php get_footer(); ?>
