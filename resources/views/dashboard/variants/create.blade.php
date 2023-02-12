<x-app-layout>
    <x-slot:header>
        <h1 class="text-2xl font-bold text-gray-400">Creating variant for {{ $product->title }} </h1>
    </x-slot:header>

    <div class="pb-24">
        <div class="p-4 bg-white text-gray-700 dark:bg-gray-800 border border-gray-300 shadow rounded-md text-gray-50 max-w-3xl mx-auto">
            @include('layouts.dashboard.partials._form_sessions')
            <form action="{{ route('dashboard.variants.store', $product) }}" class="text-white space-y-4" method="post" enctype="multipart/form-data">
                @method('POST')
                @csrf
                @include('dashboard.products.partials._form_variant', $product)
                <div class="flex justify-end mt-4">
                    <button type="submit"
                            class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                        Create
                    </button>
                </div>
            </form>
        </div><!--end-->
    </div>
</x-app-layout>
