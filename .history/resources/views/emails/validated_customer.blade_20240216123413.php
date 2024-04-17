@component('mail::message')

Bonjour {{ $customer->first_name }},

Nous sommes ravis que vous ayez décidé de rejoindre Khabirak ! Vous êtes à un pas de finaliser votre inscription et de commencer à explorer toutes les fonctionnalités que nous avons à offrir.

Pour compléter votre inscription, veuillez cliquer sur le bouton ci-dessous:

@component('mail::button', ['url' => $link])
Cliquez ici pour compléter votre inscription
@endcomponent


Si vous avez des questions ou si vous avez besoin d'assistance supplémentaire, n'hésitez pas à contacter notre équipe de support à support@khabirak.tech.

Nous sommes impatients de vous accueillir au sein de notre communauté !

Cordialement,

{{-- Add your additional content here --}}
Merci de faire partie de notre communauté en pleine croissance. Nous sommes là pour vous soutenir à chaque étape de votre parcours avec nous. N'oubliez pas de suivre nos réseaux sociaux pour rester à jour avec les dernières nouvelles et mises à jour.

@endcomponent
