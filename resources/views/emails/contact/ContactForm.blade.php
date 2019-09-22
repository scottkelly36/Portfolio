@component('mail::message')
# Thank you for your message.

<strong>Subject</strong>{{ $data ['subject'] }}<br>
<strong>Name</strong> {{ $data ['name'] }}<br>
<strong>Email</strong> {{ $data ['email'] }}<br>
<strong>Message</strong><br>
{{ $data ['message'] }}
@endcomponent
