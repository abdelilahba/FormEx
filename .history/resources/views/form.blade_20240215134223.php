<div class="col-md-5 form-section">
   <form class="form fv-plugins-bootstrap5 fv-plugins-framework" id="customerForm"  method="POST"   >
      @csrf
      <!-- Vos champs de formulaire existants -->
      <div class="form-group">
         <label for="companyName">{{ __('messages.social_reason') }}</label>
         <input type="text" class="form-control" id="companyName" name="companyName" required>
      </div>
      <div class="form-group">
         <label for="lastName">{{ __('messages.last_name') }}</label>
         <input type="text" class="form-control" id="lastName" name="last_name" required>
      </div>
      <div class="form-group">
         <label for="firstName">{{ __('messages.first_name') }} </label>
         <input type="text" class="form-control" id="firstName" name="first_name" required>
      </div>
      <div class="form-group">
         <label for="function">{{ __('messages.function') }} </label>
         <input type="text" class="form-control" id="function" name="position" required>
      </div>
      <div class="form-group">
         <label for="phone">{{ __('messages.phone') }} </label>
         <input type="tel" class="form-control" id="phone" name="phone_number" required>
      </div>
      <div class="form-group">
         <label for="email">{{ __('messages.email') }} </label>
         <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
         <label for="city">{{ __('messages.city') }} </label>
         <input type="text" class="form-control" id="city" name="city" required>
      </div>
      <div class="form-group">
         <label for="country">{{ __('messages.country') }} </label>
         <div style="width: 66% !important;">
            <select class="form-select form-control" name="country" data-control="select2" id="kt_docs_select2_country">
               <option value="AF" data-kt-select2-country="assets/media/flags/morocco.svg">{{ __('messages.morroco') }}</option>
               <option value="AX" data-kt-select2-country="assets/media/flags/france.svg">{{ __('messages.french') }}</option>
            </select>
         </div>
      </div>
      <div class="form-group">
         <label for="specialization">{{ __('messages.specialization') }} </label>
         <div style="width: 66% !important;">
            <select class="form-select form-control" name="specialization" data-control="select2">
               <option value="RealEstate">{{ __('messages.immoblie') }}</option>
               <option value="Forensic">{{ __('messages.Forensique') }}</option>
               <option value="IT">{{ __('messages.Informatique') }}</option>
            </select>
         </div>
      </div>
      <!-- Case à cocher pour l'accord de confidentialité -->
      <div class="checkbox-wrapper-1">
  <input id="example-1" class="substituted" type="checkbox" aria-hidden="true" />
  <label for="example-1">{{ __('messages.accept') }} <a href="{{ route('terms', app()->getLocale()) }}">{{ __('messages.terms_agreement') }}</a>.</label>
</div>

      <!-- Bouton de soumission -->
      <button type="submit" class="btn btn-red"><i class="fas fa-phone pr-2" aria-hidden="true"></i>{{ __('messages.talk_to_advisor') }}</button>
   </form>
</div>

