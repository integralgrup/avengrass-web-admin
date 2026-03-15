<?php $pageTitle = 'Blog'; ?>
@extends('layouts.main')


@section('content')
<main class="main-field header-space">
    <!-- FEATURED BLOG CONTENT -->
    <section class="featured-blog-section pb-50 sm:pb-30 min-md:aspect-[172/63] relative md:!h-auto">
        <div class="gradient bg-[#F1F1F1] absolute top-0 left-0 w-full h-1/2 z-2 translate-z-0 header-space-plus-minus lg:!h-full pointer-events-none md:bg-white"></div>
        <div class="container max-w-[1760px] relative z-20 h-full">
            <div class="wrapper h-full">
                <div class="carousel-field relative h-full rounded-[30px] overflow-hidden">
                    <div class="content relative h-full">
                        <div class="featured-blog-carousel swiper h-full">
                            <div class="swiper-wrapper h-full">
                                @foreach($blogs as $i => $blog)
                                    <div class="swiper-slide group/slide h-full">
                                        <div class="content relative h-full">
                                            <div class="image-field relative translate-z-0 h-full">
                                                <div class="image h-full overflow-hidden translate-z-0 md:h-[400px]">
                                                    <div class="gradient bg-[#111111]/65 absolute top-0 left-0 w-full h-full z-20 translate-z-0"></div>
                                                    <img src="<?= env('HTTP_DOMAIN').'/'. getFolder(['uploads_folder','blog_images_folder'], $blog->lang).'/'. $blog->image ?>" class="full-cover" loading="lazy" alt="" data-swiper-parallax="50%">
                                                </div>
                                            </div>
                                            <div class="text-container max-w-[1500px] w-full px-[30px] mx-auto absolute z-20 bottom-60 md:bottom-80 left-1/2 -translate-x-1/2">
                                                <div class="text-field relative grid grid-cols-2 gap-[30px] lg:grid-cols-1" data-swiper-parallax="-40%">
                                                    <div class="inner-content">
                                                        <div class="title-field">
                                                            <div class="date-field group/date hover:opacity-100 flex gap-[15px] opacity-0 invisible translate-y-20 duration-450 group-[&.swiper-slide-active]/slide:opacity-50 group-[&.swiper-slide-active]/slide:visible group-[&.swiper-slide-active]/slide:translate-y-0 group-[&.swiper-slide-active]/slide:delay-500">
                                                                <i class="icon icon-calendar text-[16px] h-[16px] text-white block leading-none duration-450"></i>
                                                                <p class="text text-16 leading-tight text-white group-hover/date:translate-x-5 duration-450">{{ date( 'd.m.Y', strtotime($blog->created_at) );}}</p>
                                                            </div>
                                                            <a href="<?= env('HTTP_DOMAIN').'/'.getUrl('blog_url') . '/' . $blog->seo_url ?>" class="title text-36 md:text-32 sm:text-24 xs:text-20 text-white font-semibold leading-tight relative mt-30 lg:mt-20 sm:mt-20 opacity-0 invisible translate-y-20 duration-450 group-[&.swiper-slide-active]/slide:opacity-100 group-[&.swiper-slide-active]/slide:visible group-[&.swiper-slide-active]/slide:translate-y-0 group-[&.swiper-slide-active]/slide:delay-600 flex">{{$blog->title}}</a>
                                                            <div class="editor-field mt-40 lg:mt-30 md:mt-20 opacity-0 invisible translate-y-20 duration-450 group-[&.swiper-slide-active]/slide:opacity-100 group-[&.swiper-slide-active]/slide:visible group-[&.swiper-slide-active]/slide:translate-y-0 group-[&.swiper-slide-active]/slide:delay-700">
                                                                <div class="text-editor !max-w-full editor-p:text-18 editor-li:text-18 sm:editor-p:text-16 sm:editor-li:text-16 xs:editor-p:text-14 xs:editor-li:text-14 editor-p:font-light editor-p:text-white editor-p:hidden [&_*:first-child]:line-clamp-2 [&_*]:!mb-0 opacity-65">
                                                                    <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                                                                    <p style="font-weight: 300;">{{$blog->short_description}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="button-field mt-50 lg:mt-30 md:mt-30 sm:mt-20 opacity-0 invisible translate-y-20 duration-450 group-[&.swiper-slide-active]/slide:opacity-100 group-[&.swiper-slide-active]/slide:visible group-[&.swiper-slide-active]/slide:translate-y-0 group-[&.swiper-slide-active]/slide:delay-800">
                                                            <a href="<?= env('HTTP_DOMAIN').'/'.getUrl('blog_url') . '/' . $blog->seo_url ?>" class="button group/button w-[200px] h-[50px] flex justify-center items-center px-[30px] rounded-full bg-main-500 relative gap-10 duration-450 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-600 hover:before:left-0 before:duration-450">
                                                                <div class="text text-16 flex items-center text-white relative z-10 leading-tight duration-450 group-hover/button:text-white">View</div>
                                                                <div class="icon-arrow-right text-[16px] height-[16px] leading-none flex items-center text-white relative z-10 duration-450 group-hover/button:text-white group-hover/button:translate-x-[5px] rtl:-scale-x-100 rtl:group-hover/button:translate-x-[-5px]"></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="carousel-controller max-w-[1500px] w-full mx-auto z-20 absolute bottom-60 left-1/2 -translate-x-1/2 px-[30px] pointer-events-none md:bottom-20 xs:hidden">
                            <div class="carousel-navigation flex justify-end gap-20 pointer-events-none">
                                <div class="featured-blog-prev pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                    <div class="icon group/navigation flex items-center justify-center w-50 h-50 sm:w-40 sm:h-40 bg-[#E9E9E9] border border-solid border-[#E9E9E9] rounded-full cursor-pointer hover:bg-main-500 hover:border-main-500 duration-450">
                                        <i class="icon-chevron-left text-[#111111] text-[10px] h-[10px] flex items-center justify-center group-hover/navigation:text-white duration-450 group-hover/navigation:translate-x-[-3px] rtl:rotate-180"></i>
                                    </div>
                                </div>
                                <div class="featured-blog-next pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                    <div class="icon group/navigation flex items-center justify-center w-50 h-50 sm:w-40 sm:h-40 bg-[#E9E9E9] border border-solid border-[#E9E9E9] rounded-full cursor-pointer hover:bg-main-500 hover:border-main-500 duration-450">
                                        <div class="icon-chevron-right text-[#111111] text-[10px] h-[10px] flex items-center justify-center group-hover/navigation:text-white duration-450 group-hover/navigation:translate-x-[3px] rtl:rotate-180"></div>
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
        </div>
    </section>
    <div class="scrollable-item"></div>

    <!-- FILTER FIELD -->
    <section class="blog-filter-section py-30 overflow-hidden sm:pb-0">
        <div class="container max-w-[1500px]">
            <div class="wrapper relative">
                <div class="content flex justify-between items-center pb-15 md:flex-col md:gap-[20px] sm:pb-0">
                    <div class="inner-breadcrumb">
                        <ul class="navigation flex flex-wrap items-center justify-center gap-[10px] [&_li:last-child]:hidden">
                            <li>
                                <a href="index.php" class="flex group">
                                    <p class="text text-[#111111]/50 text-18 md:text-16 font-light group-hover:text-main-500 duration-450 leading-tight">Home</p>
                                </a>
                            </li>
                            <li class="split relative flex items-center h-[12px]">
                                <p class="text text-[#111111]/50 text-18 md:text-16 font-light duration-450 leading-tight">/</p>
                            </li>
                            <!-- BU SON GÖRÜNECEK OLAN ALAN OPSİYONEL OLARAK EKLENEBİLİR/KALDIRILABİLİR. -->
                            <li>
                                <a href="page-usage-areas.php" class="flex group">
                                    <p class="text text-[#111111]/50 text-18 md:text-16 font-light group-hover:text-main-500 duration-450 leading-tight"><?= $pageTitle ?></p>
                                </a>
                            </li>
                            <li class="split relative flex items-center h-[12px]">
                                <p class="text text-[#111111]/50 text-18 md:text-16 font-light duration-450 leading-tight">/</p>
                            </li>
                        </ul>
                    </div>
                    <div class="filter-field sm:scrollbar sm:scrollbar-h-[4px] sm:scrollbar-track-rounded-[5px] sm:scrollbar-thumb-rounded-[5px] sm:scrollbar-thumb-main-500 sm:scrollbar-track-main-500/10 sm:overflow-x-auto sm:overflow-y-hidden sm:w-full">
                        <ul class="navigation flex items-center justify-end gap-[30px] [&_li:last-child]:hidden sm:w-full sm:justify-start sm:pb-[10px] sm:gap-[15px]">
                            <?php $list = [
                                ['title' => 'News Articles'],
                                ['title' => 'Blog Articles'],
                            ]; ?>

                            <?php foreach ($list as $key => $item) : ?>
                                <!-- AKTİF olana is-active EKLENİR. -->
                                <li class="tab-select relative group/tab scrollable-selector <?php if ($key == 0) : ?>is-active<?php endif; ?>" data-id="<?= $item['title'] ?>">
                                    <a href="page-blog.php" class="flex group">
                                        <p class="text text-[#111111] text-16 md:text-16 font-light group-hover:text-main-500 duration-450 leading-tight group-[&.is-active]/tab:text-main-500 sm:whitespace-nowrap"><?= $item['title'] ?></p>
                                    </a>
                                    <div class="tab-selector absolute left-1/2 -translate-x-1/2 top-[calc(100%+14px)] z-30 duration-450 opacity-0 invisible translate-y-10 group-[&.is-active]/tab:opacity-100 group-[&.is-active]/tab:visible group-[&.is-active]/tab:translate-y-0 group-[&.is-active]/tab:delay-450 sm:hidden">
                                        <div class="image h-[11px] w-[200px] overflow-hidden translate-z-0">
                                            <img src="../assets/image/static/product-tab-selector-2.png" class="full-contain" loading="lazy" alt="">
                                        </div>
                                    </div>
                                </li>
                                <li class="split relative flex items-center h-[12px]">
                                    <p class="text text-[#111111]/50 text-18 md:text-16 font-light duration-450 leading-tight">|</p>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="split w-full h-1 bg-[#111111] opacity-15 absolute left-0 bottom-0"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- OTHER BLOG CONTENT -->
    <section class="other-blog-section pt-60 md:pt-45 sm:pt-30 pb-45 xl:pb-45 lg:pb-45 md:pb-45 sm:pb-30 relative overflow-hidden">
        <div class="container max-w-[1500px] relative z-20">
            <div class="wrapper">
                <div class="blog-wrapper grid grid-cols-2 gap-x-150 gap-y-100 md:grid-cols-1 2xl:gap-100 xl:gap-60 lg:gap-40 md:gap-30 sm:gap-20 [&_.blog-item:nth-child(odd)_.content]:pl-60 [&_.blog-item:nth-child(odd)_.content_.split]:hidden md:[&_.blog-item:last-child_.split-inner]:hidden 2xl:[&_.blog-item:nth-child(odd)_.content]:pl-0">
                    

                    <?php foreach ($blogs as $key => $blog) : ?>
                        <div class="blog-item item group/item">
                            <div class="content pl-60 lg:pl-40 md:pl-0 sm:pl-0 relative rtl:pl-0 rtl:pr-60 rtl:lg:pr-40 rtl:lg:pl-0 rtl:md:pl-0 rtl:md:pr-0">
                                <div class="split w-1 h-full bg-[#AAAAAA] absolute left-0 top-0 duration-450 group-hover/item:bg-main-500 sm:hidden opacity-30 md:hidden rtl:right-0"></div>
                                <div class="image-field rounded-[15px] overflow-hidden">
                                    <a href="<?= env('HTTP_DOMAIN').'/'.getUrl('blog_url') . '/' . $blog->seo_url ?>" class="image h-325 xs:h-250 sm:h-275 md:h-300 overflow-hidden translate-z-0 flex w-full hover:scale-110 duration-450">
                                        <img src="<?= env('HTTP_DOMAIN').'/'. getFolder(['uploads_folder','blog_images_folder'], $blog->lang).'/'. $blog->image ?>" class="full-cover image-parallax-effect" loading="lazy" alt="">
                                    </a>
                                </div>
                                <div class="text-field mt-30 md:mt-20">
                                    <div class="date-field group/date opacity-50 duration-450 hover:opacity-100 flex gap-[15px]">
                                        <i class="icon icon-calendar text-[16px] h-[16px] text-[#111111] block leading-none duration-450"></i>
                                        <p class="text text-16 leading-tight text-[#111111] group-hover/date:translate-x-5 duration-450">{{date('d.m.Y', strtotime($blog->created_at))}}</p>
                                    </div>
                                    <a href="<?= env('HTTP_DOMAIN').'/'.getUrl('blog_url') . '/' . $blog->seo_url ?>" class="title flex text-28 xl:text-26 lg:text-24 md:text-22 sm:text-20 xs:text-18 leading-tight text-[#111111] duration-450 hover:text-main-500 font-semibold mt-20 md:mt-15 group-hover/slide:text-main-500 group-hover/slide:hover:text-main-600"><?= $blog->title ?></a>
                                    <div class="editor-field mt-30 md:mt-20">
                                        <div class="text-editor !max-w-full editor-p:text-18 editor-li:text-18 sm:editor-p:text-16 sm:editor-li:text-16 xs:editor-p:text-14 xs:editor-li:text-14 editor-p:font-light editor-p:text-[#111111] editor-p:hidden [&_*:first-child]:line-clamp-2 [&_*]:!mb-0">
                                            <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                                            <?= $blog->short_description ?>
                                        </div>
                                    </div>
                                    <div class="button-field mt-30 md:mt-20 sm:hidden">
                                        <a href="<?= env('HTTP_DOMAIN').'/'.getUrl('blog_url') . '/' . $blog->seo_url ?>" class="button group/button w-fit min-w-[200px] h-[50px] flex justify-center items-center px-[30px] rounded-full bg-transparent relative gap-[15px] duration-450 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-600 before:duration-450  hover:before:left-0 hover:shadow-[inset_0_0_0_1px_var(--main-600)] shadow-[inset_0_0_0_1px_rgba(17,17,17,0.15)] group-hover/item:shadow-[inset_0_0_0_1px_var(--main-500)]">
                                            <div class="text text-[15.18px] flex items-center text-[#111111] group-hover/item:text-main-500 group-hover/item:group-hover/button:text-white relative z-10 leading-tight duration-450 group-hover/button:text-white">View</div>
                                            <div class="icon-arrow-right text-[16px] height-[16px] leading-none flex items-center text-[#111111] group-hover/item:text-main-500 group-hover/item:group-hover/button:text-white relative z-10 duration-450 group-hover/button:text-white group-hover/button:translate-x-[5px] rtl:-scale-x-100 rtl:group-hover/button:translate-x-[-5px]"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="split-inner w-full h-[1px] bg-black/10 mt-[30px] sm:mt-[20px] hidden md:block"></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- SHOW MORE -->
    <section class="show-more-field py-[60px] xl:py-[45px] lg:py-[30px] md:py-[20px]">
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