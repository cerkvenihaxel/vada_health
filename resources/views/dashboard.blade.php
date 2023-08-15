<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel principal') }}
        </h2>
    </x-slot>
    @livewireStyles

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:front.dashboard/>
            <livewire:front.dashboard.components.quick-start />
        </div>
    </div>

    @livewireScripts
</x-app-layout>
