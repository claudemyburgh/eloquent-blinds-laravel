<x-app-layout>
    <x-slot:header>
        <h1 class="text-2xl font-bold text-gray-400">Products</h1>
    </x-slot:header>
    @include('layouts.dashboard.partials._form_sessions')
    <div class="flex justify-end">
        <div>
            <a href="{{ route('dashboard.products.create')  }}"
               class="inline-flex items-center justify-center rounded-md border border-transparent bg-primary-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 sm:w-auto">Add
                Product</a>
        </div>
    </div>
    <div class="mt-2 flex flex-col py-2 px-4 sm:px-6 lg:px-8">
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle">
                <div
                    class="overflow-hiddens rounded-md bg-white dark:bg-gray-800 dark:border-gray-900 shadow-sm ring-1 ring-black ring-opacity-5">
                    <table class="min-w-full divide-y divide-gray-300 dark:divide-gray-900">
                        <thead class="bg-gray-50 dark:bg-gray-700 ">
                        <tr>
                            <th scope="col"
                                class="py-3.5 w-12 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 dark:text-gray-300 sm:pl-6 lg:pl-8">
                                ID
                            </th>
                            <th scope="col"
                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-300">
                                Title
                            </th>
                            <th scope="col"
                                class="px-3 w-32 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-300">
                                In Category
                            </th>
                            <th scope="col" class="relative w-24 py-3.5 pl-3 pr-4 sm:pr-6 lg:pr-8">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200  dark:divide-gray-700  bg-white dark:bg-gray-800">
                        @foreach($products as $product)
                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 dark:text-gray-300 sm:pl-6 lg:pl-8">{{ $product->id }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $product->title }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    {{ $product->category->title }}
                                </td>
                                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6 lg:pr-8">
                                    <a href="{{ route('dashboard.products.edit', $product) }}"
                                       class="text-primary-600 hover:text-primary-900 dark:hover:text-primary-400">
                                        Edit
                                        <span class="sr-only">, {{ $product->title }}</span></a>
                                </td>
                            </tr>
                        @endforeach
                        <!-- More people... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

