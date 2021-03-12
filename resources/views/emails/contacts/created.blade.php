@component('mail::message')
# Hi, {{ $contact->name }}

Welcome to {{ config('app.name') }}


Thanks,<br>
{{ config('app.name') }}
@endcomponent