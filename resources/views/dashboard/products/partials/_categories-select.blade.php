
<label for="category_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Belongs to parent category</label>
<select id="category_id" name="category_id"
    @class([
          'mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-sm sm:text-sm border-gray-300 text-gray-700 dark:text-gray-300 dark:border-gray-700 rounded-md border bg-gray-50 dark:bg-gray-900',
          'border-red-500' => $errors->has('category_id')
      ])>
    <option value="">Select category</option>
    @foreach($categories as  $cat)
        <optgroup label="{{ $cat->title }}">
            @foreach($cat->children as $child)
                <option
                    @selected(isset($product) && $product->category_id == $child->id || old('category_id') == $child->id)
                    value="{{ $child->id }}">{{ $child->title }}</option>
            @endforeach
        </optgroup>
    @endforeach
</select>

@error('category_id')
<p class="text-red-500 mt-1 block">{{ $message }}</p>
@enderror
