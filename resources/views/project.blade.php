@extends('layouts.main')

@section('content')
<?php $pageTitle = $project->title_1; ?>

<main class="main-field header-space">
    <!-- SINGLE PROJECT -->
    <section class="project-area-image-section relative">
        <div class="gradient bg-[#F1F1F1] absolute top-0 left-0 w-full h-[calc(50%+160px)] z-2 translate-z-0 header-space-plus-minus pointer-events-none md:bg-white"></div>
        <div class="full-container overflow-hidden">
            <div class="container max-w-[1760px] relative z-20 h-full">
                <div class="wrapper h-full">
                    <div class="carousel-field relative h-full">
                        <div class="content relative h-full">
                            <div class="blog-detail-carousel swiper h-full !overflow-visible">
                                <div class="swiper-wrapper h-full">
                                    <!-- DÜZGÜN ÇALIŞMASI İÇİN, EN AZ 5 ADET SLİDER GÖRSELİ OLMALI -->
                                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                                        <div class="swiper-slide group/slide h-full rounded-[30px] overflow-hidden !scale-90 !duration-450 !transition-all [&.swiper-slide-active]:!scale-100 pointer-events-none [&.swiper-slide-active]:pointer-events-auto">
                                            <div class="gradient bg-[#FFFFFF] absolute top-0 left-0 w-full h-full z-2 translate-z-0"></div>
                                            <div class="image group/image group/popup relative h-[530px] xs:h-250 sm:h-300 md:h-350 lg:h-400 overflow-hidden rounded-20 cursor-pointer translate-z-0  duration-450 opacity-60 z-20 group-[&.swiper-slide-active]/slide:opacity-100" href="../assets/image/other/project-<?= $i ?>.jpg" data-fancybox="projectGalerry" data-caption="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque architecto facere repudiandae exercitationem culpa, natus fugiat ab iure alias commodi, corrupti quod adipisci. Eligendi amet veritatis ipsam debitis neque reiciendis!">
                                                <img src="<?= env('HTTP_DOMAIN').'/'. getFolder(['uploads_folder','project_images_folder'], $project->lang).'/'.$project->image ?>" class="full-cover rounded-20 duration-450 group-hover/image:scale-110" loading="lazy" alt="">
                                            </div>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                            <div class="carousel-controller max-w-[1500px] w-full mx-auto z-20 absolute bottom-10 left-1/2 -translate-x-1/2 px-[30px] pointer-events-none md:bottom-10">
                                <div class="carousel-navigation flex justify-center gap-150 sm:gap-100 pointer-events-none">
                                    <div class="blog-detail-prev pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                        <div class="icon group/navigation flex items-center justify-center w-50 h-50 sm:w-40 sm:h-40 bg-[#E9E9E9] border border-solid border-[#E9E9E9] rounded-full cursor-pointer hover:bg-main-500 hover:border-main-500 duration-450 rtl:rotate-180">
                                            <i class="icon-chevron-left text-[#111111] text-[10px] h-[10px] flex items-center justify-center group-hover/navigation:text-white duration-450 group-hover/navigation:translate-x-[-3px]"></i>
                                        </div>
                                    </div>
                                    <div class="blog-detail-next pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                        <div class="icon group/navigation flex items-center justify-center w-50 h-50 sm:w-40 sm:h-40 bg-[#E9E9E9] border border-solid border-[#E9E9E9] rounded-full cursor-pointer hover:bg-main-500 hover:border-main-500 duration-450 rtl:rotate-180">
                                            <div class="icon-chevron-right text-[#111111] text-[10px] h-[10px] flex items-center justify-center group-hover/navigation:text-white duration-450 group-hover/navigation:translate-x-[3px]"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                    </div>
                </div>
            </div>
    </section>
    <div class="scrollable-item"></div>

    <!-- USAGE AREA CONTENT -->
    <section class="usage-area-content-section pb-0 xl:pb-0 lg:pb-0 md:pb-0 sm:pb-0 relative z-20 mt-40 md:mt-30 sm:mt-20">
        <!-- INNER BREADCRUMB FIELD -->
        <div class="container max-w-[1500px]">
            <div class="wrapper relative">
                <div class="content flex justify-between items-center pb-15 sm:flex-col gap-[20px]">
                    <div class="inner-breadcrumb">
                        <ul class="navigation flex flex-wrap items-center justify-center gap-[10px] [&_li:last-child]:hidden">
                            <li>
                                <a href="index.php" class="flex group">
                                    <p class="text text-[#111111]/50 text-18 md:text-16 font-light group-hover:text-main-500 duration-450 leading-tight text-center">Home</p>
                                </a>
                            </li>
                            <li class="split relative flex items-center h-[12px]">
                                <p class="text text-[#111111]/50 text-18 md:text-16 font-light duration-450 leading-tight">/</p>
                            </li>
                            <li>
                                <a href="page-projects.php" class="flex group">
                                    <p class="text text-[#111111]/50 text-18 md:text-16 font-light group-hover:text-main-500 duration-450 leading-tight text-center">Projects</p>
                                </a>
                            </li>
                            <li class="split relative flex items-center h-[12px]">
                                <p class="text text-[#111111]/50 text-18 md:text-16 font-light duration-450 leading-tight">/</p>
                            </li>
                            <!-- BU SON GÖRÜNECEK OLAN ALAN OPSİYONEL OLARAK EKLENEBİLİR/KALDIRILABİLİR. -->
                            <li>
                                <a href="page-projects.php" class="flex group">
                                    <p class="text text-[#111111]/50 text-18 md:text-16 font-light group-hover:text-main-500 duration-450 leading-tight text-center"><?= $pageTitle ?></p>
                                </a>
                            </li>
                            <li class="split relative flex items-center h-[12px]">
                                <p class="text text-[#111111]/50 text-18 md:text-16 font-light duration-450 leading-tight">/</p>
                            </li>
                        </ul>
                    </div>
                    <div class="button-field sm:w-full">
                        <a href="#popup-contact" data-fancybox class="button group/button min-w-[200px] w-fit h-[50px] flex justify-center items-center px-[30px] rounded-full bg-main-500 relative gap-[15px] duration-450 overflow-hidden shadow-[inset_0_0_0_1px_var(--black10)] before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-600 before:duration-450  hover:before:left-0 hover:shadow-[inset_0_0_0_1px_var(--main-600)] sm:mx-auto">
                            <div class="text text-[15.18px] flex items-center text-white relative z-10 leading-tight duration-450 group-hover/button:text-white">Start Project</div>
                        </a>
                    </div>
                    <div class="split w-full h-1 bg-[#111111] opacity-15 absolute left-0 bottom-0"></div>
                </div>
            </div>
        </div>
        <!-- TEXT FIELD -->
        <div class="container max-w-[1500px]">
            <div class="wrapper relative">
                <div class="editor-field mt-80 xl:mt-60 lg:mt-50 md:mt-40 sm:mt-30 xs:mt-20 max-w-[1024px] mx-auto">
                    <div class="text-editor !max-w-full editor-p:text-18 editor-li:text-18 sm:editor-p:text-16 sm:editor-li:text-16 xs:editor-p:text-14 xs:editor-li:text-14">
                        <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                        <h3 style="text-align: center; font-weight: bold;">{{ $project->title_1 }}</h3>
                        <p style="text-align: center; font-weight: 300;">{{ $project->short_description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OTHER POPULAR PRODUCT -->
    <section class="other-popular-product-section my-60 xl:my-60 lg:my-60 md:my-45 sm:my-30 relative overflow-hidden">
        <div class="container absolute left-1/2 top-0 -translate-x-1/2 max-w-[1750px] px-[0] w-full h-full pointer-events-none">
            <div class="gradient bg-gradient-to-b from-[#F1F1F1]/0 via-[#F1F1F1] to-[#F1F1F1] absolute top-0 left-1/2 -translate-x-1/2 w-[calc(100%)] h-full z-2 translate-z-0 rounded-[30px] pointer-events-none md:rounded-none"></div>
        </div>
        <!-- ICONABLE FIELD -->
        <!-- py-100 xl:py-80 lg:py-60 md:py-45 sm:py-30 -->
        <div class="container max-w-[1500px] relative z-20">
            <!-- <div class="gradient bg-[#F3F9F5] absolute top-0 left-0 w-full h-full z-2 translate-z-0"></div> -->
            <div class="wrapper">
                <div class="carousel-field relative py-100 xl:py-80 lg:py-60 md:py-45 sm:py-30 px-30 bg-[#F3F9F5] rounded-[30px] hand-selector project-hand-selector group/hand">
                    <div class="hand-field absolute top-[calc(50%-15px)] right-[30px] animate-slideX duration-450 [&.is-scroll]:opacity-0 hidden md:block z-20 group-[&.is-active]/hand:opacity-0">
                        <div class="image h-[35px] w-[35px] overflow-hidden translate-z-0">
                            <img src="../assets/image/static/hand.png" class="full-contain" loading="lazy" alt="">
                        </div>
                    </div>
                    <div class="carousel-wrapper relative flex">
                        <div class="carousel-controller flex items-center relative before:absolute before:left-[-2px] before:top-0 before:w-2 before:h-full before:bg-[#F3F9F5] before:z-2">
                            <div class="carousel-navigation flex flex-col gap-20 pointer-events-none sm:hidden">
                                <div class="project-iconable-prev pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                    <div class="icon group/navigation flex items-center justify-center w-50 h-50 lg:w-40 lg:h-40 rounded-full cursor-pointer bg-transparent border border-solid border-[#000000]/15 hover:bg-main-500 duration-450">
                                        <i class="icon-chevron-left text-[#111111] text-[8px] h-[10px] flex items-center justify-center group-hover/navigation:text-white duration-450 group-hover/navigation:translate-x-[-3px] rtl:rotate-180"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="project-iconable-carousel swiper w-full">
                            <div class="swiper-wrapper">
                                <?php $list = [
                                    ['icon' => '../assets/image/other/icon-12.png', 'title' => 'Infrastructure<br>Works'],
                                    ['icon' => '../assets/image/other/icon-13.png', 'title' => 'Floor<br>Arrangements'],
                                    ['icon' => '../assets/image/other/icon-14.png', 'title' => 'Electric &<br>Weak Currents'],
                                    ['icon' => '../assets/image/other/icon-15.png', 'title' => 'Steel Tribune &<br>Seat Installation'],
                                    ['icon' => '../assets/image/other/icon-16.png', 'title' => 'Lighting Pole<br>Installation'],
                                    ['icon' => '../assets/image/other/icon-17.png', 'title' => 'Artificial Grass<br>Flooring'],
                                    ['icon' => '../assets/image/other/icon-12.png', 'title' => 'Infrastructure<br>Works'],
                                    ['icon' => '../assets/image/other/icon-13.png', 'title' => 'Floor<br>Arrangements'],
                                    ['icon' => '../assets/image/other/icon-14.png', 'title' => 'Electric &<br>Weak Currents'],
                                    ['icon' => '../assets/image/other/icon-15.png', 'title' => 'Steel Tribune &<br>Seat Installation'],
                                    ['icon' => '../assets/image/other/icon-16.png', 'title' => 'Lighting Pole<br>Installation'],
                                    ['icon' => '../assets/image/other/icon-17.png', 'title' => 'Artificial Grass<br>Flooring'],
                                ]; ?>

                                <?php foreach ($list as $key => $item) : ?>
                                    <div class="swiper-slide group/slide pt-4">
                                        <div class="content relative duration-450 group-hover/slide:-translate-y-4">
                                            <div class="split w-1 h-full bg-[#000000] opacity-8 absolute right-0 top-0"></div>
                                            <div class="image-field relative translate-z-0">
                                                <div class="image h-[60px] xs:h-[50px] w-[60px] xs:w-[50px] overflow-hidden translate-z-0 mx-auto">
                                                    <img src="<?= $item['icon'] ?>" class="full-contain" loading="lazy" alt="">
                                                </div>
                                            </div>
                                            <div class="text-field mt-30 sm:mt-20 xs:mt-10">
                                                <p class="title text-16 sm:text-16 xs:text-14 text-[#111111] leading-tight text-center duration-450 group-hover/slide:text-main-500 font-light"><?= $item['title'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="carousel-controller flex items-center relative before:absolute before:left-[-2px] before:top-0 before:w-2 before:h-full before:bg-[#F3F9F5] before:z-2">
                            <div class="carousel-navigation flex flex-col gap-20 pointer-events-none sm:hidden">
                                <div class="project-iconable-next pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                    <div class="icon group/navigation flex items-center justify-center w-50 h-50 lg:w-40 lg:h-40 rounded-full cursor-pointer bg-transparent border border-solid border-[#000000]/15 hover:bg-main-500 duration-450">
                                        <div class="icon-chevron-right text-[#111111] text-[8px] h-[10px] flex items-center justify-center group-hover/navigation:text-white duration-450 group-hover/navigation:translate-x-[3px] rtl:rotate-180"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SPLIT -->
        <div class="container max-w-[1500px] pt-100 xl:py-80 lg:py-60 md:py-45 sm:py-30 pb-0 relative z-20">
            <div class="split w-[100%] h-[1px] bg-[#111111]/15"></div>
        </div>
        <!-- PRODUCT CAROUSEL -->
        <div class="container max-w-[1500px] pt-100 xl:py-80 lg:py-60 md:py-45 sm:py-30 md:pt-0 sm:pt-0 pb-0 relative z-20">
            <div class="wrapper">
                <div class="carousel-field relative pb-30 sm:pb-20">
                    <div class="title-field flex justify-between items-center gap-[20px] sm:flex-col sm:items-center mb-30 sm:mb-20 srb-short-all">
                        <div class="main-title">
                            <p class="title text-[#959595] text-20 sm:text-18 xs:text-16 font-light leading-tight relative tracking-[0.4em] sm:text-center">PRODUCTS USED IN THE PROJECT</p>
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
                                        <div class="content bg-white rounded-[20px] duration-450 group-hover/item:-translate-y-[5px] border border-solid border-[#111111]/10 group-hover/item:border-transparent sm:group-hover/item:shadow-none sm:group-hover/item:border-[#111111]/10 group-hover/item:[box-shadow:_0px_20px_50px_0px_rgba(0,0,0,0.1)]">
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
                                                        <div class="sport-grass-pagination flex flex-col [&_.swiper-pagination-bullet]:bg-transparent [&_.swiper-pagination-bullet-active]:!bg-[#B5B5B5] group-hover/slide:[&_.swiper-pagination-bullet-active]:!bg-main-500 [&_.swiper-pagination-bullet]:w-[11.23px] [&_.swiper-pagination-bullet]:h-[11.23px] [&_.swiper-pagination-bullet]:!mx-0 !gap-[15px] justify-center [&_.swiper-pagination-bullet]:opacity-100 [&_.swiper-pagination-bullet]:duration-450  [&_.swiper-pagination-bullet]:border [&_.swiper-pagination-bullet]:border-solid [&_.swiper-pagination-bullet]:border-black/10 [&_.swiper-pagination-bullet-active]:border-main-500"></div>
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

    <!-- OTHER USING AREAS -->
    <section class="other-usage-area-section py-60 xl:py-60 lg:py-60 md:py-45 sm:py-30">
        <div class="container max-w-[1500px]">
            <div class="wrapper">
                <div class="title-field flex justify-between items-center gap-[20px] sm:flex-col sm:items-center mb-30 sm:mb-20 srb-short-all">
                    <div class="main-title">
                        <p class="title text-[#757575] text-20 sm:text-18 xs:text-16 font-light leading-tight relative tracking-[0.4em] sm:text-center">OUR PROJECT</p>
                    </div>
                    <div class="button-field">
                        <a href="page-projects.php" class="button group/button min-w-[240px] w-fit h-[50px] flex justify-center items-center px-[30px] rounded-full bg-transparent relative gap-[15px] duration-450 overflow-hidden shadow-[inset_0_0_0_1px_var(--black10)] before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-500 before:duration-450  hover:before:left-0 hover:shadow-[inset_0_0_0_1px_var(--main-500)] sm:w-full">
                            <div class="icon-arrow-left text-[16px] height-[16px] leading-none flex items-center text-[#111111] relative z-10 duration-450 group-hover/button:text-white group-hover/button:-translate-x-[5px] rtl:group-hover/button:translate-x-[-5px] rtl:order-2"></div>
                            <div class="text text-[15.18px] flex items-center text-[#111111] relative z-10 leading-tight duration-450 group-hover/button:text-white rtl:order-1">Back to Projects</div>
                        </a>
                    </div>
                </div>
                <div class="content-field">
                    <!-- SERVICE CONTENT -->
                    <div class="service-wrapper grid grid-cols-1 gap-[50px] md:gap-[30px] sm:gap-[25px] srb-short-all">
                        <!-- BURADA EN FAZLA 2 ADET GÖRÜNEBİLİR -->
                        

                        <?php foreach ($projects as $key => $item) : ?>
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
                                                                        <img src="../assets/image/other/image-<?= $i ?>.jpg" class="full-cover duration-450 group-hover/item:scale-110">
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
                                    <div class="text-field flex flex-col justify-center p-50 lg:p-45 md:p-30 sm:p-25 gap-[30px] lg:gap-[20px] md:gap-[10px]">
                                        <div class="location-field flex items-center gap-[10px] opacity-40">
                                            <i class="icon icon-map-marker text-[#111111] text-[14px] h-[14px] block leading-none duration-450"></i>
                                            <p class="text text-[#111111] text-[14px] leading-tight">Angola</p>
                                        </div>
                                        <a href="single-project.php" class="title text-26 md:text-24 sm:text-20 text-black leading-tight font-semibold duration-450 hover:text-main-500 hover:translate-x-[5px] group-[&.is-active]/item:text-main-500 group-[&.is-active]/item:hover:text-main-600"><?= $item['title']; ?></a>
                                        <div class="text-editor !max-w-full editor-p:text-18 editor-li:text-18 sm:editor-p:text-16 sm:editor-li:text-16 xs:editor-p:text-14 xs:editor-li:text-14 line-clamp-2">
                                            <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                                            <p style="font-weight: 300;">The hydrid grass is obtained by mixing natural grass with artificial grass to ensure the use of more robust and longer.</p>
                                        </div>
                                        <div class="button-field !mt-0 opacity-0 h-0 translate-y-20 duration-450 group-hover/item:opacity-100 group-hover/item:h-[50px] group-hover/item:!mt-[30px] group-hover/item:translate-y-0 md:opacity-100 md:h-[50px] md:translate-y-0 group-[&.is-active]/item:opacity-100 group-[&.is-active]/item:h-[50px] group-[&.is-active]/item:!mt-[30px] group-[&.is-active]/item:translate-y-0 md:!mt-[30px] sm:!mt-[20px] md:group-[&.is-active]/item:!mt-[30px] sm:group-[&.is-active]/item:!mt-[20px] md:group-hover/item:!mt-[30px] sm:group-hover/item:!mt-[20px] sm:hidden">
                                            <a href="single-project.php" class="button group/button w-[200px] h-[50px] sm:h-[50px] flex justify-center items-center px-[30px] rounded-full bg-main-500 relative gap-[10px] duration-450 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-600 hover:before:left-0 before:duration-450">
                                                <div class="text text-16 flex items-center text-white relative z-10 leading-tight duration-450 group-hover/button:text-white">View</div>
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