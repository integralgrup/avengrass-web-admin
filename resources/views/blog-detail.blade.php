@extends('layouts.main')

@section('content')

<main class="main-field header-space">
    <!-- BLOG IMAGE CONTENT -->
    <section class="blog-image-section pb-30 sm:pb-30 h-win-halfer md:!h-[calc(400px+50px)] sm:!h-[calc(300px+50px)] xs:!h-[calc(250px+50px)] relative">
        <div class="gradient bg-[#F1F1F1] absolute top-0 left-0 w-full h-1/2 z-2 translate-z-0 header-space-plus-minus pointer-events-none md:bg-white"></div>
        <div class="container max-w-[1760px] relative z-20 h-full">
            <div class="wrapper h-full">
                <div class="carousel-field relative h-full rounded-[30px] overflow-hidden">
                    <div class="content relative h-full">
                        <div class="image group/image group/popup relative h-full overflow-hidden rounded-20 cursor-pointer translate-z-0" href="<?= env('HTTP_DOMAIN') . '/' . getUrl('blog_url') .'/'. $blog->seo_url ?>" 
                        data-fancybox data-caption="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque architecto facere repudiandae exercitationem culpa, natus fugiat ab iure alias commodi, corrupti quod adipisci. Eligendi amet veritatis ipsam debitis neque reiciendis!">
                            <img src="<?= env('HTTP_DOMAIN') . '/' . getFolder(['uploads_folder', 'blog_images_folder'], $blog->lang) . '/' . $blog->image ?>" class="full-cover rounded-20 duration-450 group-hover/image:scale-110" loading="lazy" alt="">
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
    </section>
    <div class="scrollable-item pb-50 sm:pb-30"></div>

    <!-- BLOG CONTENT -->
    <section class="blog-content-section pb-120 xl:pb-80 lg:pb-60 md:pb-45 sm:pb-30 relative z-20">
        <div class="container max-w-[1500px]">
            <div class="wrapper relative">
                <div class="inner border border-solid border-black/10 py-80 px-120 xl:p-80 lg:p-60 md:p-40 sm:p-30 xs:p-25 rounded-[30px] relative">
                    <div class="blog-controller-field absolute left-0 top-0 w-full px-120 xl:px-80 lg:px-60 md:px-40 sm:px-0 -translate-y-1/2 sm:relative sm:translate-y-0 sm:mb-30 xs:mb-25">
                        <div class="wrapper flex justify-between items-center">
                            <div class="blog-controller">
                                <ul class="flex items-center [&_li:last-child_.split]:hidden gap-0 bg-white px-20 sm:px-0">
                                    <li class="flex relative">
                                        <a href="javascript:;" class="blog-increase-font-size group/link flex relative p-10 duration-450 hover:-translate-y-[4px] w-[44px] h-[44px] rounded-full justify-center items-center sm:w-[30px] sm:h-[30px] sm:p-0">
                                            <i class="icon icon-font-size-increase text-[16px] h-[16px] text-[#40403B] block leading-none duration-450 group-hover/link:text-main-500 relative z-2"></i>
                                        </a>
                                        <div class="split w-1 h-1/2 bg-[#E8E8E8] absolute right-0 top-1/2 -translate-y-1/2 rtl:right-auto rtl:left-0"></div>
                                    </li>
                                    <li class="flex relative">
                                        <a href="javascript:;" class="blog-decrease-font-size group/link flex relative p-10 duration-450 hover:-translate-y-[4px] w-[44px] h-[44px] rounded-full justify-center items-center sm:w-[30px] sm:h-[30px] sm:p-0">
                                            <i class="icon icon-font-size-decrease text-[16px] h-[16px] text-[#40403B] block leading-none duration-450 group-hover/link:text-main-500 relative z-2"></i>
                                        </a>
                                        <div class="split w-1 h-1/2 bg-[#E8E8E8] absolute right-0 top-1/2 -translate-y-1/2 rtl:right-auto rtl:left-0"></div>
                                    </li>
                                    <li class="flex relative">
                                        <a href="javascript:;" class="blog-copy group/link flex relative p-10 duration-450 hover:-translate-y-[4px] w-[44px] h-[44px] rounded-full justify-center items-center sm:w-[30px] sm:h-[30px] sm:p-0">
                                            <i class="icon icon-copy text-[16px] h-[16px] text-[#40403B] block leading-none duration-450 group-hover/link:text-main-500 relative z-2"></i>
                                            <span class="text text-[12px] text-white bg-main-500 absolute bottom-[calc(100%+5px)] left-[60%] translate-x-[-50%] whitespace-nowrap p-[10px] rounded-default font-medium z-20 opacity-0 invisible group-[&.is-copied]/link:opacity-100 group-[&.is-copied]/link:visible duration-500">URL Kopyalandı</span>
                                        </a>
                                        <div class="split w-1 h-1/2 bg-[#E8E8E8] absolute right-0 top-1/2 -translate-y-1/2 rtl:right-auto rtl:left-0"></div>
                                    </li>
                                    <li class="flex relative">
                                        <a href="javascript:;" class="blog-printer group/link flex relative p-10 duration-450 hover:-translate-y-[4px] w-[44px] h-[44px] rounded-full justify-center items-center sm:w-[30px] sm:h-[30px] sm:p-0">
                                            <i class="icon icon-printer text-[16px] h-[16px] text-[#40403B] block leading-none duration-450 group-hover/link:text-main-500 relative z-2"></i>
                                        </a>
                                        <div class="split w-1 h-1/2 bg-[#E8E8E8] absolute right-0 top-1/2 -translate-y-1/2 rtl:right-auto rtl:left-0"></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="social-media">
                                <ul class="flex items-center [&_li:last-child_.split]:hidden gap-0 bg-white px-20 sm:px-0">
                                    <li class="flex relative">
                                        <a href="javascript:;" class="group/link flex relative p-10 duration-450 hover:-translate-y-[4px] w-[44px] h-[44px] rounded-full justify-center items-center sm:w-[30px] sm:h-[30px] sm:p-0">
                                            <i class="icon icon-whatsapp text-[16px] h-[16px] text-[#40403B]/20 block leading-none duration-450 group-hover/link:text-main-500 relative z-2"></i>
                                        </a>
                                        <div class="split w-1 h-1/2 bg-[#E8E8E8] absolute right-0 top-1/2 -translate-y-1/2 rtl:right-auto rtl:left-0"></div>
                                    </li>
                                    <li class="flex relative">
                                        <a href="javascript:;" class="group/link flex relative p-10 duration-450 hover:-translate-y-[4px] w-[44px] h-[44px] rounded-full justify-center items-center sm:w-[30px] sm:h-[30px] sm:p-0">
                                            <i class="icon icon-facebook text-[16px] h-[16px] text-[#40403B]/20 block leading-none duration-450 group-hover/link:text-main-500 relative z-2"></i>
                                        </a>
                                        <div class="split w-1 h-1/2 bg-[#E8E8E8] absolute right-0 top-1/2 -translate-y-1/2 rtl:right-auto rtl:left-0"></div>
                                    </li>
                                    <li class="flex relative">
                                        <a href="javascript:;" class="group/link flex relative p-10 duration-450 hover:-translate-y-[4px] w-[44px] h-[44px] rounded-full justify-center items-center sm:w-[30px] sm:h-[30px] sm:p-0">
                                            <i class="icon icon-linkedin text-[16px] h-[16px] text-[#40403B]/20 block leading-none duration-450 group-hover/link:text-main-500 relative z-2"></i>
                                        </a>
                                        <div class="split w-1 h-1/2 bg-[#E8E8E8] absolute right-0 top-1/2 -translate-y-1/2 rtl:right-auto rtl:left-0"></div>
                                    </li>
                                    <li class="flex relative">
                                        <a href="javascript:;" class="group/link flex relative p-10 duration-450 hover:-translate-y-[4px] w-[44px] h-[44px] rounded-full justify-center items-center sm:w-[30px] sm:h-[30px] sm:p-0">
                                            <i class="icon icon-twitter text-[16px] h-[16px] text-[#40403B]/20 block leading-none duration-450 group-hover/link:text-main-500 relative z-2"></i>
                                        </a>
                                        <div class="split w-1 h-1/2 bg-[#E8E8E8] absolute right-0 top-1/2 -translate-y-1/2 rtl:right-auto rtl:left-0"></div>
                                    </li>
                                    <!-- SVG ÖRNEĞİ -->
                                    <!-- SVG OLARAK İSTENİLEN İCON FILL DESTEKLİ OLARAK EKLENBİLİR. STROKE DESTEKLEMEMEKTEDİR. -->
                                    <!-- AŞAĞIDA SVG ÖRNEĞİ BULUNMAKTADIR -->
                                    <!-- ÖRNEK SVG BUNA BENZER BİR YAPIDA EKLENDİĞİ ZAMAN SORUNSUZ ÇALIŞACAKTIR -->
                                    <li class="flex relative">
                                        <a href="javascript:;" class="group/link flex relative p-10 duration-450 hover:-translate-y-[4px] w-[44px] h-[44px] rounded-full justify-center items-center sm:w-[30px] sm:h-[30px] sm:p-0 [&_svg]:w-[16px] [&_svg]:h-[16px] [&_svg]:fill-[#40403B]/20 [&_svg]:hover:fill-main-500 [&_svg]:block [&_svg]:leading-none [&_svg]:duration-450">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 16">
                                                <path d="M6.72,0C2.33,0,0,2.81,0,5.87c0,1.42,.79,3.19,2.07,3.76,.19,.09,.3,.05,.34-.13,.04-.14,.21-.79,.29-1.1,.02-.1,.01-.19-.07-.28-.42-.49-.76-1.38-.76-2.21C1.87,3.77,3.57,1.7,6.46,1.7c2.5,0,4.25,1.62,4.25,3.95,0,2.63-1.39,4.44-3.19,4.44-1,0-1.74-.78-1.51-1.75,.29-1.16,.84-2.4,.84-3.23,0-.75-.42-1.37-1.28-1.37-1.02,0-1.84,1.01-1.84,2.36,0,.86,.3,1.44,.3,1.44,0,0-1.01,4.06-1.19,4.82-.32,1.28,.04,3.37,.07,3.55,.02,.1,.13,.13,.19,.05,.1-.13,1.32-1.87,1.66-3.12,.12-.46,.63-2.31,.63-2.31,.34,.61,1.3,1.11,2.33,1.11,3.06,0,5.28-2.69,5.28-6.04-.01-3.2-2.75-5.6-6.28-5.6Z" />
                                            </svg>
                                        </a>
                                        <div class="split w-1 h-1/2 bg-[#E8E8E8] absolute right-0 top-1/2 -translate-y-1/2 rtl:right-auto rtl:left-0"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content-field">
                        <div class="editor-field relative">
                            <div class="title-with-date flex gap-[20px] justify-between items-center mb-[60px] lg:mb-[50px] md:mb-[40px] sm:mb-[30px] xs:mb-[20px] sm:flex-col sm:items-start">
                                <div class="text-editor !max-w-full editor-p:text-20 editor-li:text-20 sm:editor-p:text-16 sm:editor-li:text-16 xs:editor-p:text-14 xs:editor-li:text-14">
                                    <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                                    <h1><strong><?= $blog->title ?></strong></h1>
                                </div>
                                <div class="right-content flex items-center gap-[15px] xs:flex-col xs:items-start">
                                    <div class="stars right flex gap-[10px]" data-selected-rate="">
                                        <?php for ($i = 1; $i <= 5; $i++) : ?>
                                            <a class="rating-star cursor-pointer text-[20px] h-[20px] flex justify-center items-center icon-star duration-450 text-[#008826]/20 [&.to-rate]:text-[#008826] [&.to-hover]:text-[#008826] [&.rated]:text-[#008826] [&.no-to-rated]:text-[#d0e8f0]" data-id="<?= $i ?>"></a>
                                        <?php endfor; ?>
                                    </div>
                                    <div class="date-field group/date opacity-50 duration-450 hover:opacity-100 flex items-center gap-[15px] justify-end md:justify-start sm:order-1">
                                        <i class="icon icon-calendar text-[16px] h-[16px] text-[#111111] block leading-none duration-450"></i>
                                        <p class="text text-14 leading-tight text-[#111111] duration-450"><?= $blog->created_at ?></p>
                                    </div>
                                </div>
                            </div>
                            <div id="print-wrapper" class="text-editor !max-w-full editor-p:text-18 editor-li:text-18 sm:editor-p:text-16 sm:editor-li:text-16 xs:editor-p:text-14 xs:editor-li:text-14">
                                <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                                {!!$blog->description!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OTHER BLOG -->
    <section class="other-blog-section py-120 xl:py-80 lg:py-60 md:py-45 sm:py-30 pt-0 xl:pt-0 lg:pt-0 md:pt-0 sm:pt-0">
        <div class="container max-w-[1500px]">
            <div class="wrapper relative">
                <div class="text-wrapper grid grid-cols-2 md:grid-cols-1 absolute left-0 top-0 w-[calc(100%-60px)] lg:w-[calc(100%-40px)] md:w-full md:relative mb-50 lg:mb-40 md:mb-30 gap-150 xl:gap-100 lg:gap-50 md:gap-30 z-20 rtl:ml-30 rtl:md:ml-0">
                    <div class="title-field flex justify-between gap-20 items-center xs:flex-col xs:items-center">
                        <p class="title text-[#757575] text-20 sm:text-18 xs:text-16 font-light leading-tight relative tracking-[0.4em] sm:text-center">BLOG & NEWS</p>
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
                                <div class="swiper-slide group/slide
                                [&.swiper-slide-active]:pb-120 md:[&.swiper-slide-active]:pb-0">
                                    <div class="blog-item item group/item
                                    duration-450 delay-450 group-[&.swiper-slide-active]/slide:delay-0
                                    group-[&.swiper-slide-active]/slide:translate-y-120
                                    md:group-[&.swiper-slide-active]/slide:translate-y-0">
                                        <div class="content pl-60 lg:pl-40 md:pl-30 sm:pl-0 relative group-[&.swiper-slide-active]/slide:pl-0">
                                            <div class="split w-1 h-full bg-[#AAAAAA] absolute left-0 top-0 duration-450 group-hover/item:bg-main-500 sm:hidden group-[&.swiper-slide-active]/slide:hidden opacity-30"></div>
                                            <div class="image-field rounded-[15px] overflow-hidden">
                                                <a href="single-blog.php" class="image h-325 xs:h-250 sm:h-275 md:h-300 overflow-hidden translate-z-0 flex w-full hover:scale-110 duration-450">
                                                    <img src="<?= $item['image'] ?>" class="full-cover image-parallax-effect" loading="lazy" alt="">
                                                </a>
                                            </div>
                                            <div class="text-field mt-30 md:mt-20">
                                                <div class="date-field group/date opacity-50 duration-450 hover:opacity-100 flex gap-[15px] items-center">
                                                    <i class="icon icon-calendar text-[16px] h-[16px] text-[#40403B]/20 block leading-none duration-450"></i>
                                                    <p class="text text-16 leading-tight text-[#111111] group-hover/date:translate-x-5 duration-450"><?= $item['date'] ?></p>
                                                </div>
                                                <a href="single-blog.php" class="title flex text-28 xl:text-26 lg:text-24 md:text-22 sm:text-20 xs:text-18 leading-tight text-[#111111] duration-450 hover:text-main-500 font-semibold mt-20 md:mt-15 group-hover/slide:text-main-500 group-hover/slide:hover:text-main-600"><?= $item['title'] ?></a>
                                                <div class="editor-field mt-30 md:mt-20">
                                                    <div class="text-editor !max-w-full editor-p:text-18 editor-li:text-18 sm:editor-p:text-16 sm:editor-li:text-16 xs:editor-p:text-14 xs:editor-li:text-14 editor-p:font-light editor-p:text-[#111111] editor-p:hidden [&_*:first-child]:line-clamp-2 [&_*]:!mb-0">
                                                        <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                                                        <?= $item['description'] ?>
                                                    </div>
                                                </div>
                                                <div class="button-field mt-30 md:mt-20 sm:hidden">
                                                    <a href="single-blog.php" class="button group/button w-fit min-w-[200px] h-[50px] flex justify-center items-center px-[30px] rounded-full bg-transparent relative gap-[15px] duration-450 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-600 before:duration-450  hover:before:left-0 hover:shadow-[inset_0_0_0_1px_var(--main-600)] shadow-[inset_0_0_0_1px_rgba(17,17,17,0.15)] group-hover/slide:shadow-[inset_0_0_0_1px_var(--main-500)]">
                                                        <div class="text text-[15.18px] flex items-center text-[#111111] group-hover/slide:text-main-500 group-hover/slide:group-hover/button:text-white relative z-10 leading-tight duration-450 group-hover/button:text-white">View</div>
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

@section('script')
<script>
    // BLOG CONTROLLER
    // ------------------------------------------------------------------
    // BLOG PRINT
    let blogPrint = document.querySelector('.blog-printer');
    blogPrint.addEventListener('click', () => {
        /* window.print(); */
        printJS('print-wrapper', 'html')
    });

    // BLOG COPY PAGE URL
    let copyTO;
    let blogCopy = document.querySelector('.blog-copy');
    document.querySelector('.blog-copy').addEventListener('click', () => {
        let link = window.location.href;
        navigator.clipboard.writeText(link);
        blogCopy.classList.add('is-copied');

        clearTimeout(copyTO)
        copyTO = setTimeout(() => {
            blogCopy.classList.remove('is-copied');
        }, 1500);
    });

    // BLOG SIZE CHANGE
    let increaseFontSize = document.querySelector('.blog-increase-font-size');
    let decreaseFontSize = document.querySelector('.blog-decrease-font-size');
    let contentWrapper = document.querySelector('.editor-field .text-editor');
    let allContentElements = document.querySelectorAll('.editor-field .text-editor *');
    allContentElements.forEach(el => {
        let style = window.getComputedStyle(el, null).getPropertyValue('font-size');
        let fontSize = parseFloat(style);
        el.dataset.fontSize = fontSize;
    });

    let fontSizeCounter = 0;

    increaseFontSize.addEventListener('click', () => {
        if (fontSizeCounter < 3) {
            fontSizeCounter++;
            allContentElements.forEach(el => {
                let style = window.getComputedStyle(el, null).getPropertyValue('font-size');
                let fontSize = parseFloat(style);
                fontSize += 2;
                el.style.fontSize = fontSize + 'px';
            });
        }
    }, false);

    decreaseFontSize.addEventListener('click', () => {
        if (fontSizeCounter > 0) {
            fontSizeCounter--;
            allContentElements.forEach(el => {
                let style = window.getComputedStyle(el, null).getPropertyValue('font-size');
                let fontSize = parseFloat(style);
                fontSize -= 2;
                el.style.fontSize = fontSize + 'px';
            });
        }
    }, false);

    // RATING
    let ratingStar = document.querySelectorAll('.rating-star');
    let dataSelectedRate
    ratingStar.forEach((item, index) => {
        item.addEventListener('click', () => {
            ratingStar.forEach((item, index) => {
                item.classList.remove('to-rate');
                item.classList.remove('rated');
                item.classList.add('no-to-rated');
            });
            for (let i = 0; i <= index; i++) {
                ratingStar[i].classList.remove('no-to-rated');
                ratingStar[i].classList.add('rated');
            }
            item.classList.add('to-rate');

            dataSelectedRate = item.dataset.id;
            item.parentElement.dataset.selectedRate = dataSelectedRate;
        });

        item.addEventListener('mouseover', () => {
            ratingStar.forEach((item, index) => {
                item.classList.remove('to-hover');
            });
            for (let i = 0; i <= index; i++) {
                ratingStar[i].classList.add('to-hover');
            }
        });

        item.addEventListener('mouseout', () => {
            ratingStar.forEach((item, index) => {
                item.classList.remove('to-hover');
            });
        });
    });
</script> 
@endsection