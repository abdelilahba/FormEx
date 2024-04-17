<div class="modal fade " id="kt_modal_add_customer" tabindex="-1" style="display: none;" bis_skin_checked="1" aria-hidden="true"  >
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px" bis_skin_checked="1">
        <!--begin::Modal content-->
        <div class="modal-content" bis_skin_checked="1">
            <!--begin::Form-->
            <form class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#" id="kt_modal_add_customer_form" data-kt-redirect="/metronic8/demo1/apps/customers/list.html">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_add_customer_header" bis_skin_checked="1">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Add a Customer</h2>
                    <!--end::Modal title-->

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body py-10 px-lg-17" bis_skin_checked="1">
                    <!--begin::Scroll-->
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px" style="max-height: 182px;background-color: white;" bis_skin_checked="1">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7 fv-plugins-icon-container" bis_skin_checked="1">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-semibold mb-2">Name</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="" name="name" value="Sean Bean">
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="fv-row mb-7 fv-plugins-icon-container" bis_skin_checked="1">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold mb-2">
                                <span class="required">Email</span>

                                <span class="ms-1" data-bs-toggle="tooltip" aria-label="Email address must be active" data-bs-original-title="Email address must be active" data-kt-initialized="1">
                                    <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                                </span>
                            </label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="email" class="form-control form-control-solid" placeholder="" name="email" value="sean@dellito.com">
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
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

                        <!--begin::Billing toggle-->
                        <div class="fw-bold fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_add_customer_billing_info" role="button" aria-expanded="false" aria-controls="kt_customer_view_details" bis_skin_checked="1">
                            Shipping Information
                            <span class="ms-2 rotate-180">
                                <i class="ki-duotone ki-down fs-3"></i>                            </span>
                        </div>
                        <!--end::Billing toggle-->

                        <!--begin::Billing form-->
                        <div id="kt_modal_add_customer_billing_info" class="collapse show" bis_skin_checked="1">
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container" bis_skin_checked="1">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-semibold mb-2">Address Line 1</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="" name="address1" value="101, Collins Street">
                                <!--end::Input-->
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row" bis_skin_checked="1">
                                <!--begin::Label-->
                                <label class="fs-6 fw-semibold mb-2">Address Line 2</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="" name="address2" value="">
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container" bis_skin_checked="1">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-semibold mb-2">Town</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="" name="city" value="Melbourne">
                                <!--end::Input-->
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row g-9 mb-7" bis_skin_checked="1">
                                <!--begin::Col-->
                                <div class="col-md-6 fv-row fv-plugins-icon-container" bis_skin_checked="1">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-semibold mb-2">State / Province</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" placeholder="" name="state" value="Victoria">
                                    <!--end::Input-->
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-md-6 fv-row fv-plugins-icon-container" bis_skin_checked="1">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-semibold mb-2">Post Code</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" placeholder="" name="postcode" value="3000">
                                    <!--end::Input-->
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container" bis_skin_checked="1">
                                <!--begin::Label-->
                                <label class="fs-6 fw-semibold mb-2">
                                    <span class="required">Country</span>

                                    <span class="ms-1" data-bs-toggle="tooltip" aria-label="Country of origination" data-bs-original-title="Country of origination" data-kt-initialized="1">
                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                                    </span>
                                </label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <select class="form-select form-control" name="country" data-control="select2" id="kt_docs_select2_country">
               <option value="AF" data-kt-select2-country="assets/media/flags/morocco.svg">{{ __('messages.morroco') }}</option>
               <option value="AX" data-kt-select2-country="assets/media/flags/france.svg">{{ __('messages.french') }}</option>
            </select>
                                 
                                                                            <!--end::Input-->
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" bis_skin_checked="1"></div></div>
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
                                        <input class="form-check-input" name="billing" type="checkbox" value="1" id="kt_modal_add_customer_billing" checked="checked">
                                        <!--end::Input-->

                                        <!--begin::Label-->
                                        <span class="form-check-label fw-semibold text-muted" for="kt_modal_add_customer_billing">
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
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>

                    <!--end::Button-->

                    <!--begin::Button-->
                    <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
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