@extends('master1')

@section('title', "Details Customer")

@section('head')
    <link href="{{asset('assets/css/styleSelect.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
<link href="
https://cdn.jsdelivr.net/npm/bootstrap-select-country@4.2.0/dist/css/bootstrap-select-country.min.css
" rel="stylesheet">
@push('additional_styles')
    <style>
        body, h1, h2, h3, h4, h5, h6, p, div {
            direction: ltr !important; /* Force LTR */
        }
    </style>
@endpush
 
@endsection
@section('content')


<div id="kt_app_content" class="app-content  flex-column-fluid " bis_skin_checked="1">
    
           
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container  container-xxl " bis_skin_checked="1">
            <!--begin::Layout-->
<div class="d-flex flex-column flex-xl-row" bis_skin_checked="1">
    <!--begin::Sidebar-->
    <div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10" bis_skin_checked="1">
        
<!--begin::Card-->
<div class="card mb-5 mb-xl-8" bis_skin_checked="1">
    <!--begin::Card body-->
    <div class="card-body pt-15" bis_skin_checked="1">
        <!--begin::Summary-->
        <div class="d-flex flex-center flex-column mb-5" bis_skin_checked="1">
            <!--begin::Avatar-->
            <div class="symbol symbol-100px symbol-circle mb-7" bis_skin_checked="1">
                <img src="https://preview.keenthemes.com/metronic8/demo1/assets/media/avatars/300-1.jpg" alt="image">
            </div>
            <!--end::Avatar-->

            <!--begin::Name-->
            <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-1">
            {{ $customer->last_name }}    {{ $customer->first_name }}           </a>
            <!--end::Name-->

            <!--begin::Position-->
            <div class="fs-5 fw-semibold text-muted mb-6" bis_skin_checked="1">
            {{ $customer->company_name }}        
            </div>
            <!--end::Position-->

            <!--begin::Info-->
            <div class="d-flex flex-wrap flex-center" bis_skin_checked="1">
                <!--begin::Stats-->
                <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3" bis_skin_checked="1">
                    <div class="fs-4 fw-bold text-gray-700" bis_skin_checked="1">
                        <span class="w-75px">6,900</span>
                        <i class="ki-duotone ki-arrow-up fs-3 text-success"><span class="path1"></span><span class="path2"></span></i>                    </div>
                    <div class="fw-semibold text-muted" bis_skin_checked="1">Earnings</div>
                </div>
                <!--end::Stats-->

                <!--begin::Stats-->
                <div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3" bis_skin_checked="1">
                    <div class="fs-4 fw-bold text-gray-700" bis_skin_checked="1">
                        <span class="w-50px">130</span>
                        <i class="ki-duotone ki-arrow-down fs-3 text-danger"><span class="path1"></span><span class="path2"></span></i>                    </div>
                    <div class="fw-semibold text-muted" bis_skin_checked="1">Tasks</div>
                </div>
                <!--end::Stats-->

                <!--begin::Stats-->
                <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3" bis_skin_checked="1">
                    <div class="fs-4 fw-bold text-gray-700" bis_skin_checked="1">
                        <span class="w-50px">500</span>
                        <i class="ki-duotone ki-arrow-up fs-3 text-success"><span class="path1"></span><span class="path2"></span></i>                    </div>
                    <div class="fw-semibold text-muted" bis_skin_checked="1">Hours</div>
                </div>
                <!--end::Stats-->
            </div>
            <!--end::Info-->
        </div>
        <!--end::Summary-->

        <!--begin::Details toggle-->
        <div class="d-flex flex-stack fs-4 py-3" bis_skin_checked="1">
            <div class="fw-bold rotate collapsible" data-bs-toggle="collapse" href="#kt_customer_view_details" role="button" aria-expanded="false" aria-controls="kt_customer_view_details" bis_skin_checked="1">
                Details
                <span class="ms-2 rotate-180">
                    <i class="ki-duotone ki-down fs-3"></i>                </span>
            </div>

            <span data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-original-title="Edit customer details" data-kt-initialized="1">
                <a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_customer">
                    Edit
                </a>
            </span>
        </div>
        <!--end::Details toggle-->

        <div class="separator separator-dashed my-3" bis_skin_checked="1"></div>

        <!--begin::Details content-->
        <div id="kt_customer_view_details" class="collapse show" bis_skin_checked="1">
            <div class="py-5 fs-6" bis_skin_checked="1">
                <!--begin::Badge-->
                <div class="badge badge-light-info d-inline" bis_skin_checked="1">Premium user</div>
                <!--begin::Badge-->

                                    <!--begin::Details item-->
                    <div class="fw-bold mt-5" bis_skin_checked="1">Account ID</div>
                    <div class="text-gray-600" bis_skin_checked="1">ID-45453423</div>
                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                    <div class="fw-bold mt-5" bis_skin_checked="1">Billing Email</div>
                    <div class="text-gray-600" bis_skin_checked="1"><a href="#" class="text-gray-600 text-hover-primary">{{ $customer->email }}</a></div>
                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                    <div class="fw-bold mt-5" bis_skin_checked="1">Billing Address</div>
                    <div class="text-gray-600" bis_skin_checked="1">{{ $customer->address_line1 }} {{ $customer->address_line2 }}  </div>
                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                    <div class="fw-bold mt-5" bis_skin_checked="1">Language</div>
                    <div class="text-gray-600" bis_skin_checked="1">French</div>
                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                    <div class="fw-bold mt-5" bis_skin_checked="1">Upcoming Invoice</div>
                    <div class="text-gray-600" bis_skin_checked="1">54238-8693</div>
                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                    <div class="fw-bold mt-5" bis_skin_checked="1">Tax ID</div>
                    <div class="text-gray-600" bis_skin_checked="1">TX-8674</div>
                    <!--begin::Details item-->
                            </div>
        </div>
        <!--end::Details content-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Card-->
        <!--begin::Connected Accounts-->
<div class="card mb-5 mb-xl-8" bis_skin_checked="1">
    <!--begin::Card header-->
    <div class="card-header border-0" bis_skin_checked="1">
        <div class="card-title" bis_skin_checked="1">
            <h3 class="fw-bold m-0">Connected Accounts</h3>
        </div>
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body pt-2" bis_skin_checked="1">
        
<!--begin::Notice-->
<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6" bis_skin_checked="1">
            <!--begin::Icon-->
        <i class="ki-duotone ki-design-1 fs-2tx text-primary me-4"></i>        <!--end::Icon-->
    
    <!--begin::Wrapper-->
    <div class="d-flex flex-stack flex-grow-1 " bis_skin_checked="1">
                    <!--begin::Content-->
            <div class=" fw-semibold" bis_skin_checked="1">
                
                                    <div class="fs-6 text-gray-700 " bis_skin_checked="1">By connecting an account, you hereby agree to our <a href="#" class="me-1">privacy policy</a> and <a href="#">terms of use</a>.</div>
                            </div>
            <!--end::Content-->
        
            </div>
    <!--end::Wrapper-->  
</div>
<!--end::Notice-->

        <!--begin::Items-->
        <div class="py-2" bis_skin_checked="1">
            <!--begin::Item-->
            <div class="d-flex flex-stack" bis_skin_checked="1">
                <div class="d-flex" bis_skin_checked="1">
                    <img src="https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/brand-logos/google-icon.svg" class="w-30px me-6" alt="">

                    <div class="d-flex flex-column" bis_skin_checked="1">
                        <a href="#" class="fs-5 text-gray-900 text-hover-primary fw-bold">Google</a>
                        <div class="fs-6 fw-semibold text-muted" bis_skin_checked="1">Plan properly your workflow</div>
                    </div>
                </div>

                <div class="d-flex justify-content-end" bis_skin_checked="1">
                    <!--begin::Switch-->
                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                        <!--begin::Input-->
                        <input class="form-check-input" name="google" type="checkbox" value="1" id="kt_modal_connected_accounts_google" checked="checked">
                        <!--end::Input-->

                        <!--begin::Label-->
                        <span class="form-check-label fw-semibold text-muted" for="kt_modal_connected_accounts_google"></span>
                        <!--end::Label-->
                    </label>
                    <!--end::Switch-->
                </div>
            </div>
            <!--end::Item-->

            <div class="separator separator-dashed my-5" bis_skin_checked="1"></div>

            <!--begin::Item-->
            <div class="d-flex flex-stack" bis_skin_checked="1">
                <div class="d-flex" bis_skin_checked="1">
                    <img src="https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/brand-logos/github.svg" class="w-30px me-6" alt="">

                    <div class="d-flex flex-column" bis_skin_checked="1">
                        <a href="#" class="fs-5 text-gray-900 text-hover-primary fw-bold">Github</a>
                        <div class="fs-6 fw-semibold text-muted" bis_skin_checked="1">Keep eye on on your Repositories</div>
                    </div>
                </div>
                
                <div class="d-flex justify-content-end" bis_skin_checked="1">
                    <!--begin::Switch-->
                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                        <!--begin::Input-->
                        <input class="form-check-input" name="github" type="checkbox" value="1" id="kt_modal_connected_accounts_github" checked="checked">
                        <!--end::Input-->

                        <!--begin::Label-->
                        <span class="form-check-label fw-semibold text-muted" for="kt_modal_connected_accounts_github"></span>
                        <!--end::Label-->
                    </label>
                    <!--end::Switch-->
                </div>
            </div>
            <!--end::Item-->

            <div class="separator separator-dashed my-5" bis_skin_checked="1"></div>

            <!--begin::Item-->
            <div class="d-flex flex-stack" bis_skin_checked="1">
                <div class="d-flex" bis_skin_checked="1">
                    <img src="https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/brand-logos/slack-icon.svg" class="w-30px me-6" alt="">

                    <div class="d-flex flex-column" bis_skin_checked="1">
                        <a href="#" class="fs-5 text-gray-900 text-hover-primary fw-bold">Slack</a>
                        <div class="fs-6 fw-semibold text-muted" bis_skin_checked="1">Integrate Projects Discussions</div>
                    </div>
                </div>
                <div class="d-flex justify-content-end" bis_skin_checked="1">
                    <!--begin::Switch-->
                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                        <!--begin::Input-->
                        <input class="form-check-input" name="slack" type="checkbox" value="1" id="kt_modal_connected_accounts_slack">
                        <!--end::Input-->

                        <!--begin::Label-->
                        <span class="form-check-label fw-semibold text-muted" for="kt_modal_connected_accounts_slack"></span>
                        <!--end::Label-->
                    </label>
                    <!--end::Switch-->
                </div>
            </div>
            <!--end::Item-->
        </div>
        <!--end::Items-->
    </div>
    <!--end::Card body-->

    <!--begin::Card footer-->
    <div class="card-footer border-0 d-flex justify-content-center pt-0" bis_skin_checked="1">
        <button class="btn btn-sm  btn-light-primary">Save Changes</button>
    </div>
    <!--end::Card footer-->
</div>
<!--end::Connected Accounts-->    </div>
    <!--end::Sidebar-->

    <!--begin::Content-->
    <div class="flex-lg-row-fluid ms-lg-15" bis_skin_checked="1">
        <!--begin:::Tabs-->
        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8" role="tablist">
            <!--begin:::Tab item-->
            <li class="nav-item" role="presentation">
                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_customer_view_overview_tab" aria-selected="true" role="tab">Overview</a>
            </li>
            <!--end:::Tab item-->

            <!--begin:::Tab item-->
            <li class="nav-item" role="presentation">
                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_customer_view_overview_events_and_logs_tab" aria-selected="false" tabindex="-1" role="tab">Events &amp; Logs</a>
            </li>
            <!--end:::Tab item-->

            <!--begin:::Tab item-->
            <li class="nav-item" role="presentation">
                <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_customer_view_overview_statements" data-kt-initialized="1" aria-selected="false" tabindex="-1" role="tab">Statements</a>
            </li>
            <!--end:::Tab item-->

            <!--begin:::Tab item-->
            <li class="nav-item ms-auto">
                <!--begin::Action menu-->
                <a href="#" class="btn btn-primary ps-7" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                    Actions
                    <i class="ki-duotone ki-down fs-2 me-0"></i>                </a>
                <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold py-4 w-250px fs-6" data-kt-menu="true" bis_skin_checked="1">
    <!--begin::Menu item-->
    <div class="menu-item px-5" bis_skin_checked="1">
        <div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase" bis_skin_checked="1">
            Payments
        </div>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-5" bis_skin_checked="1">
        <a href="#" class="menu-link px-5">
            Create invoice
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-5" bis_skin_checked="1">
        <a href="#" class="menu-link flex-stack px-5">
            Create payments

            <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a target name for future usage and reference" data-bs-original-title="Specify a target name for future usage and reference" data-kt-initialized="1">
                <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>            </span>
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start" bis_skin_checked="1">
        <a href="#" class="menu-link px-5">
            <span class="menu-title">Subscription</span>
            <span class="menu-arrow"></span>
        </a>

        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4" bis_skin_checked="1">
            <!--begin::Menu item-->
            <div class="menu-item px-3" bis_skin_checked="1">
                <a href="#" class="menu-link px-5">
                    Apps
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3" bis_skin_checked="1">
                <a href="#" class="menu-link px-5">
                    Billing
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->            
            <div class="menu-item px-3" bis_skin_checked="1">
                <a href="#" class="menu-link px-5">
                    Statements
                </a>
            </div>
            <!--end::Menu item-->
            
            <!--begin::Menu separator-->
            <div class="separator my-2" bis_skin_checked="1"></div>
            <!--end::Menu separator-->

            <!--begin::Menu item-->            
            <div class="menu-item px-3" bis_skin_checked="1">
                <div class="menu-content px-3" bis_skin_checked="1">
                    <label class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input w-30px h-20px" type="checkbox" value="" name="notifications" checked="" id="kt_user_menu_notifications">
                        <span class="form-check-label text-muted fs-6" for="kt_user_menu_notifications">
                        Notifications
                        </span>
                    </label>
                </div>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator my-3" bis_skin_checked="1"></div>
    <!--end::Menu separator-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-5" bis_skin_checked="1">
        <div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase" bis_skin_checked="1">
            Account
        </div>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-5" bis_skin_checked="1">
        <a href="#" class="menu-link px-5">
            Reports
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-5 my-1" bis_skin_checked="1">
        <a href="#" class="menu-link px-5">
            Account Settings
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-5" bis_skin_checked="1">
        <a href="#" class="menu-link text-danger px-5">
            Delete customer
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                <!--end::Menu-->
            </li>
            <!--end:::Tab item-->
        </ul>
        <!--end:::Tabs-->

        <!--begin:::Tab content-->
        <div class="tab-content" id="myTabContent" bis_skin_checked="1">
            <!--begin:::Tab pane-->
            <div class="tab-pane fade show active" id="kt_customer_view_overview_tab" role="tabpanel" bis_skin_checked="1">
                <!--begin::Card-->
<div class="card pt-4 mb-6 mb-xl-9" bis_skin_checked="1">
    <!--begin::Card header-->
    <div class="card-header border-0" bis_skin_checked="1">
        <!--begin::Card title-->
        <div class="card-title" bis_skin_checked="1">
            <h2>Payment Records</h2>
        </div>
        <!--end::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar" bis_skin_checked="1">
            <!--begin::Filter-->
            <button type="button" class="btn btn-sm btn-flex btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_payment">
                <i class="ki-duotone ki-plus-square fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> 
                Add payment                    
            </button>
            <!--end::Filter-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body pt-0 pb-5" bis_skin_checked="1">
        <!--begin::Table-->
        <div id="kt_table_customers_payment_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer" bis_skin_checked="1"><div class="table-responsive" bis_skin_checked="1"><table class="table align-middle table-row-dashed gy-5 dataTable no-footer" id="kt_table_customers_payment">
            <thead class="border-bottom border-gray-200 fs-7 fw-bold">
                <tr class="text-start text-muted text-uppercase gs-0"><th class="min-w-100px sorting" tabindex="0" aria-controls="kt_table_customers_payment" rowspan="1" colspan="1" aria-label="Invoice No.: activate to sort column ascending" style="width: 138.875px;">Invoice No.</th><th class="sorting" tabindex="0" aria-controls="kt_table_customers_payment" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 117.469px;">Status</th><th class="sorting" tabindex="0" aria-controls="kt_table_customers_payment" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 113.328px;">Amount</th><th class="min-w-100px sorting" tabindex="0" aria-controls="kt_table_customers_payment" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 231.328px;">Date</th><th class="text-end min-w-100px pe-4 sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 147.75px;">Actions</th></tr>
            </thead>
            <tbody class="fs-6 fw-semibold text-gray-600">
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                            <tr class="odd">
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">8239-5204</a>
                        </td>
                        <td>
                            <span class="badge badge-light-success">Successful</span>
                        </td>
                        <td>
                            $1,200.00                        </td>
                        <td data-order="2020-12-14T20:43:00+01:00">
                            14 Dec 2020, 8:43 pm                        </td>
                        <td class="pe-0 text-end">
                            <a href="#" class="btn btn-sm btn-light image.png btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-duotone ki-down fs-5 ms-1"></i>                                
                            </a>
                            <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true" bis_skin_checked="1">
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="/metronic8/demo1/apps/customers/view.html" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                        </td>
                    </tr><tr class="even">
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">7220-5559</a>
                        </td>
                        <td>
                            <span class="badge badge-light-success">Successful</span>
                        </td>
                        <td>
                            $79.00                        </td>
                        <td data-order="2020-12-01T10:12:00+01:00">
                            01 Dec 2020, 10:12 am                        </td>
                        <td class="pe-0 text-end">
                            <a href="#" class="btn btn-sm btn-light image.png btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-duotone ki-down fs-5 ms-1"></i>                                
                            </a>
                            <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true" bis_skin_checked="1">
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="/metronic8/demo1/apps/customers/view.html" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                        </td>
                    </tr><tr class="odd">
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">9828-8246</a>
                        </td>
                        <td>
                            <span class="badge badge-light-success">Successful</span>
                        </td>
                        <td>
                            $5,500.00                        </td>
                        <td data-order="2020-11-12T14:01:00+01:00">
                            12 Nov 2020, 2:01 pm                        </td>
                        <td class="pe-0 text-end">
                            <a href="#" class="btn btn-sm btn-light image.png btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-duotone ki-down fs-5 ms-1"></i>                                
                            </a>
                            <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true" bis_skin_checked="1">
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="/metronic8/demo1/apps/customers/view.html" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                        </td>
                    </tr><tr class="even">
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">2188-5061</a>
                        </td>
                        <td>
                            <span class="badge badge-light-warning">Pending</span>
                        </td>
                        <td>
                            $880.00                        </td>
                        <td data-order="2020-10-21T17:54:00+02:00">
                            21 Oct 2020, 5:54 pm                        </td>
                        <td class="pe-0 text-end">
                            <a href="#" class="btn btn-sm btn-light image.png btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-duotone ki-down fs-5 ms-1"></i>                                
                            </a>
                            <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true" bis_skin_checked="1">
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="/metronic8/demo1/apps/customers/view.html" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                        </td>
                    </tr><tr class="odd">
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">4102-2917</a>
                        </td>
                        <td>
                            <span class="badge badge-light-success">Successful</span>
                        </td>
                        <td>
                            $7,650.00                        </td>
                        <td data-order="2020-10-19T07:32:00+02:00">
                            19 Oct 2020, 7:32 am                        </td>
                        <td class="pe-0 text-end">
                            <a href="#" class="btn btn-sm btn-light image.png btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-duotone ki-down fs-5 ms-1"></i>                                
                            </a>
                            <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true" bis_skin_checked="1">
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="/metronic8/demo1/apps/customers/view.html" class="menu-link px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                        </td>
                    </tr></tbody>
            <!--end::Table body-->
        </table></div><div class="row" bis_skin_checked="1"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start" bis_skin_checked="1"></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end" bis_skin_checked="1"><div class="dataTables_paginate paging_simple_numbers" id="kt_table_customers_payment_paginate" bis_skin_checked="1"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="kt_table_customers_payment_previous"><a href="#" aria-controls="kt_table_customers_payment" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="kt_table_customers_payment" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_table_customers_payment" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="kt_table_customers_payment_next"><a href="#" aria-controls="kt_table_customers_payment" data-dt-idx="3" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div>
        <!--end::Table-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Card-->
                
<!--begin::Card-->
<div class="card pt-4 mb-6 mb-xl-9" bis_skin_checked="1">
    <!--begin::Card header-->
    <div class="card-header border-0" bis_skin_checked="1">
        <!--begin::Card title-->
        <div class="card-title" bis_skin_checked="1">
            <h2 class="fw-bold mb-0">Payment Methods</h2>
        </div>
        <!--end::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar" bis_skin_checked="1">
            <a href="#" class="btn btn-sm btn-flex btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
                <i class="ki-duotone ki-plus-square fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Add new method
            </a>
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div id="kt_customer_view_payment_method" class="card-body pt-0" bis_skin_checked="1">
                    <!--begin::Option-->
            <div class="py-0" data-kt-customer-payment-method="row" bis_skin_checked="1">
                <!--begin::Header-->
                <div class="py-3 d-flex flex-stack flex-wrap" bis_skin_checked="1">
                    <!--begin::Toggle-->
                    <div class="d-flex align-items-center collapsible  rotate" data-bs-toggle="collapse" href="#kt_customer_view_payment_method_1" role="button" aria-expanded="false" aria-controls="kt_customer_view_payment_method_1" bis_skin_checked="1">
                        <!--begin::Arrow-->
                        <div class="me-3 rotate-90" bis_skin_checked="1"><i class="ki-duotone ki-right fs-3"></i></div>
                        <!--end::Arrow-->

                        <!--begin::Logo-->
                        <img src="https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/card-logos/mastercard.svg" class="w-40px me-3" alt="">
                        <!--end::Logo-->

                        <!--begin::Summary-->
                        <div class="me-3" bis_skin_checked="1">
                            <div class="d-flex align-items-center" bis_skin_checked="1">
                                <div class="text-gray-800 fw-bold" bis_skin_checked="1">
                                    Mastercard                                </div>
                               
                                                                   <div class="badge badge-light-primary ms-5" bis_skin_checked="1">Primary</div>
                                                            </div>
                            <div class="text-muted" bis_skin_checked="1">Expires Dec 2024</div>
                        </div>
                        <!--end::Summary-->
                    </div>
                    <!--end::Toggle-->

                    <!--begin::Toolbar-->
                    <div class="d-flex my-3 ms-9" bis_skin_checked="1">    
                        <!--begin::Edit-->
                        <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
                            <span data-bs-toggle="tooltip" data-bs-trigger="hover" aria-label="Edit" data-bs-original-title="Edit" data-kt-initialized="1">                                
                                <i class="ki-duotone ki-pencil fs-3"><span class="path1"></span><span class="path2"></span></i>                            </span>
                        </a>
                        <!--end::Edit-->                   

                        <!--begin::Delete-->
                        <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" data-kt-customer-payment-method="delete" aria-label="Delete" data-bs-original-title="Delete" data-kt-initialized="1">
                            <i class="ki-duotone ki-trash fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>                        </a>
                        <!--end::Delete-->

                        <!--begin::More-->
                        <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-bs-toggle="tooltip" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" aria-label="More Options" data-bs-original-title="More Options" data-kt-initialized="1">
                            <i class="ki-duotone ki-setting-3 fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>                        </a>
                        <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-150px py-3" data-kt-menu="true" bis_skin_checked="1">
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3" data-kt-payment-mehtod-action="set_as_primary">
            Set as Primary
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                        <!--end::More-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div id="kt_customer_view_payment_method_1" class="collapse show fs-6 ps-10" data-bs-parent="#kt_customer_view_payment_method" bis_skin_checked="1">
                    <!--begin::Details-->
                    <div class="d-flex flex-wrap py-5" bis_skin_checked="1">
                                                    <!--begin::Col-->
                            <div class="flex-equal me-5" bis_skin_checked="1">
                                <table class="table table-flush fw-semibold gy-1">
                                                                    <tbody><tr>
                                        <td class="text-muted min-w-125px w-125px">Name</td>
                                        <td class="text-gray-800">Emma Smith</td>
                                    </tr>
                                                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Number</td>
                                        <td class="text-gray-800">**** 8554</td>
                                    </tr>
                                                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Expires</td>
                                        <td class="text-gray-800">12/2024</td>
                                    </tr>
                                                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Type</td>
                                        <td class="text-gray-800">Mastercard credit card</td>
                                    </tr>
                                                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Issuer</td>
                                        <td class="text-gray-800">VICBANK</td>
                                    </tr>
                                                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">ID</td>
                                        <td class="text-gray-800">id_4325df90sdf8</td>
                                    </tr>
                                                                </tbody></table>
                            </div>
                            <!--end::Col-->
                                                    <!--begin::Col-->
                            <div class="flex-equal " bis_skin_checked="1">
                                <table class="table table-flush fw-semibold gy-1">
                                                                    <tbody><tr>
                                        <td class="text-muted min-w-125px w-125px">Billing address</td>
                                        <td class="text-gray-800">AU</td>
                                    </tr>
                                                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Phone</td>
                                        <td class="text-gray-800">No phone provided</td>
                                    </tr>
                                                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Email</td>
                                        <td class="text-gray-800"><a href="#" class="text-gray-900 text-hover-primary">smith@kpmg.com</a></td>
                                    </tr>
                                                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Origin</td>
                                        <td class="text-gray-800">Australia <div class="symbol symbol-20px symbol-circle ms-2" bis_skin_checked="1"><img src="https://preview.keenthemes.com/metronic8/demo1/assets/media/flags/australia.svg"></div></td>
                                    </tr>
                                                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">CVC check</td>
                                        <td class="text-gray-800">Passed <i class="ki-duotone ki-check-circle fs-2 text-success"><span class="path1"></span><span class="path2"></span></i></td>
                                    </tr>
                                                                </tbody></table>
                            </div>
                            <!--end::Col-->
                                            </div>
                    <!--end::Details-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Option-->

            <div class="separator separator-dashed" bis_skin_checked="1"></div>                    <!--begin::Option-->
            <div class="py-0" data-kt-customer-payment-method="row" bis_skin_checked="1">
                <!--begin::Header-->
                <div class="py-3 d-flex flex-stack flex-wrap" bis_skin_checked="1">
                    <!--begin::Toggle-->
                    <div class="d-flex align-items-center collapsible collapsed rotate" data-bs-toggle="collapse" href="#kt_customer_view_payment_method_2" role="button" aria-expanded="false" aria-controls="kt_customer_view_payment_method_2" bis_skin_checked="1">
                        <!--begin::Arrow-->
                        <div class="me-3 rotate-90" bis_skin_checked="1"><i class="ki-duotone ki-right fs-3"></i></div>
                        <!--end::Arrow-->

                        <!--begin::Logo-->
                        <img src="https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/card-logos/visa.svg" class="w-40px me-3" alt="">
                        <!--end::Logo-->

                        <!--begin::Summary-->
                        <div class="me-3" bis_skin_checked="1">
                            <div class="d-flex align-items-center" bis_skin_checked="1">
                                <div class="text-gray-800 fw-bold" bis_skin_checked="1">
                                    Visa                                </div>
                               
                                                           </div>
                            <div class="text-muted" bis_skin_checked="1">Expires Feb 2022</div>
                        </div>
                        <!--end::Summary-->
                    </div>
                    <!--end::Toggle-->

                    <!--begin::Toolbar-->
                    <div class="d-flex my-3 ms-9" bis_skin_checked="1">    
                        <!--begin::Edit-->
                        <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
                            <span data-bs-toggle="tooltip" data-bs-trigger="hover" aria-label="Edit" data-bs-original-title="Edit" data-kt-initialized="1">                                
                                <i class="ki-duotone ki-pencil fs-3"><span class="path1"></span><span class="path2"></span></i>                            </span>
                        </a>
                        <!--end::Edit-->                   

                        <!--begin::Delete-->
                        <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" data-kt-customer-payment-method="delete" aria-label="Delete" data-bs-original-title="Delete" data-kt-initialized="1">
                            <i class="ki-duotone ki-trash fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>                        </a>
                        <!--end::Delete-->

                        <!--begin::More-->
                        <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-bs-toggle="tooltip" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" aria-label="More Options" data-bs-original-title="More Options" data-kt-initialized="1">
                            <i class="ki-duotone ki-setting-3 fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>                        </a>
                        <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-150px py-3" data-kt-menu="true" bis_skin_checked="1">
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3" data-kt-payment-mehtod-action="set_as_primary">
            Set as Primary
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                        <!--end::More-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div id="kt_customer_view_payment_method_2" class="collapse  fs-6 ps-10" data-bs-parent="#kt_customer_view_payment_method" bis_skin_checked="1">
                    <!--begin::Details-->
                    <div class="d-flex flex-wrap py-5" bis_skin_checked="1">
                                                    <!--begin::Col-->
                            <div class="flex-equal me-5" bis_skin_checked="1">
                                <table class="table table-flush fw-semibold gy-1">
                                                                    <tbody><tr>
                                        <td class="text-muted min-w-125px w-125px">Name</td>
                                        <td class="text-gray-800">Melody Macy</td>
                                    </tr>
                                                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Number</td>
                                        <td class="text-gray-800">**** 9056</td>
                                    </tr>
                                                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Expires</td>
                                        <td class="text-gray-800">02/2022</td>
                                    </tr>
                                                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Type</td>
                                        <td class="text-gray-800">Visa credit card</td>
                                    </tr>
                                                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Issuer</td>
                                        <td class="text-gray-800">ENBANK</td>
                                    </tr>
                                                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">ID</td>
                                        <td class="text-gray-800">id_w2r84jdy723</td>
                                    </tr>
                                                                </tbody></table>
                            </div>
                            <!--end::Col-->
                                                    <!--begin::Col-->
                            <div class="flex-equal " bis_skin_checked="1">
                                <table class="table table-flush fw-semibold gy-1">
                                                                    <tbody><tr>
                                        <td class="text-muted min-w-125px w-125px">Billing address</td>
                                        <td class="text-gray-800">UK</td>
                                    </tr>
                                                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Phone</td>
                                        <td class="text-gray-800">No phone provided</td>
                                    </tr>
                                                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Email</td>
                                        <td class="text-gray-800"><a href="#" class="text-gray-900 text-hover-primary">melody@altbox.com</a></td>
                                    </tr>
                                                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Origin</td>
                                        <td class="text-gray-800">United Kingdom <div class="symbol symbol-20px symbol-circle ms-2" bis_skin_checked="1"><img src="https://preview.keenthemes.com/metronic8/demo1/assets/media/flags/united-kingdom.svg"></div></td>
                                    </tr>
                                                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">CVC check</td>
                                        <td class="text-gray-800">Passed <i class="ki-duotone ki-check fs-2 text-success"></i></td>
                                    </tr>
                                                                </tbody></table>
                            </div>
                            <!--end::Col-->
                                            </div>
                    <!--end::Details-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Option-->

            <div class="separator separator-dashed" bis_skin_checked="1"></div>                    <!--begin::Option-->
            <div class="py-0" data-kt-customer-payment-method="row" bis_skin_checked="1">
                <!--begin::Header-->
                <div class="py-3 d-flex flex-stack flex-wrap" bis_skin_checked="1">
                    <!--begin::Toggle-->
                    <div class="d-flex align-items-center collapsible collapsed rotate" data-bs-toggle="collapse" href="#kt_customer_view_payment_method_3" role="button" aria-expanded="false" aria-controls="kt_customer_view_payment_method_3" bis_skin_checked="1">
                        <!--begin::Arrow-->
                        <div class="me-3 rotate-90" bis_skin_checked="1"><i class="ki-duotone ki-right fs-3"></i></div>
                        <!--end::Arrow-->

                        <!--begin::Logo-->
                        <img src="https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/card-logos/american-express.svg" class="w-40px me-3" alt="">
                        <!--end::Logo-->

                        <!--begin::Summary-->
                        <div class="me-3" bis_skin_checked="1">
                            <div class="d-flex align-items-center" bis_skin_checked="1">
                                <div class="text-gray-800 fw-bold" bis_skin_checked="1">
                                    American Express                                </div>
                               
                                                                   <div class="badge badge-light-danger ms-5" bis_skin_checked="1">Expired</div>
                                                            </div>
                            <div class="text-muted" bis_skin_checked="1">Expires Aug 2021</div>
                        </div>
                        <!--end::Summary-->
                    </div>
                    <!--end::Toggle-->

                    <!--begin::Toolbar-->
                    <div class="d-flex my-3 ms-9" bis_skin_checked="1">    
                        <!--begin::Edit-->
                        <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
                            <span data-bs-toggle="tooltip" data-bs-trigger="hover" aria-label="Edit" data-bs-original-title="Edit" data-kt-initialized="1">                                
                                <i class="ki-duotone ki-pencil fs-3"><span class="path1"></span><span class="path2"></span></i>                            </span>
                        </a>
                        <!--end::Edit-->                   

                        <!--begin::Delete-->
                        <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" data-kt-customer-payment-method="delete" aria-label="Delete" data-bs-original-title="Delete" data-kt-initialized="1">
                            <i class="ki-duotone ki-trash fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>                        </a>
                        <!--end::Delete-->

                        <!--begin::More-->
                        <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-bs-toggle="tooltip" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" aria-label="More Options" data-bs-original-title="More Options" data-kt-initialized="1">
                            <i class="ki-duotone ki-setting-3 fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>                        </a>
                        <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-150px py-3" data-kt-menu="true" bis_skin_checked="1">
    <!--begin::Menu item-->
    <div class="menu-item px-3" bis_skin_checked="1">
        <a href="#" class="menu-link px-3" data-kt-payment-mehtod-action="set_as_primary">
            Set as Primary
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                        <!--end::More-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div id="kt_customer_view_payment_method_3" class="collapse  fs-6 ps-10" data-bs-parent="#kt_customer_view_payment_method" bis_skin_checked="1">
                    <!--begin::Details-->
                    <div class="d-flex flex-wrap py-5" bis_skin_checked="1">
                                                    <!--begin::Col-->
                            <div class="flex-equal me-5" bis_skin_checked="1">
                                <table class="table table-flush fw-semibold gy-1">
                                                                    <tbody><tr>
                                        <td class="text-muted min-w-125px w-125px">Name</td>
                                        <td class="text-gray-800">Max Smith</td>
                                    </tr>
                                                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Number</td>
                                        <td class="text-gray-800">**** 8265</td>
                                    </tr>
                                                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Expires</td>
                                        <td class="text-gray-800">08/2021</td>
                                    </tr>
                                                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Type</td>
                                        <td class="text-gray-800">American express credit card</td>
                                    </tr>
                                                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Issuer</td>
                                        <td class="text-gray-800">USABANK</td>
                                    </tr>
                                                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">ID</td>
                                        <td class="text-gray-800">id_89457jcje63</td>
                                    </tr>
                                                                </tbody></table>
                            </div>
                            <!--end::Col-->
                                                    <!--begin::Col-->
                            <div class="flex-equal " bis_skin_checked="1">
                                <table class="table table-flush fw-semibold gy-1">
                                                                    <tbody><tr>
                                        <td class="text-muted min-w-125px w-125px">Billing address</td>
                                        <td class="text-gray-800">US</td>
                                    </tr>
                                                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Phone</td>
                                        <td class="text-gray-800">No phone provided</td>
                                    </tr>
                                                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Email</td>
                                        <td class="text-gray-800"><a href="#" class="text-gray-900 text-hover-primary">max@kt.com</a></td>
                                    </tr>
                                                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">Origin</td>
                                        <td class="text-gray-800">United States of America <div class="symbol symbol-20px symbol-circle ms-2" bis_skin_checked="1"><img src="https://preview.keenthemes.com/metronic8/demo1/assets/media/flags/united-states.svg"></div></td>
                                    </tr>
                                                                    <tr>
                                        <td class="text-muted min-w-125px w-125px">CVC check</td>
                                        <td class="text-gray-800">Failed <i class="ki-duotone ki-cross fs-2 text-danger"><span class="path1"></span><span class="path2"></span></i></td>
                                    </tr>
                                                                </tbody></table>
                            </div>
                            <!--end::Col-->
                                            </div>
                    <!--end::Details-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Option-->

                        </div>
    <!--end::Card body-->
</div>
<!--end::Card-->
                <!--begin::Card-->
<div class="card pt-4 mb-6 mb-xl-9" bis_skin_checked="1">
    <!--begin::Card header-->
    <div class="card-header border-0" bis_skin_checked="1">
        <!--begin::Card title-->
        <div class="card-title" bis_skin_checked="1">
            <h2 class="fw-bold">Credit Balance</h2>
        </div>
        <!--end::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar" bis_skin_checked="1">
            <a href="#" class="btn btn-sm btn-flex btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_adjust_balance">
                <i class="ki-duotone ki-pencil fs-3"><span class="path1"></span><span class="path2"></span></i>                Adjust Balance
            </a>
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body pt-0" bis_skin_checked="1">
        <div class="fw-bold fs-2" bis_skin_checked="1">
            $32,487.57 <span class="text-muted fs-4 fw-semibold">USD</span>
            <div class="fs-7 fw-normal text-muted" bis_skin_checked="1">Balance will increase the amount due on the customer's next invoice.</div>
        </div>
    </div>
    <!--end::Card body-->
</div>
<!--end::Card-->
                <!--begin::Card-->
<div class="card pt-2 mb-6 mb-xl-9" bis_skin_checked="1">
    <!--begin::Card header-->
    <div class="card-header border-0" bis_skin_checked="1">
        <!--begin::Card title-->
        <div class="card-title" bis_skin_checked="1">
            <h2>Invoices</h2>
        </div>
        <!--end::Card title-->

        <!--begin::Toolbar-->
        <div class="card-toolbar m-0" bis_skin_checked="1">
            <!--begin::Tab nav-->
            <ul class="nav nav-stretch fs-5 fw-semibold nav-line-tabs nav-line-tabs-2x border-transparent" role="tablist">
                <li class="nav-item" role="presentation">
                    <a id="kt_referrals_year_tab" class="nav-link text-active-primary active" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_1" aria-selected="true">
                        This Year
                    </a>
                </li>

                <li class="nav-item" role="presentation">
                    <a id="kt_referrals_2019_tab" class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_2" aria-selected="false" tabindex="-1">
                        2020
                    </a>
                </li>

                <li class="nav-item" role="presentation">
                    <a id="kt_referrals_2018_tab" class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_3" aria-selected="false" tabindex="-1">
                        2019
                    </a>
                </li>

                <li class="nav-item" role="presentation">
                    <a id="kt_referrals_2017_tab" class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_4" aria-selected="false" tabindex="-1">
                        2018
                    </a>
                </li>
            </ul>
            <!--end::Tab nav-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body pt-0" bis_skin_checked="1">
        <!--begin::Tab Content-->
        <div id="kt_referred_users_tab_content" class="tab-content" bis_skin_checked="1">
                                            <!--begin::Tab panel-->
                <div id="kt_customer_details_invoices_1" class="py-0 tab-pane fade show active" role="tabpanel" bis_skin_checked="1" aria-labelledby="kt_referrals_year_tab">
                    <!--begin::Table-->
                    <div id="kt_customer_details_invoices_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer" bis_skin_checked="1"><div class="table-responsive" bis_skin_checked="1"><table id="kt_customer_details_invoices_table_1" class="table align-middle table-row-dashed fs-6 fw-bold gy-5 dataTable no-footer">
                        <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bold">
                            <tr class="text-start text-muted gs-0"><th class="min-w-100px sorting" tabindex="0" aria-controls="kt_customer_details_invoices_table_1" rowspan="1" colspan="1" aria-label="Order ID: activate to sort column ascending" style="width: 136.469px;">Order ID</th><th class="min-w-100px sorting" tabindex="0" aria-controls="kt_customer_details_invoices_table_1" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 140.016px;">Amount</th><th class="min-w-100px sorting" tabindex="0" aria-controls="kt_customer_details_invoices_table_1" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 140.016px;">Status</th><th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customer_details_invoices_table_1" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 174.141px;">Date</th><th class="min-w-100px text-end pe-7 sorting_disabled" rowspan="1" colspan="1" aria-label="Invoice" style="width: 148.359px;">Invoice</th></tr>
                        </thead>
                        <tbody class="fs-6 fw-semibold text-gray-600">
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                    <tr class="odd">
                                    <td data-order="Invalid date"><a href="#" class="text-gray-600 text-hover-primary">102445788</a></td>
                                    <td class="text-success">$38.00</td>
                                    <td><span class="badge badge-light-warning">Pending</span></td>
                                    <td>Nov 01, 2020</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="even">
                                    <td data-order="Invalid date"><a href="#" class="text-gray-600 text-hover-primary">423445721</a></td>
                                    <td class="text-danger">$-2.60</td>
                                    <td><span class="badge badge-light-danger">Rejected</span></td>
                                    <td>Oct 24, 2020</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="odd">
                                    <td data-order="Invalid date"><a href="#" class="text-gray-600 text-hover-primary">312445984</a></td>
                                    <td class="text-success">$76.00</td>
                                    <td><span class="badge badge-light-success">Approved</span></td>
                                    <td>Oct 08, 2020</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="even">
                                    <td data-order="Invalid date"><a href="#" class="text-gray-600 text-hover-primary">312445984</a></td>
                                    <td class="text-success">$5.00</td>
                                    <td><span class="badge badge-light-warning">Pending</span></td>
                                    <td>Sep 15, 2020</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="odd">
                                    <td data-order="Invalid date"><a href="#" class="text-gray-600 text-hover-primary">523445943</a></td>
                                    <td class="text-danger">$-1.30</td>
                                    <td><span class="badge badge-light-success">Approved</span></td>
                                    <td>May 30, 2020</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr></tbody>
                    </table></div><div class="row" bis_skin_checked="1"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start" bis_skin_checked="1"></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end" bis_skin_checked="1"><div class="dataTables_paginate paging_simple_numbers" id="kt_customer_details_invoices_table_1_paginate" bis_skin_checked="1"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="kt_customer_details_invoices_table_1_previous"><a href="#" aria-controls="kt_customer_details_invoices_table_1" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="kt_customer_details_invoices_table_1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_customer_details_invoices_table_1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="kt_customer_details_invoices_table_1_next"><a href="#" aria-controls="kt_customer_details_invoices_table_1" data-dt-idx="3" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div>
                    <!--end::Table-->
                </div>
                <!--end::Tab panel-->
                                            <!--begin::Tab panel-->
                <div id="kt_customer_details_invoices_2" class="py-0 tab-pane fade " role="tabpanel" bis_skin_checked="1" aria-labelledby="kt_referrals_2019_tab">
                    <!--begin::Table-->
                    <div id="kt_customer_details_invoices_table_2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer" bis_skin_checked="1"><div class="table-responsive" bis_skin_checked="1"><table id="kt_customer_details_invoices_table_2" class="table align-middle table-row-dashed fs-6 fw-bold gy-5 dataTable no-footer">
                        <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bold">
                            <tr class="text-start text-muted gs-0"><th class="min-w-100px sorting" tabindex="0" aria-controls="kt_customer_details_invoices_table_2" rowspan="1" colspan="1" aria-label="Order ID: activate to sort column ascending" style="width: 0px;">Order ID</th><th class="min-w-100px sorting" tabindex="0" aria-controls="kt_customer_details_invoices_table_2" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 0px;">Amount</th><th class="min-w-100px sorting" tabindex="0" aria-controls="kt_customer_details_invoices_table_2" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 0px;">Status</th><th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customer_details_invoices_table_2" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 0px;">Date</th><th class="min-w-100px text-end pe-7 sorting_disabled" rowspan="1" colspan="1" aria-label="Invoice" style="width: 0px;">Invoice</th></tr>
                        </thead>
                        <tbody class="fs-6 fw-semibold text-gray-600">
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                    <tr class="odd">
                                    <td data-order="Invalid date"><a href="#" class="text-gray-600 text-hover-primary">523445943</a></td>
                                    <td class="text-danger">$-1.30</td>
                                    <td><span class="badge badge-light-success">Approved</span></td>
                                    <td>May 30, 2020</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="even">
                                    <td data-order="Invalid date"><a href="#" class="text-gray-600 text-hover-primary">231445943</a></td>
                                    <td class="text-success">$204.00</td>
                                    <td><span class="badge badge-light-danger">Rejected</span></td>
                                    <td>Apr 22, 2020</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="odd">
                                    <td data-order="Invalid date"><a href="#" class="text-gray-600 text-hover-primary">426445943</a></td>
                                    <td class="text-success">$31.00</td>
                                    <td><span class="badge badge-light-danger">Rejected</span></td>
                                    <td>Feb 09, 2020</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="even">
                                    <td data-order="Invalid date"><a href="#" class="text-gray-600 text-hover-primary">984445943</a></td>
                                    <td class="text-success">$52.00</td>
                                    <td><span class="badge badge-light-warning">Pending</span></td>
                                    <td>Nov 01, 2020</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="odd">
                                    <td data-order="Invalid date"><a href="#" class="text-gray-600 text-hover-primary">324442313</a></td>
                                    <td class="text-danger">$-0.80</td>
                                    <td><span class="badge badge-light-warning">Pending</span></td>
                                    <td>Jan 04, 2020</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr></tbody>
                    </table></div><div class="row" bis_skin_checked="1"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start" bis_skin_checked="1"></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end" bis_skin_checked="1"><div class="dataTables_paginate paging_simple_numbers" id="kt_customer_details_invoices_table_2_paginate" bis_skin_checked="1"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="kt_customer_details_invoices_table_2_previous"><a href="#" aria-controls="kt_customer_details_invoices_table_2" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="kt_customer_details_invoices_table_2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_customer_details_invoices_table_2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="kt_customer_details_invoices_table_2_next"><a href="#" aria-controls="kt_customer_details_invoices_table_2" data-dt-idx="3" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div>
                    <!--end::Table-->
                </div>
                <!--end::Tab panel-->
                                            <!--begin::Tab panel-->
                <div id="kt_customer_details_invoices_3" class="py-0 tab-pane fade " role="tabpanel" bis_skin_checked="1" aria-labelledby="kt_referrals_2018_tab">
                    <!--begin::Table-->
                    <div id="kt_customer_details_invoices_table_3_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer" bis_skin_checked="1"><div class="table-responsive" bis_skin_checked="1"><table id="kt_customer_details_invoices_table_3" class="table align-middle table-row-dashed fs-6 fw-bold gy-5 dataTable no-footer">
                        <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bold">
                            <tr class="text-start text-muted gs-0"><th class="min-w-100px sorting" tabindex="0" aria-controls="kt_customer_details_invoices_table_3" rowspan="1" colspan="1" aria-label="Order ID: activate to sort column ascending" style="width: 0px;">Order ID</th><th class="min-w-100px sorting" tabindex="0" aria-controls="kt_customer_details_invoices_table_3" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 0px;">Amount</th><th class="min-w-100px sorting" tabindex="0" aria-controls="kt_customer_details_invoices_table_3" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 0px;">Status</th><th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customer_details_invoices_table_3" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 0px;">Date</th><th class="min-w-100px text-end pe-7 sorting_disabled" rowspan="1" colspan="1" aria-label="Invoice" style="width: 0px;">Invoice</th></tr>
                        </thead>
                        <tbody class="fs-6 fw-semibold text-gray-600">
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                    <tr class="odd">
                                    <td data-order="Invalid date"><a href="#" class="text-gray-600 text-hover-primary">426445943</a></td>
                                    <td class="text-success">$31.00</td>
                                    <td><span class="badge badge-light-success">Approved</span></td>
                                    <td>Feb 09, 2020</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="even">
                                    <td data-order="Invalid date"><a href="#" class="text-gray-600 text-hover-primary">984445943</a></td>
                                    <td class="text-success">$52.00</td>
                                    <td><span class="badge badge-light-success">Approved</span></td>
                                    <td>Nov 01, 2020</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="odd">
                                    <td data-order="Invalid date"><a href="#" class="text-gray-600 text-hover-primary">324442313</a></td>
                                    <td class="text-danger">$-0.80</td>
                                    <td><span class="badge badge-light-success">Approved</span></td>
                                    <td>Jan 04, 2020</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="even">
                                    <td data-order="Invalid date"><a href="#" class="text-gray-600 text-hover-primary">312445984</a></td>
                                    <td class="text-success">$5.00</td>
                                    <td><span class="badge badge-light-danger">Rejected</span></td>
                                    <td>Sep 15, 2020</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="odd">
                                    <td data-order="Invalid date"><a href="#" class="text-gray-600 text-hover-primary">102445788</a></td>
                                    <td class="text-success">$38.00</td>
                                    <td><span class="badge badge-light-warning">Pending</span></td>
                                    <td>Nov 01, 2020</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr></tbody>
                    </table></div><div class="row" bis_skin_checked="1"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start" bis_skin_checked="1"></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end" bis_skin_checked="1"><div class="dataTables_paginate paging_simple_numbers" id="kt_customer_details_invoices_table_3_paginate" bis_skin_checked="1"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="kt_customer_details_invoices_table_3_previous"><a href="#" aria-controls="kt_customer_details_invoices_table_3" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="kt_customer_details_invoices_table_3" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_customer_details_invoices_table_3" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="kt_customer_details_invoices_table_3_next"><a href="#" aria-controls="kt_customer_details_invoices_table_3" data-dt-idx="3" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div>
                    <!--end::Table-->
                </div>
                <!--end::Tab panel-->
                                            <!--begin::Tab panel-->
                <div id="kt_customer_details_invoices_4" class="py-0 tab-pane fade " role="tabpanel" bis_skin_checked="1" aria-labelledby="kt_referrals_2017_tab">
                    <!--begin::Table-->
                    <div id="kt_customer_details_invoices_table_4_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer" bis_skin_checked="1"><div class="table-responsive" bis_skin_checked="1"><table id="kt_customer_details_invoices_table_4" class="table align-middle table-row-dashed fs-6 fw-bold gy-5 dataTable no-footer">
                        <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bold">
                            <tr class="text-start text-muted gs-0"><th class="min-w-100px sorting" tabindex="0" aria-controls="kt_customer_details_invoices_table_4" rowspan="1" colspan="1" aria-label="Order ID: activate to sort column ascending" style="width: 0px;">Order ID</th><th class="min-w-100px sorting" tabindex="0" aria-controls="kt_customer_details_invoices_table_4" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 0px;">Amount</th><th class="min-w-100px sorting" tabindex="0" aria-controls="kt_customer_details_invoices_table_4" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 0px;">Status</th><th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customer_details_invoices_table_4" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 0px;">Date</th><th class="min-w-100px text-end pe-7 sorting_disabled" rowspan="1" colspan="1" aria-label="Invoice" style="width: 0px;">Invoice</th></tr>
                        </thead>
                        <tbody class="fs-6 fw-semibold text-gray-600">
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                    <tr class="odd">
                                    <td data-order="Invalid date"><a href="#" class="text-gray-600 text-hover-primary">102445788</a></td>
                                    <td class="text-success">$38.00</td>
                                    <td><span class="badge badge-light-info">In progress</span></td>
                                    <td>Nov 01, 2020</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="even">
                                    <td data-order="Invalid date"><a href="#" class="text-gray-600 text-hover-primary">423445721</a></td>
                                    <td class="text-danger">$-2.60</td>
                                    <td><span class="badge badge-light-success">Approved</span></td>
                                    <td>Oct 24, 2020</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="odd">
                                    <td data-order="Invalid date"><a href="#" class="text-gray-600 text-hover-primary">102445788</a></td>
                                    <td class="text-success">$38.00</td>
                                    <td><span class="badge badge-light-danger">Rejected</span></td>
                                    <td>Nov 01, 2020</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="even">
                                    <td data-order="Invalid date"><a href="#" class="text-gray-600 text-hover-primary">423445721</a></td>
                                    <td class="text-danger">$-2.60</td>
                                    <td><span class="badge badge-light-warning">Pending</span></td>
                                    <td>Oct 24, 2020</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="odd">
                                    <td data-order="Invalid date"><a href="#" class="text-gray-600 text-hover-primary">426445943</a></td>
                                    <td class="text-success">$31.00</td>
                                    <td><span class="badge badge-light-warning">Pending</span></td>
                                    <td>Feb 09, 2020</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr></tbody>
                    </table></div><div class="row" bis_skin_checked="1"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start" bis_skin_checked="1"></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end" bis_skin_checked="1"><div class="dataTables_paginate paging_simple_numbers" id="kt_customer_details_invoices_table_4_paginate" bis_skin_checked="1"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="kt_customer_details_invoices_table_4_previous"><a href="#" aria-controls="kt_customer_details_invoices_table_4" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="kt_customer_details_invoices_table_4" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_customer_details_invoices_table_4" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="kt_customer_details_invoices_table_4_next"><a href="#" aria-controls="kt_customer_details_invoices_table_4" data-dt-idx="3" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div>
                    <!--end::Table-->
                </div>
                <!--end::Tab panel-->
                    </div>
        <!--end::Tab Content-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Card-->            </div>
            <!--end:::Tab pane-->

            <!--begin:::Tab pane-->
            <div class="tab-pane fade" id="kt_customer_view_overview_events_and_logs_tab" role="tabpanel" bis_skin_checked="1">
                
<!--begin::Card-->
<div class="card pt-4 mb-6 mb-xl-9" bis_skin_checked="1">
    <!--begin::Card header-->
    <div class="card-header border-0" bis_skin_checked="1">
        <!--begin::Card title-->
        <div class="card-title" bis_skin_checked="1">
            <h2>Logs</h2>
        </div>
        <!--end::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar" bis_skin_checked="1">
            <!--begin::Button-->
            <button type="button" class="btn btn-sm btn-light-primary">
                <i class="ki-duotone ki-cloud-download fs-3"><span class="path1"></span><span class="path2"></span></i>  
                Download Report
            </button>
            <!--end::Button-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body py-0" bis_skin_checked="1">
        <!--begin::Table wrapper-->
        <div class="table-responsive" bis_skin_checked="1">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fw-semibold text-gray-600 fs-6 gy-5" id="kt_table_customers_logs">
                <tbody>
                                                                    <tr>
                            <td class="min-w-70px">
                                <div class="badge badge-light-success" bis_skin_checked="1">200 OK</div>
                            </td>
                            <td>
                               POST /v1/invoices/in_9421_9209/payment                            </td>
                            <td class="pe-0 text-end min-w-200px">
                                10 Nov 2024, 8:43 pm                            </td>
                        </tr>
                                                                    <tr>
                            <td class="min-w-70px">
                                <div class="badge badge-light-success" bis_skin_checked="1">200 OK</div>
                            </td>
                            <td>
                               POST /v1/invoices/in_9421_9209/payment                            </td>
                            <td class="pe-0 text-end min-w-200px">
                                20 Jun 2024, 6:43 am                            </td>
                        </tr>
                                                                    <tr>
                            <td class="min-w-70px">
                                <div class="badge badge-light-danger" bis_skin_checked="1">500 ERR</div>
                            </td>
                            <td>
                               POST /v1/invoice/in_2771_4639/invalid                            </td>
                            <td class="pe-0 text-end min-w-200px">
                                21 Feb 2024, 5:30 pm                            </td>
                        </tr>
                                                                    <tr>
                            <td class="min-w-70px">
                                <div class="badge badge-light-success" bis_skin_checked="1">200 OK</div>
                            </td>
                            <td>
                               POST /v1/invoices/in_3922_9715/payment                            </td>
                            <td class="pe-0 text-end min-w-200px">
                                20 Jun 2024, 10:30 am                            </td>
                        </tr>
                                                                    <tr>
                            <td class="min-w-70px">
                                <div class="badge badge-light-danger" bis_skin_checked="1">500 ERR</div>
                            </td>
                            <td>
                               POST /v1/invoice/in_2998_2221/invalid                            </td>
                            <td class="pe-0 text-end min-w-200px">
                                05 May 2024, 9:23 pm                            </td>
                        </tr>
                                                                    <tr>
                            <td class="min-w-70px">
                                <div class="badge badge-light-danger" bis_skin_checked="1">500 ERR</div>
                            </td>
                            <td>
                               POST /v1/invoice/in_2771_4639/invalid                            </td>
                            <td class="pe-0 text-end min-w-200px">
                                20 Dec 2024, 11:05 am                            </td>
                        </tr>
                                                                    <tr>
                            <td class="min-w-70px">
                                <div class="badge badge-light-warning" bis_skin_checked="1">404 WRN</div>
                            </td>
                            <td>
                               POST /v1/customer/c_65c11fe054803/not_found                            </td>
                            <td class="pe-0 text-end min-w-200px">
                                21 Feb 2024, 10:10 pm                            </td>
                        </tr>
                                                                    <tr>
                            <td class="min-w-70px">
                                <div class="badge badge-light-warning" bis_skin_checked="1">404 WRN</div>
                            </td>
                            <td>
                               POST /v1/customer/c_65c11fe054806/not_found                            </td>
                            <td class="pe-0 text-end min-w-200px">
                                25 Jul 2024, 10:30 am                            </td>
                        </tr>
                                                                    <tr>
                            <td class="min-w-70px">
                                <div class="badge badge-light-success" bis_skin_checked="1">200 OK</div>
                            </td>
                            <td>
                               POST /v1/invoices/in_6584_8268/payment                            </td>
                            <td class="pe-0 text-end min-w-200px">
                                22 Sep 2024, 9:23 pm                            </td>
                        </tr>
                                                                    <tr>
                            <td class="min-w-70px">
                                <div class="badge badge-light-warning" bis_skin_checked="1">404 WRN</div>
                            </td>
                            <td>
                               POST /v1/customer/c_65c11fe054803/not_found                            </td>
                            <td class="pe-0 text-end min-w-200px">
                                10 Mar 2024, 10:30 am                            </td>
                        </tr>
                                    </tbody>
            </table>
        </div>
        <!--end::Table wrapper-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Card-->
                <!--begin::Card-->
<div class="card pt-4 mb-6 mb-xl-9" bis_skin_checked="1">
    <!--begin::Card header-->
    <div class="card-header border-0" bis_skin_checked="1">
        <!--begin::Card title-->
        <div class="card-title" bis_skin_checked="1">
            <h2>Events</h2>
        </div>
        <!--end::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar" bis_skin_checked="1">
            <!--begin::Button-->
            <button type="button" class="btn btn-sm btn-light-primary">
                <i class="ki-duotone ki-cloud-download fs-3"><span class="path1"></span><span class="path2"></span></i>  
                Download Report
            </button>
            <!--end::Button-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body py-0" bis_skin_checked="1">
        <!--begin::Table-->
        <table class="table align-middle table-row-dashed fs-6 text-gray-600 fw-semibold gy-5" id="kt_table_customers_events">
            <tbody>
                                    <tr>
                        <td class="min-w-400px">
                            Invoice <a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#WER-45670</a> is <span class="badge badge-light-info">In Progress</span> 
                        </td>
                        <td class="pe-0 text-gray-600 text-end min-w-200px">
                            20 Dec 2024, 10:10 pm                        </td>
                    </tr>
                                    <tr>
                        <td class="min-w-400px">
                            <a href="#" class="text-gray-600 text-hover-primary me-1">Melody Macy</a> has made payment to <a href="#" class="fw-bold text-gray-900 text-hover-primary">#XRS-45670</a> 
                        </td>
                        <td class="pe-0 text-gray-600 text-end min-w-200px">
                            05 May 2024, 8:43 pm                        </td>
                    </tr>
                                    <tr>
                        <td class="min-w-400px">
                            Invoice <a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#LOP-45640</a> has been <span class="badge badge-light-danger">Declined</span> 
                        </td>
                        <td class="pe-0 text-gray-600 text-end min-w-200px">
                            19 Aug 2024, 9:23 pm                        </td>
                    </tr>
                                    <tr>
                        <td class="min-w-400px">
                            <a href="#" class="text-gray-600 text-hover-primary me-1">Max Smith</a> has made payment to <a href="#" class="fw-bold text-gray-900 text-hover-primary">#SDK-45670</a> 
                        </td>
                        <td class="pe-0 text-gray-600 text-end min-w-200px">
                            10 Nov 2024, 6:43 am                        </td>
                    </tr>
                                    <tr>
                        <td class="min-w-400px">
                            Invoice <a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#WER-45670</a> is <span class="badge badge-light-info">In Progress</span> 
                        </td>
                        <td class="pe-0 text-gray-600 text-end min-w-200px">
                            21 Feb 2024, 5:20 pm                        </td>
                    </tr>
                                    <tr>
                        <td class="min-w-400px">
                            Invoice <a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#KIO-45656</a> status has changed from <span class="badge badge-light-succees me-1">In Transit</span> to <span class="badge badge-light-success">Approved</span> 
                        </td>
                        <td class="pe-0 text-gray-600 text-end min-w-200px">
                            10 Nov 2024, 10:10 pm                        </td>
                    </tr>
                                    <tr>
                        <td class="min-w-400px">
                            <a href="#" class="text-gray-600 text-hover-primary me-1">Sean Bean</a> has made payment to <a href="#" class="fw-bold text-gray-900 text-hover-primary">#XRS-45670</a> 
                        </td>
                        <td class="pe-0 text-gray-600 text-end min-w-200px">
                            10 Nov 2024, 11:05 am                        </td>
                    </tr>
                                    <tr>
                        <td class="min-w-400px">
                            <a href="#" class="text-gray-600 text-hover-primary me-1">Melody Macy</a> has made payment to <a href="#" class="fw-bold text-gray-900 text-hover-primary">#XRS-45670</a> 
                        </td>
                        <td class="pe-0 text-gray-600 text-end min-w-200px">
                            20 Jun 2024, 11:05 am                        </td>
                    </tr>
                                    <tr>
                        <td class="min-w-400px">
                            Invoice <a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#DER-45645</a> status has changed from <span class="badge badge-light-info me-1">In Progress</span> to <span class="badge badge-light-primary">In Transit</span> 
                        </td>
                        <td class="pe-0 text-gray-600 text-end min-w-200px">
                            22 Sep 2024, 6:05 pm                        </td>
                    </tr>
                                    <tr>
                        <td class="min-w-400px">
                            <a href="#" class="text-gray-600 text-hover-primary me-1">Emma Smith</a> has made payment to <a href="#" class="fw-bold text-gray-900 text-hover-primary">#XRS-45670</a> 
                        </td>
                        <td class="pe-0 text-gray-600 text-end min-w-200px">
                            25 Oct 2024, 5:20 pm                        </td>
                    </tr>
                            </tbody>
        </table>
        <!--end::Table-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Card-->            </div>
            <!--end:::Tab pane-->

            <!--begin:::Tab pane-->
            <div class="tab-pane fade" id="kt_customer_view_overview_statements" role="tabpanel" bis_skin_checked="1">
                <!--begin::Earnings-->
<div class="card mb-6 mb-xl-9" bis_skin_checked="1">
    <!--begin::Header-->
    <div class="card-header border-0" bis_skin_checked="1">
        <div class="card-title" bis_skin_checked="1">
            <h2>Earnings</h2>
        </div>
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body py-0" bis_skin_checked="1">
        <div class="fs-5 fw-semibold text-gray-500 mb-4" bis_skin_checked="1">
            Last 30 day earnings calculated. Apart from arranging the order of topics.
        </div>

        <!--begin::Left Section-->
        <div class="d-flex flex-wrap flex-stack mb-5" bis_skin_checked="1">
            <!--begin::Row-->
            <div class="d-flex flex-wrap" bis_skin_checked="1">
                <!--begin::Col-->
                <div class="border border-dashed border-gray-300 w-150px rounded my-3 p-4 me-6" bis_skin_checked="1">                    
                    <span class="fs-1 fw-bold text-gray-800 lh-1">
                        <span data-kt-countup="true" data-kt-countup-value="6,840" data-kt-countup-prefix="$">0</span>
                        <i class="ki-duotone ki-arrow-up fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                    </span>
                    <span class="fs-6 fw-semibold text-muted d-block lh-1 pt-2">Net Earnings</span>
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="border border-dashed border-gray-300 w-125px rounded my-3 p-4 me-6" bis_skin_checked="1">   
                    <span class="fs-1 fw-bold text-gray-800 lh-1">
                        <span class="" data-kt-countup="true" data-kt-countup-value="16">0</span>%
                        <i class="ki-duotone ki-arrow-down fs-1 text-danger"><span class="path1"></span><span class="path2"></span></i>                    </span>
                    <span class="fs-6 fw-semibold text-muted d-block lh-1 pt-2">Change</span>
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="border border-dashed border-gray-300 w-150px rounded my-3 p-4 me-6" bis_skin_checked="1">
                    <span class="fs-1 fw-bold text-gray-800 lh-1">
                        <span data-kt-countup="true" data-kt-countup-value="1,240" data-kt-countup-prefix="$">0</span>
                        <span class="text-primary">--</span>
                    </span>
                    <span class="fs-6 fw-semibold text-muted d-block lh-1 pt-2">Fees</span>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->

            <a href="#" class="btn btn-sm btn-light-primary flex-shrink-0">Withdraw Earnings</a>             
        </div>
        <!--end::Left Section-->
    </div>
    <!--end::Body-->
</div>
<!--end::Earnings-->

                
<!--begin::Statements-->
<div class="card mb-6 mb-xl-9" bis_skin_checked="1">
    <!--begin::Header-->
    <div class="card-header" bis_skin_checked="1">
        <!--begin::Title-->
        <div class="card-title" bis_skin_checked="1">
            <h2>Statement</h2>
        </div>
        <!--end::Title-->

        <!--begin::Toolbar-->
        <div class="card-toolbar" bis_skin_checked="1">
            <!--begin::Tab nav-->
            <ul class="nav nav-stretch fs-5 fw-semibold nav-line-tabs nav-line-tabs-2x border-transparent" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link text-active-primary active" data-bs-toggle="tab" role="tab" href="#kt_customer_view_statement_1" aria-selected="true">
                        This Year
                    </a>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_view_statement_2" aria-selected="false" tabindex="-1">
                        2020
                    </a>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_view_statement_3" aria-selected="false" tabindex="-1">
                        2019
                    </a>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_view_statement_4" aria-selected="false" tabindex="-1">
                        2018
                    </a>
                </li>
            </ul>
            <!--end::Tab nav-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->

    <!--begin::Card body-->
    <div class="card-body pb-5" bis_skin_checked="1">
        <!--begin::Tab Content-->
        <div id="kt_customer_view_statement_tab_content" class="tab-content" bis_skin_checked="1">
                                            <!--begin::Tab panel-->
                <div id="kt_customer_view_statement_1" class="py-0 tab-pane fade show active" role="tabpanel" bis_skin_checked="1">
                    <!--begin::Table-->
                    <div id="kt_customer_view_statement_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer" bis_skin_checked="1"><div class="table-responsive" bis_skin_checked="1"><table id="kt_customer_view_statement_table_1" class="table align-middle table-row-dashed fs-6 text-gray-600 fw-semibold gy-4 dataTable no-footer">
                        <thead class="border-bottom border-gray-200">
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0"><th class="w-125px sorting" tabindex="0" aria-controls="kt_customer_view_statement_table_1" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 125px;">Date</th><th class="w-100px sorting" tabindex="0" aria-controls="kt_customer_view_statement_table_1" rowspan="1" colspan="1" aria-label="Order ID: activate to sort column ascending" style="width: 100px;">Order ID</th><th class="w-300px sorting" tabindex="0" aria-controls="kt_customer_view_statement_table_1" rowspan="1" colspan="1" aria-label="Details: activate to sort column ascending" style="width: 300px;">Details</th><th class="w-100px sorting" tabindex="0" aria-controls="kt_customer_view_statement_table_1" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 100px;">Amount</th><th class="w-100px text-end pe-7 sorting_disabled" rowspan="1" colspan="1" aria-label="Invoice" style="width: 100px;">Invoice</th></tr>
                        </thead>
                        <tbody>
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                    <tr class="odd">
                                    <td data-order="2021-01-01T00:00:00+01:00">Nov 01, 2021</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">102445788</a></td>
                                    <td>Darknight transparency  36 Icons Pack</td>
                                    <td class="text-success">$38.00</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="even">
                                    <td data-order="2021-01-24T00:00:00+01:00">Oct 24, 2021</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">423445721</a></td>
                                    <td>Seller Fee</td>
                                    <td class="text-danger">$-2.60</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="odd">
                                    <td data-order="2021-01-08T00:00:00+01:00">Oct 08, 2021</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">312445984</a></td>
                                    <td>Cartoon Mobile Emoji Phone Pack</td>
                                    <td class="text-success">$76.00</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="even">
                                    <td data-order="2021-01-15T00:00:00+01:00">Sep 15, 2021</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">312445984</a></td>
                                    <td>Iphone 12 Pro Mockup  Mega Bundle</td>
                                    <td class="text-success">$5.00</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="odd">
                                    <td data-order="2021-01-30T00:00:00+01:00">May 30, 2021</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">523445943</a></td>
                                    <td>Seller Fee</td>
                                    <td class="text-danger">$-1.30</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="even">
                                    <td data-order="2021-01-22T00:00:00+01:00">Apr 22, 2021</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">231445943</a></td>
                                    <td>Parcel Shipping / Delivery Service App</td>
                                    <td class="text-success">$204.00</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="odd">
                                    <td data-order="2021-01-09T00:00:00+01:00">Feb 09, 2021</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">426445943</a></td>
                                    <td>Visual Design Illustration</td>
                                    <td class="text-success">$31.00</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="even">
                                    <td data-order="2021-01-01T00:00:00+01:00">Nov 01, 2021</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">984445943</a></td>
                                    <td>Abstract Vusial Pack</td>
                                    <td class="text-success">$52.00</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="odd">
                                    <td data-order="2021-01-04T00:00:00+01:00">Jan 04, 2021</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">324442313</a></td>
                                    <td>Seller Fee</td>
                                    <td class="text-danger">$-0.80</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="even">
                                    <td data-order="2021-01-01T00:00:00+01:00">Nov 01, 2021</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">102445788</a></td>
                                    <td>Darknight transparency  36 Icons Pack</td>
                                    <td class="text-success">$38.00</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr></tbody>
                    </table></div><div class="row" bis_skin_checked="1"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start" bis_skin_checked="1"></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end" bis_skin_checked="1"><div class="dataTables_paginate paging_simple_numbers" id="kt_customer_view_statement_table_1_paginate" bis_skin_checked="1"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="kt_customer_view_statement_table_1_previous"><a href="#" aria-controls="kt_customer_view_statement_table_1" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="kt_customer_view_statement_table_1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_customer_view_statement_table_1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="kt_customer_view_statement_table_1_next"><a href="#" aria-controls="kt_customer_view_statement_table_1" data-dt-idx="3" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div>
                    <!--end::Table-->
                </div>
                <!--end::Tab panel-->
                                            <!--begin::Tab panel-->
                <div id="kt_customer_view_statement_2" class="py-0 tab-pane fade " role="tabpanel" bis_skin_checked="1">
                    <!--begin::Table-->
                    <div id="kt_customer_view_statement_table_2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer" bis_skin_checked="1"><div class="table-responsive" bis_skin_checked="1"><table id="kt_customer_view_statement_table_2" class="table align-middle table-row-dashed fs-6 text-gray-600 fw-semibold gy-4 dataTable no-footer">
                        <thead class="border-bottom border-gray-200">
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0"><th class="w-125px sorting" tabindex="0" aria-controls="kt_customer_view_statement_table_2" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 125px;">Date</th><th class="w-100px sorting" tabindex="0" aria-controls="kt_customer_view_statement_table_2" rowspan="1" colspan="1" aria-label="Order ID: activate to sort column ascending" style="width: 100px;">Order ID</th><th class="w-300px sorting" tabindex="0" aria-controls="kt_customer_view_statement_table_2" rowspan="1" colspan="1" aria-label="Details: activate to sort column ascending" style="width: 300px;">Details</th><th class="w-100px sorting" tabindex="0" aria-controls="kt_customer_view_statement_table_2" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 100px;">Amount</th><th class="w-100px text-end pe-7 sorting_disabled" rowspan="1" colspan="1" aria-label="Invoice" style="width: 100px;">Invoice</th></tr>
                        </thead>
                        <tbody>
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                    <tr class="odd">
                                    <td data-order="2020-01-30T00:00:00+01:00">May 30, 2020</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">523445943</a></td>
                                    <td>Seller Fee</td>
                                    <td class="text-danger">$-1.30</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="even">
                                    <td data-order="2020-01-22T00:00:00+01:00">Apr 22, 2020</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">231445943</a></td>
                                    <td>Parcel Shipping / Delivery Service App</td>
                                    <td class="text-success">$204.00</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="odd">
                                    <td data-order="2020-01-09T00:00:00+01:00">Feb 09, 2020</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">426445943</a></td>
                                    <td>Visual Design Illustration</td>
                                    <td class="text-success">$31.00</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="even">
                                    <td data-order="2020-01-01T00:00:00+01:00">Nov 01, 2020</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">984445943</a></td>
                                    <td>Abstract Vusial Pack</td>
                                    <td class="text-success">$52.00</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="odd">
                                    <td data-order="2020-01-04T00:00:00+01:00">Jan 04, 2020</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">324442313</a></td>
                                    <td>Seller Fee</td>
                                    <td class="text-danger">$-0.80</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="even">
                                    <td data-order="2020-01-01T00:00:00+01:00">Nov 01, 2020</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">102445788</a></td>
                                    <td>Darknight transparency  36 Icons Pack</td>
                                    <td class="text-success">$38.00</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="odd">
                                    <td data-order="2020-01-24T00:00:00+01:00">Oct 24, 2020</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">423445721</a></td>
                                    <td>Seller Fee</td>
                                    <td class="text-danger">$-2.60</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="even">
                                    <td data-order="2020-01-08T00:00:00+01:00">Oct 08, 2020</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">312445984</a></td>
                                    <td>Cartoon Mobile Emoji Phone Pack</td>
                                    <td class="text-success">$76.00</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="odd">
                                    <td data-order="2020-01-15T00:00:00+01:00">Sep 15, 2020</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">312445984</a></td>
                                    <td>Iphone 12 Pro Mockup  Mega Bundle</td>
                                    <td class="text-success">$5.00</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="even">
                                    <td data-order="2020-01-30T00:00:00+01:00">May 30, 2020</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">523445943</a></td>
                                    <td>Seller Fee</td>
                                    <td class="text-danger">$-1.30</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr></tbody>
                    </table></div><div class="row" bis_skin_checked="1"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start" bis_skin_checked="1"></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end" bis_skin_checked="1"><div class="dataTables_paginate paging_simple_numbers" id="kt_customer_view_statement_table_2_paginate" bis_skin_checked="1"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="kt_customer_view_statement_table_2_previous"><a href="#" aria-controls="kt_customer_view_statement_table_2" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="kt_customer_view_statement_table_2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_customer_view_statement_table_2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="kt_customer_view_statement_table_2_next"><a href="#" aria-controls="kt_customer_view_statement_table_2" data-dt-idx="3" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div>
                    <!--end::Table-->
                </div>
                <!--end::Tab panel-->
                                            <!--begin::Tab panel-->
                <div id="kt_customer_view_statement_3" class="py-0 tab-pane fade " role="tabpanel" bis_skin_checked="1">
                    <!--begin::Table-->
                    <div id="kt_customer_view_statement_table_3_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer" bis_skin_checked="1"><div class="table-responsive" bis_skin_checked="1"><table id="kt_customer_view_statement_table_3" class="table align-middle table-row-dashed fs-6 text-gray-600 fw-semibold gy-4 dataTable no-footer">
                        <thead class="border-bottom border-gray-200">
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0"><th class="w-125px sorting" tabindex="0" aria-controls="kt_customer_view_statement_table_3" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 125px;">Date</th><th class="w-100px sorting" tabindex="0" aria-controls="kt_customer_view_statement_table_3" rowspan="1" colspan="1" aria-label="Order ID: activate to sort column ascending" style="width: 100px;">Order ID</th><th class="w-300px sorting" tabindex="0" aria-controls="kt_customer_view_statement_table_3" rowspan="1" colspan="1" aria-label="Details: activate to sort column ascending" style="width: 300px;">Details</th><th class="w-100px sorting" tabindex="0" aria-controls="kt_customer_view_statement_table_3" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 100px;">Amount</th><th class="w-100px text-end pe-7 sorting_disabled" rowspan="1" colspan="1" aria-label="Invoice" style="width: 100px;">Invoice</th></tr>
                        </thead>
                        <tbody>
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                    <tr class="odd">
                                    <td data-order="2019-01-09T00:00:00+01:00">Feb 09, 2019</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">426445943</a></td>
                                    <td>Visual Design Illustration</td>
                                    <td class="text-success">$31.00</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="even">
                                    <td data-order="2019-01-01T00:00:00+01:00">Nov 01, 2019</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">984445943</a></td>
                                    <td>Abstract Vusial Pack</td>
                                    <td class="text-success">$52.00</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="odd">
                                    <td data-order="2019-01-04T00:00:00+01:00">Jan 04, 2019</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">324442313</a></td>
                                    <td>Seller Fee</td>
                                    <td class="text-danger">$-0.80</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="even">
                                    <td data-order="2019-01-15T00:00:00+01:00">Sep 15, 2019</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">312445984</a></td>
                                    <td>Iphone 12 Pro Mockup  Mega Bundle</td>
                                    <td class="text-success">$5.00</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="odd">
                                    <td data-order="2019-01-01T00:00:00+01:00">Nov 01, 2019</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">102445788</a></td>
                                    <td>Darknight transparency  36 Icons Pack</td>
                                    <td class="text-success">$38.00</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="even">
                                    <td data-order="2019-01-24T00:00:00+01:00">Oct 24, 2019</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">423445721</a></td>
                                    <td>Seller Fee</td>
                                    <td class="text-danger">$-2.60</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="odd">
                                    <td data-order="2019-01-08T00:00:00+01:00">Oct 08, 2019</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">312445984</a></td>
                                    <td>Cartoon Mobile Emoji Phone Pack</td>
                                    <td class="text-success">$76.00</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="even">
                                    <td data-order="2019-01-30T00:00:00+01:00">May 30, 2019</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">523445943</a></td>
                                    <td>Seller Fee</td>
                                    <td class="text-danger">$-1.30</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="odd">
                                    <td data-order="2019-01-22T00:00:00+01:00">Apr 22, 2019</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">231445943</a></td>
                                    <td>Parcel Shipping / Delivery Service App</td>
                                    <td class="text-success">$204.00</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="even">
                                    <td data-order="2019-01-09T00:00:00+01:00">Feb 09, 2019</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">426445943</a></td>
                                    <td>Visual Design Illustration</td>
                                    <td class="text-success">$31.00</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr></tbody>
                    </table></div><div class="row" bis_skin_checked="1"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start" bis_skin_checked="1"></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end" bis_skin_checked="1"><div class="dataTables_paginate paging_simple_numbers" id="kt_customer_view_statement_table_3_paginate" bis_skin_checked="1"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="kt_customer_view_statement_table_3_previous"><a href="#" aria-controls="kt_customer_view_statement_table_3" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="kt_customer_view_statement_table_3" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_customer_view_statement_table_3" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="kt_customer_view_statement_table_3_next"><a href="#" aria-controls="kt_customer_view_statement_table_3" data-dt-idx="3" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div>
                    <!--end::Table-->
                </div>
                <!--end::Tab panel-->
                                            <!--begin::Tab panel-->
                <div id="kt_customer_view_statement_4" class="py-0 tab-pane fade " role="tabpanel" bis_skin_checked="1">
                    <!--begin::Table-->
                    <div id="kt_customer_view_statement_table_4_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer" bis_skin_checked="1"><div class="table-responsive" bis_skin_checked="1"><table id="kt_customer_view_statement_table_4" class="table align-middle table-row-dashed fs-6 text-gray-600 fw-semibold gy-4 dataTable no-footer">
                        <thead class="border-bottom border-gray-200">
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0"><th class="w-125px sorting" tabindex="0" aria-controls="kt_customer_view_statement_table_4" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 125px;">Date</th><th class="w-100px sorting" tabindex="0" aria-controls="kt_customer_view_statement_table_4" rowspan="1" colspan="1" aria-label="Order ID: activate to sort column ascending" style="width: 100px;">Order ID</th><th class="w-300px sorting" tabindex="0" aria-controls="kt_customer_view_statement_table_4" rowspan="1" colspan="1" aria-label="Details: activate to sort column ascending" style="width: 300px;">Details</th><th class="w-100px sorting" tabindex="0" aria-controls="kt_customer_view_statement_table_4" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 100px;">Amount</th><th class="w-100px text-end pe-7 sorting_disabled" rowspan="1" colspan="1" aria-label="Invoice" style="width: 100px;">Invoice</th></tr>
                        </thead>
                        <tbody>
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                    <tr class="odd">
                                    <td data-order="2018-01-01T00:00:00+01:00">Nov 01, 2018</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">102445788</a></td>
                                    <td>Darknight transparency  36 Icons Pack</td>
                                    <td class="text-success">$38.00</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="even">
                                    <td data-order="2018-01-24T00:00:00+01:00">Oct 24, 2018</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">423445721</a></td>
                                    <td>Seller Fee</td>
                                    <td class="text-danger">$-2.60</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="odd">
                                    <td data-order="2018-01-01T00:00:00+01:00">Nov 01, 2018</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">102445788</a></td>
                                    <td>Darknight transparency  36 Icons Pack</td>
                                    <td class="text-success">$38.00</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="even">
                                    <td data-order="2018-01-24T00:00:00+01:00">Oct 24, 2018</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">423445721</a></td>
                                    <td>Seller Fee</td>
                                    <td class="text-danger">$-2.60</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="odd">
                                    <td data-order="2018-01-09T00:00:00+01:00">Feb 09, 2018</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">426445943</a></td>
                                    <td>Visual Design Illustration</td>
                                    <td class="text-success">$31.00</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="even">
                                    <td data-order="2018-01-01T00:00:00+01:00">Nov 01, 2018</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">984445943</a></td>
                                    <td>Abstract Vusial Pack</td>
                                    <td class="text-success">$52.00</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="odd">
                                    <td data-order="2018-01-04T00:00:00+01:00">Jan 04, 2018</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">324442313</a></td>
                                    <td>Seller Fee</td>
                                    <td class="text-danger">$-0.80</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="even">
                                    <td data-order="2018-01-08T00:00:00+01:00">Oct 08, 2018</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">312445984</a></td>
                                    <td>Cartoon Mobile Emoji Phone Pack</td>
                                    <td class="text-success">$76.00</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="odd">
                                    <td data-order="2018-01-08T00:00:00+01:00">Oct 08, 2018</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">312445984</a></td>
                                    <td>Cartoon Mobile Emoji Phone Pack</td>
                                    <td class="text-success">$76.00</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr><tr class="even">
                                    <td data-order="2019-01-09T00:00:00+01:00">Feb 09, 2019</td>
                                    <td><a href="#" class="text-gray-600 text-hover-primary">426445943</a></td>
                                    <td>Visual Design Illustration</td>
                                    <td class="text-success">$31.00</td>
                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button></td>
                                </tr></tbody>
                    </table></div><div class="row" bis_skin_checked="1"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start" bis_skin_checked="1"></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end" bis_skin_checked="1"><div class="dataTables_paginate paging_simple_numbers" id="kt_customer_view_statement_table_4_paginate" bis_skin_checked="1"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="kt_customer_view_statement_table_4_previous"><a href="#" aria-controls="kt_customer_view_statement_table_4" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="kt_customer_view_statement_table_4" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_customer_view_statement_table_4" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="kt_customer_view_statement_table_4_next"><a href="#" aria-controls="kt_customer_view_statement_table_4" data-dt-idx="3" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div>
                    <!--end::Table-->
                </div>
                <!--end::Tab panel-->
                    </div>
        <!--end::Tab Content-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Statements-->            </div>
            <!--end:::Tab pane-->
        </div>
        <!--end:::Tab content-->
    </div>
    <!--end::Content-->
</div>
<!--end::Layout-->

<!--begin::Modals-->
<!--begin::Modal - Add Payment-->
<div class="modal fade" id="kt_modal_add_payment" tabindex="-1" aria-hidden="true" bis_skin_checked="1">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px" bis_skin_checked="1">
        <!--begin::Modal content-->
        <div class="modal-content" bis_skin_checked="1">
            <!--begin::Modal header-->
            <div class="modal-header" bis_skin_checked="1">
                <!--begin::Modal title-->
                <h2 class="fw-bold">Add a Payment Record</h2>
                <!--end::Modal title-->

                <!--begin::Close-->
                <div id="kt_modal_add_payment_close" class="btn btn-icon btn-sm btn-active-icon-primary" bis_skin_checked="1">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7" bis_skin_checked="1">
                <!--begin::Form-->
                <form id="kt_modal_add_payment_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                    <!--begin::Input group-->
                    <div class="fv-row mb-7 fv-plugins-icon-container" bis_skin_checked="1">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold form-label mb-2">
                            <span class="required">Invoice Number</span>

                            <span class="ms-2" data-bs-toggle="tooltip" aria-label="The invoice number must be unique." data-bs-original-title="The invoice number must be unique." data-kt-initialized="1">
                                <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                            </span>
                        </label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" name="invoice" value="">
                        <!--end::Input-->
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-7 fv-plugins-icon-container" bis_skin_checked="1">
                        <!--begin::Label-->
                        <label class="required fs-6 fw-semibold form-label mb-2">Status</label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <select class="form-select form-select-solid fw-bold select2-hidden-accessible" name="status" data-control="select2" data-placeholder="Select an option" data-hide-search="true" data-select2-id="select2-data-9-lrz4" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                            <option data-select2-id="select2-data-11-remv"></option>
                                                            <option value="0">Approved</option>
                                                            <option value="1">Pending</option>
                                                            <option value="2">Rejected</option>
                                                            <option value="3">In progress</option>
                                                            <option value="4">Completed</option>
                                                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-10-rypt" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid fw-bold" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-status-m9-container" aria-controls="select2-status-m9-container"><span class="select2-selection__rendered" id="select2-status-m9-container" role="textbox" aria-readonly="true" title="Select an option"><span class="select2-selection__placeholder">Select an option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        <!--end::Input-->
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-7 fv-plugins-icon-container" bis_skin_checked="1">
                        <!--begin::Label-->
                        <label class="required fs-6 fw-semibold form-label mb-2">Invoice Amount</label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" name="amount" value="">
                        <!--end::Input-->
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-15" bis_skin_checked="1">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold form-label mb-2">
                            <span class="required">Additional Information</span>

                            <span class="ms-2" data-bs-toggle="tooltip" aria-label="Information such as description of invoice or product purchased." data-bs-original-title="Information such as description of invoice or product purchased." data-kt-initialized="1">
                                <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                            </span>                           
                        </label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <textarea class="form-control form-control-solid rounded-3" name="additional_info"></textarea>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Actions-->
                    <div class="text-center" bis_skin_checked="1">
                        <button type="reset" id="kt_modal_add_payment_cancel" class="btn btn-light me-3">
                            Discard
                        </button>

                        <button type="submit" id="kt_modal_add_payment_submit" class="btn btn-primary">
                            <span class="indicator-label">
                                Submit
                            </span>
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - New Card--><!--begin::Modal - Adjust Balance-->
<div class="modal fade" id="kt_modal_adjust_balance" tabindex="-1" aria-hidden="true" bis_skin_checked="1">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px" bis_skin_checked="1">
        <!--begin::Modal content-->
        <div class="modal-content" bis_skin_checked="1">
            <!--begin::Modal header-->
            <div class="modal-header" bis_skin_checked="1">
                <!--begin::Modal title-->
                <h2 class="fw-bold">Adjust Balance</h2>
                <!--end::Modal title-->

                <!--begin::Close-->
                <div id="kt_modal_adjust_balance_close" class="btn btn-icon btn-sm btn-active-icon-primary" bis_skin_checked="1">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7" bis_skin_checked="1">
                <!--begin::Balance preview-->
                <div class="d-flex text-center mb-9" bis_skin_checked="1">
                    <div class="w-50 border border-dashed border-gray-300 rounded mx-2 p-4" bis_skin_checked="1">
                        <div class="fs-6 fw-semibold mb-2 text-muted" bis_skin_checked="1">Current Balance</div>
                        <div class="fs-2 fw-bold" kt-modal-adjust-balance="current_balance" bis_skin_checked="1">US$ 32,487.57</div>
                    </div>
                    <div class="w-50 border border-dashed border-gray-300 rounded mx-2 p-4" bis_skin_checked="1">
                        <div class="fs-6 fw-semibold mb-2 text-muted" bis_skin_checked="1">
                            New Balance

                            <span class="ms-2" data-bs-toggle="tooltip" aria-label="Enter an amount to preview the new balance." data-bs-original-title="Enter an amount to preview the new balance." data-kt-initialized="1">
                                <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                            </span>
                        </div>
                        <div class="fs-2 fw-bold" kt-modal-adjust-balance="new_balance" bis_skin_checked="1">--</div>
                    </div>
                </div>
                <!--end::Balance preview-->

                <!--begin::Form-->
                <form id="kt_modal_adjust_balance_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                    <!--begin::Input group-->
                    <div class="fv-row mb-7 fv-plugins-icon-container" bis_skin_checked="1">
                        <!--begin::Label-->
                        <label class="required fs-6 fw-semibold form-label mb-2">Adjustment type</label>
                        <!--end::Label-->

                        <!--begin::Dropdown-->
                        <select class="form-select form-select-solid fw-bold select2-hidden-accessible" name="adjustment" aria-label="Select an option" data-control="select2" data-dropdown-parent="#kt_modal_adjust_balance" data-placeholder="Select an option" data-hide-search="true" data-select2-id="select2-data-12-f2qe" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                            <option data-select2-id="select2-data-14-mca8"></option>
                            <option value="1">Credit</option>
                            <option value="2">Debit</option>
                        </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-13-o8bu" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid fw-bold" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-adjustment-rc-container" aria-controls="select2-adjustment-rc-container"><span class="select2-selection__rendered" id="select2-adjustment-rc-container" role="textbox" aria-readonly="true" title="Select an option"><span class="select2-selection__placeholder">Select an option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        <!--end::Dropdown-->
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-7 fv-plugins-icon-container" bis_skin_checked="1">
                        <!--begin::Label-->
                        <label class="required fs-6 fw-semibold form-label mb-2">Amount</label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input id="kt_modal_inputmask" type="text" class="form-control form-control-solid" name="amount" value="" inputmode="text">
                        <!--end::Input-->
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                     <div class="fv-row mb-7" bis_skin_checked="1">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold form-label mb-2">Add adjustment note</label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <textarea class="form-control form-control-solid rounded-3 mb-5"></textarea>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Disclaimer-->
                    <div class="fs-7 text-muted mb-15" bis_skin_checked="1">
                        Please be aware that all manual balance changes will be audited by the financial team every fortnight. Please maintain your invoices and receipts until then. Thank you.
                    </div>
                    <!--end::Disclaimer-->

                    <!--begin::Actions-->
                    <div class="text-center" bis_skin_checked="1">
                        <button type="reset" id="kt_modal_adjust_balance_cancel" class="btn btn-light me-3">
                            Discard
                        </button>

                        <button type="submit" id="kt_modal_adjust_balance_submit" class="btn btn-primary">
                            <span class="indicator-label">
                                Submit
                            </span>
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - New Card--><!--begin::Modal - New Address-->
<div class="modal fade" id="kt_modal_update_customer" tabindex="-1" aria-hidden="true" bis_skin_checked="1">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px" bis_skin_checked="1">
        <!--begin::Modal content-->
        <div class="modal-content" bis_skin_checked="1">
            <!--begin::Form-->
            <form class="form" action="#" id="kt_modal_update_customer_form">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_update_customer_header" bis_skin_checked="1">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Update Customer</h2>
                    <!--end::Modal title-->

                    <!--begin::Close-->
                    <div id="kt_modal_update_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary" bis_skin_checked="1">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body py-10 px-lg-17" bis_skin_checked="1">
                    <!--begin::Scroll-->
                    <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_customer_header" data-kt-scroll-wrappers="#kt_modal_update_customer_scroll" data-kt-scroll-offset="300px" style="max-height: 232px;" bis_skin_checked="1">
                        <!--begin::Notice-->
                        
<!--begin::Notice-->
<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6" bis_skin_checked="1">
            <!--begin::Icon-->
        <i class="ki-duotone ki-information fs-2tx text-primary me-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>        <!--end::Icon-->
    
    <!--begin::Wrapper-->
    <div class="d-flex flex-stack flex-grow-1 " bis_skin_checked="1">
                    <!--begin::Content-->
            <div class=" fw-semibold" bis_skin_checked="1">
                
                                    <div class="fs-6 text-gray-700 " bis_skin_checked="1">Updating customer details will receive a privacy audit. For more info, please read our <a href="#">Privacy Policy</a></div>
                            </div>
            <!--end::Content-->
        
            </div>
    <!--end::Wrapper-->  
</div>
<!--end::Notice-->
                        <!--end::Notice-->

                        <!--begin::User toggle-->
                        <div class="fw-bold fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_update_customer_user_info" role="button" aria-expanded="false" aria-controls="kt_modal_update_customer_user_info" bis_skin_checked="1">
                            User Information
                            <span class="ms-2 rotate-180">
                                <i class="ki-duotone ki-down fs-3"></i>                            </span>
                        </div>
                        <!--end::User toggle-->

                        <!--begin::User form-->
                        <div id="kt_modal_update_customer_user_info" class="collapse show" bis_skin_checked="1">
                            <!--begin::Input group-->
                            <div class="mb-7" bis_skin_checked="1">
                                <!--begin::Label-->
                                <label class="fs-6 fw-semibold mb-2">
                                    <span>Update Avatar</span>

                                    <span class="ms-1" data-bs-toggle="tooltip" aria-label="Allowed file types: png, jpg, jpeg." data-bs-original-title="Allowed file types: png, jpg, jpeg." data-kt-initialized="1">
                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                                    </span>
                                </label>
                                <!--end::Label-->

                                <!--begin::Image input wrapper-->
                                <div class="mt-1" bis_skin_checked="1">
                                    <!--begin::Image input-->
                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('/metronic8/demo1/assets/media/svg/avatars/blank.svg')" bis_skin_checked="1">
                                        <!--begin::Preview existing avatar-->
                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url(/metronic8/demo1/assets/media/avatars/300-1.jpg)" bis_skin_checked="1"></div>
                                        <!--end::Preview existing avatar-->

                                        <!--begin::Edit-->
                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
                                            <i class="ki-duotone ki-pencil fs-7"><span class="path1"></span><span class="path2"></span></i>
                                            <!--begin::Inputs-->
                                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                            <input type="hidden" name="avatar_remove">
                                            <!--end::Inputs-->
                                        </label>
                                        <!--end::Edit-->

                                        <!--begin::Cancel-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                                            <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>                                        </span>
                                        <!--end::Cancel-->

                                        <!--begin::Remove-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
                                            <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>                                        </span>
                                        <!--end::Remove-->
                                    </div>
                                    <!--end::Image input-->
                                </div>
                                <!--end::Image input wrapper-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-7" bis_skin_checked="1">
                                <!--begin::Label-->
                                <label class="fs-6 fw-semibold mb-2">Name</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="" name="name" value="Sean Bean">
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-7" bis_skin_checked="1">
                                <!--begin::Label-->
                                <label class="fs-6 fw-semibold mb-2">
                                    <span>Email</span>

                                    <span class="ms-1" data-bs-toggle="tooltip" aria-label="Email address must be active" data-bs-original-title="Email address must be active" data-kt-initialized="1">
                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                                    </span>
                                </label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="email" class="form-control form-control-solid" placeholder="" name="email" value="sean@dellito.com">
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-15" bis_skin_checked="1">
                                <!--begin::Label-->
                                <label class="fs-6 fw-semibold mb-2">Description</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="" name="description">
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::User form-->

                        <!--begin::Billing toggle-->
                        <div class="fw-bold fs-3 rotate collapsible collapsed mb-7" data-bs-toggle="collapse" href="#kt_modal_update_customer_billing_info" role="button" aria-expanded="false" aria-controls="kt_modal_update_customer_billing_info" bis_skin_checked="1">
                            Shipping Information
                            <span class="ms-2 rotate-180">
                                <i class="ki-duotone ki-down fs-3"></i>                            </span>
                        </div>
                        <!--end::Billing toggle-->

                        <!--begin::Billing form-->
                        <div id="kt_modal_update_customer_billing_info" class="collapse" bis_skin_checked="1">
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row" bis_skin_checked="1">
                                <!--begin::Label-->
                                <label class="fs-6 fw-semibold mb-2">Address Line 1</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="" name="address1" value="101, Collins Street">
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row" bis_skin_checked="1">
                                <!--begin::Label-->
                                <label class="fs-6 fw-semibold mb-2">Address Line 2</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="" name="address2">
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row" bis_skin_checked="1">
                                <!--begin::Label-->
                                <label class="fs-6 fw-semibold mb-2">Town</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="" name="city" value="Melbourne">
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row g-9 mb-7" bis_skin_checked="1">
                                <!--begin::Col-->
                                <div class="col-md-6 fv-row" bis_skin_checked="1">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold mb-2">State / Province</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" placeholder="" name="state" value="Victoria">
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-md-6 fv-row" bis_skin_checked="1">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold mb-2">Post Code</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" placeholder="" name="postcode" value="3000">
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row" bis_skin_checked="1">
                                <!--begin::Label-->
                                <label class="fs-6 fw-semibold mb-2">
                                    <span>Country</span>

                                    <span class="ms-1" data-bs-toggle="tooltip" aria-label="Country of origination" data-bs-original-title="Country of origination" data-kt-initialized="1">
                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                                    </span>
                                </label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a Country..." data-dropdown-parent="#kt_modal_update_customer" class="form-select form-select-solid fw-bold select2-hidden-accessible" data-select2-id="select2-data-15-dvdd" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                    <option value="" data-select2-id="select2-data-17-9ni0">Select a Country...</option>
                                                                            <option value="AF">Afghanistan</option>
                                                                            <option value="AX">Aland Islands</option>
                                                                            <option value="AL">Albania</option>
                                                                            <option value="DZ">Algeria</option>
                                                                            <option value="AS">American Samoa</option>
                                                                            <option value="AD">Andorra</option>
                                                                            <option value="AO">Angola</option>
                                                                            <option value="AI">Anguilla</option>
                                                                            <option value="AG">Antigua and Barbuda</option>
                                                                            <option value="AR">Argentina</option>
                                                                            <option value="AM">Armenia</option>
                                                                            <option value="AW">Aruba</option>
                                                                            <option value="AU">Australia</option>
                                                                            <option value="AT">Austria</option>
                                                                            <option value="AZ">Azerbaijan</option>
                                                                            <option value="BS">Bahamas</option>
                                                                            <option value="BH">Bahrain</option>
                                                                            <option value="BD">Bangladesh</option>
                                                                            <option value="BB">Barbados</option>
                                                                            <option value="BY">Belarus</option>
                                                                            <option value="BE">Belgium</option>
                                                                            <option value="BZ">Belize</option>
                                                                            <option value="BJ">Benin</option>
                                                                            <option value="BM">Bermuda</option>
                                                                            <option value="BT">Bhutan</option>
                                                                            <option value="BO">Bolivia, Plurinational State of</option>
                                                                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                                            <option value="BA">Bosnia and Herzegovina</option>
                                                                            <option value="BW">Botswana</option>
                                                                            <option value="BR">Brazil</option>
                                                                            <option value="IO">British Indian Ocean Territory</option>
                                                                            <option value="BN">Brunei Darussalam</option>
                                                                            <option value="BG">Bulgaria</option>
                                                                            <option value="BF">Burkina Faso</option>
                                                                            <option value="BI">Burundi</option>
                                                                            <option value="KH">Cambodia</option>
                                                                            <option value="CM">Cameroon</option>
                                                                            <option value="CA">Canada</option>
                                                                            <option value="CV">Cape Verde</option>
                                                                            <option value="KY">Cayman Islands</option>
                                                                            <option value="CF">Central African Republic</option>
                                                                            <option value="TD">Chad</option>
                                                                            <option value="CL">Chile</option>
                                                                            <option value="CN">China</option>
                                                                            <option value="CX">Christmas Island</option>
                                                                            <option value="CC">Cocos (Keeling) Islands</option>
                                                                            <option value="CO">Colombia</option>
                                                                            <option value="KM">Comoros</option>
                                                                            <option value="CK">Cook Islands</option>
                                                                            <option value="CR">Costa Rica</option>
                                                                            <option value="CI">Côte d'Ivoire</option>
                                                                            <option value="HR">Croatia</option>
                                                                            <option value="CU">Cuba</option>
                                                                            <option value="CW">Curaçao</option>
                                                                            <option value="CZ">Czech Republic</option>
                                                                            <option value="DK">Denmark</option>
                                                                            <option value="DJ">Djibouti</option>
                                                                            <option value="DM">Dominica</option>
                                                                            <option value="DO">Dominican Republic</option>
                                                                            <option value="EC">Ecuador</option>
                                                                            <option value="EG">Egypt</option>
                                                                            <option value="SV">El Salvador</option>
                                                                            <option value="GQ">Equatorial Guinea</option>
                                                                            <option value="ER">Eritrea</option>
                                                                            <option value="EE">Estonia</option>
                                                                            <option value="ET">Ethiopia</option>
                                                                            <option value="FK">Falkland Islands (Malvinas)</option>
                                                                            <option value="FJ">Fiji</option>
                                                                            <option value="FI">Finland</option>
                                                                            <option value="FR">France</option>
                                                                            <option value="PF">French Polynesia</option>
                                                                            <option value="GA">Gabon</option>
                                                                            <option value="GM">Gambia</option>
                                                                            <option value="GE">Georgia</option>
                                                                            <option value="DE">Germany</option>
                                                                            <option value="GH">Ghana</option>
                                                                            <option value="GI">Gibraltar</option>
                                                                            <option value="GR">Greece</option>
                                                                            <option value="GL">Greenland</option>
                                                                            <option value="GD">Grenada</option>
                                                                            <option value="GU">Guam</option>
                                                                            <option value="GT">Guatemala</option>
                                                                            <option value="GG">Guernsey</option>
                                                                            <option value="GN">Guinea</option>
                                                                            <option value="GW">Guinea-Bissau</option>
                                                                            <option value="HT">Haiti</option>
                                                                            <option value="VA">Holy See (Vatican City State)</option>
                                                                            <option value="HN">Honduras</option>
                                                                            <option value="HK">Hong Kong</option>
                                                                            <option value="HU">Hungary</option>
                                                                            <option value="IS">Iceland</option>
                                                                            <option value="IN">India</option>
                                                                            <option value="ID">Indonesia</option>
                                                                            <option value="IR">Iran, Islamic Republic of</option>
                                                                            <option value="IQ">Iraq</option>
                                                                            <option value="IE">Ireland</option>
                                                                            <option value="IM">Isle of Man</option>
                                                                            <option value="IL">Israel</option>
                                                                            <option value="IT">Italy</option>
                                                                            <option value="JM">Jamaica</option>
                                                                            <option value="JP">Japan</option>
                                                                            <option value="JE">Jersey</option>
                                                                            <option value="JO">Jordan</option>
                                                                            <option value="KZ">Kazakhstan</option>
                                                                            <option value="KE">Kenya</option>
                                                                            <option value="KI">Kiribati</option>
                                                                            <option value="KP">Korea, Democratic People's Republic of</option>
                                                                            <option value="KW">Kuwait</option>
                                                                            <option value="KG">Kyrgyzstan</option>
                                                                            <option value="LA">Lao People's Democratic Republic</option>
                                                                            <option value="LV">Latvia</option>
                                                                            <option value="LB">Lebanon</option>
                                                                            <option value="LS">Lesotho</option>
                                                                            <option value="LR">Liberia</option>
                                                                            <option value="LY">Libya</option>
                                                                            <option value="LI">Liechtenstein</option>
                                                                            <option value="LT">Lithuania</option>
                                                                            <option value="LU">Luxembourg</option>
                                                                            <option value="MO">Macao</option>
                                                                            <option value="MG">Madagascar</option>
                                                                            <option value="MW">Malawi</option>
                                                                            <option value="MY">Malaysia</option>
                                                                            <option value="MV">Maldives</option>
                                                                            <option value="ML">Mali</option>
                                                                            <option value="MT">Malta</option>
                                                                            <option value="MH">Marshall Islands</option>
                                                                            <option value="MQ">Martinique</option>
                                                                            <option value="MR">Mauritania</option>
                                                                            <option value="MU">Mauritius</option>
                                                                            <option value="MX">Mexico</option>
                                                                            <option value="FM">Micronesia, Federated States of</option>
                                                                            <option value="MD">Moldova, Republic of</option>
                                                                            <option value="MC">Monaco</option>
                                                                            <option value="MN">Mongolia</option>
                                                                            <option value="ME">Montenegro</option>
                                                                            <option value="MS">Montserrat</option>
                                                                            <option value="MA">Morocco</option>
                                                                            <option value="MZ">Mozambique</option>
                                                                            <option value="MM">Myanmar</option>
                                                                            <option value="NA">Namibia</option>
                                                                            <option value="NR">Nauru</option>
                                                                            <option value="NP">Nepal</option>
                                                                            <option value="NL">Netherlands</option>
                                                                            <option value="NZ">New Zealand</option>
                                                                            <option value="NI">Nicaragua</option>
                                                                            <option value="NE">Niger</option>
                                                                            <option value="NG">Nigeria</option>
                                                                            <option value="NU">Niue</option>
                                                                            <option value="NF">Norfolk Island</option>
                                                                            <option value="MP">Northern Mariana Islands</option>
                                                                            <option value="NO">Norway</option>
                                                                            <option value="OM">Oman</option>
                                                                            <option value="PK">Pakistan</option>
                                                                            <option value="PW">Palau</option>
                                                                            <option value="PS">Palestinian Territory, Occupied</option>
                                                                            <option value="PA">Panama</option>
                                                                            <option value="PG">Papua New Guinea</option>
                                                                            <option value="PY">Paraguay</option>
                                                                            <option value="PE">Peru</option>
                                                                            <option value="PH">Philippines</option>
                                                                            <option value="PL">Poland</option>
                                                                            <option value="PT">Portugal</option>
                                                                            <option value="PR">Puerto Rico</option>
                                                                            <option value="QA">Qatar</option>
                                                                            <option value="RO">Romania</option>
                                                                            <option value="RU">Russian Federation</option>
                                                                            <option value="RW">Rwanda</option>
                                                                            <option value="BL">Saint Barthélemy</option>
                                                                            <option value="KN">Saint Kitts and Nevis</option>
                                                                            <option value="LC">Saint Lucia</option>
                                                                            <option value="MF">Saint Martin (French part)</option>
                                                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                                                            <option value="WS">Samoa</option>
                                                                            <option value="SM">San Marino</option>
                                                                            <option value="ST">Sao Tome and Principe</option>
                                                                            <option value="SA">Saudi Arabia</option>
                                                                            <option value="SN">Senegal</option>
                                                                            <option value="RS">Serbia</option>
                                                                            <option value="SC">Seychelles</option>
                                                                            <option value="SL">Sierra Leone</option>
                                                                            <option value="SG">Singapore</option>
                                                                            <option value="SX">Sint Maarten (Dutch part)</option>
                                                                            <option value="SK">Slovakia</option>
                                                                            <option value="SI">Slovenia</option>
                                                                            <option value="SB">Solomon Islands</option>
                                                                            <option value="SO">Somalia</option>
                                                                            <option value="ZA">South Africa</option>
                                                                            <option value="KR">South Korea</option>
                                                                            <option value="SS">South Sudan</option>
                                                                            <option value="ES">Spain</option>
                                                                            <option value="LK">Sri Lanka</option>
                                                                            <option value="SD">Sudan</option>
                                                                            <option value="SR">Suriname</option>
                                                                            <option value="SZ">Swaziland</option>
                                                                            <option value="SE">Sweden</option>
                                                                            <option value="CH">Switzerland</option>
                                                                            <option value="SY">Syrian Arab Republic</option>
                                                                            <option value="TW">Taiwan, Province of China</option>
                                                                            <option value="TJ">Tajikistan</option>
                                                                            <option value="TZ">Tanzania, United Republic of</option>
                                                                            <option value="TH">Thailand</option>
                                                                            <option value="TG">Togo</option>
                                                                            <option value="TK">Tokelau</option>
                                                                            <option value="TO">Tonga</option>
                                                                            <option value="TT">Trinidad and Tobago</option>
                                                                            <option value="TN">Tunisia</option>
                                                                            <option value="TR">Turkey</option>
                                                                            <option value="TM">Turkmenistan</option>
                                                                            <option value="TC">Turks and Caicos Islands</option>
                                                                            <option value="TV">Tuvalu</option>
                                                                            <option value="UG">Uganda</option>
                                                                            <option value="UA">Ukraine</option>
                                                                            <option value="AE">United Arab Emirates</option>
                                                                            <option value="GB">United Kingdom</option>
                                                                            <option value="US">United States</option>
                                                                            <option value="UY">Uruguay</option>
                                                                            <option value="UZ">Uzbekistan</option>
                                                                            <option value="VU">Vanuatu</option>
                                                                            <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                                            <option value="VN">Vietnam</option>
                                                                            <option value="VI">Virgin Islands</option>
                                                                            <option value="YE">Yemen</option>
                                                                            <option value="ZM">Zambia</option>
                                                                            <option value="ZW">Zimbabwe</option>
                                                                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-16-j6pw" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid fw-bold" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-country-dv-container" aria-controls="select2-country-dv-container"><span class="select2-selection__rendered" id="select2-country-dv-container" role="textbox" aria-readonly="true" title="Select a Country..."><span class="select2-selection__placeholder">Select a Country...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-7" bis_skin_checked="1">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack" bis_skin_checked="1">
                                    <!--begin::Label-->
                                    <div class="me-5" bis_skin_checked="1">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold">Use as a billing adderess?</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <div class="fs-7 fw-semibold text-muted" bis_skin_checked="1">If you need more info, please check budget planning</div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Label-->

                                    <!--begin::Switch-->
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                        <!--begin::Input-->
                                        <input class="form-check-input" name="billing" type="checkbox" value="1" id="kt_modal_update_customer_billing" checked="checked">
                                        <!--end::Input-->

                                        <!--begin::Label-->
                                        <span class="form-check-label fw-semibold text-muted" for="kt_modal_update_customer_billing">
                                            Yes
                                        </span>
                                        <!--end::Label-->
                                    </label>
                                    <!--end::Switch-->
                                </div>
                                <!--begin::Wrapper-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Billing form-->
                    </div>
                    <!--end::Scroll-->
                </div>
                <!--end::Modal body-->

                <!--begin::Modal footer-->
                <div class="modal-footer flex-center" bis_skin_checked="1">
                    <!--begin::Button-->
                    <button type="reset" id="kt_modal_update_customer_cancel" class="btn btn-light me-3">
                        Discard
                    </button>
                    <!--end::Button-->

                    <!--begin::Button-->
                    <button type="submit" id="kt_modal_update_customer_submit" class="btn btn-primary">
                        <span class="indicator-label">
                            Submit
                        </span>
                        <span class="indicator-progress">
                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Modal footer-->
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>
<!--end::Modal - New Address--><!--begin::Modal - New Card-->
<div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true" bis_skin_checked="1">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px" bis_skin_checked="1">
        <!--begin::Modal content-->
        <div class="modal-content" bis_skin_checked="1">
            <!--begin::Modal header-->
            <div class="modal-header" bis_skin_checked="1">
                <!--begin::Modal title-->
                <h2>Add New Card</h2>
                <!--end::Modal title-->

                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal" bis_skin_checked="1">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7" bis_skin_checked="1">
                <!--begin::Form-->
                <form id="kt_modal_new_card_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                    <!--begin::Input group-->
<div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container" bis_skin_checked="1">
    <!--begin::Label-->
    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
        <span class="required">Name On Card</span>

        
<span class="ms-1" data-bs-toggle="tooltip" aria-label="Specify a card holder's name" data-bs-original-title="Specify a card holder's name" data-kt-initialized="1">
	<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>    </label>
    <!--end::Label-->

    <input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe">
<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
<!--end::Input group-->

<!--begin::Input group-->
<div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container" bis_skin_checked="1">
    <!--begin::Label-->
    <label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
    <!--end::Label-->
    
    <!--begin::Input wrapper-->
    <div class="position-relative" bis_skin_checked="1">
        <!--begin::Input-->
        <input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111">
        <!--end::Input-->

        <!--begin::Card logos-->
        <div class="position-absolute translate-middle-y top-50 end-0 me-5" bis_skin_checked="1">
            <img src="https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/card-logos/visa.svg" alt="" class="h-25px">
            <img src="https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px">
            <img src="https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px">
        </div>
        <!--end::Card logos-->
    </div>
    <!--end::Input wrapper-->
<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
<!--end::Input group-->

<!--begin::Input group-->
<div class="row mb-10" bis_skin_checked="1">
    <!--begin::Col-->
    <div class="col-md-8 fv-row" bis_skin_checked="1">
        <!--begin::Label-->
        <label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
        <!--end::Label-->

        <!--begin::Row-->
        <div class="row fv-row fv-plugins-icon-container" bis_skin_checked="1">
            <!--begin::Col-->
            <div class="col-6" bis_skin_checked="1">
                <select name="card_expiry_month" class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Month" data-select2-id="select2-data-18-qnnj" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                    <option data-select2-id="select2-data-20-906n"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-19-90aa" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-card_expiry_month-9z-container" aria-controls="select2-card_expiry_month-9z-container"><span class="select2-selection__rendered" id="select2-card_expiry_month-9z-container" role="textbox" aria-readonly="true" title="Month"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-6" bis_skin_checked="1">
                <select name="card_expiry_year" class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Year" data-select2-id="select2-data-21-frwi" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                    <option data-select2-id="select2-data-23-qwmd"></option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                            <option value="2028">2028</option>
                                            <option value="2029">2029</option>
                                            <option value="2030">2030</option>
                                            <option value="2031">2031</option>
                                            <option value="2032">2032</option>
                                            <option value="2033">2033</option>
                                            <option value="2034">2034</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-22-x3fj" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-card_expiry_year-rr-container" aria-controls="select2-card_expiry_year-rr-container"><span class="select2-selection__rendered" id="select2-card_expiry_year-rr-container" role="textbox" aria-readonly="true" title="Year"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-md-4 fv-row fv-plugins-icon-container" bis_skin_checked="1">
        <!--begin::Label-->
        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
            <span class="required">CVV</span>

            
<span class="ms-1" data-bs-toggle="tooltip" aria-label="Enter a card CVV code" data-bs-original-title="Enter a card CVV code" data-kt-initialized="1">
	<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>        </label>
        <!--end::Label-->

        <!--begin::Input wrapper-->
        <div class="position-relative" bis_skin_checked="1">
            <!--begin::Input-->
            <input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv">
            <!--end::Input-->

            <!--begin::CVV icon-->
            <div class="position-absolute translate-middle-y top-50 end-0 me-3" bis_skin_checked="1">
                <i class="ki-duotone ki-credit-cart fs-2hx"><span class="path1"></span><span class="path2"></span></i>            </div>
            <!--end::CVV icon-->
        </div>
        <!--end::Input wrapper-->
    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
    <!--end::Col-->
</div>
<!--end::Input group-->

<!--begin::Input group-->
<div class="d-flex flex-stack" bis_skin_checked="1">
    <!--begin::Label-->
    <div class="me-5" bis_skin_checked="1">
        <label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
        <div class="fs-7 fw-semibold text-muted" bis_skin_checked="1">If you need more info, please check budget planning</div>
    </div>
    <!--end::Label-->

    <!--begin::Switch-->
    <label class="form-check form-switch form-check-custom form-check-solid">
        <input class="form-check-input" type="checkbox" value="1" checked="checked">
        <span class="form-check-label fw-semibold text-muted">
            Save Card
        </span>
    </label>
    <!--end::Switch-->
</div>
<!--end::Input group-->


                    <!--begin::Actions-->
                    <div class="text-center pt-15" bis_skin_checked="1">
                        <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">
                            Discard
                        </button>

                        <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                            <span class="indicator-label">
                                Submit
                            </span>
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - New Card--><!--end::Modals-->        </div>
        <!--end::Content container-->
    </div>
@endsection