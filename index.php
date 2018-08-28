<?php get_header(); ?>

    <main role="main" class="container">

        <div class="row">

            <div class="col-md-12 blog-main">

                <?php if ( have_posts() ) : ?>

                    <?php while ( have_posts() ) : the_post(); ?>

                        <!-- SINGLE POST -->
                        <div class="blog-post">

                            <!-- TITLE -->
                            <h2 class="blog-post-title">
                                <?php the_title(); ?>
                            </h2>

                            <!-- DATE / AUTHOR -->
                            <p class="blog-post-meta">
                                <?php the_date(); ?> by
                                <?php the_author_meta( 'first_name' ); ?>
                            </p>

                            <!-- CONTENT -->
                            <p class="blog-post-content">
                                <?php the_content(); ?>
                            </p>

                        </div>
                        
                    <?php endwhile; ?>

                <?php else: ?>

                    <p>No posts.</p>

                <?php endif; ?>

            </div>

        </div><!-- /.blog-row -->

    </main><!-- /.container -->

<?php get_footer(); ?>