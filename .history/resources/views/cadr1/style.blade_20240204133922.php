<!--begin::Head--><head>
    <style class="darkreader darkreader--fallback" media="screen"></style><style class="darkreader darkreader--text" media="screen"></style><style class="darkreader darkreader--invert" media="screen">.jfk-bubble.gtx-bubble, .captcheck_answer_label > input + img, span#closed_text > img[src^="https://www.gstatic.com/images/branding/googlelogo"], span[data-href^="https://www.hcaptcha.com/"] > #icon, #bit-notification-bar-iframe, ::-webkit-calendar-picker-indicator {
            filter: invert(100%) hue-rotate(180deg) contrast(90%) !important;
        }
  
      
      
        table {
            border-color: #545b5e;
        }
        ::placeholder {
            color: #b2aba1;
        }
        input:-webkit-autofill,
        textarea:-webkit-autofill,
     
     
    
        ::-moz-selection {
            background-color: #004daa !important;
            color: #e8e6e3 !important;
        }</style>

    <!-- <link href="http://http://192.168.100.7:8001/getmap:8000/assets/css/style.bundle.css" rel="stylesheet" type="text/css"> -->
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <base href="">
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Blazor, Django, Flask &amp; Laravel versions. Grab your copy now and get life-time updates for free.">
    <meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Blazor, Django, Flask &amp; Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="article">

    <meta property="og:title" content="Metronic | Bootstrap HTML, VueJS, React, Angular, Asp.Net Core, Blazor, Django, Flask &amp; Laravel Admin Dashboard Theme">
    <meta property="og:url" content="https://keenthemes.com/metronic">
    <meta property="og:site_name" content="Keenthemes | Metronic">

{{--    <link rel="shortcut icon" href="https://preview.keenthemes.com//assets/media/logos/favicon1.ico">--}}
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600;700;900&display=swap" rel="stylesheet">
{{--    <link href="{{asset('css/cssGeneral/cssGeneral.css')}}" rel="stylesheet" type="text/css" />--}}
    <link rel="icon" href="{{asset('assets\media\logos\favicon1.ico')}}">
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used by this page)-->
    <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css">

    <style class="darkreader darkreader--sync" media="screen"></style>
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->


    <style class="darkreader darkreader--sync" media="screen"></style>
    <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('style.css')}}" rel="stylesheet" type="text/css">
    <style class="darkreader darkreader--sync" media="screen"></style>
    <link rel="shortcut icon" href="{{asset('assets/media/logos/Scale_of_justice_2.svg.png')}}" />
    <!--begin::Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">
    <link href="{{ asset('vendor/file-manager/css/file-manager.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/19.2.16/css/intlTelInput.css" integrity="sha512-1fzvDP5eqhbc1j8H77kf7tBpz+lRlD+vTOuXz/A58/HcBUyH4BaJeo+xSyhE0Mo1V8JRSnAg5smJhkZo93EZOw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--begin calendar -->

    <!-- end calendar-->

    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
{{--    <link href="{{asset('css.css')}}" rel="stylesheet" type="text/css"/>--}}
{{--    <link href="{{asset('css1.css')}}" rel="stylesheet" type="text/css"/>--}}



    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
{{--    <link href="assets/plugins/global/{{__('messages.cssPlAr')}}" rel="stylesheet" type="text/css" />--}}
{{--    <link href="assets/css/{{__('messages.cssAR')}}" rel="stylesheet" type="text/css" />--}}
    <!--end::Global Stylesheets Bundle-->
    <link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.3.2/leaflet.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link href="{{asset('assets/css.css')}}" rel="stylesheet" type="text/css"/>

    <!--begin::newCss-->

    <!--end::newCss-->



    <!--end::Global Stylesheets Bundle-->
    <!--Begin::Google Tag Manager -->
    <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-CDVH4VH813&amp;l=dataLayer&amp;cx=c"></script><script src="https://connect.facebook.net/signals/config/738802870177541?v=2.9.84&amp;r=stable" async=""></script><script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script type="text/javascript" async="" src="https://www.googleadservices.com/pagead/conversion_async.js"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-5FS8GGP"></script><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src= 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-5FS8GGP');</script><meta name="darkreader" content="7d1342d903484640a91009066071e18d"><style class="darkreader darkreader--override" media="screen">
        body{
            font-family: 'Montserrat', sans-serif;
        }
        .vimvixen-hint {
            background-color: #7b5300 !important;
            border-color: #d8b013 !important;
            color: #f3e8c8 !important;
        }
        ::placeholder {
            opacity: 0.5 !important;
        }


        .tou-75mvi {
            background-color: #032029 !important;
        }
        .tou-ta9e87,
        .tou-1w3fhi0,
        .tou-1b8t2us,
        .tou-py7lfi,
        .tou-1lpmd9d,
        .tou-1frrtv8,
        .tou-17ezmgn {
            background-color: #0a0a0a !important;
        }
        .tou-uknfeu {
            background-color: #231603 !important;
        }
        .tou-6i3zyv {
            background-color: #19576c !important;
        }
        embed[type="application/pdf"][src="about:blank"] { filter: invert(100%) contrast(90%); }</style>
    <!--End::Google Tag Manager -->
    <meta http-equiv="origin-trial" content="A7bG5hJ4XpMV5a3V1wwAR0PalkFSxLOZeL9D/YBYdupYUIgUgGhfVJ1zBFOqGybb7gRhswfJ+AmO7S2rNK2IOwkAAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjY5NzY2Mzk5LCJpc1RoaXJkUGFydHkiOnRydWV9"><script type="text/javascript" async="" src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/984933920/?random=1664288552232&amp;cv=9&amp;fst=1664288552232&amp;num=1&amp;bg=ffffff&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=1200&amp;u_w=1920&amp;u_ah=1160&amp;u_aw=1920&amp;u_cd=24&amp;u_his=2&amp;u_tz=60&amp;u_java=false&amp;u_nplug=5&amp;u_nmime=2&amp;gtm=2wg9q0&amp;sendb=1&amp;ig=1&amp;frm=0&amp;url=https%3A%2F%2Fpreview.keenthemes.com%2Fmetronic8%2Fdemo1%2Frtl%2Fapps%2Fcustomers%2Flist.html&amp;ref=https%3A%2F%2Fpreview.keenthemes.com%2Fmetronic8%2Fdemo1%2Frtl%2Findex.html%3F_ga%3D2.65527207.841205870.1664288514-785835778.1664288514&amp;tiba=Metronic%20-%20the%20world's%20%231%20selling%20Bootstrap%20Admin%20Theme%20Ecosystem%20for%20HTML%2C%20Vue%2C%20React%2C%20Angular%20%26%20Laravel%20by%20Keenthemes&amp;auid=1593735846.1664288514&amp;hn=www.googleadservices.com&amp;async=1&amp;rfmt=3&amp;fmt=4"></script></head>
<!--end::Head-->
