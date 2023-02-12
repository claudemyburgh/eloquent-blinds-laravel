
<div>
    <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Title</label>
    <input type="text" name="title" id="title" value="{{ old('title', $category->title) }}"
        @class([
             'mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-sm sm:text-sm border-gray-300 text-gray-700 dark:text-gray-300 dark:border-gray-700 rounded-md border bg-gray-50 dark:bg-gray-900',
             'border-red-500' => $errors->has('title')
             ])
    >
    @error('title')
        <p class="text-red-500 mt-1 block">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="link_description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Link Description</label>
    <input type="text" name="link_description" id="link_description" value="{{ old('link_description', $category->link_description) }}"
        @class([
             'mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-sm sm:text-sm border-gray-300 text-gray-700 dark:text-gray-300 dark:border-gray-700 rounded-md border bg-gray-50 dark:bg-gray-900',
             'border-red-500' => $errors->has('link_description')
             ])
    >
    @error('link_description')
        <p class="text-red-500 mt-1 block">{{ $message }}</p>
    @enderror
    <p class="mt-2 text-sm text-gray-500">UX/UI description for link.</p>
</div>

<div>
    @include('dashboard.categories.partials._categories-select')
    @error('parent_id')
        <p class="text-red-500 mt-1 block">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="excerpt" class="block text-sm font-medium text-gray-700 dark:text-gray-300"> Excerpt </label>
    <div class="mt-1">
        <textarea id="excerpt" name="excerpt" rows="6"
         @class([
           'mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-sm sm:text-sm border-gray-300 text-gray-700 dark:text-gray-300 dark:border-gray-700 rounded-md border bg-gray-50 dark:bg-gray-900',
           'border-red-500' => $errors->has('excerpt')
           ])
        >{{old('excerpt', $category->excerpt) }}</textarea>
        @error('excerpt')
        <p class="text-red-500 mt-1 block">{{ $message }}</p>
        @enderror
    </div>
    <p class="mt-2 text-sm text-gray-500">Excerpt for the category.</p>
</div>

<div>
    <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300"> Description </label>
    <div class="mt-1">
        <textarea id="description" name="description" rows="6"
         @class([
           'mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-sm sm:text-sm border-gray-300 text-gray-700 dark:text-gray-300 dark:border-gray-700 rounded-md border bg-gray-50 dark:bg-gray-900',
           'border-red-500' => $errors->has('description')
           ])
        >{{old('description', $category->description) }}</textarea>
        @error('description')
        <p class="text-red-500 mt-1 block">{{ $message }}</p>
        @enderror
    </div>
    <p class="mt-2 text-sm text-gray-500">
        Brief description for the category.
        (<i class="italic">for header and social media </i>)
    </p>
</div>

<div>
    <label for="body" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Main content </label>
    <div class="mt-1">
    <textarea id="body" name="body" rows="12"
     @class([
       'mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-sm sm:text-sm border-gray-300 text-gray-700 dark:text-gray-300 dark:border-gray-700 rounded-md border bg-gray-50 dark:bg-gray-900',
       'border-red-500' => $errors->has('body')
       ])
    >{{ old('body', $category->body) }}</textarea>
        @error('body')
            <p class="text-red-500 mt-1 block">{{ $message }}</p>
        @enderror
    </div>
    <p class="mt-2 text-sm text-gray-500">Write detailed description for category.</p>
</div>

<div class="flex gap-x-4">

    <div class="w-1/2">
        <label for="popular" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Popular</label>
        <select id="popular" name="popular"
            @class([
              'mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-sm sm:text-sm border-gray-300 text-gray-700 dark:text-gray-300 dark:border-gray-700 rounded-md border bg-gray-50 dark:bg-gray-900',
              'border-red-500' => $errors->has('popular')
              ])>
            <option @selected(old('popular', $category->popular) == 0) value="0">No</option>
            <option @selected(old('popular', $category->popular) == 1) value="1">Most Popular</option>
        </select>
        @error('popular')
            <p class="text-red-500 mt-1 block">{{ $message }}</p>
        @enderror
    </div>

    <div class="w-1/2">
        <label for="live" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Is Live</label>
        <select id="live" name="live"
            @class([
              'mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-sm sm:text-sm border-gray-300 text-gray-700 dark:text-gray-300 dark:border-gray-700 rounded-md border bg-gray-50 dark:bg-gray-900',
              'border-red-500' => $errors->has('live')
              ])>
            <option @selected(old('live', $category->live) == 1) value="1">Yes</option>
            <option @selected(old('live', $category->live) == 0) value="0">No</option>
        </select>
        @error('live')
            <p class="text-red-500 mt-1 block">{{ $message }}</p>
        @enderror
    </div>
</div>


