<?php
    $catId = $atts['evh_post_list'];
    $args = array(
        'posts_per_page' => !empty( $atts['number_posts'] ) ? $atts['number_posts'] : '5',
        'category' => $catId
    );
    $posts = get_posts( $args );
    $firstPost = $posts[0];
    unset($posts[0]);
?>
<section id="news" class="mt-[100px] container home-news md:mt-[50px]">
    <div class="flex items-center justify-between md:flex-col md:items-stretch">
        <p class="text-[40px] font-semibold text-menu md:text-4xl"><?php echo !empty( $atts['evh_post_title'] ) ? $atts['evh_post_title'] : '' ?></p>
        <a class="read-more px-[27px] py-[9px] text-center text-menu mt-[20px] cursor-pointer md:px-3 md:py-1 md:w-fit"
            href="<?php echo !empty( $atts['evh_post_url'] ) ? $atts['evh_post_url'] : '' ?>">
            <?php echo !empty( $atts['awe_post_btn_name'] ) ? $atts['awe_post_btn_name'] : '' ?>
        </a>

    </div>


    <div class="grid grid-cols-3 grid-rows-2 gap-2 mt-10 md:hidden">
        <?php if (!empty($firstPost)):?>
        <a class="col cursor-pointer col-span-2 flex" href="<?php echo get_permalink($firstPost->ID) ?>">
            <div class="mr-6">
                <p class="text-[28px] font-semibold line-clamp-3 text-menu">
                    <?php echo !empty( $firstPost->post_title ) ? $firstPost->post_title : '' ?>
                </p>
                <p class="my-[10px] text-[13px]">20/2/2022</p>
                <p class="text-xl line-clamp-5">
                    <?php echo !empty( $firstPost->post_excerpt ) ? $firstPost->post_excerpt : '' ?>
                </p>
            </div>
            <img loading="lazy"
                src="<?php echo get_the_post_thumbnail_url( $firstPost, '448x300' ) ?>"
                alt="<?php echo !empty( $firstPost->post_title ) ? $firstPost->post_title : '' ?>" class="block object-cover h-[300px] rounded-[40px]" />
        </a>
        <?php endif ?>

        <?php if (!empty($posts[1])):?>
            <?php foreach ($posts as $post): ?>
                <a class="col cursor-pointer" href="<?php echo get_permalink($post->ID) ?>">
                    <div class="mr-6">
                        <p class="text-[28px] font-semibold text-menu line-clamp-1">
                            <?php echo !empty( $post->post_title ) ? $post->post_title : '' ?>
                        </p>

                        <p class="line-clamp-2 text-xl">
                         <?php echo !empty( $post->post_excerpt ) ? $post->post_excerpt : '' ?>
                        </p>
                    </div>
                    <img loading="lazy"
                        src="<?php echo get_the_post_thumbnail_url( $post, '334x243' ) ?>"
                        alt="<?php echo !empty( $post->post_title ) ? $post->post_title : '' ?>" class="block object-cover  rounded-[40px] mt-[10px] h-[243px]" />
                </a>
            <?php endforeach ?>
        <?php endif ?>
    </div>
    <swiper-container id="swiper-container" class="hidden mt-4 md:block">
            <?php foreach ($posts as $post): ?>
            <swiper-slide>
                <a href="<?php echo get_permalink($post->ID) ?>">
                <div class="col">
                    <p class="text-[24px] font-semibold text-menu line-clamp-1">
                        <?php echo !empty( $post->post_title ) ? $post->post_title : '' ?>
                    </p>
                    <p class="line-clamp-2 text-base">
                        <?php echo !empty( $post->post_excerpt ) ? $post->post_excerpt : '' ?>
                    </p>

                    <img loading="lazy"
                        src="<?php echo get_the_post_thumbnail_url( $post, '276x209' ) ?>"
                        alt="<?php echo !empty( $post->post_title ) ? $post->post_title : '' ?>" class="block object-cover rounded-[34px] mt-2 h-[209px]" />
                </div>
                </a>
            </swiper-slide>
            <?php endforeach ?>
    </swiper-container>
</section>