<section class="mt-[100px] container md:mt-[50px]">
    <p class="text-[40px] leading-none font-semibold text-menu md:text-4xl md:text-center">
        <?php echo !empty($atts['evh_system_hospital_title']) ? $atts['evh_system_hospital_title'] : '' ?>
    </p>
    <div class="mt-[50px] relative md:mt-[45px] carousel">
        <?php if (!empty($listItems[0])): ?>
        <swiper-container id="swiper-container-hos" space-between="10">
                <?php foreach ($listItems as $item):?>
                <swiper-slide>
                    <a href="<?php echo !empty($item['url']) ? $item['url'] : '#'?>">
                        <img loading="lazy" src="<?php echo !empty($item['img']) ? wp_get_attachment_url($item['img']) : '' ?>" alt="<?php echo !empty($item['title']) ? $item['title'] : ''?>" class="h-[288px] object-cover block w-full md:h-[220px]" />
                    </a>
                    <p class="mt-5 text-[28px] font-semibold text-menu md:text-[21px]">
                        <a href="<?php echo !empty($item['url']) ? $item['url'] : '#'?>">
                            <?php echo !empty($item['title']) ? $item['title'] : ''?>
                        </a>
                    </p>
                </swiper-slide>
                <?php endforeach?>
        </swiper-container>
        <div class="flex justify-between absolute z-10 top-[114px] w-full md:hidden">
            <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/arrow.png" ?>" alt="arrow" class="cursor-pointer"
                onclick="nextSwiper('left')" />
            <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/arrow.png"?>" alt="arrow" class="rotate-180 cursor-pointer"
                onclick="nextSwiper('right')" />
        </div>
        <?php endif ?>
    </div>
</section>