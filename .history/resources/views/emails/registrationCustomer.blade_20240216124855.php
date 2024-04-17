@component('mail::message')
# مقدمة 
<h1 style="text-align: right; direction: rtl;">  {{ $customer->first_name }} مرحبا </h1>

تم استلام تسجيلك بنجاح وهو الآن قيد التحليل.

نص الزر
@endcomponent

شكراً لك،<br>
{{ config('app.name') }}
@endcomponent