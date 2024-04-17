@component('mail::message')
# مقدمة 
<h1 style="text-align: right; direction: rtl;">  {{ $customer->first_name }} مرحبا </h1>
<p style="text-align: right; direction: rtl;">
تم استلام تسجيلك بنجاح وهو الآن قيد التحليل.

</p>

@endcomponent

شكراً لك،<br>
{{ config('app.name') }}
@endcomponent