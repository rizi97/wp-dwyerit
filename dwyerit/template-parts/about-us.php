<?php
$heading = get_field('about_heading') ?? '';
$description = get_field('about_description') ?? '';
$button = get_field('about_button') ?? '';
$image_one = get_field('about_image_one') ?? '';
$image_two = get_field('about_image_two') ?? '';
$image_three = get_field('about_image_three') ?? '';
$image_four = get_field('about_image_four') ?? '';
$ai_fr_heading = get_field('ai_fr_heading') ?? '';
$ai_fr_description = get_field('ai_fr_description') ?? '';
$ai_fr_image = get_field('ai_fr_image') ?? '';
$ai_sr_heading = get_field('ai_sr_heading') ?? '';
$ai_sr_description = get_field('ai_sr_description') ?? '';
$ai_sr_image = get_field('ai_sr_image') ?? '';
$ov_tagname = get_field('ov_tagname') ?? '';
$ov_heading = get_field('ov_heading') ?? '';
$ov_button = get_field('ov_button') ?? '';
$ov_card_one_heading = get_field('ov_card_one_heading') ?? '';
$ov_card_one_description = get_field('ov_card_one_description') ?? '';
$ov_card_two_heading = get_field('ov_card_two_heading') ?? '';
$ov_card_two_description = get_field('ov_card_two_description') ?? '';
$ov_card_three_heading = get_field('ov_card_three_heading') ?? '';
$ov_card_three_description = get_field('ov_card_three_description') ?? '';
$ov_card_four_heading = get_field('ov_card_four_heading') ?? '';
$ov_card_four_description = get_field('ov_card_four_description') ?? '';
?>

<section class="section about-hero wf-section">
    <div class="about-us-heading">
        <h1 data-w-id="b9969d22-031b-a879-1a9d-dcdfbbdad29c"
            style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;"
            class="title about-hero"><?php echo esc_html($heading); ?></h1>
        <p data-w-id="b9969d22-031b-a879-1a9d-dcdfbbdad29e"
            style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;"
            class="paragraph about-hero"><?php echo wp_kses($description, 'p'); ?>
        </p>

        <?php if ($button): ?>
            <div data-w-id="b9969d22-031b-a879-1a9d-dcdfbbdad2a1"
                style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;">
                <a href="<?php echo esc_url($button['url']); ?>" class="button-primary-2 w-inline-block">
                    <div class="button-primary-text-wrapper">
                        <div>
                            <?php echo esc_html($button['title']); ?>
                        </div>
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
    <div class="container-default about-hero w-container">
        <div data-w-id="b9969d22-031b-a879-1a9d-dcdfbbdad2a8"
            style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;"
            class="w-layout-grid about-hero-images-grid">
            <div class="split-content about-hero-images-left">

                <?php
                if ($image_one) {
                    echo wp_get_attachment_image($image_one, 'medium_large', '', ["class" => "image about-hero-1", "style" => "height: auto"]);
                }

                if ($image_three) {
                    echo wp_get_attachment_image($image_three, 'medium_large', '', ["class" => "image about-hero-2", "style" => "height: auto"]);
                }
                ?>

            </div>
            <div class="split-content about-hero-images-right">

                <?php
                if ($image_two) {
                    echo wp_get_attachment_image($image_two, 'medium_large', '', ["class" => "image about-hero-3", "style" => "height: auto"]);
                }

                if ($image_four) {
                    echo wp_get_attachment_image($image_four, 'medium_large', '', ["class" => "image about-hero-4", "style" => "height: auto"]);
                }
                ?>

            </div>
        </div>

        <?php if (have_rows('about_card_items')):
            $local_count = 1; ?>
            <div class="w-layout-grid about-hero-achievements-grid">

                <?php
                while (have_rows('about_card_items')):
                    the_row();
                    $heading = get_sub_field('heading');
                    $colorful_heading = get_sub_field('colorful_heading');
                    $tagline = get_sub_field('tagline');
                    $description = get_sub_field('description');
                    ?>
                    <div data-w-id="b9969d22-031b-a879-1a9d-dcdfbbdad2b0"
                        style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;"
                        class="about-hero-achievement-wrapper">
                        <div class="large-number about-hero-achievement">
                            <?php echo esc_html($heading); ?><span
                                class="text-accent-<?php echo $local_count == 1 ? 'primary-1' : 'secondary-' . $local_count; ?>"><?php echo esc_html($colorful_heading); ?>
                            </span>
                        </div>
                        <div class="about-hero-achievement-content">
                            <h1 class="title h4-size about-hero-achievement">
                                <?php echo esc_html($tagline); ?>
                            </h1>
                            <p class="paragraph about-hero-achievement">
                                <?php echo esc_html($description); ?>
                            </p>
                        </div>
                    </div>
                    <?php $local_count++; endwhile; ?>

            </div>
        <?php endif; ?>

    </div>
    <div class="bg about-hero"></div>
</section>

<div class="container-default w-container">
    <div class="divider"></div>
</div>

<section class="section padding-164px less-pad-bot-mobile wf-section">
    <div class="container-default w-container">
        <div class="story-wrapper">
            <div data-w-id="b9969d22-031b-a879-1a9d-dcdfbbdad2d4"
                style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;"
                class="story-content-top">
                <div class="split-content story-content-top-left">
                    <h2 class="title story-content-top-title"><strong>
                            <?php echo esc_html($ai_fr_heading); ?>
                        </strong></h2>
                    <p class="paragraph story-content-top-paragraph">
                        <?php echo wp_kses_post($ai_fr_description); ?>
                    </p>
                </div>
                <div class="image-wrapper story-content-top-image smaller">
                    <?php
                    if ($ai_fr_image) {
                        echo wp_get_attachment_image($ai_fr_image, 'medium_large', '', ["class" => "image story-content-top-image", "style" => "height: auto"]);
                    }
                    ?>
                </div>
            </div>
            <div data-w-id="b9969d22-031b-a879-1a9d-dcdfbbdad2dc"
                style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;"
                class="story-content-bottom grid">
                <div class="image-wrapper story-content-bottom-image">
                    <?php
                    if ($ai_sr_image) {
                        echo wp_get_attachment_image($ai_sr_image, 'medium_large', '', ["class" => "image story-content-bottom-image", "style" => "height: auto"]);
                    }
                    ?>
                </div>
                <div id="w-node-b9969d22-031b-a879-1a9d-dcdfbbdad2df-966f8e1d" class="card story-content-bottom-info">
                    <h2 class="title story-content-bottom-title">
                        <?php echo esc_html($ai_sr_heading); ?>
                    </h2>
                    <p class="paragraph story-content-bottom-paragraph">
                        <?php echo wp_kses_post($ai_sr_description); ?>
                    </p>
                </div>
            </div>
            <div class="bg story"></div>
        </div>
    </div>
</section>


<section class="section bg-neutral-200 values wf-section">
    <div class="container-default w-container">
        <div data-w-id="b9969d22-031b-a879-1a9d-dcdfbbdad2ea"
            style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;"
            class="content-top values">
            <div class="split-content values-content-top-left">
                <div class="badge white"><?php echo esc_html($ov_tagname); ?></div>
                <h2 class="title values"><?php echo esc_html($ov_heading); ?></h2>
            </div>
            <?php if ($ov_button): ?>
                    <div data-w-id="479f4f6b-d1c8-f83e-7353-e2eb083a3284"
                        style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;">
                        <a href="<?php echo esc_url($ov_button['url']); ?>" class="button-primary-2 w-inline-block">
                            <div class="button-primary-text-wrapper">
                                <div>
                                    <?php echo esc_html($ov_button['title']); ?>
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
        <div data-w-id="b9969d22-031b-a879-1a9d-dcdfbbdad2f7"
            style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;"
            class="w-layout-grid values-grid">
            
            <?php if($ov_card_one_heading || $ov_card_one_description) : ?>
                <div class="card value">
                    <div class="card-value-icon-wrapper">
                        <div class="image icon bg-color-1"></div>
                        <div class="svg-icon-emb absolute-position bg-svg-color-1 w-embed"><svg width="100%" height="100%"
                                viewBox="0 0 65 65" fill="currentColor">
                                <path
                                    d="M36.0272 45.9785H27.9672C27.7839 45.9785 27.6037 46.0254 27.4437 46.1147C27.2836 46.204 27.1491 46.3327 27.0528 46.4886C26.9565 46.6445 26.9017 46.8225 26.8936 47.0056C26.8855 47.1887 26.9244 47.3708 27.0065 47.5346L27.7286 48.9768C28.0832 49.6914 28.6306 50.2926 29.3089 50.7123C29.9873 51.132 30.7696 51.3535 31.5673 51.3518H32.427C33.2239 51.3547 34.0058 51.1348 34.6844 50.7171C35.363 50.2993 35.9115 49.7003 36.2679 48.9876L36.99 47.5454C37.0722 47.3814 37.1111 47.1991 37.1029 47.0158C37.0946 46.8325 37.0396 46.6544 36.9431 46.4984C36.8466 46.3425 36.7117 46.2138 36.5514 46.1246C36.3911 46.0355 36.2106 45.9889 36.0272 45.9893V45.9785Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M31.9967 12.6638C29.0266 12.6682 26.1351 13.6191 23.7421 15.3785C21.3491 17.1378 19.579 19.6141 18.6889 22.4477C17.7989 25.2814 17.835 28.325 18.7922 31.1367C19.7494 33.9484 21.5778 36.3819 24.012 38.0838C24.1547 38.1828 24.2712 38.3148 24.3517 38.4687C24.4322 38.6225 24.4742 38.7936 24.4741 38.9672V40.605C24.4741 41.175 24.7005 41.7217 25.1036 42.1248C25.5067 42.5279 26.0534 42.7543 26.6234 42.7543H37.37C37.9401 42.7543 38.4867 42.5279 38.8898 42.1248C39.2929 41.7217 39.5193 41.175 39.5193 40.605V38.9651C39.5193 38.7914 39.5613 38.6204 39.6418 38.4665C39.7222 38.3127 39.8388 38.1806 39.9814 38.0817C42.4218 36.3833 44.2561 33.9502 45.2173 31.1367C46.1785 28.3232 46.2163 25.2764 45.3252 22.4399C44.4342 19.6034 42.6608 17.1255 40.2634 15.3671C37.866 13.6087 34.9699 12.6616 31.9967 12.6638V12.6638Z"
                                    fill="currentColor"></path>
                            </svg></div>
                    </div>
                    <div class="card-value-content">
                        <h3 class="title card-value"><?php echo esc_html($ov_card_one_heading); ?></h3>
                        <p class="paragraph card-value"><?php echo esc_html($ov_card_one_description); ?></p>
                    </div>
                </div>
            <?php endif; ?>


            <?php if($ov_card_two_heading || $ov_card_two_description) : ?>
                <div class="card value">
                    <div class="card-value-icon-wrapper">
                        <div class="image icon bg-color-2"></div>
                        <div class="svg-icon-emb absolute-position bg-svg-color-2 w-embed"><svg width="100%" height="100%"
                                viewBox="0 0 65 65" fill="currentColor">

                                <path
                                    d="M43.3964 36.466C42.8986 36.9484 42.6699 37.6462 42.7833 38.3304L44.492 47.7871C44.6362 48.5886 44.2979 49.3998 43.6271 49.863C42.9697 50.3435 42.0952 50.4012 41.3782 50.0168L32.8653 45.5767C32.5693 45.4191 32.2406 45.3345 31.9042 45.3249H31.3833C31.2026 45.3518 31.0258 45.4095 30.8644 45.4979L22.3495 49.9591C21.9285 50.1705 21.4519 50.2455 20.9848 50.1705C19.8469 49.9552 19.0877 48.8712 19.2741 47.7275L20.9848 38.2708C21.0982 37.5808 20.8695 36.8792 20.3716 36.3891L13.431 29.6618C12.8505 29.0986 12.6487 28.2529 12.9139 27.4898C13.1715 26.7287 13.8288 26.1732 14.6227 26.0482L24.1755 24.6624C24.902 24.5874 25.5402 24.1454 25.8669 23.4918L30.0763 14.8616C30.1762 14.6694 30.305 14.4926 30.4607 14.3427L30.6337 14.2081C30.724 14.1082 30.8278 14.0255 30.9432 13.9583L31.1527 13.8814L31.4794 13.7468H32.2886C33.0113 13.8218 33.6475 14.2543 33.9801 14.9001L38.2452 23.4918C38.5527 24.1204 39.1505 24.5567 39.8405 24.6624L49.3933 26.0482C50.2006 26.1636 50.8753 26.721 51.1425 27.4898C51.3942 28.2606 51.1771 29.1063 50.585 29.6618L43.3964 36.466Z"
                                    fill="currentColor"></path>
                            </svg></div>
                    </div>
                    <div class="card-value-content">
                        <h3 class="title card-value"><?php echo esc_html($ov_card_two_heading); ?></h3>
                        <p class="paragraph card-value"><?php echo esc_html($ov_card_two_description); ?></p>
                    </div>
                </div>
            <?php endif; ?>


            <?php if($ov_card_three_heading || $ov_card_three_description) : ?>
                <div class="card value">
                    <div class="card-value-icon-wrapper">
                        <div class="image icon bg-color-3"></div>
                        <div class="svg-icon-emb absolute-position bg-svg-color-3 w-embed"><svg width="100%" height="100%"
                                viewBox="0 0 65 65" fill="none">

                                <path
                                    d="M25.6228 43.8125C25.6652 43.6897 25.7334 43.5775 25.823 43.4834C25.9126 43.3893 26.0214 43.3156 26.142 43.2673C26.2626 43.219 26.3922 43.1972 26.5219 43.2034C26.6517 43.2096 26.7786 43.2437 26.894 43.3033C28.4868 44.1309 30.2564 44.56 32.0513 44.5539C33.8461 44.5478 35.6128 44.1067 37.1999 43.2684C37.3163 43.2071 37.4447 43.1718 37.5762 43.1653C37.7076 43.1587 37.8389 43.1808 37.9609 43.2303C38.0828 43.2797 38.1926 43.3551 38.2823 43.4513C38.3721 43.5475 38.4399 43.6622 38.4807 43.7873L40.0457 48.6085C40.115 48.8203 40.1503 49.0418 40.1504 49.2646V50.8801C40.1501 51.1574 40.0951 51.4319 39.9886 51.6879C39.8821 51.9439 39.7262 52.1764 39.5297 52.3721C39.3333 52.5677 39.1002 52.7227 38.8437 52.8282C38.5873 52.9337 38.3126 52.9876 38.0353 52.9868H25.9719C25.4134 52.9862 24.8779 52.764 24.483 52.3691C24.088 51.9741 23.8659 51.4387 23.8652 50.8801V49.2754C23.8647 49.0432 23.903 48.8125 23.9784 48.5929L25.6228 43.8125Z"
                                    fill="currentColor"></path>
                                <circle cx="31.7686" cy="27.5355" r="11.0049" fill="white"></circle>
                                <circle cx="32.0078" cy="26.3576" r="15.2969" fill="currentColor"></circle>
                                <path
                                    d="M40.1506 21.6836L30.4921 31.3422C30.3691 31.4653 30.223 31.5629 30.0622 31.6295C29.9015 31.6962 29.7292 31.7304 29.5552 31.7304C29.3811 31.7304 29.2088 31.6962 29.0481 31.6295C28.8873 31.5629 28.7413 31.4653 28.6183 31.3422L25.5859 28.3063"
                                    stroke="white" stroke-width="2.94944" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg></div>
                    </div>
                    <div class="card-value-content">
                        <h3 class="title card-value"><?php echo esc_html($ov_card_three_heading); ?></h3>
                        <p class="paragraph card-value"><?php echo esc_html($ov_card_three_description); ?></p>
                    </div>
                </div>
            <?php endif; ?>


            <?php if($ov_card_four_heading || $ov_card_four_description) : ?>
                <div class="card value">
                    <div class="card-value-icon-wrapper">
                        <div class="image icon bg-color-4"></div>
                        <div class="svg-icon-emb absolute-position bg-svg-color-4 w-embed"><svg width="100%" height="100%"
                                viewBox="0 0 86 86" fill="currentColor">

                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M39.2573 45.5819C46.2158 45.5819 51.7936 39.8292 51.7936 32.6525C51.7936 25.4759 46.2158 19.7231 39.2573 19.7231C32.2989 19.7231 26.721 25.4759 26.721 32.6525C26.721 39.8292 32.2989 45.5819 39.2573 45.5819ZM39.2586 49.7234C29.0384 49.7234 20.3125 51.3872 20.3125 58.0344C20.3125 64.679 28.9853 66.4028 39.2586 66.4028C49.4762 66.4028 58.2046 64.739 58.2046 58.0918C58.2046 51.4445 49.5319 49.7234 39.2586 49.7234ZM65.5268 37.9537H68.5659C69.8169 37.9537 70.8369 39.0068 70.8369 40.2985C70.8369 41.5901 69.8169 42.6432 68.5659 42.6432H65.5268V45.6713C65.5268 46.9629 64.5094 48.016 63.2558 48.016C62.0049 48.016 60.9849 46.9629 60.9849 45.6713V42.6432H57.9509C56.6974 42.6432 55.68 41.5901 55.68 40.2985C55.68 39.0068 56.6974 37.9537 57.9509 37.9537H60.9849V34.9283C60.9849 33.6367 62.0049 32.5836 63.2558 32.5836C64.5094 32.5836 65.5268 33.6367 65.5268 34.9283V37.9537Z"
                                    fill="currentColor"></path>
                            </svg></div>
                    </div>
                    <div class="card-value-content">
                        <h3 class="title card-value"><?php echo esc_html($ov_card_four_heading); ?></h3>
                        <p class="paragraph card-value"><?php echo esc_html($ov_card_four_description); ?></p>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>
    <div class="bg skew-top"></div>
    <div class="bg skew-bottom"></div>
</section>