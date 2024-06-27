<x-mail-layout>
    <x-slot name="header">
        <x-mail-header :url="config('app.url')">
            {{ config('app.name') }}
        </x-mail-header>
    </x-slot>

    {{-- Body --}}
    <x-mail-panel>
        <x-slot name="heading">
            New Theme Email
        </x-slot>

        Hello {{ $data['name'] }},

        This is an example email with a new theme in Laravel.
    </x-mail-panel>

    <x-slot name="footer">
        <x-mail-footer>
            &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
        </x-mail-footer>
    </x-slot>
</x-mail-layout>
