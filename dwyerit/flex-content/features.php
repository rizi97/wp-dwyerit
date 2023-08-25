<?php
$tagname = get_sub_field('tagname') ?? '';
$heading = get_sub_field('heading') ?? '';
$button = get_sub_field('button') ?? '';
?>

<section class="section less---pad wf-section">
    <div data-w-id="479f4f6b-d1c8-f83e-7353-e2eb083a330a"
        style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;"
        class="container-small margin-bottom-medium text-center">
        <div class="badge"><?php echo esc_html($tagname); ?></div>
        <h2><span><?php echo esc_html($heading); ?> </span></h2>
    </div>
    <div class="container-default">
        <div data-w-id="479f4f6b-d1c8-f83e-7353-e2eb083a3311"
            style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;"
            class="home-features-wrapper">

            <?php if (have_rows('cards_wrapper')): ?>
                <div class="w-layout-grid home-features-grid">
                    
                    <?php 
                        while (have_rows('cards_wrapper')): the_row(); 
                            $image = get_sub_field('image') ?? '';
                            $title = get_sub_field('title') ?? '';
                            $description = get_sub_field('description') ?? '';
                    ?>
                        <div class="card home-features">
                            <div class="home-card-icon-wrapper">
                                <div class="image icon bg-color-2"></div>
                                <div class="svg-icon-emb absolute-position bg-svg-color-2 w-embed">
                                <?php
                                    if ($image) {
                                        echo wp_get_attachment_image($image, '', '', ["class" => "image home-hero-v3-image-1"]);
                                    }
                                ?>
                                </div>
                            </div>
                            <div class="card-home-features-content">
                                <h3 class="title card-home-features"><?php echo esc_html($title); ?></h3>
                                <p class="paragraph-2 card-home-features"><?php echo wp_kses_post($description); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    
                </div>

            <?php endif; ?>

            <div class="bg home-features"></div>
        </div>

        <?php if ($button): ?>
            <div class="flex-vc home-features">
                <div class="_2-buttons-wrapper"><a href="<?php echo esc_url($button['url']); ?>" class="button-primary-2 _2-buttons w-inline-block">
                        <div class="button-primary-text-wrapper">
                            <div><?php echo esc_html($button['title']); ?></div>
                            <div class="button-primary-arrow w-embed"><svg width="100%" height="100%" viewBox="0 0 16 14"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16 6.97949C16 6.70703 15.877 6.43457 15.6748 6.23242L10.2256 0.791992C9.99707 0.563477 9.75098 0.466797 9.50488 0.466797C8.9248 0.466797 8.51172 0.879883 8.51172 1.4248C8.51172 1.71484 8.62598 1.96094 8.81055 2.14551L10.6914 4.03516L12.9238 6.08301L11.0342 5.97754H1.14648C0.540039 5.97754 0.118164 6.38184 0.118164 6.97949C0.118164 7.57715 0.540039 7.99023 1.14648 7.99023H11.0342L12.9238 7.87598L10.6914 9.92383L8.81055 11.8223C8.62598 11.998 8.51172 12.2441 8.51172 12.5342C8.51172 13.0879 8.9248 13.501 9.50488 13.501C9.75098 13.501 9.99707 13.3955 10.208 13.1846L15.6748 7.72656C15.877 7.5332 16 7.26074 16 6.97949Z"
                                        fill="currentcolor"></path>
                                </svg></div>
                        </div>
                    </a></div>
            </div>
        <?php endif; ?>
    </div>
</section>