var KTDatatablesServerSide = function () {
    var dt;

    var initDatatable = function () {
        dt = $("#kt_datatable_example_1").DataTable({
            processing: true,
            serverSide: true,
            ajax: "http://127.0.0.1:8000/api/invoices",
            columns: [
                { data: 'id', title: 'Invoice ID' },
                { data: 'customer.first_name', title: 'First Name', 
                  render: function(data, type, row) {
                      return row.customer ? row.customer.first_name : '';
                  }
                },
                { data: 'customer.last_name', title: 'Last Name', 
                  render: function(data, type, row) {
                      return row.customer ? row.customer.last_name : '';
                  }
                },
                { data: 'amount', title: 'Amount' },
                { data: 'state', title: 'State', 
                  render: function(data, type, row) {
                      switch(row.state) {
                          case 1: return '<span class="badge badge-success">Paid</span>';
                          case 2: return '<span class="badge badge-danger">Refused</span>';
                          default: return '<span class="badge badge-secondary">Unknown</span>';
                      }
                  }
                },
                { data: 'date', title: 'Date' },
                { data: 'customer.email', title: 'Email', 
                  render: function(data, type, row) {
                      return row.customer ? row.customer.email : '';
                  }
                },
                { data: 'customer.phone_number', title: 'Phone Number',
                  render: function(data, type, row) {
                      return row.customer ? row.customer.phone_number : '';
                  }
                },
                // Actions column
                { data: null, title: 'Actions', orderable: false, searchable: false, 
                  render: function(data, type, row) {
                      return '<a href="/detailscustomer/' + row.customer.id + '" class="btn btn-info btn-sm">View</a>';
                  }
                }
            ]
        });
    };

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
