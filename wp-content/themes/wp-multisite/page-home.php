<?php /* Template name: Página inicial */ ?>

<?php get_header(); ?>

    <div class="container">

        <div class="row">

			<?php
			$args      = array(
				'post_type'      => 'destaques',
				'posts_per_page' => 2
			);
			$the_query = new WP_Query( $args );

			if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
				?>
                <div class="col-6">
                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-md-4">
								<?php the_post_thumbnail( 'card-thumbnail', array( 'class' => 'card-img card-highlights' ) ); ?>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                    <p class="card-text"><?php the_field( 'descricao' ); ?></p>
                                    <p class="card-text"><small class="text-muted"><?php the_field( 'nota' ); ?></small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			<?php endwhile; ?>
			<?php else : ?>
                <div class="col">
                    <p class="m-0 text-center text-secondary">Nenhum destaque encontrado</p>
                </div>
			<?php endif; ?>
			<?php wp_reset_query(); ?>

        </div>

        <div class="row">
            <div class="col-9">
                <ul class="list-group list-group-flush">
					<?php
					$args      = array(
						'post_type'      => 'post',
						'posts_per_page' => 3
					);
					$the_query = new WP_Query( $args );

					if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
						?>
                        <li class="list-group-item bg-light px-0 py-5">
                            <div class="row">
                                <div class="col-6">
                                    <a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail( 'post-thumbnail', array( 'class' => 'img-fluid rounded' ) ); ?>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <p class="mt-1 text-secondary">
                                        <b><?php the_category( ', ' ); ?></b>
                                    </p>
                                    <a href="<?php the_permalink(); ?>">
                                        <h3>
											<?php the_title(); ?>
                                        </h3>
                                    </a>
                                    <p class="mb-2">
										<?php the_excerpt(); ?>
                                    </p>
                                    <p class="mb-0 text-secondary">
                                        <svg class="bi bi-calendar" width="1.25em" height="1.25em" viewBox="0 0 20 20"
                                             fill="currentColor"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M16 2H4a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2zM3 5.857C3 5.384 3.448 5 4 5h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H4c-.552 0-1-.384-1-.857V5.857z"
                                                  clip-rule="evenodd"/>
                                            <path fill-rule="evenodd"
                                                  d="M8.5 9a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2z"
                                                  clip-rule="evenodd"/>
                                        </svg> <?php echo 'Publicado em: ' . get_the_date( 'd/m/y' ); ?>
                                    </p>
                                </div>
                            </div>
                        </li>
					<?php
					endwhile;
					endif;
					?>
                </ul>
            </div>
            <div class="col-3 pt-5">
	            <?php get_sidebar(); ?>
            </div>
        </div>

<?php get_footer(); ?>