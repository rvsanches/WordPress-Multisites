<?php get_header(); ?>

    <div class="container">

        <div class="row">
            <div class="col-9">
				<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					?>
					<?php the_post_thumbnail( 'post-thumbnail', array( 'class' => 'img-fluid rounded' ) ); ?>
                    <h1 class="my-4">
						<?php the_title(); ?>
                    </h1>
					<?php the_content(); ?>
				<?php
				endwhile;
				endif;
				?>
            </div>
            <div class="col-3">
				<?php get_sidebar(); ?>
            </div>
        </div>

    </div>

<?php get_footer(); ?>