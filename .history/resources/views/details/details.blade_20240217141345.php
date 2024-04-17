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

    .payment-methods {
        max-width: 30% !important;
        margin: 0 auto;
        padding: 20px;
        text-align: center;
        /* Adjust based on your design needs */
    }

    #customerForm button[type="submit"] {
        display: block;
        margin: 0 auto;
        max-width: 30%;
        /* Centers the button in the form */
    }

    .card-header {
        display: flex;
        align-items: center !important;
        justify-content: center !important;
        height: 100px;
        /* or whatever height you want */
        text-align: center !important;
    }

    .pricing-card-title {
        margin: 0;
        font-size: 2.5rem;
        font-weight: 500;
        color: #343a40;
    }

    .list-unstyled {
        padding: 0;
        list-style: none;
    }

    .card-body ul li {
        padding: .75rem 0;
        color: #6c757d;
    }

    .btn {
        font-size: 1rem;
        font-weight: 400;
        border: none;
        border-radius: .375rem;
        letter-spacing: .1rem;
        transition: all .2s;
    }

    .btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, .2);
    }

    .panel {
        max-width: 900px;
        /* or your preferred width */
        margin: auto;
        /* this will center your panel */
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        /* Optional: Adds a shadow around the panel */
        border-radius: 8px;
        /* Optional: Rounds corners of the panel */
    }


    .footer {

        /* Adjust the color to match the exact blue from the image */
        color: white;
        padding: 20px 0;

        /* Replace with your pattern image URL */
        background-size: cover;
        position: relative;
    }

    .footer-logo {
        height: 100px !important;
        /* Adjust as needed */

    }



    .social-icons a {
        color: white;
        margin: 0 10px;
        font-size: 24px;
        /* Adjust the size as needed */
    }

    .social-icons a:hover {
        color: #ddd;
        /* Slightly lighter color on hover */
    }

    .map-container iframe {
        border: none;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .footer-address,
    .footer-phone,
    .footer-copy {
        margin-bottom: 5px;
    }

    /* Responsive styling */
    @media (max-width: 768px) {
        .footer {
            padding: 20px 10px;
        }

        .footer-logo {
            width: 120px;
            /* Adjust as needed for smaller devices */
        }

        .social-icons a {
            font-size: 20px;
        }
    }

    .list-item {
        padding: 0.5rem 0;
        /* Add padding for top and bottom */
        border-bottom: 1px solid #ccc;
        /* Add a border to the bottom of each list item */
        margin-bottom: 0.5rem;
        /* Add some space below each list item */
        list-style-type: none;
        /* Remove default list item styling */
        font-size: 1rem;
        /* Set font size */
    }

    /* Remove the border from the last item */
    .list-item:last-child {
        border-bottom: none;
    }

    /* You can also add a hover effect if you like */
    .list-item:hover {
        background-color: #f8f9fa;
    }
 
</style>
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card shadow" style="background-color: transparent;">
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
                                <input type="text" class="form-control" id="address_line1" name="address_line1" required>
                            </div>
                            <div class="col-md-6 mb-10">
                                <label for="address_line2" class="form-label">{{ __('messages.address_line2') }}</label>
                                <input type="text" class="form-control" id="address_line2" name="address_line2" required>
                            </div>
                            {{-- City & Postal Code --}}
                            <div class="col-md-4">
                                <label for="city" class="form-label">{{ __('messages.city') }}</label>
                                <input type="text" class="form-control" id="city" value="{{$customer->city}}" name="city" required>
                            </div>
                            <div class="col-md-4">
                                <label for="industry" class="form-label">{{ __('messages.stinaf') }}</label>
                                <select class="form-select" data-control="select2" data-placeholder="{{ __('messages.stinaf') }}">
                                    <option></option>
                                    @foreach($stinafTribunals as $tribunal)
                                    <option value="{{ $tribunal->id }}">{{ $tribunal->nom_ar }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="industry" class="form-label">{{ __('messages.btida2iya') }}</label>
                                <select class="form-select" data-control="select2" name="stinaf" data-placeholder="{{ __('messages.btida2iya') }}">
                                    <option></option>
                                    @foreach($ibtida2iyaTribunals as $tribunal)
                                    <option value="{{ $tribunal->id }}">{{ $tribunal->nom_ar }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <h5 class="mb-10 mt-4" style="color: #198754;"><i class="bi bi-building me-2"></i>{{ __('messages.company_info') }}</h5>
                        <div class="row g-3">
                            {{-- Job Title & Industry --}}

                            <div class="col-md-12">
                                <label for="industry" class="form-label">{{ __('messages.specialization') }}</label>
                                <select class="form-select" id="industry" name="industry">
                                    <option value="topograph" selected>{{ __('messages.topograph') }}</option>
                                    {{-- Additional options --}}
                                </select>
                            </div>
                            {{-- Company Size --}}
                            <select class="form-select mt-10 mb-10" data-control="select2" data-placeholder="{{ __('messages.company_size') }}" required>
                                <option></option>
                                <option value="1">1-25</option>
                                <option value="2">26-99</option>
                                <option value="2">100-999</option>
                                <option value="2">+1000</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="payment-methods">
                                <h3>اختر طريقة الدفع</h3>
                                <div id="paypal-button-container"></div>
                            </div>



                            <div class="mb-10 mt-4 mb-10">
                                <label for="template" class="form-label fw-bold " style="color: red;">{{ __('messages.upload_template') }}</label>
                                <input type="file" class="form-control" name="templates[]" multiple required>
                                <div class="form-text fw-bold" style="font-size: 0.875rem;">{{ __('messages.multi_file_support') }}</div>
                            </div>
                            <div class="checkbox-wrapper-1 mt-10 mb-10 ">
                                <input id="example-1" class="substituted" type="checkbox" aria-hidden="true" required />
                                <label for="example-1">{{ __('messages.accept') }} <a href="{{ route('terms', app()->getLocale()) }}">{{ __('messages.terms_agreement') }}</a>.</label>
                            </div>


                            <button type="submit" class="btn btn-primary" style="text-align: center;">{{ __('messages.submit') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include("details.linkpage")
@endsection
@push('scripts')
<script>
    paypal.Buttons({
        style: {
            layout: 'vertical',
            color: 'silver',
            shape: 'pill',
            label: 'paypal'
        },
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '0.01' // Set this value based on the actual amount
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                alert('Transaction completed by ' + details.payer.name.given_name);
                // Here you can redirect to a success page or handle post-transaction actions
            });
        }
    }).render('#paypal-button-container');
</script>
<script>
    window.addEventListener('DOMContentLoaded', (event) => {
        let currentLocale = "{{ app()->getLocale() }}"; // Get the current locale
        let successMessage = "{{ session('success') ? __('messages.success') : '' }}";
        let errorMessage = "{{ session('error') ? __('messages.error') : '' }}";

        if (successMessage) {
            Swal.fire({
                icon: 'success',
                title: currentLocale === 'fr' ? 'Succès!' : 'نجاح!',
                text: successMessage,
            });
        } else if (errorMessage) {
            Swal.fire({
                icon: 'error',
                title: currentLocale === 'fr' ? 'Oups...' : 'عفوًا...',
                text: errorMessage,
            });
        }
    });
</script>



@endpush