<?php
$image = get_sub_field('image') ?? '';
$tagname = get_sub_field('tagname') ?? '';
$heading = get_sub_field('heading') ?? '';
$heading_id = $heading ? str_replace(" ", "-", strtolower($heading)) : '';
$description = get_sub_field('description') ?? '';
$show_image = get_sub_field('show_image') ?? '';
$items_style_to_show = get_sub_field('items_style_to_show') ?? '';
$show_divider = get_sub_field('show_divider') ?? '';
$show_button = get_sub_field('show_button') ?? '';
$show_title = get_sub_field('show_title') ?? '';
$title = get_sub_field('title') ?? '';
?>

<section id="<?php echo esc_attr($heading_id); ?>" class="section analytics-v3 wf-section">
    <div class="container-default w-container">

        <?php if ($show_title): ?>
            <div class="features-hero-heading max-width-increase">
                <h2 data-w-id="e1369f90-0064-4cc6-5602-b8a218e37515"
                    style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;"
                    class="title features-hero"><?php echo esc_html($title); ?></h2>
            </div>
        <?php endif; ?>

        <div class="feature-v3-wrapper">
            <?php if ($show_image === 'left'): ?>

                <div id="w-node-c8eb44b7-9ed5-68f3-811e-cf6808c29c92-186f8e91"
                    data-w-id="c8eb44b7-9ed5-68f3-811e-cf6808c29c92" class="split-content integrations-v1-left">

                    <?php
                    if ($image) {
                        echo wp_get_attachment_image($image, 'medium_large', '', ["class" => "image relative", "style" => "height: auto"]);
                    }
                    ?>

                    <div class="bg integrations-v1-images bg-taller"></div>
                </div>

            <?php endif; ?>

            <div id="w-node-_26214971-b495-4274-d4be-9596b45eff61-186f8e91"
                data-w-id="26214971-b495-4274-d4be-9596b45eff61"
                style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;"
                class="split-content feature-v3-content">

                <?php if ($tagname): ?>
                    <div class="badge">
                        <?php echo esc_html($tagname); ?>
                    </div>
                <?php endif; ?>

                <h2 class="title feature-v3">
                    <?php echo esc_html($heading); ?>
                </h2>
                <p class="paragraph feature-v3">
                    <?php echo wp_kses_post($description); ?>
                </p>

                <?php if ($show_button): ?>
                    <a href="<?php echo home_url('/contact-us'); ?>" class="button-primary-2 w-inline-block margin-top-xsmall">
                        <div class="button-primary-text-wrapper">
                            <div>Get started</div>
                            <div class="button-primary-arrow w-embed"
                                style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                <svg width="100%" height="100%" viewBox="0 0 16 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16 6.97949C16 6.70703 15.877 6.43457 15.6748 6.23242L10.2256 0.791992C9.99707 0.563477 9.75098 0.466797 9.50488 0.466797C8.9248 0.466797 8.51172 0.879883 8.51172 1.4248C8.51172 1.71484 8.62598 1.96094 8.81055 2.14551L10.6914 4.03516L12.9238 6.08301L11.0342 5.97754H1.14648C0.540039 5.97754 0.118164 6.38184 0.118164 6.97949C0.118164 7.57715 0.540039 7.99023 1.14648 7.99023H11.0342L12.9238 7.87598L10.6914 9.92383L8.81055 11.8223C8.62598 11.998 8.51172 12.2441 8.51172 12.5342C8.51172 13.0879 8.9248 13.501 9.50488 13.501C9.75098 13.501 9.99707 13.3955 10.208 13.1846L15.6748 7.72656C15.877 7.5332 16 7.26074 16 6.97949Z"
                                        fill="currentcolor"></path>
                                </svg></div>
                        </div>
                    </a>
                <?php endif; ?>

                <?php if (have_rows('items_wrapper') && $items_style_to_show !== 'none'): ?>
                    <div
                        class="w-layout-grid feature-v3-grid <?php echo ($items_style_to_show === 'vertical') ? '_1-column margin-top' : 'margin-top-small'; ?>">

                        <?php
                        while (have_rows('items_wrapper')):
                            the_row();
                            $icon = get_sub_field('image');
                            $title = get_sub_field('title');
                            ?>
                            <div class="feature-v3-grid-feature-wrapper">
                                <div class="feature-v3-grid-feature-icon-wrapper">
                                    <div class="image icon bg-color-1"></div>
                                    <div class="svg-icon-emb absolute-position bg-svg-color-1 w-embed">
                                        <?php
                                        if ($icon) {
                                            echo wp_get_attachment_image($icon, 'thumbnail');
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="feature-v3-grid-feature-text">
                                    <?php echo esc_html($title); ?><br>
                                </div>
                            </div>
                        <?php endwhile; ?>

                    </div>
                <?php endif; ?>

            </div>

            <?php if ($show_image === 'right'): ?>

                <div id="w-node-c8eb44b7-9ed5-68f3-811e-cf6808c29c92-186f8e91"
                    data-w-id="c8eb44b7-9ed5-68f3-811e-cf6808c29c92" class="split-content integrations-v1-left">

                    <?php
                    if ($image) {
                        echo wp_get_attachment_image($image, 'medium_large', '', ["class" => "image relative", "style" => "height: auto"]);
                    }
                    ?>

                    <div class="bg integrations-v1-images"></div>
                </div>

            <?php endif; ?>

        </div>
    </div>
</section>


<?php if ($show_divider): ?>
    <div class="divider"></div>
<?php endif; ?>