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
                    <textarea id="description" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" name="description">{{ old('description', $listing->description) }}</textarea>
                </div>

                <div class="mt-4">
                    <x-label for="price" value="{{ __('Price') }}" />
                    <x-input id="price" class="block mt-1 w-full" type="text" name="price" :value="old('price', $listing->getRawOriginal('price'))" />
                </div>

                <div class="mt-4">
                    <x-label for="photo1" value="{{ __('Photo 1') }}" />
                    @if (isset($media[0]))
                        <div class="mt-2 mb-4">
                            <img src="{{ $media[0]->getUrl('thumb') }}" alt="" class="mt-2 mb-4">
                            <a class="underline" href="{{ route('listings.deletePhoto', [$listing->id, $media[0]->id]) }}" onclick="return confirm('Are you sure?')">Delete Photo</a>
                        </div>
                    @endif
                    <input type="file" name="photo1" />
                </div>

                <div class="mt-4">
                    <x-label for="photo2" value="{{ __('Photo 2') }}" />
                    @if (isset($media[1]))
                        <div class="mt-2 mb-4">
                            <img src="{{ $media[1]->getUrl('thumb') }}" alt="" class="mt-2 mb-4">
                            <a class="underline" href="{{ route('listings.deletePhoto', [$listing->id, $media[1]->id]) }}" onclick="return confirm('Are you sure?')">Delete Photo</a>
                        </div>
                    @endif
                    <input type="file" name="photo2" />
                </div>

                <div class="mt-4">
                    <x-label for="photo3" value="{{ __('Photo 3') }}" />
                    @if (isset($media[2]))
                        <div class="mt-2 mb-4">
                            <img src="{{ $media[2]->getUrl('thumb') }}" alt="" class="mt-2 mb-4">
                            <a class="underline" href="{{ route('listings.deletePhoto', [$listing->id, $media[2]->id]) }}" onclick="return confirm('Are you sure?')">Delete Photo</a>
                        </div>
                    @endif
                    <input type="file" name="photo3" />
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
