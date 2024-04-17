@component('mail::message')

<h1 style="text-align: right; direction: rtl;"> مرحبا  {{ $customer->first_name }}  </h1>
<p style="text-align: right; direction: rtl;">
تم استلام تسجيلك بنجاح وهو الآن قيد التحليل.
</p>
شكراً لك،<br>

@endcomponent

