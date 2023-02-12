<x-app-layout>
    <x-slot:header>
        <h1 class="text-2xl font-bold text-gray-400">Categories Create</h1>
    </x-slot:header>

    <x-wrapper class="pb-24">
        <div class="p-4 bg-white  dark:bg-gray-800 rounded-md text-gray-50 max-w-3xl mx-auto">
            @include('layouts.dashboard.partials._form_sessions')
            <form action="{{ route('dashboard.categories.store') }}" class="text-white space-y-4" method="post">
                @method('POST')
                @csrf
                @include('dashboard.categories.partials._form')
                <div class="flex justify-end mt-4">
                    <button type="submit"
                            class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                        Create
                    </button>
                </div>
            </form>
        </div><!--end-->
    </x-wrapper>
</x-app-layout>
