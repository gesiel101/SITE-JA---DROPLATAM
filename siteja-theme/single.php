<?php get_header(); ?>
<main class="py-24">
    <div class="container mx-auto px-4">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
                <h1 class="text-4xl font-bold mb-8"><?php the_title(); ?></h1>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="mb-8 rounded-2xl overflow-hidden">
                        <?php the_post_thumbnail('large', array('class' => 'w-full h-auto')); ?>
                    </div>
                <?php endif; ?>
                <div class="prose prose-invert max-w-none">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; endif; ?>
    </div>
</main>
<?php get_footer(); ?>
