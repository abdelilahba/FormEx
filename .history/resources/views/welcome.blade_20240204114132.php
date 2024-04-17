@extends('master1')

@section('title', "Form")

@section('head')
    <link href="{{asset('assets/css/styleSelect.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
<link href="
https://cdn.jsdelivr.net/npm/bootstrap-select-country@4.2.0/dist/css/bootstrap-select-country.min.css
" rel="stylesheet">

 
@endsection
@section('content')


@endsection
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const successMessage = "{{ session('success') }}";
    const errorMessage = "{{ session('error') }}";

    if (successMessage) {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: successMessage,
        });
    }

    if (errorMessage) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: errorMessage,
        });
    }
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
</script>
@endpush