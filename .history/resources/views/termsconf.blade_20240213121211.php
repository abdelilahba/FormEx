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
<div class="container mt-5">
    <h1 class="text-center">{{ __('Confidentiality Agreement') }}</h1>
    <div class="mt-4">
        <p>{{ __('Between') }} <strong>[{{ __('Your Name/Company') }}]</strong>, {{ __('hereinafter referred to as the "Discloser"') }}, and <strong>[{{ __('Counterparty Name/Company') }}]</strong>, {{ __('hereinafter referred to as the "Receiver"') }}, the present Confidentiality Agreement (the "Agreement") is concluded as of <strong>[{{ __('Date') }}]</strong>.</p>

        <h2>{{ __('1. Purpose') }}</h2>
        <p>{{ __('The Receiver hereby commits to not disclose any confidential information disclosed by the Discloser in the context of') }} <em>[{{ __('briefly describe the purpose') }}]</em>.</p>

        <h2>{{ __('2. Confidential Information') }}</h2>
        <p>{{ __('As confidential information under this agreement is considered all data, information, documents, software, or materials in any form, whether written, oral, or in another format, which are disclosed by the Discloser to the Receiver. This excludes what is or becomes public without violation of this Agreement by the Receiver.') }}</p>

        <h2>{{ __('3. Obligation of Confidentiality') }}</h2>
        <p>{{ __('The Receiver agrees to:') }}</p>
        <ul>
            <li>{{ __('Not use the confidential information for any purposes other than those set forth herein.') }}</li>
            <li>{{ __('Not disclose any confidential information to third parties, except with the prior written consent of the Discloser.') }}</li>
            <li>{{ __('Take all necessary measures to protect the confidentiality of the confidential information and prevent its disclosure.') }}</li>
        </ul>

        <h2>{{ __('4. Duration') }}</h2>
        <p>{{ __('This Agreement is effective as of the signing date and remains in force for a duration of') }} <strong>[{{ __('Number of years') }}]</strong> {{ __('years from that date, except in case of earlier termination by one of the parties with a written notice of') }} <strong>[{{ __('Number of days') }}]</strong> {{ __('days.') }}</p>

        <h2>{{ __('5. Return or Destruction of Information') }}</h2>
        <p>{{ __('Upon the Discloser\'s request, the Receiver agrees to return or destroy all received confidential information, without keeping copies.') }}</p>

        <h2>{{ __('6. Applicable Law and Jurisdiction') }}</h2>
        <p>{{ __('This Agreement is governed by the laws of') }} <strong>[{{ __('Jurisdiction') }}]</strong> {{ __('and any dispute relating to this Agreement shall be subject to the exclusive jurisdiction of the courts of') }} <strong>[{{ __('Jurisdiction') }}]</strong>.</p>

        <div class="signatures mt-4">
            <p>{{ __('Executed in two original copies, each party acknowledging having received theirs.') }}</p>
            <div><strong>{{ __('For the Discloser:') }}</strong></div>
            <p>{{ __('Name') }}:<br>{{ __('Position') }}:<br>{{ __('Signature') }}:<br>{{ __('Date') }}:</p>
            <div><strong>{{ __('For the Receiver:') }}</strong></div>
            <p>{{ __('Name') }}:<br>{{ __('Position') }}:<br>{{ __('Signature') }}:<br>{{ __('Date') }}:</p>
        </div>
    </div>
</div>
@push("scripts")
    <link href="{{asset('cssterm.css')}} " rel="stylesheet">
@endpush