<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div>
                    <h1 class="p-6 text-2xl text-purple-800 font-bold">Bienvenido al gestor de tareas</h1>
                    
                    @foreach ($tasks as $task)
                        <div class="p-6 border-t border-gray-200 border-solid">
                            <p class="pl-6 text-base text-gray-700 font-bold">{{ $task->title }}</p>
                            <p class="pl-6 text-base text-gray-800">{{ $task->description }}</p>
                        </div> 
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
