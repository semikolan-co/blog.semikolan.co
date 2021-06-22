@component('mail::message')
# {{ $maildata['title'] }}

Your message body.

@component('mail::button', ['url' => $maildata['url']])

Verify
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
