@extends('layouts.main')

@section('content')
<?php 
$pageTitle = $using_area->title;
$breadcrumbTitle = $using_area->title;
//dd($using_area)
?>
<main class="main-field header-space-padding">
    <!-- USAGE AREA IMAGE CONTENT -->
    <section class="usage-area-image-section relative">
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
                                                <img src="../assets/image/other/project-<?= $i ?>.jpg" class="full-cover rounded-20 duration-450 group-hover/image:scale-110" loading="lazy" alt="">
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
    <section class="usage-area-content-section relative z-20 mt-40 md:mt-30 sm:mt-20 pb-60 xl:pb-60 lg:pb-50 md:pb-40 sm:pb-30 xs:pb-20">
        <!-- INNER BREADCRUMB FIELD -->
        <div class="container max-w-[1500px]">
            <div class="wrapper relative">
                <div class="content flex justify-between items-center pb-15 sm:flex-col gap-[20px] w-full">
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
                                <a href="page-usage-areas.php" class="flex group">
                                    <p class="text text-[#111111]/50 text-18 md:text-16 font-light group-hover:text-main-500 duration-450 leading-tight text-center">Using Areas</p>
                                </a>
                            </li>
                            <li class="split relative flex items-center h-[12px]">
                                <p class="text text-[#111111]/50 text-18 md:text-16 font-light duration-450 leading-tight">/</p>
                            </li>
                            <!-- BU SON GÖRÜNECEK OLAN ALAN OPSİYONEL OLARAK EKLENEBİLİR/KALDIRILABİLİR. -->
                            <li>
                                <a href="page-usage-areas.php" class="flex group">
                                    <p class="text text-[#111111]/50 text-18 md:text-16 font-light group-hover:text-main-500 duration-450 leading-tight text-center"><?= $pageTitle ?></p>
                                </a>
                            </li>
                            <li class="split relative flex items-center h-[12px]">
                                <p class="text text-[#111111]/50 text-18 md:text-16 font-light duration-450 leading-tight">/</p>
                            </li>
                        </ul>
                    </div>
                    <div class="button-field sm:w-full">
                        <a href="#popup-contact" data-fancybox class="button group/button min-w-[200px] w-fit h-[50px] flex justify-center items-center px-[30px] rounded-full bg-main-500 relative gap-[15px] duration-450 overflow-hidden shadow-[inset_0_0_0_1px_var(--black10)] before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-600 before:duration-450  hover:before:left-0 hover:shadow-[inset_0_0_0_1px_var(--main-600)] sm:w-full">
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
                <div class="text-field relative p-60 xl:p-50 lg:p-40 md:p-30 sm:p-25 rounded-15 border border-solid border-black/10 overflow-hidden mt-80 xl:mt-60 lg:mt-50 md:mt-40 sm:mt-30 xs:mt-20">
                    <div class="editor-field max-w-[1024px] mx-auto">
                        <div class="text-editor !max-w-full editor-p:text-18 editor-li:text-18 sm:editor-p:text-16 sm:editor-li:text-16 xs:editor-p:text-14 xs:editor-li:text-14 editor-p:!leading-relaxed">
                            <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                            <h3 style="text-align: center; font-weight: bold;">Football Pitch</h3>
                            <p style="text-align: center; font-weight: 300;">Avengrass's focus is on developing safe, strong, durable and environmentally friendly artificial turf products for football pitches and meeting all kinds of users’ needs. Our Research and Development team works hard to ensure that all our products and systems are the best in durability, heat retention, UV degradation, colour balance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DETAILED INFO FIELD -->
    <section class="page-section py-60 xl:py-60 lg:py-60 md:py-45 sm:py-30">
        <div class="container max-w-[1500px]">
            <div class="wrapper grid grid-cols-[minmax(0,4fr)_minmax(0,8fr)] gap-50 lg:gap-40 md:gap-30 md:grid-cols-1">
                <div class="main-icon-field">
                    <div class="dynamic-sticky">
                        <div class="icon-field relative p-60 xl:p-50 lg:p-40 md:p-30 sm:p-25 rounded-15 overflow-hidden h-fit">
                            <div class="gradient bg-gradient-to-b from-[#F3F9F5] to-[#F3F9F5]/50 absolute top-0 left-0 w-full h-full z-2 translate-z-0 pointer-events-none"></div>
                            <?php $list = [
                                [
                                    'title' => 'Infrastructure Works',
                                    'icon' => '../assets/image/other/icon-12.png',
                                ],
                                [
                                    'title' => 'Floor Arrangements',
                                    'icon' => '../assets/image/other/icon-13.png',
                                ],
                                [
                                    'title' => 'Steel Tribune & Seat Installation',
                                    'icon' => '../assets/image/other/icon-14.png',
                                ],
                                [
                                    'title' => 'Lighting Pole Installation',
                                    'icon' => '../assets/image/other/icon-15.png',
                                ],
                                [
                                    'title' => 'Electric & Weak Currents',
                                    'icon' => '../assets/image/other/icon-16.png',
                                ],
                                [
                                    'title' => 'Artificial Grass Flooring',
                                    'icon' => '../assets/image/other/icon-17.png',
                                ],
                            ]; ?>

                            <div class="innew-wrapper grid grid-cols-2 gap-60 xl:gap-50 lg:gap-40 md:gap-30 relative z-20 [&_.item:nth-child(even)_.split]:hidden srb-short-all">
                                <?php foreach ($list as $key => $item) : ?>
                                    <div class="item group/item relative duration-450 hover:-translate-y-4">
                                        <div class="image h-[60px] xs:h-[40px] sm:h-[50px] w-[60px] xs:w-[40px] sm:w-[50px] overflow-hidden translate-z-0 mx-auto">
                                            <img src="<?= $item['icon'] ?>" class="full-contain" loading="lazy" alt="">
                                        </div>
                                        <div class="text-field mt-20 md:mt-15 xs:mt-10">
                                            <p class="text text-[16px] md:text-[14px] text-[#000000] leading-tight font-light text-center duration-450 group-hover/item:text-main-500"><?= $item['title'] ?></p>
                                        </div>
                                        <div class="split w-1 h-full bg-[#000000] opacity-8 absolute top-0 -right-30 xl:-right-25 lg:-right-20 md:-right-15 duration-450 group-hover/item:translate-y-4"></div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-field relative p-60 xl:p-50 lg:p-40 md:p-30 sm:p-25 rounded-15 border border-solid border-black/10 overflow-hidden">
                    <div class="gradient bg-gradient-to-b from-[#FFFFFF] to-[#FFFFFF]/50 absolute top-0 left-0 w-full h-full z-2 translate-z-0 pointer-events-none"></div>
                    <div class="editor-field relative z-20">
                        <div class="text-editor !max-w-full editor-p:text-16 editor-li:text-16 sm:editor-p:text-16 sm:editor-li:text-16 xs:editor-p:text-14 xs:editor-li:text-14 editor-p:!leading-relaxed
                        editor-li:mb-25 editor-li:mt-0 lg:editor-li:mb-40 md:editor-li:mb-30 sm:editor-li:mb-20">
                            <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                            <h5>Benefits for Footballer</h5>
                            <ul>
                                <li style="font-weight: 300;">As a sport, football is the most popular sport and the most popular sports facilities in the world as entertainment areas.</li>
                                <li style="font-weight: 300;">We have 9 different product types, namely Artificial Turf Super - C, Diamond Super - D Turf, Artifi al Turf Super - V, Artificial Grass Monoturf, Artificial Grass PowerGrass, Artificial Grass DuoGrass, Super C PR Turf, Super V PR Turf, Exclusive Artificial Turf. takes.</li>
                                <li style="font-weight: 300;">We have 9 different product types, namely Artificial Turf Super - C, Diamond Super - D Turf, Artifi al Turf Super - V, Artificial Grass Monoturf, Artificial Grass PowerGrass, Artificial Grass DuoGrass, Super C PR Turf, Super V PR Turf, Exclusive Artificial Turf. takes.</li>
                                <li style="font-weight: 300;">Football fields can be used in all climatic conditions in all seasons.</li>
                                <li style="font-weight: 300;">Football fields provide a safe activity opportunity with the surrounding wire mesh and pins in the ceiling.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- F.A.Q. and OTHER PRODUCTS -->
    <section class="faq-section py-80 xl:py-80 lg:py-60 md:py-45 sm:py-30 relative overflow-hidden">
        <div class="container absolute left-1/2 top-0 -translate-x-1/2 max-w-[1750px] px-[0] w-full h-full pointer-events-none">
            <div class="gradient bg-gradient-to-b from-[#F1F1F1]/0 to-[#F1F1F1] absolute top-0 left-1/2 -translate-x-1/2 w-[calc(100%)] h-full z-2 translate-z-0 rounded-[30px] pointer-events-none md:rounded-none"></div>
        </div>
        <!-- F.A.Q. CONTAINER -->
        <div class="container max-w-[1500px]">
            <div class="wrapper relative">
                <div class="main-title mb-30 sm:mt-20 srb-short">
                    <p class="title text-[#ADADAD] text-20 sm:text-18 xs:text-16 font-light leading-tight relative tracking-[10px] sm:tracking-[2.5px] text-center md:text-left">FREQUENTLY ASKED QUESTIONS</p>
                </div>
                <div class="faq-box-wrapper max-w-[1260px] mx-auto [&_.question-item:has(+.hoverable)_.split]:opacity-0 ">
                    <?php $list = [
                        ['question' => '1. On which floors and in which weather conditions is the Decorative Grass Carpet suitable?'],
                        ['question' => '2. Is there a guarantee of Decorative Grass Carpet?'],
                        ['question' => '3. Are there color options for Decorative Grass Carpet?'],
                        ['question' => '4. What are the storage conditions for Decorative Grass Carpet?'],
                    ]; ?>

                    <!-- EĞER BİRİNCİSİNİN AÇIK GELMESİ İSTENİYORSA; question-item BİRİNCİSİNE is-active CLASSI EKLENEBİLİR. -->
                    <?php foreach ($list as $key => $item) : ?>
                        <div class="question-item item group/item relative srb-short">
                            <div class="content py-[30px] px-[60px] sm:px-[30px] rounded-[20px] cursor-pointer duration-450 group-[&.is-active]/item:py-[60px] sm:group-[&.is-active]/item:py-[30px] group-[&.is-active]/item:bg-[#6FA52C] group-hover/item:bg-transparent">
                                <div class="top-field">
                                    <div class="inner-flex flex items-center justify-between gap-[30px] sm:gap-[20px]">
                                        <p class="title text-[18px] sm:text-[16px] xs:text-[14px] text-[#111111]/65 leading-tight duration-450 group-[&.is-active]/item:text-white group-hover/item:text-[#0a6324]"><?= $item['question']; ?></p>
                                        <div class="icon w-[40px] h-[40px] xs:w-[25px] xs:h-[25px] bg-[#E3EDE6] rounded-full flex items-center justify-center duration-450 group-[&.is-active]/item:rotate-[180deg] group-[&.is-active]/item:bg-[#FFFFFF] shrink-0">
                                            <i class="icon icon-chevron-bottom text-[10px] h-[10px] block leading-none duration-450"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-field overflow-hidden h-0 duration-450">
                                    <div class="text-editor !max-w-full editor-p:text-16 editor-li:text-16 sm:editor-p:text-16 sm:editor-li:text-16 xs:editor-p:text-14 xs:editor-li:text-14 mt-60 xl:mt-50 lg:mt-40 md:mt-30 sm:mt-20 editor-headings:text-white editor-p:text-white editor-li:text-white editor-a:text-white">
                                        <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                                        <p style="font-weight: 300;">It offers high quality medical imaging services with state-of-the-art devices and expert staff. The aim of the center is to obtain clear, sharp and high-resolution images so that patients can receive the most accurate diagnosis and treatment. Customer satisfaction has always been adopted as the primary goal and is tailored to the needs of patients.</p>
                                    </div>
                                </div>
                                <div class="split w-full h-1 bg-black opacity-10 absolute left-0 bottom-0 duration-450 group-[&.is-active]/item:opacity-0 group-hover/item:opacity-0"></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- OTHER PRODUCTS CONTAINER -->
        <div class="container max-w-[1500px] pt-100 xl:py-80 lg:py-60 md:py-45 sm:py-30 pb-0">
            <div class="wrapper">
                <div class="carousel-field relative">
                    <div class="title-field flex justify-between items-center gap-[20px] sm:flex-col sm:items-center mb-30 sm:mb-20 srb-short-all">
                        <div class="main-title">
                            <p class="title text-[#ADADAD] text-20 sm:text-18 xs:text-16 font-light leading-tight relative tracking-[10px] sm:tracking-[2.5px]">PRODUCTS USED IN THE</p>
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
                    <!-- BU other-product-carousel BULUNAN ALANLARIN DÜZGÜN ÇALIŞABİLMESİ İÇİN EN AZ 7 ADET ÜRÜN GÖSTERİLMESİ GEREKMEKTEDİR. -->
                    <!-- EĞER 7 ADETTEN AZ ÜRÜN GÖSTERİLİYOR İSE, FOR DÖNGÜSÜ 1 KEZ DAHA ÇALIŞTIRILABİLİR. -->
                    <!-- EĞER 7 ADETTEN FAZLA İSE, FOR DÖNGÜSÜ İPTAL EDİLEBİLİR. -->
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OTHER USING AREAS -->
    <section class="other-usage-area-section py-120 xl:py-80 lg:py-60 md:py-45 sm:py-30">
        <div class="container max-w-[1500px]">
            <div class="wrapper">
                <div class="title-field flex justify-between items-center gap-[20px] sm:flex-col sm:items-center mb-30 sm:mb-20 srb-short-all">
                    <div class="main-title">
                        <p class="title text-[#757575] text-20 sm:text-18 xs:text-16 font-light leading-tight relative tracking-[0.4em] sm:text-center">OUR USING AREAS</p>
                    </div>
                    <div class="button-field">
                        <a href="page-usage-area.php" class="button group/button min-w-[240px] w-fit h-[50px] flex justify-center items-center px-[30px] rounded-full bg-transparent relative gap-[15px] duration-450 overflow-hidden shadow-[inset_0_0_0_1px_var(--black15)] before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-500 before:duration-450  hover:before:left-0 hover:shadow-[inset_0_0_0_1px_var(--main-500)] sm:w-full">
                            <div class="icon-arrow-left text-[16px] height-[16px] leading-none flex items-center text-[#111111]/65 relative z-10 duration-450 group-hover/button:text-white group-hover/button:-translate-x-[5px]"></div>
                            <div class="text text-[15.18px] flex items-center text-[#111111]/65 relative z-10 leading-tight duration-450 group-hover/button:text-white">Back To Using Areas</div>
                        </a>
                    </div>
                </div>
                <div class="content-field">
                    <!-- SERVICE CONTENT -->
                    <div class="service-wrapper grid grid-cols-1 gap-[50px] md:gap-[30px] sm:gap-[25px] srb-short-all">
                        <!-- BURADA EN FAZLA 2 ADET GÖRÜNEBİLİR -->
                        <!-- 2 ADETTEN FAZLA GÖSTERİLMESİ TAVSİYE EDİLMEMEKTEDİR. -->
                        <?php $list = [
                            ['title' => 'Tennis Courts', 'image' => '../assets/image/other/service-1.jpg',],
                            ['title' => 'Landscaping Areas', 'image' => '../assets/image/other/service-2.jpg',],
                        ]; ?>

                        <?php foreach ($list as $key => $item) : ?>
                            <div class="service-item item group/item relative show-button-anim">
                                <div class="content bg-[#F6F6F6] rounded-[15px] overflow-hidden relative grid grid-cols-2 gap-0 md:grid-cols-1 border border-solid border-transparent group-hover/item:border-main-500 duration-450 group-[&.is-active]/item:border-main-500">
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
                                                    <div class="service-multiple-prev pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none rtl:rotate-180">
                                                        <div class="icon group/navigation flex items-center justify-center w-35 h-35 sm:w-30 sm:h-30 bg-[#E9E9E9] border border-solid border-[#E9E9E9] rounded-full cursor-pointer hover:bg-main-500 hover:border-main-500 duration-450">
                                                            <i class="icon-chevron-left text-[#111111] text-[10px] h-[10px] flex items-center justify-center group-hover/navigation:text-white duration-450 group-hover/navigation:translate-x-[-3px]"></i>
                                                        </div>
                                                    </div>
                                                    <div class="service-multiple-next pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none rtl:rotate-180">
                                                        <div class="icon group/navigation flex items-center justify-center w-35 h-35 sm:w-30 sm:h-30 bg-[#E9E9E9] border border-solid border-[#E9E9E9] rounded-full cursor-pointer hover:bg-main-500 hover:border-main-500 duration-450">
                                                            <div class="icon-chevron-right text-[#111111] text-[10px] h-[10px] flex items-center justify-center group-hover/navigation:text-white duration-450 group-hover/navigation:translate-x-[3px]"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-field flex flex-col justify-center p-60 lg:p-45 md:p-30 sm:p-25 space-y-[20px] lg:space-y-[15px] md:space-y-[15px]">
                                        <a href="single-service.php" class="title text-26 md:text-24 sm:text-20 text-black leading-tight font-semibold duration-450 hover:text-main-500 hover:translate-x-[5px] group-[&.is-active]/item:text-main-500 group-[&.is-active]/item:hover:text-main-600"><?= $item['title']; ?></a>
                                        <div class="text-editor !max-w-full editor-p:text-18 editor-li:text-18 sm:editor-p:text-16 sm:editor-li:text-16 xs:editor-p:text-14 xs:editor-li:text-14 line-clamp-2">
                                            <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                                            <p style="font-weight: 300;">We carry out designs that will turn personal and common use areas into more natural and safe living spaces with the expertise we have.</p>
                                        </div>
                                        <div class="button-field !mt-0 opacity-0 h-0 translate-y-20 duration-450 group-hover/item:opacity-100 group-hover/item:h-[50px] group-hover/item:!mt-[30px] group-hover/item:translate-y-0 md:opacity-100 md:h-[50px] md:translate-y-0 group-[&.is-active]/item:opacity-100 group-[&.is-active]/item:h-[50px] group-[&.is-active]/item:!mt-[30px] group-[&.is-active]/item:translate-y-0 md:!mt-[30px] sm:!mt-[20px] md:group-[&.is-active]/item:!mt-[30px] sm:group-[&.is-active]/item:!mt-[20px] md:group-hover/item:!mt-[30px] sm:group-hover/item:!mt-[20px] sm:hidden">
                                            <a href="single-usage-area.php" class="button group/button w-[200px] h-[50px] sm:h-[50px] flex justify-center items-center px-[30px] rounded-full bg-main-500 relative gap-[10px] duration-450 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-600 hover:before:left-0 before:duration-450">
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