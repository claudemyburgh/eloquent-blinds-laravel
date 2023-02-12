<x-app-layout>
    <x-slot:header>
        <h1 class="text-2xl font-bold text-gray-400">Products Create</h1>
    </x-slot:header>

    <div class="pb-24 grid lg:grid-cols-2 gap-4 md:gap-6 lg:gap-8">
        <div class="p-4 bg-white dark:bg-gray-800 rounded-md text-gray-50">
            @include('layouts.dashboard.partials._form_sessions')
            <form action="{{ route('dashboard.products.store') }}" class="text-white space-y-4" method="post">
                @method('POST')
                @csrf
                @include('dashboard.products.partials._form')
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
