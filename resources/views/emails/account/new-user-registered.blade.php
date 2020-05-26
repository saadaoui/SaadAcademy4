@component('mail::message')
# Introduction

User {{ $user->formatedName() }} has registered.


Thanks,<br>
{{ config('app.name') }}
@endcomponent
