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
<canvas id="kt_chartjs_1" class="mh-400px"></canvas>
<div class="card card-bordered">
    <div class="card-body">
        <div id="kt_apexcharts_1" style="height: 350px;"></div>
    </div>
</div>
@endsection
@push('scripts')
<script src="{{asset('charts/charts.js')}}"></script>
<script src="{{asset('charts/charts1.js')}}"></script>
@endpush