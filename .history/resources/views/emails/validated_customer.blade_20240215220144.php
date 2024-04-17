@component('mail::message')
<h1 style="text-align: right; direction: rtl;">تسجيل عميل جديد</h1>

<p style="text-align: right; direction: rtl;">
لقد قام عميل جديد بالتسجيل. إليك بياناته:
</p>

<ul style="text-align: right; direction: rtl;">
    <li><strong>الاسم:</strong> {{ $customer->first_name }} {{ $customer->last_name }}</li>
    <li><strong>الشركة:</strong> {{ $customer->company_name }}</li>
    <li><strong>المنصب:</strong> {{ $customer->position }}</li>
    <li><strong>رقم الهاتف:</strong> {{ $customer->phone_number }}</li>
    <li><strong>البريد الإلكتروني:</strong> {{ $customer->email }}</li>
    <li><strong>المدينة:</strong> {{ $customer->city }}</li>
    <li><strong>البلد:</strong> {{ $customer->country }}</li>
    <li><strong>التخصص:</strong> {{ $customer->specialization }}</li>
</ul>

<p style="text-align: right; direction: rtl;">
يرجى المتابعة مع الإجراءات اللازمة.
</p>

<p style="text-align: right; direction: rtl;">
شكراً لك,<br>
</p>

@endcomponent
