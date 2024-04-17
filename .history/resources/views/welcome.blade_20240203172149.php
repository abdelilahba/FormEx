@extends('master1')

@section('title', "Parcelle")

@section('head')
    <link href="{{asset('assets/css/styleSelect.css')}}" rel="stylesheet" type="text/css" />
    


 
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

<div class="card" id="kt_pricing" bis_skin_checked="1">     
    <!--begin::Card body-->
    <div class="card-body p-lg-17" bis_skin_checked="1">
        <!--begin::Plans-->
        <div class="d-flex flex-column" bis_skin_checked="1">
            <!--begin::Heading-->
            <div class="mb-13 text-center" bis_skin_checked="1">
                <h1 class="fs-2hx fw-bold mb-5">Choose Your Plan</h1>

                <div class="text-gray-600 fw-semibold fs-5" bis_skin_checked="1">
                    If you need more info about our pricing, please check <a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.
                </div>
            </div>
            <!--end::Heading-->

            <!--begin::Nav group-->
            <div class="nav-group nav-group-outline mx-auto mb-15" data-kt-buttons="true" data-kt-initialized="1" bis_skin_checked="1">
                <button class="btn btn-color-gray-600 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">
                    Monthly
                </button>

                <button class="btn btn-color-gray-600 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">
                    Annual
                </button>
            </div>
            <!--end::Nav group-->

            <!--begin::Row-->                             
            <div class="row g-10" bis_skin_checked="1">
                                    <!--begin::Col-->
                    <div class="col-xl-4" bis_skin_checked="1">
                        <div class="d-flex h-100 align-items-center" bis_skin_checked="1">
                            <!--begin::Option-->
                            <div class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-15 px-10" bis_skin_checked="1">
                                <!--begin::Heading-->
                                <div class="mb-7 text-center" bis_skin_checked="1">
                                    <!--begin::Title-->
                                    <h1 class="text-gray-900 mb-5 fw-bolder">Startup</h1>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="text-gray-600 fw-semibold mb-5" bis_skin_checked="1">
                                        Optimal for 10+ team size<br> and new startup                                                 
                                    </div>
                                    <!--end::Description-->

                                    <!--begin::Price-->
                                    <div class="text-center" bis_skin_checked="1">
                                        <span class="mb-2 text-primary">$</span>

                                        <span class="fs-3x fw-bold text-primary" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">
                                            39                                        </span>
                                        
                                        <span class="fs-7 fw-semibold opacity-50">/ 
                                            <span data-kt-element="period">Mon</span>
                                        </span>
                                    </div>
                                    <!--end::Price-->
                                </div>
                                <!--end::Heading-->

                                <!--begin::Features-->
                                <div class="w-100 mb-10" bis_skin_checked="1">  
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                    Up to 10 Active Users                                                </span> 
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                    Up to 30 Project Integrations                                                </span> 
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                    Analytics Module                                                </span> 
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">
                                                    Finance Module                                                </span> 
                                                <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">
                                                    Accounting Module                                                </span> 
                                                <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">
                                                    Network Platform                                                </span> 
                                                <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center " bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">
                                                    Unlimited Cloud Space                                                </span> 
                                                <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                            
                                </div>
                                <!--end::Features-->         

                                <!--begin::Select-->
                                <a href="#" class="btn btn-sm btn-primary">Select</a>
                                <!--end::Select-->
                            </div>
                            <!--end::Option-->
                        </div>
                    </div>
                    <!--end::Col-->
                                    <!--begin::Col-->
                    <div class="col-xl-4" bis_skin_checked="1">
                        <div class="d-flex h-100 align-items-center" bis_skin_checked="1">
                            <!--begin::Option-->
                            <div class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-20 px-10" bis_skin_checked="1">
                                <!--begin::Heading-->
                                <div class="mb-7 text-center" bis_skin_checked="1">
                                    <!--begin::Title-->
                                    <h1 class="text-gray-900 mb-5 fw-bolder">Advanced</h1>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="text-gray-600 fw-semibold mb-5" bis_skin_checked="1">
                                        Optimal for 100+ team siz<br>e and grown company                                                 
                                    </div>
                                    <!--end::Description-->

                                    <!--begin::Price-->
                                    <div class="text-center" bis_skin_checked="1">
                                        <span class="mb-2 text-primary">$</span>

                                        <span class="fs-3x fw-bold text-primary" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">
                                            339                                        </span>
                                        
                                        <span class="fs-7 fw-semibold opacity-50">/ 
                                            <span data-kt-element="period">Mon</span>
                                        </span>
                                    </div>
                                    <!--end::Price-->
                                </div>
                                <!--end::Heading-->

                                <!--begin::Features-->
                                <div class="w-100 mb-10" bis_skin_checked="1">  
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                    Up to 10 Active Users                                                </span> 
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                    Up to 30 Project Integrations                                                </span> 
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                    Analytics Module                                                </span> 
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                    Finance Module                                                </span> 
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                    Accounting Module                                                </span> 
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">
                                                    Network Platform                                                </span> 
                                                <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center " bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">
                                                    Unlimited Cloud Space                                                </span> 
                                                <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                            
                                </div>
                                <!--end::Features-->         

                                <!--begin::Select-->
                                <a href="#" class="btn btn-sm btn-primary">Select</a>
                                <!--end::Select-->
                            </div>
                            <!--end::Option-->
                        </div>
                    </div>
                    <!--end::Col-->
                                    <!--begin::Col-->
                    <div class="col-xl-4" bis_skin_checked="1">
                        <div class="d-flex h-100 align-items-center" bis_skin_checked="1">
                            <!--begin::Option-->
                            <div class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-15 px-10" bis_skin_checked="1">
                                <!--begin::Heading-->
                                <div class="mb-7 text-center" bis_skin_checked="1">
                                    <!--begin::Title-->
                                    <h1 class="text-gray-900 mb-5 fw-bolder">Enterprise</h1>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="text-gray-600 fw-semibold mb-5" bis_skin_checked="1">
                                        Optimal for 1000+ team<br> and enterpise                                                 
                                    </div>
                                    <!--end::Description-->

                                    <!--begin::Price-->
                                    <div class="text-center" bis_skin_checked="1">
                                        <span class="mb-2 text-primary">$</span>

                                        <span class="fs-3x fw-bold text-primary" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">
                                            999                                        </span>
                                        
                                        <span class="fs-7 fw-semibold opacity-50">/ 
                                            <span data-kt-element="period">Mon</span>
                                        </span>
                                    </div>
                                    <!--end::Price-->
                                </div>
                                <!--end::Heading-->

                                <!--begin::Features-->
                                <div class="w-100 mb-10" bis_skin_checked="1">  
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                    Up to 10 Active Users                                                </span> 
                                                    <i class="bi bi-droplet-half text-white"></i><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                    Up to 30 Project Integrations                                                </span> 
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                    Analytics Module                                                </span> 
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                    Finance Module                                                </span> 
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                    Accounting Module                                                </span> 
                                                    <i class="bi bi-circle-square fs-2x"></i><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center mb-5" bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                    Network Platform                                                </span> 
                                                <i class="bi-duotone bi-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                                                            <!--begin::Item-->                                               
                                        <div class="d-flex align-items-center " bis_skin_checked="1">             
                                                                                            <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                    Unlimited Cloud Space                                                </span> 
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                      
                                        </div>
                                        <!--end::Item--> 
                                            
                                </div>
                                <!--end::Features-->         

                                <!--begin::Select-->
                                <a href="#" class="btn btn-sm btn-primary">Select</a>
                                <!--end::Select-->
                            </div>
                            <!--end::Option-->
                        </div>
                    </div>
                    <!--end::Col-->
                            </div>
            <!--end::Row-->   
        </div>   
        <!--end::Plans-->  
    </div>
    <!--end::Card body-->
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