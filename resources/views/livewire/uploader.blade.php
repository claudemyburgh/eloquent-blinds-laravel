<div
    x-data="{
        dropping: false,
        progress: 0,

        handleDrop (event) {
            console.log(event)

            @this.uploadMultiple(
                'files',
                Array.from(event.dataTransfer?.files || event.target.files),
                (uploadedFilename) => {
                    this.progress = 0
                },
                (e) => {
                    this.progress = 0
                },
                (e) => {
                    this.progress = e.detail.progress
                },
            )
        }
    }"


>
    <label for="cover-photo" class="block text-sm font-medium text-gray-300"> Cover photo </label>
    <div
        @dragover.prevent="dropping = true"
        @dragleave.prevent="dropping = false"
        @drop.prevent="dropping = false; handleDrop(event)"
        x-bind:class="{
            ' border-gray-700 ': !dropping,
            ' border-primary-500': dropping
        }"
        class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-dashed rounded-md">
        <div class="space-y-1 text-center">
            <svg class="mx-auto h-12 w-12 text-primary-600" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <div class="flex text-sm text-gray-300">
                <label for="file-upload" class="relative cursor-pointer bg-gray-900 rounded-full font-medium text-primary-600 hover:text-primary-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                    <span class="px-1.5 ">Upload a file</span>
                    <input
                        id="file-upload"
                        name="file-upload"
                        type="file" class="sr-only"
                        multiple
                        x-on:change="handleDrop(event)"
                    >
                </label>
                <p class="pl-1">or drag and drop</p>
            </div>
            <p class="text-xs text-gray-300">PNG, JPG, GIF up to 10MB</p>
        </div>
    </div>
    @error('files.*')
        <p class="mt-2 text-red-500 text-sm">{{ $message }}</p>
    @enderror
    <div x-cloak class="mt-6 space-y-3">
        <div  x-show="progress" class="space-y-2">
            <p class="text-sm font-medium text-gray-300">Uploading files</p>
            <div class="bg-gray-200 rounded-full overflow-hidden">
                <div class="h-2 bg-primary-600 rounded-full" x-bind:style="`width: ${progress}%;`"></div>
            </div>
        </div>
    </div>
</div>
