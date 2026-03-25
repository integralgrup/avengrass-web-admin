<!DOCTYPE html>
<html lang="tr" dir="ltr">
<?php  $nameofProject = 'Avengrass'; ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (!empty($pageTitle)) echo $pageTitle . ' - '; ?><?= $nameofProject; ?></title>
    @if(isset($seo))
    <meta name="keywords" content="{{ $seo->seo_keywords }}">
    <meta name="description" content="{{ $seo->seo_description }}">
    <?php $pageTitle = $seo->seo_title;?>
    @endif
    <meta name="description" content="Avengrass frontend demo.">
    <link rel="shortcut icon" href="../assets/image/trademark/favicon.png" type="image/x-icon">
    <!-- Önbellek tutmasın diye ekledim; '?id<?= rand(); ?>' yazısını silersin -->
    <link rel="stylesheet" href="../assets/css/tailwind.css?id<?= rand(); ?>">
    <link rel="stylesheet" href="../assets/css/style.css?id<?= rand(); ?>">
</head>

<!-- PRELOADER VARSA body ALANINA preload CLASSI EKLENİR -->
<body class="antialiased font-sans [&.preload]:overflow-hidden"> 


    <header class="group/header header-field h-160 z-100 fixed w-full left-0 top-0 duration-500 bg-transparent will-change-[height, transform] [&.is-fixed]:!top-0 [&.is-fixed]:!translate-y-0 [&.is-fixed]:bg-white [&.is-fixed]:shadow-header [&.is-hidden.is-fixed]:!-translate-y-full [&.is-hidden.is-fixed]:shadow-none [&.no-scroll]:absolute [&.no-scroll]:!transform-none [&.no-scroll]:!shadow-none [&.menu-active]:bg-white [&.is-fixed]:h-[100px] md:[&.is-fixed]:h-[80px] md:h-[120px] lg:h-[130px]">
    <div class="wrapper">
        <div class="header-top h-40 relative group-[&.is-fixed]/header:h-0 group-[&.is-fixed]/header:overflow-hidden duration-450">
            <div class="gradient bg-[#0A6324] absolute top-0 left-0 w-full h-full z-2 translate-z-0">
                <div class="image h-full overflow-hidden translate-z-0">
                    <img src="../assets/image/static/header-flat.png" class="full-cover" loading="lazy" alt="">
                </div>
            </div>
            <div class="container max-w-[1500px] h-full">
                <div class="wrapper flex items-center justify-between h-full md:justify-center">
                    <!-- SOCIAL MEDIA -->
                    <div class="social-media-field flex items-center relative z-20">
                        <ul class="flex items-center [&_li:last-child_.split]:hidden gap-[20px]" dir="ltr">
                            <li class="flex relative">
                                <a href="javascript:;" class="group/link flex relative p-10 duration-450 hover:-translate-y-2">
                                    <i class="icon icon-facebook text-[16px] h-[16px] text-white/50 group-hover/link:text-white block leading-none duration-450"></i>
                                </a>
                                <div class="split w-1 h-20 bg-white opacity-20 absolute -right-10 top-1/2 -translate-y-1/2"></div>
                            </li>
                            <li class="flex relative">
                                <a href="javascript:;" class="group/link flex relative p-10 duration-450 hover:-translate-y-2">
                                    <i class="icon icon-youtube text-[16px] h-[16px] text-white/50 group-hover/link:text-white block leading-none duration-450"></i>
                                </a>
                                <div class="split w-1 h-20 bg-white opacity-20 absolute -right-10 top-1/2 -translate-y-1/2"></div>
                            </li>
                            <li class="flex relative">
                                <a href="javascript:;" class="group/link flex relative p-10 duration-450 hover:-translate-y-2">
                                    <i class="icon icon-linkedin text-[16px] h-[16px] text-white/50 group-hover/link:text-white block leading-none duration-450"></i>
                                </a>
                                <div class="split w-1 h-20 bg-white opacity-20 absolute -right-10 top-1/2 -translate-y-1/2"></div>
                            </li>
                            <li class="flex relative">
                                <a href="javascript:;" class="group/link flex relative p-10 duration-450 hover:-translate-y-2">
                                    <i class="icon icon-twitter text-[16px] h-[16px] text-white/50 group-hover/link:text-white block leading-none duration-450"></i>
                                </a>
                                <div class="split w-1 h-20 bg-white opacity-20 absolute -right-10 top-1/2 -translate-y-1/2"></div>
                            </li>
                            <li class="flex relative">
                                <a href="javascript:;" class="group/link flex relative p-10 duration-450 hover:-translate-y-2">
                                    <i class="icon icon-instagram text-[16px] h-[16px] text-white/50 group-hover/link:text-white block leading-none duration-450"></i>
                                </a>
                                <div class="split w-1 h-20 bg-white opacity-20 absolute -right-10 top-1/2 -translate-y-1/2"></div>
                            </li>
                            
                            <li class="flex relative">
                                <a href="javascript:;" class="group/link flex relative p-10 duration-450 hover:-translate-y-2
                                [&_svg]:w-[16px] [&_svg]:h-[16px] [&_svg]:fill-white/50 [&_svg]:hover:fill-white [&_svg]:block [&_svg]:leading-none [&_svg]:duration-450">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 16">
                                        <path d="M6.72,0C2.33,0,0,2.81,0,5.87c0,1.42,.79,3.19,2.07,3.76,.19,.09,.3,.05,.34-.13,.04-.14,.21-.79,.29-1.1,.02-.1,.01-.19-.07-.28-.42-.49-.76-1.38-.76-2.21C1.87,3.77,3.57,1.7,6.46,1.7c2.5,0,4.25,1.62,4.25,3.95,0,2.63-1.39,4.44-3.19,4.44-1,0-1.74-.78-1.51-1.75,.29-1.16,.84-2.4,.84-3.23,0-.75-.42-1.37-1.28-1.37-1.02,0-1.84,1.01-1.84,2.36,0,.86,.3,1.44,.3,1.44,0,0-1.01,4.06-1.19,4.82-.32,1.28,.04,3.37,.07,3.55,.02,.1,.13,.13,.19,.05,.1-.13,1.32-1.87,1.66-3.12,.12-.46,.63-2.31,.63-2.31,.34,.61,1.3,1.11,2.33,1.11,3.06,0,5.28-2.69,5.28-6.04-.01-3.2-2.75-5.6-6.28-5.6Z" />
                                    </svg>
                                </a>
                                <div class="split w-1 h-20 bg-white opacity-20 absolute -right-10 top-1/2 -translate-y-1/2"></div>
                            </li>
                        </ul>
                    </div>
                    <!-- CONTACT INFORMATION -->
                    <div class="contact-information relative z-20 md:hidden">
                        <ul class="flex gap-25 lg:gap-20 md:gap-15 [&_li:last-child_.split]:hidden">
                            <li class="flex gap-25 lg:gap-20 md:gap-15">
                                <a href="tel:+902126781313" class="group/link flex items-center ltr:gap-10">
                                    <i class="icon icon-phone text-white text-[14px] h-[14px] block leading-none group-hover/link:text-third-300 duration-450 rtl:ml-20"></i>
                                    <span class="text text-14 text-white leading-tight font-light duration-450 group-hover/link:text-third-300 group-hover/link:translate-x-3">+90 (212) 678 13 13</span>
                                </a>
                                <div class="split w-1 h-full bg-white/10"></div>
                            </li>
                            <li class="flex gap-25 lg:gap-20 md:gap-15">
                                <a href="mailto:info@avengrass.com" class="group/link flex items-center ltr:gap-10">
                                    <i class="icon icon-mail text-white text-[14px] h-[14px] block leading-none group-hover/link:text-third-300 duration-450 rtl:ml-20"></i>
                                    <span class="text text-14 text-white leading-tight font-light duration-450 group-hover/link:text-third-300 group-hover/link:translate-x-3">info@avengrass.com</span>
                                </a>
                                <div class="split w-1 h-full bg-white/10"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom py-30 lg:py-15 md:bg-white group-[&.is-fixed]/header:py-20 md:group-[&.is-fixed]/header:py-[10px] md:py-[10px]">
            <div class="container max-w-[1500px] h-full">
                <div class="wrapper flex justify-between max-w-[1440px] mx-auto">
                    <div class="logo-field w-fit">
                        <a href="{{env('HTTP_DOMAIN')}}" class="flex justify-start">
                            <div class="image overflow-hidden h-60">
                                <img src="../assets/image/trademark/logo.png" class="w-full h-full object-contain object-center max-w-[220px] lg:max-w-[200px] md:max-w-[175px] sm:max-w-[150px]" loading="lazy" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="menu-field flex items-center gap-30 xl:gap-20 lg:gap-0">
                        <!-- MENU -->
                         <?php 
                            $menu = App\Models\Menu::where(['lang' => app()->getLocale(), 'menu_type' => 'header'])->with('children')
                            ->where('parent_menu_id', 0) // only root menus
                            ->orderBy('sort', 'asc')
                            ->get();
                            //dd($menu);
                        ?>
                        <div class="menu">
                            <ul class="menu-ul flex gap-30 xl:gap-20 lg:flex-col lg:gap-0 lg:absolute lg:top-full lg:left-0 lg:w-full lg:bg-white lg:hidden [&.is-active]:block lg:border-0 lg:border-t lg:border-solid lg:border-black/10 scrollbar scrollbar-w-[5px] scrollbar-track-rounded-[5px] scrollbar-thumb-rounded-[5px] scrollbar-thumb-main-500 scrollbar-track-main-500/10 overflow-x-hidden overflow-y-auto min-xl:max-h-[calc(100vh-130px)]">
                                @foreach($menu as $item)
                                    @if($item->page_type == 'product_category')

                                        <li class="menu-item group/menu-item lg:relative has-mega-menu">
                                            <a href="{{env('HTTP_DOMAIN').'/'. $item->seo_url}}" class="group/showable flex items-center ltr:gap-10 lg:ltr:gap-0 lg:px-30 lg:py-15 lg:border-0 lg:border-b lg:border-solid lg:border-black/10 duration-450 [&.is-show]:bg-main-500 rtl:pr-[75px]">
                                                <span class="text text-[#1A1A1A] text-16 sm:text-16 leading-tight duration-450 group-hover/menu-item:text-main-500 font-light lg:font-normal group-[&.is-show]/showable:text-white">{{$item->title}}</span>
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
                                                            <div class="main-inner relative w-full">
                                                                <div class="split absolute -right-[32px] translate-x-0 w-1 h-full bg-black/10 lg:hidden rtl:right-auto rtl:left-[-32px]"></div>
                                                                <ul class="mega-menu-main-content relative flex flex-col gap-8 min-xl:scrollbar min-xl:scrollbar-w-[5px] min-xl:scrollbar-track-rounded-[5px] min-xl:scrollbar-thumb-rounded-[5px] min-xl:scrollbar-thumb-main-500 min-xl:scrollbar-track-main-500/10 min-xl:overflow-x-auto min-xl:overflow-y-auto min-xl:max-h-[calc(500px)] pr-5 lg:pr-0 lg:gap-0 rtl:pr-0 rtl:pl-5">
                                                                    <?php foreach ($item->children as $key => $childitem) : ?>
                                                                        <!-- BURADA BULUNAN data-id ALANI, BİR SONRAKİ ELEMENT ALANINDA (mega-menu-inner-content) BULUNAN data-id İLE EŞLEŞEREK ÇALIŞMAKTADIR. -->
                                                                        <!-- data-image ALANINDA BULUNAN RESİM, SAĞ TARAFTA BULUNAN RESİM ALANINA BASMAKTADIR. -->
                                                                        <li class="ullier-li z-20 group/li with-data-image lg:relative lg:border-0 lg:border-b lg:border-solid lg:border-black/10 <?php if ($key == 0) : ?>is-active<?php endif; ?>" data-id="<?= $key + 1 ?>" data-image="<?= env('HTTP_DOMAIN') .'/' . getFolder(['uploads_folder', 'product_images_folder'], $item->lang) .'/' . $childitem->image ?>" data-link="<?= $childitem->seo_url ?>">
                                                                            <div class="relative">
                                                                                <a href="<?= env('HTTP_DOMAIN') .'/' . $childitem->seo_url ?>" class="flex group/link items-center gap-25 xl:gap-20 px-20 py-[10px] rounded-10 bg-transparent duration-450 relative lg:px-30 lg:pl-40 lg:py-10 [&.is-show]:bg-main-500 lg:rounded-none rtl:pr-[75px]">
                                                                                    <div class="gradient bg-main-500 absolute top-0 left-0 w-full h-full z-2 translate-z-0 rounded-10 opacity-0 duration-450 group-[&.is-active]/li:opacity-100 group-hover/li:opacity-100 pointer-events-none lg:hidden"></div>
                                                                                    <div class="image-field md:hidden shrink-0 flex items-center justify-center rounded-15 duration-450 relative z-2 !ml-0">
                                                                                        <div class="image h-40 lg:h-30 w-40 lg:w-30 overflow-hidden translate-z-0 opacity-100 duration-450 min-lg:group-hover/li:opacity-0 min-lg:group-[&.is-active]/li:opacity-0 lg:group-hover/li:opacity-100 group-[&.is-show]/link:opacity-0 lg:group-hover/li:group-[&.is-show]/link:opacity-0">
                                                                                            <img src="<?= env('HTTP_DOMAIN') .'/' . getFolder(['uploads_folder', 'product_images_folder'], $childitem->lang) .'/' . $childitem->icon2 ?>" class="full-contain" loading="lazy" alt="">
                                                                                        </div>
                                                                                        <div class="image h-40 lg:h-30 w-40 lg:w-30 overflow-hidden translate-z-0 absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 opacity-0 duration-450 min-lg:group-hover/li:opacity-100 min-lg:group-[&.is-active]/li:opacity-100 lg:group-hover/li:opacity-0 group-[&.is-show]/link:opacity-100 lg:group-hover/li:group-[&.is-show]/link:opacity-100">
                                                                                            <img src="<?= env('HTTP_DOMAIN') .'/' . getFolder(['uploads_folder', 'product_images_folder'], $childitem->lang) .'/' . $childitem->icon1 ?>" class="full-contain" loading="lazy" alt="">
                                                                                        </div>
                                                                                    </div>
                                                                                    <span class="text text text-16 sm:text-16 leading-tight text-[#111111] duration-450 group-hover/li:text-white min-lg:group-[&.is-active]/li:text-white lg:font-normal lg:group-hover/li:text-main-500 relative z-2 md:!ml-0 font-light group-[&.is-show]/link:text-white lg:group-hover/li:group-[&.is-show]/link:text-white"><?= $childitem->title ?></span>
                                                                                </a>
                                                                                <?php if (isset($childitem->children)) : ?>
                                                                                    <div class="sub-trigger-inner group/sub-trigger absolute right-30 top-[11px] w-30 h-30 bg-main-500 justify-center items-center hidden cursor-pointer rounded-default duration-450 [&.is-active]:bg-main-300 lg:group-[&.has-mega-menu]/menu-item:flex z-20 md:top-[5px]">
                                                                                        <div class="icon w-[2px] h-[15px] sm:h-[12px] absolute left-1/2 -translate-x-1/2 bg-white duration-450 group-[&.is-active]/sub-trigger:rotate-90 rounded-full"></div>
                                                                                        <div class="icon w-[15px] h-[2px] sm:w-[12px] bg-white duration-450 rounded-full"></div>
                                                                                    </div>
                                                                                <?php endif; ?>
                                                                                <!-- BU ALAN MOBİLDE GÖRÜNEN KISIMDIR -->
                                                                                <?php if (isset($childitem->children)) : ?>
                                                                                    <div class="mm-inner absolute top-0 left-[calc(100%+20px)] w-full h-full opacity-0 invisible duration-450 translate-x-20 group-[&.is-active]/li:opacity-100 group-[&.is-active]/li:visible group-[&.is-active]/li:translate-x-0 group-[&.is-active]/li:delay-450 lg:relative lg:top-auto lg:left-auto lg:opacity-100 lg:translate-x-0 lg:visible lg:hidden hidden">
                                                                                        <ul class="mega-menu-inner-ul flex flex-col gap-8 min-xl:scrollbar min-xl:scrollbar-w-[5px] min-xl:scrollbar-track-rounded-[5px] min-xl:scrollbar-thumb-rounded-[5px] min-xl:scrollbar-thumb-main-500 min-xl:scrollbar-track-main-500/10 min-xl:overflow-x-hidden min-xl:overflow-y-auto max-h-[500px] pr-5 lg:gap-0 lg:[&_li:last-child]:border-b-0 lg:[&_li:first-child]:border-t md:pr-0" data-id="<?= $key + 1 ?>">
                                                                                            <!-- data-image ALANINDA BULUNAN RESİM, SAĞ TARAFTA BULUNAN RESİM ALANINA BASMAKTADIR. -->
                                                                                            <?php foreach ($childitem->children as $key => $subchilditem) : ?>
                                                                                                <li class="inner-li relative z-20 group/inner-li with-data-image  lg:border-0 lg:border-b lg:border-solid lg:border-black/10" data-image="<?= env('HTTP_DOMAIN') .'/' . getFolder(['uploads_folder', 'product_images_folder'], $subchilditem->lang) .'/' . $subchilditem->image ?>">
                                                                                                    <div class="gradient bg-main-500 absolute top-1/2 -translate-y-1/2 left-0 w-3 h-0 z-2 translate-z-0 rounded-10 opacity-0 duration-450 group-[&.is-active]/inner-li:opacity-100 group-[&.is-active]/inner-li:h-20"></div>
                                                                                                    <a href="<?= env('HTTP_DOMAIN') .'/' . $childitem->seo_url ?>/<?= $subchilditem->seo_url ?>" class="flex group/inner-link items-center gap-25 xl:gap-20 p-20 rounded-10 bg-transparent duration-450 min-h-[70px] lg:px-30 lg:pl-50 lg:py-10 lg:min-h-fit pl-[60px]">
                                                                                                        <span class="text text text-16 sm:text-14 leading-tight text-[#111111] duration-450 group-hover/inner-li:text-main-500 group-[&.is-active]/inner-li:text-main-500 lg:font-normal group-hover/inner-li:translate-x-3"><?= $subchilditem->title ?></span>
                                                                                                    </a>
                                                                                                </li>
                                                                                            <?php endforeach; ?>
                                                                                            <li class="inner-li relative z-20 group/inner-li with-data-image bg-main-500 lg:border-0 lg:border-b lg:border-solid lg:border-black/10 duration-450 hover:bg-main-600" data-image="<?= env('HTTP_DOMAIN') .'/' . getFolder(['uploads_folder', 'product_images_folder'], $subchilditem->lang) .'/' . $subchilditem->image ?>" data-link="<?= $subchilditem->seo_url ?>">
                                                                                                <a href="{{env('HTTP_DOMAIN').'/'. $childitem->seo_url}}" class="flex group/inner-link items-center gap-25 xl:gap-20 p-20 rounded-10 bg-transparent duration-450 min-h-[70px] lg:px-30 lg:pl-50 lg:py-10 lg:min-h-fit pl-[60px]">
                                                                                                    <span class="text text text-16 sm:text-14 leading-tight text-white duration-450 group-hover/inner-li:text-white group-[&.is-active]/inner-li:text-white lg:font-medium group-hover/inner-li:translate-x-3">All <?= $childitem->title ?> Product</span>
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
                                                                <?php foreach ($item->children as $key => $childitem) : ?>
                                                                    <?php if (isset($childitem->children)) : ?>
                                                                        <ul class="mega-menu-inner-ul-web absolute left-0 top-0 w-full opacity-0 invisible duration-450 [&.is-active]:opacity-100 [&.is-active]:visible [&.is-active]:delay-450 flex flex-col gap-8 min-xl:scrollbar min-xl:scrollbar-w-[5px] min-xl:scrollbar-track-rounded-[5px] min-xl:scrollbar-thumb-rounded-[5px] min-xl:scrollbar-thumb-main-500 min-xl:scrollbar-track-main-500/10 min-xl:overflow-x-hidden min-xl:overflow-y-auto min-xl:max-h-[calc(500px)] pr-5 lg:gap-0 lg:[&_li:last-child]:border-b-0 lg:[&_li:first-child]:border-t md:pr-0 <?php if ($key == 0) : ?>is-active<?php endif; ?>" data-id="<?= $key + 1 ?>">
                                                                            <!-- data-image ALANINDA BULUNAN RESİM, SAĞ TARAFTA BULUNAN RESİM ALANINA BASMAKTADIR. -->
                                                                            <?php foreach ($childitem->children as $key => $subchilditem) : ?>
                                                                                <li class="inner-li relative z-20 group/inner-li with-data-image  lg:border-0 lg:border-b lg:border-solid lg:border-black/10" data-image="<?= env('HTTP_DOMAIN') .'/' . getFolder(['uploads_folder', 'product_images_folder'], $subchilditem->lang) .'/' . $subchilditem->image ?>" data-link="<?= $subchilditem->seo_url ?>">
                                                                                    <div class="gradient bg-main-500 absolute top-1/2 -translate-y-1/2 left-0 w-3 h-0 z-2 translate-z-0 rounded-10 opacity-0 duration-450 group-hover/inner-li:opacity-100 group-hover/inner-li:h-20 group-[&.is-active]/inner-li:opacity-100 group-[&.is-active]/inner-li:h-20 rtl:left-auto rtl:right-[-5px]"></div>
                                                                                    <a href="<?= env('HTTP_DOMAIN') .'/' . $childitem->seo_url ?>/<?= $subchilditem->seo_url ?>" class="flex group/inner-link items-center gap-25 xl:gap-20 px-20 py-5 rounded-10 bg-transparent duration-450 min-h-[40px] lg:px-30 lg:pl-50 lg:py-10 lg:min-h-fit pl-[60px]">
                                                                                        <span class="text text text-16 sm:text-14 leading-tight text-[#111111] duration-450 group-hover/inner-li:text-main-500  lg:font-medium group-hover/inner-li:translate-x-3 font-light group-[&.is-active]/inner-li:text-main-500 group-[&.is-active]/inner-li:translate-x-3"><?= $subchilditem->title ?></span>
                                                                                    </a>
                                                                                </li>
                                                                            <?php endforeach; ?>
                                                                            <li class="inner-li relative z-20 group/inner-li with-data-image bg-main-500 lg:border-0 lg:border-b lg:border-solid lg:border-black/10 duration-450 hover:bg-main-600" data-image="<?= env('HTTP_DOMAIN') .'/' . getFolder(['uploads_folder', 'product_images_folder'], $subchilditem->lang) .'/' . $subchilditem->image ?>" data-link="<?= $subchilditem->seo_url ?>">
                                                                                <a href="{{env('HTTP_DOMAIN').'/'. $childitem->seo_url}}" class="flex group/inner-link items-center gap-25 xl:gap-20 p-20 rounded-10 bg-transparent duration-450 min-h-[60px] lg:px-30 lg:pl-50 lg:py-10 lg:min-h-fit pl-[60px]">
                                                                                    <span class="text text text-16 sm:text-14 leading-tight text-white duration-450 group-hover/inner-li:text-white lg:font-medium group-hover/inner-li:translate-x-3">All <?= $childitem->title ?> Product</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    <?php else : ?>
                                                                        <ul class="mega-menu-inner-ul-web absolute left-0 top-0 w-full opacity-0 invisible duration-450 [&.is-active]:opacity-100 [&.is-active]:visible [&.is-active]:delay-450 flex flex-col gap-8 min-xl:scrollbar min-xl:scrollbar-w-[5px] min-xl:scrollbar-track-rounded-[5px] min-xl:scrollbar-thumb-rounded-[5px] min-xl:scrollbar-thumb-main-500 min-xl:scrollbar-track-main-500/10 min-xl:overflow-x-hidden min-xl:overflow-y-auto min-xl:max-h-[calc(500px)] pr-5 lg:gap-0 lg:[&_li:last-child]:border-b-0 lg:[&_li:first-child]:border-t md:pr-0" data-id="<?= $key + 1 ?>">
                                                                            <li class="inner-li relative z-20 group/inner-li with-data-image bg-main-500 lg:border-0 lg:border-b lg:border-solid lg:border-black/10 duration-450 hover:bg-main-600" data-image="<?= env('HTTP_DOMAIN') .'/' . getFolder(['uploads_folder', 'product_images_folder'], $subchilditem->lang) .'/' . $subchilditem->image ?>" data-link="<?= $subchilditem->seo_url ?>">
                                                                                <a href="{{env('HTTP_DOMAIN').'/'. $childitem->seo_url}}" class="flex group/inner-link items-center gap-25 xl:gap-20 p-20 rounded-10 bg-transparent duration-450 min-h-[60px] lg:px-30 lg:pl-50 lg:py-10 lg:min-h-fit pl-[60px]">
                                                                                    <span class="text text text-16 sm:text-14 leading-tight text-white duration-450 group-hover/inner-li:text-white lg:font-medium group-hover/inner-li:translate-x-3">All <?= $childitem->title ?> Product</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </div>
                                                        </div>
                                                        <div class="image-field flex items-center lg:hidden">
                                                            <a href="javascript:;" class="mega-menu-image-field image group/image overflow-hidden translate-z-0 h-win-header w-full rounded-20 h-[500px] max-h-[500px]">
                                                                <img src="<?= env('HTTP_DOMAIN') .'/' . getFolder(['uploads_folder', 'product_images_folder'], $childitem->lang) .'/' . $childitem->image ?>" class="full-cover duration-450 [&.is-active]:opacity-0 [&.is-active]:scale-110 group-hover/image:scale-110" loading="lazy" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    @elseif($item->page_type == 'using_areas')

                                    <li class="menu-item group/menu-item lg:relative has-mega-menu">
                                        <a href="<?=env('HTTP_DOMAIN') . '/' . getUrl('using_areas_url')  ?>" class="group/showable flex items-center ltr:gap-10 lg:ltr:gap-0 lg:px-30 lg:py-15 lg:border-0 lg:border-b lg:border-solid lg:border-black/10 duration-450 [&.is-show]:bg-main-500">
                                            <span class="text text-[#1A1A1A] text-16 sm:text-16 leading-tight duration-450 group-hover/menu-item:text-main-500 font-light lg:font-normal group-[&.is-show]/showable:text-white"><?= $item->title ?></span>
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
                                                        
                                                        <div class="main-inner relative w-full">
                                                            <div class="split absolute -right-[32px] translate-x-0 w-1 h-full bg-black/10 lg:hidden rtl:right-auto rtl:left-[-32px]"></div>
                                                            <ul class="mega-menu-main-content relative flex flex-col gap-8 min-xl:scrollbar min-xl:scrollbar-w-[5px] min-xl:scrollbar-track-rounded-[5px] min-xl:scrollbar-thumb-rounded-[5px] min-xl:scrollbar-thumb-main-500 min-xl:scrollbar-track-main-500/10 min-xl:overflow-x-auto min-xl:overflow-y-auto min-xl:max-h-[calc(500px)] pr-5 lg:pr-0 lg:gap-0 rtl:pr-0 rtl:pl-5">
                                                                <?php foreach ($item->children as $key => $childItem) : ?>
                                                                    <!-- BURADA BULUNAN data-id ALANI, BİR SONRAKİ ELEMENT ALANINDA (mega-menu-inner-content) BULUNAN data-id İLE EŞLEŞEREK ÇALIŞMAKTADIR. -->
                                                                    <!-- data-image ALANINDA BULUNAN RESİM, SAĞ TARAFTA BULUNAN RESİM ALANINA BASMAKTADIR. -->
                                                                    <li class="ullier-li z-20 group/li with-data-image lg:relative lg:border-0 lg:border-b lg:border-solid lg:border-black/10" data-id="<?= $key + 1 ?>" data-image="<?= env('HTTP_DOMAIN').'/'. getFolder(['uploads_folder', 'product_images_folder'], $childItem->lang) .'/' . $childItem->image ?>" data-link="<?= env('HTTP_DOMAIN') .'/' . $childItem->seo_url ?>">
                                                                        <div class="relative">
                                                                            <a href="<?= env('HTTP_DOMAIN') .'/' . $item->seo_url . '/' .  $childItem->seo_url ?>" class="flex group/link items-center gap-25 xl:gap-20 px-20 py-[10px] rounded-10 bg-transparent duration-450 relative lg:px-30 lg:pl-40 lg:py-10 [&.is-show]:bg-main-500 lg:rounded-none">
                                                                                <div class="gradient bg-main-500 absolute top-0 left-0 w-full h-full z-2 translate-z-0 rounded-10 opacity-0 duration-450 group-[&.is-active]/li:opacity-100 group-hover/li:opacity-100 pointer-events-none lg:hidden"></div>
                                                                                <div class="image-field md:hidden shrink-0 flex items-center justify-center rounded-15 duration-450 relative z-2 !ml-0">
                                                                                    <div class="image h-40 lg:h-30 w-40 lg:w-30 overflow-hidden translate-z-0 opacity-100 duration-450 min-lg:group-hover/li:opacity-0 min-lg:group-[&.is-active]/li:opacity-0 lg:group-hover/li:opacity-100 group-[&.is-show]/link:opacity-0 lg:group-hover/li:group-[&.is-show]/link:opacity-0">
                                                                                        <img src="<?= env('HTTP_DOMAIN') .'/' . getFolder(['uploads_folder', 'product_images_folder'], $childItem->lang) .'/' . $childItem->icon2 ?>" class="full-contain" loading="lazy" alt="">
                                                                                    </div>
                                                                                    <div class="image h-40 lg:h-30 w-40 lg:w-30 overflow-hidden translate-z-0 absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 opacity-0 duration-450 min-lg:group-hover/li:opacity-100 min-lg:group-[&.is-active]/li:opacity-100 lg:group-hover/li:opacity-0 group-[&.is-show]/link:opacity-100 lg:group-hover/li:group-[&.is-show]/link:opacity-100">
                                                                                        <img src="<?= env('HTTP_DOMAIN') .'/' . getFolder(['uploads_folder', 'product_images_folder'], $childItem->lang) .'/' . $childItem->icon1 ?>" class="full-contain" loading="lazy" alt="">
                                                                                    </div>
                                                                                </div>
                                                                                <span class="text text text-16 sm:text-16 leading-tight text-[#111111] duration-450 group-hover/li:text-white min-lg:group-[&.is-active]/li:text-white lg:font-normal lg:group-hover/li:text-main-500 relative z-2 md:!ml-0 font-light group-[&.is-show]/link:text-white lg:group-hover/li:group-[&.is-show]/link:text-white"><?= $childItem->title ?></span>
                                                                            </a>
                                                                        </div>
                                                                    </li>
                                                                <?php endforeach; ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="image-field flex items-center lg:hidden">
                                                        <a href="javascript:;" class="mega-menu-image-field image group/image overflow-hidden translate-z-0 h-win-header w-full rounded-20 h-[500px] max-h-[500px]">
                                                            <img src="<?= env('HTTP_DOMAIN') .'/' . getFolder(['uploads_folder', 'product_images_folder'], $childItem->lang) .'/' . $childItem->image ?>" class="full-cover duration-450 [&.is-active]:opacity-0 [&.is-active]:scale-110 group-hover/image:scale-110" loading="lazy" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    @elseif($item->page_type == 'services')

                                        <li class="menu-item group/menu-item lg:relative has-mega-menu">
                                            <a href="<?= env('HTTP_DOMAIN') . '/' . getUrl('services_url') ?>" class="group/showable flex items-center ltr:gap-10 lg:ltr:gap-0 lg:px-30 lg:py-15 lg:border-0 lg:border-b lg:border-solid lg:border-black/10 duration-450 [&.is-show]:bg-main-500">
                                                <span class="text text-[#1A1A1A] text-16 sm:text-16 leading-tight duration-450 group-hover/menu-item:text-main-500 font-light lg:font-normal group-[&.is-show]/showable:text-white"><?= $item->title ?></span>
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
                                                        
                                                        <ul class="grid grid-cols-3 gap-x-100 lg:grid-cols-1 2xl:gap-x-100 xl:gap-x-50 gap-y-30 scrollbar scrollbar-w-[5px] scrollbar-track-rounded-[5px] scrollbar-thumb-rounded-[5px] scrollbar-thumb-main-500 scrollbar-track-main-500/10 overflow-x-hidden overflow-y-auto max-h-[500px] lg:max-h-full pr-5 lg:gap-0">
                                                            <!-- ALANA ÇOK FAZLA İÇERİK EKLENİRSE, OTOMATİK SCROLL OLUYOR -->
                                                            <?php foreach ($item->children as $key => $childitem) : ?>
                                                                <li>
                                                                    <a href="<?= env('HTTP_DOMAIN') . '/' . getUrl('services_url') . '/' . $childitem->seo_url ?>" class="flex group/link lg:px-30 lg:border-0 lg:border-b lg:border-solid lg:border-black/10 lg:py-10 lg:pl-[40px]">
                                                                        <div class="content flex gap-30 xl:gap-20 md:gap-0">
                                                                            <div class="image-field h-150 w-150 xl:h-100 xl:w-100 lg:w-75 lg:h-75 md:hidden shrink-0 flex items-center justify-center bg-[#F1F1F1] rounded-15 duration-450 group-hover/link:bg-main-500 relative">
                                                                                <div class="image h-60 lg:h-50 w-60 lg:w-50 overflow-hidden translate-z-0 opacity-100 duration-450 group-hover/link:opacity-0">
                                                                                    <img src="<?= env('HTTP_DOMAIN') .'/' . getFolder(['uploads_folder', 'product_images_folder'], $childitem->lang) .'/' . $childitem->icon2 ?>" class="full-contain" loading="lazy" alt="">
                                                                                </div>
                                                                                <div class="image h-60 lg:h-50 w-60 lg:w-50 overflow-hidden translate-z-0 absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 opacity-0 duration-450 group-hover/link:opacity-100">
                                                                                    <img src="<?= env('HTTP_DOMAIN') .'/' . getFolder(['uploads_folder', 'product_images_folder'], $childitem->lang) .'/' . $childitem->icon1?>" class="full-contain" loading="lazy" alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="text-field flex flex-col justify-center gap-30 xl:gap-20 md:gap-10">
                                                                                <p class="title text-20 lg:text-16 sm:text-16 leading-tight text-[#111111] duration-450 group-hover/link:text-main-500 font-semibold lg:font-normal"><?= $childitem['title'] ?></p>
                                                                                <p class="expo text-16 lg:text-14 font-light leading-tight text-[#111111] duration-450 lg:hidden"><?= $childitem['expo'] ?></p>
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

                                    @else
                                        <li class="menu-item group/menu-item lg:relative has-mega-menu">
                                            <a href="{{ env('HTTP_DOMAIN') . '/' . $item->seo_url }}" class="group/showable flex items-center ltr:gap-10 lg:ltr:gap-0 lg:px-30 lg:py-15 lg:border-0 lg:border-b lg:border-solid lg:border-black/10 duration-450 [&.is-show]:bg-main-500">
                                                <span class="text text-[#1A1A1A] text-16 sm:text-16 leading-tight duration-450 group-hover/menu-item:text-main-500 font-light lg:font-normal group-[&.is-show]/showable:text-white">{{ $item->title }}</span>
                                            </a>
                                        </li>
                                    @endif

                                @endforeach
                                
                            </ul>
                        </div>
                        <div class="split w-1 h-[24px] bg-[#1A1A1A]/10 shrink-0 lg:hidden"></div>
                        <div class="other-menu-field flex items-center gap-30 xs:gap-20">
                            <div class="language-field relative">
                                <ul class="flex gap-[15px] sm:gap-[10px] xs:gap-10">
                                    <li class="group/language-li relative">
                                        <a href="javascript:;" class="language group/language flex items-center gap-10 opacity-50 duration-450 [&.active]:opacity-100 active">
                                            <i class="icon icon-earth text-[18px] h-[18px] block leading-none duration-450 text-main-500 group-hover/language-li:text-main-500"></i>
                                            <span class="text text-16 text-[#111111] leading-tight duration-450 group-hover/language-li:text-main-500 font-light">TR</span>
                                            <i class="icon icon-chevron-bottom text-[8px] h-[8px] block leading-none duration-450 text-[#111111] group-hover/language-li:text-main-500 group-hover/language-li:rotate-180"></i>
                                        </a>
                                        <div class="language-menu absolute top-[calc(100%+50px)] left-1/2 -translate-x-1/2 translate-y-20 opacity-0 invisible duration-450 group-hover/language-li:translate-y-0 group-hover/language-li:opacity-100 group-hover/language-li:visible pointer-events-none group-hover/language-li:pointer-events-auto before:absolute before:left-0 before:w-full before:h-[calc(50px+20px)] before:-top-[calc(50px+20px)] before:bg-transparent before:duration-450 group-hover/language-li:before:h-[calc(50px)] group-hover/language-li:before:-top-[calc(50px)]">
                                            <ul class="flex flex-col gap-20 xl:gap-15 p-20 bg-white rounded-10 shadow-default">
                                                <?php $languagesArray = App\Models\Language::all(); 
                                                // get URL segments
                                                $segments = explode('/', url()->current());
                                                //$lang = ['tr', 'en', 'ar', 'ru', 'es', 'fr'];
                                                foreach ($languagesArray as $language) { ?>
                                                    <?php 
                                                        if(isset($segments[3]) && isset($segments[4])):
                                                            $segments[3] = urldecode($segments[3]);
                                                            $segments[4] = urldecode($segments[4]);
                                                            $langParam0 = App\Models\Menu::where(['lang' => app()->getLocale(), 'seo_url' => $segments[3]])->first();
                                                            if(isset($blog)):
                                                                $langParam1 = App\Models\Blog::where(['lang' => app()->getLocale(), 'seo_url' => $segments[4]])->first();
                                                            elseif(isset($careerJob)):
                                                                $langParam1 = App\Models\CareerJob::where(['lang' => app()->getLocale(), 'seo_url' => $segments[4]])->first();
                                                            elseif(isset($project)):
                                                                $langParam1 = App\Models\Project::where(['lang' => app()->getLocale(), 'seo_url' => $segments[4]])->first();
                                                            elseif(isset($using_area)):
                                                                $langParam1 = App\Models\UsingArea::where(['lang' => app()->getLocale(), 'seo_url' => $segments[4]])->first();
                                                            elseif(isset($service)):
                                                                $langParam1 = App\Models\Service::where(['lang' => app()->getLocale(), 'seo_url' => $segments[4]])->first();
                                                            else:
                                                                $langParam1 = App\Models\Menu::where(['lang' => app()->getLocale(), 'seo_url' => $segments[4]])->first();
                                                            endif;
                                                            $langParam0_new = App\Models\Menu::where(['lang' => $language->lang_code, 'menu_id' => $langParam0->menu_id])->first();
                                                            if(isset($blog)):
                                                                $langParam1_new = App\Models\Blog::where(['lang' => $language->lang_code, 'blog_id' => $langParam1->blog_id])->first();
                                                            elseif(isset($careerJob)):
                                                                $langParam1_new = App\Models\CareerJob::where(['lang' => $language->lang_code, 'job_id' => $langParam1->job_id])->first();
                                                            elseif(isset($project)):
                                                                $langParam1_new = App\Models\Project::where(['lang' => $language->lang_code, 'project_id' => $langParam1->project_id])->first(); 
                                                            elseif(isset($using_area)):
                                                                $langParam1_new = App\Models\UsingArea::where(['lang' => $language->lang_code, 'using_area_id' => $langParam1->using_area_id])->first(); 
                                                            elseif(isset($service)):
                                                                $langParam1_new = App\Models\Service::where(['lang' => $language->lang_code, 'service_id' => $langParam1->service_id])->first();
                                                            else:
                                                                $langParam1_new = App\Models\Menu::where(['lang' => $language->lang_code, 'menu_id' => $langParam1->menu_id])->first();
                                                            endif;
                                                            //dd($langParam0, $langParam1);
                                                            if($langParam0 && $langParam1):
                                                                $url = $language->domain . '/' . $langParam0_new->seo_url . '/' . $langParam1_new->seo_url;
                                                            endif;
                                                        endif;
                                                        if(isset($segments[3]) && !isset($segments[4])):
                                                            //set $segment[3] as utf8 string
                                                            $segments[3] = urldecode($segments[3]);
                                                            $langParam0 = App\Models\Menu::where(['lang' => app()->getLocale(), 'seo_url' => $segments[3]])->first();

                                                            $langParam0_new = App\Models\Menu::where(['lang' => $language->lang_code, 'menu_id' => $langParam0->menu_id])->first();
                                                            //dd($langParam0, $langParam1);
                                                            if($langParam0 && $langParam0_new):
                                                                $url = $language->domain . '/' . $langParam0_new->seo_url;
                                                            endif;
                                                        endif;
                                                        if(!isset($segments[3]) && !isset($segments[4])):
                                                            $url = $language->domain . '/';
                                                        endif;
                                                    
                                                ?>
                                                <li>
                                                    <a href="{{$url}}" class="language group/language flex items-center gap-10 duration-450 [&.active]:opacity-100">
                                                        <div class="icon">
                                                            <div class="image h-20 w-20 overflow-hidden translate-z-0 rounded-full">
                                                                <img src="<?= $language->flag ?>" class="full-cover" loading="lazy" alt="">
                                                            </div>
                                                        </div>
                                                        <span class="text text-16 text-[#111111] leading-tight duration-450 group-hover/language:text-main-500">{{ strtoupper($language->lang_code ) }}</span>
                                                    </a>
                                                </li>
                                                
                                            <?php } ?>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                                <div class="split hidden lg:flex w-1 h-30 absolute -right-15 xs:-right-10 top-1/2 -translate-y-1/2 bg-black opacity-20 rtl:right-auto rtl:left-[-15px]"></div>
                            </div>
                            <div class="mobile-menu-selector group/mobile-menu space-y-[6px] min-h-[40px] flex-col items-center justify-center cursor-pointer hidden lg:flex">
                                <div class="line w-[25px] h-[2px] bg-main-500 group-hover/mobile-menu:w-[25px] group-hover/mobile-menu:bg-main-500/60 duration-450 flex justify-end  group-[.is-active]/mobile-menu:bg-main-500 group-[.is-active]/mobile-menu:w-[25px] group-[.is-fixed]/header:bg-main-500 group-[.is-active]/mobile-menu:opacity-0"></div>
                                <div class="line w-[20px] h-[2px] bg-main-500 group-hover/mobile-menu:w-[25px] group-hover/mobile-menu:bg-main-500/60 duration-450 flex justify-end  group-[.is-active]/mobile-menu:bg-main-500 group-[.is-active]/mobile-menu:w-[25px] group-[.is-fixed]/header:bg-main-500 group-[.is-active]/mobile-menu:rotate-45 group-[.is-active]/mobile-menu:m-[-1px]"></div>
                                <div class="line w-[15px] h-[2px] bg-main-500 group-hover/mobile-menu:w-[25px] group-hover/mobile-menu:bg-main-500/60 duration-450 flex justify-end group-[.is-active]/mobile-menu:bg-main-500 group-[.is-active]/mobile-menu:w-[25px] group-[.is-fixed]/header:bg-main-500 group-[.is-active]/mobile-menu:-rotate-45 group-[.is-active]/mobile-menu:m-[-1px]"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<penta-yazilim class="block">