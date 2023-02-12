<div class="inline-block min-w-full py-2 align-middle">
    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
        <table class="min-w-full divide-y divide-gray-300">
            <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Details
                </th>
                {{--                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Title</th>--}}
            </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white">
            @foreach($variants as $variant)
                <tr>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6" data-variant-target="{{ $variant->sku }}">
                        <div class="flex items-center">
                            <div class="h-10 w-10 flex-shrink-0">
                                <img class="h-10 w-10 rounded-md"
                                     height="40" width="40"
                                     loading="lazy"
                                     src="{{ $variant->getFirstMediaUrl('variant', 'tiny') }}"
                                     alt="{{ $variant->color }}">
                            </div>
                            <div class="ml-4">
                                <div class="font-medium text-gray-900">{{ $product->title }}
                                    - {{ $variant->colour }}</div>
                                <div class="text-gray-500"><strong class="font-semibold">Item code:</strong>
                                    <span class="uppercase">{{ $variant->sku }}</span>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>


