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

<div class="d-flex flex-stack mb-5">
    <!--begin::Search-->
    <div class="d-flex align-items-center position-relative my-1">
        <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6"><span class="path1"></span><span class="path2"></span></i>
        <input type="text" data-kt-docs-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Customers"/>
    </div>
    <!--end::Search-->

    <!--begin::Toolbar-->
    <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
        <!--begin::Filter-->
        <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="tooltip" title="Coming Soon">
            <i class="ki-duotone ki-filter fs-2"><span class="path1"></span><span class="path2"></span></i>
            Filter
        </button>
        <!--end::Filter-->

        <!--begin::Add customer-->
        <button type="button" class="btn btn-primary btn-right-margin" data-bs-toggle="modal"  onclick="openAddModal()">
    Add Customer
</button>
        <!--end::Add customer-->
    </div>
    <!--end::Toolbar-->

    <!--begin::Group actions-->
    <div class="d-flex justify-content-end align-items-center d-none" data-kt-docs-table-toolbar="selected">
        <div class="fw-bold me-5">
            <span class="me-2" data-kt-docs-table-select="selected_count"></span> Selected
        </div>

        <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" title="Coming Soon">
            Selection Action
        </button>
    </div>
    <!--end::Group actions-->
</div>

<table id="kt_datatable_example_1" class="table table-bordered table-hover align-middle table-row-dashed fs-6 gy-5">
    <thead class="thead-dark">
    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
        <th class="w-10px pe-2">
            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-docs-table-select="delete_selected" data-kt-check-target="#kt_datatable_example_1 .form-check-input" value="1"/>
            </div>
        </th>
        <th>Numero</th>
        <th>Nom Complet </th>
        <th> Tele</th>
        <th>Date inscription</th>
        <th>Date facture</th>
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

    $('.valide-btn').on('click', function() {
    var customerId = $(this).data('id');
    Swal.fire({
        title: 'Are you sure?',
        text: "You want to valide this customer!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#ffc107',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, valide it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: 'validate-customer/' + customerId,
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                },
                success: function(response) {
                    console.log(response.link);
                    Swal.fire(
                        'Validated!',
                        'Customer has been validated and email sent.',
                        'success'
                    );
                },
                error: function(xhr, status, error) {
                    // Handle error
                    Swal.fire('Error!', 'An error occurred while validating the customer.', 'error');
                }
            });
        }
    });
});

    $(document).on('click', '.toggle-activation-btn', function() {
        var $button = $(this); // Cache the button
        var customerId = $button.data('id'); // Get the ID of the customer
        var action = $button.data('action'); // Either 'activate' or 'deactivate'
        var originalButtonText = $button.html(); // Save the original button text
        
        // Show loading text/icon on button
        $button.html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...').prop('disabled', true);
        
        // Determine the URL based on the action
        var url = action === 'activate' ? '{{ route("customer.activate") }}' : '{{ route("customer.deactivate") }}'; // Adjust the routes as necessary
        
        // Start SweetAlert2 loading indicator
        Swal.fire({
            title: 'Processing...',
            html: 'Please wait while we are processing your request.',
            allowOutsideClick: false,
            showConfirmButton: false,
            willOpen: () => {
                Swal.showLoading();
            },
        });

        $.ajax({
            url: url, // Use the route name
            type: 'POST',
            data: {
                id: customerId,
                _token: "{{ csrf_token() }}" // Include CSRF token
            },
            success: function(response) {
                Swal.close(); // Close the SweetAlert2 loading indicator
                if(response.success) {
                    // Handle success
                    Swal.fire({
                        title: 'Success!',
                        html: response.message + '<br>Activation Link: <a href="' + response.activationLink + '">' + response.activationLink + '</a>',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $('#kt_datatable_example_1').DataTable().ajax.reload(null, false);
                        }
                    });
                } else {
                    // Handle failure
                    Swal.fire({
                        title: 'Error!',
                        text: 'Activation failed: ' + response.message,
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            },
            error: function(xhr, status, error) {
    Swal.close(); // Ensure loading indicator is closed on error

    // Try to parse the response to get the error message
    var errorMessage = "Activation failed, please try again."; // Default error message
    if(xhr.responseJSON && xhr.responseJSON.message) {
        errorMessage = xhr.responseJSON.message; // Use the message from the response
    } else if(xhr.responseText) {
        // If the response is a plain text, you might want to display it directly
        // This depends on how your API sends back error responses
        errorMessage = xhr.responseText;
    }

    console.error("Activation failed: ", error);
    Swal.fire('Error!', errorMessage, 'error');
},
            complete: function() {
                // Revert button to original state
                $button.html(originalButtonText).prop('disabled', false);
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
    currentCustomerId = customerId; // Set the current customer ID
    // Reset the form in case it has previous data
    $('#customerForm')[0].reset();
    // Change the modal title
    $('#kt_modal_add_customer .modal-title').text('Edit Customer');

    // Fetch customer data
    $.ajax({
    url: `/customers/${customerId}`, // Make sure the URL is correct, might need to adjust based on your routing
    type: 'GET',
    success: function(response) {
        if(response.success) {
            var data = response.data; // Assuming the data is nested under 'data'
            console.log(data);
            // Populate the form with the fetched data
            $('input[name="companyName"]').val(data.company_name); // Adjust the name attribute if different
            $('input[name="last_name"]').val(data.last_name);
            $('input[name="first_name"]').val(data.first_name);
            $('input[name="email"]').val(data.email);
            $('input[name="position"]').val(data.position);
            $('input[name="phone_number"]').val(data.phone_number);
            // If you have select fields or other types of inputs, populate them similarly.
            
            $('#kt_modal_add_customer .modal-title').text('Edit Customer'); // Set modal title for edit
            $('#kt_modal_add_customer').modal('show'); // Show the modal now that data is populated
        }
    },
    error: function(xhr, status, error) {
        // Handle errors (e.g., customer not found or server error)
        console.error("Error fetching customer data: ", error);
        alert('Failed to fetch customer data. Please try again.');
    }
});
}


// Handling form submission
$('#customerForm').submit(function(e) {
    e.preventDefault(); // Prevent default form submission

    var formAction = currentCustomerId ? `/customers/${currentCustomerId}/update` : "/submit-form";
    var formMethod = currentCustomerId ? 'PUT' : 'POST';
    console.log(formAction);

    
    $.ajax({
        url: formAction,
        type: formMethod,
        
        data: 
           $(this).serialize(),
            // Include CSRF token}, // Serialize form data for submission
        success: function(response) {
    
            $('#kt_modal_add_customer').modal('hide'); // Close modal on success
            // Reload DataTable to reflect changes
            $('#kt_datatable_example_1').DataTable().ajax.reload();
            Swal.fire({
                title: 'Success!',
                text: currentCustomerId ? 'Customer updated successfully.' : 'Customer added successfully.',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        },
        error: function(xhr, status, error) {
    console.error("Error: ", error);

    // Checking if the response is in JSON format and has a message
    var errorMessage = "There was an issue with the customer operation. Please try again.";
    if (xhr.responseJSON && xhr.responseJSON.message) {
        errorMessage = xhr.responseJSON.message;
    } else if (xhr.responseText) {
        // Fallback to responseText if response is not JSON or does not have a message
        errorMessage = xhr.responseText;
    }

    Swal.fire('Error!', errorMessage, 'error');
}
    });
});

</script>


@endpush
