
@component('mail::message')


Bonjour {{ $customer->first_name }},

Nous sommes ravis que vous ayez décidé de rejoindre Khabirak ! Vous êtes à un pas de finaliser votre inscription et de commencer à explorer toutes les fonctionnalités que nous avons à offrir.

Pour compléter votre inscription, veuillez cliquer sur le bouton ci-dessous:

@component('mail::button', ['url' => $link ])
Cliquez ici pour compléter votre inscription
@endcomponent

Nous vous recommandons de compléter votre inscription dans les 48 heures pour garantir l'activation de votre compte sans délai.

Si vous avez des questions ou si vous avez besoin d'assistance supplémentaire, n'hésitez pas à contacter notre équipe de support à support@khabirak.tech.

Nous sommes impatients de vous accueillir au sein de notre communauté !

Cordialement,

@endcomponent