@extends('layouts.main')

@section('content')
<?php 
$pageTitle = $about->title;
$breadcrumbTitle = $about->title;
$breadcrumbImage = $about->image;
?>
    <main class="main-field">
    <!-- BREADCRUMB -->
    <?php $title = getStaticText(6);
    $expo = getStaticText(22);
    $navigation = ['Home' => env('HTTP_DOMAIN'), getStaticText(6) => 'javascript:;', getStaticText(21) => 'javascript:;'];
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

    <!-- ABOUT CONTENT -->
    <section class="about-section py-120 xl:py-80 lg:py-60 md:py-45 sm:py-30 relative rtl:overflow-hidden">
        <?php $backgroundOpacity = 'opacity-3' ?>
        <!-- opacity DEĞERİ PANELDEN SEÇİLEBİLİR OLMALI -->
        <div class="background-logo absolute left-0 top-1/2 -translate-x-1/4 -translate-y-1/2 w-1/2 h-win-space rotate-[30deg] md:hidden pointer-events-none <?= $backgroundOpacity ?>">
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
            <div class="wrapper grid grid-cols-[minmax(0,5fr)_minmax(0,7fr)] gap-[120px] 2xl:gap-100 xl:gap-80 lg:gap-60 md:gap-40 sm:gap-30 lg:grid-cols-2 md:grid-cols-1">
                <div class="text-content-field space-y-40 lg:space-y-30 md:space-y-20">
                    <p class="page-title text-[#ADADAD] text-20 sm:text-18 xs:text-16 font-light leading-tight relative tracking-[10px] sm:tracking-[2.5px]">{{$about->title}}</p>
                    <p class="title text-main-500 text-40 lg:text-36 md:text-32 sm:text-24 xs:text-20 font-semibold leading-tight">{{$about->title_1}}</p>
                    <div class="text-editor !max-w-full editor-p:text-18 editor-li:text-18 sm:editor-p:text-16 sm:editor-li:text-16 xs:editor-p:text-14 xs:editor-li:text-14">
                        <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                        {!!$about->description!!}
                    </div>
                </div>
                <div class="image-content-field">
                    <div class="dynamic-sticky">
                        <div class="border border-solid border-black/10 absolute left-0 top-1/2 -translate-y-1/2 w-full h-[73%] rounded-[30px] pointer-events-none md:h-[85%]"></div>
                        <!-- WEB GÖRÜNÜM -->
                        <div class="content grid grid-cols-2 gap-20 md:grid-cols-1 px-60 lg:px-40 md:px-20 srb-short-all sm:hidden">
                            <!-- col-span-x DEĞERİ PANELDEN SEÇİLEBİLİR OLACAK: col-span-1, col-span-2 -->
                            <!-- row-span-x DEĞERİ PANELDEN SEÇİLEBİLİR OLACAK: row-span-1, row-span-2 -->
                            <div class="image group/image col-span-2 row-span-1 md:col-span-1 md:row-span-1">
                                <div class="count-wrapper grid grid-cols-3 gap-50 lg:gap-40 md:gap-30 xs:grid-cols-3">
                                    <?php $list = [
                                        [
                                            'title' => 'Project',
                                            'number' => '80',
                                            'icon' => '+',
                                        ],
                                        [
                                            'title' => 'Customer',
                                            'number' => '100',
                                            'icon' => '+',
                                        ],
                                        [
                                            'title' => 'Services',
                                            'number' => '20',
                                            'icon' => '+',
                                        ],
                                    ]; ?>

                                    <?php foreach ($list as $key => $item) : ?>
                                        <div class="count-box item group/item">
                                            <div class="content relative">
                                                <div class="image-field shrink-0 flex items-center justify-center rounded-15 duration-450 relative z-2 !ml-0">
                                                    <div class="image h-275 w-200 xl:w-175 lg:w-150 md:h-175 md:w-200 xs:h-125 xs:w-150 overflow-hidden translate-z-0 opacity-100 duration-450 group-hover/item:opacity-0 group-[&.is-active]/li:opacity-0 shrink-0">
                                                        <img src="../assets/image/other/count-box-1.png" class="full-contain" loading="lazy" alt="">
                                                    </div>
                                                    <div class="image h-275 w-200 xl:w-175 lg:w-150 md:h-175 md:w-200 xs:h-125 xs:w-150 overflow-hidden translate-z-0 absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 opacity-0 duration-450 group-hover/item:opacity-100 group-[&.is-active]/li:opacity-100 shrink-0">
                                                        <img src="../assets/image/other/count-box-2.png" class="full-contain" loading="lazy" alt="">
                                                    </div>
                                                </div>
                                                <div class="counter-content group/box w-full h-full flex items-center justify-center duration-450 xs:p-[0] absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 shrink-0 z-[10]">
                                                    <div class="text-content relative z-[5] h-full flex flex-col justify-center xs:flex-col xs:justify-center space-y-[10px] sm:!space-y-0 xs:-translate-y-5">
                                                        <div class="counter">
                                                            <div class="fx-text-counter text-[#0D0D0D]/40 flex justify-center text-[36px] xl:text-[32px] lg:text-[30px] md:text-[28px] sm:text-[24px] xs:text-[20px] duration-450 group-hover/box:text-main-500 font-semibold leading-tight text-center">
                                                                <div class="text text-center text-[30px] lg:text-[26px] md:text-[24px] sm:text-[22px] xs:text-[18px] flex items-center mr-[3px]"><?= $item['icon'] ?></div>
                                                                <div class="purecounter value overflow-hidden leading-none h-[36px] sm:h-[30px] mt-[4px] xs:mt-[10px]" data-purecounter-start="0" data-purecounter-end="<?= $item['number'] ?>" data-purecounter-duration="1"></div>
                                                            </div>
                                                        </div>
                                                        <p class="text text-[16px] sm:text-[16px] xs:text-[10px] text-[#0D0D0D]/40 leading-tight duration-450 group-hover/box:text-main-500 text-center font-light md:!mt-[5px] md:font-normal"><?= $item['title'] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="image group/image col-span-1 row-span-2 md:col-span-1 md:row-span-1 group/popup relative [&.row-span-2]:h-[calc(400px+20px)] md:[&.row-span-2]:h-[250px] sm:[&.row-span-2]:h-[225px] xs:md:[&.row-span-2]:h-[200px] h-[275px] xs:h-200 sm:h-225 md:h-250 overflow-hidden rounded-20 translate-z-0">
                                <img src="../assets/image/other/image-2.jpg" class="full-cover rounded-20 duration-450 group-hover/image:scale-110" loading="lazy" alt="">
                            </div>
                            <div class="image group/image col-span-1 row-span-1 md:col-span-1 md:row-span-1 group/popup relative [&.row-span-2]:h-[calc(400px+20px)] md:[&.row-span-2]:h-[250px] sm:[&.row-span-2]:h-[225px] xs:md:[&.row-span-2]:h-[200px] h-[200px] xs:h-200 sm:h-225 md:h-250 overflow-hidden rounded-20 translate-z-0" href="../assets/image/other/image-3.jpg">
                                <img src="../assets/image/other/image-3.jpg" class="full-cover rounded-20 duration-450 group-hover/image:scale-110" loading="lazy" alt="">
                            </div>
                            <div class="image group/image col-span-1 row-span-1 md:col-span-1 md:row-span-1 group/popup relative [&.row-span-2]:h-[calc(400px+20px)] md:[&.row-span-2]:h-[250px] sm:[&.row-span-2]:h-[225px] xs:md:[&.row-span-2]:h-[200px] h-[200px] xs:h-200 sm:h-225 md:h-250 overflow-hidden rounded-20 translate-z-0" href="../assets/image/other/image-4.jpg">
                                <img src="../assets/image/other/image-4.jpg" class="full-cover rounded-20 duration-450 group-hover/image:scale-110" loading="lazy" alt="">
                            </div>
                            <div class="image group/image col-span-2 row-span-1 md:col-span-1 md:row-span-1 group/popup relative [&.row-span-2]:h-[calc(400px+20px)] md:[&.row-span-2]:h-[250px] sm:[&.row-span-2]:h-[225px] xs:md:[&.row-span-2]:h-[200px] h-[275px] xs:h-200 sm:h-225 md:h-250 overflow-hidden rounded-20 translate-z-0" href="../assets/image/other/image-5.jpg">
                                <img src="../assets/image/other/image-5.jpg" class="full-cover rounded-20 duration-450 group-hover/image:scale-110" loading="lazy" alt="">
                            </div>
                        </div>
                        <!-- MOBİL GÖRÜNÜM -->
                        <div class="carousel-field relative hidden sm:block rounded-[20px] overflow-hidden">
                            <div class="about-image-carousel swiper">
                                <div class="swiper-wrapper">
                                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                                        <div class="swiper-slide group/slide">
                                            <div class="content relative">
                                                <div class="image-field relative translate-z-0">
                                                    <div class="image h-500 xs:h-250 sm:h-300 md:h-350 lg:h-400 overflow-hidden translate-z-0">
                                                        <img src="../assets/image/other/image-<?= $i ?>.jpg" class="full-cover" loading="lazy" alt="" data-swiper-parallax="50%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                            <div class="carousel-controller">
                                <div class="carousel-navigation flex gap-20 pointer-events-none z-20 absolute bottom-20 right-20">
                                    <div class="about-image-prev pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                        <div class="icon group/navigation flex items-center justify-center w-45 h-45 sm:w-30 sm:h-30 bg-main-500 border border-solid border-main-500 rounded-full cursor-pointer hover:bg-white duration-450 hover:border-white rtl:rotate-180">
                                            <i class="icon-chevron-left text-white text-[10px] h-[10px flex items-center justify-center group-hover/navigation:text-main-400 duration-450 group-hover/navigation:translate-x-[-3px]"></i>
                                        </div>
                                    </div>
                                    <div class="about-image-next pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                        <div class="icon group/navigation flex items-center justify-center w-45 h-45 sm:w-30 sm:h-30 bg-main-500 border border-solid border-main-500 rounded-full cursor-pointer hover:bg-white duration-450 hover:border-white rtl:rotate-180">
                                            <div class="icon-chevron-right text-white text-[10px] h-[10px flex items-center justify-center group-hover/navigation:text-main-400 duration-450 group-hover/navigation:translate-x-[3px]"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- REFERENCES -->
    <section class="references-section py-60 xl:py-60 lg:py-60 md:py-45 sm:py-30">
        <div class="container max-w-[1500px]">
            <div class="wrapper">
                <div class="title-field product-title-field space-y-[40px] md:space-y-30 sm:space-y-20 mb-60 2xl:mb-60 xl:mb-60 lg:mb-40 md:mb-30 sm:mb-20 srb-short-all ">
                    <p class="title text-[#959595] text-20 sm:text-18 xs:text-16 font-light leading-tight relative tracking-[0.4em] text-center">OUR CERTIFICATES</p>
                </div>
                <div class="carousel-field relative">
                    <div class="reference-carousel swiper">
                        <div class="swiper-wrapper">
                            <?php for ($i = 1; $i <= 10; $i++) : ?>
                                <div class="swiper-slide group/slide">
                                    <div class="content relative">
                                        <div class="image-field relative translate-z-0">
                                            <a href="javascript:;" class="image w-full group/image h-100 overflow-hidden translate-z-0 flex items-center justify-center">
                                                <!-- SİYAH BEYAZ İPTAL EDİLMEK İSTENİYORSA, grayscale group-hover/image:grayscale-0 KALDIRILIR -->
                                                <img src="../assets/image/reference/reference-<?= $i ?>.png" class="full-contain max-h-[50px] duration-450 grayscale group-hover/image:grayscale-0 group-hover/image:-translate-y-5 opacity-60 group-hover/image:opacity-100" loading="lazy" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MISSION -->
    <section class="mission-section py-120 xl:py-80 lg:py-60 md:py-45 sm:py-30 relative">
        <div class="container absolute left-1/2 top-0 -translate-x-1/2 max-w-[1440px] px-[0] w-full h-full pointer-events-none">
            <div class="gradient bg-gradient-to-t from-[#F1F1F1]/0 to-[#F1F1F1] absolute top-0 left-1/2 -translate-x-1/2 w-[calc(100%)] h-full z-2 translate-z-0 rounded-[30px] pointer-events-none md:rounded-none"></div>
        </div>
        <div class="container max-w-[1300px]">
            <div class="wrapper relative">
                <!-- MISYON / VIZYON -->
                <div class="inner-wrapper grid grid-cols-[minmax(0,1fr)_minmax(0,auto)_minmax(0,1fr)] gap-[120px] 2xl:gap-[100px] xl:gap-[80px] lg:gap-60 md:gap-30 md:grid-cols-1">
                    <div class="item group/item srb-short">
                        <div class="title-field block z-10 relative sm:px-0">
                            <p class="page-title text-[#959595] text-20 sm:text-18 xs:text-16 font-light leading-tight relative tracking-[0.4em]">OUR MISSION</p>
                            <p class="title text-[#8B8B8B] text-24 lg:text-22 md:text-20 sm:text-18 xs:text-16 font-semibold leading-tight duration-450 group-hover/item:text-main-500 mt-40 md:mt-30 sm:mt-20">We are here to add naturalness to life!</p>
                            <div class="text-editor !max-w-full editor-p:text-18 editor-li:text-18 sm:editor-p:text-16 sm:editor-li:text-16 xs:editor-p:text-14 xs:editor-li:text-14 mt-50 lg:mt-40 md:mt-30 sm:mt-20">
                                <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                                <p style="font-weight: 300;">We are working to achieve this goal, to produce healthier, safer and more aesthetic living spaces we export to 70 countries of the world.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item split srb-short">
                        <div class="w-1 h-full bg-[#000000] opacity-15 md:w-full md:h-1"></div>
                    </div>
                    <div class="item group/item srb-short">
                        <div class="title-field block z-10 relative sm:px-0">
                            <p class="page-title text-[#959595] text-20 sm:text-18 xs:text-16 font-light leading-tight relative tracking-[0.4em]">OUR VISION</p>
                            <p class="title text-[#8B8B8B] text-24 lg:text-22 md:text-20 sm:text-18 xs:text-16 font-semibold leading-tight duration-450 group-hover/item:text-main-500 mt-40 md:mt-30 sm:mt-20">We are here to add naturalness to life!</p>
                            <div class="text-editor !max-w-full editor-p:text-18 editor-li:text-18 sm:editor-p:text-16 sm:editor-li:text-16 xs:editor-p:text-14 xs:editor-li:text-14 mt-50 lg:mt-40 md:mt-30 sm:mt-20">
                                <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                                <p style="font-weight: 300;">To become a world-leading brand that improves the environment and quality of life with an innovative, reliable, principled and visionary approach.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- IMAGE -->
        <div class="container max-w-[1440px] px-0 sm:hidden">
            <section class="image-section pt-30 sm:pt-30 relative z-50">
                <div class="container max-w-full px-0">
                    <div class="wrapper">
                        <div class="image-field relative">
                            <div class="image h-auto xs:h-250 sm:h-300 md:h-350 lg:h-400 translate-z-0 relative">
                                <!-- BU ALAN İÇİN; full-contain VE full-cover DEĞİŞİMİ PANELDEN YAPILABİLİR. -->
                                <img src="../assets/image/other/grass-2.png" class="full-cover md:full-cover" loading="lazy" alt="">
                            </div>
                            <div class="image-dot-field absolute left-0 top-0 w-full h-full pointer-events-none md:overflow-hidden">
                                <?php $list = [
                                    [
                                        'left' => '20%',
                                        'top' => '30%',
                                        'image' => '../assets/image/other/image-2.jpg',
                                        'title' => 'Interior',
                                        'content' => '<p style="font-weight: 300;">As Avengegrass, we serve as a company specializing in the maintenance and restoration of natural grass areas.</p>',
                                        'position' => 'is-bottom'
                                    ],
                                    [
                                        'left' => '6%',
                                        'top' => '40%',
                                        'image' => '../assets/image/other/image-3.jpg',
                                        'title' => 'Bottom Base',
                                        'content' => '<p style="font-weight: 300;">As Avengegrass, we serve as a company specializing in the maintenance and restoration of natural grass areas.</p>',
                                        'position' => 'is-bottom'
                                    ],
                                    [
                                        'left' => '60%',
                                        'top' => '81%',
                                        'image' => '../assets/image/other/image-4.jpg',
                                        'title' => 'Insole',
                                        'content' => '<p style="font-weight: 300;">As Avengegrass, we serve as a company specializing in the maintenance and restoration of natural grass areas.</p>',
                                        'position' => 'is-top'
                                    ],
                                    [
                                        'left' => '80%',
                                        'top' => '40%',
                                        'image' => '../assets/image/other/image-5.jpg',
                                        'title' => 'Top Surface',
                                        'content' => '<p style="font-weight: 300;">As Avengegrass, we serve as a company specializing in the maintenance and restoration of natural grass areas.</p>',
                                        'position' => 'is-bottom'
                                    ],
                                ]; ?>

                                <?php foreach ($list as $key => $item) : ?>
                                    <!-- DOT ALANINDA BULUNAN STYLE İÇERİSİNDEKİ left/top DEĞERLERİ PANELDEN DEĞİŞTİRİLEBİLİR YAPIDA OLMALI. -->
                                    <div class="dot-field absolute pointer-events-auto group/dot" style="left: <?= $item['left'] ?>; top: <?= $item['top'] ?>;">
                                        <div class="dot w-45 h-45 rounded-full flex justify-center items-center">
                                            <div class="dot w-[48px] h-[48px] sm:w-[30px] sm:h-[30px] bg-[#9AFFB6]/50 rounded-full shrink-0 animate-anim-scale"></div>
                                            <div class="dot w-[24px] h-[24px] sm:w-[15px] sm:h-[15px] bg-[#B4FFC9] rounded-full shrink-0 absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2"></div>
                                        </div>
                                        <div class="dot-visible-content absolute bg-white rounded-full px-30 py-5 left-1/2 -translate-x-1/2 top-[calc(100%+10px)] opacity-100 visible duration-450 min-w-[150px] translate-y-0 group-hover/dot:opacity-0 group-hover/dot:invisible group-hover/dot:translate-y-10 [box-shadow:_0px_4px_15px_0px_rgba(0,0,0,0.16)] sm:group-hover/dot:visible sm:group-hover/dot:translate-y-0 sm:opacity-0 sm:group-hover/dot:opacity-100 md:top-auto md:bottom-full">
                                            <p class="text text-[14] text-[#111111] leading-tight whitespace-nowrap text-center"><?= $item['title'] ?></p>
                                        </div>
                                        <!-- BU ALAN AŞAĞI DOĞRU AÇILACAKSA: is-bottom -->
                                        <!-- BU ALAN YUKARI DOĞRU AÇILACAKSA: is-top -->
                                        <div class="dot-tooltip absolute bg-white rounded-[10px] p-[10px] left-1/2 -translate-x-1/2 min-w-[257px] shadow-default sm:hidden opacity-0 invisible pointer-events-none duration-450 translate-y-10 group-hover/dot:opacity-100 group-hover/dot:visible group-hover/dot:pointer-events-auto group-hover/dot:translate-y-0 [&.is-top]:bottom-[calc(100%+10px)] [&.is-bottom]:top-[calc(100%+10px)]  <?= $item['position'] ?>">
                                            <div class="content">
                                                <div class="image-field">
                                                    <div class="image h-[100px] overflow-hidden translate-z-0 rounded-[10px]">
                                                        <img src="<?= $item['image'] ?>" class="full-cover" loading="lazy" alt="">
                                                    </div>
                                                </div>
                                                <div class="text-field mt-15 sm:mt-10 p-[10px]">
                                                    <h5 class="text-16 leading-tight font-medium text-main-500 mb-20 md:mb-15"><?= $item['title'] ?></h5>
                                                    <div class="text-editor !max-w-full editor-p:text-14 editor-li:text-14 sm:editor-p:text-14 sm:editor-li:text-14 xs:editor-p:text-14 xs:editor-li:text-14">
                                                        <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                                                        <?= $item['content'] ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <!-- BRANDS -->
    <!-- MOBİLDE GİZLENMEK İSTENİYORSA: sm:hidden EKLENEBİLİR veya KALDIRILABİLİR. -->
    <section class="brands-section py-120 xl:py-80 lg:py-60 md:py-45 sm:py-30 lg:pt-80 md:pt-80 sm:pt-80 sm:hidden">
        <div class="container max-w-[1500px]">
            <div class="wrapper relative rounded-[30px]">
                <div class="border border-solid border-black/10 absolute left-0 top-1/2 -translate-y-1/2 w-full h-[100%] rounded-[30px] pointer-events-none"></div>
                <div class="title-field bg-white px-[30px] block z-10 relative mx-auto w-fit translate-y-[-50%] space-y-[20px] md:space-y-15 sm:space-y-10 srb-short-all">
                    <p class="page-title text-[#959595] text-20 sm:text-18 xs:text-16 font-light leading-tight relative tracking-[0.4em] text-center">OUR BRANDS</p>
                    <p class="title text-main-500 text-40 lg:text-36 md:text-32 sm:text-24 xs:text-20 font-semibold leading-tight text-center">Fine Touch of Green</p>
                </div>
                <div class="reference-images p-[100px] 2xl:p-[80px] xl:p-[60px] lg:p-[40px] md:p-[30px] !pt-0">
                    <div class="wrapper flex flex-wrap justify-center gap-50 lg:gap-40 md:gap-30 md:grid-cols-3 sm:grid-cols-2 xs:grid-cols-2 xs:gap-20">
                        <?php for ($i = 1; $i <= 10; $i++) : ?>
                            <div class="content group/item relative duration-450 hover:-translate-y-4 srb-short">
                                <div class="image-field relative translate-z-0 group-hover/item:bg-transparent duration-450 rounded-[15px]">
                                    <a href="javascript:;" class="image w-full h-150 sm:h-125 xs:h-75 overflow-hidden translate-z-0 flex items-center justify-center">
                                        <img src="../assets/image/reference-2/reference-<?= $i ?>.png" class="full-contain max-h-[100px] duration-450 grayscale group-hover/item:grayscale-0 opacity-50 group-hover/item:opacity-100" loading="lazy" alt="">
                                    </a>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection