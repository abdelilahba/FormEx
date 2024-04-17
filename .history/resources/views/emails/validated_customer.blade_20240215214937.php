@component('mail::message')
# تسجيل عميل جديد

لقد قام عميل جديد بالتسجيل. إليك بياناته:

- **الاسم:** {{ $customer->first_name }} {{ $customer->last_name }}
- **الشركة:** {{ $customer->company_name }}
- **المنصب:** {{ $customer->position }}
- **رقم الهاتف:** {{ $customer->phone_number }}
- **البريد الإلكتروني:** {{ $customer->email }}
- **المدينة:** {{ $customer->city }}
- **البلد:** {{ $customer->country }}
- **التخصص:** {{ $customer->specialization }}

يرجى المتابعة مع الإجراءات اللازمة.

شكراً لك,<br>
{{ config('app.name') }}
@endcomponent
