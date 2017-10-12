@component('mail::message')
# Introduction

Welcome, {{ $user->name }}

@component('mail::button', ['url' => env('APP_URL')])
Visit to the site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
