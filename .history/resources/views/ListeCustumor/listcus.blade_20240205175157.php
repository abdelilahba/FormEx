@extends('master1')

@section('title', "Parcelle")

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




<table id="kt_datatable_example_1" class="table table-bordered table-hover align-middle table-row-dashed fs-6 gy-5">
    <thead class="thead-dark">
    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
        <th class="w-10px pe-2">
            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_datatable_example_1 .form-check-input" value="1"/>
            </div>
        </th>
        <th>Nom </th>
        <th>Prenom</th>
        <th>email</th>
        <th> Tele</th>
        <th> state</th>
        <th> Activate</th>
        
        

        <th class="text-end min-w-100px">Actions</th>
    </tr>
    </thead>
    <tbody class="text-gray-600 fw-semibold">
    </tbody>
</table>
<!--end::Datatable-->
@endsection
@push('scripts')
<script src="{{asset('custdata.js')}}"></script>


<script src="{{asset('/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<link href="{{asset('table.css')}} " rel="stylesheet">
<script>
$(document).ready(function() {
    $(document).on('click', '.activate-btn', function() {
        var customerId = $(this).data('id'); // Get the ID of the customer

        $.ajax({
            url: '{{ route("customer.activate") }}', // Use the route name
            type: 'POST',
            data: {
                id: customerId,
                _token: "{{ csrf_token() }}" // Include CSRF token
            },
            success: function(response) {
                if(response.success) {
                    // Update SweetAlert to include the activation link
                    Swal.fire({
                        title: 'Success!',
                        html: response.message + '<br>Activation Link: <a href="' + response.activationLink + '">' + response.activationLink + '</a>', // Display the response message and link
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            dt.ajax.reload(null, false); // Reload DataTables without resetting the paging
                        }
                    });
                } else {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Activation failed: ' + response.message, // Show error message
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            },
            error: function(xhr, status, error) {
                console.error("Activation failed: ", error);
                Swal.fire('Error!', 'Activation failed, please try again.', 'error');
            }
        });
    });
});



</script>


@endpush
