<?php /* Template name: Página inicial */ ?>

<?php get_header(); ?>

    <div class="container">

        <div class="row">

            <?php
            $args = array(
                'post_type' => 'destaques',
                'posts_per_page' => 2
            );
            $the_query = new WP_Query($args);

            if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
            <div class="col-6">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="..." class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title 2</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
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

        </div>

    </div>

<?php get_footer(); ?>