<?php

$args = array(
    'post_type' => 'post',
    // 'orderby' => 'ID',
    'post_status' => 'publish',
    'order' => 'DESC',
    'posts_per_page' => -1 
);
$posts = get_posts($args);
// echo "<pre>";
// print_r($result);

$posts_count = count($posts); 

if($posts_count > 0) :
?>

<section class="section blog-v2-hero wf-section">
    <div class="container-default w-container">
        <div class="content-top blog-v2-hero">
            <div class="split-content blog-v2-hero-content-top-left">
                <h1 data-w-id="504500f6-d0cb-3b45-148f-010ef86ea003"
                    style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;"
                    class="title blog-v2-hero">Articles &amp; Resources</h1>
            </div>
            <div class="split-content blog-v2-hero-content-top-right">
                <p data-w-id="504500f6-d0cb-3b45-148f-010ef86ea006"
                    style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;"
                    class="paragraph-2 blog-v2-hero hide">Lorem ipsum dolor sit amet consectetur adipiscing elit
                    interdum ullamcorper sed pharetra senectus <span class="text-no-wrap">donec nunc.</span></p>
            </div>
        </div>
        <div data-w-id="504500f6-d0cb-3b45-148f-010ef86ea00a"
            style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;"
            class="blog-v2-hero-post-featured-wrapper">
            <div class="w-layout-grid blog-v2-featured-grid">
                <div data-start="0" data-collection="blogs" data-limit="1" class="w-dyn-list">
                    <div role="list" class="w-dyn-items">
                        <div role="listitem" class="blog-v1-featured-item w-dyn-item"><a data-blogs="link"
                                href="<?php echo esc_url(get_the_permalink($posts[0]->ID)); ?>"
                                class="card blog-v2-featured w-inline-block">
                                <div class="image-wrapper card-blog-v2-featured">
                                    <?php echo get_the_post_thumbnail($posts[0]->ID, array(556, 368), ["class" => "image blog-v1-featured"]); ?>
                                </div>
                                <div class="card-blog-v1-featured-content">
                                    <div class="card-blog-v1-featured-content-top">
                                        <div data-blogs="original_date" class="card-blog-v1-featured-date"><?php echo esc_html(get_the_date('F d, Y', $posts[0]->ID)); ?></div>
                                    </div>
                                    <h2 data-blogs="title" class="title card-blog-v2-featured"><?php echo esc_html($posts[0]->post_title); ?></h2>
                                    <p data-blogs="post_summary" class="paragraph card-blog-v2-featured"><?php echo esc_html($posts[0]->post_excerpt); ?></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <?php if($posts_count > 1) : ?>
                    <div data-start="1" data-collection="blogs" data-limit="3"
                        class="blog-v2-sidebar-featured-collection-list-wrapper w-dyn-list">
                        <div role="list" class="blog-v2-sidebar-featured-grid w-dyn-items">
                            
                            <?php foreach( array_slice($posts, 1, 3) as $post ): ?>
                                <div role="listitem" class="blog-v2-sidebar-featured-item w-dyn-item"><a data-blogs="link"
                                        href="<?php echo esc_url(get_the_permalink($post->ID)); ?>"
                                        class="blog-v2-sidebar-featured-item-wrapper w-inline-block">
                                        <div class="help-center-hero-images-wrapper blog-v2-sidebar-featured-item-image">
                                            <?php echo get_the_post_thumbnail($post->ID, array(556, 368), ["class" => "image blog-v2-sidebar-featured-item-image"]); ?>
                                        </div>
                                        <div class="blog-v2-sidebar-featured-item-content">
                                            <div data-blogs="original_date" class="blog-v2-sidebar-featured-item-date"><?php echo esc_html(get_the_date('F d, Y', $post->ID)); ?></div>
                                            <h3 data-blogs="title" class="title blog-v2-sidebar-featured-item-title"><?php echo esc_html($post->post_title); ?></h3>
                                        </div>
                                    </a>
                                </div>
                            <?php 
                                endforeach; 
                            
                                wp_reset_postdata();
                            ?>  

                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>

<?php endif; ?>


<?php if($posts_count > 4) : ?>

<section class="section bg-neutral-200 blog-v2 wf-section">
    <div class="bg skew-top"></div>
    <div class="container-default w-container">
        <div data-w-id="769acb51-4580-6791-af7a-7e9f6c0da8ff"
            style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;"
            class="content-top blog-v2">
            <h2 class="title blog-v2">Latest posts</h2>
        </div>
        <div data-limit="6" data-collection="blogs" data-start="0" data-w-id="769acb51-4580-6791-af7a-7e9f6c0da903"
            style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;"
            class="w-dyn-list">
            <div role="list" class="blog-v2-grid w-dyn-items">
                
                <?php foreach( array_slice($posts, 4) as $post ): ?>
                    <div role="listitem" class="blog-v2-post-item w-dyn-item"><a data-blogs="link"
                            href="<?php echo esc_url(get_the_permalink($post->ID)); ?>"
                            class="card post-item-v2 w-inline-block">
                            <div class="image-wrapper card-post-item-v2">
                                <?php echo get_the_post_thumbnail($post->ID, array(556, 368), ["class" => "image card-post-item-v2"]); ?>
                            </div>
                            <div class="card-post-item-v2-content">
                                <div data-blogs="original_date" class="card-post-item-v2-date"><?php echo esc_html(get_the_date('F d, Y', $post->ID)); ?></div>
                                <h3 data-blogs="title" class="title card-post-item-v2"><?php echo esc_html($post->post_title); ?></h3>
                                <div class="link-arrow">
                                    <div>Read more</div>
                                    <div class="button-primary-arrow w-embed"><svg width="100%" height="100%"
                                            viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16 6.97949C16 6.70703 15.877 6.43457 15.6748 6.23242L10.2256 0.791992C9.99707 0.563477 9.75098 0.466797 9.50488 0.466797C8.9248 0.466797 8.51172 0.879883 8.51172 1.4248C8.51172 1.71484 8.62598 1.96094 8.81055 2.14551L10.6914 4.03516L12.9238 6.08301L11.0342 5.97754H1.14648C0.540039 5.97754 0.118164 6.38184 0.118164 6.97949C0.118164 7.57715 0.540039 7.99023 1.14648 7.99023H11.0342L12.9238 7.87598L10.6914 9.92383L8.81055 11.8223C8.62598 11.998 8.51172 12.2441 8.51172 12.5342C8.51172 13.0879 8.9248 13.501 9.50488 13.501C9.75098 13.501 9.99707 13.3955 10.208 13.1846L15.6748 7.72656C15.877 7.5332 16 7.26074 16 6.97949Z"
                                                fill="currentcolor"></path>
                                        </svg></div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php 
                    endforeach; 
                
                    wp_reset_postdata();
                ?> 
                    
            </div>
        </div>
    </div>
</section>

<?php endif; ?>