<?php get_header(); ?>

    <div class="container">

        <div class="row my-5">
            <div class="col-9">

				<?php
				if ( is_search() ) :
					$total_results = $wp_query->found_posts;
					echo '<p class="lead text-center">' .
					     sprintf( __( 'Sua busca obteve %s resultado(s)', 'wp-multisites' ), $total_results, get_search_query() ) .
					     '</p>';
				endif;
				?>

                <ul class="list-group list-group-flush">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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

				<?php endwhile; ?>

				<?php else :

					echo
					"<div class='row justify-content-center'>
                <div class='col-12 col-sm-8 col-md-6'>
                    <li class=\"list-group-item bg-light px-0 py-5\">
                        Sua busca não retornou nenhum conteúdo. Tente outro termo.
                    </li>
                </div>
            </div>";

				endif;
				?>

                </ul>

                <div class="mt-4 mb-5 d-flex justify-content-between">
					<?php next_posts_link( 'Mais antigos' ); ?>
					<?php previous_posts_link( 'Mais novos' ); ?>
                </div>

            </div>
            <div class="col-3">
				<?php get_sidebar(); ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>