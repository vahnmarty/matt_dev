<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm rounded-sm border-2 border-gray-600">
                <div class="pt-6 bg-white">
                    <header class="px-6 pb-6 flex justify-between">

                        <h1 class="font-bold text-3xl self-center">Dashboard</h1>


                    </header>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>