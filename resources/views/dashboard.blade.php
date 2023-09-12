<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <!-- <x-welcome /> -->
                <ul class="list-disc">
                    @foreach($drugs as $drug)
                        <li>
                            <div class="flex flex-col md:flex-row">
                                <div class="md:w-1/3">
                                    <img src="{{ asset('images/'.$drug->image) }}" alt="image" class="w-full h-16 md:h-auto md:w-24 object-cover rounded-lg">
                                </div>
                                <div class="p-4 md:w-2/3">
                                    <a href="{{ route('drugs.show', $drug->id) }}" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">View more details about {{ $drug->name }}</a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
</x-app-layout>
