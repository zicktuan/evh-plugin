<section class=" mt-[100px] container home-contact md:mt-[50px]">
    <p class="text-center text-5xl font-semibold text-menu md:text-4xl">
        <?php echo !empty($atts['evh_contact_title']) ? $atts['evh_contact_title'] : '' ?>
    </p>
    <div
        class="w-[1000px] mx-auto grid grid-cols-4 gap-5 mt-[50px] md:grid-cols-2 md:gap-y-[31px] ms:gap-x-[18px] md:w-full">
        <?php if(!empty($listItems[0])):?>
            <?php foreach ($listItems as $item):?>
            <div class="box">
                <img loading="lazy" src="<?php echo !empty($item['icon']) ? wp_get_attachment_url($item['icon']) : '' ?>" alt="" />
                <p class="mt-4 text-menu text-lg leading-none font-semibold md:text-[12px]"><?php echo !empty($item['title']) ? $item['title'] : '' ?></p>
                <p class="text-sm text-menu mt-[11px] md:text-[9px] md:leading-3"><?php echo !empty($item['desc']) ? $item['desc'] : '' ?></p>
            </div>
            <?php endforeach?>
        <?php endif ?>
    </div>
</section>