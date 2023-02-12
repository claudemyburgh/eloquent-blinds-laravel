<x-mail::message>

Dear {{ $name }},

Thank you for expressing an interest in our service. We appreciate your time and consideration.

We will be in touch with you as soon as possible to discuss your needs and how our service can be of benefit to you.

If you have any further questions or concerns in the meantime, please do not hesitate to contact us.

Thank you again for your interest and we look forward to the opportunity to work with you.


<x-mail::button url="https://facebook.com/eloquentblinds">
    Like Us on Facebook
</x-mail::button>

Best regards, <br>
{{ config('app.name') }}
</x-mail::message>
