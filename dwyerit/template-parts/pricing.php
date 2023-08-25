<?php
    $heading = get_field('heading') ?? '';
    $description = get_field('description') ?? '';
    $pricing_table_heading = get_field('pricing_table_heading') ?? '';
    $pricing_table_description = get_field('pricing_table_description') ?? '';
    $pricing_table = get_field('pricing_table');
?>

<section id="plans-comparison" class="section-5 plans-comparison wf-section">
    <div class="container-xlarge margin-bottom-medium text-align-center">
        <h3 class="title pricing"><?php echo esc_html($heading); ?></h3>
        <p data-w-id="611e3566-c008-edea-8c4f-c59f16aba5d7"
            style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;"
            class="paragraph pricing"><?php echo esc_html($description); ?><br></p>
    </div>
    <div class="container-default-2 pricing">
        <div class="container-xlarge margin-bottom-medium text-align-center">
            <h1 data-w-id="f1cf1271-06c7-ded1-9eb8-27d04c5dd477"
                style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;"
                class="title pricing"><br><?php echo esc_html($pricing_table_heading); ?></h1>
            <p data-w-id="f1cf1271-06c7-ded1-9eb8-27d04c5dd47a"
                style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;"
                class="paragraph-4 pricing"><?php echo esc_html($pricing_table_description); ?><br></p>
        </div>
        
        <?php echo $pricing_table; ?>

        <div class="pricing-table-item-title caption">For all plans there is an onboarding fee, &nbsp;contact our sales
            department for details.For comparison purposes only, contact sales for complete details</div>
        <div class="content-left"><a href="<?php echo home_url('/contact-us'); ?>" class="button-primary-4 card-plans-comparison w-inline-block">
                <div class="button-primary-text-wrapper-3">
                    <div class="pricing-but-text">Get started</div>
                    <div class="button-primary-arrow-2 w-embed"><svg width="100%" height="100%" viewBox="0 0 16 14"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16 6.97949C16 6.70703 15.877 6.43457 15.6748 6.23242L10.2256 0.791992C9.99707 0.563477 9.75098 0.466797 9.50488 0.466797C8.9248 0.466797 8.51172 0.879883 8.51172 1.4248C8.51172 1.71484 8.62598 1.96094 8.81055 2.14551L10.6914 4.03516L12.9238 6.08301L11.0342 5.97754H1.14648C0.540039 5.97754 0.118164 6.38184 0.118164 6.97949C0.118164 7.57715 0.540039 7.99023 1.14648 7.99023H11.0342L12.9238 7.87598L10.6914 9.92383L8.81055 11.8223C8.62598 11.998 8.51172 12.2441 8.51172 12.5342C8.51172 13.0879 8.9248 13.501 9.50488 13.501C9.75098 13.501 9.99707 13.3955 10.208 13.1846L15.6748 7.72656C15.877 7.5332 16 7.26074 16 6.97949Z"
                                fill="currentcolor"></path>
                        </svg></div>
                </div>
            </a></div>
        
    </div>
</section>