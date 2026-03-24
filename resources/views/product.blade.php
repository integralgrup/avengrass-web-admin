@extends('layouts.main')

@section('content')
<?php 
$pageTitle = $product->title;
$breadcrumbTitle = $product->title;
?>
<?php $code = \App\Models\Code::where('lang', app()->getLocale())->first(); ?>

<main class="main-field header-space">
    <!-- DETAIL -->
    <section class="sport-grass-detail-section pt-30 md:pt-0 relative">
        <div class="background-with-gradient sport-grass-bg-gradient absolute left-0 top-0 w-full pointer-events-none overflow-hidden -mt-130 bg-red-500">
            <?php $backgroundOpacity = 'opacity-3' ?>
            <!-- opacity DEĞERİ PANELDEN SEÇİLEBİLİR OLMALI -->
            <div class="background-logo absolute left-0 top-1/2 -translate-x-1/4 -translate-y-1/2 w-1/2 h-win-space rotate-[30deg] md:hidden z-20 overflow-hidden <?= $backgroundOpacity ?>">
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
            <div class="gradient bg-[#F3F9F5] absolute top-0 left-0 w-full h-full z-2 translate-z-0 md:bg-white"></div>
        </div>
        <div class="full-container">
            <div class="container max-w-[1500px] relative z-20">
                <div class="wrapper grid grid-cols-[minmax(0,5fr)_minmax(0,1fr)_minmax(0,6fr)] gap-30 xl:grid-cols-2 md:grid-cols-1">
                    <div class="sport-grass-text-field md:order-2">
                        <div class="top-field">
                            <div class="inner-breadcrumb">
                                <ul class="navigation flex flex-wrap items-center justify-start gap-[10px] sm:hidden [&_li:last-child]:hidden">
                                    <li>
                                        <a href="index.php" class="flex group">
                                            <p class="text text-[#B1B1B1] text-18 md:text-16 font-light group-hover:text-main-500 duration-450 leading-tight">Home</p>
                                        </a>
                                    </li>
                                    <li class="split relative flex items-center h-[12px]">
                                        <p class="text text-[#B1B1B1] text-18 md:text-16 font-light duration-450 leading-tight">/</p>
                                    </li>
                                    <li>
                                        <a href="page-sport-grass.php" class="flex group">
                                            <p class="text text-[#B1B1B1] text-18 md:text-16 font-light group-hover:text-main-500 duration-450 leading-tight">{{$product->category->title}}</p>
                                        </a>
                                    </li>
                                    <li class="split relative flex items-center h-[12px]">
                                        <p class="text text-[#B1B1B1] text-18 md:text-16 font-light duration-450 leading-tight">/</p>
                                    </li>
                                    <li>
                                        <a href="page-sport-grass.php" class="flex group">
                                            <p class="text text-[#B1B1B1] text-18 md:text-16 font-light group-hover:text-main-500 duration-450 leading-tight">{{$product->title}}</p>
                                        </a>
                                    </li>
                                    <li class="split relative flex items-center h-[12px]">
                                        <p class="text text-[#B1B1B1] text-18 md:text-16 font-light duration-450 leading-tight">/</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="editor-field mt-40 md:mt-30 sm:mt-20">
                                <h3 class="page-title text-main-500 text-36 lg:text-36 md:text-32 sm:text-24 xs:text-20 font-semibold leading-tight mb-40 md:mb-30 sm:mb-20"> {{$product->title}}</h3>
                                <div class="text-editor !max-w-full editor-p:text-18 editor-li:text-18 sm:editor-p:text-16 sm:editor-li:text-16 xs:editor-p:text-14 xs:editor-li:text-14">
                                    <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                                    <p style="font-weight: 300;">{{strip_tags($product->description)}}</p>
                                </div>
                            </div>
                            <div class="button-field mt-40 md:mt-30 sm:mt-20 flex flex-wrap gap-[15px] sm:flex-col">
                                <a href="#popup-contact" data-fancybox class="button group/button w-fit min-w-[200px] h-[50px] flex justify-center items-center px-[30px] rounded-full bg-main-500 relative gap-15 duration-450 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-600 hover:before:left-0 before:duration-450">
                                    <span class="text text-16 flex items-center text-white relative z-10 leading-tight duration-450 group-hover/button:text-white">Get Offer</span>
                                    <i class="icon-arrow-right text-[16px] height-[16px] leading-none flex items-center text-white relative z-10 duration-450 group-hover/button:text-white group-hover/button:translate-x-[5px] rtl:-scale-x-100 rtl:group-hover/button:translate-x-[-5px]"></i>
                                </a>
                                <a href="<?= env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'product_images_folder'], $product->lang) .'/'. $product['pdf_file'] ?>" data-fancybox class="button group/button w-fit min-w-[200px] h-[50px] flex justify-center items-center px-[30px] rounded-full bg-transparent relative gap-15 duration-450 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-600 hover:before:left-0 before:duration-450 border border-solid border-main-500 hover:border-main-600">
                                    <i class="icon-catalog text-[20px] height-[20px] leading-none flex items-center text-main-500 relative z-10 duration-450 group-hover/button:text-white group-hover/button:-translate-x-[5px]"></i>
                                    <span class="text text-16 flex items-center text-main-500 relative z-10 leading-tight duration-450 group-hover/button:text-white">Catalog</span>
                                </a>
                                <!-- EĞER KATALOĞUN SAYFA İÇİNDE AÇILMASI İSTENMİYOR, TIKLAYINCA İNDİRMESİ İSTENİYORSA, AŞAĞIDAKİ YAPI KULLANILIR -->
                                <!-- <a href="../assets/file/sample.pdf" download class="button group/button w-fit min-w-[200px] h-[50px] flex justify-center items-center px-[30px] rounded-full bg-transparent relative gap-15 duration-450 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-600 hover:before:left-0 before:duration-450 border border-solid border-main-500 hover:border-main-600">
                                    <i class="icon-catalog text-[20px] height-[20px] leading-none flex items-center text-main-500 relative z-10 duration-450 group-hover/button:text-white group-hover/button:-translate-x-[5px]"></i>
                                    <span class="text text-16 flex items-center text-main-500 relative z-10 leading-tight duration-450 group-hover/button:text-white">Catalog</span>
                                </a> -->
                            </div>
                        </div>
                        <div class="other-info-icons mt-120 xl:mt-50 lg:mt-40 md:mt-30 sm:mt-20 relative group/inner-wrapper">
                            <div class="icon-field relative pb-60 rounded-15 overflow-hidden">
                                

                                <div class="inner-wrapper relative">
                                    <div class="list-wrapper grid grid-cols-3 gap-60 xl:gap-50 lg:gap-40 md:gap-30 relative z-20 [&_.item:nth-child(3n+3)_.split]:hidden srb-short-all xs:grid-cols-2 pt-[10px]">
                                        <?php foreach ($product->features as $key => $item) : ?>
                                            <div class="item group/item relative duration-450 hover:-translate-y-4">
                                                <div class="image h-[60px] xs:h-[40px] sm:h-[50px] w-[60px] xs:w-[40px] sm:w-[50px] overflow-hidden translate-z-0 mx-auto">
                                                    <img src="<?= env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'product_images_folder'], $product->lang) .'/'. $item['image'] ?>" class="full-contain" loading="lazy" alt="">
                                                </div>
                                                <div class="text-field mt-20 md:mt-15 xs:mt-10">
                                                    <p class="text text-[16px] md:text-[14px] text-[#000000] leading-tight font-light text-center duration-450 group-hover/item:text-main-500"><?= $item['title'] ?></p>
                                                </div>
                                                <div class="split w-1 h-full bg-[#000000] opacity-8 absolute top-0 -right-30 xl:-right-25 lg:-right-20 md:-right-15 duration-450 group-hover/item:translate-y-4 xs:hidden rtl:right-auto rtl:left-[-30px] xl:rtl:-left-25 lg:rtl:-left-20 md:rtl:-left-15 xl:rtl:-right-auto lg:rtl:-right-auto md:rtl:-right-auto"></div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>

                            <!-- SHOW MORE BUTONU 6 ADETTEN FAZLA (7 ADET VE ÜZERİ) İÇERİK VARSA GÖRÜNECEK ŞEKİLDE AYARLANDI. -->
                            <?php if (count($product->features) > 6) : ?>
                                <div class="show-more-button group/show-check absolute bottom-0 left-1/2 -translate-x-1/2 z-20 w-full
                                duration-450 opacity-0 invisible group-[&.show-button]/inner-wrapper:opacity-100 group-[&.show-button]/inner-wrapper:visible
                                group-[&.less-check]/inner-wrapper:opacity-100 group-[&.less-check]/inner-wrapper:visible" data-show-more="Show More" data-show-less="Show Less">
                                    <div class="gradient bg-gradient-to-b from-[#FFFFFF]/0 via-[#FFFFFF] to-[#FFFFFF] absolute bottom-0 left-0 w-full h-[calc(100%+100px)] z-2 translate-z-0 group-[&.show-less]/show-check:opacity-0"></div>
                                    <div class="show-more-buttonn pb-10 w-fit mx-auto relative z-20 scrollable-selector group-[&.show-less]/show-check:bottom-[-15px]" data-scrollable-section=".other-info-icons">
                                        <button class="button show-more-buttonnn group/button w-fit min-w-[200px] h-[50px] flex justify-center items-center px-[30px] rounded-full bg-white relative gap-30 duration-450 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-600 hover:before:left-0 before:duration-450 border border-solid border-[#111111]/20">
                                            <span class="text inner-text text-16 flex items-center text-[#111111] relative z-10 leading-tight duration-450 group-hover/button:text-white whitespace-nowrap">Show More</span>
                                            <i class="icon-chevron-bottom text-[16px] height-[16px] leading-none flex items-center text-[#111111] relative z-10 duration-450 group-hover/button:text-white group-hover/button:translate-y-[2px] group-[&.show-less]/show-check:group-hover/button:translate-y-[-2px] group-[&.show-less]/show-check:rotate-180 rtl:-scale-x-100"></i>
                                        </button>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="carousel-field col-start-3 xl:col-start-2 md:col-start-1 md:order-1 w-[calc(100%+110px)] 2xl:w-full">
                        <div class="dynamic-sticky">
                            <div class="carousel-field relative overflow-hidden h-full h-win-sport-grass max-h-[860px] 2xl:!max-h-[750px] xl:!max-h-[700px] lg:!max-h-[650px] md:!max-h-[350px] sm:!max-h-[300px] xs:!max-h-[250px]">
                                <!-- BU SLIDER ALANINA TASARIMDAN DOLAYI EN FAZLA 5 ADET İÇERİK EKLENEBİLİR. -->
                                <!-- 5 ADETTEN FAZLA (6, 7, 8 ve daha fazlası) İÇERİK EKLEMESİ YAPILAMAZ. -->
                                <!-- ALANIN DÜZGÜN ÇALIŞABİLMESİ İÇİN, 5 ADET İÇERİK EKLENMESİ TAVSİYE EDİLİR. -->
                                <div class="single-sport-grass-carousel swiper rounded-30 h-full">
                                    <div class="swiper-wrapper">
                                        <!-- VİMEO ÖRNEĞİ -->
                                        
                                        <!-- .mp4 VİDEO ÖRNEĞİ -->
                                         @if($product->video_file)
                                        <div class="swiper-slide group/slide" data-image="../assets/image/other/image-2.jpg" data-id="2" data-type="video">
                                            <div class="content relative h-full">
                                                <div class="image-field relative translate-z-0 h-full">
                                                    <div class="image group/image group/popup relative h-full xs:!h-250 sm:!h-300 md:!h-350 overflow-hidden cursor-pointer translate-z-0" href="{{env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'video_folder'], $product->lang) .'/'. $product->video_file}}" data-fancybox="carouselGallery" data-caption="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque architecto facere repudiandae exercitationem culpa, natus fugiat ab iure alias commodi, corrupti quod adipisci. Eligendi amet veritatis ipsam debitis neque reiciendis!">
                                                        <video autoplay loop muted playsinline class="full-cover image-parallax-effect-breadcrumb duration-450 group-hover/image:scale-110" src="{{env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'video_folder'], $product->lang) .'/'. $product->video_file}}"></video>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <!-- RESİM ÖRNEĞİ -->
                                        <?php foreach ($product->images as $i => $image) : ?>
                                            <div class="swiper-slide group/slide" data-image="{{env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'product_images_folder'], $product->lang) .'/'. $image->image}}" data-id="<?= $i ?>" data-type="image">
                                                <div class="content relative h-full">
                                                    <div class="image-field relative translate-z-0 h-full">
                                                        <div class="image group/image group/popup relative h-full xs:!h-250 sm:!h-300 md:!h-350 overflow-hidden cursor-pointer translate-z-0" href="{{env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'product_images_folder'], $product->lang) .'/'. $image->image}}" data-fancybox="carouselGallery" data-caption="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque architecto facere repudiandae exercitationem culpa, natus fugiat ab iure alias commodi, corrupti quod adipisci. Eligendi amet veritatis ipsam debitis neque reiciendis!">
                                                            <img src="{{env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'product_images_folder'], $product->lang) .'/'. $image->image}}" class="full-cover duration-450 group-hover/image:scale-110">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <div class="carousel-controller absolute left-1/2 -translate-x-1/2 bottom-0 translate-y-0 z-20">
                                    <div class="scroll-field flex justify-center">
                                        <div class="static-images absolute left-0 top-0 w-full h-full pointer-events-none">
                                            <div class="image overflow-hidden translate-z-0 h-15 w-20 absolute right-[-18px] bottom-[-6px]">
                                                <!-- BU RESİM SABİT, DEĞİŞMEYECEK -->
                                                <img src="../assets/image/static/breadcrumb-scroll-right.png" class="full-contain" loading="lazy" alt="">
                                            </div>
                                            <div class="image overflow-hidden translate-z-0 h-15 w-20 absolute left-[-18px] bottom-[-6px]">
                                                <!-- BU RESİM SABİT, DEĞİŞMEYECEK -->
                                                <img src="../assets/image/static/breadcrumb-scroll-left.png" class="full-contain" loading="lazy" alt="">
                                            </div>
                                        </div>
                                        <div class="carousel-controller-field group/scroll w-200 h-[calc(200px/2)] rounded-t-full bg-white sm:w-150 sm:h-[calc(150px/2)]">
                                            <div class="carousel-navigation flex gap-[30px] pointer-events-none absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 mt-[15px] sm:mt-[7px]" dir="ltr">
                                                <div class="single-sport-grass-prev relative pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                                    <div class="icon group/navigation flex flex-col items-center justify-center w-30 h-30 cursor-pointer hover:bg-white duration-450 space-y-[5px]">
                                                        <i class="icon-arrow-left text-[#111] text-[12px] h-[8px] flex items-center justify-center group-hover/navigation:text-main-400 duration-450 group-hover/navigation:translate-x-[-3px]"></i>
                                                        <p class="text text-12 text-[#111] leading-tight font-light duration-450 group-hover/navigation:text-main-500">Back</p>
                                                    </div>
                                                    <div class="split w-1 h-full bg-[#111] absolute right-[-15px] top-0 opacity-20"></div>
                                                </div>
                                                <div class="single-sport-grass-next relative pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                                    <div class="icon group/navigation flex flex-col items-center justify-center w-30 h-30 cursor-pointer hover:bg-white duration-450 space-y-[5px]">
                                                        <div class="icon-arrow-right text-[#111] text-[12px] h-[8px] flex items-center justify-center group-hover/navigation:text-main-400 duration-450 group-hover/navigation:translate-x-[3px]"></div>
                                                        <p class="text text-12 text-[#111] leading-tight font-light duration-450 group-hover/navigation:text-main-500">Next</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-pagination flex justify-center z-20 absolute top-0 w-full h-full pointer-events-none xs:hidden rtl:[transform:scaleX(-1)]">
                                                <svg class="w-[calc(100%)] h-full scale-x-[0.87]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 206.87 77.3">
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
                                <div class="thumbnail-prev-field group/thumbnail absolute left-[20px] bottom-[20px] rounded-[15px] bg-white p-[1px] md:p-[1px] z-20 cursor-pointer duration-450 [&.is-hide]:opacity-0 [&.is-hide]:invisible sm:hidden rtl:left-auto rtl:right-[20px]" data-prev-id="1">
                                    <div class="image h-[100px] w-[100px] md:h-[75px] md:w-[75px] overflow-hidden translate-z-0 rounded-[15px] group/image">
                                        <img src="../assets/image/other/image-1.jpg" class="full-cover duration-450 group-hover/image:scale-110 max-w-[100px] max-h-[100px] rounded-[10px]" loading="lazy" alt="">
                                        <!-- VIDEO ICON -->
                                        <div class="video-icon absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-white rounded-full flex items-center justify-center w-[24px] h-[24px] opacity-0 invisible group-[&.is-video]/thumbnail:opacity-100 group-[&.is-video]/thumbnail:visible">
                                            <i class="icon icon-play text-[10px] h-[10px] text-black block leading-none duration-450"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="thumbnail-next-field group/thumbnail absolute right-[20px] bottom-[20px] rounded-[15px] bg-white p-[1px] md:p-[1px] z-20 cursor-pointer duration-450 [&.is-hide]:opacity-0 [&.is-hide]:invisible sm:hidden rtl:right-auto rtl:left-[20px]" data-next-id="3">
                                    <div class="image h-[100px] w-[100px] md:h-[75px] md:w-[75px] overflow-hidden translate-z-0 rounded-[15px] group/image">
                                        <img src="../assets/image/other/image-1.jpg" class="full-cover duration-450 group-hover/image:scale-110 max-w-[100px] max-h-[100px] rounded-[10px]" loading="lazy" alt="">
                                    </div>
                                    <!-- VIDEO ICON -->
                                    <div class="video-icon absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-white rounded-full flex items-center justify-center w-[24px] h-[24px] opacity-0 invisible group-[&.is-video]/thumbnail:opacity-100 group-[&.is-video]/thumbnail:visible">
                                        <i class="icon icon-play text-[10px] h-[10px] text-black block leading-none duration-450"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCT DETAIL TAB FIELD -->
    <section class="product-tab-section my-120 xl:my-80 lg:my-60 md:my-45 sm:my-30 relative z-20">
        <div class="container absolute left-1/2 top-0 -translate-x-1/2 max-w-[1750px] px-0 w-full h-full pointer-events-none">
            <div class="gradient bg-gradient-to-t from-[#F3F9F5] via-[#F3F9F5] to-[#F3F9F5] absolute top-0 left-1/2 -translate-x-1/2 2xl:w-[calc(100%-60px)] w-[calc(100%)] md:w-full h-full z-2 translate-z-0 rounded-[30px] pointer-events-none md:rounded-none"></div>
        </div>
        <div class="container max-w-[1600px] relative z-20">
            <div class="wrapper 2xl:px-[30px] md:px-0">
                <div class="tab-selection-field mb-15 md:scrollbar md:scrollbar-h-[4px] md:scrollbar-track-rounded-[5px] md:scrollbar-thumb-rounded-[5px] md:scrollbar-thumb-main-500 md:scrollbar-track-main-500/10 md:overflow-x-auto md:overflow-y-hidden md:relative hand-selector">
                    <ul class="tab-selection-ul flex justify-center items-center gap-[15px] w-fit mx-auto relative [&_li.split:last-child]:hidden md:w-full md:justify-start md:pb-[10px] md:gap-20 sm:gap-20 xs:gap-10 sm:[&_li.split]:hidden">
                        <div class="hand-field absolute top-[calc(50%-15px)] right-[30px] animate-slideX duration-450 [&.is-scroll]:opacity-0 hidden md:block z-20">
                            <div class="image h-[35px] w-[35px] overflow-hidden translate-z-0">
                                <img src="../assets/image/static/hand.png" class="full-contain" loading="lazy" alt="">
                            </div>
                        </div>
                        <?php $list = [
                            ['title' => 'Features',],
                            ['title' => 'Technical Information',],
                            ['title' => 'Using Areas',],
                            ['title' => 'Frequently Asked Questions',],
                            ['title' => 'Get in Touch',],
                        ]; ?>

                        <?php foreach ($list as $key => $item) : ?>
                            <li class="cursor-pointer tab-select group/tab px-40 pb-30 pt-40 md:px-30 [&.is-active]:bg-main-500 rounded-b-[20px] duration-450 relative h-full <?php if ($key == 0) : ?>!ml-0 is-active<?php endif; ?>" data-id="<?= $key + 1 ?>">
                                <p class="text text-18 sm:text-16 leading-tight text-[#111111]/75 duration-450 group-[&.is-active]/tab:text-white md:whitespace-nowrap text-center"><?= $item['title'] ?></p>

                                <div class="tab-selector absolute left-1/2 -translate-x-1/2 top-[calc(100%+14px)] z-30 duration-450 opacity-0 invisible translate-y-10 group-[&.is-active]/tab:opacity-100 group-[&.is-active]/tab:visible group-[&.is-active]/tab:translate-y-0 group-[&.is-active]/tab:delay-450">
                                    <div class="image h-[11px] w-[200px] overflow-hidden translate-z-0">
                                        <img src="../assets/image/static/product-tab-selector.png" class="full-contain" loading="lazy" alt="">
                                    </div>
                                </div>
                            </li>
                            <li class="split w-1 h-25 bg-[#111111] opacity-10"></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="tab-content-field relative pb-50">
                    <div class="tab-content-wrapper duration-450 h-0 relative z-20 bg-[#F3F9F5] overflow-hidden">
                        <!-- TAB CONTENT 1 | FEATURES -->
                        <div class="tab-content absolute left-0 top-0 w-full h-full opacity-0 invisible duration-450 translate-y-10 pointer-events-none [&.is-active]:pointer-events-auto [&.is-active]:opacity-100 [&.is-active]:visible [&.is-active]:translate-y-0 [&.is-active]:delay-450 p-[1px]" data-id="1">
                            <div class="gradient absolute left-0 top-0 bg-gradient-to-b from-black/15 to-main-500/0 rounded-[20px] duration-450 w-full h-full"></div>
                            <div class="content bg-[#F3F9F5] relative z-10 rounded-[20px]">
                                <div class="inner-content py-100 2xl:py-80 xl:py-60 lg:py-50 md:py-40 sm:py-30 xs:py-25 space-y-[30px] sm:space-y-[20px] max-w-[1240px] mx-auto w-full xl:px-[30px]">
                                    <div class="editor-field">
                                        <div class="text-editor !max-w-full editor-p:text-18 editor-li:text-18 sm:editor-p:text-16 sm:editor-li:text-16 xs:editor-p:text-14 xs:editor-li:text-14">
                                            <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                                            {!!$product->features_description!!}
                                        </div>
                                    </div>
                                </div>
                                <div class="image-field relative sm:hidden">
                                    <div class="image h-[500px] xs:h-250 sm:h-300 md:h-350 lg:h-400 translate-z-0 relative">
                                        <!-- BU ALAN İÇİN; full-contain VE full-cover DEĞİŞİMİ PANELDEN YAPILABİLİR. -->
                                        <img src="{{env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'product_images_folder'], $product->lang) .'/'. $product->features_image }}" class="full-cover md:full-cover" loading="lazy" alt="">
                                    </div>
                                    <div class="image-dot-field absolute left-0 top-0 w-full h-full pointer-events-none z-200">
                                        <?php $list = [
                                            [
                                                'left' => '20%',
                                                'top' => '38%',
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
                                            <div class="dot-field absolute pointer-events-auto group/dot hover:z-40" style="left: <?= $item['left'] ?>; top: <?= $item['top'] ?>;">
                                                <div class="dot w-45 h-45 rounded-full flex justify-center items-center">
                                                    <div class="dot w-[48px] h-[48px] sm:w-[30px] sm:h-[30px] bg-[#9AFFB6]/50 rounded-full shrink-0 animate-anim-scale"></div>
                                                    <div class="dot w-[24px] h-[24px] sm:w-[15px] sm:h-[15px] bg-[#B4FFC9] rounded-full shrink-0 absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2"></div>
                                                </div>
                                                <div class="dot-visible-content absolute bg-white rounded-full px-30 py-5 left-1/2 -translate-x-1/2 top-[calc(100%+10px)] opacity-100 visible duration-450 min-w-[150px] translate-y-0 group-hover/dot:opacity-0 group-hover/dot:invisible group-hover/dot:translate-y-10 [box-shadow:_0px_4px_15px_0px_rgba(0,0,0,0.16)] sm:group-hover/dot:visible sm:group-hover/dot:translate-y-0 sm:opacity-0 sm:group-hover/dot:opacity-100 sm:px-[15px] sm:min-w-fit">
                                                    <p class="text text-[15px] text-[#111111] leading-tight whitespace-nowrap text-center"><?= $item['title'] ?></p>
                                                </div>
                                                <!-- BU ALAN AŞAĞI DOĞRU AÇILACAKSA: is-bottom -->
                                                <!-- BU ALAN YUKARI DOĞRU AÇILACAKSA: is-top -->
                                                <div class="dot-tooltip absolute bg-white rounded-[10px] p-[10px] left-1/2 -translate-x-1/2 min-w-[257px] shadow-default sm:hidden opacity-0 invisible pointer-events-none duration-450 translate-y-10 group-hover/dot:opacity-100 group-hover/dot:visible group-hover/dot:pointer-events-auto group-hover/dot:translate-y-0 [&.is-top]:bottom-[calc(100%+10px)] [&.is-bottom]:top-[calc(100%+10px)] <?= $item['position'] ?>">
                                                    <div class="content">
                                                        <div class="image-field">
                                                            <div class="image h-[100px] overflow-hidden translate-z-0 rounded-[10px]">
                                                                <img src="<?= $item['image'] ?>" class="full-cover" loading="lazy" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="text-field mt-15 sm:mt-10 p-[10px]">
                                                            <h5 class="text-16 leading-tight font-normal text-main-500 mb-20 md:mb-15"><?= $item['title'] ?></h5>
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
                        <!-- TAB CONTENT 2 | TECHNICAL INFORMATION -->
                        <div class="tab-content absolute left-0 top-0 w-full h-full opacity-0 invisible duration-450 translate-y-10 pointer-events-none [&.is-active]:pointer-events-auto [&.is-active]:opacity-100 [&.is-active]:visible [&.is-active]:translate-y-0 [&.is-active]:delay-450 p-[1px]" data-id="2">
                            <div class="gradient absolute left-0 top-0 bg-gradient-to-b from-black/15 to-main-500/0 rounded-[20px] duration-450 w-full h-full"></div>
                            <div class="content p-50 xl:p-40 lg:p-30 md:p-25 bg-[#F3F9F5] relative z-10 rounded-[20px] space-y-50 lg:space-y-40 md:space-y-30 sm:space-y-20">
                                <div class="table-content">
                                    <div class="table-title text-28 xl:text-26 lg:text-24 md:text-22 sm:text-20 xs:text-18 leading-tight font-semibold text-[#111111] mb-20 sm:mb-15 text-center">Technical information</div>
                                    <div class="text-editor !max-w-full editor-p:text-20 editor-li:text-20 sm:editor-p:text-16 sm:editor-li:text-16 xs:editor-p:text-14 xs:editor-li:text-14">
                                        <!-- table-style SATIRI KALDIRILIRSA, TABLO DEFAULT TASARIMINA GERİ DÖNER -->
                                        <div class="table-style [&_table_tr:nth-child(odd)]:bg-[#F0F4DD] [&_table_tr:nth-child(even)]:bg-[#F7F9EE] [&_table_tr_td]:border-[#AFB6B1] relative">
                                            {!!$product->technical_info!!}
                                        </div>
                                    </div>
                                </div>
                                <div class="button-field mt-[30px] sm:mt-[20px]">
                                    <a href="<?= env('HTTP_DOMAIN').'/'.getFolder(['uploads_folder', 'images_folder']).'/'. $product->pdf_file?>" download class="button group/button w-fit mx-auto h-[50px] flex justify-center items-center px-[30px] rounded-full bg-main-500 relative gap-30 duration-450 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-600 hover:before:left-0 before:duration-450">
                                        <div class="text text-16 flex items-center text-white relative z-10 leading-tight duration-450 group-hover/button:text-white">Download SDS</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- TAB CONTENT 3 | USING AREAS -->
                        <div class="tab-content absolute left-0 top-0 w-full h-full opacity-0 invisible duration-450 translate-y-10 pointer-events-none [&.is-active]:pointer-events-auto [&.is-active]:opacity-100 [&.is-active]:visible [&.is-active]:translate-y-0 [&.is-active]:delay-450 p-[1px]" data-id="3">
                            <div class="gradient absolute left-0 top-0 bg-gradient-to-b from-black/15 to-main-500/0 rounded-[20px] duration-450 w-full h-full"></div>
                            <div class="content p-50 xl:p-40 lg:p-30 md:p-25 bg-[#F3F9F5] relative z-10 rounded-[20px]">
                                <div class="inner-wrapper grid grid-cols-4 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-[30px]">
                                    
                                    <?php foreach ($product->gallery as $item) : ?>
                                        <div class="image-box group/image-box">
                                            <a class="image flex w-full group/image group/popup relative h-[400px] xs:h-250 sm:h-300 md:h-350 lg:h-400 overflow-hidden rounded-20 cursor-pointer translate-z-0" href="{{ env('HTTP_DOMAIN').'/'.getFolder(['uploads_folder', 'product_images_folder']).'/'. $item->image}}" data-fancybox="tabGallery" data-caption="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque architecto facere repudiandae exercitationem culpa, natus fugiat ab iure alias commodi, corrupti quod adipisci. Eligendi amet veritatis ipsam debitis neque reiciendis!">
                                                <img src="{{ env('HTTP_DOMAIN').'/'.getFolder(['uploads_folder', 'product_images_folder']).'/'. $item->image}}" class="full-cover rounded-20 duration-450 group-hover/image:scale-110" loading="lazy" alt="">
                                                <div class="gradient bg-[#000000]/50 absolute top-0 left-0 w-full h-full z-2 translate-z-0 duration-450 opacity-0 group-hover/image-box:opacity-100 flex items-center justify-center">
                                                    <div class="text-field flex flex-col items-center justify-center space-y-[20px] duration-450 translate-y-20 opacity-0 group-hover/image-box:opacity-100 group-hover/image-box:translate-y-0"></div>
                                                </div>
                                            </a>
                                            <p class="text text-18 sm:text-16 font-light text-[#111111] leading-tight pl-10 sm:pl-0 duration-450 group-hover/image-box:text-main-500 mt-10"><?= $item->title ?></p>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <!-- TAB CONTENT 4 | F.A.Q. -->
                        <div class="tab-content absolute left-0 top-0 w-full h-full opacity-0 invisible duration-450 translate-y-10 pointer-events-none [&.is-active]:pointer-events-auto [&.is-active]:opacity-100 [&.is-active]:visible [&.is-active]:translate-y-0 [&.is-active]:delay-450 p-[1px]" data-id="4">
                            <div class="gradient absolute left-0 top-0 bg-gradient-to-b from-black/15 via-[#F3F9F5] to-[#F3F9F5] rounded-[20px] duration-450 w-full h-full"></div>
                            <div class="background-with-gradient absolute left-0 bottom-0 w-full pointer-events-none overflow-hidden h-full">
                                <?php $backgroundOpacity = 'opacity-3' ?>
                                <!-- opacity DEĞERİ PANELDEN SEÇİLEBİLİR OLMALI -->
                                <div class="background-logo absolute left-0 top-1/2 -translate-x-1/4 -translate-y-1/2 w-1/2 h-full rotate-[30deg] md:hidden z-20 overflow-hidden <?= $backgroundOpacity ?>">
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
                            </div>
                            <div class="content p-50 xl:p-40 lg:p-30 md:p-25 bg-[#F3F9F5] relative z-10 rounded-[20px]">
                                <div class="faq-box-wrapper-fixable max-w-[1260px] mx-auto [&_.question-item:has(+.hoverable)_.split]:opacity-0 sm:grid sm:grid-cols-1 sm:gap-[10px]">
                                   

                                    <!-- EĞER BİRİNCİSİNİN AÇIK GELMESİ İSTENİYORSA; question-item BİRİNCİSİNE is-active CLASSI EKLENEBİLİR. -->
                                    <?php foreach ($product->faqs as $key => $item) : ?>
                                        <div class="question-item item group/item relative z-50 srb-short">
                                            <div class="content py-[30px] px-[60px] rounded-[20px] cursor-pointer duration-450 group-[&.is-active]/item:py-[60px] sm:group-[&.is-active]/item:py-[30px] group-[&.is-active]/item:bg-[#6FA52C] group-hover/item:bg-transparent sm:p-[15px] sm:rounded-[10px]">
                                                <div class="top-field">
                                                    <div class="inner-flex flex items-center justify-between gap-[30px] sm:gap-[20px]">
                                                        <p class="title text-[18px] sm:text-[16px] xs:text-[14px] text-[#111111]/65 leading-tight duration-450 group-[&.is-active]/item:text-white group-hover/item:text-[#0a6324]"><?= $item['title']; ?></p>
                                                        <div class="icon w-[40px] h-[40px] xs:w-[25px] xs:h-[25px] bg-[#E3EDE6] rounded-full flex items-center justify-center duration-450 group-[&.is-active]/item:rotate-[180deg] group-[&.is-active]/item:bg-[#FFFFFF] shrink-0">
                                                            <i class="icon icon-chevron-bottom text-[10px] h-[10px] block leading-none duration-450"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bottom-field overflow-hidden h-0 duration-450">
                                                    <div class="text-editor !max-w-full editor-p:text-16 editor-li:text-16 sm:editor-p:text-16 sm:editor-li:text-16 xs:editor-p:text-14 xs:editor-li:text-14 mt-60 xl:mt-50 lg:mt-40 md:mt-30 sm:mt-20 editor-headings:text-white editor-p:text-white editor-li:text-white editor-a:text-white">
                                                        <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                                                        <p style="font-weight: 300;"><?= $item['description']; ?></p>
                                                    </div>
                                                </div>
                                                <div class="split w-full h-1 bg-black opacity-8 absolute left-0 bottom-0 duration-450 group-[&.is-active]/item:opacity-0 group-hover/item:opacity-0"></div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <!-- TAB CONTENT 5 | GET IN TOUCH -->
                        <div class="tab-content absolute left-0 top-0 w-full h-full opacity-0 invisible duration-450 translate-y-10 pointer-events-none [&.is-active]:pointer-events-auto [&.is-active]:opacity-100 [&.is-active]:visible [&.is-active]:translate-y-0 [&.is-active]:delay-450 p-[1px]" data-id="5">
                            <div class="gradient absolute left-0 top-0 bg-gradient-to-b from-black/15 to-main-500/0 rounded-[20px] duration-450 w-full h-full"></div>
                            <div class="content p-50 xl:p-40 lg:p-30 md:p-25 bg-[#F3F9F5] relative z-10 rounded-[20px]">
                                <div class="inner-wrapper grid grid-cols-1 gap-[30px]">
                                    <div class="wrapper grid grid-cols-[minmax(0,5fr)_minmax(0,7fr)] md:grid-cols-1">
                                        <div class="image-field relative md:order-1">
                                            <div class="gradient bg-[#000000] absolute top-0 left-0 w-full h-full z-2 translate-z-0 opacity-65 rounded-l-[30px] md:rounded-l-none md:rounded-t-[30px] rtl:rounded-l-none rtl:rounded-r-[30px] md:rtl:rounded-t-[30px] md:rtl:rounded-b-none"></div>
                                            <div class="image h-full xs:h-250 sm:h-300 md:h-350 lg:h-400 overflow-hidden translate-z-0 rounded-l-[30px] md:rounded-l-none md:rounded-t-[30px] rtl:rounded-l-none rtl:rounded-r-[30px] md:rtl:rounded-t-[30px] md:rtl:rounded-b-none">
                                                <img src="../assets/image/other/image-2.jpg" class="full-cover" loading="lazy" alt="">
                                            </div>
                                            <div class="contact-information absolute left-50 right-50 bottom-50 md:left-30 md:right-30 md:bottom-30 w-[calc(100%-100px)] md:w-[calc(100%-60px)] z-20">
                                                <p class="title text-30 lg:text-28 md:text-24 sm:text-20 text-white leading-tight">Where Excellence<br>Turns Green!</p>
                                                <div class="informations mt-40 xl:mt-40 lg:mt-40 md:mt-30 sm:mt-20">
                                                    <ul class="space-y-[20px]">
                                                        <li>
                                                            <a href="javascript:;" class="group/link flex items-center relative ltr:gap-[20px]">
                                                                <i class="icon icon-phone text-[18px] h-[18px] text-[#FFFFFF] block leading-none group-hover/link:scale-110 duration-450 rtl:ml-20"></i>
                                                                <span class="text text-[18px] sm:text-[16px] text-[#FFFFFF] font-light leading-tight group-hover/link:translate-x-[4px] duration-450">+90 (212) 678 13 13</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" class="group/link flex items-center relative ltr:gap-[20px]">
                                                                <i class="icon icon-mail text-[18px] h-[18px] text-[#FFFFFF] block leading-none group-hover/link:scale-110 duration-450 rtl:ml-20"></i>
                                                                <span class="text text-[18px] sm:text-[16px] text-[#FFFFFF] font-light leading-tight group-hover/link:translate-x-[4px] duration-450">info@avengrass.com</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-content bg-white p-80 2xl:p-60 xl:p-50 lg:p-40 md:p-30 rounded-r-[30px] md:rounded-r-none md:!rounded-b-[30px] shadow-default md:order-2 rtl:rounded-r-none rtl:rounded-l-[30px] md:rtl:rounded-t-none md:rtl:rounded-b-[30px]">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OTHER POPULAR PRODUCT -->
    <section class="other-popular-product-section py-120 xl:py-80 lg:py-60 md:py-45 sm:py-30 relative overflow-hidden">
        <div class="container absolute left-1/2 top-0 -translate-x-1/2 max-w-[1750px] px-[0] w-full h-full pointer-events-none">
            <div class="gradient bg-gradient-to-t from-[#F1F1F1]/0 via-[#F1F1F1] to-[#F1F1F1] absolute top-0 left-1/2 -translate-x-1/2 w-[calc(100%)] h-full z-2 translate-z-0 rounded-[30px] pointer-events-none md:rounded-none"></div>
        </div>
        <div class="container max-w-[1500px] pt-100 xl:py-80 lg:py-60 md:py-45 sm:py-30 pb-0">
            <div class="wrapper">
                <div class="carousel-field relative">
                    <div class="title-field flex justify-between items-center gap-[20px] sm:flex-col sm:items-start mb-30 sm:mb-10 xs:items-center">
                        <div class="main-title">
                            <p class="title text-[#ADADAD] text-20 sm:text-18 xs:text-16 font-light leading-tight relative tracking-[10px] sm:tracking-[2.5px]">OTHER POPULAR PRODUCTS</p>
                        </div>
                        <div class="carousel-controller">
                            <div class="carousel-navigation flex gap-20 pointer-events-none z-20">
                                <div class="other-product-prev pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                    <div class="icon group/navigation flex items-center justify-center w-50 h-50 lg:w-40 lg:h-40 rounded-full cursor-pointer bg-[#E9E9E9] hover:bg-main-500 duration-450 rtl:rotate-180">
                                        <i class="icon-chevron-left text-[#111111] text-[8px] h-[10px] flex items-center justify-center group-hover/navigation:text-white duration-450 group-hover/navigation:translate-x-[-3px]"></i>
                                    </div>
                                </div>
                                <div class="other-product-next pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                    <div class="icon group/navigation flex items-center justify-center w-50 h-50 lg:w-40 lg:h-40 rounded-full cursor-pointer bg-[#E9E9E9] hover:bg-main-500 duration-450 rtl:rotate-180">
                                        <div class="icon-chevron-right text-[#111111] text-[8px] h-[10px] flex items-center justify-center group-hover/navigation:text-white duration-450 group-hover/navigation:translate-x-[3px]"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $list = [
                        [
                            'title' => 'Flat Decorative Grass 7-10 MM',
                            'title-link' => 'single-sport-grass.php',
                            'category' => 'FOOTBALL GRASS',
                            // BURADA EN FAZLA 4 ADET RESİM GÖZÜKEBİLİR.
                            // 4 ADETTEN DAHA FAZLA RESİM GÖSTERİLEMEZ.
                            'images' => [
                                ['image' => '../assets/image/other/sport-grass-product-1.png',],
                                ['image' => '../assets/image/other/sport-grass-product-1.png',],
                                ['image' => '../assets/image/other/sport-grass-product-1.png',],
                                ['image' => '../assets/image/other/sport-grass-product-1.png',],
                            ],
                            // BURADA EN FAZLA 12 ADET RESİM GÖZÜKEBİLİR.
                            // 12 ADETTEN DAHA FAZLA RESİM GÖSTERİLEMEZ.
                            'brands' => [
                                ['brand' => '../assets/image/other/sport-grass-brand.png',],
                            ]
                        ],
                        [
                            'title' => 'Flat Decorative Grass 7-10 MM',
                            'title-link' => 'single-sport-grass.php',
                            'category' => 'HYBRİD GRASS',
                            // BURADA EN FAZLA 4 ADET RESİM GÖZÜKEBİLİR.
                            // 4 ADETTEN DAHA FAZLA RESİM GÖSTERİLEMEZ.
                            'images' => [
                                ['image' => '../assets/image/other/sport-grass-product-1.png',],
                                ['image' => '../assets/image/other/sport-grass-product-1.png',],
                                ['image' => '../assets/image/other/sport-grass-product-1.png',],
                                ['image' => '../assets/image/other/sport-grass-product-1.png',],
                            ],
                            // BURADA EN FAZLA 12 ADET RESİM GÖZÜKEBİLİR.
                            // 12 ADETTEN DAHA FAZLA RESİM GÖSTERİLEMEZ.
                            'brands' => [
                                ['brand' => '../assets/image/other/sport-grass-brand.png',],
                            ]
                        ],
                        [
                            'title' => 'Flat Decorative Grass 7-10 MM',
                            'title-link' => 'single-sport-grass.php',
                            'category' => 'FOOTBALL GRASS',
                            // BURADA EN FAZLA 4 ADET RESİM GÖZÜKEBİLİR.
                            // 4 ADETTEN DAHA FAZLA RESİM GÖSTERİLEMEZ.
                            'images' => [
                                ['image' => '../assets/image/other/sport-grass-product-1.png',],
                                ['image' => '../assets/image/other/sport-grass-product-1.png',],
                                ['image' => '../assets/image/other/sport-grass-product-1.png',],
                                ['image' => '../assets/image/other/sport-grass-product-1.png',],
                            ],
                            // BURADA EN FAZLA 12 ADET RESİM GÖZÜKEBİLİR.
                            // 12 ADETTEN DAHA FAZLA RESİM GÖSTERİLEMEZ.
                            'brands' => [
                                ['brand' => '../assets/image/other/sport-grass-brand.png',],
                            ]
                        ],
                        [
                            'title' => 'Flat Decorative Grass 7-10 MM',
                            'title-link' => 'single-sport-grass.php',
                            'category' => 'HYBRİD GRASS',
                            // BURADA EN FAZLA 4 ADET RESİM GÖZÜKEBİLİR.
                            // 4 ADETTEN DAHA FAZLA RESİM GÖSTERİLEMEZ.
                            'images' => [
                                ['image' => '../assets/image/other/sport-grass-product-1.png',],
                                ['image' => '../assets/image/other/sport-grass-product-1.png',],
                                ['image' => '../assets/image/other/sport-grass-product-1.png',],
                                ['image' => '../assets/image/other/sport-grass-product-1.png',],
                            ],
                            // BURADA EN FAZLA 12 ADET RESİM GÖZÜKEBİLİR.
                            // 12 ADETTEN DAHA FAZLA RESİM GÖSTERİLEMEZ.
                            'brands' => [
                                ['brand' => '../assets/image/other/sport-grass-brand.png',],
                            ]
                        ],
                        [
                            'title' => 'Flat Decorative Grass 7-10 MM',
                            'title-link' => 'single-sport-grass.php',
                            'category' => 'FOOTBALL GRASS',
                            // BURADA EN FAZLA 4 ADET RESİM GÖZÜKEBİLİR.
                            // 4 ADETTEN DAHA FAZLA RESİM GÖSTERİLEMEZ.
                            'images' => [
                                ['image' => '../assets/image/other/sport-grass-product-1.png',],
                                ['image' => '../assets/image/other/sport-grass-product-1.png',],
                                ['image' => '../assets/image/other/sport-grass-product-1.png',],
                                ['image' => '../assets/image/other/sport-grass-product-1.png',],
                            ],
                            // BURADA EN FAZLA 12 ADET RESİM GÖZÜKEBİLİR.
                            // 12 ADETTEN DAHA FAZLA RESİM GÖSTERİLEMEZ.
                            'brands' => [
                                ['brand' => '../assets/image/other/sport-grass-brand.png',],
                            ]
                        ],
                        [
                            'title' => 'Flat Decorative Grass 7-10 MM',
                            'title-link' => 'single-sport-grass.php',
                            'category' => 'HYBRİD GRASS',
                            // BURADA EN FAZLA 4 ADET RESİM GÖZÜKEBİLİR.
                            // 4 ADETTEN DAHA FAZLA RESİM GÖSTERİLEMEZ.
                            'images' => [
                                ['image' => '../assets/image/other/sport-grass-product-1.png',],
                                ['image' => '../assets/image/other/sport-grass-product-1.png',],
                                ['image' => '../assets/image/other/sport-grass-product-1.png',],
                                ['image' => '../assets/image/other/sport-grass-product-1.png',],
                            ],
                            // BURADA EN FAZLA 12 ADET RESİM GÖZÜKEBİLİR.
                            // 12 ADETTEN DAHA FAZLA RESİM GÖSTERİLEMEZ.
                            'brands' => [
                                ['brand' => '../assets/image/other/sport-grass-brand.png',],
                            ]
                        ],
                    ]; ?>
                    <div class="other-product-carousel swiper">
                        <div class="swiper-wrapper">
                            <?php foreach ($list as $key => $item) : ?>
                                <div class="swiper-slide group/slide pt-[20px]">
                                    <a href="<?= $item['title-link'] ?>" class="sport-grass-item item group/item">
                                        <div class="content bg-white rounded-[20px] duration-450 group-hover/item:-translate-y-[5px] border border-solid border-[#111111]/10 group-hover/item:border-[#111111]/10 sm:group-hover/item:shadow-none sm:group-hover/item:border-[#111111]/10 group-hover/item:[box-shadow:_0px_20px_50px_0px_rgba(0,0,0,0.1)]">
                                            <div class="carousel-field relative p-[30px] md:p-[20px]">
                                                <!-- brand-image ALANI OPSİYONEL. -->
                                                <!-- BURADA EN FAZLA 12 ADEDE KADAR brand-image EKLENEBİLİR. -->
                                                <div class="brand-field absolute left-[30px] top-[30px] z-20 flex flex-wrap gap-[10px] w-[calc(100%-60px)]">
                                                    <?php foreach ($item['brands'] as $key => $brand) : ?>
                                                        <div class="group/brand image flex w-[50px] h-[30px] overflow-hidden translate-z-0 duration-450 hover:-translate-y-[3px]">
                                                            <img src="<?= $brand['brand'] ?>" class="full-contain grayscale duration-450 opacity-60 group-hover/slide:opacity-100 group-hover/slide:grayscale-0" loading="lazy" alt="">
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                                <div class="sport-grass-carousel swiper">
                                                    <div class="swiper-wrapper">
                                                        <?php foreach ($item['images'] as $key => $image) : ?>
                                                            <div class="swiper-slide group/slide" data-swiper-autoplay="-1">
                                                                <div class="content relative">
                                                                    <div class="image-field relative translate-z-0">
                                                                        <div class="image h-[235px] xs:h-200 sm:h-215 overflow-hidden translate-z-0">
                                                                            <img src="<?= $image['image'] ?>" class="full-cover" loading="lazy" alt="" data-swiper-parallax="50%">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-field pb-[50px] md:py-[20px] px-[35px] md:px-[20px] pt-0 md:pt-0 relative">
                                                <div class="text-content mr-[20px] sm:mr-0">
                                                    <p class="category flex text-16 font-light leading-tight text-[#959595] tracking-[5px] duration-450 hover:text-main-500"><?= $item['category'] ?></p>
                                                    <p class="title flex text-20 sm:text-18 text-[#111111] group-hover/slide:text-main-500 duration-450 group-hover/slide:hover:text-main-700 mt-15 md:mt-10"><?= $item['title'] ?></p>
                                                    <div class="button-field mt-30 lg:mt-20 md:mt-15 sm:mt-10 sm:hidden">
                                                        <div class="button group/button w-fit min-w-[200px] h-[50px] flex justify-center items-center px-[30px] rounded-full bg-transparent relative gap-[15px] duration-450 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-600 before:duration-450 hover:before:left-0 hover:shadow-[inset_0_0_0_1px_var(--main-600)] shadow-[inset_0_0_0_1px_rgba(17,17,17,0.15)] group-hover/slide:shadow-[inset_0_0_0_1px_var(--main-500)] group-hover/slide:bg-main-500">
                                                            <div class="text text-[15.18px] flex items-center text-[#111111] group-hover/slide:text-white group-hover/slide:group-hover/button:text-white relative z-10 leading-tight duration-450 group-hover/button:text-white">View</div>
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
                        </div>
                        <!-- OPSİYONEL -->
                        <div class="carousel-controller mt-30 sm:mt-20">
                            <div class="carousel-pagination flex justify-center z-20">
                                <div class="other-product-pagination flex justify-center [&_.swiper-pagination-bullet]:opacity-100 [&_.swiper-pagination-bullet]:duration-450 [&_.swiper-pagination-bullet]:bg-main-100 [&_.swiper-pagination-bullet-active]:!bg-main-500"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection