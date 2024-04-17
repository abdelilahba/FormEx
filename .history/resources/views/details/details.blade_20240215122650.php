@extends('master1') {{-- Ensure this extends your main layout file --}}
@section('hideSidebar')
@endsection
@section('hideHeader')
@endsection
@push('additional_styles')
    <link href="{{asset('assets/css/styleSelect.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
<link href="
https://cdn.jsdelivr.net/npm/bootstrap-select-country@4.2.0/dist/css/bootstrap-select-country.min.css" rel="stylesheet">

    <style>
    body {
    background: url("{{ asset('logo/logo.jpg') }}") no-repeat center center fixed !important;
    background-size: cover !important;
}
.form-section {
    background: url("{{ asset('logo/logo.jpg') }}") no-repeat center center fixed !important;
    background-size: cover !important;
}


    </style>
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card shadow">
            <div class="card-header text-white d-flex justify-content-between align-items-center">
                    <img src="{{ asset('logo/expertlogo.png') }}" alt="Logo" style="width: 153px;">
                    <h4 class="mb-0" style="font-size: 2rem;">{{ __('messages.complete_profile') }}</h4>
                    <div style="width: 100px;">{{-- This empty div ensures the title remains centered --}}</div>
                </div>
                <div class="card-body">
                <form class="form fv-plugins-bootstrap5 fv-plugins-framework" id="customerForm" method="POST" action="{{ route('profile.complete', ['locale' => app()->getLocale()]) }}" enctype="multipart/form-data">

                        @csrf
                        <input type="hidden" name="id" value="{{$customer->id}}">
                        <h5 class="mb-10" style="color: #0d6efd;"><i class="bi bi-geo-alt-fill me-2"></i>{{ __('messages.address_info') }}</h5>
                        <div class="row g-3 mb-10">
                            {{-- Address Line 1 & 2 --}}
                            <div class="col-md-6">
                                <label for="address_line1" class="form-label">{{ __('messages.address_line1') }}</label>
                                <input type="text" class="form-control" id="address_line1" name="address_line1">
                            </div>
                            <div class="col-md-6 mb-10">
                                <label for="address_line2" class="form-label">{{ __('messages.address_line2') }}</label>
                                <input type="text" class="form-control" id="address_line2" name="address_line2">
                            </div>
                            {{-- City & Postal Code --}}
                            <div class="col-md-4">
                                <label for="city" class="form-label">{{ __('messages.city') }}</label>
                                <input type="text" class="form-control" id="city" name="city">
                            </div>
                            <div class="col-md-4">
                                <label for="state" class="form-label">{{ __('messages.state') }}</label>
                                <input type="text" class="form-control" id="state" name="state">
                            </div>
                            <div class="col-md-4">
                                <label for="postal_code" class="form-label">{{ __('messages.postal_code') }}</label>
                                <input type="text" class="form-control" id="postal_code" name="postal_code">
                            </div>
                        </div>

                        <h5 class="mb-10 mt-4" style="color: #198754;"><i class="bi bi-building me-2"></i>{{ __('messages.company_info') }}</h5>
                        <div class="row g-3">
                            {{-- Job Title & Industry --}}
                            <div class="col-md-6">
                                <label for="job_title" class="form-label">{{ __('messages.job_title') }}</label>
                                <input type="text" class="form-control" id="job_title" name="job_title">
                            </div>
                            <div class="col-md-6">
                                <label for="industry" class="form-label">{{ __('messages.industry') }}</label>
                                <select class="form-select" id="industry" name="industry">
                                    <option value="topograph" selected>{{ __('messages.topograph') }}</option>
                                    {{-- Additional options --}}
                                </select>
                            </div>
                            {{-- Company Size --}}
                            <select class="form-select mt-10 mb-10" data-control="select2"  data-placeholder="{{ __('messages.company_size') }}">
    <option></option>
    <option value="1">1-25</option>
    <option value="2">26-99</option>
    <option value="2">100-999</option>
    <option value="2">+1000</option>
</select>
                        </div>

                        <div class="mb-10 mt-4 mb-10">
                            <label for="template" class="form-label">{{ __('messages.upload_template') }}</label>
                            <input type="file" class="form-control" name="templates[]" multiple>
                            <div class="form-text" style="font-size: 0.875rem;">{{ __('messages.multi_file_support') }}</div>
                        </div>

                        <div class="mb-10 form-check">
                            <input type="checkbox" class="form-check-input" id="terms_agreed" name="terms_agreed">
                            <label class="form-check-label" for="terms_agreed">{{ __('messages.terms_agreed') }}</label>
                        </div>

                        <button type="submit" class="btn btn-primary" style="text-align: center;">{{ __('messages.submit') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    window.addEventListener('DOMContentLoaded', (event) => {
        var successMessage = "{{ session('success') }}";
        var errorMessage = "{{ session('error') }}";

        if (successMessage) {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: successMessage,
            });
        } else if (errorMessage) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: errorMessage,
            });
        }
    });
</script>



@endpush
