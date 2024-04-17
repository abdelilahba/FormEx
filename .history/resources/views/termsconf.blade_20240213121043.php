@extends('master1')

@section('title', "Parcelle")
@section('hideSidebar')


@endsection
@section('hideHeader')
@endsection
@section('head')
    <link href="{{asset('assets/css/styleSelect.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
<link href="
https://cdn.jsdelivr.net/npm/bootstrap-select-country@4.2.0/dist/css/bootstrap-select-country.min.css
" rel="stylesheet">

 
@endsection
@section('content')
<div class="container mt-4">
    <h1 class="text-center mb-4">{{ __('Confidentiality Agreement') }}</h1>
    <div class="text-{{ app()->getLocale() == 'ar' ? 'right' : 'left' }}">
        <p>{{ __('Between') }} <strong>[{{ __('Discloser') }}]</strong> {{ __('and') }} <strong>[{{ __('Receiver') }}]</strong>, {{ __('Agreement Date') }} <strong>[{{ __('Date') }}]</strong>.</p>

        <h2>{{ __('Purpose') }}</h2>
        <p>{{ __('Purpose Detail') }}</p>

        <h2>{{ __('Confidential Information') }}</h2>
        <p>{{ __('Confidential Information Detail') }}</p>

        <h2>{{ __('Confidentiality Obligation') }}</h2>
        <ul>
            <li>{{ __('Confidentiality Obligation Detail 1') }}</li>
            <li>{{ __('Confidentiality Obligation Detail 2') }}</li>
            <li>{{ __('Confidentiality Obligation Detail 3') }}</li>
        </ul>

        <h2>{{ __('Duration') }}</h2>
        <p>{{ __('Duration Detail') }}</p>

        <h2>{{ __('Return or Destruction of Information') }}</h2>
        <p>{{ __('Return or Destruction of Information Detail') }}</p>

        <h2>{{ __('Applicable Law and Jurisdiction') }}</h2>
        <p>{{ __('Applicable Law and Jurisdiction Detail') }}</p>

        <div class="signatures mt-4">
            <p>{{ __('Signature Detail') }}</p>
            <div><strong>{{ __('For the Discloser') }}:</strong></div>
            <p>{{ __('Name') }}:<br>{{ __('Position') }}:<br>{{ __('Signature') }}:<br>{{ __('Date') }}:</p>
            <div><strong>{{ __('For the Receiver') }}:</strong></div>
            <p>{{ __('Name') }}:<br>{{ __('Position') }}:<br>{{ __('Signature') }}:<br>{{ __('Date') }}:</p>
        </div>
    </div>
</div>
@push("scripts")
    <link href="{{asset('cssterm.css')}} " rel="stylesheet">
@endpush