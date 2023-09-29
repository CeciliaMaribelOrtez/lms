@php
    $id = request()->route('id');
@endphp
@props(['route', 'text'] )
<x-slot name="header">
    <div class="flex justify-between">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{$text}}
        </h2>
        <div class='flex gap-2'>
            <a href="{{ route($route) }}"
               class="rounded-md bg-sky-500 text-white hover:bg-white border-transparent border-2 p-1 group hover:text-blue-500 hover:border-blue-500 active:bg-gray-100">
                @svg('typ-arrow-back', 'inline w-5 h-5 mr-1 group-hover:text-blue-500')
                Volver
            </a>
            <a href="{{ route($route.'.edit', $id ) }}"
               class="rounded-md bg-sky-500 text-white hover:bg-white border-transparent border-2 p-1 group hover:text-amber-500 hover:border-amber-500 active:bg-gray-100">
                @svg('typ-edit', 'inline w-5 h-5 mr-1 group-hover:text-amber-500')
                Modificar
            </a>

            <a href="{{ route($route.'.delete', $id ) }}"
               class="rounded-md bg-sky-500 text-white hover:bg-white border-transparent border-2 p-1 group hover:text-red-500 hover:border-red-500 active:bg-gray-100">
                @svg('typ-trash', 'inline w-5 h-5 mr-1 group-hover:text-red-500')
                Eliminar
            </a>
        </div>
    </div>
</x-slot>
