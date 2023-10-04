<section id="team" class="mt-[100px] pb-[38px] container team md:mt-[50px]">
    <p class="text-center text-5xl font-semibold text-menu md:text-4xl">
        <?php echo !empty($atts['evh_system_hospital_title']) ? $atts['evh_system_hospital_title'] : '' ?>
    </p>
    <?php if(!empty($listItems[0])): ?>
    <div class="mt-[50px] relative">
        <swiper-container id="swiper-container-team" space-between="30">
            <?php foreach ($listItems as $item):?>
            <swiper-slide>
                <div class="box">
                    <img loading="lazy" src="<?php echo !empty($item['img']) ? wp_get_attachment_url($item['img']) : '' ?>" alt="hospital image" class="h-[525px] object-cover block" />
                </div>
                <p class="mt-4 text-4xl leading-none font-semibold text-[#4A8AC5] text-center md:text-2xl">
                    <?php echo !empty($item['name']) ? $item['name'] : ''?>
                </p>
                <p class="mt-4 text-[25px] text-center md:text-base">
                    <?php echo !empty($item['position']) ? $item['position'] : ''?>
                </p>
            </swiper-slide>
            <?php endforeach ?>
            
        </swiper-container>
        <div class="flex justify-between absolute z-10 top-[200px] w-full md:hidden">
            <div class="arrow cursor-pointer" onclick="nextSwiperTeam('left')">
                <svg width="18" height="30" viewBox="0 0 18 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.8507 27L2.90051 15L14.8507 3" stroke="#fff" stroke-width="5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </div>
            <div class="rotate-180 cursor-pointer arrow" onclick="nextSwiperTeam('right')">
                <svg width="18" height="30" viewBox="0 0 18 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.8507 27L2.90051 15L14.8507 3" stroke="#fff" stroke-width="5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </div>
        </div>
    </div>
    <?php endif ?>
</section>