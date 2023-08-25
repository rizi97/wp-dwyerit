<?php
$heading = get_sub_field('heading') ?? '';
$description = get_sub_field('description') ?? '';
?>

<section class="section bg-neutral-200 features-hero wf-section">
    <div class="features-hero-heading">
        <h1 data-w-id="26214971-b495-4274-d4be-9596b45eff42"
            style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;"
            class="title features-hero"><?php echo esc_html($heading); ?></h1>
        <p data-w-id="26214971-b495-4274-d4be-9596b45eff44"
            style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;"
            class="paragraph features-hero"><?php echo wp_kses_post($description); ?></p>
    </div>

    <?php if (have_rows('btns_wrapper')): ?>
        <div class="container-medium">
            <div class="features-navigation-buttons-wrapper custom-width">
            <?php 
                while (have_rows('btns_wrapper')): the_row(); 
                    $image = get_sub_field('button_icon');
                    $button_name_link  = get_sub_field('button_name_link');

                    if($button_name_link && is_array($button_name_link)) :
            ?>
                        <a href="<?php echo esc_url($button_name_link['url']); ?>" class="features-navigation-button w-inline-block">
                            <?php if ($image) : ?>
                                <div class="small-svg-icons w-embed">
                                    <?php echo wp_get_attachment_image($image, array(50, 50), '', ["style" => "width: 80%; height: 100%"]); ?>
                                </div>
                            <?php endif; ?>
                            <div><?php echo esc_html($button_name_link['title']); ?></div>
                        </a>
            <?php 
                    endif;
                endwhile; 
            ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="bg skew-bottom"></div>
</section>