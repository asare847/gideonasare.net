
@component('mail::message')

<strong>Name</strong>{{ $data['name'] }}<br>
<strong>Email</strong>{{ $data['email'] }}<br>
{{ $data['message'] }}

{{ config('app.name') }}
@endcomponent
</body>