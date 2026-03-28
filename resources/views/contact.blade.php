@extends('layouts.main')

@section('content')
<?php $code = \App\Models\Code::where('lang', app()->getLocale())->first(); ?>
<?php $pageTitle = $seo['seo_title'] ?? 'Contact';?>

<main class="main-field header-space-padding">
    <!-- CONTACT MAIN CONTENT -->
    <section class="contact-main-section relative bg-[#F1F1F1] md:!h-auto">
        <div class="gradient absolute left-0 top-0 w-full h-[200px] bg-[#F1F1F1] mt-[-130px]"></div>
        <div class="container max-w-[1500px] relative z-20 h-full">
            <div class="wrapper main-wrapper grid grid-cols-[minmax(0,3fr)_minmax(0,1fr)_minmax(0,8fr)] gap-[30px] xl:grid-cols-[minmax(0,4fr)_minmax(0,8fr)] h-full md:grid-cols-1">
                <?php $list = [
                    ['office-name' => 'Head Office',],
                    ['office-name' => 'London, UK',],
                    ['office-name' => 'Doha, Qatar',],
                    ['office-name' => 'Moscow, RUSSIA',],
                    ['office-name' => 'New York, USA',],
                ]; ?>
                <div class="office-list-field pt-60 xl:pt-60 lg:pt-60 md:pt-45 sm:pt-30">
                    <div class="dynamic-sticky">
                        <!-- TITILE -->
                        <div class="title-field block z-10 relative space-y-[30px] md:space-y-20 sm:space-y-15 mb-30 sm:mb-20">
                            <p class="page-title text-[#ADADAD] text-20 sm:text-18 xs:text-16 font-light leading-tight relative tracking-[10px] sm:tracking-[2.5px]">OFFICES</p>
                        </div>
                        <!-- OFFICE LIST -->
                        <ul class="[&_.office-box:last-child_.split]:hidden [&_.office-box:has(+.hoverable)_.split]:opacity-0">

                            <?php foreach ($list as $key => $item) : ?>
                                <div class="office-box item group/item relative cursor-pointer">
                                    <div class="top-field">
                                        <p class="title text-[#111111]/65 text-28 lg:text-24 md:text-20 sm:text-18 xs:text-16 font-semibold leading-tight duration-450 group-[&.is-active]/item:text-main-500 group-hover/item:text-main-500"><?= $item['office-name'] ?></p>
                                    </div>
                                    <div class="bottom-field h-0 duration-450 overflow-hidden">
                                        <div class="informations mt-50 mb-20 sm:mb-0 md:mt-30">
                                            <ul class="space-y-[20px]">
                                                <li>
                                                    <a href="javascript:;" class="group/link flex items-center relative ltr:space-x-[20px]">
                                                        <i class="icon icon-phone text-[18px] h-[18px] text-main-500 block leading-none group-hover/link:scale-110 duration-450 rtl:ml-20"></i>
                                                        <span class="text text-[18px] sm:text-[16px] text-[#111111] font-light leading-tight group-hover/link:text-main-500 group-hover/link:translate-x-[4px] duration-450">+90 (212) 678 13 13</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" class="group/link flex items-center relative ltr:space-x-[20px]">
                                                        <i class="icon icon-mail text-[18px] h-[18px] text-main-500 block leading-none group-hover/link:scale-110 duration-450 rtl:ml-20"></i>
                                                        <span class="text text-[18px] sm:text-[16px] text-[#111111] font-light leading-tight group-hover/link:text-main-500 group-hover/link:translate-x-[4px] duration-450">info@avengrass.com</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" class="group/link flex items-center relative ltr:space-x-[20px]">
                                                        <i class="icon icon-location text-[18px] h-[18px] text-main-500 block leading-none group-hover/link:scale-110 duration-450 rtl:ml-20"></i>
                                                        <span class="text text-[18px] sm:text-[16px] text-[#111111] font-light leading-tight group-hover/link:text-main-500 group-hover/link:translate-x-[4px] duration-450 md:[&_br]:hidden">IOSB Bedrettin Dalan Bulvarı<br> Metro 34 Plaza No: 23/100<br> Başakşehir – Istanbul / TURKEY</span>
                                                    </a>
                                                </li>
                                                <li class="hidden md:block">
                                                    <a href="javcascript:;" class="button group/button w-fit h-[50px] flex justify-center items-center px-[30px] rounded-full bg-main-500 relative space-x-30 duration-450 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-main-600 hover:before:left-0 before:duration-450">
                                                        <div class="text text-16 flex items-center text-white relative z-10 leading-tight duration-450 group-hover/button:text-white">Get Direction</div>
                                                        <div class="icon-arrow-right text-[16px] height-[16px] leading-none flex items-center text-white relative z-10 duration-450 group-hover/button:text-white group-hover/button:translate-x-[5px]"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="split w-full h-1 bg-[#111111] opacity-10 my-30 xl:my-30 lg:my-25 md:my-20 group-hover/item:opacity-0 duration-450"></div>
                                </div>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="map-field col-start-3 xl:col-start-2 md:col-start-1 stretch-to-viewport stretch-wrapper h-full xs:h-250 sm:h-300 md:h-350 md:hidden">
                    <div class="office-map-warpper relative duration-450 w-full h-[calc(100%+60px)] top-[-60px] md:top-0 md:h-full">
                        <!-- SAĞ TARAFTA BULUNAN HARİTALAR RESİMDİR. -->
                        <!-- HARİTA ORTASINDA BULUNAN NOKTA, RESME GÖRE TAM ORTALI OLARAK GELMEKTEDİR. -->
                        <div class="office-map absolute left-0 w-full top-0 h-full group/dot opacity-0 invisible duration-450 translate-y-10 [&.is-active]:opacity-100 [&.is-active]:visible [&.is-active]:translate-y-0 [&.is-active]:delay-450">
                            <div class="gradient bg-gradient-to-b from-[#F1F1F1] to-[#F1F1F1]/0 absolute top-0 left-0 w-full h-[100px] z-2 translate-z-0 pointer-events-none
                            rtl:right-0 rtl:left-auto rtl:bg-gradient-to-b"></div>
                            <div class="gradient bg-gradient-to-t from-[#F1F1F1] to-[#F1F1F1]/0 absolute bottom-0 left-0 w-full h-[100px] z-2 translate-z-0 pointer-events-none
                            rtl:right-0 rtl:left-auto rtl:bg-gradient-to-t"></div>
                            <div class="gradient bg-gradient-to-r from-[#F1F1F1] to-[#F1F1F1]/0 absolute top-0 left-0 w-[100px] h-full z-2 translate-z-0 pointer-events-none
                            rtl:right-0 rtl:left-auto rtl:bg-gradient-to-l"></div>

                            <div id="map" class="w-full h-full md:h-[300px]"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM -->
    <section class="contact-form-section relative">
        <div class="gradient absolute left-0 top-0 w-full h-[200px] bg-[#F1F1F1]"></div>
        <div class="container max-w-[1300px] relative z-20">
            <div class="wrapper overflow-hidden px-[60px] py-[60px] xl:py-[80px] lg:py-[60px] md:py-[40px] sm:py-[30px] md:px-0 md:overflow-visible">
                <div class="form-content bg-white p-80 2xl:p-60 xl:p-50 lg:p-40 md:p-30 rounded-[30px] shadow-default relative overflow-hidden md:overflow-visible">
                    <?php $backgroundOpacity = 'opacity-2' ?>
                    <!-- opacity DEĞERİ PANELDEN SEÇİLEBİLİR OLMALI -->
                    <div class="background-logo absolute left-0 bottom-0 -translate-x-1/4 w-1/2 rotate-[30deg] md:hidden pointer-events-none <?= $backgroundOpacity ?>">
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
                    <div class="inner-form">
                        {!! $code->bitrix_form_code !!} 
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    // Location List
    window.locations = [{
            latLng: {
                lat: 41.0242476,
                lng: 28.9701656
            },
            zoom: 17,
            url: 'https://pentayazilim.com',
            marker: `<div class="inner w-[100px] h-[100px] sm:w-[40px] sm:h-[40px] duration-350 flex-center group/marker">
                <div class="image aspect-[50/50] max-w-[50px] md:aspect-square md:max-w-[50px] w-full overflow-hidden translate-z-0">
                    <img src="../assets/image/other/favicon.png" class="full-cover" loading="lazy" alt="">
                </div>
                <div class="text-field flex items-center px-[25px] py-[17.5px] bg-main-500 rounded-full absolute top-full left-1/2 -translate-x-1/2 w-fit gap-[15px] duration-450 group-hover/marker:bg-main-600 translate-y-[10px] group-hover/marker:translate-y-[5px] opacity-0 group-hover/marker:opacity-100">
                    <i class="icon icon-location text-[16px] h-[16px] text-white block leading-none duration-450"></i>
                    <p class="text text-[16px] whitespace-nowrap text-white tracking-[0.1rem] font-light group-hover/marker:tracking-[0.15rem] duration-450">Get Direction</p>
                </div>
            </div>`
        },
        {
            latLng: {
                lat: 41.0447299,
                lng: 28.6339078
            },
            zoom: 17,
            url: 'https://google.com',
            marker: `<div class="inner w-[100px] h-[100px] sm:w-[40px] sm:h-[40px] duration-350 flex-center group/marker">
                <div class="image aspect-[50/50] max-w-[50px] md:aspect-square md:max-w-[50px] w-full overflow-hidden translate-z-0">
                    <img src="../assets/image/other/favicon.png" class="full-cover" loading="lazy" alt="">
                </div>
                <div class="text-field flex items-center px-[25px] py-[17.5px] bg-main-500 rounded-full absolute top-full left-1/2 -translate-x-1/2 w-fit gap-[15px] duration-450 group-hover/marker:bg-main-600 translate-y-[10px] group-hover/marker:translate-y-[5px] opacity-0 group-hover/marker:opacity-100">
                    <i class="icon icon-location text-[16px] h-[16px] text-white block leading-none duration-450"></i>
                    <p class="text text-[16px] whitespace-nowrap text-white tracking-[0.1rem] font-light group-hover/marker:tracking-[0.15rem] duration-450">Get Direction</p>
                </div>
            </div>`
        }, {
            latLng: {
                lat: 41.0242476,
                lng: 28.9701656
            },
            zoom: 17,
            url: 'https://pentayazilim.com',
            marker: `<div class="inner w-[100px] h-[100px] sm:w-[40px] sm:h-[40px] duration-350 flex-center group/marker">
                <div class="image aspect-[50/50] max-w-[50px] md:aspect-square md:max-w-[50px] w-full overflow-hidden translate-z-0">
                    <img src="../assets/image/other/favicon.png" class="full-cover" loading="lazy" alt="">
                </div>
                <div class="text-field flex items-center px-[25px] py-[17.5px] bg-main-500 rounded-full absolute top-full left-1/2 -translate-x-1/2 w-fit gap-[15px] duration-450 group-hover/marker:bg-main-600 translate-y-[10px] group-hover/marker:translate-y-[5px] opacity-0 group-hover/marker:opacity-100">
                    <i class="icon icon-location text-[16px] h-[16px] text-white block leading-none duration-450"></i>
                    <p class="text text-[16px] whitespace-nowrap text-white tracking-[0.1rem] font-light group-hover/marker:tracking-[0.15rem] duration-450">Get Direction</p>
                </div>
            </div>`
        },
        {
            latLng: {
                lat: 41.0447299,
                lng: 28.6339078
            },
            zoom: 17,
            url: 'https://google.com',
            marker: `<div class="inner w-[100px] h-[100px] sm:w-[40px] sm:h-[40px] duration-350 flex-center group/marker">
                <div class="image aspect-[50/50] max-w-[50px] md:aspect-square md:max-w-[50px] w-full overflow-hidden translate-z-0">
                    <img src="../assets/image/other/favicon.png" class="full-cover" loading="lazy" alt="">
                </div>
                <div class="text-field flex items-center px-[25px] py-[17.5px] bg-main-500 rounded-full absolute top-full left-1/2 -translate-x-1/2 w-fit gap-[15px] duration-450 group-hover/marker:bg-main-600 translate-y-[10px] group-hover/marker:translate-y-[5px] opacity-0 group-hover/marker:opacity-100">
                    <i class="icon icon-location text-[16px] h-[16px] text-white block leading-none duration-450"></i>
                    <p class="text text-[16px] whitespace-nowrap text-white tracking-[0.1rem] font-light group-hover/marker:tracking-[0.15rem] duration-450">Get Direction</p>
                </div>
            </div>`
        }, {
            latLng: {
                lat: 41.0242476,
                lng: 28.9701656
            },
            zoom: 17,
            url: 'https://pentayazilim.com',
            marker: `<div class="inner w-[100px] h-[100px] sm:w-[40px] sm:h-[40px] duration-350 flex-center group/marker">
                <div class="image aspect-[50/50] max-w-[50px] md:aspect-square md:max-w-[50px] w-full overflow-hidden translate-z-0">
                    <img src="../assets/image/other/favicon.png" class="full-cover" loading="lazy" alt="">
                </div>
                <div class="text-field flex items-center px-[25px] py-[17.5px] bg-main-500 rounded-full absolute top-full left-1/2 -translate-x-1/2 w-fit gap-[15px] duration-450 group-hover/marker:bg-main-600 translate-y-[10px] group-hover/marker:translate-y-[5px] opacity-0 group-hover/marker:opacity-100">
                    <i class="icon icon-location text-[16px] h-[16px] text-white block leading-none duration-450"></i>
                    <p class="text text-[16px] whitespace-nowrap text-white tracking-[0.1rem] font-light group-hover/marker:tracking-[0.15rem] duration-450">Get Direction</p>
                </div>
            </div>`
        },
    ];

    // Generate Map Function
    function generateMap(i) {
        window.latLng = locations[i].latLng
        window.mapZoom = locations[i].zoom;
        window.mapURL = locations[i].url

        window.mapMarker = document.createElement('div');
        mapMarker.href = mapURL;
        mapMarker.target = '_blank';
        mapMarker.className = 'map-marker block !pointer-events-auto relative z-30';
        mapMarker.innerHTML = locations[i].marker;
    }
    generateMap(0)

    // Map Change
    let mapChangeTriggers = document.querySelectorAll('.office-box');
    mapChangeTriggers.forEach((trigger, i) => {
        trigger.addEventListener('click', () => {

            if (trigger.classList.contains('is-active')) return;
            mapChangeTriggers.forEach(trigger => trigger.classList.remove('is-active'))
            trigger.classList.add('is-active')
            generateMap(i)
            initMap()
        })
    })
</script>


@endsection

@section('script')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgSzMvUYR_Yw8eLUT3YTbQ5yQnARsCq8I&callback=initMap&libraries=marker&v=beta" defer=""></script>

@endsection