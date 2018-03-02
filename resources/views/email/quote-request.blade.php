@component('mail::message')

Client Details
==============

{{ $full_name }}

{{ $phone_number }}, Best time to call: {{ $best_time }}

{{ $email }}


Event Information
=================

Estimated No of guests: {{ $guests_no }}

Event Date: {{ $event_date }}

Event Location: {{ $event_location }}

@component('mail::panel')
ITM Marquees Quote request service
@endcomponent

@endcomponent
