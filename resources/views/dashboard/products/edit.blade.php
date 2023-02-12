<x-app-layout>
    <x-slot:header>
        <div class="flex justify-between">
            <h1 class="text-2xl font-bold text-gray-400">Product Edit</h1>
            <headless-popover popper placement="bottom-end bottom-start" offset="2 10">
                <button id="delete-dropdown" aria-expanded="false" aria-haspopup="true"
                        class="dark:bg-gray-900 dark:text-white text-red-500 bg-red-200 px-3 py-1.5 rounded-md"
                        type="button">DELETE
                </button>
                <div hidden aria-labelledby="delete-dropdown" class="bg-gray-200 rounded-md shadow-lg p-2 w-40">
                    <form action="{{ route('dashboard.products.destroy', $product) }}" method="post">
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

    <div class="pb-24 grid lg:grid-cols-2 gap-4 md:gap-6 lg:gap-8">
        <div class="p-4 rounded-md bg-white text-gray-800 dark:bg-gray-800 dark:text-gray-50 shadow w-full mx-auto">
            @include('layouts.dashboard.partials._form_sessions')
            <div class="flex gap-4 flex-wrap">
                @foreach($product->getMedia() as $img)
                    <div class="w-32 aspect-square dark:bg-gray-900 rounded-md overflow-hidden group shrink-0">
                        <form class="relative" action="{{ route('dashboard.media.delete', $img) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button
                                class="hidden group-hover:block h-5 w-5 bg-red-600 text-white absolute top-2 right-2 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                    <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                                </svg>

                            </button>
                        </form>
                        <img src="{{ $img->getUrl('thumb') }}" class="w-full h-full object-cover" alt="image thumb">
                    </div>
                @endforeach
            </div>

            <form action="{{ route('dashboard.products.update', $product) }}" class="text-white space-y-4" method="post"
                  enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-300 ">Image</label>
                    <input multiple type="file" name="image" id="image" value="{{ old('image') }}"
                        @class([
                             'mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full border shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 rounded-md dark:bg-gray-900 p-2',
                             'border-red-500' => $errors->has('image')
                             ])
                    >
                    @error('image')
                    <p class="text-red-500 mt-1 block">{{ $message }}</p>
                    @enderror
                </div>

                @include('dashboard.products.partials._form')
                <div class="flex justify-end mt-4">
                    <button type="submit"
                            class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                        Update
                    </button>
                </div>
            </form>
        </div><!--end-->
    </div>


    <div>
        <div class="p-4 md:p-6 lg:p-8 relative w-full rounded-md bg-white text-gray-800 dark:bg-gray-800 dark:text-gray-50 shadow mx-auto">
            <div class="mb-4">
                <a href="{{ route('dashboard.variants.create', $product) }}" class="px-3 py-2 rounded-md bg-gray-100 text-gray-800 hover:bg-gray-200">Add variant </a>
            </div>

            @if($product->variants->count())

            <table class="min-w-full">
                <thead class="bg-white">
                <tr>
                    <th scope="col" class="py-2 pl-4 pr-3 w-16 text-left text-sm font-semibold text-gray-900 sm:pl-2">Image</th>
                    <th scope="col" class="px-2 py-2 text-left text-sm font-semibold text-gray-900">SKU</th>
                    <th scope="col" class="px-2 py-2 text-left text-sm font-semibold text-gray-900">Colour</th>
                    <th scope="col" class="relative py-2 pl-3 pr-4 sm:pr-2">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach($product->variants as $variant)
                        @include('dashboard.products.partials._variant')
                    @endforeach
                </tbody>
            </table>
         @endif
        </div>
    </div>


</x-app-layout>
