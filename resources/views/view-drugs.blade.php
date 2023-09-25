<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @if($drug)
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <ul class="list-disc">
                        <li>
                            <div class="flex flex-col md:flex-row">
                                <div class="md:w-1/4">
                                    <img src="{{ asset('images/'.$drug->image) }}" alt="image" class="w-60 h-60 md:h-auto object-cover rounded-lg">
                                </div>
                                <div class="p-4 md:w-3/4">
                                    Drug Name: <h2 class="text-2xl font-bold text-gray-800 dark:text-white">{{ $drug->name }}</h2>
                                    Drug Description: <p class="text-xl font-semibold text-gray-800 dark:text-gray-200">{{ $drug->description }}</p>
                                    Drug Price(Ksh): <p class="text-xl font-semibold text-gray-800 dark:text-gray-200">{{ $drug->price }}</p>
                                    Drug Quantity: <p class="text-xl font-semibold text-gray-800 dark:text-gray-200">{{ $drug->quantity }}</p>
                                    Drug Category: <p class="text-xl font-semibold text-gray-800 dark:text-gray-200">{{ $drug->category }}</p>
                                    <div class="mt-4 mb-10">
                                        <a href="{{ route('dashboard') }}" class="mt-4 bg-red-500 text-white py-2 px-6 rounded-md hover:bg-red-600 focus:outline-none focus:ring focus:ring-indigo-300">Back</a>
                                    </div> 
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    @else
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> 
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <x-welcome />
                </div>
            </div>
        </div>
    @endif

</x-app-layout>