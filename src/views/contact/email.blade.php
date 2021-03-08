@component('mail::message')
# Introduction
Name: {{$contact->name}}
Message: {{$contact->message}}


@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
