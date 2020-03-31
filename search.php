<?php /* Template Name: Search Page */
get_header();
?>
<div class="container search">
    <div class="row">
        <div>
            <?php
            if(have_posts()){?>
                <h1><?php printf(__('Search Results for : %s'), '<span>' . get_search_query() . '</span>'); ?></h1>
                <?php
                while(have_posts()){
                    the_post(); ?>
                <div class="col-12">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>">Read more...</a>
                </div>


                <?php
                    }//Ends while loop
                }else{?>
                    <div class="col-12">
                        <h1>Nothing was found<h1>
                        <p>Sorry, but nothing matched your search criteria. Please try again with a different search term.</p>
                        <?php get_search_form(); ?>
                    </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>
