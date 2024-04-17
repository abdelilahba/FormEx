@extends('master1')

@section('title', __('messages.khabirak'))

@section('hideSidebar')


@endsection
@section('hideHeader')
@endsection
@push('additional_styles')
<style>
    body {
        background: url("{{ asset('logo/logo.jpg') }}") no-repeat center center fixed !important;
        background-size: cover !important;
    }
</style>
@endpush
@section('content')
<div id="kt_app_content" class="app-content  flex-column-fluid " bis_skin_checked="1">


    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container  container-xxl " bis_skin_checked="1">
        <!--begin::Layout-->
        <div class="d-flex flex-column flex-lg-row" bis_skin_checked="1">
            <!--begin::Content-->
            <div class="flex-lg-row-fluid me-lg-15 order-2 order-lg-1 mb-10 mb-lg-0" bis_skin_checked="1">
                <!--begin::Form-->
                <form class="form" action="#" id="kt_subscriptions_create_new">
                    <!--begin::Customer-->
                    <div class="card card-flush pt-3 mb-5 mb-lg-10" bis_skin_checked="1">
                        <div class="text-center fw-bold" style="font-size: 1.2rem;">
                            Commande <span style="color: red;"> #201547 </span>
                        </div>
                        <!--begin::Card header-->

                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-0 text-center mt-5" bis_skin_checked="1">
                            <!--begin::Description-->
                            <!-- Placeholder for any other content you want to be centered -->
                            <!--end::Description-->

                            <!--begin::Selected customer-->
                            <div class="d-flex justify-content-center align-items-center p-3 mb-2" bis_skin_checked="1">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-60px symbol-circle me-3" bis_skin_checked="1">
                                    <img alt="Pic" src="{{ asset('logo/profile.png') }}">
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Info-->
                                <div class="d-flex flex-column" bis_skin_checked="1">
                                    <!--begin::Name-->
                                    <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-2">Sean Bean</a>
                                    <!--end::Name-->

                                    <!--begin::Email-->
                                    <a href="#" class="fw-semibold text-gray-600 text-hover-primary">sean@dellito.com</a>
                                    <!--end::Email-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Selected customer-->

                            <!--begin::Customer add buttons-->
                            <!-- Placeholder for any buttons you want to be centered -->
                            <!--end::Customer add buttons-->

                            <!--begin::Customer change button-->
                            <!-- Placeholder for a change button if needed -->
                            <!--end::Customer change button-->

                            <!--begin::Notice-->
                            <!-- Placeholder for any notices or additional content -->
                            <!--end::Notice-->
                        </div>
                        <!--end::Card body-->
                    </div>

                    <!--end::Customer-->
                    <!--begin::Pricing-->
                    <div class="card card-flush pt-3 mb-5 mb-lg-10" bis_skin_checked="1">
                        <!--begin::Card header-->
                        <div class="card-header" bis_skin_checked="1">
                            <!--begin::Card title-->
                            <div class="card-title" bis_skin_checked="1">
                                <h2 class="fw-bold">Products</h2>
                            </div>
                            <!--begin::Card title-->

                            <!--begin::Card toolbar-->
                            <div class="card-toolbar" bis_skin_checked="1">
                                <button type="button" class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_product">Add Product</button>
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-0" bis_skin_checked="1">
                            <!--begin::Table wrapper-->
                            <div class="table-responsive" bis_skin_checked="1">
                                <!--begin::Table-->
                                <div id="kt_subscription_products_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer" bis_skin_checked="1">
                                    <div class="table-responsive" bis_skin_checked="1">
                                        <table class="table align-middle table-row-dashed fs-6 fw-semibold gy-4 dataTable no-footer" id="kt_subscription_products_table">
                                            <thead>
                                                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                    <th class="min-w-300px sorting_disabled" rowspan="1" colspan="1" style="width: 378.625px;">Product</th>
                                                    <th class="min-w-100px sorting_disabled" rowspan="1" colspan="1" style="width: 130.328px;">Qty</th>
                                                    <th class="min-w-150px sorting_disabled" rowspan="1" colspan="1" style="width: 193.016px;">Total</th>
                                                    <th class="min-w-70px text-end sorting_disabled" rowspan="1" colspan="1" style="width: 90.2812px;">Remove</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-gray-600">



                                                <tr class="odd">
                                                    <td>Beginner Plan</td>
                                                    <td>1</td>
                                                    <td>149.99 / Month</td>
                                                    <td class="text-end">
                                                        <!--begin::Delete-->
                                                        <a href="#" class="btn btn-icon btn-flex btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" data-kt-action="product_remove" aria-label="Delete" data-bs-original-title="Delete" data-kt-initialized="1">
                                                            <i class="fas fa-trash fs-3 " style="color: red;"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> </a>
                                                        <!--end::Delete-->
                                                    </td>
                                                </tr>
                                                <tr class="even">
                                                    <td>Pro Plan</td>
                                                    <td>1</td>
                                                    <td>499.99 / Month</td>
                                                    <td class="text-end">
                                                        <!--begin::Delete-->
                                                        <a href="#" class="btn btn-icon btn-flex btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" data-kt-action="product_remove" aria-label="Delete" data-bs-original-title="Delete" data-kt-initialized="1">
                                                            <i class="fas fa-trash fs-3" style="color: red;"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> </a>
                                                        <!--end::Delete-->
                                                    </td>
                                                </tr>
                                                <tr class="odd">
                                                    <td>Team Plan</td>
                                                    <td>1</td>
                                                    <td>999.99 / Month</td>
                                                    <td class="text-end">
                                                        <!--begin::Delete-->
                                                        <a href="#" class="btn btn-icon btn-flex btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" data-kt-action="product_remove" aria-label="Delete" data-bs-original-title="Delete" data-kt-initialized="1">
                                                            <i class="fas fa-trash fs-3" style="color: red;"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> </a>
                                                        <!--end::Delete-->
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row" bis_skin_checked="1">
                                        <div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start" bis_skin_checked="1"></div>
                                        <div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end" bis_skin_checked="1"></div>
                                    </div>
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end::Table wrapper-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Pricing-->



                    <!--begin::Payment method-->
                    <div class="card card-flush pt-3 mb-5 mb-lg-10" data-kt-subscriptions-form="pricing" bis_skin_checked="1">
                        <!--begin::Card header-->
                        <div class="card-header" bis_skin_checked="1">
                            <!--begin::Card title-->
                            <div class="card-title" bis_skin_checked="1">
                                <h2 class="fw-bold">Methodes de Paiments</h2>
                            </div>
                            <!--begin::Card title-->

                            <!--begin::Card toolbar-->

                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-0" bis_skin_checked="1">
                            <!--begin::Options-->
                            <div id="kt_create_new_payment_method" bis_skin_checked="1">
                                <!--begin::Option-->
                                <div class="py-1" bis_skin_checked="1">
                                    <!--begin::Header-->
                                    <div class="py-3 d-flex flex-stack flex-wrap" bis_skin_checked="1">
                                        <!--begin::Toggle-->
                                        <div class="d-flex align-items-center collapsible toggle " data-bs-toggle="collapse" data-bs-target="#kt_create_new_payment_method_1" bis_skin_checked="1">
                                            <!--begin::Arrow-->
                                            <div class="btn btn-sm btn-icon btn-active-color-primary ms-n3 me-2" bis_skin_checked="1">
                                                <i class="fas fa-minus-square toggle-on text-secondary fs-2"><span class="path1"></span><span class="path2"></span></i>
                                                <i class="fas fa-plus-square toggle-off fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                            </div>
                                            <!--end::Arrow-->

                                            <!--begin::Logo-->
                                            <img src="{{asset('logo/bank.jpg')}}" class="w-100px me-3" alt="">
                                            <!--end::Logo-->

                                            <!--begin::Summary-->
                                            <div class="me-3" bis_skin_checked="1">
                                                <div class="d-flex align-items-center fw-bold" bis_skin_checked="1">Bank Deposit/Transfer <div class="badge badge-light-primary ms-5" bis_skin_checked="1">Primary</div>
                                                </div>
                                            </div>
                                            <!--end::Summary-->
                                        </div>
                                        <!--end::Toggle-->

                                        <!--begin::Input-->
                                        <div class="d-flex my-3 ms-9" bis_skin_checked="1">
                                            <!--begin::Radio-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="radio" name="payment_method" checked="checked">
                                            </label>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Header-->

                                    <!--begin::Body-->
                                    <div id="kt_create_new_payment_method_1" class="collapse  fs-6 ps-10" bis_skin_checked="1">
                                        <!--begin::Details-->
                                        <div class="d-flex flex-wrap py-5" bis_skin_checked="1">
                                            <p style="font-size: 1.2rem;" class="mb-5">
                                            card_numero      {{ __('messages.card_numero') }}                                        </p>
                                            <!--begin::Col-->
                                            <div class="flex-equal me-5" bis_skin_checked="1">
                                                <table class="table table-bordered table-hover align-middle table-row-dashed fs-6 gy-5">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">{{ __('messages.bank') }}</td>
                                                            <td class="text-gray-800">BMCE GROUP </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">{{ __('messages.beneficiary') }}</td>
                                                            <td class="text-gray-800">Yafa Technologies</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">{{ __('messages.rib') }}</td>
                                                            <td class="text-gray-800">022 780 00016897458451 25</td>
                                                        </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->

                                            <!--end::Col-->
                                        </div>
                                        <div>
                                            <button class="btn btn-secondary mb-5">
                                                <img src="{{asset('logo/bmce.svg')}}" style="height: 30px;" alt="">
                                                {{ __('messages.pay_now') }}
                                            </button>
                                        </div>
                                        <p>
                                            {{ __('messages.note_order_number') }}
                                        </p>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Option-->
                                <div class="separator separator-dashed" bis_skin_checked="1"></div>


                                <div class="py-1" bis_skin_checked="1">
                                    <!--begin::Header-->
                                    <div class="py-3 d-flex flex-stack flex-wrap" bis_skin_checked="1">
                                        <!--begin::Toggle-->
                                        <div class="d-flex align-items-center collapsible toggle collapsed" data-bs-toggle="collapse" data-bs-target="#kt_create_new_payment_method_2" bis_skin_checked="1" aria-expanded="false">
                                            <!--begin::Arrow-->
                                            <div class="btn btn-sm btn-icon btn-active-color-primary ms-n3 me-2" bis_skin_checked="1">
                                                <i class="fas fa-minus-square toggle-on text-primary fs-2"><span class="path1"></span><span class="path2"></span></i>
                                                <i class="fas fa-plus-square toggle-off fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                            </div>
                                            <!--end::Arrow-->

                                            <!--begin::Logo-->
                                            <img src="{{asset('logo/carte.png')}}" class="w-40px me-3" alt="">
                                            <!--end::Logo-->

                                            <!--begin::Summary-->
                                            <div class="me-3" bis_skin_checked="1">
                                                <div class="d-flex align-items-center fw-bold" bis_skin_checked="1">Paiment par carte bancaire </div>
                                            </div>
                                            <!--end::Summary-->
                                        </div>
                                        <!--end::Toggle-->

                                        <!--begin::Input-->
                                        <div class="d-flex my-3 ms-9" bis_skin_checked="1">
                                            <!--begin::Radio-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="radio" name="payment_method">
                                            </label>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Header-->

                                    <!--begin::Body-->
                                    <div id="kt_create_new_payment_method_2" class="fs-6 ps-10 collapse" bis_skin_checked="1">
                                        <!--begin::Details-->
                                        <div class="d-flex flex-wrap py-5" bis_skin_checked="1">
                                            <!--begin::Col-->
                                            <div class=" me-5" bis_skin_checked="1">
                                                <p style="font-size: 1.2rem;" class="mb-5">
                                                    {{ __('messages.cmi_system') }}
                                            </div>
                                            <hr>
                                            <div>

                                            {{ __('messages.pay_using_service') }}
                                            </div>


                                            <!--end::Col-->
                                            <!--begin::Col-->

                                            <!--end::Col-->
                                        </div>
                                        <div>
                                            <button class="btn btn-secondary mb-5">
                                                <img src="{{asset('logo/cmi.svg')}}" style="height: 30px;" alt="">
                                                {{ __('messages.pay_now') }}
                                            </button>
                                        </div>
                                        <p>
                                        {{ __('messages.note_order_number') }}
                                        </p>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Option-->

                            </div>
                            <!--end::Options-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Payment method-->

                    <!--begin::Card-->

                    <!--end::Card-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content-->

            <!--begin::Sidebar-->

            <!--end::Sidebar-->
        </div>
        <!--end::Layout-->

        <!--begin::Modals-->
        <!--begin::Modal - Users Search-->
        <div class="modal fade" id="kt_modal_customer_search" tabindex="-1" aria-hidden="true" bis_skin_checked="1">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px" bis_skin_checked="1">
                <!--begin::Modal content-->
                <div class="modal-content" bis_skin_checked="1">
                    <!--begin::Modal header-->
                    <div class="modal-header pb-0 border-0 justify-content-end" bis_skin_checked="1">
                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" bis_skin_checked="1">
                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--begin::Modal header-->

                    <!--begin::Modal body-->
                    <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15" bis_skin_checked="1">
                        <!--begin::Content-->
                        <div class="text-center mb-12" bis_skin_checked="1">
                            <h1 class="fw-bold mb-3">Search Customers</h1>
                            <div class="text-gray-500 fw-semibold fs-5" bis_skin_checked="1">
                                Add a customer to a subscription
                            </div>
                        </div>
                        <!--end::Content-->

                        <!--begin::Search-->
                        <div id="kt_modal_customer_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline" data-kt-search="true" bis_skin_checked="1">

                            <!--begin::Form-->
                            <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                                <!--begin::Hidden input(Added to disable form autocomplete)-->
                                <input type="hidden">
                                <!--end::Hidden input-->

                                <!--begin::Icon-->
                                <i class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"><span class="path1"></span><span class="path2"></span></i> <!--end::Icon-->

                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input">
                                <!--end::Input-->

                                <!--begin::Spinner-->
                                <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                                    <span class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
                                </span>
                                <!--end::Spinner-->

                                <!--begin::Reset-->
                                <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
                                    <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0"><span class="path1"></span><span class="path2"></span></i> </span>
                                <!--end::Reset-->
                            </form>
                            <!--end::Form-->

                            <!--begin::Wrapper-->
                            <div class="py-5" bis_skin_checked="1">
                                <!--begin::Suggestions-->
                                <div data-kt-search-element="suggestions" bis_skin_checked="1">
                                    <!--begin::Illustration-->
                                    <div class="text-center px-4 pt-10" bis_skin_checked="1">
                                        <img src="/metronic8/demo1/assets/media/illustrations/sketchy-1/4.png" alt="" class="mw-100 mh-200px">
                                    </div>
                                    <!--end::Illustration-->
                                </div>
                                <!--end::Suggestions-->

                                <!--begin::Results-->
                                <div data-kt-search-element="results" class="d-none" bis_skin_checked="1">
                                    <!--begin::Users-->
                                    <div class="mh-300px scroll-y me-n5 pe-5" bis_skin_checked="1">
                                        <!--begin::User-->
                                        <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer" bis_skin_checked="1">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle me-5" bis_skin_checked="1">
                                                <img alt="Pic" src="/metronic8/demo1/assets/media/avatars/300-6.jpg">
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold" bis_skin_checked="1">
                                                <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                                                <span class="badge badge-light">Art Director</span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer" bis_skin_checked="1">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle me-5" bis_skin_checked="1">
                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                    M </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold" bis_skin_checked="1">
                                                <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                                                <span class="badge badge-light">Marketing Analytic</span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer" bis_skin_checked="1">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle me-5" bis_skin_checked="1">
                                                <img alt="Pic" src="/metronic8/demo1/assets/media/avatars/300-1.jpg">
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold" bis_skin_checked="1">
                                                <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                                                <span class="badge badge-light">Software Enginer</span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer" bis_skin_checked="1">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle me-5" bis_skin_checked="1">
                                                <img alt="Pic" src="/metronic8/demo1/assets/media/avatars/300-5.jpg">
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold" bis_skin_checked="1">
                                                <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                                                <span class="badge badge-light">Web Developer</span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer" bis_skin_checked="1">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle me-5" bis_skin_checked="1">
                                                <img alt="Pic" src="/metronic8/demo1/assets/media/avatars/300-25.jpg">
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold" bis_skin_checked="1">
                                                <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                                                <span class="badge badge-light">UI/UX Designer</span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer" bis_skin_checked="1">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle me-5" bis_skin_checked="1">
                                                <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                                    C </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold" bis_skin_checked="1">
                                                <span class="fs-6 text-gray-800 me-2">Mikaela Collins</span>
                                                <span class="badge badge-light">Head Of Marketing</span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer" bis_skin_checked="1">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle me-5" bis_skin_checked="1">
                                                <img alt="Pic" src="/metronic8/demo1/assets/media/avatars/300-9.jpg">
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold" bis_skin_checked="1">
                                                <span class="fs-6 text-gray-800 me-2">Francis Mitcham</span>
                                                <span class="badge badge-light">Software Arcitect</span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer" bis_skin_checked="1">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle me-5" bis_skin_checked="1">
                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                    O </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold" bis_skin_checked="1">
                                                <span class="fs-6 text-gray-800 me-2">Olivia Wild</span>
                                                <span class="badge badge-light">System Admin</span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer" bis_skin_checked="1">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle me-5" bis_skin_checked="1">
                                                <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                                    N </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold" bis_skin_checked="1">
                                                <span class="fs-6 text-gray-800 me-2">Neil Owen</span>
                                                <span class="badge badge-light">Account Manager</span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer" bis_skin_checked="1">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle me-5" bis_skin_checked="1">
                                                <img alt="Pic" src="/metronic8/demo1/assets/media/avatars/300-23.jpg">
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold" bis_skin_checked="1">
                                                <span class="fs-6 text-gray-800 me-2">Dan Wilson</span>
                                                <span class="badge badge-light">Web Desinger</span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Users-->
                                </div>
                                <!--end::Results-->
                                <!--begin::Empty-->
                                <div data-kt-search-element="empty" class="text-center d-none" bis_skin_checked="1">
                                    <!--begin::Message-->
                                    <div class="fw-semibold py-0 mb-10" bis_skin_checked="1">
                                        <div class="text-gray-600 fs-3 mb-2" bis_skin_checked="1">No users found</div>

                                        <div class="text-gray-500 fs-6" bis_skin_checked="1">Try to search by username, full name or email...</div>
                                    </div>
                                    <!--end::Message-->

                                    <!--begin::Illustration-->
                                    <div class="text-center px-4" bis_skin_checked="1">
                                        <img src="/metronic8/demo1/assets/media/illustrations/sketchy-1/9.png" alt="user" class="mw-100 mh-200px">
                                    </div>
                                    <!--end::Illustration-->
                                </div>
                                <!--end::Empty-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - Users Search-->
        <!--begin::Modal - New Product-->
        <div class="modal fade" id="kt_modal_add_product" tabindex="-1" aria-hidden="true" bis_skin_checked="1">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px" bis_skin_checked="1">
                <!--begin::Modal content-->
                <div class="modal-content" bis_skin_checked="1">
                    <!--begin::Form-->
                    <form class="form" action="#" id="kt_modal_add_product_form">
                        <!--begin::Modal header-->
                        <div class="modal-header" bis_skin_checked="1">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Add a Product</h2>
                            <!--end::Modal title-->

                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" bis_skin_checked="1">
                                <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->

                        <!--begin::Modal body-->
                        <div class="modal-body py-10 px-lg-17" bis_skin_checked="1">
                            <!--begin::Label-->
                            <h3 class="mb-7">
                                <span class="fw-bold required">Select Subscription</span>

                                <span class="ms-1" data-bs-toggle="tooltip" aria-label="Please select a subscription" data-bs-original-title="Please select a subscription" data-kt-initialized="1">
                                    <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                            </h3>
                            <!--end::Label-->

                            <!--begin::Scroll-->
                            <div class="scroll-y mh-300px me-n7 pe-7" bis_skin_checked="1">
                                <!--begin::Product-->
                                <div class="fv-row" bis_skin_checked="1">
                                    <!--begin::Subscription-->
                                    <label class="d-flex align-items-center mb-5">
                                        <!--begin::Radio-->
                                        <span class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" name="product" checked="checked" data-kt-product-name="Basic" data-kt-product-price="15.99" data-kt-product-frequency="Month">
                                        </span>
                                        <!--end::Radio-->

                                        <!--begin::Description-->
                                        <span class="d-flex flex-column me-3">
                                            <span class="fw-bold">Basic</span>
                                            <span class="text-gray-500 fw-semibold fs-6">Basic subscription</span>
                                        </span>
                                        <!--end::Description-->

                                        <!--begin::Pricing-->
                                        <span class="fw-bold ms-auto">
                                            $15.99 /<span class="text-gray-500 fs-6 fw-semibold">Month</span>
                                        </span>
                                        <!--end::Pricing-->
                                    </label>
                                    <!--end::Subscription-->
                                    <!--begin::Subscription-->
                                    <label class="d-flex align-items-center mb-5">
                                        <!--begin::Radio-->
                                        <span class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" name="product" data-kt-product-name="Basic Bundle" data-kt-product-price="149.99" data-kt-product-frequency="Year">
                                        </span>
                                        <!--end::Radio-->

                                        <!--begin::Description-->
                                        <span class="d-flex flex-column me-3">
                                            <span class="fw-bold">Basic Bundle</span>
                                            <span class="text-gray-500 fw-semibold fs-6">Basic yearly bundle</span>
                                        </span>
                                        <!--end::Description-->

                                        <!--begin::Pricing-->
                                        <span class="fw-bold ms-auto">
                                            $149.99 /<span class="text-gray-500 fs-6 fw-semibold">Year</span>
                                        </span>
                                        <!--end::Pricing-->
                                    </label>
                                    <!--end::Subscription-->
                                    <!--begin::Subscription-->
                                    <label class="d-flex align-items-center mb-5">
                                        <!--begin::Radio-->
                                        <span class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" name="product" data-kt-product-name="Teams" data-kt-product-price="20.99" data-kt-product-frequency="Month">
                                        </span>
                                        <!--end::Radio-->

                                        <!--begin::Description-->
                                        <span class="d-flex flex-column me-3">
                                            <span class="fw-bold">Teams</span>
                                            <span class="text-gray-500 fw-semibold fs-6">Teams subscription</span>
                                        </span>
                                        <!--end::Description-->

                                        <!--begin::Pricing-->
                                        <span class="fw-bold ms-auto">
                                            $20.99 /<span class="text-gray-500 fs-6 fw-semibold">Month</span>
                                        </span>
                                        <!--end::Pricing-->
                                    </label>
                                    <!--end::Subscription-->
                                    <!--begin::Subscription-->
                                    <label class="d-flex align-items-center mb-5">
                                        <!--begin::Radio-->
                                        <span class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" name="product" data-kt-product-name="Teams Bundle" data-kt-product-price="199.99" data-kt-product-frequency="Year">
                                        </span>
                                        <!--end::Radio-->

                                        <!--begin::Description-->
                                        <span class="d-flex flex-column me-3">
                                            <span class="fw-bold">Teams Bundle</span>
                                            <span class="text-gray-500 fw-semibold fs-6">Teams yearly bundle</span>
                                        </span>
                                        <!--end::Description-->

                                        <!--begin::Pricing-->
                                        <span class="fw-bold ms-auto">
                                            $199.99 /<span class="text-gray-500 fs-6 fw-semibold">Year</span>
                                        </span>
                                        <!--end::Pricing-->
                                    </label>
                                    <!--end::Subscription-->
                                    <!--begin::Subscription-->
                                    <label class="d-flex align-items-center mb-5">
                                        <!--begin::Radio-->
                                        <span class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" name="product" data-kt-product-name="Corporate" data-kt-product-price="224.99" data-kt-product-frequency="Month">
                                        </span>
                                        <!--end::Radio-->

                                        <!--begin::Description-->
                                        <span class="d-flex flex-column me-3">
                                            <span class="fw-bold">Corporate</span>
                                            <span class="text-gray-500 fw-semibold fs-6">Corporate subscription</span>
                                        </span>
                                        <!--end::Description-->

                                        <!--begin::Pricing-->
                                        <span class="fw-bold ms-auto">
                                            $224.99 /<span class="text-gray-500 fs-6 fw-semibold">Month</span>
                                        </span>
                                        <!--end::Pricing-->
                                    </label>
                                    <!--end::Subscription-->
                                    <!--begin::Subscription-->
                                    <label class="d-flex align-items-center mb-5">
                                        <!--begin::Radio-->
                                        <span class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" name="product" data-kt-product-name="Corporate Bundle" data-kt-product-price="1249.99" data-kt-product-frequency="Year">
                                        </span>
                                        <!--end::Radio-->

                                        <!--begin::Description-->
                                        <span class="d-flex flex-column me-3">
                                            <span class="fw-bold">Corporate Bundle</span>
                                            <span class="text-gray-500 fw-semibold fs-6">Corporate yearly bundle</span>
                                        </span>
                                        <!--end::Description-->

                                        <!--begin::Pricing-->
                                        <span class="fw-bold ms-auto">
                                            $1249.99 /<span class="text-gray-500 fs-6 fw-semibold">Year</span>
                                        </span>
                                        <!--end::Pricing-->
                                    </label>
                                    <!--end::Subscription-->
                                    <!--begin::Subscription-->
                                    <label class="d-flex align-items-center mb-5">
                                        <!--begin::Radio-->
                                        <span class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" name="product" data-kt-product-name="Enterprise" data-kt-product-price="224.99" data-kt-product-frequency="Month">
                                        </span>
                                        <!--end::Radio-->

                                        <!--begin::Description-->
                                        <span class="d-flex flex-column me-3">
                                            <span class="fw-bold">Enterprise</span>
                                            <span class="text-gray-500 fw-semibold fs-6">Enterprise subscription</span>
                                        </span>
                                        <!--end::Description-->

                                        <!--begin::Pricing-->
                                        <span class="fw-bold ms-auto">
                                            $224.99 /<span class="text-gray-500 fs-6 fw-semibold">Month</span>
                                        </span>
                                        <!--end::Pricing-->
                                    </label>
                                    <!--end::Subscription-->
                                    <!--begin::Subscription-->
                                    <label class="d-flex align-items-center mb-5">
                                        <!--begin::Radio-->
                                        <span class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" name="product" data-kt-product-name="Enterprise Bundle" data-kt-product-price="2249.99" data-kt-product-frequency="Year">
                                        </span>
                                        <!--end::Radio-->

                                        <!--begin::Description-->
                                        <span class="d-flex flex-column me-3">
                                            <span class="fw-bold">Enterprise Bundle</span>
                                            <span class="text-gray-500 fw-semibold fs-6">Enterprise yearly bundle</span>
                                        </span>
                                        <!--end::Description-->

                                        <!--begin::Pricing-->
                                        <span class="fw-bold ms-auto">
                                            $2249.99 /<span class="text-gray-500 fs-6 fw-semibold">Year</span>
                                        </span>
                                        <!--end::Pricing-->
                                    </label>
                                    <!--end::Subscription-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Scroll-->
                        </div>
                        <!--end::Modal body-->

                        <!--begin::Modal footer-->
                        <div class="modal-footer flex-center" bis_skin_checked="1">
                            <!--begin::Button-->
                            <button type="reset" id="kt_modal_add_product_cancel" class="btn btn-light me-3">
                                Discard
                            </button>
                            <!--end::Button-->

                            <!--begin::Button-->
                            <button type="button" id="kt_modal_add_product_submit" class="btn btn-primary">
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
        <!--end::Modal - New Product--><!--begin::Modal - New Card-->

        <!--end::Modal - New Card--><!--end::Modals-->
    </div>
    <!--end::Content container-->
</div>
@endsection