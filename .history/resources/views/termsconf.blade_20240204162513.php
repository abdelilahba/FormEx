@extends('master1')

@section('title', "Parcelle")

@section('head')
    <link href="{{asset('assets/css/styleSelect.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
<link href="
https://cdn.jsdelivr.net/npm/bootstrap-select-country@4.2.0/dist/css/bootstrap-select-country.min.css
" rel="stylesheet">
<style>.container {
    max-width: 800px;
    margin: auto;
    background: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1, h2 {
    color: red;
}

ul {
    margin: 10px 0;
    padding-left: 20px;
}

.signatures p, .signatures div {
    margin: 10px 0;
}

p {
    text-align: justify;
}</style>

 
@endsection
@section('content')
<div class="container">
        <h1>Accord de Confidentialité</h1>
        <p>Entre <strong>[Votre Nom/Entreprise]</strong>, ci-après désigné(e) le « Divulgateur », et <strong>[Nom de la contrepartie/Entreprise]</strong>, ci-après désigné(e) le « Récepteur », est conclu le présent Accord de Confidentialité (« Accord ») à compter du <strong>[Date]</strong>.</p>

        <h2>1. Objet</h2>
        <p>Le Récepteur s'engage par les présentes à ne divulguer aucune information confidentielle divulguée par le Divulgateur dans le cadre de <em>[décrire brièvement l'objet]</em>.</p>

        <h2>2. Informations confidentielles</h2>
        <p>Sont considérées comme informations confidentielles aux termes du présent accord toutes données, informations, documents, logiciels, ou matériaux quelconques, qu'ils soient écrits, oraux ou sous tout autre format, qui sont divulgués par le Divulgateur au Récepteur. Cela exclut ce qui est ou devient public sans violation de cet Accord par le Récepteur.</p>

        <h2>3. Obligation de confidentialité</h2>
        <p>Le Récepteur s'engage à :</p>
        <ul>
            <li>Ne pas utiliser les informations confidentielles à d'autres fins que celles définies dans le présent Accord.</li>
            <li>Ne divulguer aucune information confidentielle à des tiers, sauf avec le consentement écrit préalable du Divulgateur.</li>
            <li>Prendre toutes les mesures nécessaires pour protéger la confidentialité des informations confidentielles et éviter leur divulgation.</li>
        </ul>

        <h2>4. Durée</h2>
        <p>Cet Accord prend effet à la date de sa signature et reste en vigueur pendant une durée de <strong>[Nombre d'années]</strong> années après cette date, sauf résiliation anticipée par l'une des parties avec un préavis écrit de <strong>[Nombre de jours]</strong> jours.</p>

        <h2>5. Retour ou destruction des informations</h2>
        <p>À la demande du Divulgateur, le Récepteur s'engage à retourner ou à détruire toutes les informations confidentielles reçues, sans en garder de copies.</p>

        <h2>6. Loi applicable et juridiction</h2>
        <p>Cet Accord est régi par les lois de <strong>[Juridiction]</strong> et tout litige relatif à cet Accord sera soumis à la compétence exclusive des tribunaux de <strong>[Juridiction]</strong>.</p>

        <div class="signatures">
            <p>Fait en deux exemplaires originaux, chacune des parties reconnaissant avoir reçu le sien.</p>
            <div><strong>Pour le Divulgateur :</strong></div>
            <p>Nom :<br>Fonction :<br>Signature :<br>Date :</p>
            <div><strong>Pour le Récepteur :</strong></div>
            <p>Nom :<br>Fonction :<br>Signature :<br>Date :</p>
        </div>
    </div>

@endsection