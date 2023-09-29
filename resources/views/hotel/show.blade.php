<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cinnamon Grand Colombo') }}
        </h2>
    </x-slot>

    <div class="bg-indigo-50 px-4 py-8">
        <div class="container mx-auto">

            <div class="grid grid-cols-4 gap-6">
                Cinnamon Grand Colombo

            </div>
            {{ $hotel }}
        </div>
      </div>
</x-app-layout>
