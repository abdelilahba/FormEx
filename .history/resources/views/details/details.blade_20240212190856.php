@extends('master1') {{-- Ensure this extends your main layout file --}}
@section('hideSidebar')


@endsection
@section('hideHeader')
@endsection
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card shadow">
                <div class="card-header">
                    <h4>{{ __('messages.complete_profile') }}/h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('profile.complete') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$customer->id}}">
                        {{-- Address Line 1 --}}
                        <div class="mb-3">
                            <label for="address_line1" class="form-label">{{ __('messages.address_line1') }}</label>
                            <input type="text" class="form-control" id="address_line1" name="address_line1">
                        </div>
                        
                        {{-- Address Line 2 --}}
                        <div class="mb-3">
                            <label for="address_line2" class="form-label">{{ __('messages.address_line2') }}</label>
                            <input type="text" class="form-control" id="address_line2" name="address_line2">
                        </div>
                        
                        {{-- City --}}
                        <div class="mb-3">
                            <label for="city" class="form-label">{{ __('messages.city') }}</label>
                            <input type="text" class="form-control" id="city" name="city">
                        </div>
                        
                        {{-- State --}}
                        <div class="mb-3">
                            <label for="state" class="form-label">{{ __('messages.state') }}</label>
                            <input type="text" class="form-control" id="state" name="state">
                        </div>
                        
                        {{-- Postal Code --}}
                        <div class="mb-3">
                            <label for="postal_code" class="form-label">{{ __('messages.postal_code') }}</label>
                            <input type="text" class="form-control" id="postal_code" name="postal_code">
                        </div>
                        
                        {{-- Country --}}
                        <div class="mb-3">
                            <label for="country" class="form-label">{{ __('messages.country') }}</label>
                            <select class="form-select" id="country" name="country">
                                {{-- Populate with countries --}}
                                <option value="Country1">Country 1</option>
                                <option value="Country2">Country 2</option>
                            </select>
                        </div>
                        
                        {{-- Job Title --}}
                        <div class="mb-3">
                            <label for="job_title" class="form-label">{{ __('messages.job_title') }}</label>
                            <input type="text" class="form-control" id="job_title" name="job_title">
                        </div>
                        
                        {{-- Industry --}}
                        <div class="mb-3">
                            <label for="industry" class="form-label">{{ __('messages.industry') }}</label>
                            <input type="text" class="form-control" id="industry" name="industry">
                        </div>
                        
                        {{-- Company Size --}}
                        <div class="mb-3">
                            <label for="company_size" class="form-label">{{ __('messages.company_size') }}</label>
                            <input type="number" class="form-control" id="company_size" name="company_size">
                        </div>
                
                        
                        {{-- Terms Agreed Checkbox --}}
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="terms_agreed" name="terms_agreed">
                            <label class="form-check-label" for="terms_agreed">{{ __('messages.terms_agreed') }}</label>
                        </div>
                        <div class="mb-3">
        <label for="template" class="form-label">{{ __('messages.upload_template') }}</label>
        <input type="file"  name="template">
    </div>
                        <button type="submit" class="btn btn-primary"> {{ __('messages.submit') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
