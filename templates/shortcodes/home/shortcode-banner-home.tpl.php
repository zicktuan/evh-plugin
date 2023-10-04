<section class="mt-[55px] pl-[150px] pt-[147px] text-white relative container banner md:px-[31px] md:pt-[33px]">
    <div class="max-w-[462px] md:max-w-none">
        <span class="text-[46px] leading-[64px] font-semibold md:text-[36px] md:leading-[50px]">
            <?php echo !empty($atts['awe_home_title']) ? $atts['awe_home_title'] : '' ?>
        </span>
        <p class="mt-[17px] text-xl leading-[30px] md:text-sm">
            <?php echo !empty($atts['awe_home_desc']) ? $atts['awe_home_desc'] : '' ?>
            <br />
            <?php echo !empty($atts['awe_home_sub_title']) ? $atts['awe_home_sub_title'] : '' ?>
        </p>
    </div>
    <div class="mt-[26px] md:hidden">
        <span class="text-xl font-semibold"> Tải Ứng Dụng Tại Đây </span>
        <div class="space-x-[13px] mt-[17px] flex cursor-pointer">
            <?php if (!empty($atts['awe_home_app_store'])): ?>
                <img src="<?php echo get_template_directory_uri() . "/assets/images/appstore.png"?>" alt="" />
            <?php endif ?>
            <?php if (!empty($atts['awe_home_gg_play'])): ?>
                <img src="<?php echo get_template_directory_uri() . "/assets/images/gg-play.png"?>" alt="" />
            <?php endif ?>
        </div>
    </div>
    <div class="mt-[181px] space-y-[15px] hidden md:block">
        <div class="action text-[10px] px-0.5 py-1 border border-solid border-[#0E43A6] rounded-md w-fit">D O W N L
            O A D</div>
        <?php if (!empty($atts['awe_home_app_store'])): ?>
                <img src="<?php echo get_template_directory_uri() . "/assets/images/appstore.png"?>" alt="" class="w-[119px]" />
        <?php endif ?>
        <?php if (!empty($atts['awe_home_gg_play'])): ?>
            <img src="<?php echo get_template_directory_uri() . "/assets/images/gg-play.png"?>" alt="" class="w-[119px]" />
        <?php endif ?>
    </div>
    <img src="<?php echo !empty($atts['awe_home_img']) ? wp_get_attachment_url($atts['awe_home_img']) : '' ?>" alt="mockup phone" class="absolute bottom-0 right-[105px] md:hidden" />
    <img src="<?php echo !empty($atts['awe_home_img']) ? get_template_directory_uri() . "/assets/images/mockup-phone-mb.png" : '' ?>" alt="mockup phone" class="absolute bottom-0 right-0 hidden md:block" />
</section>