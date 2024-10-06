<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit listing') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('listings.update', $listing) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div>
                    <x-label for="title" value="{{ __('Title') }}" />
                    <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title', $listing->title)" />
                </div>

                <div class="mt-4">
                    <x-label for="description" value="{{ __('Description') }}" />
                    <textarea id="price" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" name="description">{{ old('description', $listing->description) }}</textarea>
                </div>

                <div class="mt-4">
                    <x-label for="price" value="{{ __('Price') }}" />
                    <x-input id="price" class="block mt-1 w-full" type="text" name="price" :value="old('price', $listing->getRawOriginal('price'))" />
                </div>

                <div class="flex items-center mt-6">
                    <x-button>
                        {{ __('Update listing') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
