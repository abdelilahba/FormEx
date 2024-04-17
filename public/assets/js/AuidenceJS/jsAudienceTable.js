
"use strict";
// Class definition
var KTDatatablesServerSide = function () {
    // Shared variables
    var table;
    var dt;
    var filterPayment;

    // Private functions
    var initDatatable = function () {

        dt = $("#kt_datatable_example_audience").DataTable({
            searchDelay: 500,
            processing: false,
            serverSide: false,
            order: [[5, 'desc']],
            stateSave: true,
            select: {
                style: 'multi',
                selector: 'td:first-child input[type="checkbox"]',
                className: 'row-selected'
            },
            ajax: {
                url: "http://127.0.0.1:8000/api/audiences",
            },
            columns: [
                { data: 'id_audience' },
                { data: 'date_debut',defaultContent: ""},
                { data: 'cat' ,   render: function(data, type, row) {
                        return data === 0 ? '' : data === 1 ? 'المداولة' : 'تأمل';                      
                    },
                },
                { data: "dossier.client.nom" ,defaultContent: ""},
                { data: 'id_dossier' ,defaultContent: ""},
                { data: 'typeDossierAudience' ,defaultContent: ""},        
                { data: 'dossier.tribunal.nom_ar' ,defaultContent: ""},
                { data: 'juge.nom_ar' ,defaultContent: ""},

                { data: 'audience_type.libelle' ,defaultContent: ""},
                { data: 'rapport' ,defaultContent: ""},
                { data: 'dossier.procedure' ,defaultContent: ""},
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
                        var recipient = JSON.stringify(data);
                        return `
                        <!--begin::Menu-->
                        <div class="row g-0">
                            <!--begin::Menu item-->
                            <div class="col-sm-6 col-md-8" >
                                <a class="menu-link px-3"  role="button" data-bs-toggle="modal" data-bs-target="kt_modal_create_app1" data-bs-whatever='${recipient}' >
                                    <i class="edit fa-solid fa-marker fa-1x" style="color:#EBAC3A"></i>                                  
                                </a>
                            </div>
                            <div class="col-6 col-md-4">
                                <a href="delete_dossier" class="menu-link px-3" data-kt-docs-table-filter="delete_row">
                                    <i class="delete fa-solid fa-trash-can fa-1x"  style="color:#E55B79"></i>
                                </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    `;
                    },
                },
                {
                    // remove number of releases to allow sorting as dates
                    targets: 1, // apply to column by number of column
                    type: "date",
                    render: function (data, type, row) {
                        // if sort or filter data is requested, format the date

                        moment.locale('ar');
                        var d = Date.parse(data)
                        var ff = moment(data).format("YYYY-MM-DD dddd")
                        return ff;

                    }
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
            initToggleToolbar();
            toggleToolbars();
            handleDeleteRows();
            KTMenu.createInstances();
        });
    }

    // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
    var handleSearchDatatable = function () {
        const filterSearch = document.querySelector('[data-kt-docs-table-filter="search"]');
        filterSearch.addEventListener('keyup', function (e) {
            dt.search(e.target.value).draw();
        });
    }

    // Filter Datatable
    var handleFilterDatatable = () => {
        // Select filter options
        filterPayment = document.querySelectorAll('[data-kt-docs-table-filter="payment_type"] [name="payment_type"]');
        const filterButton = document.querySelector('[data-kt-docs-table-filter="filter"]');

        // Filter datatable on submit
        didOpen: (filterButton) => {
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
    }

    // Delete customer
    var handleDeleteRows = () => {
        // Select all delete buttons
        const deleteButtons = document.querySelectorAll('[data-kt-docs-table-filter="delete_row"]');

        deleteButtons.forEach(d => {
            // Delete button on click
            d.addEventListener('click', function (e) {
                e.preventDefault();
                // Select parent row
                const parent = e.target.closest('tr');

                // Get customer name
                const customerName = parent.querySelectorAll('td')[3].innerText;

                const customerID = parent.querySelectorAll('td')[0];
                const div = customerID.querySelector('div');
                const id = div.querySelector('input').value;

                // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                Swal.fire({
                    // text: "Are you sure you want to delete " + customerName + "?" ,
                    text: " هل أنت متأكد أنك تريد حذف" + " " + customerName + "?",
                    icon: "warning",
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: "نعم ، إحذف!",
                    cancelButtonText: "لا ، إلغاء",
                    customClass: {
                        confirmButton: "btn fw-bold btn-danger",
                        cancelButton: "btn fw-bold btn-active-light-primary"
                    }
                }).then(function (result) {
                    if (result.value) {
                        // Simulate delete request -- for demo purpose only
                        Swal.fire({
                            text: customerName + "حذف",
                            icon: "info",
                            buttonsStyling: false,
                            showConfirmButton: false,
                            timer: 2000
                        }).then(function () {
                            console.log(id);
                            $.ajax({
                                url: 'delete_dossier',
                                type: 'DELETE',
                                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                                data: 'id=' + id,
                                success: function (data) {
                                    if (data['success']) {
                                        success_toast(".تم حذف القضية بنجاح");
                                        Swal.fire({
                                            text: "!بنجاح " + id + " لقد قمت بحذف القضية رقم",
                                            icon: "success",
                                            buttonsStyling: false,
                                            confirmButtonText: "!" + "حسنًا ، شكرا",
                                            customClass: {
                                                confirmButton: "btn fw-bold btn-primary",
                                            }
                                        }).then(function () {
                                            // delete row data from server and re-draw datatable
                                            dt.page('next').draw('page');
                                        });
                                    } else if (data['error']) {
                                        error_toast("!خطأ أثناء حذف معلومات القضية");
                                    } else {
                                        error_toast('!!عذرًا ، حدث خطأ ما');
                                    }
                                },
                                error: function (data) {
                                    error_toast(data.responseText);
                                }
                            });
                        });
                    } else if (result.dismiss === 'cancel') {
                        Swal.fire({
                            text: customerName + ".لم يتم حذفه",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "!حسنًا ، شكرا",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            }
                        });
                    }
                });
            })
        });
    }

    // Reset Filter
    var handleResetForm = () => {
        // Select reset button
        const resetButton = document.querySelector('[data-kt-docs-table-filter="reset"]');

        // Reset datatable
        didOpen: (resetButton) => {
            resetButton.addEventListener('click', function () {
                // Reset payment type
                filterPayment[0].checked = true;

                // Reset datatable --- official docs reference: https://datatables.net/reference/api/search()
                dt.search('').draw();
            });
        }
    }

    // Init toggle toolbar
    var initToggleToolbar = function () {
        // Toggle selected action toolbar
        // Select all checkboxes
        const container = document.querySelector('#kt_datatable_example_audience');
        const checkboxes = container.querySelectorAll('[type="checkbox"]');

        // Select elements
        const deleteSelected = document.querySelector('[data-kt-docs-table-select="delete_selected"]');

        // console.log('delete: ' + deleteSelected);
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
        didOpen: (deleteSelected) => {
            deleteSelected.addEventListener('click', function () {
                // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                Swal.fire({
                    text: "Are you sure you want to delete selected customers?",
                    icon: "warning",
                    showCancelButton: true,
                    buttonsStyling: false,
                    showLoaderOnConfirm: true,
                    confirmButtonText: "Yes, delete!",
                    cancelButtonText: "No, cancel",
                    customClass: {
                        confirmButton: "btn fw-bold btn-danger",
                        cancelButton: "btn fw-bold btn-active-light-primary"
                    },
                }).then(function (result) {
                    if (result.value) {
                        // Simulate delete request -- for demo purpose only
                        Swal.fire({
                            text: "Deleting selected customers",
                            icon: "info",
                            buttonsStyling: false,
                            showConfirmButton: false,
                            timer: 2000
                        }).then(function () {
                            Swal.fire({
                                text: "You have deleted all selected customers!.",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-primary",
                                }
                            }).then(function () {
                                // delete row data from server and re-draw datatable
                                dt.draw();
                            });

                            // Remove header checked box
                            const headerCheckbox = container.querySelectorAll('[type="checkbox"]')[0];
                            headerCheckbox.checked = false;
                        });
                    } else if (result.dismiss === 'cancel') {
                        Swal.fire({
                            text: "Selected customers was not deleted.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            }
                        });
                    }
                });
            }


            );
        }
    }

    // Toggle toolbars
    var toggleToolbars = function () {
        // Define variables
        const container = document.querySelector('#kt_datatable_example_audience');
        const toolbarBase = document.querySelector('[data-kt-docs-table-toolbar="base"]');
        const toolbarSelected = document.querySelector('[data-kt-docs-table-toolbar="selected"]');
        const selectedCount = document.querySelector('[data-kt-docs-table-select="selected_count"]');

        // Select refreshed checkbox DOM elements
        const allCheckboxes = container.querySelectorAll('tbody [type="checkbox"]');

        // Detect checkboxes state & count
        let checkedState = false;
        let count = 0;

        // Count checked boxes
        allCheckboxes.forEach(c => {
            if (c.checked) {
                checkedState = true;
                count++;
            }
        });

        // Toggle toolbars
        if (checkedState) {
            selectedCount.innerHTML = count;
            toolbarBase.classList.add('d-none');
            toolbarSelected.classList.remove('d-none');
        } else {
            toolbarBase.classList.remove('d-none');
            toolbarSelected.classList.add('d-none');
        }
    }

    // Public methods
    return {
        init: function () {
            initDatatable();
            handleSearchDatatable();
            initToggleToolbar();
            handleFilterDatatable();
            handleDeleteRows();
            handleResetForm();
        }
    }
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTDatatablesServerSide.init();
});


function success_toast(message) {
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toastr-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "4000",
        "timeOut": "8000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    toastr.success(message);
}

function error_toast(message) {
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toastr-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "4000",
        "timeOut": "8000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
    toastr.error(message);
}

function warning_toast(message) {
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toastr-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "4000",
        "timeOut": "8000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
    toastr.warning(message);
}

$(document).ready( function () {
    addTableButtons();
  } );


function addTableButtons() {
	var table = $('#kt_datatable_example_audience').DataTable();
 

	 
	table.buttons().containers().appendTo( '#export2' );
}