<?php
$heading = get_sub_field('heading') ?? '';
$description = get_sub_field('description') ?? '';
$button = get_sub_field('button') ?? '';
$image = get_sub_field('image') ?? '';
?>

<section class="section home-hero-v3 wf-section">
    <div class="container-default home-hero-v3">
        <div class="home-hero-v3-wrapper">
            <div class="split-content home-hero-v3-content">

                <?php if ($heading): ?>
                    <h1 data-w-id="479f4f6b-d1c8-f83e-7353-e2eb083a3280"
                        style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;"
                        class="title home-hero-v3"><?php echo esc_html($heading); ?>
                    </h1>
                <?php endif; ?>

                <?php
                if ($description) {
                    echo wp_kses_post($description);
                }
                ?>

                <?php if ($button): ?>
                    <div data-w-id="479f4f6b-d1c8-f83e-7353-e2eb083a3284"
                        style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;">
                        <a href="<?php echo esc_url($button['url']); ?>" class="button-primary-2 w-inline-block">
                            <div class="button-primary-text-wrapper">
                                <div>
                                    <?php echo esc_html($button['title']); ?>
                                </div>
                                <div class="button-primary-arrow w-embed"><svg width="100%" height="100%"
                                        viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16 6.97949C16 6.70703 15.877 6.43457 15.6748 6.23242L10.2256 0.791992C9.99707 0.563477 9.75098 0.466797 9.50488 0.466797C8.9248 0.466797 8.51172 0.879883 8.51172 1.4248C8.51172 1.71484 8.62598 1.96094 8.81055 2.14551L10.6914 4.03516L12.9238 6.08301L11.0342 5.97754H1.14648C0.540039 5.97754 0.118164 6.38184 0.118164 6.97949C0.118164 7.57715 0.540039 7.99023 1.14648 7.99023H11.0342L12.9238 7.87598L10.6914 9.92383L8.81055 11.8223C8.62598 11.998 8.51172 12.2441 8.51172 12.5342C8.51172 13.0879 8.9248 13.501 9.50488 13.501C9.75098 13.501 9.99707 13.3955 10.208 13.1846L15.6748 7.72656C15.877 7.5332 16 7.26074 16 6.97949Z"
                                            fill="currentcolor"></path>
                                    </svg></div>
                            </div>
                        </a>
                    </div>
                <?php endif; ?>

            </div>
            <div data-w-id="479f4f6b-d1c8-f83e-7353-e2eb083a328b"
                style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;"
                class="split-content home-hero-v3-images-wrapper">

                <?php
                if ($image) {
                    echo wp_get_attachment_image($image, '', '', ["class" => "image home-hero-v3-image-1"]);
                }
                ?>

                <img src="<?php echo get_template_directory_uri() . '/assets/images/bg-dots-saas-x-template.svg' ?>"
                    loading="eager" alt="" class="image home-hero-v3-bg-1"
                    style="will-change: transform; transform: translate3d(0px, -5.1976px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
            </div>
        </div>
    </div>
    <div data-w-id="479f4f6b-d1c8-f83e-7353-e2eb083a3290"
        style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;"
        class="bg home-hero-v3"></div>
</section>