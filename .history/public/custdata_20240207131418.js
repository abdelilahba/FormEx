"use strict";

// Class definition
var KTDatatablesServerSide = function () {
    // Shared variables
    var table;
    var dt;
    var filterPayment;

    // Private functions
    var initDatatable = function () {
        dt = $("#kt_datatable_example_1").DataTable({
            searchDelay: 500,
            processing: true,
            serverSide: true,
            order: [[5, 'desc']],
            stateSave: true,
            select: {
                style: 'multi',
                selector: 'td:first-child input[type="checkbox"]',
                className: 'row-selected'
            },
            ajax: {
                url: "http://127.0.0.1:8000/api/customers",
            },
            columns: [
                { data: 'id' },
                { data: 'first_name' },
                { data: 'last_name' },
                { data: 'email' },
                { data: 'phone_number' },
                {
                    data: 'state',
                    render: function(data, type, row) {
                        var badgeClass = '';
                        var badgeText = '';
                        switch(data) {
                            case "0": badgeClass = 'badge badge-light-info'; badgeText = 'Pending'; break;
                            case "1": badgeClass = 'badge badge-light-success'; badgeText = 'Active'; break;
                            case "2": badgeClass = 'badge badge-light-danger"'; badgeText = 'Refused'; break;
                            default: badgeClass = 'badge badge-light-info'; badgeText = 'Unknown';
                        }
                        return `<span class="badge ${badgeClass}">${badgeText}</span>`;
                    }
                },
                {
                    data: null,
                    render: function(data, type, row) {

                        if(row.state === "0") { // Show activate button only for pending (state 0) customers
                            return `<button class="btn btn-sm btn-outline-success activate-btn"  data-id="${row.id}" style="text-aling:center" title="Activate Customer"><i class="fa fa-check-circle"></i> Activate</button>`;
                        } else  {
                            return ''; // No button for active or refused states
                        }
                    }
                },
                { data: null },
            ],
            columnDefs: [
                {
                    targets: 0,
                    orderable: false,
                    render: function (data) {
                        return `
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="${data}" />
                            </div>`;
                    }
                },
                {
                    targets: -1,
                    data: null,
                    orderable: false,
                    className: 'text-end',
                    render: function (data, type, row) {
                        // Defining the view button with an icon
                        var viewBtn = `<a href="/detailscutomer/${row.id}"  class="badge badge-info p-2" title="View"><i class="fas fa-eye"></i></a>`;
                        
                        // Existing edit button
                        var editBtn = `<a href="javascript:void(0);" onclick="openEditModal(${row.id});" class="badge badge-primary p-2 edit-btn" data-id="${row.id}" title="Edit"><i class="fas fa-edit"></i></a>`;
                        
                        // Existing delete button
                        var deleteBtn = `<a href="#" class="badge badge-danger p-2" title="Delete" data-customer-id=${row.id} data-kt-docs-table-filter="delete_row"  return false;"><i class="fas fa-trash-alt"></i></a>`;
                        
                        // Concatenating all buttons
                        return viewBtn + " " + editBtn + " " + deleteBtn;
                    },
                }
           
            ],
            // Add data-filter attribute
            createdRow: function (row, data, dataIndex) {
                $(row).find('td:eq(4)').attr('data-filter', data.CreditCardType);
            }
        });

        table = dt.$;

        // Re-init functions on every table re-draw -- more info: https://datatables.net/reference/event/draw
        dt.on('draw', function () {
          //  initToggleToolbar();
           // toggleToolbars();
           handleDeleteRows();
          // deleteSelected()
        //  initEventListeners();

            KTMenu.createInstances();
           
        });
    }


    // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
    // var handleSearchDatatable = function () {
    //     const filterSearch = document.querySelector('[data-kt-docs-table-filter="search"]');
    //     filterSearch.addEventListener('keyup', function (e) {
    //         dt.search(e.target.value).draw();
    //     });
    // }

    // Filter Datatable
    var handleFilterDatatable = () => {
        // Select filter options
        filterPayment = document.querySelectorAll('[data-kt-docs-table-filter="payment_type"] [name="payment_type"]');
        const filterButton = document.querySelector('[data-kt-docs-table-filter="filter"]');

        // Filter datatable on submit
        filterButton.addEventListener('click', function () {
            // Get filter values
            let paymentValue = '';

            // Get payment value
            filterPayment.forEach(r => {
                if (r.checked) {
                    paymentValue = r.value;
                }

                // Reset payment value if "All" is selected
                if (paymentValue === 'all') {
                    paymentValue = '';
                }
            });

            // Filter datatable --- official docs reference: https://datatables.net/reference/api/search()
            dt.search(paymentValue).draw();
        });
    }

    // Delete customer
    var handleDeleteRows = () => {
        const deleteButtons = document.querySelectorAll('[data-kt-docs-table-filter="delete_row"]');
    
        deleteButtons.forEach(d => {
            d.addEventListener('click', function (e) {
                e.preventDefault();
                const parent = e.target.closest('tr');
                console.log(parent);

                const customerId = e.target.closest('a').getAttribute('data-customer-id') || e.target.closest('a').dataset.customerId;
                console.log(customerId);
    
                Swal.fire({
                    text: "Are you sure you want to delete this customer?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Yes, delete!",
                    cancelButtonText: "No, cancel",
                    customClass: {
                        confirmButton: "btn fw-bold btn-danger",
                        cancelButton: "btn fw-bold btn-active-light-primary"
                    }
                }).then(function (result) {
                    if (result.isConfirmed) {
                        console.log(customerId);
                        $.ajax({
                            url: '/customers/delete/' + customerId,
                            type: 'DELETE',
                            data: {
                                "_token": $('meta[name="csrf-token"]').attr('content'), // Retrieve the token from the meta tag
                            },
                            
                            success: function(result) {
                                Swal.fire("Deleted!", "The customer has been deleted.", "success");
                                dt.ajax.reload(); // Reload the DataTable
                            },
                            error: function(request, status, error) {
                                Swal.fire("Error", "There was an error deleting the customer. Please try again.", "error");
                            }
                        });
                    }
                });
            });
        });
    };
    
    // Reset Filter
    var handleResetForm = () => {
        // Select reset button
        const resetButton = document.querySelector('[data-kt-docs-table-filter="reset"]');

        // Reset datatable
        resetButton.addEventListener('click', function () {
            // Reset payment type
            filterPayment[0].checked = true;

            // Reset datatable --- official docs reference: https://datatables.net/reference/api/search()
            dt.search('').draw();
        });
    }

    // Init toggle toolbar
    var initToggleToolbar = function () {
        // Toggle selected action toolbar
        // Select all checkboxes
        const container = document.querySelector('#kt_datatable_example_1');
        const checkboxes = container.querySelectorAll('[type="checkbox"]');

        // Select elements
        const deleteSelected = document.querySelector('[data-kt-docs-table-select="delete_selected"]');

        // Toggle delete selected toolbar
        checkboxes.forEach(c => {
            // Checkbox on click event
            c.addEventListener('click', function () {
                setTimeout(function () {
                    toggleToolbars();
                }, 50);
            });
        });

        // Deleted selected rows
        // deleteSelected.addEventListener('click', function () {
        //     // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
        //     Swal.fire({
        //         text: "Are you sure you want to delete selected customers?",
        //         icon: "warning",
        //         showCancelButton: true,
        //         buttonsStyling: false,
        //         showLoaderOnConfirm: true,
        //         confirmButtonText: "Yes, delete!",
        //         cancelButtonText: "No, cancel",
        //         customClass: {
        //             confirmButton: "btn fw-bold btn-danger",
        //             cancelButton: "btn fw-bold btn-active-light-primary"
        //         },
        //     }).then(function (result) {
        //         if (result.value) {
        //             // Simulate delete request -- for demo purpose only
        //             Swal.fire({
        //                 text: "Deleting selected customers",
        //                 icon: "info",
        //                 buttonsStyling: false,
        //                 showConfirmButton: false,
        //                 timer: 2000
        //             }).then(function () {
        //                 Swal.fire({
        //                     text: "You have deleted all selected customers!.",
        //                     icon: "success",
        //                     buttonsStyling: false,
        //                     confirmButtonText: "Ok, got it!",
        //                     customClass: {
        //                         confirmButton: "btn fw-bold btn-primary",
        //                     }
        //                 }).then(function () {
        //                     // delete row data from server and re-draw datatable
        //                     dt.draw();
        //                 });

        //                 // Remove header checked box
        //                 const headerCheckbox = container.querySelectorAll('[type="checkbox"]')[0];
        //                 headerCheckbox.checked = false;
        //             });
        //         } else if (result.dismiss === 'cancel') {
        //             Swal.fire({
        //                 text: "Selected customers was not deleted.",
        //                 icon: "error",
        //                 buttonsStyling: false,
        //                 confirmButtonText: "Ok, got it!",
        //                 customClass: {
        //                     confirmButton: "btn fw-bold btn-primary",
        //                 }
        //             });
        //         }
        //     });
        // });
    }
    var deleteSelected = function() {
        var selectedData = dt.rows({ selected: true }).data();
        console.log(selectedData)
        var selectedIds = $.map(selectedData, function(item) {
            console.log(item);
            return item.id; // Assuming your data source has an 'id' key
        });
       // console.log(selectedRows);
       
    
        // Loop over selected rows to get IDs
   
        console.log(selectedIds);
        if (selectedIds.length === 0) {
            Swal.fire("No Selection", "Please select one or more customers to delete.", "warning");
            return;
        }
    console.log("ffff");
        // Confirm before deletion
        Swal.fire({
            text: "Are you sure you want to delete the selected customers?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, delete!",
            cancelButtonText: "No, cancel",
        }).then(function (result) {
            if (result.isConfirmed) {
                $.ajax({
                    url: '/customers/delete-selected',
                    type: 'POST', // Use POST to send an array
                    data: {
                        "_token": $('meta[name="csrf-token"]').attr('content'), // CSRF token
                        "ids": selectedIds // Array of customer IDs
                    },
                    success: function(result) {
                        Swal.fire("Deleted!", "The selected customers have been deleted.", "success");
                        dt.ajax.reload(); // Reload the DataTable
                    },
                    error: function(request, status, error) {
                        Swal.fire("Error", "There was an error deleting the selected customers. Please try again.", "error");
                    }
                });
            }
        });
    };
    var initEventListeners = function() {
        $('#kt_datatable_example_1 tbody').on('change', 'input[type="checkbox"]', function() {
            var $row = $(this).closest('tr');

            $row.toggleClass('selected');
        });

        // Listener for delete selected
        $('[data-kt-docs-table-select="delete_selected"]').on('click', function() {
            deleteSelected();
        });
    };

    // Toggle toolbars
    // var toggleToolbars = function () {
    //     // Define variables
    //     const container = document.querySelector('#kt_datatable_example_1');
    //     const toolbarBase = document.querySelector('[data-kt-docs-table-toolbar="base"]');
    //     const toolbarSelected = document.querySelector('[data-kt-docs-table-toolbar="selected"]');
    //     const selectedCount = document.querySelector('[data-kt-docs-table-select="selected_count"]');

    //     // Select refreshed checkbox DOM elements
    //     const allCheckboxes = container.querySelectorAll('tbody [type="checkbox"]');

    //     // Detect checkboxes state & count
    //     let checkedState = false;
    //     let count = 0;

    //     // Count checked boxes
    //     allCheckboxes.forEach(c => {
    //         if (c.checked) {
    //             checkedState = true;
    //             count++;
    //         }
    //     });

    //     // Toggle toolbars
    //     if (checkedState) {
    //         selectedCount.innerHTML = count;
    //         toolbarBase.classList.add('d-none');
    //         toolbarSelected.classList.remove('d-none');
    //     } else {
    //         toolbarBase.classList.remove('d-none');
    //         toolbarSelected.classList.add('d-none');
    //     }
    // }

    // Public methods
    return {
        init: function () {
            initDatatable();
         //   handleSearchDatatable();
            //initToggleToolbar();
         //   handleFilterDatatable();
            handleDeleteRows();
           // handleResetForm();
         //  initEventListeners()
        }
    }
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTDatatablesServerSide.init();
});