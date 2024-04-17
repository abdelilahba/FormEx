@extends('master1')

@section('title', __('messages.khabirak'))

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

.accordion {
    margin: 2rem auto; /* Centers the accordion and provides some space from the top */
    width: 80%; /* Adjust width as needed, 80% for example */
    max-width: 100%; /* Maximum width */
    background-color: rgba(255, 255, 255, 0.5); /* Semi-transparent background */
    border-radius: 15px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    background: url("{{ asset('logo/logo.jpg') }}") no-repeat center center fixed !important;
    background-size: cover !important;
}

.accordion-button {
    background-color: rgba(255, 255, 255, 0.5); /* Semi-transparent background */
    color: #000; /* Text color */
    text-align: center;
    display: block;
    font-size: 1.35rem; /* Increase font size for accordion headers */

  
}

.accordion-body {
    text-align: center;
    background-color: rgba(255, 255, 255, 0.8); /* Slightly more opaque than the button */
    font-size: 1.20rem; /* Increase font size for accordion bodies */

    
    
}
.container-sequence {
    width: 82%; /* Adjust width as needed */
    max-width: 131%; /* Maximum width */
    border-radius: 15px;
    padding: 20px;
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-clip: border-box;
    
   
}
.accordion-item{
  
    background-color: rgba(0,0,0,.03);
}
.whatsapp-contact-section {
        position: fixed; /* Fixed position to keep it visible */
        right: 20px; /* Adjust based on your layout */
        bottom: 20px; /* Adjust based on your layout */
        z-index: 1000; /* Ensure it's above other content */
    }
    
    .whatsapp-contact-link {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 10px 15px;
        background-color: #25D366; /* WhatsApp color */
        color: #ffffff;
        border-radius: 50px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
        text-decoration: none;
    }
    
    .whatsapp-contact-link:hover {
        background-color: #20B45B; /* Slightly darker on hover */
        text-decoration: none;
    }

    .whatsapp-icon {
        width: 30px; /* Adjust icon size */
        margin-right: 8px;
    }

    .whatsapp-number {
        font-weight: bold;
        margin-right: 5px;
    }

    .whatsapp-text {
        font-size: 0.9rem; /* Smaller text for the trial info */
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .whatsapp-contact-section {
            right: 10px;
            bottom: 10px;
        }
    }

    </style>
@endpush
@section('content')

<div class="language-switcher  form-group">
<form method="POST" class="d-inline form-group" id="language-switch-form"   action = "{{ route('language.change') }} " >
    @csrf
    <select name="language" class="form-select form-group" onchange="changeLanguage()" id="kt_docs_select3_country">
        <option value="fr" {{ App::getLocale() == 'fr' ? ' selected' : '' }} data-kt-select2-country="assets/media/flags/france.svg">{{ __('messages.france') }}</option>
        <option value="ar" {{ App::getLocale() == 'ar' ? ' selected' : '' }} data-kt-select2-country="assets/media/flags/morocco.svg">{{ __('messages.arabic') }}</option>
    </select>            
</form>
</div>
<div class="whatsapp-contact-section text-center mt-4">
    <a href="https://wa.me/212688561364" class="whatsapp-contact-link" target="_blank">
        <img src="{{ asset('logo/whatsapp.png') }}" alt="WhatsApp" class="whatsapp-icon" />
        <span class="whatsapp-number">+212666653437</span>
        <span class="whatsapp-text">14  jours d'essai gratuit</span>
    </a>
</div>
<div class="logo-container">
    <img src="{{ asset('logo/expertlogo.png') }}" alt="Logo">
</div>
@php
    $highlightedText = "<span class=\"highlight1\">KHABIRAK</span>";
    if (app()->getLocale() === 'ar') {
        $highlightedText = "<span class=\"highlight1\">خبيرك</span>";
    }
@endphp
<div class="container mt-5">
    <div class="row equal-height">
      <!-- Description Section -->
      <div class="col-md-7 description-section">
      <div class="text-banner">
    <h2 class="des" style="font-size: 30px;">{{ __('messages.logiciel') }}</h2>
</div>
        <p class="des">{{ __('messages.descriptionp1') }}</p>
        <p class="des"> {!! str_replace(':highlighted_text', $highlightedText, __('messages.descriptionp2')) !!} </p>
        <p class="des" > {!! str_replace(':highlighted_text', $highlightedText, __('messages.descriptionp3')) !!} </p>

      </div>     
      <!-- Form Section -->
 @include("form")

@include("sequence")
@endsection
@push('scripts')
<script>
    var messages = {
        successMessage: "{{ __('messages.success_message') }}",
        errorMessage: "{{ __('messages.error_message') }}",
        clickHere: "{{ __('messages.click_here') }}",
        toViewDetails: "{{ __('messages.to_view_details') }}" ,

    };
</script>
<script>
    
$(document).ready(function() {
    const form = $('#customerForm'); // Use jQuery to select the form

    form.on('submit', function (e) {
        e.preventDefault(); // Prevent the default form submission
        const locale = window.location.pathname.split('/')[1];
        const submitUrl = `/submit-form`; // Construct the submit URL with the locale
        // Use jQuery's ajax method
        $.ajax({
            url: submitUrl, // Use the form's action attribute
            type: 'POST',
            data: form.serialize(), // Serialize the form data for submission
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val() // Get CSRF token value
            },
            success: function(data) {
                if (data.success) {
                    console.log(data.random_number);
                    // Assuming the server returns the ID of the newly created resource
                    const detailsUrl = `/${locale}/complete-profile/${data.random_number}`; // Adjusted to use random_number


                    // Display the SweetAlert with the details link
                    Swal.fire({
                        icon: 'success',
                        title: messages.successMessage,
                        html: `${messages.clickHere}  <a href="${detailsUrl}">Click here</a> ${messages.toViewDetails}`,
                    });
                } else {
                    // Handle server-side validation or other errors
                    Swal.fire({
                        icon: 'error',
                        title: 'mail déja existe',
                        text: messages.errorMessage,
                    });
                }
            },
            error: function(xhr, status, error) {
                console.log(xhr);
                // Handle HTTP errors
                console.error('Error:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'mail déja existe',
                    text: messages.errorMessage,
                });
            }
        });
    });
});

function changeLanguage() {
    var selectedLanguage = document.getElementById('kt_docs_select3_country').value;
    // Construct the URL with the selected language prefix
    var url = '/' + selectedLanguage + window.location.pathname.replace(/^\/(ar|fr)/, '');
    // Redirect to the new URL
    window.location.href = url;
}

</script>

<script>

    // Format options
var optionFormat = function(item) {
    if ( !item.id ) {
        return item.text;
    }

    var span = document.createElement('span');
    var imgUrl = item.element.getAttribute('data-kt-select2-country');
    var template = '';

    template += '<img src="' + imgUrl + '" class="rounded-circle h-20px me-2" alt="image"/>';
    template += item.text;

    span.innerHTML = template;

    return $(span);
}

// Init Select2 --- more info: https://select2.org/
$('#kt_docs_select2_country').select2({
    templateSelection: optionFormat,
    templateResult: optionFormat
});
$('#kt_docs_select3_country').select2({
    templateSelection: optionFormat,
    templateResult: optionFormat
});
</script>
<script>     var input = document.querySelector("#phone");
   window.intlTelInput(input,{
  utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js",
  initialCountry: "ma",
  localizedCountries: {
    'ma': 'Maroc',
    'fr': 'France',
    // Add other countries here with their French names
  }



});</script>

@endpush