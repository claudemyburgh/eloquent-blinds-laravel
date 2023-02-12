<x-app-layout>
    <x-slot:header>
        <div class="flex justify-between">
            <h1 class="text-2xl font-bold text-gray-400">Editing variant for {{ $product->title }} </h1>

            <headless-popover popper placement="bottom-end bottom-start" offset="2 10">
                <button id="delete-dropdown" aria-expanded="false" aria-haspopup="true"
                        class="dark:bg-gray-900 dark:text-white text-red-500 bg-red-200 px-3 py-1.5 rounded-md"
                        type="button">DELETE
                </button>
                <div hidden aria-labelledby="delete-dropdown" class="bg-gray-200 rounded-md shadow-lg p-2 w-40">
                    <form action="{{ route('dashboard.variants.destroy', [$product, $variant]) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="bg-red-500 block w-full text-white px-3 py-1.5 rounded-md">Are you
                            sure?
                        </button>
                    </form>
                </div>
            </headless-popover>

        </div>
    </x-slot:header>

    <div class="pb-24">
        <div class="p-4 bg-white text-gray-700 dark:bg-gray-800 border border-gray-300 shadow rounded-md text-gray-50 max-w-3xl mx-auto">
            @include('layouts.dashboard.partials._form_sessions')
            <form action="{{ route('dashboard.variants.update',[ $product, $variant]) }}" class="text-white space-y-4" method="post" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                @include('dashboard.products.partials._form_variant')
                <div class="flex justify-between mt-4">
                    <a href="{{ route('dashboard.products.edit', $product) }}" class="inline-flex justify-center py-2 px-4 border border-gray-200 shadow-sm text-sm font-medium rounded-md text-gray-600 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                        Back
                    </a>


                    <button type="submit"
                            class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                        Update
                    </button>
                </div>
            </form>
        </div><!--end-->
    </div>
</x-app-layout>
