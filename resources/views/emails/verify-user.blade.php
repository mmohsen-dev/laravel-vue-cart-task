@component('mail::message')
# Verify Account

This email was sent to you to confirm your email, please click on the button,

@component('mail::button', ['url' => route('verfiy-account', [$data['id'], $data['verify_token']]) ])
Verify
@endcomponent
Or you can click on the link below <br>
<a href="{{ route('verfiy-account', [$data['id'], $data['verify_token']]) }}">{{ route('verfiy-account', [$data['id'], $data['verify_token']]) }}</a>

<br>Thanks,<br>
{{ config('app.name') }}
@endcomponent
