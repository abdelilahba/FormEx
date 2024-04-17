@extends('master1')

@section('title', "Parcelle")

@section('head')
<link href="{{ asset('assets/css/styleSelect.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-select-country@4.2.0/dist/css/bootstrap-select-country.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<!-- Votre style personnalisé ici -->
<style>
    /* Styles ajoutés */
    .container {
        max-width: 800px;
        margin: auto;
        background: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1, h2 {
        color: #007bff; /* Bleu Bootstrap */
    }

    h1 i, h2 i {
        margin-right: 10px;
    }

    .fa-check-circle {
        color: green;
    }

    .fa-times-circle {
        color: red;
    }

    .fa-info-circle {
        color: #17a2b8; /* Bleu informatif Bootstrap */
    }

    ul {
        margin: 20px 0;
        padding-left: 20px;
    }

    .signatures div {
        margin-bottom: 20px;
    }

    .signatures p {
        margin: 10px 0;
    }

    p, li {
        text-align: justify;
    }

    .form-check-label a {
        text-decoration: none;
        color: #007bff;
    }

    .form-check-label a:hover {
        text-decoration: underline;
    }
</style>
@endsection

@extends('master1')

@section('title', "Accord de Confidentialité")

@section('content')
<div class="container">
    <h1><i class="fas fa-user-secret"></i>Accord de Confidentialité</h1>
    <p><i class="fas fa-info-circle"></i>Entre <strong>[Votre Nom/Entreprise]</strong>, ci-après désigné(e) le « Divulgateur », et <strong>[Nom de la contrepartie/Entreprise]</strong>, ci-après désigné(e) le « Récepteur », est conclu le présent Accord de Confidentialité (« Accord ») à compter du <strong>[Date]</strong>.</p>

    <h2><i class="fas fa-briefcase"></i>1. Objet</h2>
    <p>Le Récepteur s'engage par les présentes à ne divulguer aucune information confidentielle...</p>

    <!-- Répétez pour les autres sections, en ajoutant des icônes appropriées à chaque titre -->

    <div class="signatures">
        <div><i class="fas fa-file-signature"></i><strong>Pour le Divulgateur :</strong></div>
        <p>Nom :<br>Fonction :<br>Signature :<br>Date :</p>
        <div><i class="fas fa-file-signature"></i><strong>Pour le Récepteur :</strong></div>
        <p>Nom :<br>Fonction :<br>Signature :<br>Date :</p>
    </div>
</div>
@endsection
