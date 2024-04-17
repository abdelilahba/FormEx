<div class="col-md-5 form-section">
   <form action="{{ route('submit.form') }}" method="POST">
      @csrf
      <!-- Vos champs de formulaire existants -->
      <div class="form-group">
         <label for="companyName">Raison Sociale *</label>
         <input type="text" class="form-control" id="companyName" name="company_name" required>
      </div>
      <div class="form-group">
         <label for="lastName">Nom *</label>
         <input type="text" class="form-control" id="lastName" name="last_name" required>
      </div>
      <div class="form-group">
         <label for="firstName">Prénom *</label>
         <input type="text" class="form-control" id="firstName" name="first_name" required>
      </div>
      <div class="form-group">
         <label for="function">Fonction *</label>
         <input type="text" class="form-control" id="function" name="position" required>
      </div>
      <div class="form-group">
         <label for="phone">Téléphone *</label>
         <input type="tel" class="form-control" id="phone" name="phone_number" required>
      </div>
      <div class="form-group">
         <label for="email">Email *</label>
         <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
         <label for="city">Ville *</label>
         <input type="text" class="form-control" id="city" name="city" required>
      </div>
      <div class="form-group">
         <label for="country">Pays *</label>
         <div style="width: 66% !important;">
            <select class="form-select form-control" name="country" id="kt_docs_select2_country">
               <option value="AF" data-kt-select2-country="assets/media/flags/morocco.svg">Maroc</option>
               <option value="AX" data-kt-select2-country="assets/media/flags/france.svg">France</option>
            </select>
         </div>
      </div>
      <div class="form-group">
         <label for="specialization">Spécialisation *</label>
         <div style="width: 66% !important;">
            <select class="form-select form-control" name="specialization" data-control="select2">
               <option value="RealEstate">Immobilier</option>
               <option value="Forensic">Forensique</option>
               <option value="IT">Informatique</option>
            </select>
         </div>
      </div>
      <!-- Case à cocher pour l'accord de confidentialité -->
      <div class="form-group form-check">
         <input type="checkbox" class="form-check-input" id="agreement" name="agreement" required>
         <label class="form-check-label" style="color: black;margin-top: 5px;" for="agreement">J'accepte les <a href="#yourLink">termes de l'accord de confidentialité</a>.</label>
      </div>
      <!-- Bouton de soumission -->
      <button type="submit" class="btn btn-red"><i class="fas fa-phone pr-2" aria-hidden="true"></i>Parler à un conseiller</button>
   </form>
</div>
<div class="container mt-5">
   <div class="text-center " >
      <h2 class="title-with-line">Plus de 1000 entreprises utilisent Manageo</h2>
   </div>
</div>
