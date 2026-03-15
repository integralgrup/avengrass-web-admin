

<li class="menu-item group/menu-item lg:relative has-mega-menu">
    <a href="page-sport-grass.php" class="group/showable flex items-center ltr:gap-10 lg:ltr:gap-0 lg:px-30 lg:py-15 lg:border-0 lg:border-b lg:border-solid lg:border-black/10 duration-450 [&.is-show]:bg-main-500 rtl:pr-[75px]">
        <span class="text text-[#1A1A1A] text-16 sm:text-16 leading-tight duration-450 group-hover/menu-item:text-main-500 font-light lg:font-normal group-[&.is-show]/showable:text-white">Sport Grass</span>
        <i class="icon icon-chevron-bottom text-[#1A1A1A] text-[10px] h-[10px] leading-none duration-450 hidden group-hover/menu-item:rotate-180 group-hover/menu-item:text-main-500 group-[&.has-mega-menu]/menu-item:block lg:hidden lg:group-[&.has-mega-menu]/menu-item:hidden rtl:mr-10 lg:rtl:mr-0"></i>
    </a>
    <div class="sub-trigger group/sub-trigger absolute right-30 top-[11px] w-30 h-30 bg-main-500 justify-center items-center hidden cursor-pointer rounded-default duration-450 [&.is-active]:bg-main-300 lg:group-[&.has-mega-menu]/menu-item:flex z-20">
        <div class="icon w-[2px] h-[15px] sm:h-[12px] absolute left-1/2 -translate-x-1/2 bg-white duration-450 group-[&.is-active]/sub-trigger:rotate-90 rounded-full"></div>
        <div class="icon w-[15px] h-[2px] sm:w-[12px] bg-white duration-450 rounded-full"></div>
    </div>
    <div class="mega-menu-content absolute left-1/2 -translate-x-1/2 top-full w-full before:absolute before:left-0 before:w-full before:-top-[calc(30px+40px)] before:h-[calc(30px+40px)] before:bg-transparent opacity-0 duration-450 pointer-events-none translate-y-20 group-hover/menu-item:opacity-100 group-hover/menu-item:pointer-events-auto group-hover/menu-item:translate-y-0 before:duration-450 group-hover/menu-item:before:-top-[calc(50px)] group-hover/menu-item:before:h-[calc(50px)] lg:relative lg:opacity-100 lg:visible lg:translate-y-0 lg:pointer-events-auto lg:shadow-none lg:hidden lg:before:hidden group-[&.is-fixed]/header:before:-top-[calc(30px+10px)] group-[&.is-fixed]/header:before:h-[calc(30px+10px)] max-w-[1600px] mx-auto">
        <div class="container max-w-[1600px] lg:p-0">
            <div class="wrapper p-50 2xl:p-40 xl:px-30 xl:py-10 lg:p-0 grid grid-cols-2 gap-50 lg:grid-cols-1 bg-white rounded-[30px] [box-shadow:_0px_25px_150px_0px_rgba(0,0,0,0.16);] lg:shadow-none relative">
                <div class="background-with-gradient background-with-gradient-fix absolute left-0 bottom-0 w-full pointer-events-none overflow-hidden lg:hidden h-full">
                    <?php $backgroundOpacity = 'opacity-3' ?>
                    <!-- opacity DEĞERİ PANELDEN SEÇİLEBİLİR OLMALI -->
                    <div class="background-logo absolute left-0 top-1/2 -translate-x-1/4 -translate-y-1/2 w-1/2 h-full rotate-[30deg] md:hidden z-20 overflow-hidden mt-[50px] <?= $backgroundOpacity ?>">
                        <div class="image h-full overflow-hidden translate-z-0">
                            <img src="../assets/image/static/background-logo.png" class="full-contain" loading="lazy" alt="">
                        </div>
                    </div>
                </div>
                <div class="content-field grid grid-cols-2 gap-30 lg:grid-cols-1">
                    <?php $list = [
                        [
                            'icon-1' => '../assets/image/other/icon-4.png',
                            'icon-2' => '../assets/image/other/icon-4b.png',
                            'image' => '../assets/image/other/menu-image-1.jpg',
                            'title' => 'Football Grass',
                            'link' => 'single-sport-grass.php',
                            'inner-item' => [
                                [
                                    'image' => '../assets/image/other/menu-image-1.jpg',
                                    'title' => 'Artificial Turf Super - C',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-2.jpg',
                                    'title' => 'Diamond Super - D Turf',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-3.jpg',
                                    'title' => 'Artificial Turf Super - V',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-4.jpg',
                                    'title' => 'Artificial Grass Monoturf',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-5.jpg',
                                    'title' => 'Artificial Grass PowerGrass',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-6.jpg',
                                    'title' => 'Artificial Grass DuoGrass',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-1.jpg',
                                    'title' => 'Super C PR Turf',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-2.jpg',
                                    'title' => 'Super V PR Turf',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-3.jpg',
                                    'title' => 'Exclusive Artificial Turf',
                                    'link' => 'single-sport-grass.php',
                                ],
                            ],
                        ],
                        [
                            'icon-1' => '../assets/image/other/icon-5.png',
                            'icon-2' => '../assets/image/other/icon-5b.png',
                            'image' => '../assets/image/other/menu-image-2.jpg',
                            'title' => 'Hybird Grass',
                            'link' => 'single-sport-grass.php',
                            'inner-item' => [
                                [
                                    'image' => '../assets/image/other/menu-image-1.jpg',
                                    'title' => 'Hybird Grass',
                                    'link' => 'single-sport-grass.php',
                                ],
                            ],
                        ],
                        [
                            'icon-1' => '../assets/image/other/icon-6.png',
                            'icon-2' => '../assets/image/other/icon-6b.png',
                            'image' => '../assets/image/other/menu-image-3.jpg',
                            'title' => 'Multipurpose Grass',
                            'link' => 'single-sport-grass.php',
                            'inner-item' => [
                                [
                                    'image' => '../assets/image/other/menu-image-1.jpg',
                                    'title' => 'Artificial Turf Super - C',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-2.jpg',
                                    'title' => 'Diamond Super - D Turf',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-3.jpg',
                                    'title' => 'Artificial Turf Super - V',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-4.jpg',
                                    'title' => 'Artificial Grass Monoturf',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-5.jpg',
                                    'title' => 'Artificial Grass PowerGrass',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-6.jpg',
                                    'title' => 'Artificial Grass DuoGrass',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-1.jpg',
                                    'title' => 'Super C PR Turf',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-2.jpg',
                                    'title' => 'Super V PR Turf',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-3.jpg',
                                    'title' => 'Exclusive Artificial Turf',
                                    'link' => 'single-sport-grass.php',
                                ],
                            ],
                        ],
                        [
                            'icon-1' => '../assets/image/other/icon-7.png',
                            'icon-2' => '../assets/image/other/icon-7b.png',
                            'image' => '../assets/image/other/menu-image-2.jpg',
                            'title' => 'Padel Turf',
                            'link' => 'single-sport-grass.php',
                            'inner-item' => [
                                [
                                    'image' => '../assets/image/other/menu-image-1.jpg',
                                    'title' => 'Artificial Turf Super - C',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-2.jpg',
                                    'title' => 'Diamond Super - D Turf',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-3.jpg',
                                    'title' => 'Artificial Turf Super - V',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-4.jpg',
                                    'title' => 'Artificial Grass Monoturf',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-5.jpg',
                                    'title' => 'Artificial Grass PowerGrass',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-6.jpg',
                                    'title' => 'Artificial Grass DuoGrass',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-1.jpg',
                                    'title' => 'Super C PR Turf',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-2.jpg',
                                    'title' => 'Super V PR Turf',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-3.jpg',
                                    'title' => 'Exclusive Artificial Turf',
                                    'link' => 'single-sport-grass.php',
                                ],
                            ],
                        ],
                        [
                            'icon-1' => '../assets/image/other/icon-8.png',
                            'icon-2' => '../assets/image/other/icon-8b.png',
                            'image' => '../assets/image/other/menu-image-1.jpg',
                            'title' => 'Tennis Grass',
                            'link' => 'single-sport-grass.php',
                            'inner-item' => [
                                [
                                    'image' => '../assets/image/other/menu-image-1.jpg',
                                    'title' => 'Artificial Turf Super - C',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-2.jpg',
                                    'title' => 'Diamond Super - D Turf',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-3.jpg',
                                    'title' => 'Artificial Turf Super - V',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-4.jpg',
                                    'title' => 'Artificial Grass Monoturf',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-5.jpg',
                                    'title' => 'Artificial Grass PowerGrass',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-6.jpg',
                                    'title' => 'Artificial Grass DuoGrass',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-1.jpg',
                                    'title' => 'Super C PR Turf',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-2.jpg',
                                    'title' => 'Super V PR Turf',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-3.jpg',
                                    'title' => 'Exclusive Artificial Turf',
                                    'link' => 'single-sport-grass.php',
                                ],
                            ],
                        ],
                        [
                            'icon-1' => '../assets/image/other/icon-9.png',
                            'icon-2' => '../assets/image/other/icon-9b.png',
                            'image' => '../assets/image/other/menu-image-2.jpg',
                            'title' => 'Golf Grass',
                            'link' => 'single-sport-grass.php',
                            'inner-item' => [
                                [
                                    'image' => '../assets/image/other/menu-image-1.jpg',
                                    'title' => 'Artificial Turf Super - C',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-2.jpg',
                                    'title' => 'Diamond Super - D Turf',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-3.jpg',
                                    'title' => 'Artificial Turf Super - V',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-4.jpg',
                                    'title' => 'Artificial Grass Monoturf',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-5.jpg',
                                    'title' => 'Artificial Grass PowerGrass',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-6.jpg',
                                    'title' => 'Artificial Grass DuoGrass',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-1.jpg',
                                    'title' => 'Super C PR Turf',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-2.jpg',
                                    'title' => 'Super V PR Turf',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-3.jpg',
                                    'title' => 'Exclusive Artificial Turf',
                                    'link' => 'single-sport-grass.php',
                                ],
                            ],
                        ],
                        [
                            'icon-1' => '../assets/image/other/icon-10.png',
                            'icon-2' => '../assets/image/other/icon-10b.png',
                            'image' => '../assets/image/other/menu-image-3.jpg',
                            'title' => 'Rugby Grass',
                            'link' => 'single-sport-grass.php',
                            'inner-item' => [
                                [
                                    'image' => '../assets/image/other/menu-image-1.jpg',
                                    'title' => 'Artificial Turf Super - C',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-2.jpg',
                                    'title' => 'Diamond Super - D Turf',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-3.jpg',
                                    'title' => 'Artificial Turf Super - V',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-4.jpg',
                                    'title' => 'Artificial Grass Monoturf',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-5.jpg',
                                    'title' => 'Artificial Grass PowerGrass',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-6.jpg',
                                    'title' => 'Artificial Grass DuoGrass',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-1.jpg',
                                    'title' => 'Super C PR Turf',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-2.jpg',
                                    'title' => 'Super V PR Turf',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-3.jpg',
                                    'title' => 'Exclusive Artificial Turf',
                                    'link' => 'single-sport-grass.php',
                                ],
                            ],
                        ],
                        [
                            'icon-1' => '../assets/image/other/icon-11.png',
                            'icon-2' => '../assets/image/other/icon-11b.png',
                            'image' => '../assets/image/other/menu-image-1.jpg',
                            'title' => 'Cricket Grass',
                            'link' => 'single-sport-grass.php',
                            'inner-item' => [
                                [
                                    'image' => '../assets/image/other/menu-image-1.jpg',
                                    'title' => 'Artificial Turf Super - C',
                                    'link' => 'single-sport-grass.php',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-2.jpg',
                                    'title' => 'Diamond Super - D Turf',
                                    'link' => 'single-sport-grass.php',
                                ],
                            ],
                        ],
                    ]; ?>
                    <div class="main-inner relative w-full">
                        <div class="split absolute -right-[32px] translate-x-0 w-1 h-full bg-black/10 lg:hidden rtl:right-auto rtl:left-[-32px]"></div>
                        <ul class="mega-menu-main-content relative flex flex-col gap-8 min-xl:scrollbar min-xl:scrollbar-w-[5px] min-xl:scrollbar-track-rounded-[5px] min-xl:scrollbar-thumb-rounded-[5px] min-xl:scrollbar-thumb-main-500 min-xl:scrollbar-track-main-500/10 min-xl:overflow-x-auto min-xl:overflow-y-auto min-xl:max-h-[calc(500px)] pr-5 lg:pr-0 lg:gap-0 rtl:pr-0 rtl:pl-5">
                            <?php foreach ($list as $key => $item) : ?>
                                <!-- BURADA BULUNAN data-id ALANI, BİR SONRAKİ ELEMENT ALANINDA (mega-menu-inner-content) BULUNAN data-id İLE EŞLEŞEREK ÇALIŞMAKTADIR. -->
                                <!-- data-image ALANINDA BULUNAN RESİM, SAĞ TARAFTA BULUNAN RESİM ALANINA BASMAKTADIR. -->
                                <li class="ullier-li z-20 group/li with-data-image lg:relative lg:border-0 lg:border-b lg:border-solid lg:border-black/10 <?php if ($key == 0) : ?>is-active<?php endif; ?>" data-id="<?= $key + 1 ?>" data-image="<?= $item['image'] ?>" data-link="<?= $item['link'] ?>">
                                    <div class="relative">
                                        <a href="page-sport-grass.php" class="flex group/link items-center gap-25 xl:gap-20 px-20 py-[10px] rounded-10 bg-transparent duration-450 relative lg:px-30 lg:pl-40 lg:py-10 [&.is-show]:bg-main-500 lg:rounded-none rtl:pr-[75px]">
                                            <div class="gradient bg-main-500 absolute top-0 left-0 w-full h-full z-2 translate-z-0 rounded-10 opacity-0 duration-450 group-[&.is-active]/li:opacity-100 group-hover/li:opacity-100 pointer-events-none lg:hidden"></div>
                                            <div class="image-field md:hidden shrink-0 flex items-center justify-center rounded-15 duration-450 relative z-2 !ml-0">
                                                <div class="image h-40 lg:h-30 w-40 lg:w-30 overflow-hidden translate-z-0 opacity-100 duration-450 min-lg:group-hover/li:opacity-0 min-lg:group-[&.is-active]/li:opacity-0 lg:group-hover/li:opacity-100 group-[&.is-show]/link:opacity-0 lg:group-hover/li:group-[&.is-show]/link:opacity-0">
                                                    <img src="<?= $item['icon-1'] ?>" class="full-contain" loading="lazy" alt="">
                                                </div>
                                                <div class="image h-40 lg:h-30 w-40 lg:w-30 overflow-hidden translate-z-0 absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 opacity-0 duration-450 min-lg:group-hover/li:opacity-100 min-lg:group-[&.is-active]/li:opacity-100 lg:group-hover/li:opacity-0 group-[&.is-show]/link:opacity-100 lg:group-hover/li:group-[&.is-show]/link:opacity-100">
                                                    <img src="<?= $item['icon-2'] ?>" class="full-contain" loading="lazy" alt="">
                                                </div>
                                            </div>
                                            <span class="text text text-16 sm:text-16 leading-tight text-[#111111] duration-450 group-hover/li:text-white min-lg:group-[&.is-active]/li:text-white lg:font-normal lg:group-hover/li:text-main-500 relative z-2 md:!ml-0 font-light group-[&.is-show]/link:text-white lg:group-hover/li:group-[&.is-show]/link:text-white"><?= $item['title'] ?></span>
                                        </a>
                                        <?php if (isset($item['inner-item'])) : ?>
                                            <div class="sub-trigger-inner group/sub-trigger absolute right-30 top-[11px] w-30 h-30 bg-main-500 justify-center items-center hidden cursor-pointer rounded-default duration-450 [&.is-active]:bg-main-300 lg:group-[&.has-mega-menu]/menu-item:flex z-20 md:top-[5px]">
                                                <div class="icon w-[2px] h-[15px] sm:h-[12px] absolute left-1/2 -translate-x-1/2 bg-white duration-450 group-[&.is-active]/sub-trigger:rotate-90 rounded-full"></div>
                                                <div class="icon w-[15px] h-[2px] sm:w-[12px] bg-white duration-450 rounded-full"></div>
                                            </div>
                                        <?php endif; ?>
                                        <!-- BU ALAN MOBİLDE GÖRÜNEN KISIMDIR -->
                                        <?php if (isset($item['inner-item'])) : ?>
                                            <div class="mm-inner absolute top-0 left-[calc(100%+20px)] w-full h-full opacity-0 invisible duration-450 translate-x-20 group-[&.is-active]/li:opacity-100 group-[&.is-active]/li:visible group-[&.is-active]/li:translate-x-0 group-[&.is-active]/li:delay-450 lg:relative lg:top-auto lg:left-auto lg:opacity-100 lg:translate-x-0 lg:visible lg:hidden hidden">
                                                <ul class="mega-menu-inner-ul flex flex-col gap-8 min-xl:scrollbar min-xl:scrollbar-w-[5px] min-xl:scrollbar-track-rounded-[5px] min-xl:scrollbar-thumb-rounded-[5px] min-xl:scrollbar-thumb-main-500 min-xl:scrollbar-track-main-500/10 min-xl:overflow-x-hidden min-xl:overflow-y-auto max-h-[500px] pr-5 lg:gap-0 lg:[&_li:last-child]:border-b-0 lg:[&_li:first-child]:border-t md:pr-0" data-id="<?= $key + 1 ?>">
                                                    <!-- data-image ALANINDA BULUNAN RESİM, SAĞ TARAFTA BULUNAN RESİM ALANINA BASMAKTADIR. -->
                                                    <?php foreach ($item['inner-item'] as $key => $iitem) : ?>
                                                        <li class="inner-li relative z-20 group/inner-li with-data-image  lg:border-0 lg:border-b lg:border-solid lg:border-black/10" data-image="<?= $iitem['image'] ?>" data-link="<?= $iitem['link'] ?>">
                                                            <div class="gradient bg-main-500 absolute top-1/2 -translate-y-1/2 left-0 w-3 h-0 z-2 translate-z-0 rounded-10 opacity-0 duration-450 group-[&.is-active]/inner-li:opacity-100 group-[&.is-active]/inner-li:h-20"></div>
                                                            <a href="<?= $iitem['link'] ?>" class="flex group/inner-link items-center gap-25 xl:gap-20 p-20 rounded-10 bg-transparent duration-450 min-h-[70px] lg:px-30 lg:pl-50 lg:py-10 lg:min-h-fit pl-[60px]">
                                                                <span class="text text text-16 sm:text-14 leading-tight text-[#111111] duration-450 group-hover/inner-li:text-main-500 group-[&.is-active]/inner-li:text-main-500 lg:font-normal group-hover/inner-li:translate-x-3"><?= $iitem['title'] ?></span>
                                                            </a>
                                                        </li>
                                                    <?php endforeach; ?>
                                                    <li class="inner-li relative z-20 group/inner-li with-data-image bg-main-500 lg:border-0 lg:border-b lg:border-solid lg:border-black/10 duration-450 hover:bg-main-600" data-image="../assets/image/other/menu-image-3.jpg" data-link="<?= $iitem['link'] ?>">
                                                        <a href="page-sport-grass.php" class="flex group/inner-link items-center gap-25 xl:gap-20 p-20 rounded-10 bg-transparent duration-450 min-h-[70px] lg:px-30 lg:pl-50 lg:py-10 lg:min-h-fit pl-[60px]">
                                                            <span class="text text text-16 sm:text-14 leading-tight text-white duration-450 group-hover/inner-li:text-white group-[&.is-active]/inner-li:text-white lg:font-medium group-hover/inner-li:translate-x-3">All <?= $item['title'] ?> Product</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="mm-inner-web relative lg:hidden">
                        <?php foreach ($list as $key => $item) : ?>
                            <?php if (isset($item['inner-item'])) : ?>
                                <ul class="mega-menu-inner-ul-web absolute left-0 top-0 w-full opacity-0 invisible duration-450 [&.is-active]:opacity-100 [&.is-active]:visible [&.is-active]:delay-450 flex flex-col gap-8 min-xl:scrollbar min-xl:scrollbar-w-[5px] min-xl:scrollbar-track-rounded-[5px] min-xl:scrollbar-thumb-rounded-[5px] min-xl:scrollbar-thumb-main-500 min-xl:scrollbar-track-main-500/10 min-xl:overflow-x-hidden min-xl:overflow-y-auto min-xl:max-h-[calc(500px)] pr-5 lg:gap-0 lg:[&_li:last-child]:border-b-0 lg:[&_li:first-child]:border-t md:pr-0 <?php if ($key == 0) : ?>is-active<?php endif; ?>" data-id="<?= $key + 1 ?>">
                                    <!-- data-image ALANINDA BULUNAN RESİM, SAĞ TARAFTA BULUNAN RESİM ALANINA BASMAKTADIR. -->
                                    <?php foreach ($item['inner-item'] as $key => $iitem) : ?>
                                        <li class="inner-li relative z-20 group/inner-li with-data-image  lg:border-0 lg:border-b lg:border-solid lg:border-black/10" data-image="<?= $iitem['image'] ?>" data-link="<?= $iitem['link'] ?>">
                                            <div class="gradient bg-main-500 absolute top-1/2 -translate-y-1/2 left-0 w-3 h-0 z-2 translate-z-0 rounded-10 opacity-0 duration-450 group-hover/inner-li:opacity-100 group-hover/inner-li:h-20 group-[&.is-active]/inner-li:opacity-100 group-[&.is-active]/inner-li:h-20 rtl:left-auto rtl:right-[-5px]"></div>
                                            <a href="<?= $iitem['link'] ?>" class="flex group/inner-link items-center gap-25 xl:gap-20 px-20 py-5 rounded-10 bg-transparent duration-450 min-h-[40px] lg:px-30 lg:pl-50 lg:py-10 lg:min-h-fit pl-[60px]">
                                                <span class="text text text-16 sm:text-14 leading-tight text-[#111111] duration-450 group-hover/inner-li:text-main-500  lg:font-medium group-hover/inner-li:translate-x-3 font-light group-[&.is-active]/inner-li:text-main-500 group-[&.is-active]/inner-li:translate-x-3"><?= $iitem['title'] ?></span>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                    <li class="inner-li relative z-20 group/inner-li with-data-image bg-main-500 lg:border-0 lg:border-b lg:border-solid lg:border-black/10 duration-450 hover:bg-main-600" data-image="../assets/image/other/menu-image-3.jpg" data-link="<?= $iitem['link'] ?>">
                                        <a href="page-sport-grass.php" class="flex group/inner-link items-center gap-25 xl:gap-20 p-20 rounded-10 bg-transparent duration-450 min-h-[60px] lg:px-30 lg:pl-50 lg:py-10 lg:min-h-fit pl-[60px]">
                                            <span class="text text text-16 sm:text-14 leading-tight text-white duration-450 group-hover/inner-li:text-white lg:font-medium group-hover/inner-li:translate-x-3">All <?= $item['title'] ?> Product</span>
                                        </a>
                                    </li>
                                </ul>
                            <?php else : ?>
                                <ul class="mega-menu-inner-ul-web absolute left-0 top-0 w-full opacity-0 invisible duration-450 [&.is-active]:opacity-100 [&.is-active]:visible [&.is-active]:delay-450 flex flex-col gap-8 min-xl:scrollbar min-xl:scrollbar-w-[5px] min-xl:scrollbar-track-rounded-[5px] min-xl:scrollbar-thumb-rounded-[5px] min-xl:scrollbar-thumb-main-500 min-xl:scrollbar-track-main-500/10 min-xl:overflow-x-hidden min-xl:overflow-y-auto min-xl:max-h-[calc(500px)] pr-5 lg:gap-0 lg:[&_li:last-child]:border-b-0 lg:[&_li:first-child]:border-t md:pr-0" data-id="<?= $key + 1 ?>">
                                    <li class="inner-li relative z-20 group/inner-li with-data-image bg-main-500 lg:border-0 lg:border-b lg:border-solid lg:border-black/10 duration-450 hover:bg-main-600" data-image="../assets/image/other/menu-image-3.jpg" data-link="<?= $iitem['link'] ?>">
                                        <a href="page-sport-grass.php" class="flex group/inner-link items-center gap-25 xl:gap-20 p-20 rounded-10 bg-transparent duration-450 min-h-[60px] lg:px-30 lg:pl-50 lg:py-10 lg:min-h-fit pl-[60px]">
                                            <span class="text text text-16 sm:text-14 leading-tight text-white duration-450 group-hover/inner-li:text-white lg:font-medium group-hover/inner-li:translate-x-3">All <?= $item['title'] ?> Product</span>
                                        </a>
                                    </li>
                                </ul>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="image-field flex items-center lg:hidden">
                    <a href="javascript:;" class="mega-menu-image-field image group/image overflow-hidden translate-z-0 h-win-header w-full rounded-20 h-[500px] max-h-[500px">
                        <img src="" class="full-cover duration-450 [&.is-active]:opacity-0 [&.is-active]:scale-110 group-hover/image:scale-110" loading="lazy" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</li>
<li class="menu-item group/menu-item lg:relative has-mega-menu">
    <a href="page.php" class="group/showable flex items-center ltr:gap-10 lg:ltr:gap-0 lg:px-30 lg:py-15 lg:border-0 lg:border-b lg:border-solid lg:border-black/10 duration-450 [&.is-show]:bg-main-500">
        <span class="text text-[#1A1A1A] text-16 sm:text-16 leading-tight duration-450 group-hover/menu-item:text-main-500 font-light lg:font-normal group-[&.is-show]/showable:text-white">Landspace Grass</span>
        <i class="icon icon-chevron-bottom text-[#1A1A1A] text-[10px] h-[10px] leading-none duration-450 hidden group-hover/menu-item:rotate-180 group-hover/menu-item:text-main-500 group-[&.has-mega-menu]/menu-item:block lg:hidden lg:group-[&.has-mega-menu]/menu-item:hidden rtl:mr-10 lg:rtl:mr-0"></i>
    </a>
    <div class="sub-trigger group/sub-trigger absolute right-90 top-[11px] w-30 h-30 bg-main-500 justify-center items-center hidden cursor-pointer rounded-default duration-450 [&.is-active]:bg-main-300 lg:group-[&.has-mega-menu]/menu-item:flex z-20 rtl:left-[20px] rtl:right-auto">
        <div class="icon w-[2px] h-[15px] sm:h-[12px] absolute left-1/2 -translate-x-1/2 bg-white duration-450 group-[&.is-active]/sub-trigger:rotate-90 rounded-full"></div>
        <div class="icon w-[15px] h-[2px] sm:w-[12px] bg-white duration-450 rounded-full"></div>
    </div>
    <div class="mega-menu-content absolute left-1/2 -translate-x-1/2 top-full w-full before:absolute before:left-0 before:w-full before:-top-[calc(30px+40px)] before:h-[calc(30px+40px)] before:bg-transparent opacity-0 duration-450 pointer-events-none translate-y-20 group-hover/menu-item:opacity-100 group-hover/menu-item:pointer-events-auto group-hover/menu-item:translate-y-0 before:duration-450 group-hover/menu-item:before:-top-[calc(50px)] group-hover/menu-item:before:h-[calc(50px)] lg:relative lg:opacity-100 lg:visible lg:translate-y-0 lg:pointer-events-auto lg:shadow-none lg:hidden lg:before:hidden group-[&.is-fixed]/header:before:-top-[calc(30px+10px)] group-[&.is-fixed]/header:before:h-[calc(30px+10px)] max-w-[1600px] mx-auto">
        <div class="container max-w-[1600px] lg:p-0">
            <div class="wrapper p-50 2xl:p-40 xl:px-30 xl:py-10 lg:p-0 grid grid-cols-2 gap-50 lg:grid-cols-1 bg-white rounded-[30px] [box-shadow:_0px_25px_150px_0px_rgba(0,0,0,0.16);] lg:shadow-none relative">
                <div class="background-with-gradient background-with-gradient-fix absolute left-0 bottom-0 w-full pointer-events-none overflow-hidden lg:hidden h-full">
                    <?php $backgroundOpacity = 'opacity-3' ?>
                    <!-- opacity DEĞERİ PANELDEN SEÇİLEBİLİR OLMALI -->
                    <div class="background-logo absolute left-0 top-1/2 -translate-x-1/4 -translate-y-1/2 w-1/2 h-full rotate-[30deg] md:hidden z-20 overflow-hidden mt-[50px] <?= $backgroundOpacity ?>">
                        <div class="image h-full overflow-hidden translate-z-0">
                            <img src="../assets/image/static/background-logo.png" class="full-contain" loading="lazy" alt="">
                        </div>
                    </div>
                </div>
                <div class="content-field grid grid-cols-2 gap-30 lg:grid-cols-1">
                    <?php $list = [
                        [
                            'icon-1' => '../assets/image/other/icon-1.png',
                            'icon-2' => '../assets/image/other/icon-1b.png',
                            'image' => '../assets/image/other/menu-image-6.jpg',
                            'title' => 'Garden Grass',
                            'link' => 'javascript:;',
                            'inner-item' => [
                                [
                                    'image' => '../assets/image/other/menu-image-1.jpg',
                                    'title' => 'Artificial Turf Super - C',
                                    'link' => 'javascript:;',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-2.jpg',
                                    'title' => 'Diamond Super - D Turf',
                                    'link' => 'javascript:;',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-3.jpg',
                                    'title' => 'Artificial Turf Super - V',
                                    'link' => 'javascript:;',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-4.jpg',
                                    'title' => 'Artificial Grass Monoturf',
                                    'link' => 'javascript:;',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-5.jpg',
                                    'title' => 'Artificial Grass PowerGrass',
                                    'link' => 'javascript:;',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-6.jpg',
                                    'title' => 'Artificial Grass DuoGrass',
                                    'link' => 'javascript:;',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-1.jpg',
                                    'title' => 'Super C PR Turf',
                                    'link' => 'javascript:;',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-2.jpg',
                                    'title' => 'Super V PR Turf',
                                    'link' => 'javascript:;',
                                ],
                                [
                                    'image' => '../assets/image/other/menu-image-3.jpg',
                                    'title' => 'Exclusive Artificial Turf',
                                    'link' => 'javascript:;',
                                ],
                            ],
                        ],
                        [
                            'icon-1' => '../assets/image/other/icon-2.png',
                            'icon-2' => '../assets/image/other/icon-2b.png',
                            'image' => '../assets/image/other/menu-image-2.jpg',
                            'title' => 'Playground',
                            'link' => 'javascript:;',
                            'inner-item' => [
                                [
                                    'image' => '../assets/image/other/menu-image-1.jpg',
                                    'title' => 'Playground Product',
                                    'link' => 'javascript:;',
                                ],
                            ],
                        ],
                        [
                            'icon-1' => '../assets/image/other/icon-3.png',
                            'icon-2' => '../assets/image/other/icon-3b.png',
                            'image' => '../assets/image/other/menu-image-3.jpg',
                            'title' => 'Decorative Grass',
                            'link' => 'javascript:;',
                        ],
                    ]; ?>
                    <div class="main-inner relative w-full">
                        <div class="split absolute -right-[32px] translate-x-0 w-1 h-full bg-black/10 lg:hidden rtl:right-auto rtl:left-[-32px]"></div>
                        <ul class="mega-menu-main-content relative flex flex-col gap-8 min-xl:scrollbar min-xl:scrollbar-w-[5px] min-xl:scrollbar-track-rounded-[5px] min-xl:scrollbar-thumb-rounded-[5px] min-xl:scrollbar-thumb-main-500 min-xl:scrollbar-track-main-500/10 min-xl:overflow-x-auto min-xl:overflow-y-auto min-xl:max-h-[calc(500px)] pr-5 lg:pr-0 lg:gap-0 rtl:pr-0 rtl:pl-5">
                            <?php foreach ($list as $key => $item) : ?>
                                <!-- BURADA BULUNAN data-id ALANI, BİR SONRAKİ ELEMENT ALANINDA (mega-menu-inner-content) BULUNAN data-id İLE EŞLEŞEREK ÇALIŞMAKTADIR. -->
                                <!-- data-image ALANINDA BULUNAN RESİM, SAĞ TARAFTA BULUNAN RESİM ALANINA BASMAKTADIR. -->
                                <li class="ullier-li z-20 group/li with-data-image lg:relative lg:border-0 lg:border-b lg:border-solid lg:border-black/10 <?php if ($key == 0) : ?>is-active<?php endif; ?>" data-id="<?= $key + 1 ?>" data-image="<?= $item['image'] ?>" data-link="<?= $item['link'] ?>">
                                    <div class="relative">
                                        <a href="javascript:;" class="flex group/link items-center gap-25 xl:gap-20 px-20 py-[10px] rounded-10 bg-transparent duration-450 relative lg:px-30 lg:pl-40 lg:py-10 [&.is-show]:bg-main-500 lg:rounded-none">
                                            <div class="gradient bg-main-500 absolute top-0 left-0 w-full h-full z-2 translate-z-0 rounded-10 opacity-0 duration-450 group-[&.is-active]/li:opacity-100 group-hover/li:opacity-100 pointer-events-none lg:hidden"></div>
                                            <div class="image-field md:hidden shrink-0 flex items-center justify-center rounded-15 duration-450 relative z-2 !ml-0">
                                                <div class="image h-40 lg:h-30 w-40 lg:w-30 overflow-hidden translate-z-0 opacity-100 duration-450 min-lg:group-hover/li:opacity-0 min-lg:group-[&.is-active]/li:opacity-0 lg:group-hover/li:opacity-100 group-[&.is-show]/link:opacity-0 lg:group-hover/li:group-[&.is-show]/link:opacity-0">
                                                    <img src="<?= $item['icon-1'] ?>" class="full-contain" loading="lazy" alt="">
                                                </div>
                                                <div class="image h-40 lg:h-30 w-40 lg:w-30 overflow-hidden translate-z-0 absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 opacity-0 duration-450 min-lg:group-hover/li:opacity-100 min-lg:group-[&.is-active]/li:opacity-100 lg:group-hover/li:opacity-0 group-[&.is-show]/link:opacity-100 lg:group-hover/li:group-[&.is-show]/link:opacity-100">
                                                    <img src="<?= $item['icon-2'] ?>" class="full-contain" loading="lazy" alt="">
                                                </div>
                                            </div>
                                            <span class="text text text-16 sm:text-16 leading-tight text-[#111111] duration-450 group-hover/li:text-white min-lg:group-[&.is-active]/li:text-white lg:font-normal lg:group-hover/li:text-main-500 relative z-2 md:!ml-0 font-light group-[&.is-show]/link:text-white lg:group-hover/li:group-[&.is-show]/link:text-white"><?= $item['title'] ?></span>
                                        </a>
                                        <?php if (isset($item['inner-item'])) : ?>
                                            <div class="sub-trigger-inner group/sub-trigger absolute right-30 top-[11px] w-30 h-30 bg-main-500 justify-center items-center hidden cursor-pointer rounded-default duration-450 [&.is-active]:bg-main-300 lg:group-[&.has-mega-menu]/menu-item:flex z-20 md:top-[5px] rtl:right-auto rtl:left-[15px]">
                                                <div class="icon w-[2px] h-[15px] sm:h-[12px] absolute left-1/2 -translate-x-1/2 bg-white duration-450 group-[&.is-active]/sub-trigger:rotate-90 rounded-full"></div>
                                                <div class="icon w-[15px] h-[2px] sm:w-[12px] bg-white duration-450 rounded-full"></div>
                                            </div>
                                        <?php endif; ?>
                                        <!-- BU ALAN MOBİLDE GÖRÜNEN KISIMDIR -->
                                        <?php if (isset($item['inner-item'])) : ?>
                                            <div class="mm-inner absolute top-0 left-[calc(100%+20px)] w-full h-full opacity-0 invisible duration-450 translate-x-20 group-[&.is-active]/li:opacity-100 group-[&.is-active]/li:visible group-[&.is-active]/li:translate-x-0 group-[&.is-active]/li:delay-450 lg:relative lg:top-auto lg:left-auto lg:opacity-100 lg:translate-x-0 lg:visible lg:hidden hidden">
                                                <ul class="mega-menu-inner-ul flex flex-col gap-8 min-xl:scrollbar min-xl:scrollbar-w-[5px] min-xl:scrollbar-track-rounded-[5px] min-xl:scrollbar-thumb-rounded-[5px] min-xl:scrollbar-thumb-main-500 min-xl:scrollbar-track-main-500/10 min-xl:overflow-x-hidden min-xl:overflow-y-auto max-h-[500px] pr-5 lg:gap-0 lg:[&_li:last-child]:border-b-0 lg:[&_li:first-child]:border-t md:pr-0" data-id="<?= $key + 1 ?>">
                                                    <!-- data-image ALANINDA BULUNAN RESİM, SAĞ TARAFTA BULUNAN RESİM ALANINA BASMAKTADIR. -->
                                                    <?php foreach ($item['inner-item'] as $key => $iitem) : ?>
                                                        <li class="inner-li relative z-20 group/inner-li with-data-image  lg:border-0 lg:border-b lg:border-solid lg:border-black/10" data-image="<?= $iitem['image'] ?>" data-link="<?= $iitem['link'] ?>">
                                                            <div class="gradient bg-main-500 absolute top-1/2 -translate-y-1/2 left-0 w-3 h-0 z-2 translate-z-0 rounded-10 opacity-0 duration-450 group-[&.is-active]/inner-li:opacity-100 group-[&.is-active]/inner-li:h-20"></div>
                                                            <a href="<?= $iitem['link'] ?>" class="flex group/inner-link items-center gap-25 xl:gap-20 p-20 rounded-10 bg-transparent duration-450 min-h-[70px] lg:px-30 lg:pl-50 lg:py-10 lg:min-h-fit pl-[60px]">
                                                                <span class="text text text-16 sm:text-14 leading-tight text-[#111111] duration-450 group-hover/inner-li:text-main-500 group-[&.is-active]/inner-li:text-main-500 lg:font-normal group-hover/inner-li:translate-x-3"><?= $iitem['title'] ?></span>
                                                            </a>
                                                        </li>
                                                    <?php endforeach; ?>
                                                    <li class="inner-li relative z-20 group/inner-li with-data-image bg-main-500 lg:border-0 lg:border-b lg:border-solid lg:border-black/10 duration-450 hover:bg-main-600" data-image="../assets/image/other/menu-image-3.jpg" data-link="<?= $iitem['link'] ?>">
                                                        <a href="page-sport-grass.php" class="flex group/inner-link items-center gap-25 xl:gap-20 p-20 rounded-10 bg-transparent duration-450 min-h-[70px] lg:px-30 lg:pl-50 lg:py-10 lg:min-h-fit pl-[60px]">
                                                            <span class="text text text-16 sm:text-14 leading-tight text-white duration-450 group-hover/inner-li:text-white group-[&.is-active]/inner-li:text-white lg:font-medium group-hover/inner-li:translate-x-3">All <?= $item['title'] ?> Product</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="mm-inner-web relative lg:hidden">
                        <?php foreach ($list as $key => $item) : ?>
                            <?php if (isset($item['inner-item'])) : ?>
                                <ul class="mega-menu-inner-ul-web absolute left-0 top-0 w-full opacity-0 invisible duration-450 [&.is-active]:opacity-100 [&.is-active]:visible [&.is-active]:delay-450 flex flex-col gap-8 min-xl:scrollbar min-xl:scrollbar-w-[5px] min-xl:scrollbar-track-rounded-[5px] min-xl:scrollbar-thumb-rounded-[5px] min-xl:scrollbar-thumb-main-500 min-xl:scrollbar-track-main-500/10 min-xl:overflow-x-hidden min-xl:overflow-y-auto min-xl:max-h-[calc(500px)] pr-5 lg:gap-0 lg:[&_li:last-child]:border-b-0 lg:[&_li:first-child]:border-t md:pr-0 <?php if ($key == 0) : ?>is-active<?php endif; ?>" data-id="<?= $key + 1 ?>">
                                    <!-- data-image ALANINDA BULUNAN RESİM, SAĞ TARAFTA BULUNAN RESİM ALANINA BASMAKTADIR. -->
                                    <?php foreach ($item['inner-item'] as $key => $iitem) : ?>
                                        <li class="inner-li relative z-20 group/inner-li with-data-image  lg:border-0 lg:border-b lg:border-solid lg:border-black/10" data-image="<?= $iitem['image'] ?>" data-link="<?= $iitem['link'] ?>">
                                            <div class="gradient bg-main-500 absolute top-1/2 -translate-y-1/2 left-0 w-3 h-0 z-2 translate-z-0 rounded-10 opacity-0 duration-450 group-hover/inner-li:opacity-100 group-hover/inner-li:h-20 group-[&.is-active]/inner-li:opacity-100 group-[&.is-active]/inner-li:h-20 rtl:left-auto rtl:right-[-5px]"></div>
                                            <a href="<?= $iitem['link'] ?>" class="flex group/inner-link items-center gap-25 xl:gap-20 px-20 py-5 rounded-10 bg-transparent duration-450 min-h-[40px] lg:px-30 lg:pl-50 lg:py-10 lg:min-h-fit pl-[60px]">
                                                <span class="text text text-16 sm:text-14 leading-tight text-[#111111] duration-450 group-hover/inner-li:text-main-500  lg:font-medium group-hover/inner-li:translate-x-3 font-light group-[&.is-active]/inner-li:text-main-500 group-[&.is-active]/inner-li:translate-x-3"><?= $iitem['title'] ?></span>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                    <li class="inner-li relative z-20 group/inner-li with-data-image bg-main-500 lg:border-0 lg:border-b lg:border-solid lg:border-black/10 duration-450 hover:bg-main-600" data-image="../assets/image/other/menu-image-3.jpg" data-link="<?= $iitem['link'] ?>">
                                        <a href="page-sport-grass.php" class="flex group/inner-link items-center gap-25 xl:gap-20 p-20 rounded-10 bg-transparent duration-450 min-h-[60px] lg:px-30 lg:pl-50 lg:py-10 lg:min-h-fit pl-[60px]">
                                            <span class="text text text-16 sm:text-14 leading-tight text-white duration-450 group-hover/inner-li:text-white lg:font-medium group-hover/inner-li:translate-x-3">All <?= $item['title'] ?> Product</span>
                                        </a>
                                    </li>
                                </ul>
                            <?php else : ?>
                                <ul class="mega-menu-inner-ul-web absolute left-0 top-0 w-full opacity-0 invisible duration-450 [&.is-active]:opacity-100 [&.is-active]:visible [&.is-active]:delay-450 flex flex-col gap-8 min-xl:scrollbar min-xl:scrollbar-w-[5px] min-xl:scrollbar-track-rounded-[5px] min-xl:scrollbar-thumb-rounded-[5px] min-xl:scrollbar-thumb-main-500 min-xl:scrollbar-track-main-500/10 min-xl:overflow-x-hidden min-xl:overflow-y-auto min-xl:max-h-[calc(500px)] pr-5 lg:gap-0 lg:[&_li:last-child]:border-b-0 lg:[&_li:first-child]:border-t md:pr-0" data-id="<?= $key + 1 ?>">
                                    <li class="inner-li relative z-20 group/inner-li with-data-image bg-main-500 lg:border-0 lg:border-b lg:border-solid lg:border-black/10 duration-450 hover:bg-main-600" data-image="../assets/image/other/menu-image-3.jpg" data-link="<?= $iitem['link'] ?>">
                                        <a href="page-sport-grass.php" class="flex group/inner-link items-center gap-25 xl:gap-20 p-20 rounded-10 bg-transparent duration-450 min-h-[60px] lg:px-30 lg:pl-50 lg:py-10 lg:min-h-fit pl-[60px]">
                                            <span class="text text text-16 sm:text-14 leading-tight text-white duration-450 group-hover/inner-li:text-white lg:font-medium group-hover/inner-li:translate-x-3">All <?= $item['title'] ?> Product</span>
                                        </a>
                                    </li>
                                </ul>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="image-field flex items-center lg:hidden">
                    <a href="javascript:;" class="mega-menu-image-field image group/image overflow-hidden translate-z-0 h-win-header w-full rounded-20 h-[500px] max-h-[500px">
                        <img src="" class="full-cover duration-450 [&.is-active]:opacity-0 [&.is-active]:scale-110 group-hover/image:scale-110" loading="lazy" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</li>
<li class="menu-item group/menu-item lg:relative has-mega-menu">
    <a href="page-usage-areas.php" class="group/showable flex items-center ltr:gap-10 lg:ltr:gap-0 lg:px-30 lg:py-15 lg:border-0 lg:border-b lg:border-solid lg:border-black/10 duration-450 [&.is-show]:bg-main-500">
        <span class="text text-[#1A1A1A] text-16 sm:text-16 leading-tight duration-450 group-hover/menu-item:text-main-500 font-light lg:font-normal group-[&.is-show]/showable:text-white">Using Areas</span>
        <i class="icon icon-chevron-bottom text-[#1A1A1A] text-[10px] h-[10px] leading-none duration-450 hidden group-hover/menu-item:rotate-180 group-hover/menu-item:text-main-500 group-[&.has-mega-menu]/menu-item:block lg:hidden lg:group-[&.has-mega-menu]/menu-item:hidden rtl:mr-10 lg:rtl:mr-0"></i>
    </a>
    <div class="sub-trigger group/sub-trigger absolute right-90 top-[11px] w-30 h-30 bg-main-500 justify-center items-center hidden cursor-pointer rounded-default duration-450 [&.is-active]:bg-main-300 lg:group-[&.has-mega-menu]/menu-item:flex z-20 rtl:left-[20px] rtl:right-auto">
        <div class="icon w-[2px] h-[15px] sm:h-[12px] absolute left-1/2 -translate-x-1/2 bg-white duration-450 group-[&.is-active]/sub-trigger:rotate-90 rounded-full"></div>
        <div class="icon w-[15px] h-[2px] sm:w-[12px] bg-white duration-450 rounded-full"></div>
    </div>
    <div class="mega-menu-content absolute left-1/2 -translate-x-1/2 top-full w-full before:absolute before:left-0 before:w-full before:-top-[calc(30px+40px)] before:h-[calc(30px+40px)] before:bg-transparent opacity-0 duration-450 pointer-events-none translate-y-20 group-hover/menu-item:opacity-100 group-hover/menu-item:pointer-events-auto group-hover/menu-item:translate-y-0 before:duration-450 group-hover/menu-item:before:-top-[calc(50px)] group-hover/menu-item:before:h-[calc(50px)] lg:relative lg:opacity-100 lg:visible lg:translate-y-0 lg:pointer-events-auto lg:shadow-none lg:hidden lg:before:hidden group-[&.is-fixed]/header:before:-top-[calc(30px+10px)] group-[&.is-fixed]/header:before:h-[calc(30px+10px)] max-w-[1600px] mx-auto">
        <div class="container max-w-[1600px] lg:p-0">
            <div class="wrapper p-50 2xl:p-40 xl:px-30 xl:py-10 lg:p-0 grid grid-cols-[minmax(0,3fr)_minmax(0,9fr)] gap-50 lg:grid-cols-1 bg-white rounded-[30px] [box-shadow:_0px_25px_150px_0px_rgba(0,0,0,0.16);] lg:shadow-none relative">
                <div class="background-with-gradient background-with-gradient-fix absolute left-0 bottom-0 w-full pointer-events-none overflow-hidden lg:hidden h-full">
                    <?php $backgroundOpacity = 'opacity-3' ?>
                    <!-- opacity DEĞERİ PANELDEN SEÇİLEBİLİR OLMALI -->
                    <div class="background-logo absolute left-0 top-1/2 -translate-x-1/4 -translate-y-1/2 w-1/2 h-full rotate-[30deg] md:hidden z-20 overflow-hidden mt-[50px] <?= $backgroundOpacity ?>">
                        <div class="image h-full overflow-hidden translate-z-0">
                            <img src="../assets/image/static/background-logo.png" class="full-contain" loading="lazy" alt="">
                        </div>
                    </div>
                </div>
                <div class="content-field grid grid-cols-1 gap-30 lg:grid-cols-1">
                    <?php $list = [
                        [
                            'icon-1' => '../assets/image/other/icon-4.png',
                            'icon-2' => '../assets/image/other/icon-4b.png',
                            'image' => '../assets/image/other/menu-image-2.jpg',
                            'title' => 'Football Grass',
                            'link' => 'single-usage-area.php',
                        ],
                        [
                            'icon-1' => '../assets/image/other/icon-5.png',
                            'icon-2' => '../assets/image/other/icon-5b.png',
                            'image' => '../assets/image/other/menu-image-1.jpg',
                            'title' => 'Hybird Grass',
                            'link' => 'single-usage-area.php',
                        ],
                        [
                            'icon-1' => '../assets/image/other/icon-6.png',
                            'icon-2' => '../assets/image/other/icon-6b.png',
                            'image' => '../assets/image/other/menu-image-3.jpg',
                            'title' => 'Multipurpose Grass',
                            'link' => 'single-usage-area.php',
                        ],
                        [
                            'icon-1' => '../assets/image/other/icon-7.png',
                            'icon-2' => '../assets/image/other/icon-7b.png',
                            'image' => '../assets/image/other/menu-image-2.jpg',
                            'title' => 'Padel Turf',
                            'link' => 'single-usage-area.php',
                        ],
                        [
                            'icon-1' => '../assets/image/other/icon-8.png',
                            'icon-2' => '../assets/image/other/icon-8b.png',
                            'image' => '../assets/image/other/menu-image-1.jpg',
                            'title' => 'Tennis Grass',
                            'link' => 'single-usage-area.php',
                        ],
                        [
                            'icon-1' => '../assets/image/other/icon-9.png',
                            'icon-2' => '../assets/image/other/icon-9b.png',
                            'image' => '../assets/image/other/menu-image-2.jpg',
                            'title' => 'Golf Grass',
                            'link' => 'single-usage-area.php',
                        ],
                        [
                            'icon-1' => '../assets/image/other/icon-10.png',
                            'icon-2' => '../assets/image/other/icon-10b.png',
                            'image' => '../assets/image/other/menu-image-3.jpg',
                            'title' => 'Rugby Grass',
                            'link' => 'single-usage-area.php',
                        ],
                        [
                            'icon-1' => '../assets/image/other/icon-11.png',
                            'icon-2' => '../assets/image/other/icon-11b.png',
                            'image' => '../assets/image/other/menu-image-1.jpg',
                            'title' => 'Cricket Grass',
                            'link' => 'single-usage-area.php',
                        ],
                    ]; ?>
                    <div class="main-inner relative w-full">
                        <div class="split absolute -right-[32px] translate-x-0 w-1 h-full bg-black/10 lg:hidden rtl:right-auto rtl:left-[-32px]"></div>
                        <ul class="mega-menu-main-content relative flex flex-col gap-8 min-xl:scrollbar min-xl:scrollbar-w-[5px] min-xl:scrollbar-track-rounded-[5px] min-xl:scrollbar-thumb-rounded-[5px] min-xl:scrollbar-thumb-main-500 min-xl:scrollbar-track-main-500/10 min-xl:overflow-x-auto min-xl:overflow-y-auto min-xl:max-h-[calc(500px)] pr-5 lg:pr-0 lg:gap-0 rtl:pr-0 rtl:pl-5">
                            <?php foreach ($list as $key => $item) : ?>
                                <!-- BURADA BULUNAN data-id ALANI, BİR SONRAKİ ELEMENT ALANINDA (mega-menu-inner-content) BULUNAN data-id İLE EŞLEŞEREK ÇALIŞMAKTADIR. -->
                                <!-- data-image ALANINDA BULUNAN RESİM, SAĞ TARAFTA BULUNAN RESİM ALANINA BASMAKTADIR. -->
                                <li class="ullier-li z-20 group/li with-data-image lg:relative lg:border-0 lg:border-b lg:border-solid lg:border-black/10" data-id="<?= $key + 1 ?>" data-image="<?= $item['image'] ?>" data-link="<?= $item['link'] ?>">
                                    <div class="relative">
                                        <a href="single-usage-area.php" class="flex group/link items-center gap-25 xl:gap-20 px-20 py-[10px] rounded-10 bg-transparent duration-450 relative lg:px-30 lg:pl-40 lg:py-10 [&.is-show]:bg-main-500 lg:rounded-none">
                                            <div class="gradient bg-main-500 absolute top-0 left-0 w-full h-full z-2 translate-z-0 rounded-10 opacity-0 duration-450 group-[&.is-active]/li:opacity-100 group-hover/li:opacity-100 pointer-events-none lg:hidden"></div>
                                            <div class="image-field md:hidden shrink-0 flex items-center justify-center rounded-15 duration-450 relative z-2 !ml-0">
                                                <div class="image h-40 lg:h-30 w-40 lg:w-30 overflow-hidden translate-z-0 opacity-100 duration-450 min-lg:group-hover/li:opacity-0 min-lg:group-[&.is-active]/li:opacity-0 lg:group-hover/li:opacity-100 group-[&.is-show]/link:opacity-0 lg:group-hover/li:group-[&.is-show]/link:opacity-0">
                                                    <img src="<?= $item['icon-1'] ?>" class="full-contain" loading="lazy" alt="">
                                                </div>
                                                <div class="image h-40 lg:h-30 w-40 lg:w-30 overflow-hidden translate-z-0 absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 opacity-0 duration-450 min-lg:group-hover/li:opacity-100 min-lg:group-[&.is-active]/li:opacity-100 lg:group-hover/li:opacity-0 group-[&.is-show]/link:opacity-100 lg:group-hover/li:group-[&.is-show]/link:opacity-100">
                                                    <img src="<?= $item['icon-2'] ?>" class="full-contain" loading="lazy" alt="">
                                                </div>
                                            </div>
                                            <span class="text text text-16 sm:text-16 leading-tight text-[#111111] duration-450 group-hover/li:text-white min-lg:group-[&.is-active]/li:text-white lg:font-normal lg:group-hover/li:text-main-500 relative z-2 md:!ml-0 font-light group-[&.is-show]/link:text-white lg:group-hover/li:group-[&.is-show]/link:text-white"><?= $item['title'] ?></span>
                                        </a>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="image-field flex items-center lg:hidden">
                    <a href="javascript:;" class="mega-menu-image-field image group/image overflow-hidden translate-z-0 h-win-header w-full rounded-20 h-[500px] max-h-[500px">
                        <img src="" class="full-cover duration-450 [&.is-active]:opacity-0 [&.is-active]:scale-110 group-hover/image:scale-110" loading="lazy" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</li>
<li class="menu-item group/menu-item lg:relative has-mega-menu">
    <a href="page-services.php" class="group/showable flex items-center ltr:gap-10 lg:ltr:gap-0 lg:px-30 lg:py-15 lg:border-0 lg:border-b lg:border-solid lg:border-black/10 duration-450 [&.is-show]:bg-main-500">
        <span class="text text-[#1A1A1A] text-16 sm:text-16 leading-tight duration-450 group-hover/menu-item:text-main-500 font-light lg:font-normal group-[&.is-show]/showable:text-white">Services</span>
        <i class="icon icon-chevron-bottom text-[#1A1A1A] text-[10px] h-[10px] leading-none duration-450 hidden group-hover/menu-item:rotate-180 group-hover/menu-item:text-main-500 group-[&.has-mega-menu]/menu-item:block lg:hidden lg:group-[&.has-mega-menu]/menu-item:hidden rtl:mr-10 lg:rtl:mr-0"></i>
    </a>
    <div class="sub-trigger group/sub-trigger absolute right-90 top-[11px] w-30 h-30 bg-main-500 justify-center items-center hidden cursor-pointer rounded-default duration-450 [&.is-active]:bg-main-300 lg:group-[&.has-mega-menu]/menu-item:flex z-20 rtl:left-[20px] rtl:right-auto">
        <div class="icon w-[2px] h-[15px] sm:h-[12px] absolute left-1/2 -translate-x-1/2 bg-white duration-450 group-[&.is-active]/sub-trigger:rotate-90 rounded-full"></div>
        <div class="icon w-[15px] h-[2px] sm:w-[12px] bg-white duration-450 rounded-full"></div>
    </div>
    <div class="mega-menu-content absolute left-1/2 -translate-x-1/2 top-full w-full before:absolute before:left-0 before:w-full before:-top-[calc(30px+40px)] before:h-[calc(30px+40px)] before:bg-transparent opacity-0 duration-450 pointer-events-none translate-y-20 group-hover/menu-item:opacity-100 group-hover/menu-item:pointer-events-auto group-hover/menu-item:translate-y-0 before:duration-450 group-hover/menu-item:before:-top-[calc(50px)] group-hover/menu-item:before:h-[calc(50px)] lg:relative lg:opacity-100 lg:visible lg:translate-y-0 lg:pointer-events-auto lg:shadow-none lg:hidden lg:before:hidden group-[&.is-fixed]/header:before:-top-[calc(30px+10px)] group-[&.is-fixed]/header:before:h-[calc(30px+10px)] max-w-[1600px] mx-auto">
        <div class="container max-w-[1600px] lg:p-0">
            <div class="wrapper p-50 2xl:p-40 xl:px-0 lg:py-0 bg-white rounded-[30px] [box-shadow:_0px_25px_150px_0px_rgba(0,0,0,0.16);] lg:shadow-none">
                <!-- BU ALANA İSTENİLDİĞİ KADAR ALT MENÜ EKLENEBİLİR. -->
                <?php $list = [
                    [
                        'icon-1' => '../assets/image/other/icon-1.png',
                        'icon-2' => '../assets/image/other/icon-1b.png',
                        'title' => 'Design',
                        'expo' => 'Get to Know Us Learn more about us.',
                        'link' => 'single-service.php'
                    ],
                    [
                        'icon-1' => '../assets/image/other/icon-2.png',
                        'icon-2' => '../assets/image/other/icon-2b.png',
                        'title' => 'Installation',
                        'expo' => 'Get to Know Us Learn more about us.',
                        'link' => 'single-service.php'
                    ],
                    [
                        'icon-1' => '../assets/image/other/icon-3.png',
                        'icon-2' => '../assets/image/other/icon-3b.png',
                        'title' => 'Maintenance',
                        'expo' => 'Get to Know Us Learn more about us.',
                        'link' => 'single-service.php'
                    ],
                    [
                        'icon-1' => '../assets/image/other/icon-1.png',
                        'icon-2' => '../assets/image/other/icon-1b.png',
                        'title' => 'Turnkey Projects',
                        'expo' => 'Get to Know Us Learn more about us.',
                        'link' => 'single-service.php'
                    ],
                    [
                        'icon-1' => '../assets/image/other/icon-2.png',
                        'icon-2' => '../assets/image/other/icon-2b.png',
                        'title' => 'Renovations',
                        'expo' => 'Get to Know Us Learn more about us.',
                        'link' => 'single-service.php'
                    ],
                ]; ?>

                <!-- BURADAKİ YAPI 1'Lİ GÖSTERİLMEK İSTENİYORSA; grid-cols-1 EKLENİR. -->
                <!-- BURADAKİ YAPI 2'Lİ GÖSTERİLMEK İSTENİYORSA; grid-cols-2 EKLENİR. -->
                <!-- BURADAKİ YAPI 3'LÜ GÖSTERİLMEK İSTENİYORSA; grid-cols-3 EKLENİR. -->
                <ul class="grid grid-cols-3 gap-x-100 lg:grid-cols-1 2xl:gap-x-100 xl:gap-x-50 gap-y-30 scrollbar scrollbar-w-[5px] scrollbar-track-rounded-[5px] scrollbar-thumb-rounded-[5px] scrollbar-thumb-main-500 scrollbar-track-main-500/10 overflow-x-hidden overflow-y-auto max-h-[500px] lg:max-h-full pr-5 lg:gap-0">
                    <!-- ALANA ÇOK FAZLA İÇERİK EKLENİRSE, OTOMATİK SCROLL OLUYOR -->
                    <?php foreach ($list as $key => $item) : ?>
                        <li>
                            <a href="<?= $item['link'] ?>" class="flex group/link lg:px-30 lg:border-0 lg:border-b lg:border-solid lg:border-black/10 lg:py-10 lg:pl-[40px]">
                                <div class="content flex gap-30 xl:gap-20 md:gap-0">
                                    <div class="image-field h-150 w-150 xl:h-100 xl:w-100 lg:w-75 lg:h-75 md:hidden shrink-0 flex items-center justify-center bg-[#F1F1F1] rounded-15 duration-450 group-hover/link:bg-main-500 relative">
                                        <div class="image h-60 lg:h-50 w-60 lg:w-50 overflow-hidden translate-z-0 opacity-100 duration-450 group-hover/link:opacity-0">
                                            <img src="<?= $item['icon-1'] ?>" class="full-contain" loading="lazy" alt="">
                                        </div>
                                        <div class="image h-60 lg:h-50 w-60 lg:w-50 overflow-hidden translate-z-0 absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 opacity-0 duration-450 group-hover/link:opacity-100">
                                            <img src="<?= $item['icon-2'] ?>" class="full-contain" loading="lazy" alt="">
                                        </div>
                                    </div>
                                    <div class="text-field flex flex-col justify-center gap-30 xl:gap-20 md:gap-10">
                                        <p class="title text-20 lg:text-16 sm:text-16 leading-tight text-[#111111] duration-450 group-hover/link:text-main-500 font-semibold lg:font-normal"><?= $item['title'] ?></p>
                                        <p class="expo text-16 lg:text-14 font-light leading-tight text-[#111111] duration-450 lg:hidden"><?= $item['expo'] ?></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</li>
<li class="menu-item group/menu-item lg:relative">
    <a href="page-projects.php" class="group/showable flex items-center ltr:gap-10 lg:ltr:gap-0 lg:px-30 lg:py-15 lg:border-0 lg:border-b lg:border-solid lg:border-black/10 [& duration-450.is-show]:bg-main-500">
        <span class="text text-[#1A1A1A] text-16 sm:text-16 leading-tight duration-450 group-hover/menu-item:text-main-500 font-light lg:font-normal group-[&.is-show]/showable:text-white">Projects</span>
        <i class="icon icon-chevron-bottom text-[#1A1A1A] text-[10px] h-[10px] leading-none duration-450 hidden group-hover/menu-item:rotate-180 group-hover/menu-item:text-main-500 group-[&.has-mega-menu]/menu-item:block lg:hidden lg:group-[&.has-mega-menu]/menu-item:hidden rtl:mr-10 lg:rtl:mr-0"></i>
    </a>
</li>
<li class="menu-item group/menu-item lg:relative">
    <a href="page-blog.php" class="group/showable flex items-center ltr:gap-10 lg:ltr:gap-0 lg:px-30 lg:py-15 lg:border-0 lg:border-b lg:border-solid lg:border-black/10 duration-450 [&.is-show]:bg-main-500">
        <span class="text text-[#1A1A1A] text-16 sm:text-16 leading-tight duration-450 group-hover/menu-item:text-main-500 font-light lg:font-normal group-[&.is-show]/showable:text-white">News</span>
        <i class="icon icon-chevron-bottom text-[#1A1A1A] text-[10px] h-[10px] leading-none duration-450 hidden group-hover/menu-item:rotate-180 group-hover/menu-item:text-main-500 group-[&.has-mega-menu]/menu-item:block lg:hidden lg:group-[&.has-mega-menu]/menu-item:hidden rtl:mr-10 lg:rtl:mr-0"></i>
    </a>
</li>
<li class="menu-item group/menu-item lg:relative">
    <a href="page-contact.php" class="group/showable flex items-center ltr:gap-10 lg:ltr:gap-0 lg:px-30 lg:py-15 lg:border-0 lg:border-b lg:border-solid lg:border-black/10 duration-450 [&.is-show]:bg-main-500">
        <span class="text text-[#1A1A1A] text-16 sm:text-16 leading-tight duration-450 group-hover/menu-item:text-main-500 font-light lg:font-normal group-[&.is-show]/showable:text-white">Contact</span>
        <i class="icon icon-chevron-bottom text-[#1A1A1A] text-[10px] h-[10px] leading-none duration-450 hidden group-hover/menu-item:rotate-180 group-hover/menu-item:text-main-500 group-[&.has-mega-menu]/menu-item:block lg:hidden lg:group-[&.has-mega-menu]/menu-item:hidden rtl:mr-10 lg:rtl:mr-0"></i>
    </a>
</li>