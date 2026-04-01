@extends('layouts.main')

@section('content')
<?php 
$pageName = $category->title;
$breadcrumbTitle = $category->title;
$breadcrumbType = "image";
$breadcrumbSRC = "../assets/image/other/blog-2.jpg";
$breadcrumbImage = $menu->image;
$pageTitle = $category->title;
//dd($categories);
?>

<main class="main-field bg-[#F6F6F6]">
    <!-- BREADCRUMB -->
    <?php $title = $pageTitle; 
    $expo = 'Where Excellence Turns Green!';
    $navigation = ['Home' => env('HTTP_DOMAIN'), $breadcrumbTitle => 'javascript:;'];
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
    <section class="sport-grass-section py-120 xl:py-80 lg:py-60 md:py-45 sm:py-30 relative mb-[60px] lg:mb-[50px] md:mb-[40px] sm:mb-[30px]">
        <div class="container max-w-[1500px] relative z-20">
            <div class="wrapper grid grid-cols-[minmax(0,445px)_minmax(0,8fr)] gap-[60px] lg:gap-[50px] md:gap-[40px] sm:gap-[30px] md:grid-cols-1">
                <div class="sidebar md:order-1">
                    <div class="dynamic-sticky">
                        <form action="">
                            <div class="show-content content bg-white p-[20px] rounded-[10px] grid grid-cols-1 gap-[20px]">
                                <div class="show-all-filter hidden md:block">
                                    <a href="javascript:;" class="button button-show-filter group/button w-full h-[50px] sm:h-[50px] flex justify-center items-center px-[30px] rounded-full bg-main-500 relative gap-30 duration-450 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-600 hover:before:left-0 before:duration-450" data-show="Show Filter" data-hide="Hide Filter">
                                        <div class="text text-16 flex items-center text-white relative z-10 leading-tight duration-450 group-hover/button:text-white">Show Filter</div>
                                    </a>
                                </div>
                                

                                <div class="inner-filter grid grid-cols-1 gap-[20px] srb-short-all md:hidden [&.is-active]:!grid">
                                    <?php foreach ($categories as $key => $item) : ?>
                                        <div class="widget-bar group/widget-bar">
                                            <div class="widget-title group/wt bg-[#F3F9F5] p-[25px] md:p-[20px] rounded-[10px] relative cursor-pointer duration-450 [&.is-active]:bg-[#e8fff0]">
                                                <p class="title text-[22px] md:text-[20px] sm:text-[18px] leading-tight font-semibold text-main-500 pr-[45px]"><?= $item['title'] ?></p>
                                                <div class="sub-trigger-widget group/sub-trigger absolute right-[25px] md:right-[20px] top-1/2 -translate-y-1/2 w-30 h-30 bg-main-500 justify-center items-center flex cursor-pointer rounded-default duration-450 group-[&.is-active]/wt:bg-main-300 md:flex z-20 sm:w-[24px] sm:h-[24px] sm:rounded-[3px]">
                                                    <div class="icon w-[2px] h-[15px] sm:h-[8px] absolute left-1/2 -translate-x-1/2 bg-white duration-450 rotate-90 group-[&.is-active]/wt:rotate-0 md:rotate-0 md:group-[&.is-active]/wt:rotate-90 rounded-full"></div>
                                                    <div class="icon w-[15px] h-[2px] sm:w-[8px] bg-white duration-450 rounded-full"></div>
                                                </div>
                                            </div>
                                            <div class="widget-content md:hidden">
                                                <div class="field-content flex flex-col gap-[30px] py-[20px] px-[20px] pb-0">
                                                    <?php foreach ($item->children as $childKey => $childItem) : ?>
                                                        <div class="field-box custom-checkbox-input relative flex group/item">
                                                            <!-- SEÇİLENE ACTIVE CLASSI EKLENİR -->
                                                            <a href="javascript:;" class="group/link flex items-center relative">
                                                                <input type="checkbox" id="checkbox-<?= $key ?>-<?= $childKey ?>" class="peer checkbox-content cursor-pointer absolute left-0 top-0 w-full h-full opacity-0 z-10">
                                                                <div class="box relative shrink-0 h-20 w-20 before:absolute before:duration-450 before:scale-0 before:opacity-0 before:left-[50%] before:top-[50%] before:translate-x-[-50%] before:translate-y-[-50%] before:w-[40%] before:h-[40%] before:bg-main-500 duration-450 shadow-[0_0_0_1px_rgb(34_34_34/.15)] group-hover/link:shadow-[0_0_0_1px_rgb(34_34_34/.5)] border-0 bg-transparent group-[&.error]/link:shadow-[0_0_0_1px_rgba(255_0_0/100)] rounded-[3px] before:rounded-[3px] mr-10 rtl:mr-0 rtl:ml-10 peer-checked:before:!opacity-100 peer-checked:before:!scale-100 peer-checked:!shadow-[0_0_0_1px_rgb(0_136_38/1)]"></div>
                                                                <div class="text text-16 text-[#000000] font-light duration-45  group-hover/link:text-main-5００ group-[&.is-active]/link:font-medium group-[&.is-active]/link:text-main-5００ peer-checked:text-main-5００ group-[&.error]/link:text-red-5００"><?= $childItem['title'] ?></div>
                                                            </a>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                    <div class="button-field flex flex-col gap-[20px]">
                                        <a href="javascript:;" class="button button-filter group/button w-full h-[50px] sm:h-[50px] flex justify-center items-center px-[30px] rounded-full bg-main-500 relative gap-30 duration-450 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-600 hover:before:left-0 before:duration-450">
                                            <div class="text text-16 flex items-center text-white relative z-10 leading-tight duration-450 group-hover/button:text-white">Filter</div>
                                        </a>
                                        <a href="javascript:;" class="button button-show-all group/button w-full h-[50px] sm:h-[50px] flex justify-center items-center px-[30px] rounded-full bg-main-500 relative gap-30 duration-450 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-600 hover:before:left-0 before:duration-450">
                                            <div class="text text-16 flex items-center text-white relative z-10 leading-tight duration-450 group-hover/button:text-white">Show All</div>
                                        </a>
                                        <a href="javascript:;" class="button button-clear group/button w-full h-[50px] sm:h-[50px] flex justify-center items-center px-[30px] rounded-full bg-red-500 relative gap-30 duration-450 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-red-600 hover:before:left-0 before:duration-450">
                                            <div class="text text-16 flex items-center text-white relative z-10 leading-tight duration-450 group-hover/button:text-white">Filter Clear</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="page-content md:order-2">
                    <div class="top-field flex justify-between md:flex-col gap-[20px] relative pb-20">
                        <div class="title-field flex flex-col justify-center">
                            <p class="title text-18 text-[#111111] leading-tight">Product Results: <strong>{{ $category->product->count() }}</strong></p>
                        </div>
                        <div class="form-wrapper grid grid-cols-2 md:grid-cols-1 gap-100 xl:gap-50 lg:gap-40 md:gap-30 sm:gap-20">
                            <div class="item group/item col-span-2 md:col-span-1 relative">
                                <input id="product-name" type="text" class="block h-[60px] px-20 sm:px-20 min-w-[380px] sm:min-w-full w-full text-16 text-[#000000] bg-transparent rounded-full appearance-none focus:outline-none focus:ring-0 placeholder:text-[#111111]/75 placeholder:duration-450 hover:placeholder:text-[#111111]/50 focus:text-[#111111] duration-450 pr-[70px] hover:shadow-default-light focus:shadow-default-light border border-solid border-black/10 hover:border-transparent focus:border-main-500/50 group-[&.error]/item:border-red-500 sm:h-50" placeholder="Product Name">
                                <div class="button-field absolute top-1/2 -translate-y-1/2 right-[10px]">
                                    <button class="button group/button w-[50px] h-[50px] sm:w-[40px] sm:h-[40px] flex justify-center items-center rounded-full relative gap-30 duration-350 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:duration-350 [&_span]:font-semibold hover:before:left-0 bg-main-500 shadow-[inset_0_0_0_1px_var(--main-500)] before:bg-main-600 hover:shadow-[inset_0_0_0_1px_var(--main-600)]">
                                        <i class="icon icon-search text-[18px] h-[18px] sm:text-[14px] sm:h-[14px] text-white block leading-none duration-350 group-hover/button:text-white relative z-2"></i>
                                    </button>
                                </div>
                                <div class="tooltip hidden text-[14px] absolute left-15 top-full -translate-y-1/2 w-fit h-fit rounded-5 border border-solid border-red-500 text-red-500 bg-white px-15 py-5 group-[&.error]/item:block z-10 leading-tight">Error</div>
                            </div>
                        </div>
                        <div class="split w-full h-1 bg-black/10 absolute left-0 bottom-0"></div>
                    </div>
                    <div class="content-field mt-[30px] sm:mt-[20px]">
                        <div class="cotent-wrapper grid grid-cols-2 lg:grid-cols-1 md:grid-cols-2 sm:grid-cols-1 gap-30 srb-short-all">

                            <?php foreach ($products as $key => $item) : ?>
                                <a href="<?= env('HTTP_DOMAIN') .'/'. $category->seo_url .'/'. $item['seo_url'] ?>" class="sport-grass-item item group/item">
                                    <div class="content bg-white rounded-[20px] duration-450 group-hover/item:[box-shadow:_0px_20px_50px_0px_rgba(0,0,0,0.1)] group-hover/item:-translate-y-[5px] border border-solid border-[#111111]/10 group-hover/item:border-transparent sm:group-hover/item:shadow-none sm:group-hover/item:border-[#111111]/10">
                                        <div class="carousel-field relative p-[30px] md:p-[20px]">
                                            <!-- brand-image ALANI OPSİYONEL. -->
                                            <!-- BURADA EN FAZLA 12 ADEDE KADAR brand-image EKLENEBİLİR. -->
                                            
                                            <div class="sport-grass-carousel swiper">
                                                <div class="swiper-wrapper">
                                                    <?php foreach ($item->images as $key => $image) : ?>
                                                        <div class="swiper-slide group/slide" data-swiper-autoplay="-1">
                                                            <div class="content relative">
                                                                <div class="image-field relative translate-z-0">
                                                                    <div class="image h-[235px] xs:h-200 sm:h-215 overflow-hidden translate-z-0">
                                                                        <img src="<?= env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'product_images_folder'], app()->getLocale()) .'/'. $image->image ?>" class="full-cover" loading="lazy" alt="" data-swiper-parallax="50%">
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
                                                <p class="category flex text-16 font-light leading-tight text-[#959595] tracking-[5px] duration-450 hover:text-main-500"><?= $item->category->title ?></p>
                                                <p class="title flex text-20 sm:text-18 text-[#111111] group-hover/item:text-main-500 duration-450 group-hover/item:hover:text-main-700 mt-15 md:mt-10"><?= $item['title'] ?></p>
                                                <div class="button-field mt-30 lg:mt-20 md:mt-15 sm:mt-10 sm:hidden">
                                                    <div class="button group/button w-fit min-w-[200px] h-[50px] flex justify-center items-center px-[30px] rounded-full bg-transparent relative gap-[15px] duration-450 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-600 before:duration-450 hover:before:left-0 hover:shadow-[inset_0_0_0_1px_var(--main-600)] shadow-[inset_0_0_0_1px_rgba(17,17,17,0.15)] group-hover/item:shadow-[inset_0_0_0_1px_var(--main-500)] group-hover/item:bg-main-500">
                                                        <div class="text text-[15.18px] flex items-center text-[#111111] group-hover/item:text-white group-hover/item:group-hover/button:text-white relative z-10 leading-tight duration-450 group-hover/button:text-white"><?= getStaticText(10) ?></div>
                                                        <div class="icon-arrow-right text-[16px] height-[16px] leading-none flex items-center text-[#111111] group-hover/item:text-white group-hover/item:group-hover/button:text-white relative z-10 duration-450 group-hover/button:text-white group-hover/button:translate-x-[5px] rtl:-scale-x-100 rtl:group-hover/button:translate-x-[-5px]"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-controller z-20 absolute right-30 top-1/2 -translate-y-1/2 sm:hidden">
                                                <div class="carousel-pagination flex justify-center">
                                                    <div class="sport-grass-pagination flex flex-col [&_.swiper-pagination-bullet]:bg-transparent [&_.swiper-pagination-bullet-active]:!bg-[#B5B5B5] group-hover/item:[&_.swiper-pagination-bullet-active]:!bg-main-500 [&_.swiper-pagination-bullet]:w-[11.23px] [&_.swiper-pagination-bullet]:h-[11.23px] [&_.swiper-pagination-bullet]:!mx-0 !gap-[15px] justify-center [&_.swiper-pagination-bullet]:opacity-100 [&_.swiper-pagination-bullet]:duration-450  [&_.swiper-pagination-bullet]:border [&_.swiper-pagination-bullet]:border-solid [&_.swiper-pagination-bullet]:border-black/10 [&_.swiper-pagination-bullet-active]:border-main-500"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- NO CONTENT -->
                    <!-- <section class="no-content-field pt-60 xl:py-45 lg:py-30 md:py-20">
                        <div class="container max-w-[1500px] px-0">
                            <div class="wrapper">
                                <div class="no-content rounded-default p-20 border border-solid border-main-500">
                                    <p class="text-18 text-main-500 text-center leading-tight">Gösterilecek içerik bulunamadı.</p>
                                </div>
                            </div>
                        </div>
                    </section> -->

                    <!-- SHOW MORE -->
                    <section class="show-more-field pt-[60px] xl:pt-[45px] lg:pt-[30px] md:pt-[20px]">
                        <div class="container max-w-[1500px]">
                            <div class="show-more">
                                <a href="javascript:;" class="button group/button w-fit h-[50px] flex justify-center items-center px-[30px] rounded-full bg-main-500 relative gap-30 duration-450 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-600 hover:before:left-0 before:duration-450 mx-auto">
                                    <div class="text text-16 flex items-center text-white relative z-10 leading-tight duration-450 group-hover/button:text-white">Show More</div>
                                </a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection

<!-- script --> 
@section('script') 

@endsection