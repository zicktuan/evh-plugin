<section id="service" class="container home-intro">
    <div class="mt-[100px] text-center max-w-[871px] mx-auto md:mt-2 md:max-w-none">
        <span class="text-5xl leading-none text-menu font-semibold md:text-4xl">
            <?php echo !empty($atts['evh_process_title']) ? $atts['evh_process_title'] : '' ?>
        </span>
        <p class="text-xl leading-[30px] mt-[19px] text-center md:mt-[30px] md:text-sm">
            <?php echo !empty($atts['evh_process_desc']) ? $atts['evh_process_desc'] : '' ?>
        </p>
    </div>
    <div class="grid grid-cols-3 gap-[37px] mt-[100px] max-w-[1181px] mx-auto md:mt-[50px] md:max-w-none md:grid-cols-1 md:gap-[50px]">
        <?php if(!empty($listItems[0])):?>
        <?php foreach ($listItems as $item):?>
        <div class="box">
            <img loading="lazy" src="<?php echo !empty($item['img']) ? wp_get_attachment_url($item['img']) : '' ?>" alt="intro 1" />
            <p class="text-3xl font-semibold mt-[28px] md:text-[26px] md:mt-[25px]">
                <?php echo !empty($item['title']) ? $item['title'] : '' ?>
            </p>
            <p class="mt-[15px] text-base md:text-sm md:mt-[13px]">
                <?php echo !empty($item['desc']) ? $item['desc'] : '' ?>
            </p>
        </div>
        <?php endforeach ?>
        <?php endif ?>
    </div>
    <?php if(!empty($atts['evh_process_url'])):?>
    <p class="mt-[54px] text-[25px] text-center md:text-sm md:mt-[30px]">
        Tìm hiểu về quy trình <span class="text-menu"><a href="<?php echo $atts['evh_process_url'] ?>">Đăng ký khám bệnh</a></span>
    </p>
    <?php endif ?>
</section>