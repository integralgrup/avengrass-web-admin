@extends('layouts.main')

@section('content')

    <main class="main-field">
    <!-- BREADCRUMB -->
    <?php $title = 'SERVICE';
    $expo = $service->title;
    $navigation = ['Home' => env('HTTP_DOMAIN'), 'Services' => env('HTTP_DOMAIN').'/'.getUrl('services_url'), $service->title => 'javascript:;'];
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

    <!-- SINGLE SERVICE CONTENT -->
    <section class="single-service-section py-100 xl:py-80 lg:py-60 md:py-45 sm:py-30 relative rtl:overflow-hidden">
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
        <div class="container absolute left-1/2 top-0 -translate-x-1/2 max-w-[1750px] px-[0] w-full h-full pointer-events-none">
            <div class="gradient bg-gradient-to-b from-[#F1F1F1]/0 via-[#F1F1F1]/0 to-[#F1F1F1] absolute top-0 left-1/2 -translate-x-1/2 w-[calc(100%)] h-full z-2 translate-z-0 rounded-[30px] md:rounded-none"></div>
        </div>
        <div class="container max-w-[1500px] relative z-20">
            <div class="wrapper relative">
                <div class="content grid grid-cols-[minmax(0,5fr)_minmax(0,7fr)] gap-120 xl:gap-100 lg:gap-60 md:gap-40 sm:gap-30 md:grid-cols-1 relative z-2">
                    <div class="text-field">
                        <div class="main-title flex flex-col gap-10 mb-20 srb-short-all">
                            <p class="title text-[#ADADAD] text-20 sm:text-18 xs:text-16 font-light leading-tight relative tracking-[10px] sm:tracking-[2.5px]">THhe Best Avengrass</p>
                            <p class="title text-main-500 text-40 lg:text-36 md:text-32 sm:text-24 xs:text-20 font-semibold leading-tight">{{$service->title}}</p>
                        </div>
                        <div class="editor-field">
                            <div class="text-editor !max-w-full editor-p:text-18 editor-li:text-18 sm:editor-p:text-16 sm:editor-li:text-16 xs:editor-p:text-14 xs:editor-li:text-14">
                                <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                                <p style="font-weight: 300;">{{$service->summary}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-field relative">
                        <div class="dynamic-sticky rtl:!sticky rtl:!top-[30px]">
                            <div class="border border-solid border-black/10 absolute left-0 top-1/2 -translate-y-1/2 w-full h-[80%] rounded-[30px] pointer-events-none"></div>
                            <!-- WEB GÖRÜNÜM -->
                            <div class="content grid grid-cols-2 gap-20 md:grid-cols-1 px-60 lg:px-40 md:px-20 srb-short-all sm:hidden">
                                <!-- col-span-x DEĞERİ PANELDEN SEÇİLEBİLİR OLACAK: col-span-1, col-span-2 -->
                                <!-- row-span-x DEĞERİ PANELDEN SEÇİLEBİLİR OLACAK: row-span-1, row-span-2 -->
                                <div class="image group/image col-span-2 row-span-1 md:col-span-1 md:row-span-1 group/popup relative [&.row-span-2]:h-[calc(400px+20px)] md:[&.row-span-2]:h-[250px] sm:[&.row-span-2]:h-[225px] xs:md:[&.row-span-2]:h-[200px] h-[275px] xs:h-200 sm:h-225 md:h-250 overflow-hidden rounded-20 translate-z-0">
                                    <img src="<?= env('HTTP_DOMAIN').'/'. getFolder(['uploads_folder','service_images_folder'], $service->lang).'/'. $service->image ?>" class="full-cover rounded-20 duration-450 group-hover/image:scale-110" loading="lazy" alt="">
                                </div>
                                <div class="image group/image col-span-1 row-span-2 md:col-span-1 md:row-span-1 group/popup relative [&.row-span-2]:h-[calc(400px+20px)] md:[&.row-span-2]:h-[250px] sm:[&.row-span-2]:h-[225px] xs:md:[&.row-span-2]:h-[200px] h-[275px] xs:h-200 sm:h-225 md:h-250 overflow-hidden rounded-20 translate-z-0">
                                    <img src="../assets/image/other/image-2.jpg" class="full-cover rounded-20 duration-450 group-hover/image:scale-110" loading="lazy" alt="">
                                </div>
                                <div class="image group/image col-span-1 row-span-1 md:col-span-1 md:row-span-1 group/popup relative [&.row-span-2]:h-[calc(400px+20px)] md:[&.row-span-2]:h-[250px] sm:[&.row-span-2]:h-[225px] xs:md:[&.row-span-2]:h-[200px] h-[200px] xs:h-200 sm:h-225 md:h-250 overflow-hidden rounded-20 translate-z-0">
                                    <img src="../assets/image/other/image-3.jpg" class="full-cover rounded-20 duration-450 group-hover/image:scale-110" loading="lazy" alt="">
                                </div>
                                <div class="image group/image col-span-1 row-span-1 md:col-span-1 md:row-span-1 group/popup relative [&.row-span-2]:h-[calc(400px+20px)] md:[&.row-span-2]:h-[250px] sm:[&.row-span-2]:h-[225px] xs:md:[&.row-span-2]:h-[200px] h-[200px] xs:h-200 sm:h-225 md:h-250 overflow-hidden rounded-20 translate-z-0">
                                    <img src="../assets/image/other/image-4.jpg" class="full-cover rounded-20 duration-450 group-hover/image:scale-110" loading="lazy" alt="">
                                </div>
                                <div class="image group/image col-span-2 row-span-1 md:col-span-1 md:row-span-1 group/popup relative [&.row-span-2]:h-[calc(400px+20px)] md:[&.row-span-2]:h-[250px] sm:[&.row-span-2]:h-[225px] xs:md:[&.row-span-2]:h-[200px] h-[275px] xs:h-200 sm:h-225 md:h-250 overflow-hidden rounded-20 translate-z-0">
                                    <img src="../assets/image/other/image-5.jpg" class="full-cover rounded-20 duration-450 group-hover/image:scale-110" loading="lazy" alt="">
                                </div>
                            </div>
                            <!-- MOBİL GÖRÜNÜM -->
                            <div class="carousel-field relative hidden sm:block">
                                <div class="about-image-carousel swiper">
                                    <div class="swiper-wrapper">
                                        <?php for ($i = 1; $i <= 5; $i++) : ?>
                                            <div class="swiper-slide group/slide">
                                                <div class="content relative">
                                                    <div class="image-field relative translate-z-0">
                                                        <div class="image h-500 xs:h-250 sm:h-300 md:h-350 lg:h-400 overflow-hidden translate-z-0 rounded-[20px]">
                                                            <img src="../assets/image/other/image-<?= $i ?>.jpg" class="full-cover" loading="lazy" alt="">
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
        </div>
    </section>

    <!-- OTHER SERVICES -->
    <section class="page-section py-120 xl:py-80 lg:py-60 md:py-45 sm:py-30">
        <div class="container max-w-[1500px]">
            <div class="wrapper">
                <div class="title-field flex justify-between items-center gap-[20px] sm:flex-col sm:items-center mb-30 sm:mb-20 srb-short-all">
                    <div class="main-title">
                        <p class="title text-[#757575] text-20 sm:text-18 xs:text-16 font-light leading-tight relative tracking-[0.4em] sm:text-center">OUR SERVICE</p>
                    </div>
                    <div class="button-field">
                        <a href="<?= env('HTTP_DOMAIN').'/'.getUrl('services_url') ?>" class="button group/button min-w-[240px] w-fit h-[50px] flex justify-center items-center px-[30px] rounded-full bg-transparent relative gap-[15px] duration-450 overflow-hidden shadow-[inset_0_0_0_1px_var(--black10)] before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-500 before:duration-450  hover:before:left-0 hover:shadow-[inset_0_0_0_1px_var(--main-500)] sm:w-full">
                            <div class="icon-arrow-left text-[16px] height-[16px] leading-none flex items-center text-[#111111] relative z-10 duration-450 group-hover/button:text-white group-hover/button:-translate-x-[5px]"></div>
                            <div class="text text-[15.18px] flex items-center text-[#111111] relative z-10 leading-tight duration-450 group-hover/button:text-white">Back to Service</div>
                        </a>
                    </div>
                </div>
                <div class="content-field">
                    <!-- SERVICE CONTENT -->
                    <div class="service-wrapper grid grid-cols-1 gap-[50px] md:gap-[30px] sm:gap-[25px] srb-short-all">
                        <!-- BURADA EN FAZLA 2 ADET GÖRÜNEBİLİR -->
                        <!-- 2 ADETTEN FAZLA GÖSTERİLMESİ TAVSİYE EDİLMEMEKTEDİR. -->
                        <?php $list = [
                            ['title' => 'Design', 'image' => '../assets/image/other/service-1.jpg',],
                            ['title' => 'Installation', 'image' => '../assets/image/other/service-2.jpg',],
                        ]; ?>

                        <?php foreach ($lastTwoService as $key => $item) : ?>
                            <div class="service-item item group/item relative show-button-anim">
                                <div class="content bg-[#F6F6F6] rounded-[15px] overflow-hidden relative grid grid-cols-2 gap-0 md:grid-cols-1 border border-solid border-transparent group-hover/item:border-main-500 group-[&.is-active]/item:border-main-500 duration-450">
                                    <div class="image-box h-[400px] xs:h-250 sm:h-300 md:h-350 lg:h-375 overflow-hidden">
                                        <div class="carousel-field relative">
                                            <div class="service-multiple-carousel swiper">
                                                <div class="swiper-wrapper">
                                                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                                                        <div class="swiper-slide group/slide">
                                                            <div class="content relative">
                                                                <div class="image-field relative translate-z-0">
                                                                    <div class="image group/image group/popup relative h-[400px] xs:h-250 sm:h-300 md:h-350 lg:h-375 overflow-hidden rounded-unset cursor-pointer translate-z-0" href="../assets/image/other/image-<?= $i ?>.jpg" data-fancybox data-caption="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque architecto facere repudiandae exercitationem culpa, natus fugiat ab iure alias commodi, corrupti quod adipisci. Eligendi amet veritatis ipsam debitis neque reiciendis!">
                                                                        <img src="<?= env('HTTP_DOMAIN').'/'. getFolder(['uploads_folder','service_images_folder'], $item->lang).'/'. $item->image ?>" class="full-cover duration-450 group-hover/item:scale-110">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endfor; ?>
                                                </div>
                                            </div>
                                            <div class="carousel-controller">
                                                <div class="carousel-navigation flex gap-20 sm:gap-10 pointer-events-none z-20 absolute bottom-20 right-20">
                                                    <div class="service-multiple-prev pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                                        <div class="icon group/navigation flex items-center justify-center w-35 h-35 sm:w-30 sm:h-30 bg-[#E9E9E9] border border-solid border-[#E9E9E9] rounded-full cursor-pointer hover:bg-main-500 hover:border-main-500 duration-450 rtl:rotate-180">
                                                            <i class="icon-chevron-left text-[#111111] text-[10px] h-[10px] flex items-center justify-center group-hover/navigation:text-white duration-450 group-hover/navigation:translate-x-[-3px]"></i>
                                                        </div>
                                                    </div>
                                                    <div class="service-multiple-next pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                                        <div class="icon group/navigation flex items-center justify-center w-35 h-35 sm:w-30 sm:h-30 bg-[#E9E9E9] border border-solid border-[#E9E9E9] rounded-full cursor-pointer hover:bg-main-500 hover:border-main-500 duration-450 rtl:rotate-180">
                                                            <div class="icon-chevron-right text-[#111111] text-[10px] h-[10px] flex items-center justify-center group-hover/navigation:text-white duration-450 group-hover/navigation:translate-x-[3px]"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-field flex flex-col justify-center p-60 lg:p-45 md:p-30 sm:p-25 gap-[20px] lg:gap-[15px] md:gap-[15px]">
                                        <a href="<?= env('HTTP_DOMAIN').'/'.getUrl('services_url') . '/' . $item['seo_url'] ?>" class="title text-26 md:text-24 sm:text-20 text-black leading-tight font-semibold duration-450 hover:text-main-500 hover:translate-x-[5px] group-[&.is-active]/item:text-main-500 group-[&.is-active]/item:hover:text-main-600"><?= $item['title']; ?></a>
                                        <div class="text-editor !max-w-full editor-p:text-18 editor-li:text-18 sm:editor-p:text-16 sm:editor-li:text-16 xs:editor-p:text-14 xs:editor-li:text-14">
                                            <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                                            <p style="font-weight: 300;"><?= $item['summary']; ?></p>
                                        </div>
                                        <div class="button-field !mt-0 opacity-0 h-0 translate-y-20 duration-450 group-hover/item:opacity-100 group-hover/item:h-[50px] group-hover/item:!mt-[50px] group-hover/item:translate-y-0 md:opacity-100 md:h-[50px] md:translate-y-0 group-[&.is-active]/item:opacity-100 group-[&.is-active]/item:h-[50px] group-[&.is-active]/item:!mt-[50px] group-[&.is-active]/item:translate-y-0 md:!mt-[30px] sm:!mt-[20px] md:group-[&.is-active]/item:!mt-[30px] sm:group-[&.is-active]/item:!mt-[20px] md:group-hover/item:!mt-[30px] sm:group-hover/item:!mt-[20px] sm:hidden">
                                            <a href="<?= env('HTTP_DOMAIN').'/'.getUrl('services_url') . '/' . $item['seo_url'] ?>" class="button group/button w-[200px] h-[50px] sm:h-[50px] flex justify-center items-center px-[30px] rounded-full bg-main-500 relative gap-[10px] duration-450 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-600 hover:before:left-0 before:duration-450">
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
    </section>
</main>

@endsection

<!-- script --> 
@section('script') 

@endsection