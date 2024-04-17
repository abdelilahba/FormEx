@extends('master1')

@section('title', "Form")
@section('hideSidebar')


@endsection
@section('hideHeader')
@endsection
@section('head')
    <link href="{{asset('assets/css/styleSelect.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
<link href="
https://cdn.jsdelivr.net/npm/bootstrap-select-country@4.2.0/dist/css/bootstrap-select-country.min.css" rel="stylesheet">
@parent
@endsection
@section('content')
<div class="language-switcher">
<form action="{{ route('language.change') }}" method="POST" class="d-inline">
            @csrf
            <select name="language" class="form-select form-control" onchange="this.form.submit()"   id="kt_docs_select3_country">
               <option value="fr" {{ App::getLocale() == 'fr' ? ' selected' : '' }} data-kt-select2-country="assets/media/flags/france.svg">{{ __('messages.france') }}</option>
               <option value="ar" {{ App::getLocale() == 'ar' ? ' selected' : '' }}  data-kt-select2-country="assets/media/flags/morocco.svg">{{ __('messages.arabic') }}</option>
            </select>            
</form>
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
        <p class="des">{{ __('messages.descriptionp1') }}</p>
        <p class="des"> {!! str_replace(':highlighted_text', $highlightedText, __('messages.descriptionp2')) !!} </p>
        <p class="des" > {!! str_replace(':highlighted_text', $highlightedText, __('messages.descriptionp3')) !!} </p>

      </div>     
      <!-- Form Section -->
 @include("form")
@endsection
@push('scripts')
<script>
$(document).ready(function() {
    const form = $('#customerForm'); // Use jQuery to select the form

    form.on('submit', function (e) {
        e.preventDefault(); // Prevent the default form submission

        // Use jQuery's ajax method
        $.ajax({
            url: "{{ route('submit.form') }}", // Use the form's action attribute
            type: 'POST',
            data: form.serialize(), // Serialize the form data for submission
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val() // Get CSRF token value
            },
            success: function(data) {
                if (data.success) {
                    // Assuming the server returns the ID of the newly created resource
                    const detailsUrl = `/details/${data.id}`; // Construct the URL

                    // Display the SweetAlert with the details link
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        html: `Your submission was successful. <a href="${detailsUrl}">Click here</a> to view details.`,
                    });
                } else {
                    // Handle server-side validation or other errors
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                    });
                }
            },
            error: function(xhr, status, error) {
                console.log(xhr);
                // Handle HTTP errors
                console.error('Error:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong with the request!',
                });
            }
        });
    });
});
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
  fr: "France",
  ma: "Maroc",

});</script>

@endpush