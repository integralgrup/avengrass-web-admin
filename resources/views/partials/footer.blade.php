<?php $code = \App\Models\Code::where('lang', app()->getLocale())->first(); ?>

<footer class="footer-field w-full relative">
    <div class="footer-container max-w-[1810px] px-[30px] mx-auto">
        <div class="footer-top bg-[#F3F9F5] pt-[89px] xl:pt-[70px] lg:pt-[60px] pb-[50px] md:py-[30px] sm:py-[20px] rounded-[30px] relative overflow-hidden">
            <!-- BACKGROUND LOGO | LEFT -->
            <?php $backgroundOpacity = 'opacity-3' ?>
            <!-- opacity DEĞERİ PANELDEN SEÇİLEBİLİR OLMALI -->
            <div class="background-logo-left absolute left-0 top-1/2 -translate-x-1/4 -translate-y-1/2 w-1/2 h-[500px] rotate-[30deg] pointer-events-none md:hidden <?= $backgroundOpacity ?>">
                <svg class="logo-object-footer-left logo-trigger" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 896.36 802.39">
                    <defs>
                        <clipPath id="clippy">
                            <path class="fill-none" d="m358.82,617.32C273.99,187.4,111.06,240.49,0,261.07c211.04,22.29,252.76,90.38,307.72,534.23h0v.05h.17c26.18,5.88,52.49,7.99,78.67,6.65C494.15,360.01,651.19-9.42,797.92,13.31c-91.81-48.77-256.22,11.93-439.1,604.01h0Z" />
                        </clipPath>
                        <clipPath id="clippy-1">
                            <path class="fill-none" d="m407.84,800.09c27.94-3.61,55.48-11.08,82.5-22.33C583.42,309.26,766.74-13.98,896.36,57.8c-117.36-107.11-298.81-3.83-488.52,742.28h0Z" />
                        </clipPath>
                        <clipPath id="clippy-2">
                            <path class="fill-none" d="m159.56,236.22c65.44,7.82,146.17,80.86,200.49,312.24,11.08-34.37,22.55-68.35,34.72-101.76-83.43-232.73-178.28-223.47-235.2-210.48h-.01Z" />
                        </clipPath>
                    </defs>
                    <g style="clip-path: url(#clippy);">
                        <path class="line [clip-path: url(#clippy);] fill-none stroke-[#6FA52C] stroke-[100px] [stroke-linecap:round] [stroke-linejoin:round]" d="m0,261.07s197.52-.57,256.85,144.1,58,364,91.33,364.67,69.33-211.31,128-368.64c58.67-157.33,81.33-230.03,146-300.03S715.65,3.17,797.92,10.5" />
                    </g>
                    <g style="clip-path: url(#clippy-1);">
                        <path class="line [clip-path: url(#clippy-1);] fill-none stroke-[#0A6324] stroke-[90px] [stroke-linecap:round] [stroke-miterlimit:10]" d="m448.18,808.79s46.67-254.92,98.01-380.26c51.33-125.33,126.67-290,182.67-328s109.33-56,167.51-34.03" />
                    </g>
                    <g style="clip-path: url(#clippy-2);">
                        <path class="line [clip-path: url(#clippy-2);] fill-none stroke-[#0A6324] stroke-[90px] [stroke-linecap:round] [stroke-miterlimit:10]" d="m388.92,524.07s-62.69-311.85-225.4-316.24" />
                    </g>
                </svg>
            </div>
            <!-- BACKGROUND LOGO | RIGHT -->
            <?php $backgroundOpacity = 'opacity-3' ?>
            <!-- opacity DEĞERİ PANELDEN SEÇİLEBİLİR OLMALI -->
            <div class="background-logo-right absolute right-0 top-1/2 translate-x-1/4 -translate-y-1/2 w-1/2 h-[500px] rotate-[210deg] pointer-events-none md:hidden <?= $backgroundOpacity ?>">
                <svg class="logo-object-footer-right logo-trigger" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 896.36 802.39">
                    <defs>
                        <clipPath id="clippy">
                            <path class="fill-none" d="m358.82,617.32C273.99,187.4,111.06,240.49,0,261.07c211.04,22.29,252.76,90.38,307.72,534.23h0v.05h.17c26.18,5.88,52.49,7.99,78.67,6.65C494.15,360.01,651.19-9.42,797.92,13.31c-91.81-48.77-256.22,11.93-439.1,604.01h0Z" />
                        </clipPath>
                        <clipPath id="clippy-1">
                            <path class="fill-none" d="m407.84,800.09c27.94-3.61,55.48-11.08,82.5-22.33C583.42,309.26,766.74-13.98,896.36,57.8c-117.36-107.11-298.81-3.83-488.52,742.28h0Z" />
                        </clipPath>
                        <clipPath id="clippy-2">
                            <path class="fill-none" d="m159.56,236.22c65.44,7.82,146.17,80.86,200.49,312.24,11.08-34.37,22.55-68.35,34.72-101.76-83.43-232.73-178.28-223.47-235.2-210.48h-.01Z" />
                        </clipPath>
                    </defs>
                    <g style="clip-path: url(#clippy);">
                        <path class="line [clip-path: url(#clippy);] fill-none stroke-[#6FA52C] stroke-[100px] [stroke-linecap:round] [stroke-linejoin:round]" d="m0,261.07s197.52-.57,256.85,144.1,58,364,91.33,364.67,69.33-211.31,128-368.64c58.67-157.33,81.33-230.03,146-300.03S715.65,3.17,797.92,10.5" />
                    </g>
                    <g style="clip-path: url(#clippy-1);">
                        <path class="line [clip-path: url(#clippy-1);] fill-none stroke-[#0A6324] stroke-[90px] [stroke-linecap:round] [stroke-miterlimit:10]" d="m448.18,808.79s46.67-254.92,98.01-380.26c51.33-125.33,126.67-290,182.67-328s109.33-56,167.51-34.03" />
                    </g>
                    <g style="clip-path: url(#clippy-2);">
                        <path class="line [clip-path: url(#clippy-2);] fill-none stroke-[#0A6324] stroke-[90px] [stroke-linecap:round] [stroke-miterlimit:10]" d="m388.92,524.07s-62.69-311.85-225.4-316.24" />
                    </g>
                </svg>
            </div>
            <!-- MAIN -->
            <div class="container max-w-[1500px] px-[50px] relative z-50 md:px-[20px]">
                <div class="wrapper grid grid-cols-[minmax(0,3fr)_minmax(0,1fr)_minmax(0,8fr)] xl:grid-cols-[minmax(0,3fr)_minmax(0,9fr)] gap-[30px] lg:grid-cols-1">
                    <div class="footer-information-field">
                        <div class="logo-field w-fit sm:mx-auto">
                            <a href="index.php" class="flex justify-start">
                                <div class="image overflow-hidden h-60">
                                    <img src="../assets/image/trademark/logo.png" class="w-full h-full object-contain object-center max-w-[220px] lg:max-w-[200px] md:max-w-[175px] sm:max-w-[150px]" loading="lazy" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="informations mt-60 xl:mt-50 lg:mt-40 md:mt-30 sm:mt-20">
                            <ul class="space-y-[20px]">
                                <li>
                                    <a href="javascript:;" class="group/link flex items-center relative ltr:gap-[20px]">
                                        <i class="icon icon-phone text-[18px] h-[18px] text-main-500 block leading-none group-hover/link:scale-110 duration-450 rtl:ml-20"></i>
                                        <span class="text text-[18px] sm:text-[16px] text-[#111111] font-light leading-tight group-hover/link:text-main-500 group-hover/link:translate-x-[4px] duration-450">+90 (212) 678 13 13</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="group/link flex items-center relative ltr:gap-[20px]">
                                        <i class="icon icon-mail text-[18px] h-[18px] text-main-500 block leading-none group-hover/link:scale-110 duration-450 rtl:ml-20"></i>
                                        <span class="text text-[18px] sm:text-[16px] text-[#111111] font-light leading-tight group-hover/link:text-main-500 group-hover/link:translate-x-[4px] duration-450">info@avengrass.com</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="group/link flex items-center relative ltr:gap-[20px]">
                                        <i class="icon icon-location text-[18px] h-[18px] text-main-500 block leading-none group-hover/link:scale-110 duration-450 rtl:ml-20"></i>
                                        <span class="text text-[18px] sm:text-[16px] text-[#111111] font-light leading-tight group-hover/link:text-main-500 group-hover/link:translate-x-[4px] duration-450 md:[&_br]:hidden">IOSB Bedrettin Dalan Bulvarı<br> Metro 34 Plaza No: 23/100<br> Başakşehir – Istanbul / TURKEY</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <?php 
                            $footer_menu = App\Models\Menu::where(['lang' => app()->getLocale(), 'menu_type' => 'footer'])->with('children_footer')
                            ->where('parent_menu_id', 0) // only root menus
                            ->orderBy('sort', 'asc')
                            ->get();
                            //dd($menu);
                        ?>
                        <?php $footerInfo = \App\Models\FooterInfo::where('lang' , app()->getLocale())->first(); ?>
                        <?php $offices = \App\Models\Office::where('lang' , app()->getLocale())->get(); ?>
                        <div class="social-media mt-60 xl:mt-50 lg:mt-40 md:mt-30 sm:mt-20">
                            <ul class="flex items-center [&_li:last-child_.split]:hidden flex-wrap gap-[20px] sm:gap-[15px]">
                                <li class="flex relative">
                                    <a href="javascript:;" class="group/link flex relative p-10 duration-450 hover:-translate-y-[4px] w-[44px] h-[44px] bg-[#E9F0EB] rounded-full justify-center items-center before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-0 before:h-0 before:bg-main-500 hover:before:w-full hover:before:h-full before:duration-450 before:rounded-full">
                                        <i class="icon icon-facebook text-[16px] h-[16px] text-[#111111]/50 block leading-none duration-450 group-hover/link:text-white relative z-2"></i>
                                    </a>
                                </li>
                                <li class="flex relative">
                                    <a href="javascript:;" class="group/link flex relative p-10 duration-450 hover:-translate-y-[4px] w-[44px] h-[44px] bg-[#E9F0EB] rounded-full justify-center items-center before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-0 before:h-0 before:bg-main-500 hover:before:w-full hover:before:h-full before:duration-450 before:rounded-full">
                                        <i class="icon icon-youtube text-[16px] h-[16px] text-[#111111]/50 block leading-none duration-450 group-hover/link:text-white relative z-2"></i>
                                    </a>
                                </li>
                                <li class="flex relative">
                                    <a href="javascript:;" class="group/link flex relative p-10 duration-450 hover:-translate-y-[4px] w-[44px] h-[44px] bg-[#E9F0EB] rounded-full justify-center items-center before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-0 before:h-0 before:bg-main-500 hover:before:w-full hover:before:h-full before:duration-450 before:rounded-full">
                                        <i class="icon icon-linkedin text-[16px] h-[16px] text-[#111111]/50 block leading-none duration-450 group-hover/link:text-white relative z-2"></i>
                                    </a>
                                </li>
                                <li class="flex relative">
                                    <a href="javascript:;" class="group/link flex relative p-10 duration-450 hover:-translate-y-[4px] w-[44px] h-[44px] bg-[#E9F0EB] rounded-full justify-center items-center before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-0 before:h-0 before:bg-main-500 hover:before:w-full hover:before:h-full before:duration-450 before:rounded-full">
                                        <i class="icon icon-twitter text-[16px] h-[16px] text-[#111111]/50 block leading-none duration-450 group-hover/link:text-white relative z-2"></i>
                                    </a>
                                </li>
                                <li class="flex relative">
                                    <a href="javascript:;" class="group/link flex relative p-10 duration-450 hover:-translate-y-[4px] w-[44px] h-[44px] bg-[#E9F0EB] rounded-full justify-center items-center before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-0 before:h-0 before:bg-main-500 hover:before:w-full hover:before:h-full before:duration-450 before:rounded-full">
                                        <i class="icon icon-pinterest text-[16px] h-[16px] text-[#111111]/50 block leading-none duration-450 group-hover/link:text-white relative z-2"></i>
                                    </a>
                                </li>
                                <li class="flex relative">
                                    <a href="javascript:;" class="group/link flex relative p-10 duration-450 hover:-translate-y-[4px] w-[44px] h-[44px] bg-[#E9F0EB] rounded-full justify-center items-center before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-0 before:h-0 before:bg-main-500 hover:before:w-full hover:before:h-full before:duration-450 before:rounded-full">
                                        <i class="icon icon-whatsapp text-[16px] h-[16px] text-[#111111]/50 block leading-none duration-450 group-hover/link:text-white relative z-2"></i>
                                    </a>
                                </li>
                                <li class="flex relative">
                                    <a href="javascript:;" class="group/link flex relative p-10 duration-450 hover:-translate-y-[4px] w-[44px] h-[44px] bg-[#E9F0EB] rounded-full justify-center items-center before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-0 before:h-0 before:bg-main-500 hover:before:w-full hover:before:h-full before:duration-450 before:rounded-full">
                                        <i class="icon icon-instagram text-[16px] h-[16px] text-[#111111]/50 block leading-none duration-450 group-hover/link:text-white relative z-2"></i>
                                    </a>
                                </li>
                                <li class="flex relative">
                                    <a href="javascript:;" class="group/link flex relative p-10 duration-450 hover:-translate-y-[4px] w-[44px] h-[44px] bg-[#E9F0EB] rounded-full justify-center items-center before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-0 before:h-0 before:bg-main-500 hover:before:w-full hover:before:h-full before:duration-450 before:rounded-full">
                                        <i class="icon icon-vk text-[16px] h-[16px] text-[#111111]/50 block leading-none duration-450 group-hover/link:text-white relative z-2"></i>
                                    </a>
                                </li>
                                <li class="flex relative">
                                    <a href="javascript:;" class="group/link flex relative p-10 duration-450 hover:-translate-y-[4px] w-[44px] h-[44px] bg-[#E9F0EB] rounded-full justify-center items-center before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-0 before:h-0 before:bg-main-500 hover:before:w-full hover:before:h-full before:duration-450 before:rounded-full">
                                        <i class="icon icon-tiktok text-[16px] h-[16px] text-[#111111]/50 block leading-none duration-450 group-hover/link:text-white relative z-2"></i>
                                    </a>
                                </li>
                                <li class="flex relative">
                                    <a href="javascript:;" class="group/link flex relative p-10 duration-450 hover:-translate-y-[4px] w-[44px] h-[44px] bg-[#E9F0EB] rounded-full justify-center items-center before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-0 before:h-0 before:bg-main-500 hover:before:w-full hover:before:h-full before:duration-450 before:rounded-full">
                                        <i class="icon icon-google text-[16px] h-[16px] text-[#111111]/50 block leading-none duration-450 group-hover/link:text-white relative z-2"></i>
                                    </a>
                                </li>
                                <li class="flex relative">
                                    <a href="javascript:;" class="group/link flex relative p-10 duration-450 hover:-translate-y-[4px] w-[44px] h-[44px] bg-[#E9F0EB] rounded-full justify-center items-center before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-0 before:h-0 before:bg-main-500 hover:before:w-full hover:before:h-full before:duration-450 before:rounded-full">
                                        <i class="icon icon-airbnb text-[16px] h-[16px] text-[#111111]/50 block leading-none duration-450 group-hover/link:text-white relative z-2"></i>
                                    </a>
                                </li>
                                <li class="flex relative">
                                    <a href="javascript:;" class="group/link flex relative p-10 duration-450 hover:-translate-y-[4px] w-[44px] h-[44px] bg-[#E9F0EB] rounded-full justify-center items-center before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-0 before:h-0 before:bg-main-500 hover:before:w-full hover:before:h-full before:duration-450 before:rounded-full">
                                        <i class="icon icon-booking text-[16px] h-[16px] text-[#111111]/50 block leading-none duration-450 group-hover/link:text-white relative z-2"></i>
                                    </a>
                                </li>
                                <li class="flex relative">
                                    <a href="javascript:;" class="group/link flex relative p-10 duration-450 hover:-translate-y-[4px] w-[44px] h-[44px] bg-[#E9F0EB] rounded-full justify-center items-center before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-0 before:h-0 before:bg-main-500 hover:before:w-full hover:before:h-full before:duration-450 before:rounded-full">
                                        <i class="icon icon-tripadvisor text-[16px] h-[16px] text-[#111111]/50 block leading-none duration-450 group-hover/link:text-white relative z-2"></i>
                                    </a>
                                </li>
                                <li class="flex relative">
                                    <a href="javascript:;" class="group/link flex relative p-10 duration-450 hover:-translate-y-[4px] w-[44px] h-[44px] bg-[#E9F0EB] rounded-full justify-center items-center before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-0 before:h-0 before:bg-main-500 hover:before:w-full hover:before:h-full before:duration-450 before:rounded-full">
                                        <i class="icon icon-x text-[16px] h-[16px] text-[#111111]/50 block leading-none duration-450 group-hover/link:text-white relative z-2"></i>
                                    </a>
                                </li>
                                <!-- SVG ÖRNEĞİ -->
                                <!-- SVG OLARAK İSTENİLEN İCON FILL DESTEKLİ OLARAK EKLENBİLİR. STROKE DESTEKLEMEMEKTEDİR. -->
                                <!-- AŞAĞIDA SVG ÖRNEĞİ BULUNMAKTADIR -->
                                <!-- ÖRNEK SVG BUNA BENZER BİR YAPIDA EKLENDİĞİ ZAMAN SORUNSUZ ÇALIŞACAKTIR -->
                                <li class="flex relative">
                                    <a href="javascript:;" class="group/link flex relative p-10 duration-450 hover:-translate-y-[4px] w-[44px] h-[44px] bg-[#E9F0EB] rounded-full justify-center items-center before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-0 before:h-0 before:bg-main-500 hover:before:w-full hover:before:h-full before:duration-450 before:rounded-full [&_svg]:w-[16px] [&_svg]:h-[16px] [&_svg]:fill-[#111111]/50 [&_svg]:block [&_svg]:leading-none [&_svg]:duration-450 [&_svg]:hover:!fill-white [&_svg]:relative [&_svg]:z-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 16">
                                            <path d="M6.72,0C2.33,0,0,2.81,0,5.87c0,1.42,.79,3.19,2.07,3.76,.19,.09,.3,.05,.34-.13,.04-.14,.21-.79,.29-1.1,.02-.1,.01-.19-.07-.28-.42-.49-.76-1.38-.76-2.21C1.87,3.77,3.57,1.7,6.46,1.7c2.5,0,4.25,1.62,4.25,3.95,0,2.63-1.39,4.44-3.19,4.44-1,0-1.74-.78-1.51-1.75,.29-1.16,.84-2.4,.84-3.23,0-.75-.42-1.37-1.28-1.37-1.02,0-1.84,1.01-1.84,2.36,0,.86,.3,1.44,.3,1.44,0,0-1.01,4.06-1.19,4.82-.32,1.28,.04,3.37,.07,3.55,.02,.1,.13,.13,.19,.05,.1-.13,1.32-1.87,1.66-3.12,.12-.46,.63-2.31,.63-2.31,.34,.61,1.3,1.11,2.33,1.11,3.06,0,5.28-2.69,5.28-6.04-.01-3.2-2.75-5.6-6.28-5.6Z" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-menu-field col-start-3 xl:col-start-2 lg:col-start-1 sm:hidden">
                        <div class="footer-menu-wrapper grid grid-cols-3 gap-[30px] gap-y-[80px] md:gap-0 xl:grid-cols-2 md:grid-cols-1">
                            <?php foreach ($footer_menu as $key => $item) : ?>
                                <div class="footer-accordion fms group/fms md:relative md:pb-[15px] md:mb-[15px]">
                                    <div class="split w-full h-1 bg-black/10 absolute left-0 bottom-0 hidden md:block"></div>
                                    <div class="footer-title-trigger group/ftt title-field relative md:cursor-pointer">
                                        <p class="title text-20 sm:text-18 text-[#111111] leading-tight md:pr-[45px]"><?= $item['title'] ?></p>
                                        <div class="sub-trigger-footer group/sub-trigger absolute right-0 top-[-3px] w-30 h-30 bg-main-500 justify-center items-center hidden cursor-pointer rounded-default duration-450 group-[&.is-active]/ftt:bg-main-300 md:flex z-20 sm:w-[24px] sm:h-[24px] sm:rounded-[3px] sm:top-0">
                                            <div class="icon w-[2px] h-[15px] sm:h-[8px] absolute left-1/2 -translate-x-1/2 bg-white duration-450 group-[&.is-active]/ftt:rotate-90 rounded-full"></div>
                                            <div class="icon w-[15px] h-[2px] sm:w-[8px] bg-white duration-450 rounded-full"></div>
                                        </div>
                                    </div>
                                    <ul class="footer-accordion-item space-y-[20px] mt-[30px] sm:mt-[20px] md:space-y-0 md:hidden [&_li:last-child_.split]:hidden [&_li:last-child]:!mb-0 [&_li:last-child]:pb-0 md:pl-10 md:mt-20">
                                        <?php foreach ($item->children_footer as $key => $child) : ?>
                                            @if($child->page_type == 'product_category')
                                                <?php $childUrl = env('HTTP_DOMAIN') .'/'. $child['seo_url'] ?>
                                            @elseif($child->page_type == 'services')
                                                <?php $childUrl = env('HTTP_DOMAIN') .'/'. $item['seo_url'] .'/'. $child['seo_url'] ?>
                                            @elseif($child->page_type == 'using_areas')
                                                <?php $childUrl = env('HTTP_DOMAIN') .'/'. $item['seo_url'] .'/'. $child['seo_url'] ?>
                                            @elseif($child->page_type == 'page')
                                                <?php $childUrl = env('HTTP_DOMAIN') .'/'. $child['seo_url'] ?>
                                            @else
                                                <?php $childUrl = 'javascript:;' ?>
                                            @endif
                                            <li class="md:relative md:pb-[10px] md:!mb-[10px]">
                                                <div class="split w-full h-1 bg-black/10 absolute left-0 bottom-0 hidden md:block"></div>
                                                <a href="<?= $childUrl ?>" class="inline-flex group/link gap-[20px]">
                                                    <span class="text text-16 sm:text-14 font-light text-[#111111] leading-tight duration-450 group-hover/link:text-main-500 group-hover/link:translate-x-[5px]"><?= $child['title'] ?></span>
                                                    <i class="icon icon-arrow-right text-[18px] h-[18px] text-main-500 block leading-none duration-450 group-hover/link:translate-x-[5px] scale-0 group-hover/link:scale-100 rtl:scale-x-[-1] rtl:group-hover/link:-scale-100"></i>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom bg-white py-[25px] md:py-[20px]">
            <div class="container max-w-[1500px] px-[50px] md:px-[0]">
                <div class="wrapper grid grid-cols-3 gap-[30px] lg:grid-cols-1">
                    <div class="integral-info flex items-center justify-start lg:justify-center">
                        <p class="text text-16 sm:text-14 text-[#111111]/50 leading-tight text-center font-normal"><?= getStaticText(16) ?></p>
                    </div>
                    <div class="copyright flex items-center justify-center sm:hidden">
                        <p class="text text-16 sm:text-14 text-[#111111]/50 leading-tight text-center font-normal">© <?=date('Y')?> <a href="javascript:;" class="text-main-500 duration-450 hover:text-main-700 font-semibold leading-tight">Avengrass.com</a> | <?= getStaticText(17) ?></p>
                    </div>
                    <div class="integral-image flex items-center justify-end lg:justify-center sm:hidden">
                        <a href="javascript:;" class="image flex w-fit max-w-[110px] h-[40px] overflow-hidden translate-z-0 duration-450 opacity-100 hover:opacity-50">
                            <img src="../assets/image/static/integral.png" class="full-contain" loading="lazy" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</penta-yazilim>

<div class="bg-overlay-general fixed left-0 top-0 w-full h-full z-90 bg-black opacity-0 duration-350 pointer-events-none [&.is-active]:opacity-40 [&.is-active]:pointer-events-auto"></div>

<!-- POPUP GDPR -->
<section id="popup-gdpr" class="hidden !rounded-20 !m-0 !p-40 !max-w-[1024px] w-full">
    <div class="inner w-full">
        <div class="text-editor !max-w-full editor-p:text-20 editor-li:text-20 sm:editor-p:text-16 sm:editor-li:text-16 xs:editor-p:text-14 xs:editor-li:text-14">
            <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
            <h4><strong>KİŞİSEL VERİLERİN KORUNMASI</strong></h4>
            <h5><strong>İNTERNET SİTESİ ÇEREZ POLİTİKASI</strong></h5>

            <p>Kişisel verileriniz; veri sorumlusu olarak Firma Adı (“ŞİRKET” veya Firma Adı” olarak adlandırılacaktır.) tarafından işletilen (www.alanadi.com) internet sitesini ziyaret edenlerin gizliliğini korumak Kurumumuzun önde gelen ilkelerindendir. Bu Çerez Kullanımı Politikası (“Politika”), tüm web sitesi ziyaretçilerimize ve kullanıcılarımıza hangi tür çerezlerin hangi koşullarda kullanıldığını açıklamaktadır.</p>
            <p>Çerezler, bilgisayarınız ya da mobil cihazınız üzerinden ziyaret ettiğiniz internet siteleri tarafından cihazınıza veya ağ sunucusuna depolanan küçük metin dosyalarıdır.</p>
            <p>Genellikle ziyaret ettiğiniz internet sitesini kullanmanız sırasında size kişiselleştirilmiş bir deneyim sunmak, sunulan hizmetleri geliştirmek ve deneyiminizi iyileştirmek için kullanılır ve bir internet sitesinde gezinirken kullanım kolaylığına katkıda bulunabilir. Çerez kullanılmasını tercih etmezseniz tarayıcınızın ayarlarından Çerezleri silebilir ya da engelleyebilirsiniz. Ancak bunun internet sitemizi kullanımınızı etkileyebileceğini hatırlatmak isteriz. Tarayıcınızdan Çerez ayarlarınızı değiştirmediğiniz sürece bu sitede çerez kullanımını kabul ettiğinizi varsayacağız.</p>

            <h6><strong>1. ÇEREZLERDE HANGİ TÜR VERİLER İŞLENİR?</strong></h6>
            <p>İnternet sitelerinde yer alan çerezlerde, türüne bağlı olarak, siteyi ziyaret ettiğiniz cihazdaki tarama ve kullanım tercihlerinize ilişkin veriler toplanmaktadır. Bu veriler, eriştiğiniz sayfalar, incelediğiniz hizmet ve ürünler, tercih ettiğiniz dil seçeneği ve diğer tercihlerinize dair bilgileri kapsamaktadır.</p>

            <h6><strong>2. ÇEREZ NEDİR ve KULLANIM AMAÇLARI NELERDİR?</strong></h6>
            <p>Çerezler, ziyaret ettiğiniz internet siteleri tarafından tarayıcılar aracılığıyla cihazınıza veya ağ sunucusuna depolanan küçük metin dosyalarıdır. Sitede tercih ettiğiniz dil ve diğer ayarları içeren bu küçük metin dosyaları, siteye bir sonraki ziyaretinizde tercihlerinizin hatırlanmasına ve sitedeki deneyiminizi iyileştirmek için hizmetlerimizde geliştirmeler yapmamıza yardımcı olur. Böylece bir sonraki ziyaretinizde daha iyi ve kişiselleştirilmiş bir kullanım deneyimi yaşayabilirsiniz.</p>
            <p>İnternet Sitemizde çerez kullanılmasının başlıca amaçları aşağıda sıralanmaktadır:</p>
            <ul>
                <li>İnternet sitesinin işlevselliğini ve performansını arttırmak yoluyla sizlere sunulan hizmetleri geliştirmek,</li>
                <li>İnternet Sitesini iyileştirmek ve İnternet Sitesi üzerinden yeni özellikler sunmak ve sunulan özellikleri sizlerin tercihlerine göre kişiselleştirmek;</li>
                <li>İnternet Sitesinin, sizin ve Kurum’un hukuki ve ticari güvenliğinin teminini sağlamak, Site üzerinden sahte işlemlerin gerçekleştirilmesini önlemek;</li>
                <li>5651 sayılı Internet Ortamında Yapılan Yayınların Düzenlenmesi ve Bu Yayınlar Yoluyla İşlenen Suçlarla Mücadele Edilmesi Hakkında Kanun ve Internet Ortamında Yapılan Yayınların Düzenlenmesine Dair Usul ve Esaslar Hakkında Yönetmelik’ten kaynaklananlar başta olmak üzere, kanuni ve sözleşmesel yükümlülüklerini yerine getirmek.</li>
            </ul>

            <h5><strong>3.İNTERNET SİTEMİZDE KULLANILAN ÇEREZ TÜRLERİ</strong></h5>

            <h6><strong>3.1. Oturum Çerezleri</strong></h6>
            <p>Oturum çerezlerini ziyaretinizi süresince internet sitesinin düzgün bir şekilde çalışmasının teminini sağlamaktadır. Sitelerimizin ve sizin, ziyaretinizde güvenliğini, sürekliliğini sağlamak gibi amaçlarla kullanılırlar. Oturum çerezleri geçici çerezlerdir, siz tarayıcınızı kapatıp sitemize tekrar geldiğinizde silinir, kalıcı değillerdir.</p>

            <h6><strong>3.2. Kalıcı Çerezler</strong></h6>
            <p>Bu tür çerezler tercihlerinizi hatırlamak için kullanılır ve tarayıcılar vasıtasıyla cihazınızda depolanır Kalıcı çerezler, sitemizi ziyaret ettiğiniz tarayıcınızı kapattıktan veya bilgisayarınızı yeniden başlattıktan sonra bile saklı kalır. Tarayıcınızın ayarlarından silinene kadar bu çerezler tarayıcınızın alt klasörlerinde tutulurlar.</p>
            <p>Kalıcı çerezlerin bazı türleri; İnternet Sitesini kullanım amacınız gibi hususlar göz önünde bulundurarak sizlere özel öneriler sunulması için kullanılabilmektedir.</p>
            <p>Kalıcı çerezler sayesinde İnternet Sitemizi aynı cihazla tekrardan ziyaret etmeniz durumunda, cihazınızda İnternet Sitemiz tarafından oluşturulmuş bir çerez olup olmadığı kontrol edilir ve var ise, sizin siteyi daha önce ziyaret ettiğiniz anlaşılır ve size iletilecek içerik bu doğrultuda belirlenir ve böylelikle sizlere daha iyi bir hizmet sunulur.</p>

            <h6><strong>3.3. Zorunlu/Teknik Çerezler</strong></h6>
            <p>Ziyaret ettiğiniz internet sitesinin düzgün şekilde çalışabilmesi için zorunlu çerezlerdir. Bu tür çerezlerin amacı, sitenin çalışmasını sağlamak yoluyla gerekli hizmet sunmaktır. Örneğin, internet sitesinin güvenli bölümlerine erişmeye, özelliklerini kullanabilmeye, üzerinde gezinti yapabilmeye olanak verir.</p>

            <h6><strong>3.4. Analitik Çerezler</strong></h6>
            <p>İnternet sitesinin kullanım şekli, ziyaret sıklığı ve sayısı, hakkında bilgi toplayan ve ziyaretçilerin siteye nasıl geçtiğini gösterirler. Bu tür çerezlerin kullanım amacı, sitenin işleyiş biçimini iyileştirerek performans arttırmak ve genel eğilim yönünü belirlemektir. Ziyaretçi kimliklerinin tespitini sağlayabilecek verileri içermezler. Örneğin, gösterilen hata mesajı sayısı veya en çok ziyaret edilen sayfaları gösterirler.</p>

            <h6><strong>3.5. İşlevsel/Fonksiyonel Çerezler</strong></h6>
            <p>Ziyaretçinin site içerisinde yaptığı seçimleri kaydederek bir sonraki ziyarette hatırlar. Bu tür çerezlerin amacı ziyaretçilere kullanım kolaylığı sağlamaktır. Örneğin, site kullanıcısının ziyaret ettiği her bir sayfada kullanıcı şifresini tekrar girmesini önler.</p>

            <h6><strong>3.6. Hedefleme/Reklam Çerezleri</strong></h6>
            <p>Ziyaretçilere sunulan reklamların etkinliğinin ölçülmesi ve reklamların kaç kere görüntülendiğinin hesaplanmasını sağlarlar. Bu tür çerezlerin amacı, ziyaretçilerin ilgi alanlarına özelleştirilmiş reklamların sunulmasıdır.</p>
            <p>Aynı şekilde, ziyaretçilerin gezinmelerine özel olarak ilgi alanlarının tespit edilmesini ve uygun içeriklerin sunulmasını sağlarlar. Örneğin, ziyaretçiye gösterilen reklamın kısa süre içinde tekrar gösterilmesini engeller.</p>

            <h5><strong>4. ÇEREZ TERCİHLERİ NASIL YÖNETİLİR?</strong></h5>
            <p>Çerezlerin kullanımına ilişkin tercihlerinizi değiştirmek ya da çerezleri engellemek veya silmek için tarayıcınızın ayarlarını değiştirmeniz yeterlidir.</p>
            <p>Birçok tarayıcı çerezleri kontrol edebilmeniz için size çerezleri kabul etme veya reddetme, yalnızca belirli türdeki çerezleri kabul etme ya da bir internet sitesinin cihazınıza çerez depolamayı talep ettiğinde tarayıcı tarafından uyarılma seçeneği sunar.</p>
            <p>Aynı zamanda, daha önce tarayıcınıza kaydedilmiş çerezlerin silinmesi de mümkündür.</p>
            <p>Çerezleri devre dışı bırakır veya reddederseniz, bazı tercihleri manuel olarak ayarlamanız gerekebilir, hesabınızı tanıyamayacağımız ve ilişkilendiremeyeceğimiz için internet sitesindeki bazı özellikler ve hizmetler düzgün çalışmayabilir. Tarayıcınızın ayarlarını aşağıdaki tablodan ilgili link’e tıklayarak değiştirebilirsiniz.</p>

            <h5><strong>5. İNTERNET SİTESİ GİZLİLİK POLİTİKASI’NIN YÜRÜRLÜĞÜ</strong></h5>
            <p>İnternet Sitesi Gizlilik Politikası ..../..../.... .tarihlidir. Politika’nın tümünün veya belirli maddelerinin yenilenmesi durumunda Politika’nın yürürlük tarihi güncellenecektir. Gizlilik Politikası Kurum’un internet sitesinde (www.alanadi.com) yayımlanır ve kişisel veri sahiplerinin talebi üzerine ilgili kişilerin erişimine sunulur.</p>
            <p><strong>Firma Adı</strong><br><strong>Adres:</strong> Mahalle Adı Sokak Adı. No: 1/A, 34444 İlçe Adı/İl Adı<br><strong>Telefon:</strong> +90 216 555 55 55<br><strong>E – Posta:</strong> mail@alanadi.com<br><strong>Web Adresi:</strong> www.alanadi.com</p>
        </div>
    </div>
</section>

<!-- POPUP CONTACT -->
<section id="popup-contact" class="hidden !rounded-20 !m-0 !p-0 !max-w-[1240px] w-full">
    <div class="inner w-full rounded-20 !overflow-hidden">
        <div class="wrapper grid grid-cols-[minmax(0,5fr)_minmax(0,7fr)] md:grid-cols-1">
            <div class="image-field relative md:order-1">
                <div class="gradient bg-[#000000] absolute top-0 left-0 w-full h-full z-2 translate-z-0 opacity-65"></div>
                <div class="image h-full xs:h-250 sm:h-300 md:h-350 lg:h-400 overflow-hidden translate-z-0">
                    <img src="../assets/image/other/image-2.jpg" class="full-cover" loading="lazy" alt="">
                </div>
                <div class="contact-information absolute left-50 right-50 bottom-50 md:left-30 md:right-30 md:bottom-30 w-[calc(100%-100px)] md:w-[calc(100%-60px)] z-20">
                    <p class="title text-30 lg:text-28 md:text-24 sm:text-20 text-white leading-tight">Where Excellence<br>Turns Green!</p>
                    <div class="informations mt-40 xl:mt-40 lg:mt-40 md:mt-30 sm:mt-20">
                        <ul class="space-y-[20px]">
                            <li>
                                <a href="javascript:;" class="group/link flex items-center relative ltr:space-x-[20px]">
                                    <i class="icon icon-phone text-[18px] h-[18px] text-[#FFFFFF] block leading-none group-hover/link:scale-110 duration-450 rtl:ml-20"></i>
                                    <span class="text text-[18px] sm:text-[16px] text-[#FFFFFF] font-light leading-tight group-hover/link:translate-x-[4px] duration-450">+90 (212) 678 13 13</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="group/link flex items-center relative ltr:space-x-[20px]">
                                    <i class="icon icon-mail text-[18px] h-[18px] text-[#FFFFFF] block leading-none group-hover/link:scale-110 duration-450 rtl:ml-20"></i>
                                    <span class="text text-[18px] sm:text-[16px] text-[#FFFFFF] font-light leading-tight group-hover/link:translate-x-[4px] duration-450">info@avengrass.com</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="form-content bg-white p-80 2xl:p-60 xl:p-50 lg:p-40 md:p-30 rounded-r-[30px] shadow-default md:order-2">
                <form action="#">
                    <div class="form-wrapper grid grid-cols-4 sm:grid-cols-1 gap-x-20 gap-y-40 sm:gap-y-20">
                        <div class="item group/item col-span-4 sm:col-span-1 relative">
                            <div class="title-field mb-30 sm:mb-20">
                                <p class="title text-main-500 text-28 lg:text-24 md:text-20 sm:text-18 xs:text-16 font-semibold leading-tight duration-450 group-[&.is-active]/item:text-main-500 group-hover/item:text-main-500">Get in Touch</p>
                            </div>
                        </div>
                        <div class="item group/item col-span-2 sm:col-span-1 relative">
                            <label for="contact-name" class="text-18 sm:text-16 absolute bg-transparent top-0 left-0 px-0 py-0 xs:px-0 text-[#111]/65 -translate-y-1/2 group-hover/item:text-main-500 group-focus/item:text-main-500 duration-450 z-2 group-[&.error]/item:text-red-500">Full Name *</label>
                            <input id="contact-name" type="text" class="block h-60 sm:h-auto sm:pt-15 sm:pb-5 px-0 xs:px-0 w-full text-16 text-[#111] bg-transparent rounded-none border-0 border-b border-solid border-black/30 appearance-none focus:outline-none focus:ring-0 hover:border-main-500 focus:border-main-500 placeholder:text-black/50 focus:text-main-500 group-[&.error]/item:text-red-500 group-[&.error]/item:border-red-500 duration-450" required>
                            <div class="tooltip hidden text-14 absolute right-10 top-full -translate-y-1/2 w-fit h-fit rounded-5 border border-solid border-red-500 text-red-500 bg-white px-15 py-5 group-[&.error]/item:block z-10">Error</div>
                        </div>
                        <div class="item group/item col-span-2 sm:col-span-1 relative">
                            <label for="contact-name" class="text-18 sm:text-16 absolute bg-transparent top-0 left-0 px-0 py-0 xs:px-0 text-[#111]/65 -translate-y-1/2 group-hover/item:text-main-500 group-focus/item:text-main-500 duration-450 z-2 group-[&.error]/item:text-red-500">E-Mail *</label>
                            <input id="contact-name" type="text" class="block h-60 sm:h-auto sm:pt-15 sm:pb-5 px-0 xs:px-0 w-full text-16 text-[#111] bg-transparent rounded-none border-0 border-b border-solid border-black/30 appearance-none focus:outline-none focus:ring-0 hover:border-main-500 focus:border-main-500 placeholder:text-black/50 focus:text-main-500 group-[&.error]/item:text-red-500 group-[&.error]/item:border-red-500 duration-450" required>
                            <div class="tooltip hidden text-14 absolute right-10 top-full -translate-y-1/2 w-fit h-fit rounded-5 border border-solid border-red-500 text-red-500 bg-white px-15 py-5 group-[&.error]/item:block z-10">Error</div>
                        </div>
                        <div class="item group/item col-span-2 sm:col-span-1 relative">
                            <label for="contact-phone" class="text-18 sm:text-16 absolute bg-transparent top-0 left-0 px-0 py-0 xs:px-0 text-[#111]/65 -translate-y-1/2 group-hover/item:text-main-500 group-focus/item:text-main-500 duration-450 z-2 group-[&.error]/item:text-red-500">Phone</label>
                            <input id="contact-phone" type="text" class="block h-60 sm:h-auto sm:pt-15 sm:pb-5 px-0 xs:px-0 w-full text-16 text-[#111] bg-transparent rounded-none border-0 border-b border-solid border-black/30 appearance-none focus:outline-none focus:ring-0 hover:border-main-500 focus:border-main-500 placeholder:text-black/50 focus:text-main-500 group-[&.error]/item:text-red-500 group-[&.error]/item:border-red-500 duration-450">
                            <div class="tooltip hidden text-14 absolute right-10 top-full -translate-y-1/2 w-fit h-fit rounded-5 border border-solid border-red-500 text-red-500 bg-white px-15 py-5 group-[&.error]/item:block z-10">Error</div>
                        </div>
                        <div class="item group/item col-span-2 sm:col-span-1 relative">
                            <label for="contact-company-name" class="text-18 sm:text-16 absolute bg-transparent top-0 left-0 px-0 py-0 xs:px-0 text-[#111]/65 -translate-y-1/2 group-hover/item:text-main-500 group-focus/item:text-main-500 duration-450 z-2 group-[&.error]/item:text-red-500">Company Name *</label>
                            <input id="contact-company-name" type="text" class="block h-60 sm:h-auto sm:pt-15 sm:pb-5 px-0 xs:px-0 w-full text-16 text-[#111] bg-transparent rounded-none border-0 border-b border-solid border-black/30 appearance-none focus:outline-none focus:ring-0 hover:border-main-500 focus:border-main-500 placeholder:text-black/50 focus:text-main-500 group-[&.error]/item:text-red-500 group-[&.error]/item:border-red-500 duration-450" required>
                            <div class="tooltip hidden text-14 absolute right-10 top-full -translate-y-1/2 w-fit h-fit rounded-5 border border-solid border-red-500 text-red-500 bg-white px-15 py-5 group-[&.error]/item:block z-10">Error</div>
                        </div>
                        <div class="item group/item col-span-4 sm:col-span-1 relative">
                            <label for="contact-company-name" class="text-18 sm:text-16 absolute bg-transparent top-0 left-0 px-0 py-0 xs:px-0 text-[#111]/65 -translate-y-1/2 group-hover/item:text-main-500 group-focus/item:text-main-500 duration-450 z-2 group-[&.error]/item:text-red-500">Mesajınız *</label>
                            <textarea name="contact-message" id="contact-message" class="block min-h-[160px] sm:min-h-[80px] px-0 py-30 xs:p-20 w-full text-16 text-main-500 bg-transparent rounded-none border-0 border-b border-solid border-black/30 appearance-none focus:outline-none focus:ring-0 hover:border-main-500 focus:border-main-500 placeholder:text-black/50 focus:text-main-500 group-[&.error]/item:text-red-500 group-[&.error]/item:border-red-500 duration-450" required></textarea>
                            <div class="tooltip hidden text-14 absolute right-10 top-full -translate-y-1/2 w-fit h-fit rounded-5 border border-solid border-red-500 text-red-500 bg-white px-15 py-5 group-[&.error]/item:block z-10">Error</div>
                        </div>
                        <div class="item group/item col-span-2 sm:col-span-1 relative">
                            <div class="form-el flex items-center gap-[15px] h-full">
                                <input type="checkbox" id="acceptance" placeholder="E-Posta adresinizi yazınız" class="peer cursor-pointer absolute left-0 top-0 w-full h-full opacity-0 z-10">
                                <div class="box relative shrink-0 h-[30px] w-[30px] before:absolute before:duration-450 peer-checked:before:!opacity-100 peer-checked:before:!scale-100 before:scale-0 before:opacity-0 before:left-[50%] before:top-[50%] before:translate-x-[-50%] before:translate-y-[-50%] before:w-[40%] before:h-[40%] before:bg-main-500 duration-450 shadow-[0_0_0_1px_rgb(34_34_34/.15)] peer-hover:shadow-[0_0_0_1px_rgb(34_34_34/.5)] peer-checked:!shadow-[0_0_0_1px_rgb(0_136_38/.5)] border-0 bg-transparent group-[&.error]/item:shadow-[0_0_0_1px_rgba(255_0_0/100)] rounded-[3px] before:rounded-[3px]"></div>
                                <label for="acceptance" class="text-[14px] text-black/65 leading-tight duration-450 font-light"><a href="#popup-gdpr" class="inline-block relative z-20 text-black/70 font-semibold hover:text-main-500 duration-450 before:absolute before:left-0 before:bottom-0 before:w-full before:h-[1px] before:bg-[#111111]/65 hover:before:bg-main-500 before:duration-450" data-fancybox="">GDPR</a>, I have read and approved.</label>
                                <div class="tooltip hidden text-14 absolute right-10 top-full -translate-y-1/2 w-fit h-fit rounded-5 border border-solid border-red-500 text-red-500 bg-white px-15 py-5 group-[&.error]/item:block z-10">Error</div>
                            </div>
                        </div>
                        <div class="item group/item col-span-2 sm:col-span-1 relative">
                            <div class="button-field flex justify-end items-center h-full">
                                <button class="button group/button min-w-[200px] h-[50px] flex justify-center items-center px-[30px] rounded-full bg-main-500 relative gap-30 duration-450 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-600 hover:before:left-0 before:duration-450">
                                    <div class="text text-16 flex items-center text-white relative z-10 leading-tight duration-450 group-hover/button:text-white">Send</div>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- COOKIE -->
<div class="cookie-box fixed bottom-20 left-20 mr-0 ml-auto w-fit max max-w-full z-200 duration-450 xs:w-full xs:left-0 xs:bottom-0 xs:right-0 translate-y-[150%] [&.accepted]:opacity-0 [&.accepted]:invisible [&.accepted]:translate-y-[250%] sm:left-auto sm:bottom-0 sm:right-auto sm:w-full">
    <div class="cookie-content flex p-20 rounded-3xl bg-black gap-20 md:gap-15 sm:gap-0 sm:flex-col sm:rounded-none sm:space-y-15">
        <div class="text-field flex gap-20 sm:justify-center">
            <span class="cookie-icon flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" viewBox="0 0 36.86 36.86">
                    <path d="M36.12,15.62c-.06-.24-.24-.42-.48-.48-.23-.05-.47,.04-.6,.24-.78,1.15-2.08,1.84-3.47,1.85-1.51,.02-2.9-.78-3.65-2.09-.14-.19-.36-.3-.6-.3h-.53c-2.96,.01-5.37-2.38-5.38-5.33,0-.01,0-.03,0-.04,0-.51,.07-1.01,.21-1.5,.09-.29,.2-.56,.33-.83,.06-.15,.06-.32,0-.48-.05-.17-.19-.3-.36-.36-1.19-.42-1.98-1.55-1.97-2.81,0-.09,0-.18,.01-.27,0-.07,.03-.14,.05-.2v-.12c.1-.49,.31-.96,.6-1.37,.15-.16,.2-.39,.12-.6-.07-.21-.26-.35-.48-.36-.5-.05-1-.07-1.5-.06C8.53,.5,.5,8.53,.5,18.43c0,9.9,8.03,17.93,17.93,17.93,9.9,0,17.93-8.03,17.93-17.93-.02-.94-.1-1.88-.24-2.81Zm-15.69-7.81c-.41,.29-.9,.45-1.4,.46-1.33,0-2.4-1.08-2.39-2.41,0-1.09,.74-2.04,1.79-2.32,.02,1.53,.86,2.93,2.21,3.65-.08,.2-.15,.41-.21,.62Zm-2,27.36c-9.24,.16-16.86-7.2-17.02-16.44C1.25,9.48,8.61,1.86,17.85,1.7c.19,0,.39,0,.58,0h.42c-.11,.2-.19,.41-.26,.62-1.97,.24-3.36,2.03-3.12,4,.22,1.8,1.75,3.15,3.56,3.15,.41,0,.82-.07,1.2-.21v.21c0,3.62,2.92,6.56,6.54,6.57,.01,0,.02,0,.03,0h.3c1.01,1.49,2.68,2.39,4.48,2.39,1.3,0,2.55-.46,3.53-1.32,.05,.44,.07,.88,.06,1.32-.03,9.23-7.51,16.71-16.74,16.73h0Z" style="fill: #fff; stroke: #fff;" />
                    <path d="M10.66,10.06c-1.98,0-3.59,1.61-3.59,3.59s1.61,3.59,3.59,3.59,3.59-1.61,3.59-3.59h0c0-1.98-1.61-3.58-3.59-3.59Zm0,5.98c-1.32,0-2.39-1.07-2.39-2.39s1.07-2.39,2.39-2.39,2.39,1.07,2.39,2.39c0,1.32-1.07,2.39-2.39,2.39h0Z" style="fill: #fff; isolation: isolate; opacity: .4; stroke: #fff;" />
                    <path d="M11.26,23.21c-1.65,0-2.99,1.34-2.99,2.99,0,1.65,1.34,2.99,2.99,2.99s2.99-1.34,2.99-2.99h0c.02-1.64-1.3-2.97-2.93-2.99-.02,0-.04,0-.06,0Zm0,4.78c-.99,0-1.79-.8-1.79-1.79s.8-1.79,1.79-1.79,1.79,.8,1.79,1.79h0c.02,.97-.76,1.78-1.73,1.79-.02,0-.04,0-.06,0Z" style="fill: #fff; isolation: isolate; opacity: .4; stroke: #fff;" />
                    <path d="M23.21,21.42c-2.64,0-4.78,2.14-4.78,4.78,0,2.64,2.14,4.78,4.78,4.78s4.78-2.14,4.78-4.78c0-2.64-2.15-4.77-4.78-4.78Zm0,8.37c-1.98,0-3.59-1.61-3.59-3.59s1.61-3.59,3.59-3.59,3.59,1.61,3.59,3.59h0c0,1.98-1.61,3.58-3.59,3.59Z" style="fill: #fff; isolation: isolate; opacity: .4; stroke: #fff;" />
                </svg>
            </span>
            <p class="cookie-text text-white text-14 leading-tight flex items-center max-w-300 sm:mr-0 sm:max-w-full">{{getStaticText(18)}}</p>
        </div>
        <div class="button-field flex sm:justify-center gap-20 md:gap-15">
            <a href="page.php" class="info leading-tight text-12 text-white whitespace-nowrap opacity-60 hover:opacity-100 flex items-center duration-450">
                <span class="text">{{getStaticText(19)}}</span>
            </a>
            <a href="javascript:;" class="accept-cookie flex items-center duration-450 gap-15">
                <span class="text text-14 h-20 leading-tight text-white opacity-100 font-bold whitespace-nowrap flex items-center">{{getStaticText(20)}}</span>
                <i class="icon text-16 h-20 flex items-center leading-tight duration-450">👍</i>
            </a>
        </div>
    </div>
</div>

<!-- Önbellek tutmasın diye ekledim '?id<?= rand(); ?>' yazısını silersin -->
<script src="../assets/js/script.js?id<?= rand(); ?>"></script>
{!! $code->bitrix_widget_code !!}
</body>

</html>