<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-alert-success />

            <a href="{{ route('listings.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150 mb-3">{{ __('Add new Listing') }}</a>

            <div class="mb-4">
                <form method="GET" action="">
                    <input type="text" name="title" placeholder="Title" value="{{ request('title') }}" />
                    <select name="category">
                        <option value="">-- choose category --</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                    @if (request('category') == $category->id) selected @endif>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <select name="size">
                        <option value="">-- choose size --</option>
                        @foreach ($sizes as $size)
                            <option value="{{ $size->id }}"
                                    @if (request('size') == $size->id) selected @endif>{{ $size->name }}</option>
                        @endforeach
                    </select>
                    <select name="color">
                        <option value="">-- choose color --</option>
                        @foreach ($colors as $color)
                            <option value="{{ $color->id }}"
                                    @if (request('color') == $color->id) selected @endif>{{ $color->name }}</option>
                        @endforeach
                    </select>
                    <select name="city">
                        <option value="">-- choose city --</option>
                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}"
                                    @if (request('city') == $city->id) selected @endif>{{ $city->name }}</option>
                        @endforeach
                    </select>
                    @livewire('listing-saved-checkbox')
                    <button type="submit" class="mb-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">Search</button>
                </form>
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Photo</span>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Title
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Description
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Categories
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Sizes
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Colors
                            </th>
                            <th scope="col" class="px-6 py-3">
                                City
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Actions</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($listings as $listing)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <img src="{{ $listing->getFirstMediaUrl('listings', 'thumb') }}" alt="">
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $listing->title }}
                            </th>
                            <td class="px-6 py-4">
                                {{ \Illuminate\Support\Str::words($listing->description, 10, '...') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                            @foreach ($listing->categories as $category)
                                {{ $category->name }}
                            @endforeach
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                            @foreach ($listing->sizes as $size)
                                {{ $size->name }}
                            @endforeach
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                            @foreach ($listing->colors as $color)
                                {{ $color->name }}
                            @endforeach
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $listing->user->city->name ?? '' }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $listing->price }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="inline-flex space-x-2">
                                @if ($listing->user_id != auth()->id())
                                    @livewire('listing-save-button', ['listingId' => $listing->id])
                                @endif

                                @can('update', $listing)
                                    <a href="{{ route('listings.edit', $listing) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        Edit
                                    </a>
                                @endcan

                                @can('delete', $listing)
                                    <form action="{{ route('listings.destroy', $listing) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this listing?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                            Delete
                                        </button>
                                    </form>
                                @endcan

                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="mb-4 mt-4 ml-4">
                    {{ $listings->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
