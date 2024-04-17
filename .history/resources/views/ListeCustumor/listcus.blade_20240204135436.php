@section('title', "Parcelle")

@section('head')
    <link href="{{asset('assets/css/styleSelect.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  
@endsection

@section('content')
<div class="container mt-5">
    <div class="datatable-container">
        <table id="kt_datatable_example_1" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Tele</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data will be injected here by DataTables -->
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="{{asset('js/custdata.js')}}"></script> <!-- Custom JS for DataTable -->
@endpush