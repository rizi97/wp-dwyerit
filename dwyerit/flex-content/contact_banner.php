<?php
$heading = get_sub_field('title') ?? '';
$button = get_sub_field('button') ?? '';
$lottie_json_url = get_sub_field('lottie_json_url') ?? '';
?>

<section class="section cta wf-section">
    <div class="container-default w-container">
        <div class="cta-wrapper">
            <div class="split-content cta-left">
                <h2 class="title text-color-neutral-100 cta"><span><?php echo esc_html($heading); ?></span></h2>
                
                <?php if ($button): ?>
                    <a href="<?php echo esc_url($button['url']); ?>" class="button-primary-2 white-button w-inline-block">
                        <div class="button-primary-text-wrapper prim-color">
                            <div><?php echo esc_html($button['title']); ?></div>
                            <div class="button-primary-arrow w-embed">
                                <svg width="100%" height="100%" viewBox="0 0 16 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16 6.97949C16 6.70703 15.877 6.43457 15.6748 6.23242L10.2256 0.791992C9.99707 0.563477 9.75098 0.466797 9.50488 0.466797C8.9248 0.466797 8.51172 0.879883 8.51172 1.4248C8.51172 1.71484 8.62598 1.96094 8.81055 2.14551L10.6914 4.03516L12.9238 6.08301L11.0342 5.97754H1.14648C0.540039 5.97754 0.118164 6.38184 0.118164 6.97949C0.118164 7.57715 0.540039 7.99023 1.14648 7.99023H11.0342L12.9238 7.87598L10.6914 9.92383L8.81055 11.8223C8.62598 11.998 8.51172 12.2441 8.51172 12.5342C8.51172 13.0879 8.9248 13.501 9.50488 13.501C9.75098 13.501 9.99707 13.3955 10.208 13.1846L15.6748 7.72656C15.877 7.5332 16 7.26074 16 6.97949Z"
                                        fill="currentcolor"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                <?php endif; ?>
            </div>

            <div class="split-content cta-right">
                <div data-w-id="600a32ff-efe8-2ce0-044f-8c92f8262f46" data-animation-type="lottie"
                    data-src="<?php echo esc_url($lottie_json_url); ?>"
                    data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg"
                    data-default-duration="8" data-duration="0">
                </div>
            </div>

        </div>
    </div>
</section>