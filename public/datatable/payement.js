var KTDatatablesServerSide = function () {
    // Shared variables
    var dt;

    // Private functions
    var initDatatable = function () {
        dt = $("#kt_datatable_example_1").DataTable({
            searchDelay: 500,
            processing: true,
            serverSide: true,
            order: [[3, 'desc']], // Assuming you want to order by the invoice date
            ajax: {
                url: "http://127.0.0.1:8000/api/payments",
            },
            columns: [
                // Assuming the first column is for selection checkboxes as in your original setup
                { data: 'id', className: 'text-center' }, // Placeholder for checkbox column, adjust as needed
                { data: 'invoice.id', title: 'Invoice Number' },
                {
                    data: 'invoice.state',
                    title: 'Status',
                    render: function(data, type, row) {
                        var stateText = '', stateClass = '';
                        switch (data) {
                            case "0": stateClass = 'badge-light-info'; stateText = 'Pending'; break;
                            case "1": stateClass = 'badge-light-success'; stateText = 'Paid'; break;
                            case "2": stateClass = 'badge-light-danger'; stateText = 'Refused'; break;
                            default: stateClass = 'badge-light-warning'; stateText = 'Unknown';
                        }
                        return `<span class="badge ${stateClass}">${stateText}</span>`;
                    }
                },
                { data: 'invoice.amount', title: 'Amount' },
                { data: 'invoice.date', title: 'Date' },
                {
                    data: 'customer',
                    title: 'Customer Name',
                    render: function(data, type, row) {
                        return `${data.first_name} ${data.last_name}`;
                    }
                },
                { data: null, title: 'Actions', orderable: false, className: 'text-end', render: function(data, type, row) {
                        // Action buttons here, same as in your original setup
                        return `<a href="/detailscustomer/${row.customer.id}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"><i class="fas fa-eye"></i></a>`;
                    }
                }
            ],
            columnDefs: [
                // Define column properties, such as the checkbox column
            ]
        });
    };

    // Public methods
    return {
        init: function () {
            initDatatable();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTDatatablesServerSide.init();
});
