<html lang="en" data-theme="light">

@include('cadr1.style')

<!--begin::Body-->
<body id="kt_app_body" data-kt-app-layout="dark-sidebar" style="height: auto;" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default TotalExt-Theme-dark TotalExt-Lang-en" bis_register="W3sibWFzdGVyIjp0cnVlLCJleHRlbnNpb25JZCI6ImVwcGlvY2VtaG1ubGJoanBsY2drb2ZjaWllZ29tY29uIiwiYWRibG9ja2VyU3RhdHVzIjp7IkRJU1BMQVkiOiJkaXNhYmxlZCIsIkZBQ0VCT09LIjoiZGlzYWJsZWQiLCJUV0lUVEVSIjoiZGlzYWJsZWQiLCJSRURESVQiOiJkaXNhYmxlZCJ9LCJ2ZXJzaW9uIjoiMS45LjAiLCJzY29yZSI6MTA5MDB9XQ==">
<!--begin::Theme mode setup on page load-->
<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
<!--end::Theme mode setup on page load-->
<!--Begin::Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!--End::Google Tag Manager (noscript) -->
<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root" bis_skin_checked="1">
    <!--begin::Page-->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page" bis_skin_checked="1">
        <!--begin::Header-->
   
        <!--end::Header-->
        <!--begin::Wrapper-->
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper" bis_skin_checked="1">

            <!--begin sidebar-->
            @include('cadr1.sidebar')
            <!--end sidebar -->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main" bis_skin_checked="1">

                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid" bis_skin_checked="1">
                    <!--begin toolbar-->
                   
                    @yield('content')
                    <!-- end toolbar -->
                </div>
            </div>
        </div>
        <!--end::Wrapper-->
    </div>
    @include('cadr1.script')
    @stack('scripts')
 
        
   
    <!--end::Page-->
</div>
</body>
</html>
