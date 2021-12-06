@component('mail::message')
This Message send From {{$name}}
<br>
<br>
Message:
{{$message}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
