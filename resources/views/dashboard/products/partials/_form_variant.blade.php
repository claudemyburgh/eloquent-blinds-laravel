

<div class="w-full">
    <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Image</label>
    <div class="my-1">
        <input type="file" name="image" id="image" value="{{ old('image') }}"
            @class([
                 'mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-sm sm:text-sm border-gray-300 text-gray-700 dark:text-gray-300 dark:border-gray-700 p-2 rounded-md border bg-gray-50 dark:bg-gray-900',
                 'border-red-500' => $errors->has('image')
                 ])
        >
    </div>
    @error('image')
    <p class="text-red-500 block">{{ $message }}</p>
    @enderror
</div>


<div class="flex gap-x-4">

    <div class="w-1/2">
        <label for="sku" class="block text-sm font-medium text-gray-700 dark:text-gray-300">SKU</label>
        <div class="my-1">
            <input type="text" name="sku" id="sku" value="{{ old('sku', $variant->sku) }}"
                @class([
                     'mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-sm sm:text-sm border-gray-300 text-gray-700 dark:text-gray-300 dark:border-gray-700 rounded-md border bg-gray-50 dark:bg-gray-900',
                     'border-red-500' => $errors->has('sku')
                     ])
            >
        </div>
        @error('sku')
        <p class="text-red-500 block">{{ $message }}</p>
        @enderror
    </div>

    <div class="w-1/2">
        <label for="colour" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Colour</label>
        <div class="my-1">
            <input type="text" name="colour" id="colour" value="{{ old('colour', $variant->colour) }}"
                @class([
                     'mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-sm sm:text-sm border-gray-300 text-gray-700 dark:text-gray-300 dark:border-gray-700 rounded-md border bg-gray-50 dark:bg-gray-900',
                     'border-red-500' => $errors->has('colour')
                     ])
            >
        </div>
        @error('colour')
        <p class="text-red-500 block">{{ $message }}</p>
        @enderror
    </div>
</div>

<div class="flex gap-x-4">
    <div class="w-1/2">
        <label for="material" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Material</label>
        <div class="my-1">
            <input type="text" name="material" id="material" value="{{ old('material', $variant->material) }}"
                @class([
                     'mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-sm sm:text-sm border-gray-300 text-gray-700 dark:text-gray-300 dark:border-gray-700 rounded-md border bg-gray-50 dark:bg-gray-900',
                     'border-red-500' => $errors->has('material')
                     ])
            >
        </div>
        @error('material')
        <p class="text-red-500 block">{{ $message }}</p>
        @enderror
    </div>

    <div class="w-1/2">
        <label for="thickness" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Thickness (<i
                class="text-xs italic">in mm</i>)</label>
        <div class="my-1">
            <input type="number" name="thickness" id="thickness" value="{{ old('thickness', $variant->thickness) }}"
                @class([
                     'mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-sm sm:text-sm border-gray-300 text-gray-700 dark:text-gray-300 dark:border-gray-700 rounded-md border bg-gray-50 dark:bg-gray-900',
                     'border-red-500' => $errors->has('thickness')
                     ])
            >
        </div>
        @error('thickness')
        <p class="text-red-500 block">{{ $message }}</p>
        @enderror
    </div>


</div>


<div class="flex gap-x-4">
    <div class="w-1/2">
        <label for="pattern" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Pattern</label>
        <div class="my-1">
            <input type="text" name="pattern" id="pattern" value="{{ old('pattern', $variant->pattern) }}"
                @class([
                     'mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-sm sm:text-sm border-gray-300 text-gray-700 dark:text-gray-300 dark:border-gray-700 rounded-md border bg-gray-50 dark:bg-gray-900',
                     'border-red-500' => $errors->has('pattern')
                     ])
            >
        </div>
        @error('pattern')
        <p class="text-red-500 block">{{ $message }}</p>
        @enderror
    </div>


    <div class="w-1/2">
        <label for="pattern_width" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Pattern width (<i
                class="text-xs italic">in mm</i>)</label>
        <div class="my-1">
            <input type="number" name="pattern_width" id="pattern_width" value="{{ old('pattern_width', $variant->pattern_width) }}"
                @class([
                     'mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-sm sm:text-sm border-gray-300 text-gray-700 dark:text-gray-300 dark:border-gray-700 rounded-md border bg-gray-50 dark:bg-gray-900',
                     'border-red-500' => $errors->has('pattern_width')
                     ])
            >
        </div>
        @error('pattern_width')
        <p class="text-red-500 block">{{ $message }}</p>
        @enderror
    </div>

</div>

<div class="flex gap-x-4">

    <div class="w-1/2">
        <label for="pattern_height" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Pattern height
            (<i
                class="text-xs italic">in mm</i>)</label>
        <div class="my-1">
            <input type="number" name="pattern_height" id="pattern_height" value="{{ old('pattern_height', $variant->pattern_height) }}"
                @class([
                     'mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-sm sm:text-sm border-gray-300 text-gray-700 dark:text-gray-300 dark:border-gray-700 rounded-md border bg-gray-50 dark:bg-gray-900',
                     'border-red-500' => $errors->has('pattern_height')
                     ])
            >
        </div>
        @error('pattern_height')
        <p class="text-red-500 block">{{ $message }}</p>
        @enderror
    </div>


    <div class="w-1/2">
        <label for="popular" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Popular</label>
        <div class="my-1">
            <select id="popular" name="popular"
                @class([
                  'mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-sm sm:text-sm border-gray-300 text-gray-700 dark:text-gray-300 dark:border-gray-700 rounded-md border bg-gray-50 dark:bg-gray-900',
                  'border-red-500' => $errors->has('popular')
                  ])>
                <option @selected(old('popular', $variant->popular) == 0) value="0">No</option>
                <option @selected(old('popular', $variant->popular) == 1) value="1">Most Popular</option>
            </select>
            @error('popular')
            <p class="text-red-500 block">{{ $message }}</p>
            @enderror
        </div>
    </div>

</div>
