@component('mail::message')
# Welcome to {{ config('app.name') }}

Thanks for using our service , hope you enjoy ...

@component('mail::button', ['url' => '/home'])
Back to website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
