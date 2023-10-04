<section class="mt-[100px] container md:mt-[27px]">
        <p class="text-5xl leading-none font-semibold text-center md:text-4xl">
            Tải Ứng Dụng 
            <span class="text-menu">EVH</span>
        </p>
        <img loading="lazy" src="<?php echo !empty($atts['evh_about_img']) ? wp_get_attachment_url($atts['evh_about_img']) : '' ?>" alt="Tải Ứng Dụng EVH" class="mt-[70px] md:hidden" />
        <div class="flex mt-[30px] space-x-[42px] justify-center md:mt-5">
            <?php if (!empty($atts['evh_about_app_store'])): ?>
                <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/appstore.png"?>" alt="download app"/>
            <?php endif ?>
            <?php if (!empty($atts['evh_about_gg_play'])): ?>
                <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/gg-play.png"?>" alt="download app" />
            <?php endif ?>
        </div>
        <div
            class="text-[10px] px-0.5 py-1 border border-solid border-[#0E43A6] text-menu rounded-md w-fit mt-5 mx-auto hidden md:block">
            D O W N L O A D
        </div>
        <img loading="lazy" src="<?php echo !empty($atts['evh_about_img']) ? get_template_directory_uri() . "/assets/images/mockup-phone-mb.png" : '' ?>" alt="mockup phone" class="hidden mx-auto mt-5 md:block" />
    </section>