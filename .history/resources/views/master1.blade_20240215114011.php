<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  dir="{{ session('direction', 'ltr') }}" data-theme="light">

@include('cadr1.style')
@if(!\View::hasSection('hideHeader'))
    @include('cadr1.header')
@endif
@stack('head')
@stack('additional_styles')
<!--begin::Body-->
<body id="kt_app_body" data-kt-app-layout="dark-sidebar" style="height: auto;" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default TotalExt-Theme-dark TotalExt-Lang-en" bis_register="W3sibWFzdGVyIjp0cnVlLCJleHRlbnNpb25JZCI6ImVwcGlvY2VtaG1ubGJoanBsY2drb2ZjaWllZ29tY29uIiwiYWRibG9ja2VyU3RhdHVzIjp7IkRJU1BMQVkiOiJkaXNhYmxlZCIsIkZBQ0VCT09LIjoiZGlzYWJsZWQiLCJUV0lUVEVSIjoiZGlzYWJsZWQiLCJSRURESVQiOiJkaXNhYmxlZCJ9LCJ2ZXJzaW9uIjoiMS45LjAiLCJzY29yZSI6MTA5MDB9XQ==">
<!--begin::Theme mode setup on page load-->
<!--end::Theme mode setup on page load-->
<!--Begin::Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>


<div class="d-flex flex-column flex-root app-root" id="kt_app_root" bis_skin_checked="1">
    <!--begin::Page-->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page" bis_skin_checked="1">
        
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper" bis_skin_checked="1">

        @if(!\View::hasSection('hideSidebar'))
    @include('cadr1.sidebar')
@endif
      
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main" bis_skin_checked="1">

                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid" bis_skin_checked="1">
             
                   
                    @yield('content')
                    @include('footer.footer')

               
                </div>
            </div>
        </div>
        <!--end::Wrapper-->
    </div>
    @include('cadr1.script')
    @stack('scripts')
 
        
</div>
</body>
</html>
