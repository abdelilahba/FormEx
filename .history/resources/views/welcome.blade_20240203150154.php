@extends('master1')

@section('title', "Parcelle")

@section('head')
    <link href="{{asset('assets/css/styleSelect.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
<link href="
https://cdn.jsdelivr.net/npm/bootstrap-select-country@4.2.0/dist/css/bootstrap-select-country.min.css
" rel="stylesheet">
<style>
    .form-section {
      background-color: #f7f7f7;
      padding: 30px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
  
    .description-section {
      padding: 30px;
      font-size: 0.9rem; /* Adjust font size for the description */

    }
  
    .btn-red {
      background-color: #ff0000;
      color: white;
      border: none;
      margin-top: auto; /* pushes the button to the bottom */
      max-width: 66%;

    }
  
    .equal-height {
      display: flex;
      flex-wrap: wrap;
    }
  
    .equal-height > [class*='col-'] {
      display: flex;
      flex-direction: column;
    }
  
    /* Make sure the button sticks to the bottom */
    .form-section form {
      display: flex;
      flex-direction: column;
      height: 100%;
    }
  
    .form-section button[type="submit"] {
      margin-top: auto;
    }
    .form-section label {
        font-size: inherit;
  }
  .des{
    
    font-size: 17px;
    line-height: 30px;
    margin: 20px 0;

  }
  .form-group > input,
.form-group > select {
  max-width: 66%;


}
.form-control {
 
    color: #617181;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #a2b0bd;
    border-radius: .25rem;
 
}

  </style>
 
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
            <select class="selectpicker countrypicker" data-flag="true" ></select>
        </div>
          <button type="submit" class="btn btn-red">Parler à un conseiller</button>
        </form>
      </div>
    </div>
  </div>

<h1>hello world</h1>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.9.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- bootstrap-select JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script src="
https://cdn.jsdelivr.net/npm/bootstrap-select-country@4.2.0/dist/js/bootstrap-select-country.min.js
"></script>
<!-- bootstrap-select-country JS -->

<!-- Initialize bootstrap-select-country for the select element -->
<script>
    $('.countrypicker').selectpicker();
</script>
@endsection