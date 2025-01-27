@extends('master1')

@section('title', "Lites Customers")

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

    /* Improved styling for the DataTable */
    #kt_datatable_example_1 {
        border-collapse: separate;
        border-spacing: 0 15px;
        width: 100%; /* Ensure full width */
    }

    #kt_datatable_example_1 thead th {
        background-color: #a19193; /* Teal background for header */
        color: #ffffff; /* White text color */
        border-bottom: 3px solid #a19193; /* Darker bottom border for a subtle depth */
        padding: 12px 15px; /* Adjusted padding for better spacing */
    }

    #kt_datatable_example_1 tbody tr {
        background-color: #e7e4e3; /* Light grey background for each row */
        margin-bottom: 15px; /* Spacing between rows */
        border-radius: 5px; /* Rounded corners for each row */
        box-shadow: 0 2px 4px rgba(0,0,0,0.1); /* Soft shadow for depth */
        border: 2px solid #e7e4e3; /* 2px border for cells with specified color */

    }

    #kt_datatable_example_1 tbody tr td {
        padding: 12px 15px; /* Consistent padding for cell content */
        border-color: #CFD8DC; /* Border color for cells */
        vertical-align: middle; /* Center align cell content */
    }

    .form-check-input {
        cursor: pointer;
    }

    .activate-btn, .badge {
        font-size: 0.875rem; /* Adjust size */
        text-align: center;
        display: inline-block; /* For aligning with other action buttons */
    }

    /* Styling for action buttons */
    .badge {
        padding: 0.5em 0.75em;
        border-radius: 0.2em;
    }

    .badge-primary {
        background-color: #007bff;
    }

    .badge-info {
        background-color: #17a2b8;
    }

    .badge-danger {
        background-color: #dc3545;
    }

    /* Container Styling */
    .container {
        max-width: 95%; /* Utilize more screen space */
        margin-top: 20px; /* Spacing from top */
    }

    .card {
        border: none; /* Remove default card border */
        border-radius: 8px; /* Rounded corners for card */
    }

    .card-header {
        background-color: #005662; /* Darker teal background */
        color: #ffffff; /* White text for header */
        font-size: 1.25rem; /* Larger font size for header */
    }
</style>
@endpush

 
@endsection
@section('content')


@include('ListeCustumor.formadd')
<div class="d-flex justify-content-end mb-3">
<button type="button" class="btn btn-primary btn-right-margin" data-bs-toggle="modal" data-bs-target="#kt_modal_add_customer" onclick="openAddModal()">
    Add Customer
</button>
</div>
<table id="kt_datatable_example_1" class="table table-bordered table-hover align-middle table-row-dashed fs-6 gy-5">
    <thead class="thead-dark">
    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
        <th class="w-10px pe-2">
            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-docs-table-select="delete_selected" data-kt-check-target="#kt_datatable_example_1 .form-check-input" value="1"/>
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
    $('body').on('click', '.edit-btn', function() {
        var customerId = $(this).data('id');
       
        openEditModal(customerId);
    });
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
                    $('#kt_datatable_example_1').DataTable().ajax.reload(null, false);
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
var currentCustomerId = null;

// Open modal for adding a new customer
function openAddModal() {
    currentCustomerId = null; // Reset to null for adding
    $('#customerForm')[0].reset(); // Reset form
    $('#kt_modal_add_customer .modal-title').text('Add a Customer'); // Set modal title
    $('#kt_modal_add_customer').modal('show'); // Show modal
}

// Open modal for editing an existing customer
function openEditModal(customerId) {
    currentCustomerId = customerId; // Set the current customer ID to the one being edited
    $('#customerForm')[0].reset(); // Reset form
    $('#kt_modal_add_customer .modal-title').text('Edit a Customer'); // Set modal title
    $('#kt_modal_add_customer').modal('show'); // Show modal
    $('#customerForm').find('input[name="_method"]').val('PUT'); // Change form method to PUT for update operation
    // Clear form for previous data
    $('#customerForm')[0].reset(); 
    
    // AJAX call to get customer data and populate the form
    $.ajax({
        url: `/api/customers/${customerId}`, // Fetch customer data
        type: 'GET',
        success: function(data) {
            // Assuming 'data' is the customer object returned from the server
            $('input[name="companyName"]').val(data.companyName);
            $('input[name="last_name"]').val(data.last_name);
            // Continue populating all relevant fields...
            
            $('#kt_modal_add_customer .modal-title').text('Edit Customer'); // Update modal title for edit
            $('#kt_modal_add_customer').modal('show'); // Show the modal
        },
        error: function(xhr, status, error) {
            console.error("Error fetching customer data: ", error);
            alert('Failed to fetch customer data. Please try again.');
        }
    });
}
</script>


@endpush
