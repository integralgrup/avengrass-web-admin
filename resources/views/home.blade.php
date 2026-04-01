@extends('layouts.main')

@section('content')

<main class="main-content header-space">
    <!-- HOMEPAGE | CAROUSEL -->
    <section class="homepage-carousel-section h-win-header-webb md:!h-auto pb-30 xl:pb-30 lg:pb-30 md:pb-30 sm:pb-30">
        <div class="gradient bg-[#F1F1F1] absolute top-0 left-0 w-full h-full z-2 translate-z-0 header-space-plus-minus pointer-events-none md:hidden"></div>
        <div class="container max-w-[1780px] h-full sm:px-0 relative z-50">
            <div class="wrapper h-full">
                <div class="carousel-field relative h-full">
                    <div class="homepage-main-carousel swiper h-full rounded-[30px] sm:rounded-none">
                        <div class="swiper-wrapper h-full">
                            <!-- BURADA 5 ADET SLIDE KULLANILMASI GEREKMETKEDİR. -->
                            <!-- 5 ADETTEN DAHA AZ VEYA DAHA FAZLA EKLENEMEZ. -->
                            
                            <!-- RESİM ÖRNEĞİ -->
                            <?php foreach ($sliders as $i => $slider) : ?>
                                <div class="swiper-slide group/slide">
                                    <div class="content relative h-full">
                                        <div class="image-field relative translate-z-0 h-full md:absolute md:left-0 md:top-0 md:w-full md:h-full">
                                            <div class="gradient bg-black opacity-50 absolute top-0 left-0 w-full h-full z-20 translate-z-0"></div>
                                            <div class="image h-full overflow-hidden translate-z-0">
                                                <img src="<?=env('HTTP_DOMAIN'). '/'. getFolder(['uploads_folder', 'images_folder'], $slider->lang) .'/'. $slider->image ?>" class="full-cover" loading="lazy" alt="">
                                            </div>
                                        </div>
                                        <div class="text-container max-w-[1440px] w-full mx-auto absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 z-20 translate-z-0 px-[30px] md:py-[120px] sm:py-[120px] md:relative md:left-auto md:translate-x-0 md:top-auto md:translate-y-0">
                                            <div class="text-field translate-z-0">
                                                <div class="title-field block z-10 relative space-y-[30px] md:space-y-20 sm:space-y-15">
                                                    <p class="page-title text-[#ADADAD] text-20 sm:text-18 xs:text-16 font-light leading-tight relative tracking-[10px] sm:tracking-[2.5px] opacity-0 invisible translate-y-20 duration-450 group-[&.swiper-slide-active]/slide:opacity-100 group-[&.swiper-slide-active]/slide:visible group-[&.swiper-slide-active]/slide:translate-y-0 group-[&.swiper-slide-active]/slide:delay-500">{{$slider->up_title}}</p>
                                                    <p class="title text-white text-48 2xl:text-42 xl:text-38 lg:text-36 md:text-32 sm:text-24 xs:text-20 font-semibold leading-tight opacity-0 invisible translate-y-20 duration-450 group-[&.swiper-slide-active]/slide:opacity-100 group-[&.swiper-slide-active]/slide:visible group-[&.swiper-slide-active]/slide:translate-y-0 group-[&.swiper-slide-active]/slide:delay-600">{{$slider->title}}</p>
                                                </div>
                                                <div class="editor-field mt-30 sm:mt-20  opacity-0 invisible translate-y-20 duration-450 group-[&.swiper-slide-active]/slide:opacity-100 group-[&.swiper-slide-active]/slide:visible group-[&.swiper-slide-active]/slide:translate-y-0 group-[&.swiper-slide-active]/slide:delay-700">
                                                    <div class="text-editor !max-w-full editor-p:text-18 editor-li:text-18 sm:editor-p:text-16 sm:editor-li:text-16 xs:editor-p:text-14 xs:editor-li:text-14 editor-p:text-white editor-li:text-white">
                                                        <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                                                        <p style="font-weight: 300;">{{$slider->description}}</p>
                                                    </div>
                                                </div>
                                                <div class="button-field mt-30 sm:mt-20 opacity-0 invisible translate-y-20 duration-450 group-[&.swiper-slide-active]/slide:opacity-100 group-[&.swiper-slide-active]/slide:visible group-[&.swiper-slide-active]/slide:translate-y-0 group-[&.swiper-slide-active]/slide:delay-800">
                                                    <a href="{{env('HTTP_DOMAIN').'/'.$slider->button_url}}" class="button group/button min-w-[200px] w-fit h-[50px] flex justify-center items-center px-[30px] rounded-full bg-main-500 relative gap-15 duration-450 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-600 hover:before:left-0 before:duration-450">
                                                        <div class="text text-16 flex items-center text-white relative z-10 leading-tight duration-450 group-hover/button:text-white">{{$slider->button_text}}</div>
                                                        <div class="icon-arrow-right text-[16px] height-[16px] leading-none flex items-center text-white relative z-10 duration-450 group-hover/button:text-white group-hover/button:translate-x-[5px]"></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="carousel-controller absolute left-1/2 -translate-x-1/2 bottom-0 translate-y-0 z-20" dir="ltr">
                        <div class="scroll-field flex justify-center">
                            <div class="static-images absolute left-0 top-0 w-full h-full pointer-events-none">
                                <div class="image overflow-hidden translate-z-0 h-15 w-20 absolute right-[-2px] bottom-[-6px]">
                                    <!-- BU RESİM SABİT, DEĞİŞMEYECEK -->
                                    <img src="../assets/image/static/breadcrumb-scroll-right.png" class="full-contain" loading="lazy" alt="">
                                </div>
                                <div class="image overflow-hidden translate-z-0 h-15 w-20 absolute left-[-2px] bottom-[-6px]">
                                    <!-- BU RESİM SABİT, DEĞİŞMEYECEK -->
                                    <img src="../assets/image/static/breadcrumb-scroll-left.png" class="full-contain" loading="lazy" alt="">
                                </div>
                            </div>
                            <div class="carousel-controller-field group/scroll w-[330px] h-[calc(330px/2)] rounded-t-full bg-white sm:w-150 sm:h-[calc(150px/2)]
                            top-[65px] relative sm:top-0">
                                <div class="carousel-navigation flex gap-[30px] pointer-events-none absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 mt-[-15px] sm:mt-[15px]">
                                    <div class="homepage-main-prev relative pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                        <div class="icon group/navigation flex flex-col items-center justify-center w-30 h-30 cursor-pointer hover:bg-white duration-450 space-y-[5px]">
                                            <i class="icon-arrow-left-small text-[#111] text-[12px] h-[8px] flex items-center justify-center group-hover/navigation:text-main-400 duration-450 group-hover/navigation:translate-x-[-3px]"></i>
                                            <p class="text text-12 text-[#111] leading-tight font-light duration-450 group-hover/navigation:text-main-500"><?=getStaticText(1)?></p>
                                        </div>
                                        <div class="split w-1 h-full bg-[#111] absolute right-[-15px] top-0 opacity-20"></div>
                                    </div>
                                    <div class="homepage-main-next relative pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                        <div class="icon group/navigation flex flex-col items-center justify-center w-30 h-30 cursor-pointer hover:bg-white duration-450 space-y-[5px]">
                                            <div class="icon-arrow-right-small text-[#111] text-[12px] h-[8px] flex items-center justify-center group-hover/navigation:text-main-400 duration-450 group-hover/navigation:translate-x-[3px]"></div>
                                            <p class="text text-12 text-[#111] leading-tight font-light duration-450 group-hover/navigation:text-main-500"><?=getStaticText(2)?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-pagination flex justify-center z-20 absolute top-0 w-full h-[calc(100%-65px)] pointer-events-none xs:hidden rtl:[transform:scaleX(-1)]">
                                    <svg class="w-[calc(100%)] h-full scale-x-[0.97] scale-y-[0.79] mt-[6px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 206.87 77.3">
                                        <g class="pointer-events-auto cursor-pointer" data-id="1">
                                            <path class="stroke-transparent duration-450" d="m.5,77.3s-.1,0-.15-.02c-.26-.08-.41-.36-.33-.62,2.79-9.1,6.77-17.78,11.83-25.82.15-.23.46-.3.69-.16.23.15.3.46.16.69-5.01,7.96-8.95,16.57-11.72,25.58-.07.21-.26.35-.48.35Z" style="fill: #fff;" />
                                            <path d="m12.28,51.1c-4.98,7.91-9.03,16.75-11.78,25.71" style="fill: none; stroke: #111111; opacity: 30%; stroke-linecap: round; stroke-miterlimit: 10;" />
                                        </g>
                                        <g class="pointer-events-auto cursor-pointer" data-id="2">
                                            <path class="stroke-transparent duration-450" d="m33.88,26.71c-.14,0-.28-.06-.38-.18-.18-.21-.16-.53.05-.7l.1-.08c7.28-6.17,15.32-11.35,23.87-15.39.25-.12.55-.01.67.24.12.25.01.55-.24.67-8.47,4.01-16.43,9.14-23.65,15.26l-.09.08c-.09.08-.21.12-.33.12Z" style="fill: #fff;" />
                                            <path d="m33.89,26.23c7.32-6.23,15.25-11.34,23.84-15.42" style="fill: none; stroke: #111111; opacity: 30%; stroke-linecap: round; stroke-miterlimit: 10;" />
                                        </g>
                                        <g class="pointer-events-auto cursor-pointer" data-id="3">
                                            <path class="stroke-transparent duration-450" d="m89.33,1.96c-.25,0-.46-.18-.49-.43-.04-.27.15-.53.43-.56,9.38-1.26,19.02-1.29,28.4-.08.27.04.47.29.43.56s-.29.46-.56.43c-9.3-1.2-18.85-1.17-28.14.08-.02,0-.04,0-.07,0Z" style="fill: #fff;" />
                                            <path d="m89.33,1.47c9.38-1.26,18.85-1.27,28.27-.09" style="fill: none; stroke: #111111; opacity: 30%; stroke-linecap: round; stroke-miterlimit: 10;" />
                                        </g>
                                        <g class="pointer-events-auto cursor-pointer" data-id="4">
                                            <path class="stroke-transparent duration-450" d="m173.07,26.29c-.11,0-.23-.04-.32-.12-7.18-6.09-15.15-11.19-23.69-15.17-.25-.12-.36-.41-.24-.66.12-.25.41-.36.66-.24,8.62,4.02,16.67,9.17,23.92,15.32.21.18.24.49.06.7-.1.12-.24.18-.38.18Z" style="fill: #fff;" />
                                            <path d="m149.26,10.54c8.62,4.02,16.56,9.09,23.81,15.24" style="fill: none; stroke: #111111; opacity: 30%; stroke-linecap: round; stroke-miterlimit: 10;" />
                                        </g>
                                        <g class="pointer-events-auto cursor-pointer" data-id="5">
                                            <path class="stroke-transparent duration-450" d="m206.37,76.92c-.21,0-.41-.14-.48-.35-2.73-9.01-6.65-17.63-11.66-25.61-.15-.23-.08-.54.16-.69.23-.15.54-.08.69.16,5.06,8.06,9.02,16.75,11.77,25.85.08.26-.07.54-.33.62-.05.01-.1.02-.14.02Z" style="fill: #fff;" />
                                            <path d="m194.65,50.69c5.06,8.06,8.97,16.63,11.72,25.73" style="fill: none; stroke: #111111; opacity: 30%; stroke-linecap: round; stroke-miterlimit: 10;" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HOMEPAGE | ABOUT -->
    <section class="homepage-about-section h-win md:!h-auto relative stretch-section overflow-hidden">
        <div class="background-logo absolute left-0 top-0 -translate-x-1/4 translate-y-0 w-1/2 h-1/2 rotate-[30deg] md:hidden pointer-events-none opacity-3">
            <!-- SABİT ve HAREKETLİ PANELDEN SEÇİLEBİLİR OLACAK -->
            <!-- SABİT -->
            <!-- <div class="image h-full overflow-hidden translate-z-0">
                <img src="../assets/image/static/background-logo.png" class="full-contain" loading="lazy" alt="">
            </div> -->
            <!-- HAREKETLİ -->
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
        <div class="container max-w-[1500px] relative z-20 h-full">
            <div class="wrapper stretch-wrapper main-wrapper grid grid-cols-[minmax(0,5fr)_minmax(0,7fr)] gap-[30px] xl:grid-cols-2 h-full md:grid-cols-1">
                <div class="about-text-field flex flex-col justify-center py-120 xl:py-80 lg:py-60 md:py-45 sm:py-30">
                    <!-- TITILE -->
                    <div class="title-field block z-10 relative space-y-[30px] md:space-y-20 sm:space-y-15 srb-short-all">
                        <p class="page-title text-[#ADADAD] text-20 sm:text-18 xs:text-16 font-light leading-tight relative tracking-[0.4em]">{{$about->title}}</p>
                        <p class="title text-main-500 text-40 lg:text-36 md:text-32 sm:text-24 xs:text-20 font-semibold leading-tight duration-450">{{$about->title_1}}</p>
                    </div>
                    <!-- TEXT EDITOR -->
                    <div class="editor-field mt-30 sm:mt-20 srb-short-all">
                        <div class="text-editor !max-w-full editor-p:text-18 editor-li:text-18 sm:editor-p:text-16 sm:editor-li:text-16 xs:editor-p:text-14 xs:editor-li:text-14">
                            <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                            <p style="font-weight: 300;"></p>
                        </div>
                    </div>
                    <!-- COUNT -->
                    <div class="countable-field mt-30 sm:mt-20">
                        <div class="count-wrapper grid grid-cols-3 gap-40 lg:gap-30 md:gap-30 xs:grid-cols-3 w-fit md:mx-auto">
                            <?php $list = [
                                [
                                    'title' => getStaticText(3),
                                    'number' => '80',
                                    'icon' => '+',
                                ],
                                [
                                    'title' => getStaticText(4),
                                    'number' => '100',
                                    'icon' => '+',
                                ],
                                [
                                    'title' => getStaticText(5),
                                    'number' => '20',
                                    'icon' => '+',
                                ],
                            ]; ?>

                            <?php foreach ($list as $key => $item) : ?>
                                <div class="count-box item group/item">
                                    <div class="content relative">
                                        <div class="image-field shrink-0 flex items-center justify-center rounded-15 duration-450 relative z-2 !ml-0">
                                            <div class="image h-[211px] w-[150px] xl:w-175 lg:w-150 md:h-175 md:w-[150px] xs:h-125 xs:w-150 overflow-hidden translate-z-0 opacity-100 duration-450 group-hover/item:opacity-0 group-[&.is-active]/li:opacity-0 shrink-0">
                                                <img src="../assets/image/other/count-box-1.png" class="full-contain" loading="lazy" alt="">
                                            </div>
                                            <div class="image h-[211px] w-[150px] xl:w-175 lg:w-150 md:h-175 md:w-[150px] xs:h-125 xs:w-150 overflow-hidden translate-z-0 absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 opacity-0 duration-450 group-hover/item:opacity-100 group-[&.is-active]/li:opacity-100 shrink-0">
                                                <img src="../assets/image/other/count-box-2.png" class="full-contain" loading="lazy" alt="">
                                            </div>
                                        </div>
                                        <div class="counter-content group/box w-full h-full flex items-center justify-center duration-450 xs:p-[0] absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 shrink-0 z-[10]">
                                            <div class="text-content relative z-[5] h-full flex flex-col justify-center xs:flex-col xs:justify-center space-y-[10px] sm:!space-y-0 xs:-translate-y-5">
                                                <div class="counter">
                                                    <div class="fx-text-counter text-[#0D0D0D]/40 flex justify-center text-[36px] xl:text-[32px] lg:text-[30px] md:text-[28px] sm:text-[24px] xs:text-[20px] duration-450 group-hover/box:text-main-500 font-semibold leading-tight text-center">
                                                        <div class="text text-center text-[32.74px] lg:text-[26px] md:text-[24px] sm:text-[22px] xs:text-[18px] flex items-center mr-[3px]"><?= $item['icon'] ?></div>
                                                        <div class="purecounter value overflow-hidden leading-none h-[36px] sm:h-[30px] mt-[4px] xs:mt-[10px]" data-purecounter-start="0" data-purecounter-end="<?= $item['number'] ?>" data-purecounter-duration="1"></div>
                                                    </div>
                                                </div>
                                                <p class="text text-[16px] sm:text-[16px] xs:text-[10px] text-[#0D0D0D]/40 leading-tight duration-450 group-hover/box:text-main-500 text-center font-light md:!mt-[5px] md:font-medium"><?= $item['title'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- BUTTON -->
                    <div class="button-field mt-30 sm:mt-20 srb-short-all">
                        <a href="page-about.php" class="button group/button w-fit min-w-[200px] h-[50px] flex justify-center items-center px-[30px] rounded-full bg-main-500 relative gap-15 duration-450 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-600 hover:before:left-0 before:duration-450">
                            <div class="text text-16 flex items-center text-white relative z-10 leading-tight duration-450 group-hover/button:text-white"><?= getStaticText(6) ?></div>
                            <div class="icon-arrow-right text-[16px] height-[16px] leading-none flex items-center text-white relative z-10 duration-450 group-hover/button:text-white group-hover/button:translate-x-[5px] rtl:-scale-x-100 rtl:group-hover/button:translate-x-[-5px]"></div>
                        </a>
                    </div>
                </div>
                <div class="image-field hp-stretch-to-right  h-full xs:h-250 sm:h-300 md:h-350 relative overflow-hidden">
                    <div class="mask-image absolute top-0 left-0 w-full h-full z-20">
                        <img src="../assets/image/static/homepage-video-mask.png" class="w-full h-full object-cover object-left rtl:object-right" loading="lazy" alt="">
                    </div>
                    <div class="image h-full xs:h-250 sm:h-300 md:h-350 overflow-hidden translate-z-0 scale-125">
                        <!-- RESİM ÖRNEĞİ -->
                        <!-- <img src="../assets/image/other/image-3.jpg" class="full-cover" loading="lazy" alt=""> -->
                        <!-- VİDEO ÖRNEĞİ -->
                        <video autoplay loop muted playsinline class="full-cover" src="../assets/video/sample1.mp4"></video>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HOMEPAGE | PRODUCTS -->
    <section class="homepage-products-section pt-120 xl:pt-80 lg:pt-60 md:pt-45 sm:pt-30 pb-80 xl:pb-70 lg:pb-60 md:pb-45 sm:pb-30 relative overflow-hidden">
        <!-- GRADIENT -->
        <div class="container absolute left-1/2 top-0 -translate-x-1/2 max-w-[1750px] px-[0] w-full h-full pointer-events-none">
            <div class="gradient bg-gradient-to-t from-[#F1F1F1]/0 to-[#F1F1F1] absolute top-0 left-1/2 -translate-x-1/2 w-[calc(100%)] h-full z-2 translate-z-0 rounded-[30px] pointer-events-none md:rounded-none"></div>
        </div>
        <div class="container max-w-[1500px] relative z-20">
            <div class="wrapper">
                <div class="title-field product-title-field space-y-[40px] md:space-y-30 sm:space-y-20 mb-100 2xl:mb-80 xl:mb-60 lg:mb-40 md:mb-30 sm:mb-20 srb-short-all ">
                    <p class="page-title text-[#959595] text-20 sm:text-18 xs:text-16 font-light leading-tight relative tracking-[0.4em] text-center"><?= getStaticText(7) ?></p>
                    <p class="title text-main-500 text-40 lg:text-36 md:text-32 sm:text-24 xs:text-20 font-semibold leading-tight duration-450 text-center"><?= getStaticText(8) ?></p>
                </div>
                <div class="tab-bar">
                    <div class="top-wrapper">
                        <ul class="grid grid-cols-2 gap-50 md:grid-cols-1 md:gap-30 sm:gap-20 xs:gap-15">
                            <?php foreach ($categories as $key => $item) : ?>
                                <li data-id="<?= $key + 1 ?>" class="item-selector group/item scrollable-selector-only-web scrollable-selector-only-mobile scrollable-selector-only-mobile <?php if ($key == 0) : ?>is-active<?php endif; ?>" data-scrollable-section-web=".tab-bar" data-scrollable-section-mobile=".tab-main-content">
                                    <div class="content relative pb-[54px] md:pb-0">
                                        <div class="selector absolute left-0 bottom-0 w-full mt-30 pb-[24px] md:hidden">
                                            <div class="border border-solid border-black opacity-10 duration-450 group-[&.is-active]/item:border-main-500 group-[&.is-active]/item:opacity-100"></div>
                                            <div class="border-icon absolute left-1/2 -translate-x-1/2 top-0 opacity-0 duration-450 group-[&.is-active]/item:opacity-100">
                                                <div class="image h-[24px] overflow-hidden translate-z-0">
                                                    <img src="../assets/image/static/hp-line.png" class="full-contain" loading="lazy" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h-[calc(100%-54px)] relative rounded-[15px] overflow-hidden cursor-pointer">
                                            <div class="gradient bg-[#808C8F] absolute top-0 left-0 w-full h-full z-2 translate-z-0 opacity-80 duration-450 group-hover/item:bg-main-500/80 group-[&.is-active]/item:bg-main-500"></div>
                                            <div class="background absolute left-0 top-0 w-full h-full">
                                                <div class="image h-full w-full overflow-hidden translate-z-0">
                                                    <img src="<?=env('HTTP_DOMAIN'). '/'. getFolder(['uploads_folder', 'product_images_folder'], $item->lang) .'/'. $item['image'] ?>" class="full-cover" loading="lazy" alt="">
                                                </div>
                                            </div>
                                            <div class="inner-content flex items-center justify-between gap-20 p-40 md:p-30 sm:p-25 relative z-20 h-[calc(100%-30px)]">
                                                <div class="text-field flex flex-col gap-[30px] md:gap-[20px] sm:gap-[15px] xs:gap-[10px]">
                                                    <p class="title text-24 lg:text-22 md:text-20 sm:text-18 leading-tight text-white line-clamp-1 font-normal"><?= $item->title ?></p>
                                                    <p class="description text-16 font-light leading-tight text-white line-clamp-1"><?= $item['description'] ?></p>
                                                </div>
                                                <div class="dot-field shrink-0">
                                                    <div class="w-[42px] h-[42px] bg-white rounded-full flex items-center justify-center duration-450 [box-shadow:0px_14px_30px_0px_rgba(0,0,0,0.5);]">
                                                        <div class="inner w-[16px] h-[16px] bg-main-500 rounded-full opacity-0 duration-450 group-[&.is-active]/item:opacity-100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="tab-content mt-30">
                    <div class="tab-main-content duration-450 h-0 relative">
                        <?php foreach($categories as $key => $category):
                            $products[] = $category->children;
                        endforeach;
                        ?>

                        <?php foreach ($categories as $key => $category) : ?>
                            <div class="tab-content-carousel absolute left-0 top-0 w-full opacity-0 invisible pointer-events-none translate-y-10 duration-450 [&.is-active]:opacity-100 [&.is-active]:visible [&.is-active]:pointer-events-auto [&.is-active]:delay-450 <?php if ($key == 0) : ?>is-active<?php endif; ?>" data-id="<?= $key + 1 ?>">
                                <div class="inner-content">
                                    <div class="top-field flex justify-between items-center sm:flex-col sm:items-center gap-20 sm:justify-center">
                                        <div class="title-field">
                                            <p class="page-title text-[#959595] text-20 sm:text-18 xs:text-16 font-light leading-tight relative tracking-[0.4em] sm:text-center"><?= $item->title ?></p>
                                        </div>
                                        <div class="carousel-controller-field flex items-center gap-[15px] sm:flex-col sm:items-center sm:w-full">
                                            <div class="button-field" dir="ltr">
                                                <a href="" class="button group/button w-fit h-[50px] flex justify-center items-center px-[30px] rounded-full bg-transparent border border-solid border-main-500 relative gap-15 duration-450 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-600 hover:border-main-600 hover:before:left-0 before:duration-450">
                                                    <div class="text text-16 flex items-center text-main-500 relative z-10 leading-tight duration-450 group-hover/button:text-white whitespace-nowrap rtl:order-2">All Products</div>
                                                    <div class="icon-arrow-right text-[16px] height-[16px] leading-none flex items-center text-main-500 relative z-10 duration-450 group-hover/button:text-white group-hover/button:translate-x-[5px] rtl:-scale-x-100 rtl:group-hover/button:translate-x-[-5px] rtl:order-1"></div>
                                                </a>
                                            </div>
                                            <div class="carousel-navigation flex gap-20 pointer-events-none">
                                                <div class="other-product-prev pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                                    <div class="icon group/navigation flex items-center justify-center w-50 h-50 sm:w-40 sm:h-40 bg-[#E9E9E9] border border-solid border-[#E9E9E9] rounded-full cursor-pointer hover:bg-main-500 hover:border-main-500 duration-450 rtl:rotate-180">
                                                        <i class="icon-chevron-left text-[#111111] text-[10px] h-[10px] flex items-center justify-center group-hover/navigation:text-white duration-450 group-hover/navigation:translate-x-[-3px]"></i>
                                                    </div>
                                                </div>
                                                <div class="other-product-next pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                                    <div class="icon group/navigation flex items-center justify-center w-50 h-50 sm:w-40 sm:h-40 bg-[#E9E9E9] border border-solid border-[#E9E9E9] rounded-full cursor-pointer hover:bg-main-500 hover:border-main-500 duration-450 rtl:rotate-180">
                                                        <div class="icon-chevron-right text-[#111111] text-[10px] h-[10px] flex items-center justify-center group-hover/navigation:text-white duration-450 group-hover/navigation:translate-x-[3px]"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-field">
                                        <div class="other-product-carousel swiper">
                                            <div class="swiper-wrapper">
                                                <?php foreach ($category->children as $key => $item) : ?>
                                                    <?php foreach($item->children as $kk => $product) : ?>
                                                        <div class="swiper-slide group/slide pt-[20px] pb-[40px]" data-swiper-autoplay="5000">
                                                            <a href="<?= env('HTTP_DOMAIN') .'/'.$item->seo_url .'/'. $product->seo_url ?>" class="sport-grass-item item group/item">
                                                                <div class="content bg-white rounded-[20px] duration-450 group-hover/item:-translate-y-[5px] border border-solid border-[#111111]/10 group-hover/item:border-[#111111]/10 sm:group-hover/item:shadow-none sm:group-hover/item:border-[#111111]/10 group-hover/item:[box-shadow:_0px_20px_50px_0px_rgba(0,0,0,0.1)]">
                                                                    <div class="carousel-field relative p-[30px] md:p-[20px]">
                                                                        <!-- brand-image ALANI OPSİYONEL. -->
                                                                        <!-- BURADA EN FAZLA 12 ADEDE KADAR brand-image EKLENEBİLİR. -->
                                                                        
                                                                        <div class="sport-grass-carousel swiper">
                                                                            <div class="swiper-wrapper">
                                                                                
                                                                                    <div class="swiper-slide group/slide" data-swiper-autoplay="-1">
                                                                                        <div class="content relative">
                                                                                            <div class="image-field relative translate-z-0">
                                                                                                <div class="image h-[235px] xs:h-200 sm:h-215 overflow-hidden translate-z-0">
                                                                                                    <img src="<?=env('HTTP_DOMAIN'). '/'. getFolder(['uploads_folder', 'product_images_folder'], $product->lang) .'/'. $product->image ?>" class="full-cover" loading="lazy" alt="" data-swiper-parallax="50%">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-field pb-[50px] md:py-[20px] px-[35px] md:px-[20px] pt-0 md:pt-0 relative">
                                                                        <div class="text-content mr-[20px] sm:mr-0">
                                                                            <p class="category flex text-16 font-light leading-tight text-[#959595] tracking-[5px] duration-450 hover:text-main-500"><?= $item['title'] ?></p>
                                                                            <p class="title flex text-20 sm:text-18 text-[#111111] group-hover/slide:text-main-500 duration-450 group-hover/slide:hover:text-main-700 mt-15 md:mt-10"><?= $product['title'] ?></p>
                                                                            <div class="button-field mt-30 lg:mt-20 md:mt-15 sm:mt-10 sm:hidden">
                                                                                <div class="button group/button w-fit min-w-[200px] h-[50px] flex justify-center items-center px-[30px] rounded-full bg-transparent relative gap-[15px] duration-450 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-600 before:duration-450 hover:before:left-0 hover:shadow-[inset_0_0_0_1px_var(--main-600)] shadow-[inset_0_0_0_1px_rgba(17,17,17,0.15)] group-hover/slide:shadow-[inset_0_0_0_1px_var(--main-500)] group-hover/slide:bg-main-500">
                                                                                    <div class="text text-[15.18px] flex items-center text-[#111111] group-hover/slide:text-white group-hover/slide:group-hover/button:text-white relative z-10 leading-tight duration-450 group-hover/button:text-white"><?= getStaticText(10) ?></div>
                                                                                    <div class="icon-arrow-right text-[16px] height-[16px] leading-none flex items-center text-[#111111] group-hover/slide:text-white group-hover/slide:group-hover/button:text-white relative z-10 duration-450 group-hover/button:text-white group-hover/button:translate-x-[5px] rtl:-scale-x-100 rtl:group-hover/button:translate-x-[-5px]"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="carousel-controller z-20 absolute right-30 top-1/2 -translate-y-1/2 sm:hidden">
                                                                            <div class="carousel-pagination flex justify-center">
                                                                                <div class="sport-grass-pagination flex flex-col [&_.swiper-pagination-bullet]:bg-transparent [&_.swiper-pagination-bullet-active]:!bg-[#B5B5B5] group-hover/slide:[&_.swiper-pagination-bullet-active]:!bg-main-500 [&_.swiper-pagination-bullet]:w-[11.23px] [&_.swiper-pagination-bullet]:h-[11.23px] [&_.swiper-pagination-bullet]:!mx-0 !gap-0 !space-y-[15px] justify-center [&_.swiper-pagination-bullet]:opacity-100 [&_.swiper-pagination-bullet]:duration-450  [&_.swiper-pagination-bullet]:border [&_.swiper-pagination-bullet]:border-solid [&_.swiper-pagination-bullet]:border-black/10 [&_.swiper-pagination-bullet-active]:border-main-500"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    <?php endforeach; ?>
                                                <?php endforeach; ?>
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

    <!-- HOMEPAGE | USING AREAS -->
    <section class="homepage-using-areas-section relative overflow-hidden bg-bodyColor lg:z-20">
        <!-- LOGO -->
        <div class="background-logo absolute left-1/2 top-0 -translate-x-1/2 translate-y-[calc(-50%+50px)] w-1/2 rotate-[210deg] h-win-space md:hidden pointer-events-none z-80 opacity-3">
            <!-- SABİT ve HAREKETLİ PANELDEN SEÇİLEBİLİR OLACAK -->
            <!-- SABİT -->
            <!-- <div class="image h-full overflow-hidden translate-z-0">
                <img src="../assets/image/static/background-logo.png" class="full-contain" loading="lazy" alt="">
            </div> -->
            <!-- HAREKETLİ -->
            <svg class="using-area-object logo-trigger" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 896.36 802.39">
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
        <!-- MAIN CONTENT -->
        <div class="container max-w-[1500px] relative z-60 h-full">
            <div class="wrapper h-full">
                <!-- CAROUSEL | TOP CONTENT -->
                <div class="container max-w-[920px] md:px-0">
                    <div class="wrapper h-full pt-150 2xl:pt-120 xl:pt-100 lg:py-60 md:py-40 sm:py-30 xs:py-20">
                        <div class="carousel-field relative">
                            <div class="hp-using-area-carousel animate-carousel !overflow-visible swiper">
                                <div class="swiper-wrapper">
                                    <!-- EN FAZLA 7 ADET LİSTELENEBİLİR -->
                                    <!-- 7 ADET VE ÜZERİNDE LİSTELEME YAPILAMAZ -->
                                    

                                    <?php foreach ($using_areas as $key => $item) : ?>
                                        <div class="swiper-slide group/slide" data-id="<?= $key + 1 ?>">
                                            <div class="content relative">
                                                <div class="title-field space-y-[40px] md:space-y-30 sm:space-y-20 mb-80 2xl:mb-60 xl:mb-60 lg:mb-40 md:mb-30 sm:mb-20">
                                                    <p class="page-title text-[#959595] text-20 sm:text-18 xs:text-16 font-light leading-tight relative tracking-[0.4em] text-center"><?= getStaticText(9) ?></p>
                                                    <p class="title text-main-500 text-40 lg:text-36 md:text-32 sm:text-24 xs:text-20 font-semibold leading-tight duration-450 text-center"><?= $item['title'] ?></p>
                                                    <div class="editor-field max-w-[768px] mx-auto">
                                                        <div class="text-editor !max-w-full editor-p:text-18 editor-li:text-18 sm:editor-p:text-16 sm:editor-li:text-16 xs:editor-p:text-14 xs:editor-li:text-14 line-clamp-3">
                                                            <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                                                            {!! $item['description'] !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- BURADA 4 ADET ICON GÖSTERİLMESİ TAVSİYE EDİLMEKTEDİR. -->
                                                <!-- DİĞER ICONLAR DETAY SAYFASINDA GÖSTERİLEBİLİR. -->
                                                <div class="iconable-field">
                                                    <ul class="grid grid-cols-4 gap-30 md:grid-cols-2 xs:grid-cols-2 [&_li:last-child_.split]:hidden md:[&_li:nth-child(even).split]:hidden">
                                                        <?php $using_icons =  [
                                                                    [
                                                                        'title' => 'Floor<br>Arrangements',
                                                                        'icon' => '../assets/image/other/icon-13.png'
                                                                    ],
                                                                    [
                                                                        'title' => 'Electric &<br>Weak Currents',
                                                                        'icon' => '../assets/image/other/icon-16.png'
                                                                    ],
                                                                    [
                                                                        'title' => 'Steel Tribune &<br>Seat Installation',
                                                                        'icon' => '../assets/image/other/icon-14.png'
                                                                    ],
                                                                    [
                                                                        'title' => 'Artificial Grass<br>Flooring',
                                                                        'icon' => '../assets/image/other/icon-17.png'
                                                                    ]
                                                        ]; ?>
                                                        <?php foreach ($using_icons as $key => $icon) : ?>
                                                            <li class="relative">
                                                                <div class="icon mb-30 sm:mb-20">
                                                                    <div class="image h-[50px] md:h-[40px] w-[70px] md:w-[40px] overflow-hidden translate-z-0 mx-auto">
                                                                        <img src="<?= $icon['icon'] ?>" class="full-contain" loading="lazy" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="text-field">
                                                                    <p class="text text-16 sm:text-14 xs:text-12 text-black leading-tight text-center font-light"><?= $icon['title'] ?></p>
                                                                </div>
                                                                <div class="split absolute top-0 -right-[15px] w-1 h-full bg-black opacity-10 md:hidden rtl:right-auto rtl:left-[-15px]"></div>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </div>
                                                <div class="button-field flex items-center justify-center mt-100 2xl:mt-80 xl:mt-60 lg:mt-45 md:mt-30 sm:mt-20" dir="ltr">
                                                    <a href="<?= env('HTTP_DOMAIN') . '/' . getUrl('using_areas_url') .'/'. $item->seo_url ?>" class="button group/button w-fit min-w-[200px] h-[50px] flex justify-center items-center px-[30px] rounded-full bg-main-500 relative gap-15 duration-450 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-600 hover:before:left-0 before:duration-450">
                                                        <div class="text text-16 flex items-center text-white relative z-10 leading-tight duration-450 group-hover/button:text-white font-normal rtl:order-2"><?= getStaticText(10) ?></div>
                                                        <div class="icon-arrow-right text-[16px] height-[10px] leading-none flex items-center text-white relative z-10 duration-450 group-hover/button:text-white group-hover/button:translate-x-[5px] rtl:-scale-x-100 rtl:group-hover/button:translate-x-[-5px] rtl:order-1"></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="carousel-controller hidden lg:block h-60">
                                <div class="carousel-navigation flex gap-20 pointer-events-none z-20 absolute bottom-0 right-20 lg:left-1/2 lg:-translate-x-1/2 lg:justify-center">
                                    <div class="hp-using-area-prev pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                        <div class="icon group/navigation flex items-center justify-center w-50 h-50 sm:w-40 sm:h-40 bg-[#E9E9E9] border border-solid border-[#E9E9E9] rounded-full cursor-pointer hover:bg-main-500 hover:border-main-500 duration-450 rtl:rotate-180">
                                            <i class="icon-chevron-left text-[#111111] text-[10px] h-[10px] flex items-center justify-center group-hover/navigation:text-white duration-450 group-hover/navigation:translate-x-[-3px]"></i>
                                        </div>
                                    </div>
                                    <div class="hp-using-area-next pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                        <div class="icon group/navigation flex items-center justify-center w-50 h-50 sm:w-40 sm:h-40 bg-[#E9E9E9] border border-solid border-[#E9E9E9] rounded-full cursor-pointer hover:bg-main-500 hover:border-main-500 duration-450 rtl:rotate-180">
                                            <div class="icon-chevron-right text-[#111111] text-[10px] h-[10px] flex items-center justify-center group-hover/navigation:text-white duration-450 group-hover/navigation:translate-x-[3px]"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CAROUSEL | BOTTOM CONTENT -->
                <div class="container max-w-[1500px] mt-150 2xl:mt-120 xl:mt-100 lg:mt-60 md:mt-45 sm:mt-30 lg:hidden">
                    <div class="wrapper h-full">
                        <ul class="flex justify-between">
                            <!-- EN FAZLA 7 ADET GÖSTERİLEBİLİR -->
                            <!-- 7 ADET VE ÜZERİNDE LİSTELEME YAPILAMAZ -->

                            <?php foreach ($using_areas as $key => $item) : ?>
                                <li class="hp-product-item cursor-pointer group/item scrollable-selector-only-web scrollable-selector-only-mobile rounded-t-15 <?php if ($key == 0) : ?>is-active<?php endif; ?>" data-id="<?= $key + 1 ?>" data-scrollable-section=".homepage-using-areas-section" data-image-left="<?= $item['left-image'] ?>" data-image-right="<?= $item['right-image'] ?>">
                                    <div class="content px-30 py-40 md:p-30 sm:p-25 bg-[#F1F9F4] h-full flex flex-col justify-center duration-450 rounded-t-15 group-[&.is-active]/item:bg-main-500 max-w-[160px]  [box-shadow:0px_-10px_50px_0px_rgba(230,236,232,1);] opacity-100">
                                        <div class="inner min-w-[100px] opacity-50 group-[&.is-active]/item:opacity-100 duration-450">
                                            <div class="image-field shrink-0 flex items-center justify-center rounded-15 duration-450 relative z-2 !ml-0">
                                                <div class="image h-50 md:h-40 sm:h-30 w-50 md:w-40 sm:w-30 overflow-hidden translate-z-0 opacity-100 duration-450 group-hover/li:opacity-0 group-[&.is-active]/item:opacity-0 lg:group-hover/li:opacity-100">
                                                    <img src="<?= env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'product_images_folder'], $item->lang) .'/'. $item->icon2 ?>" class="full-contain" loading="lazy" alt="">
                                                </div>
                                                <div class="image h-50 md:h-40 sm:h-30 w-50 md:w-40 sm:w-30 overflow-hidden translate-z-0 absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 opacity-0 duration-450 group-hover/li:opacity-100 group-[&.is-active]/item:opacity-100 lg:group-hover/li:opacity-0">
                                                    <img src="<?= env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'product_images_folder'], $item->lang) .'/'. $item->icon1 ?>" class="full-contain" loading="lazy" alt="">
                                                </div>
                                            </div>
                                            <div class="text-field mt-20">
                                                <p class="text text-16 leading-tight text-[#111111] font-light text-center duration-450 group-[&.is-active]/item:text-white"><?= $item->title ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- RIGHT / LEFT IMAGE -->
        <div class="container px-0 max-w-full absolute left-0 top-0 w-full h-full background-image-field pointer-events-none" dir="ltr">
            <div class="background-filter absolute left-0 top-0 w-full h-full z-20">
                <div class="gradient bg-[#F0F8F3] absolute top-0 left-0 w-full h-full z-2 translate-z-0"></div>
            </div>
            <div class="wrapper h-full relative z-30">
                <div class="image-boxes flex justify-between h-full">
                    <div class="image h-full overflow-hidden translate-z-0 relative left-[-250px] -translate-x-0 sm:translate-x-0 w-full left-image sm:left-0">
                        <div class="mask-image absolute top-0 right-[-5px] sm:right-0 w-full h-full z-20">
                            <img src="../assets/image/static/using-area-mask-1.png" class="w-full h-full object-cover object-right" loading="lazy" alt="">
                        </div>
                        <!-- BURADAKİ RESİM ALANI OTOMATİK DOLUYOR -->
                        <img src="" class="left-img full-cover duration-450 [&.is-active]:opacity-0 [&.is-active]:invisible [&.is-active]:translate-y-10" loading="lazy" alt="">
                    </div>
                    <div class="image h-full overflow-hidden translate-z-0 relative right-[-250px] translate-x-0 sm:translate-x-0 w-full right-image sm:right-0">
                        <div class="mask-image absolute top-0 left-[-5px] sm:left-0 w-full h-full z-20">
                            <img src="../assets/image/static/using-area-mask-2.png" class="w-full h-full object-cover object-left" loading="lazy" alt="">
                        </div>
                        <!-- BURADAKİ RESİM ALANI OTOMATİK DOLUYOR -->
                        <img src="" class="right-img full-cover duration-450 [&.is-active]:opacity-0 [&.is-active]:invisible [&.is-active]:translate-y-10" loading="lazy" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HOMEPAGE | SERVICES -->
    <section class="homepage-services-section py-120 xl:py-80 lg:py-60 md:py-45 sm:py-30 relative">
        <!-- GRADIENT -->
        <div class="container absolute left-1/2 top-0 -translate-x-1/2 max-w-[1750px] px-[0] w-full h-full pointer-events-none">
            <div class="gradient bg-gradient-to-b from-[#F1F1F1]/0 via-[#F1F1F1] to-[#F1F1F1] absolute top-0 left-1/2 -translate-x-1/2 w-[calc(100%)] h-full z-2 translate-z-0 rounded-[30px] pointer-events-none md:rounded-none"></div>
        </div>
        <!-- CONTENT -->
        <div class="container max-w-[1500px] relative z-20 h-full">
            <div class="wrapper main-wrapper grid grid-cols-[minmax(0,5fr)_minmax(0,1fr)_minmax(0,6fr)] gap-[30px] xl:grid-cols-2 h-full md:grid-cols-1">
                <div class="hpua-list-field">
                    <div class="dynamic-sticky">
                        <!-- TITILE -->
                        <div class="title-field block z-10 relative space-y-[30px] md:space-y-20 sm:space-y-15 mb-30 sm:mb-20">
                            <p class="page-title text-[#959595] text-20 sm:text-18 xs:text-16 font-light leading-tight relative tracking-[0.4em]"><?= getStaticText(11) ?></p>
                        </div>
                        <!-- OFFICE LIST -->
                        <ul class="[&_.hpua-box:last-child_.split]:hidden [&_.hpua-box:has(+.hoverable)_.split]:opacity-0 flex flex-col gap-[60px] xl:gap-[50px] lg:gap-[40px] md:gap-[30px] sm:gap-[25px]">
                            <?php foreach ($services as $key => $item) : ?>
                                <!-- TAVSİYE EDİLEN: 5 ADET -->
                                <div class="hpua-box item group/item relative cursor-pointer" data-id="<?= $key + 1 ?>">
                                    <div class="top-field">
                                        <p class="title text-[#666666] text-40 lg:text-36 md:text-32 sm:text-24 xs:text-20 font-light leading-tight duration-450 group-[&.is-active]/item:text-main-500 group-hover/item:text-main-500 group-[&.is-active]/item:font-semibold"><?= $item->title ?></p>
                                    </div>
                                    <div class="bottom-field h-0 duration-450 overflow-hidden">
                                        <div class="informations mt-20 sm:mt-15 pb-20">
                                            <div class="text-editor !max-w-full editor-p:text-18 editor-li:text-18 sm:editor-p:text-16 sm:editor-li:text-16 xs:editor-p:text-14 xs:editor-li:text-14 editor-p:text-[#111111]/65">
                                                <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                                                <p style="font-weight: 300;"><?= $item->summary ?></p>
                                            </div>
                                            <div class="image-field relative translate-z-0 h-full rounded-[20px] overflow-hidden hidden sm:flex sm:mt-20">
                                                <a href="<?= env('HTTP_DOMAIN') . '/' . getUrl('services_url') .'/'. $item->seo_url ?>" class="image flex w-full group/image group/popup relative h-full xs:h-250 sm:h-300 md:h-350 overflow-hidden cursor-pointer translate-z-0 duration-350 hover:scale-105" href="../assets/image/other/image-<?= $key + 1 ?>.jpg">
                                                    <img src="<?= env('HTTP_DOMAIN').'/'. getFolder(['uploads_folder','service_images_folder'], $item->lang).'/'.$item->image_2 ?>" class="full-cover duration-450" loading="lazy" alt="" data-swiper-parallax="50%">
                                                </a>
                                            </div>
                                            <div class="button-field mt-30 sm:mt-20 sm:hidden">
                                                <a href="<?= env('HTTP_DOMAIN') . '/' . getUrl('services_url') .'/'. $item->seo_url ?>" class="button group/button min-w-[200px] w-fit h-[50px] flex justify-center items-center px-[30px] rounded-full bg-main-500 relative gap-15 duration-450 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-600 hover:before:left-0 before:duration-450">
                                                    <div class="text text-16 flex items-center text-white relative z-10 leading-tight duration-450 group-hover/button:text-white"><?= getStaticText(10) ?></div>
                                                    <div class="icon-arrow-right text-[16px] height-[16px] leading-none flex items-center text-white relative z-10 duration-450 group-hover/button:text-white group-hover/button:translate-x-[5px] rtl:-scale-x-100 rtl:group-hover/button:translate-x-[-5px]"></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <!-- WEB IMAGE IMAGE -->
                <div class="map-field col-start-3 xl:col-start-2 md:col-start-1 h-full xs:h-250 sm:h-300 md:h-350 sm:hidden">
                    <div class="hpua-map-warpper relative duration-450 w-full h-full">

                        <?php foreach ($services as $key => $item) : ?>
                            <div class="hpua-map absolute left-0 w-full top-0 h-full group/dot opacity-0 invisible duration-450 translate-y-10 [&.is-active]:opacity-100 [&.is-active]:visible [&.is-active]:translate-y-0 [&.is-active]:delay-450" data-id="<?= $key + 1 ?>">
                                <div class="carousel-field relative h-full">
                                    <div class="content relative h-full">
                                        <div class="image-field relative translate-z-0 h-full rounded-[20px] overflow-hidden">
                                            <a href="<?= env('HTTP_DOMAIN') . '/' . getUrl('services_url') .'/'. $item->seo_url ?>" class="image flex w-full group/image group/popup relative h-full xs:h-250 sm:h-300 md:h-350 overflow-hidden cursor-pointer translate-z-0 duration-350 hover:scale-105" href="../assets/image/other/image-<?= $key + 1 ?>.jpg">
                                                <img src="<?= env('HTTP_DOMAIN').'/'. getFolder(['uploads_folder','service_images_folder'], $item->lang).'/'.$item->image_2 ?>" class="full-cover duration-450" loading="lazy" alt="" data-swiper-parallax="50%">
                                            </a>
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

    <!-- HOMEPAGE | REFERENCES -->
    <section class="references-section pt-120 pb-60 2xl:pt-100 xl:pt-80 lg:py-60 md:py-45 sm:py-30">
        <div class="container max-w-[1500px]">
            <div class="wrapper">
                <div class="title-field product-title-field space-y-[40px] md:space-y-30 sm:space-y-20 mb-60 2xl:mb-80 xl:mb-60 lg:mb-40 md:mb-30 sm:mb-20 srb-short-all ">
                    <p class="title text-[#959595] text-20 sm:text-18 xs:text-16 font-light leading-tight relative tracking-[0.4em] text-center"><?= getStaticText(12) ?></p>
                </div>
                <div class="carousel-field relative">
                    <div class="reference-carousel swiper">
                        <div class="swiper-wrapper">
                            <?php for ($i = 1; $i <= 10; $i++) : ?>
                                <div class="swiper-slide group/slide">
                                    <div class="content relative">
                                        <div class="image-field relative translate-z-0">
                                            <a href="javascript:;" class="image flex w-full group/image h-100 overflow-hidden translate-z-0 items-center justify-center">
                                                <!-- SİYAH BEYAZ İPTAL EDİLMEK İSTENİYORSA, grayscale group-hover/image:grayscale-0 KALDIRILIR -->
                                                <img src="../assets/image/reference/reference-<?= $i ?>.png" class="full-contain max-h-[50px] duration-450 grayscale group-hover/image:grayscale-0 group-hover/image:-translate-y-5" loading="lazy" alt="">
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

    <!-- HOMEPAGE | PROJECTS -->
    <section class="homepage-projects-section py-120 xl:py-80 lg:py-60 md:py-45 sm:pt-30 sm:pb-0 overflow-hidden relative">
        <div class="background-logo absolute left-0 top-1/2 -translate-x-1/4 -translate-y-1/2 w-1/2 h-win-space rotate-[30deg] md:hidden pointer-events-none opacity-3">
            <!-- SABİT ve HAREKETLİ PANELDEN SEÇİLEBİLİR OLACAK -->
            <!-- SABİT -->
            <!-- <div class="image h-full overflow-hidden translate-z-0">
                <img src="../assets/image/static/background-logo.png" class="full-contain" loading="lazy" alt="">
            </div> -->
            <!-- HAREKETLİ -->
            <svg class="project-object logo-trigger" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 896.36 802.39">
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
        <div class="container max-w-[1500px]">
            <div class="wrapper grid grid-cols-[minmax(0,4fr)_minmax(0,7fr)] gap-80 2xl:gap-80 xl:gap-60 lg:gap-50 md:gap-40 sm:gap-30 md:grid-cols-1">
                <div class="title-field md:grid md:grid-cols-1 md:gap-30 md:order-2 self-center sm:gap-20 xs:gap-15">
                    <div class="carousel-controller mb-50 lg:mb-40 md:mb-0 md:order-2 flex items-center gap-[20px]">
                        <div class="carousel-navigation flex gap-20 pointer-events-none md:hidden">
                            <div class="about-service-prev pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                <div class="icon group/navigation flex items-center justify-center w-50 h-50 lg:w-40 lg:h-40 rounded-full cursor-pointer bg-[#E9E9E9] hover:bg-main-500 duration-450 rtl:rotate-180">
                                    <i class="icon-chevron-left text-[#111111] text-[8px] h-[10px] flex items-center justify-center group-hover/navigation:text-white duration-450 group-hover/navigation:translate-x-[-3px]"></i>
                                </div>
                            </div>
                            <div class="about-service-next pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                <div class="icon group/navigation flex items-center justify-center w-50 h-50 lg:w-40 lg:h-40 rounded-full cursor-pointer bg-[#E9E9E9] hover:bg-main-500 duration-450 rtl:rotate-180">
                                    <div class="icon-chevron-right text-[#111111] text-[8px] h-[10px] flex items-center justify-center group-hover/navigation:text-white duration-450 group-hover/navigation:translate-x-[3px]"></div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-navigation gap-20 pointer-events-none hidden md:flex md:!ml-0 md:!mt-0">
                            <div class="about-text-prev pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                <div class="icon group/navigation flex items-center justify-center w-50 h-50 lg:w-40 lg:h-40 rounded-full cursor-pointer bg-[#E9E9E9] hover:bg-main-500 duration-450 rtl:rotate-180">
                                    <i class="icon-chevron-left text-[#111111] text-[8px] h-[10px] flex items-center justify-center group-hover/navigation:text-white duration-450 group-hover/navigation:translate-x-[-3px]"></i>
                                </div>
                            </div>
                            <div class="about-text-next pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                <div class="icon group/navigation flex items-center justify-center w-50 h-50 lg:w-40 lg:h-40 rounded-full cursor-pointer bg-[#E9E9E9] hover:bg-main-500 duration-450 rtl:rotate-180">
                                    <div class="icon-chevron-right text-[#111111] text-[8px] h-[10px] flex items-center justify-center group-hover/navigation:text-white duration-450 group-hover/navigation:translate-x-[3px]"></div>
                                </div>
                            </div>
                        </div>
                        <a href="page-services.php" class="button group/button w-fit h-[50px] md:h-[40px] flex justify-center items-center px-[30px] rounded-full bg-main-500 relative gap-15 duration-450 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-600 hover:before:left-0 before:duration-450">
                            <div class="text text-16 flex items-center text-white relative z-10 leading-tight duration-450 group-hover/button:text-white"><?= getStaticText(13) ?></div>
                        </a>
                    </div>
                    <div class="carousel-field relative md:order-1">
                        <div class="about-text-carousel swiper">
                            <div class="swiper-wrapper">

                                <?php foreach ($projects as $key => $item) : ?>
                                    <div class="swiper-slide group/slide pointer-events-none [&.swiper-slide-active]:pointer-events-auto">
                                        <div class="content relative opacity-0 invisible duration-450 group-[&.swiper-slide-active]/slide:opacity-100 group-[&.swiper-slide-active]/slide:visible">
                                            <div class="text-field ">
                                                <div class="title-field block z-10 relative space-y-[20px] md:space-y-15 sm:space-y-10">
                                                    <p class="page-title text-[#959595] text-20 sm:text-18 xs:text-16 font-light leading-tight relative tracking-[0.4em]"><?= getStaticText(14) ?></p>
                                                    <a href="<?= env('HTTP_DOMAIN').'/'.getUrl('project_url') . '/' . $item->seo_url ?>" class="title text-main-500 text-40 lg:text-36 md:text-32 sm:text-24 xs:text-20 font-semibold leading-tight line-clamp-2 hover:text-main-600 hover:translate-x-[4px] duration-450 rtl:hover:translate-x-[-4px]"><?= $item['title'] ?></a>
                                                </div>
                                                <div class="editor-field mt-30 md:mt-20 sm:mt-15">
                                                    <div class="text-editor !max-w-[430px] editor-p:text-18 editor-li:text-18 sm:editor-p:text-16 sm:editor-li:text-16 xs:editor-p:text-14 xs:editor-li:text-14 line-clamp-3 md:!max-w-full">
                                                        <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                                                        <p style="font-weight: 300;">{{$item->short_description}}</p>
                                                    </div>
                                                </div>
                                                <div class="content relative rounded-[20px] overflow-hidden translate-z-0 mt-30 sm:mt-20 hidden md:block">
                                                    <div class="image-field relative translate-z-0">
                                                        <div class="gradient bg-gradient-to-t from-[#A7A7A7] to-[#FFFFFF] absolute top-0 left-0 w-full h-full z-20 translate-z-0 opacity-55 duration-450 group-[&.swiper-slide-active]/slide:opacity-0 pointer-events-none"></div>
                                                        <a href="<?= env('HTTP_DOMAIN').'/'.getUrl('project_url') . '/' . $item->seo_url ?>" class="image h-[580px] xs:h-250 sm:h-300 md:h-350 lg:h-400 xl:h-[450px] 2xl:h-[500px] overflow-hidden translate-z-0 flex w-full">
                                                            <img src="<?= env('HTTP_DOMAIN').'/'. getFolder(['uploads_folder','project_images_folder'], $item->lang).'/'.$item->image ?>" class="full-cover duration-450 group-hover/slide:scale-110" loading="lazy" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="text-field absolute z-20 bottom-20 left-20 right-20 w-[calc(100%-40px)] duration-450 group-[&.swiper-slide-active]/slide:opacity-0 translate-z-0">
                                                        <p class="title text-18 sm:text-16 xs:text-14 text-white leading-tight"><?= $item->title_1 ?></p>
                                                    </div>
                                                </div>
                                                <div class="button-field mt-30 sm:mt-20 md:hidden">
                                                    <a href="<?= env('HTTP_DOMAIN').'/'.getUrl('project_url') . '/' . $item->seo_url ?>" class="button group/button w-fit min-w-[200px] h-[50px] flex justify-center items-center px-[30px] rounded-full bg-main-500 relative gap-15 duration-450 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-600 hover:before:left-0 before:duration-450">
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
                </div>
                <div class="carousel-field relative md:order-1 md:hidden">
                    <div class="about-service-carousel swiper !overflow-visible !pointer-events-none">
                        <div class="swiper-wrapper">

                            <?php foreach ($projects as $key => $item) : ?>
                                <div class="swiper-slide group/slide !opacity-0 !invisible !duration-450 !transition-all [&.swiper-slide-active]:!opacity-100 [&.swiper-slide-active]:!visible [&.swiper-slide-next]:!opacity-100 [&.swiper-slide-next]:!visible [&.swiper-slide-next+.swiper-slide]:!opacity-100 [&.swiper-slide-next+.swiper-slide]:!visible [&.swiper-slide-prev]:!scale-75 !pointer-events-auto">
                                    <div class="content relative rounded-[20px] overflow-hidden translate-z-0">
                                        <div class="image-field relative translate-z-0">
                                            <div class="gradient bg-gradient-to-t from-[#A7A7A7] to-[#FFFFFF] absolute top-0 left-0 w-full h-full z-20 translate-z-0 opacity-55 duration-450 group-[&.swiper-slide-active]/slide:opacity-0 pointer-events-none"></div>
                                            <a href="<?= env('HTTP_DOMAIN').'/'.getUrl('project_url') . '/' . $item->seo_url ?>" class="image h-[580px] xs:h-250 sm:h-300 md:h-350 lg:h-400 xl:h-[450px] 2xl:h-[500px] overflow-hidden translate-z-0 flex w-full">
                                                <img src="<?= env('HTTP_DOMAIN').'/'. getFolder(['uploads_folder','project_images_folder'], $item->lang).'/'.$item->image ?>" class="full-cover duration-450 group-hover/slide:scale-110" loading="lazy" alt="">
                                            </a>
                                        </div>
                                        <div class="text-field absolute z-20 bottom-20 left-20 right-20 w-[calc(100%-40px)] duration-450 group-[&.swiper-slide-active]/slide:opacity-0 translate-z-0">
                                            <p class="title text-18 sm:text-16 xs:text-14 text-white leading-tight"><?= $item->title_1 ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="carousel-controller">
                        <div class="carousel-pagination mt-30 sm:mt-20">
                            <div class="homepage-service-pagination flex justify-center [&_.swiper-pagination-bullet]:opacity-100 [&_.swiper-pagination-bullet]:duration-450 [&_.swiper-pagination-bullet]:bg-main-100 [&_.swiper-pagination-bullet-active]:!bg-main-500"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HOMEPAGE | BLOG -->
    <section class="homepage-carousel-section py-120 xl:py-80 lg:py-60 md:py-45 sm:py-30 relative my-45 md:mt-30 md:mb-0">
        <!-- GRADIENT -->
        <div class="container absolute left-1/2 top-0 -translate-x-1/2 max-w-[1750px] px-[0] w-full h-full pointer-events-none">
            <div class="gradient bg-gradient-to-t from-[#F1F1F1]/0 to-[#F1F1F1] absolute top-0 left-1/2 -translate-x-1/2 w-[calc(100%)] h-full z-2 translate-z-0 rounded-[30px] pointer-events-none md:rounded-none"></div>
        </div>
        <!-- CONTAINER -->
        <div class="container max-w-[1500px]">
            <div class="wrapper relative">
                <div class="text-wrapper grid grid-cols-2 md:grid-cols-1 absolute left-0 top-0 w-[calc(100%-60px)] lg:w-[calc(100%-40px)] md:w-full md:relative mb-50 lg:mb-40 md:mb-30 gap-150 xl:gap-100 lg:gap-50 md:gap-30 z-20 rtl:ml-30 rtl:md:ml-0">
                    <div class="title-field flex justify-between gap-20 items-center xs:flex-col xs:items-center">
                        <p class="title text-[#757575] text-20 sm:text-18 xs:text-16 font-light leading-tight relative tracking-[0.4em] sm:text-center"><?= getStaticText(15) ?></p>
                        <div class="carousel-controller">
                            <div class="carousel-navigation flex gap-20 pointer-events-none">
                                <div class="other-blog-prev pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                    <div class="icon group/navigation flex items-center justify-center w-50 h-50 sm:w-40 sm:h-40 bg-[#E9E9E9] border border-solid border-[#E9E9E9] rounded-full cursor-pointer hover:bg-main-500 hover:border-main-500 duration-450 rtl:rotate-180">
                                        <i class="icon-chevron-left text-[#111111] text-[10px] h-[10px] flex items-center justify-center group-hover/navigation:text-white duration-450 group-hover/navigation:translate-x-[-3px]"></i>
                                    </div>
                                </div>
                                <div class="other-blog-next pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                    <div class="icon group/navigation flex items-center justify-center w-50 h-50 sm:w-40 sm:h-40 bg-[#E9E9E9] border border-solid border-[#E9E9E9] rounded-full cursor-pointer hover:bg-main-500 hover:border-main-500 duration-450 rtl:rotate-180">
                                        <div class="icon-chevron-right text-[#111111] text-[10px] h-[10px] flex items-center justify-center group-hover/navigation:text-white duration-450 group-hover/navigation:translate-x-[3px]"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-field relative">
                    <div class="other-blog-carousel swiper">
                        <div class="swiper-wrapper">
                            <?php foreach ($blogs as $key => $item) : ?>
                                <div class="swiper-slide group/slide [&.swiper-slide-active]:pb-120 md:[&.swiper-slide-active]:pb-0">
                                    <div class="blog-item item group/item duration-450 delay-450 group-[&.swiper-slide-active]/slide:delay-0 group-[&.swiper-slide-active]/slide:translate-y-120 md:group-[&.swiper-slide-active]/slide:translate-y-0">
                                        <div class="content pl-60 lg:pl-40 md:pl-30 sm:pl-0 relative group-[&.swiper-slide-active]/slide:pl-0">
                                            <div class="split w-1 h-full bg-[#AAAAAA] absolute left-0 top-0 duration-450 group-hover/item:bg-main-500 sm:hidden group-[&.swiper-slide-active]/slide:hidden opacity-30"></div>
                                            <div class="image-field rounded-[15px] overflow-hidden">
                                                <a href="<?= env('HTTP_DOMAIN') . '/' . getUrl('blog_url') .'/'. $item->seo_url ?>" class="image h-325 xs:h-250 sm:h-275 md:h-300 overflow-hidden translate-z-0 flex w-full hover:scale-110 duration-450">
                                                    <img src="<?= env('HTTP_DOMAIN') . '/' . getFolder(['uploads_folder', 'blog_images_folder'], $item->lang) . '/' . $item->image ?>" class="full-cover image-parallax-effect" loading="lazy" alt="">
                                                </a>
                                            </div>
                                            <div class="text-field mt-30 md:mt-20">
                                                <div class="date-field group/date opacity-50 duration-450 hover:opacity-100 flex gap-[15px] items-center">
                                                    <i class="icon icon-calendar text-[16px] h-[16px] text-[#111111] block leading-none duration-450"></i>
                                                    <p class="text text-16 leading-tight text-[#111111] group-hover/date:translate-x-5 duration-450"><?= date( 'd/m/Y', strtotime($item->created_at) ); ?></p>
                                                </div>
                                                <a href="<?= env('HTTP_DOMAIN') . '/' . getUrl('blog_url') .'/'. $item->seo_url ?>" class="title flex text-28 xl:text-26 lg:text-24 md:text-22 sm:text-20 xs:text-18 leading-tight text-[#111111] duration-450 hover:text-main-500 font-semibold mt-20 md:mt-15 group-hover/slide:text-main-500 group-hover/slide:hover:text-main-600"><?= $item->title ?></a>
                                                <div class="editor-field mt-30 md:mt-20">
                                                    <div class="text-editor !max-w-full editor-p:text-18 editor-li:text-18 sm:editor-p:text-16 sm:editor-li:text-16 xs:editor-p:text-14 xs:editor-li:text-14 editor-p:font-light editor-p:text-[#111111] editor-p:hidden [&_*:first-child]:line-clamp-2 [&_*]:!mb-0">
                                                        <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                                                        {{$item->short_description }}
                                                    </div>
                                                </div>
                                                <div class="button-field mt-30 md:mt-20 sm:hidden">
                                                    <a href="<?= env('HTTP_DOMAIN') . '/' . getUrl('blog_url') .'/'. $item->seo_url ?>" class="button group/button w-fit min-w-[200px] h-[50px] flex justify-center items-center px-[30px] rounded-full bg-transparent relative gap-[15px] duration-450 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-600 before:duration-450  hover:before:left-0 hover:shadow-[inset_0_0_0_1px_var(--main-600)] shadow-[inset_0_0_0_1px_rgba(17,17,17,0.15)] group-hover/slide:shadow-[inset_0_0_0_1px_var(--main-500)]">
                                                        <div class="text text-[15.18px] flex items-center text-[#111111] group-hover/slide:text-main-500 group-hover/slide:group-hover/button:text-white relative z-10 leading-tight duration-450 group-hover/button:text-white"><?= getStaticText(10) ?></div>
                                                        <div class="icon-arrow-right text-[16px] height-[16px] leading-none flex items-center text-[#111111] group-hover/slide:text-main-500 group-hover/slide:group-hover/button:text-white relative z-10 duration-450 group-hover/button:text-white group-hover/button:translate-x-[5px] rtl:-scale-x-100 rtl:group-hover/button:translate-x-[-5px]"></div>
                                                    </a>
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
        </div>
    </section>
</main>

@endsection

@section('scripts')

<script>
    let stretchSection = document.querySelector('.stretch-section');
    let stretchWrappar = document.querySelector('.stretch-wrapper');
    let hpStretchtoRight = document.querySelector('.hp-stretch-to-right');
    let HPremainWidth

    function stretchSectionHeight() {
        HPremainWidth = (stretchSection.offsetWidth - stretchWrappar.offsetWidth) / 2;
        hpStretchtoRight.style.width = 'calc(100% + ' + HPremainWidth + 'px + 150px)'
    }
    if (window.innerWidth > 1024) {
        stretchSectionHeight()
    }
</script>

@endsection