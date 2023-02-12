<x-app-layout>

    <x-slot:header>
        <h1 class="text-2xl font-bold text-gray-400">Dashboard</h1>
    </x-slot:header>


    <div class="rounded-md bg-white dark:bg-gray-800 dark:border-gray-900 shadow-sm p-4 md:p-6 lg:p-8">
        <ul>
            @foreach($clients as $client)
                <li>
                    <a href="#">{{ $client->name }} - {{ $client->email }}</a>
                </li>

            @endforeach
        </ul>
    </div>

</x-app-layout>
