@extends('layouts.main')

@section('content')

<?php $pageTitle = 'Services'; ?>

<main class="main-field">
    <!-- BREADCRUMB -->
    <?php $title = 'SERVICES';
    $expo = 'Where Excellence Turns Green!';
    $navigation = ['Home' => 'index.php', 'Services' => 'javascript:;'];
 ?>

    <section class="breadcrumb relative header-space breadcrumb-anim">
    <div class="gradient bg-[#F1F1F1] absolute top-0 left-0 w-full h-full z-2 translate-z-0 header-space-plus-minus pointer-events-none md:hidden"></div>
    <div class="image-field absolute top-0 left-1/2 -translate-x-1/2 max-w-[1720px] mx-auto w-full h-full overflow-hidden rounded-30 z-10 breadcrumb-anim-item 2xl:rounded-none min-h-[380px] md:min-h-min">
        <!-- OPACITY DEĞERİ PANEL ÜZERİNDEN AYARLANABİLİR OLMALI. -->
        <div class="gradient bg-[#111111] absolute top-0 left-0 w-full h-full z-2 opacity-50 pointer-events-none"></div>
        <div class="image h-full overflow-hidden translate-z-0">
            <!-- <img src="../assets/image/other/image-1.jpg" alt="" class="full-cover image-parallax-effect-breadcrumb"> -->
            <!-- VİDEO EKLENEBİLİR -->
            <video autoplay loop muted playsinline class="full-cover image-parallax-effect-breadcrumb" src="../assets/video/breadcrumb.mp4"></video>
        </div>
    </div>
    <div class="text-field relative py-90 xl:py-80 sm:pt-30 md:pt-40 lg:pt-60 sm:pb-[calc(30px+30px)] md:pb-[calc(40px+40px)] lg:pb-[calc(60px+40px)] z-20 overflow-hidden min-h-[380px] md:min-h-min">
        <div class="container max-w-[1720px]">
            <div class="wrapper title-content space-y-50 xl:space-y-40 lg:space-y-30 md:space-y-20">
                <!-- TITLE -->
                <h2 class="page-title text-[#ADADAD] text-20 sm:text-18 xs:text-16 font-light leading-tight relative text-center tracking-[10px] sm:tracking-[2.5px]"><?= $title ?></h2>
                <!-- TITLE -->
                <h3 class="page-title text-[#FFF] text-40 lg:text-36 md:text-32 sm:text-24 xs:text-20 font-semibold leading-tight relative text-center"><?= $expo ?></h3>
                <!-- NAVIGATION -->
                <ul class="navigation flex flex-wrap items-center justify-center gap-[10px] sm:hidden [&_li:last-child]:hidden">
                    <?php foreach ($navigation as $key => $value) : ?>
                        <li class="flex items-center">
                            <a href="<?= $value ?>" class="flex group">
                                <p class="text text-[#FFF]/65 text-18 md:text-16 font-light group-hover:text-main-500 duration-450 leading-tight"><?= $key ?></p>
                            </a>
                        </li>
                        <li class="split relative flex items-center h-[12px]">
                            <p class="text text-[#FFF]/65 text-18 md:text-16 font-light duration-450 leading-tight">/</p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <!-- SCROLL -->
            <div class="scroll-field flex justify-center absolute left-1/2 -translate-x-1/2 bottom-0 translate-y-0 z-20">
                <div class="static-images absolute left-0 top-0 w-full h-full pointer-events-none">
                    <div class="image overflow-hidden translate-z-0 h-15 w-20 absolute right-[-18px] bottom-[-7px]">
                        <!-- BU RESİM SABİT, DEĞİŞMEYECEK -->
                        <img src="../assets/image/static/breadcrumb-scroll-right.png" class="full-contain" loading="lazy" alt="">
                    </div>
                    <div class="image overflow-hidden translate-z-0 h-15 w-20 absolute left-[-18px] bottom-[-7px]">
                        <!-- BU RESİM SABİT, DEĞİŞMEYECEK -->
                        <img src="../assets/image/static/breadcrumb-scroll-left.png" class="full-contain" loading="lazy" alt="">
                    </div>
                </div>
                <div class="scrollable-selector group/scroll w-100 h-50 md:w-100 md:h-50 sm:w-80 sm:h-40 rounded-t-full bg-white cursor-pointer" data-scrollable-section=".scrollable-item">
                    <div class="icon-field flex items-center justify-center w-full h-full">
                        <i class="icon icon-arrow-down text-[14px] h-[14px] text-main-500 block leading-none duration-450 mt-15 group-hover/scroll:translate-y-5 mb-[10px]"></i>
                    </div>
                </div>
            </div>
        </div>
</section>
<div class="scrollable-item"></div>

    <!-- CONTENT -->
    <section class="services-section py-120 xl:py-80 lg:py-60 md:py-45 sm:py-30 relative overflow-hidden">
        <!-- LEFT LOGO -->
        <?php $backgroundOpacity = 'opacity-3' ?>
        <!-- opacity DEĞERİ PANELDEN SEÇİLEBİLİR OLMALI -->
        <div class="background-logo absolute left-0 top-0 -translate-x-1/4 w-1/2 h-win-space rotate-[30deg] md:hidden pointer-events-none <?= $backgroundOpacity ?>">
            <svg class="logo-object logo-trigger" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 896.36 802.39">
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
        <!-- RIGHT LOGO -->
        <?php $backgroundOpacity = 'opacity-3' ?>
        <!-- opacity DEĞERİ PANELDEN SEÇİLEBİLİR OLMALI -->
        <div class="background-logo absolute right-0 top-1/2 translate-x-1/3 -translate-y-1/2 scale-x-100 w-1/2 h-win-space rotate-[-30deg] md:hidden pointer-events-none <?= $backgroundOpacity ?>">
            <svg class="logo-object logo-trigger" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 896.36 802.39">
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
        <div class="container max-w-[1500px] relative z-20">
            <div class="wrapper">
                <!-- BU YAZI ALANI OPSİYONEL -->
                <!-- text-editor alanında bulunan stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                <!-- <div class="text-field max-w-[1040px] mx-auto mb-[100px] 2xl:mb-[80px] xl:mb-[60px] lg:mb-[40px] md:mb-[30px] sm:mb-[20px]">
                    <div class="text-editor !max-w-full editor-p:text-18 editor-li:text-18 sm:editor-p:text-16 sm:editor-li:text-16 xs:editor-p:text-14 xs:editor-li:text-14">
                        <h2 style="text-align: center;"><strong>Beauty that Meets with the Glory of Green</strong></h2>
                        <p style="text-align: center; font-weight: 300;">As Avengrass, we support an environmentally friendly and sustainable lifestyle with high quality synthetic grass products. Each of our products is produced with carefully selected materials that reflect the feel and appearance of real grass.</p>
                    </div>
                </div> -->

                <!-- SERVICE CONTENT -->
                <div class="service-wrapper grid grid-cols-1 gap-[50px] md:gap-[30px] sm:gap-[25px] srb-short-all">
                    

                    <?php foreach ($services as $key => $item) : ?>
                        <div class="service-item item group/item relative show-button-anim">
                            <div class="content bg-[#F6F6F6] rounded-[15px] overflow-hidden relative grid grid-cols-2 gap-0 md:grid-cols-1 border border-solid border-transparent group-hover/item:border-main-500 duration-450 group-[&.is-active]/item:border-main-500">
                                <div class="image-box h-[400px] xs:h-250 sm:h-300 md:h-350 lg:h-375 overflow-hidden">
                                    <a href="<?= env('HTTP_DOMAIN'). '/' . getUrl('services_url') . '/' . $item->seo_url ?>" class="image flex w-full h-[400px] xs:h-250 sm:h-300 md:h-350 lg:h-375 overflow-hidden translate-z-0 duration-450 group-hover/item:scale-110">
                                        <img src="<?= env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder','service_images_folder'], $item->lang).'/'.$item->image ?>" class="full-cover" loading="lazy" alt="">
                                    </a>
                                </div>
                                <div class="text-field flex flex-col justify-center p-60 lg:p-45 md:p-30 sm:p-25 gap-[20px] lg:gap-[15px] md:gap-[15px]">
                                    <a href="<?= env('HTTP_DOMAIN'). '/' . getUrl('services_url') . '/' . $item->seo_url ?>" class="title text-34 xl:text-30 lg:text-28 md:text-24 sm:text-20 text-black leading-tight font-bold duration-450 hover:text-main-500 hover:translate-x-[5px] group-[&.is-active]/item:text-main-500 group-[&.is-active]/item:hover:text-main-600"><?= $item->title; ?></a>
                                    <div class="text-editor !max-w-full editor-p:text-18 editor-li:text-18 sm:editor-p:text-16 sm:editor-li:text-16 xs:editor-p:text-14 xs:editor-li:text-14 line-clamp-2">
                                        <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                                        <p style="font-weight: 300;">{{$item->summary}}</p>
                                    </div>
                                    <div class="button-field !mt-0 opacity-0 h-0 translate-y-20 duration-450 group-hover/item:opacity-100 group-hover/item:h-[50px] group-hover/item:!mt-[50px] group-hover/item:translate-y-0 md:opacity-100 md:h-[50px] md:translate-y-0 group-[&.is-active]/item:opacity-100 group-[&.is-active]/item:h-[50px] group-[&.is-active]/item:!mt-[50px] group-[&.is-active]/item:translate-y-0 md:!mt-[30px] sm:!mt-[20px] md:group-[&.is-active]/item:!mt-[30px] sm:group-[&.is-active]/item:!mt-[20px] md:group-hover/item:!mt-[30px] sm:group-hover/item:!mt-[20px] sm:hidden">
                                        <a href="<?= env('HTTP_DOMAIN'). '/' . getUrl('services_url') . '/' . $item->seo_url ?>" class="button group/button w-[200px] h-[50px] sm:h-[50px] flex justify-center items-center px-[30px] rounded-full bg-main-500 relative gap-[10px] duration-450 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-600 hover:before:left-0 before:duration-450">
                                            <div class="text text-16 flex items-center text-white relative z-10 leading-tight duration-450 group-hover/button:text-white"><?= getStaticText(10) ?></div>
                                            <div class="icon-arrow-right text-[16px] height-[16px] leading-none flex items-center text-white relative z-10 duration-450 group-hover/button:text-white group-hover/button:translate-x-[5px] rtl:-scale-x-100 rtl:group-hover/button:translate-x-[-5px]"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- NO CONTENT -->
    <!-- <section class="no-content-field pb-60 xl:py-45 lg:py-30 md:py-20">
        <div class="container max-w-[1500px]">
            <div class="wrapper">
                <div class="no-content rounded-default p-20 border border-solid border-main-500">
                    <p class="text-18 text-main-500 text-center leading-tight">Gösterilecek içerik bulunamadı.</p>
                </div>
            </div>
        </div>
    </section> -->

    <!-- SHOW MORE -->
    <section class="show-more-field pb-[60px] xl:pb-[45px] lg:pb-[30px] md:pb-[20px]">
        <div class="container max-w-[1500px]">
            <div class="show-more">
                <a href="javascript:;" class="button group/button w-fit h-[50px] flex justify-center items-center px-[30px] rounded-full bg-main-500 relative gap-30 duration-450 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-600 hover:before:left-0 before:duration-450 mx-auto">
                    <div class="text text-16 flex items-center text-white relative z-10 leading-tight duration-450 group-hover/button:text-white">Show More</div>
                </a>
            </div>
        </div>
    </section>
</main>

@endsection