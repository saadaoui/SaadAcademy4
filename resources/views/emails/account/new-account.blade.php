@component('mail::message')
# {{__('email.confirm_title')}}

{{__('email.confirm_message')}}

@component('mail::button', ['url' => route('email_confirmation', [ 'token'=>$user->email_token])])
{{__('email.confirm_button')}}
@endcomponent

{{__('email.confirm_thanks')}}<br>
{{ config('app.name') }}
@endcomponent
