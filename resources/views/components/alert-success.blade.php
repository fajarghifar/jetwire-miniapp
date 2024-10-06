@if(session('success'))
    <div x-data="{ show: true }" x-show="show" class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded relative">
        <span>{{ session('success') }}</span>
        <button @click="show = false" class="absolute inset-y-0 right-0 flex items-center justify-center p-2 text-green-700 hover:text-green-900">
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 8.293l4.293-4.293a1 1 0 111.414 1.414L11.414 9.707l4.293 4.293a1 1 0 01-1.414 1.414L10 11.121l-4.293 4.293a1 1 0 01-1.414-1.414l4.293-4.293-4.293-4.293a1 1 0 011.414-1.414L10 8.293z" clip-rule="evenodd" />
            </svg>
        </button>
    </div>
@endif
