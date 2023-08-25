<?php
$tagname = get_sub_field('tagname') ?? '';
$heading = get_sub_field('heading') ?? '';
$button = get_sub_field('button') ?? '';
?>

<section class="section home-testimonials less-bottom-padding wf-section">
    <div class="container-default w-container">
        <div data-w-id="7a03c0b2-692f-358d-a0ea-f5d998709890" class="content-top home-testimonials"
            style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; opacity: 1;">
            <div class="split-content home-testimonials-content-top-left">
                <div class="badge"><?php echo esc_html($tagname); ?></div>
                <h2 class="title home-testimonials"><?php echo esc_html($heading); ?></h2>
            </div>

            <?php if ($button): ?>
                <div class="split-content home-testimonials-content-top-right">
                    <a href="<?php echo esc_url($button['url']); ?>"
                        class="button-primary-2 hide-on-mobile w-inline-block">
                        <div class="button-primary-text-wrapper">
                            <div><?php echo esc_html($button['title']); ?></div>
                            <div class="button-primary-arrow w-embed"><svg width="100%" height="100%" viewBox="0 0 16 14"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16 6.97949C16 6.70703 15.877 6.43457 15.6748 6.23242L10.2256 0.791992C9.99707 0.563477 9.75098 0.466797 9.50488 0.466797C8.9248 0.466797 8.51172 0.879883 8.51172 1.4248C8.51172 1.71484 8.62598 1.96094 8.81055 2.14551L10.6914 4.03516L12.9238 6.08301L11.0342 5.97754H1.14648C0.540039 5.97754 0.118164 6.38184 0.118164 6.97949C0.118164 7.57715 0.540039 7.99023 1.14648 7.99023H11.0342L12.9238 7.87598L10.6914 9.92383L8.81055 11.8223C8.62598 11.998 8.51172 12.2441 8.51172 12.5342C8.51172 13.0879 8.9248 13.501 9.50488 13.501C9.75098 13.501 9.99707 13.3955 10.208 13.1846L15.6748 7.72656C15.877 7.5332 16 7.26074 16 6.97949Z"
                                        fill="currentcolor"></path>
                                </svg></div>
                        </div>
                    </a>
                </div>
            <?php endif; ?>
        </div>

        <?php if (have_rows('testimonials_wrapper')): ?>

            <div data-w-id="7a03c0b2-692f-358d-a0ea-f5d99870989e" class="home-testimonials-wrapper"
                style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; opacity: 1;">
                <div id="w-node-_2cc5f9bc-3fba-aed0-a794-66f878ffa647-9870988e" class="w-dyn-list">
                    <div role="list" class="home-testimonials-grid w-dyn-items">
                    
                    <?php 
                        while (have_rows('testimonials_wrapper')): the_row(); 
                            $image = get_sub_field('image') ?? '';
                            $name = get_sub_field('name') ?? '';
                            $tagline = get_sub_field('tagline') ?? '';
                            $description = get_sub_field('description') ?? '';
                    ?>
                        <div role="listitem" class="w-dyn-item">
                            <div class="card home-testimonial">
                                <div class="card-home-testimonial-content-top">
                                    <div class="image-wrapper card-home-testimonial">
                                        <?php
                                            if ($image) {
                                                echo wp_get_attachment_image($image, array(100, 100), '', ["class" => "image card-home-testimonial"]);
                                            }
                                        ?>
                                    </div>
                                    <div class="card-home-testimonial-name-wrapper">
                                        <h3 class="title h4-size card-home-testimonial"><?php echo esc_html($name); ?></h3>
                                        <div class="card-home-testimonial-rol"><?php echo esc_html($tagline); ?></div>
                                    </div>
                                </div>
                                <p class="paragraph-2 card-home-testimonial"><?php echo esc_html($description); ?></p>
                            </div>
                        </div>

                    <?php endwhile; ?>

                    </div>
                </div>
                <div class="bg home-testimonials"></div>
            </div>
        <?php endif; ?>

    </div>
</section>