@component('mail::message')
# مقدمة

تم استلام تسجيلك بنجاح وهو الآن قيد التحليل.

@component('mail::button', ['url' => ''])
نص الزر
@endcomponent

شكراً لك،<br>
{{ config('app.name') }}
@endcomponent