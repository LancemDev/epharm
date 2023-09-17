<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
            <ul class="list-disc grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach($drugs as $drug)
                    <li>
                        <div class="flex flex-col">
                            <div>
                                <img src="{{ asset('images/'.$drug->image) }}" alt="image" class="w-36 h-2 object-cover rounded-lg">
                            </div>
                            <div class="p-4">
                                <a href="{{ route('drugs.show', $drug->id) }}" class="block mt-1 text-lg leading-tight font-medium text-white hover:bg-sky-700">View more details about {{ $drug->name }}</a>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

</x-app-layout>
