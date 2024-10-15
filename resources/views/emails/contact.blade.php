<x-mail::message>
    # Mail From : {{ $name }}
    Send From : {{ $email }}

    {{ $body }}.

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
