<x-mail::message>

Chage your passord.

<x-mail::button :url="'http://localhost:8000/admin/reset-password'">
Reset Password
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
