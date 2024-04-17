@extends('master1') {{-- Ensure this extends your main layout file --}}
@section('hideSidebar')
@endsection
@section('hideHeader')
@endsection
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card shadow">
            <div class="card-header text-white d-flex justify-content-between align-items-center">
                    <img src="{{ asset('logo/expertlogo.png') }}" alt="Logo" style="width: 100px;">
                    <h4 class="mb-0" style="color: white; font-size: 2rem;">{{ __('messages.complete_profile') }}</h4>
                    <div style="width: 100px;">{{-- This empty div ensures the title remains centered --}}</div>
                </div>
                <div class="card-body">
                    <form action="{{ route('profile.complete') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$customer->id}}">
                        <h5 class="mb-10" style="color: #0d6efd;"><i class="bi bi-geo-alt-fill me-2"></i>{{ __('messages.address_info') }}</h5>
                        <div class="row g-3 mb-10">
                            {{-- Address Line 1 & 2 --}}
                            <div class="col-md-6">
                                <label for="address_line1" class="form-label">{{ __('messages.address_line1') }}</label>
                                <input type="text" class="form-control" id="address_line1" name="address_line1">
                            </div>
                            <div class="col-md-6">
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
                            <div class="col-md-6">
                                <label for="company_size" class="form-label">{{ __('messages.company_size') }}</label>
                                <select class="form-select" id="company_size" name="company_size">
                                    <option value="1-5">1-5</option>
                                    <option value="6-10">6-10</option>
                                    {{-- Additional options --}}
                                </select>
                            </div>
                        </div>

                        <div class="mb-10 mt-4 mb-10">
                            <label for="template" class="form-label">{{ __('messages.upload_template') }}</label>
                            <input type="file" class="form-control" name="template[]" multiple>
                            <div class="form-text" style="font-size: 0.875rem;">{{ __('messages.multi_file_support') }}</div>
                        </div>

                        <div class="mb-10 form-check">
                            <input type="checkbox" class="form-check-input" id="terms_agreed" name="terms_agreed">
                            <label class="form-check-label" for="terms_agreed">{{ __('messages.terms_agreed') }}</label>
                        </div>

                        <button type="submit" class="btn btn-primary">{{ __('messages.submit') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
