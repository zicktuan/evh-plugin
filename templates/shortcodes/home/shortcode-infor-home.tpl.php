<section id="recruiting"class="mt-[100px] container md:mt-[50px] home-recruiting pb-[53px] pr-[20px] pt-[30px] pl-[40px] md:max-w-none md:bg-cover" >
    <p class=" text-5xl font-semibold mt-[120px] text-white md:mt-0 md:text-[30px]">
        <?php echo !empty($atts['evh_infor_title']) ? $atts['evh_infor_title'] : '' ?>
    </p>
    <?php if(!empty($listItems[0])): ?>
    <ul class="mt-[20px] text-base leading-[22px] max-w-[350px] text-white pl-6 md:mt-3 md:text-sm  md:max-w-[208px]">
        <?php foreach ($listItems as $item): ?>
            <li class="list-disc"><?php echo !empty($item['text']) ? $item['text'] : "" ?></li>
        <?php endforeach ?>
    </ul>
    <?php endif ?>
    <?php if(!empty($atts['evh_infor_text_btn'])): ?>
    <div class="mt-[30px] w-fit py-[6px] px-[20px] text-menu font-semibold text-[24px] cursor-pointer rounded-[30px] bg-white md:mt-3 md:text-[16px] md:py-1 md:px-3">
        <?php echo $atts['evh_infor_text_btn'] ?>
    </div>
    <?php endif ?>
    <?php if(!empty($atts['evh_infor_email'])): ?>
    <div class="w-[331px] flex items-center h-[49px] rounded-[30px]  recruiting-email md:!left-[30px] md:!bottom-[138px]">
        <svg width="27" height="21" viewBox="0 0 27 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M4.15625 4.125L12.6818 9.94174C13.174 10.2776 13.826 10.2776 14.3182 9.94174L22.8438 4.125M4.875 19H22.125C23.7128 19 25 17.7315 25 16.1667V4.83333C25 3.26853 23.7128 2 22.125 2H4.875C3.28718 2 2 3.26853 2 4.83333V16.1667C2 17.7315 3.28718 19 4.875 19Z"
                stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <span class="text-white text-[16px] pl-3 md:text-[14px]"><?php echo $atts['evh_infor_email'] ?></span>
    </div>
    <?php endif ?>

    <?php if(!empty($atts['evh_infor_phone'])): ?>
    <div class="w-[276px] h-[93px] flex items-center rounded-[30px] recruiting-phone md:bottom-[89px] md:left-[30px] md:h-[59px] md:w-[211px]">
        <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg"
            class="md:hidden">
            <path
                d="M32.6395 29.201C32.6395 29.201 30.6147 31.1676 30.1185 31.7442C29.3102 32.5972 28.3578 33 27.1093 33C26.9893 33 26.8612 33 26.7412 32.9921C24.3642 32.842 22.1553 31.9259 20.4987 31.1439C15.9689 28.9799 11.9913 25.9075 8.68595 22.0138C5.95686 18.7676 4.13213 15.7664 2.92364 12.5439C2.17934 10.5773 1.90723 9.04509 2.02728 7.59974C2.10731 6.67567 2.46746 5.90955 3.13172 5.25401L5.86082 2.56076C6.25297 2.19745 6.66914 2 7.0773 2C7.58151 2 7.98967 2.30013 8.24577 2.55287C8.25378 2.56076 8.26178 2.56866 8.26978 2.57656C8.75798 3.02675 9.22216 3.49274 9.71036 3.99032C9.95846 4.24306 10.2146 4.4958 10.4707 4.75643L12.6555 6.91261C13.5039 7.74981 13.5039 8.52382 12.6555 9.36102C12.4234 9.59006 12.1994 9.81911 11.9673 10.0403C11.295 10.7195 11.8231 10.1983 11.1268 10.8144C11.1108 10.8302 11.0948 10.8381 11.0868 10.8539C10.3985 11.5331 10.5266 12.1965 10.6706 12.6467C10.6786 12.6704 10.6866 12.6941 10.6946 12.7178C11.2629 14.0763 12.0632 15.3558 13.2797 16.8801L13.2877 16.888C15.4966 19.5733 17.8255 21.6663 20.3945 23.2697C20.7227 23.475 21.0588 23.6409 21.3789 23.7988C21.667 23.941 21.9392 24.0753 22.1712 24.2174C22.2033 24.2332 22.2353 24.2569 22.2673 24.2727C22.5394 24.407 22.7955 24.4702 23.0596 24.4702C23.7239 24.4702 24.14 24.0595 24.2761 23.9252L25.8448 22.3771C26.1169 22.1085 26.5491 21.7847 27.0533 21.7847C27.5495 21.7847 27.9577 22.0927 28.2058 22.3613C28.2138 22.3692 28.2138 22.3692 28.2218 22.3771L32.6315 26.7289C33.4559 27.5345 32.6395 29.201 32.6395 29.201Z"
                stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none"
            class="hidden md:block">
            <path
                d="M20.9326 18.6938C20.9326 18.6938 19.6481 19.9415 19.3333 20.3072C18.8205 20.8484 18.2163 21.1039 17.4242 21.1039C17.348 21.1039 17.2668 21.1039 17.1906 21.0989C15.6827 21.0037 14.2814 20.4225 13.2304 19.9264C10.3566 18.5535 7.83318 16.6044 5.73625 14.1342C4.00489 12.0748 2.84727 10.1708 2.08059 8.12643C1.60841 6.87878 1.43578 5.90672 1.51194 4.98978C1.56271 4.40354 1.79119 3.91751 2.2126 3.50163L3.94396 1.79301C4.19275 1.56252 4.45677 1.43726 4.71571 1.43726C5.03558 1.43726 5.29453 1.62766 5.457 1.788C5.46208 1.79301 5.46716 1.79802 5.47223 1.80303C5.78195 2.08864 6.07643 2.38426 6.38615 2.69993C6.54354 2.86027 6.70602 3.02061 6.86849 3.18596L8.2546 4.55386C8.79279 5.08498 8.79279 5.57602 8.2546 6.10715C8.10735 6.25246 7.96519 6.39776 7.81795 6.53806C7.39145 6.96897 7.72649 6.63834 7.28476 7.02917C7.27461 7.03919 7.26445 7.0442 7.25938 7.05422C6.82273 7.48513 6.90397 7.90602 6.99536 8.19163C7.00043 8.20666 7.00551 8.22169 7.01059 8.23673C7.37108 9.09855 7.87881 9.91027 8.65056 10.8773L8.65564 10.8823C10.057 12.5859 11.5345 13.9138 13.1643 14.9309C13.3724 15.0612 13.5857 15.1664 13.7888 15.2666C13.9716 15.3568 14.1442 15.442 14.2914 15.5322C14.3117 15.5422 14.3321 15.5572 14.3524 15.5673C14.525 15.6524 14.6875 15.6925 14.855 15.6925C15.2764 15.6925 15.5405 15.432 15.6268 15.3468L16.622 14.3646C16.7946 14.1943 17.0688 13.9888 17.3887 13.9888C17.7035 13.9888 17.9624 14.1843 18.1198 14.3546C18.1249 14.3596 18.1249 14.3596 18.13 14.3646L20.9275 17.1255C21.4505 17.6366 20.9326 18.6938 20.9326 18.6938Z"
                stroke="white" stroke-width="2.53763" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
            <span class="text-white text-[28px] font-semibold pl-3 md:text-[18px]"><?php echo $atts['evh_infor_phone'] ?></span>
    </div>
    <?php endif ?>

</section>