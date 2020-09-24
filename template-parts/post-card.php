<div class="col">
    <div class="card h-100 shadow-sm text-white">
        <?php
        if (has_post_thumbnail()) {
            the_post_thumbnail('thumbnail', ['class' => 'card-img', 'title' => get_the_title()]);
        } else {
        ?>
            <img src="https://via.placeholder.com/150" class="card-img" />

        <?php
        }
        ?>
        <!-- <div class="card-img-overlay">
            <h5 class="card-title shadow">
                <?php the_title(); ?>
            </h5>
        </div> -->

        <div class="card-body">
            <h4 class="card-title text-black-50">
                <?= strip_tags( get_the_title() ); ?>
            </h4>
            <p class="card-text text-black-50">
                <?php
                $excerpt = get_the_excerpt();
                $excerpt = strip_tags($excerpt);
                $excerpt = substr($excerpt, 0, 260);
                echo $excerpt;
                ?>
            </p>

        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-between align-items-center">
                <a class="btn btn-sm btn-outline-secondary" href="<?php the_permalink(); ?>" role="button" data-toggle="button">نمایش بیشتر</a>
                <p class="text-muted"><?php the_date();?></p>
            </div>


        </div>
    </div>
</div>