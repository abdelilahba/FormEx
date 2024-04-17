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
        <button type="submit" class="btn btn-red"><i class="fas fa-phone pr-2" aria-hidden="true"></i>Parler à un conseiller</button>
          <!-- <button type="submit" class="btn btn-red">Parler à un conseiller</button> -->
        </form>
      </div>
    </div>
  </div>
  <div class="container mt-5">
  <div class="text-center ">
  <h2 class="title-with-line">Plus de 1000 entreprises utilisent Manageo</h2>

</div>
  <div class="row">
    <div class="col-lg-2 col-md-4 col-sm-6 mb-3 p-2">
      <img src="https://lp.manageo.io/img/mutandis.c9bb7930.png" class="rounded w-100" alt="Company Logo">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 mb-3 p-2">
      <img src="https://lp.manageo.io/img/mutandis.c9bb7930.png" class="rounded w-100" alt="Company Logo">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 mb-3 p-2">
      <img src="https://lp.manageo.io/img/mutandis.c9bb7930.png" class="rounded w-100" alt="Company Logo">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 mb-3 p-2">
      <img src="https://lp.manageo.io/img/mutandis.c9bb7930.png" class="rounded w-100" alt="Company Logo">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 mb-3 p-2">
      <img src="https://lp.manageo.io/img/mutandis.c9bb7930.png" class="rounded w-100" alt="Company Logo">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 mb-3 p-2">
      <img src="https://lp.manageo.io/img/mutandis.c9bb7930.png" class="rounded w-100" alt="Company Logo">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 mb-3 p-2">
      <img src="https://lp.manageo.io/img/mutandis.c9bb7930.png" class="rounded w-100" alt="Company Logo">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 mb-3 p-2">
      <img src="https://lp.manageo.io/img/mutandis.c9bb7930.png" class="rounded w-100" alt="Company Logo">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 mb-3 p-2">
      <img src="https://lp.manageo.io/img/mutandis.c9bb7930.png" class="rounded w-100" alt="Company Logo">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 mb-3 p-2">
      <img src="https://lp.manageo.io/img/mutandis.c9bb7930.png" class="rounded w-100" alt="Company Logo">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 mb-3 p-2">
      <img src="https://lp.manageo.io/img/mutandis.c9bb7930.png" class="rounded w-100" alt="Company Logo">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 mb-3 p-2">
      <img src="https://lp.manageo.io/img/mutandis.c9bb7930.png" class="rounded w-100" alt="Company Logo">
    </div>
    <!-- Repeat the column block for each logo, changing the URL_OF_LOGO_FROM_CDN to the actual CDN URL of the logo -->
  </div>
</div>

<div class="portlet-body">
                                <div class="pricing-content-1">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="price-column-container border-active">
                                                <div class="price-table-head bg-blue">
                                                    <h2 class="no-margin">Budget</h2>
                                                </div>
                                                <div class="arrow-down border-top-blue"></div>
                                                <div class="price-table-pricing">
                                                    <h3>
                                                        <sup class="price-sign">$</sup>24</h3>
                                                    <p>per month</p>
                                                </div>
                                                <div class="price-table-content">
                                                    <div class="row mobile-padding">
                                                        <div class="col-xs-3 text-right mobile-padding">
                                                            <i class="icon-user"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-left mobile-padding">3 Members</div>
                                                    </div>
                                                    <div class="row mobile-padding">
                                                        <div class="col-xs-3 text-right mobile-padding">
                                                            <i class="icon-drawer"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-left mobile-padding">50GB Storage</div>
                                                    </div>
                                                    <div class="row mobile-padding">
                                                        <div class="col-xs-3 text-right mobile-padding">
                                                            <i class="icon-screen-smartphone"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-left mobile-padding">Single Device</div>
                                                    </div>
                                                    <div class="row mobile-padding">
                                                        <div class="col-xs-3 text-right mobile-padding">
                                                            <i class="icon-refresh"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-left mobile-padding">Weekly Backups</div>
                                                    </div>
                                                </div>
                                                <div class="arrow-down arrow-grey"></div>
                                                <div class="price-table-footer">
                                                    <button type="button" class="btn grey-salsa btn-outline sbold uppercase price-button">Sign Up</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="price-column-container border-active">
                                                <div class="price-table-head bg-red">
                                                    <h2 class="no-margin">Solo</h2>
                                                </div>
                                                <div class="arrow-down border-top-red"></div>
                                                <div class="price-table-pricing">
                                                    <h3>
                                                        <sup class="price-sign">$</sup>39</h3>
                                                    <p>per month</p>
                                                </div>
                                                <div class="price-table-content">
                                                    <div class="row mobile-padding">
                                                        <div class="col-xs-3 text-right mobile-padding">
                                                            <i class="icon-user"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-left mobile-padding">5 Members</div>
                                                    </div>
                                                    <div class="row mobile-padding">
                                                        <div class="col-xs-3 text-right mobile-padding">
                                                            <i class="icon-drawer"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-left mobile-padding">100GB Storage</div>
                                                    </div>
                                                    <div class="row mobile-padding">
                                                        <div class="col-xs-3 text-right mobile-padding">
                                                            <i class="icon-screen-smartphone"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-left mobile-padding">Single Device</div>
                                                    </div>
                                                    <div class="row mobile-padding">
                                                        <div class="col-xs-3 text-right mobile-padding">
                                                            <i class="icon-refresh"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-left mobile-padding">Weekly Backups</div>
                                                    </div>
                                                </div>
                                                <div class="arrow-down arrow-grey"></div>
                                                <div class="price-table-footer">
                                                    <button type="button" class="btn grey-salsa btn-outline price-button sbold uppercase">Sign Up</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="price-column-container border-active">
                                                <div class="price-table-head bg-green">
                                                    <h2 class="no-margin">Start up</h2>
                                                </div>
                                                <div class="arrow-down border-top-green"></div>
                                                <div class="price-table-pricing">
                                                    <h3>
                                                        <sup class="price-sign">$</sup>59</h3>
                                                    <p>per month</p>
                                                    <div class="price-ribbon">Popular</div>
                                                </div>
                                                <div class="price-table-content">
                                                    <div class="row mobile-padding">
                                                        <div class="col-xs-3 text-right mobile-padding">
                                                            <i class="icon-user-follow"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-left mobile-padding">20 Members</div>
                                                    </div>
                                                    <div class="row mobile-padding">
                                                        <div class="col-xs-3 text-right mobile-padding">
                                                            <i class="icon-drawer"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-left mobile-padding">500GB Storage</div>
                                                    </div>
                                                    <div class="row mobile-padding">
                                                        <div class="col-xs-3 text-right mobile-padding">
                                                            <i class="icon-cloud-download"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-left mobile-padding">Cloud Syncing</div>
                                                    </div>
                                                    <div class="row mobile-padding">
                                                        <div class="col-xs-3 text-right mobile-padding">
                                                            <i class="icon-refresh"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-left mobile-padding">Daily Backups</div>
                                                    </div>
                                                </div>
                                                <div class="arrow-down arrow-grey"></div>
                                                <div class="price-table-footer">
                                                    <button type="button" class="btn green price-button sbold uppercase">Sign Up</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="price-column-container border-active">
                                                <div class="price-table-head bg-purple">
                                                    <h2 class="no-margin">Enterprise</h2>
                                                </div>
                                                <div class="arrow-down border-top-purple"></div>
                                                <div class="price-table-pricing">
                                                    <h3>
                                                        <sup class="price-sign">$</sup>128</h3>
                                                    <p>per month</p>
                                                </div>
                                                <div class="price-table-content">
                                                    <div class="row mobile-padding">
                                                        <div class="col-xs-3 text-right mobile-padding">
                                                            <i class="icon-users"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-left mobile-padding">100 Members</div>
                                                    </div>
                                                    <div class="row mobile-padding">
                                                        <div class="col-xs-3 text-right mobile-padding">
                                                            <i class="icon-drawer"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-left mobile-padding">2TB Storage</div>
                                                    </div>
                                                    <div class="row mobile-padding">
                                                        <div class="col-xs-3 text-right mobile-padding">
                                                            <i class="icon-cloud-download"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-left mobile-padding">Cloud Syncing</div>
                                                    </div>
                                                    <div class="row mobile-padding">
                                                        <div class="col-xs-3 text-right mobile-padding">
                                                            <i class="icon-refresh"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-left mobile-padding">Weekly Backups</div>
                                                    </div>
                                                </div>
                                                <div class="arrow-down arrow-grey"></div>
                                                <div class="price-table-footer">
                                                    <button type="button" class="btn grey-salsa btn-outline price-button sbold uppercase">Sign Up</button>
                                                </div>
                                            </div>
                                        </div>
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
  ma: "Maroc",

});</script>
@endpush