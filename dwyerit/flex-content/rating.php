<?php if (have_rows('rating_wrapper')): ?>

    <section class="section ratings wf-section">
        <div class="container-default">
            <div class="_3-grid">

                <?php
                while (have_rows('rating_wrapper')):
                    the_row();
                    $image = get_sub_field('image');
                    $text = get_sub_field('text');
                    ?>
                    <div id="w-node-_479f4f6b-d1c8-f83e-7353-e2eb083a3294-9e6f8dcc"
                        data-w-id="479f4f6b-d1c8-f83e-7353-e2eb083a3294"
                        style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;"
                        class="rating-wrapper">

                        <?php
                        if ($image) {
                            echo wp_get_attachment_image($image, '', '', ["class" => "image rating-logo max-size smaller"]);
                        }
                        ?>
                        <div class="rating-content">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/stars.svg' ?>" loading="lazy"
                                alt="" class="image rating-stars">

                            <?php if ($text): ?>
                                <p class="paragraph-2 rating">
                                    <?php echo esc_html($text); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>

            </div>
        </div>
    </section>

<?php endif; ?>