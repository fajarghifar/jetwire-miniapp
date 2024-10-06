<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show listing') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div>
                <x-label for="title" value="{{ __('Title') }}" />
                <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title', $listing->title)" disabled />
            </div>

            <div class="mt-4">
                <x-label for="description" value="{{ __('Description') }}" />
                <textarea id="price" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" name="description" disabled >{{ old('description', $listing->description) }}</textarea>
            </div>

            <div class="mt-4">
                <x-label for="price" value="{{ __('Price') }}" />
                <x-input id="price" class="block mt-1 w-full" type="text" name="price" :value="old('price', $listing->getRawOriginal('price'))" disabled />
            </div>

            <div class="flex items-center mt-6">
                <a href="{{ route('listings.edit', $listing) }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150">
                    {{ __('Edit Listing') }}
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
