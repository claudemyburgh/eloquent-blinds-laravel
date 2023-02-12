<tr class="border-t border-gray-300">
    <td class="whitespace-nowrap py-2 pl-2 pr-3 text-sm font-medium text-gray-900 sm:pl-2">
        <div class="h-10 w-10 rounded-md bg-gray-200 overflow-hidden">
            <img class="h-full w-full" src="{{ $variant->getFirstMediaUrl('variant', 'thumb') }}" alt="{{ $variant->sku }} image">
        </div>
    </td>
    <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500 uppercase">{{ $variant->sku }}</td>
    <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500 uppercase">{{ $variant->colour }}</td>
    <td class="relative whitespace-nowrap py-2 pl-2 pr-2 text-right text-sm font-medium sm:pr-2">
        <a href="{{ route('dashboard.variants.edit', [$product, $variant]) }}"
           class="text-primary-600 hover:text-primary-500">Edit
            <span class="sr-only">, {{ $variant->sku }}</span></a>
    </td>

    <td id="form-contact"></td>

</tr>
