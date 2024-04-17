@extends('master1')

@section('title', "Parcelle")

@section('head')
    <link href="{{asset('assets/css/styleSelect.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
<link href="
https://cdn.jsdelivr.net/npm/bootstrap-select-country@4.2.0/dist/css/bootstrap-select-country.min.css
" rel="stylesheet">

 
@endsection
@section('content')




<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h4 class="card-title">Customers List</h4>
                </div>
                <div class="card-body">
                    <table id="kt_datatable_example_1" class="table table-hover dt-responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Email</th>
                                <th>TELE</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data will be injected here from server-side or via JavaScript -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!--end::Datatable-->
@endsection
@push('scripts')
<script src="{{asset('custdata.js')}}"></script>


<script src="{{asset('/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>

@endpush
