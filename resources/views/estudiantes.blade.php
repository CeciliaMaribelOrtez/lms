<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                Gestion de estudiantes
            </h2>

            <a href="{{ route('estudiantes.create') }}"
                class="rounded-md bg-ugreen-500 p-2 text-white hover:bg-ugreen-400 active:bg-ugreen-700">
                @svg('typ-plus', 'inline w-5 h-5 mr-2')
                Agregar estudiante
            </a>

        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <!-- Show a session flash message -->
            @if (session()->has('message'))
                <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
                    class="mb-2 rounded-md bg-ublue-500 p-3 text-center font-bold text-white">
                    {{ session('message') }}
                </div>
            @endif

            <div class="overflow-hidden bg-white shadow-2xl dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <livewire:estudiantes-table />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
