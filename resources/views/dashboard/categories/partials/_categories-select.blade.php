<label for="parent_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Belongs to category</label>
<select id="parent_id" name="parent_id"
    @class([
          'mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-sm sm:text-sm border-gray-300 text-gray-700 dark:text-gray-300 dark:border-gray-700 rounded-md border bg-gray-50 dark:bg-gray-900',
          'border-red-500' => $errors->has('parent_id')
      ])>
    <option value="">Select Category</option>
    @foreach($categories as  $cat)
        <option @selected(isset($category) && $category->parent_id == $cat->id || old('parent_id') == $cat->id)
                value="{{ $cat->id }}">
            {{ $cat->title }}
        </option>
    @endforeach
</select>
@error('parent_id')
<p class="text-red-500 mt-1 block">{{ $message }}</p>
@enderror
