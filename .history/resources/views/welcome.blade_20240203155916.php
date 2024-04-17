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
    <div class="row equal-height">
      <!-- Description Section -->
      <div class="col-md-7 description-section">
        <h2>UN LOGICIEL DE GESTION SIMPLE ET EFFICACE !</h2>
        <p class="des">Manageo, est un logiciel de gestion commerciale complet (CRM, Ventes, Achats, Clients, Fournisseurs, Recouvrement, TVA, Gestion de Stock, CA, etc.) 100% personnalisable, conçu pour booster votre entreprise en répondant sans cesse à vos besoins en constantes évolutions.</p>
        <p class="des">Choisir notre logiciel pour vous accompagner, c’est mettre à profit un outil puissant et intuitif afin de dynamiser votre business. Manageo vous permettra de vous concentrer sur le développement de votre activité.</p>
        <p class="des"> Demandez dès maintenant votre démonstration personnalisée pour découvrir comment Manageo peut booster votre entreprise et vous faire gagner du temps et de l'argent. Rejoignez les entreprises qui ont déjà fait confiance à Manageo et prenez le contrôle de votre entreprise dès aujourd'hui !</p>
      </div>
      
      <!-- Form Section -->
      <div class="col-md-5 form-section">
        <form>
          <div class="form-group " >
            <label for="companyName">Raison Sociale *</label>
            <input type="text" class="form-control" id="companyName" required>
          </div>
          <div class="form-group">
            <label for="lastName">Nom *</label>
            <input type="text" class="form-control" id="lastName" required>
          </div>
          <div class="form-group">
            <label for="firstName">Prénom *</label>
            <input type="text" class="form-control" id="firstName" required>
          </div>
          <div class="form-group">
            <label for="function">Fonction *</label>
            <input type="text" class="form-control" id="function" required>
          </div>
          <div class="form-group">
            <label for="phone">Téléphone *</label>
            <input type="tel" class="form-control" id="phone" required>
          </div>
          <div class="form-group">
            <label for="email">Email *</label>
            <input type="email" class="form-control" id="email" required>
          </div>
          <div class="form-group">
            <label for="city">Ville *</label>
            <input type="text" class="form-control" id="city" required>
          </div>
          <div class="form-group">
            <label for="country">Pays *</label>
            <div  style="width: 66% !important;">
    <select class="form-select" placeholder="..." id="kt_docs_select2_country">
     
        <option value="AF" data-kt-select2-country="assets/media/flags/morocco.svg">Maroc</option>
        <option value="AX" data-kt-select2-country="assets/media/flags/france.svg">France</option>
        ...
    </select>
   
</div>
        </div>
          <button type="submit" class="btn btn-red">Parler à un conseiller</button>
        </form>
      </div>
    </div>
  </div>



@endsection
@push('scripts')
<script>

    // Format options
var optionFormat = function(item) {
    if ( !item.id ) {
        return item.text;
    }

    var span = document.createElement('span');
    var imgUrl = item.element.getAttribute('data-kt-select2-country');
    var template = '';

    template += '<img src="' + imgUrl + '" class="rounded-circle h-20px me-2" alt="image"/>';
    template += item.text;

    span.innerHTML = template;

    return $(span);
}

// Init Select2 --- more info: https://select2.org/
$('#kt_docs_select2_country').select2({
    templateSelection: optionFormat,
    templateResult: optionFormat
});
</script>
<script>     var input = document.querySelector("#phone");
   window.intlTelInput(input,{
  utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js",
  fr: "France",
  ma: "Maroc"

});</script>
@endpush