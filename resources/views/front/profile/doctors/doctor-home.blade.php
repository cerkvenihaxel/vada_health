<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight transition-opacity">
                {{ __('Gestión médicos') }}
            </h2>
            <div x-data="{ isOpen: false }" class="ml-4 mt-0.5">
                <button @click="isOpen = !isOpen" class="text-gray-400 hover:text-orange-400 cursor-pointer">
                    {{ __('Solicitudes') }}
                </button>
                <div x-show="isOpen" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" @click.away="isOpen = false" class="mt-2 transition-opacity">
                    <x-dropdown-link href="{{route('profile.doctor.new-request')}}">
                        {{ __('Crear pedido médico') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                        {{ __('Pedidos creados') }}
                    </x-dropdown-link>
                </div>
            </div>

            <div x-data="{ isOpen: false }" class="ml-4 mt-0.5">
                <button @click="isOpen = !isOpen" class="text-gray-400 hover:text-orange-400 cursor-pointer">
                    {{ __('Turnos') }}
                </button>
                <div x-show="isOpen" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" @click.away="isOpen = false" class="mt-2 transition-opacity">
                    <x-dropdown-link href="#">
                        {{ __('Turnos pendientes') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                        {{ __('Historial de turnos') }}
                    </x-dropdown-link>
                </div>
            </div>

            <div x-data="{ isOpen: false }" class="ml-4 mt-0.5">
                <button @click="isOpen = !isOpen" class="text-gray-400 hover:text-orange-400 cursor-pointer">
                    {{ __('Consultas') }}
                </button>
                <div x-show="isOpen" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" @click.away="isOpen = false" class="mt-2 transition-opacity">
                    <x-dropdown-link href="#">
                        {{ __('Afiliados') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                        {{ __('Historial clínico') }}
                    </x-dropdown-link>

                    <x-dropdown-link href="#">
                        {{ __('Vademécum') }}
                    </x-dropdown-link>
                </div>
            </div>

        </div>
    </x-slot>


    <div class="py-12 w-auto">
        <div class="mx-auto sm:px-6 lg:px-8">
             <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h3 class="text-center text-3xl mt-4 font-medium text-gray-900">Bienvenido/a Dr./Dra.  "{{ Auth::user()->name }}"</h3>
                 <livewire:front.profile.doctor.home/>
                 <livewire:front.profile.doctor.components.calendar />
             </div>
        </div>
    </div>
 </x-app-layout>
