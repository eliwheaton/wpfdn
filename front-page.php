<?php

get_header(); ?>


<div class="row pad-top">
    <div class="large-4 columns">
        <img src="" alt="" class="circle-img"  />
    </div>
    <div class="large-8 columns">
        <h3></h3>
        <p></p>
    </div>
</div>

<div class="row">
    <div class="large-12 columns">
        <hr />
    </div>
</div>

<div class="row">
    <div class="large-12 columns">
        <h3>Featured Projects</h3>
    </div>
</div>

<div class="row">
    <?php
    global $more;
    $args = 'post_type=wpfdn-portfolio&posts_per_page=2&tag=featured-projects';
    $loop = new WP_Query($args);
    remove_filter('the_content', 'wpautop');
    while ($loop->have_posts()): $loop->the_post(); $more = 0; ?>
        <div class="large-6 columns">
            <?php if (has_post_thumbnail()) : ?>
                <a href="<?= the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            <?php endif; ?> 
            <a href="<?= the_permalink(); ?>"><h6><?= the_title(); ?></h6></a>
            <p><?= the_content('More...'); ?></p>
        </div>
    <?php endwhile; ?>
</div>

<div class="row">
    <div class="large-12 columns">
        <hr />
    </div>
</div>

<div class="row">
    <div class="large-12 columns">
        <h3>Companies I've Worked With</h3>
    </div>
</div>

<div class="row">
    <ul data-orbit data-options="bullets:false; pause_on_hover:false;">
        <li>
            <div class="large-3 columns">
                <img src="http://placehold.it/300x250" />
            </div>
            <div class="large-3 columns">
                <img src="http://placehold.it/300x250" />
            </div>
            <div class="large-3 columns">
                <img src="http://placehold.it/300x250" />
            </div>
            <div class="large-3 columns">
                <img src="http://placehold.it/300x250" />
            </div>
        </li>
        <li>
            <div class="large-3 columns">
                <img src="http://placehold.it/300x250" />
            </div>
            <div class="large-3 columns">
                <img src="http://placehold.it/300x250" />
            </div>
            <div class="large-3 columns">
                <img src="http://placehold.it/300x250" />
            </div>
            <div class="large-3 columns">
                <img src="http://placehold.it/300x250" />
            </div>
        </li>
        <li>
            <div class="large-3 columns">
                <img src="http://placehold.it/300x250" />
            </div>
            <div class="large-3 columns">
                <img src="http://placehold.it/300x250" />
            </div>
            <div class="large-3 columns">
                <img src="http://placehold.it/300x250" />
            </div>
            <div class="large-3 columns">
                <img src="http://placehold.it/300x250" />
            </div>
        </li>
    </ul>
</div>

<div class="row">
    <div class="large-12 columns">
        <hr />
    </div>
</div>

<div class="row">
    <div class="large-12 columns">
        <h3>Things I'm Good At <small>well, some of the things ;)</small></h3>
    </div>
</div>

<div class="row">
    <div class="large-2 columns">
        <img src="http://placehold.it/300x250" />
    </div>
    <div class="large-2 columns">
        <img src="http://placehold.it/300x250" />
    </div>
    <div class="large-2 columns">
        <img src="http://placehold.it/300x250" />
    </div>
    <div class="large-2 columns">
        <img src="http://placehold.it/300x250" />
    </div>
    <div class="large-2 columns">
        <img src="http://placehold.it/300x250" />
    </div>
    <div class="large-2 columns">
        <img src="http://placehold.it/300x250" />
    </div>
</div>

<div class="row">
    <div class="large-12 columns">
        <hr />
    </div>
</div>

<div class="row">
    <div class="large-12 columns">
        <h3>Testimonials <small>these people trust me, you can too</small></h3>
    </div>
</div>

<div class="row">
    <div class="large-6 columns">
        <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna <cite>Some Guy</cite></blockquote>
    </div>
    <div class="large-6 columns">
        <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna <cite>Some Guy</cite></blockquote>
    </div>
</div>

<?php get_footer(); ?>
