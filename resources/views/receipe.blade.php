@component('mail::message')
# Introduction

{{$receipe->name}}
The Receipe Has Been Stored

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
