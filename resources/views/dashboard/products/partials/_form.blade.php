<div>
    <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Title</label>
    <div class="my-1">
        <input type="text" name="title" id="title" value="{{ old('title', $product->title) }}"
            @class([
                 'mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-sm sm:text-sm border-gray-300 text-gray-700 dark:text-gray-300 dark:border-gray-700 rounded-md border bg-gray-50 dark:bg-gray-900',
                 'border-red-500' => $errors->has('title')
                 ])
        >
    </div>
    @error('title')
    <p class="text-red-500 block">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="product_range" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Product Range</label>
    <div class="my-1">
        <select id="product_range" name="product_range"
            @class([
              'mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-sm sm:text-sm border-gray-300 text-gray-700 dark:text-gray-300 dark:border-gray-700 rounded-md border bg-gray-50 dark:bg-gray-900',
              'border-red-500' => $errors->has('product_range')
              ])>
            <option value="">Select option</option>
            <option @selected(old('product_range') == "winter" ||  $product->product_range == "winter")  value="winter">Winter</option>
            <option @selected(old('product_range') == "summer" ||  $product->product_range == "summer")  value="summer">Summer</option>
            <option @selected(old('product_range') == "spring" ||  $product->product_range == "spring")  value="spring">Spring</option>
            <option @selected(old('product_range') == "autumn" ||  $product->product_range == "autumn")  value="autumn">Autumn</option>
        </select>
    </div>
    @error('product_range')
    <p class="text-red-500 block">{{ $message }}</p>
    @enderror
</div>


<div>
    @include('dashboard.products.partials._categories-select')
    @error('parent_id')
    <p class="text-red-500 block">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="excerpt" class="block text-sm font-medium text-gray-700 dark:text-gray-300"> Excerpt </label>
    <div class="my-1">
        <textarea id="excerpt" name="excerpt" rows="6"
         @class([
           'mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-sm sm:text-sm border-gray-300 text-gray-700 dark:text-gray-300 dark:border-gray-700 rounded-md border bg-gray-50 dark:bg-gray-900',
           'border-red-500' => $errors->has('excerpt')
           ])
        >{{old('excerpt', $product->excerpt) }}</textarea>
        @error('excerpt')
        <p class="text-red-500 block">{{ $message }}</p>
        @enderror
    </div>
    <p class="mt-2 text-sm text-gray-500">Excerpt for the product.</p>
</div>

<div>
    <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300"> Description </label>
    <div class="my-1">
        <textarea id="description" name="description" rows="6"
         @class([
           'mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-sm sm:text-sm border-gray-300 text-gray-700 dark:text-gray-300 dark:border-gray-700 rounded-md border bg-gray-50 dark:bg-gray-900',
           'border-red-500' => $errors->has('description')
           ])
        >{{old('description', $product->description) }}</textarea>
        @error('description')
        <p class="text-red-500 block">{{ $message }}</p>
        @enderror
    </div>
    <p class="mt-2 text-sm text-gray-500">
        Brief description for the product.
        (<i class="italic">for header and social media </i>)
    </p>
</div>

<div>
    <label for="body" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Main content </label>
    <div class="my-1">
    <textarea id="body" name="body" rows="12"
     @class([
       'mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-sm sm:text-sm border-gray-300 text-gray-700 dark:text-gray-300 dark:border-gray-700 rounded-md border bg-gray-50 dark:bg-gray-900',
       'border-red-500' => $errors->has('body')
       ])
    >{{ old('body', $product->body) }}</textarea>
        @error('body')
        <p class="text-red-500 block">{{ $message }}</p>
        @enderror
    </div>
    <p class="mt-2 text-sm text-gray-500">Write detailed description for product.</p>
</div>


<div>
    <label for="price" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Price</label>
    <div class="my-1">
        <input type="number" name="price" id="price" value="{{ old('price', $product->price) }}"
            @class([
                 'mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-sm sm:text-sm border-gray-300 text-gray-700 dark:text-gray-300 dark:border-gray-700 rounded-md border bg-gray-50 dark:bg-gray-900',
                 'border-red-500' => $errors->has('price')
                 ])
        >
        @error('price')
    </div>
    <p class="text-red-500 block">{{ $message }}</p>
    @enderror
</div>

<div class="my-4">

    <div class="flex gap-x-4">
        <div class="w-1/2">
            <label for="popular" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Popular</label>
            <div class="my-1">
                <select id="popular" name="popular"
                    @class([
                      'mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-sm sm:text-sm border-gray-300 text-gray-700 dark:text-gray-300 dark:border-gray-700 rounded-md border bg-gray-50 dark:bg-gray-900',
                      'border-red-500' => $errors->has('popular')
                      ])>
                    <option @selected(old('popular', $product->popular) == 0) value="0">No</option>
                    <option @selected(old('popular', $product->popular) == 1) value="1">Most Popular</option>
                </select>
                @error('popular')
                <p class="text-red-500 block">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="w-1/2">
            <label for="live" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Is Live</label>
            <div class="my-1">
                <select id="live" name="live"
                    @class([
                      'mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-sm sm:text-sm border-gray-300 text-gray-700 dark:text-gray-300 dark:border-gray-700 rounded-md border bg-gray-50 dark:bg-gray-900',
                      'border-red-500' => $errors->has('live')
                      ])>
                    <option @selected(old('live', $product->live) == 1) value="1">Yes</option>
                    <option @selected(old('live', $product->live) == 0) value="0">No</option>
                </select>
                @error('live')
                <p class="text-red-500 block">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>
</div>


