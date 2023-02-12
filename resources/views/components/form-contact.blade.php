<div>

    <div id="contact-form"></div>

    <noscript>
        @if(session()->has('success'))
            <div
                class="relative p-5 mb-4 mx-2 border border-green-500 bg-green-50 bg-green-500 rounded-md text-white shadow-lg shadow-green-500/30">
                {{session('success')}}
            </div>
        @endif
        @if(session()->has('errors'))
            <div
                class="relative p-5 mb-4 mx-2 border border-red-500 bg-green-50 bg-red-500 rounded-md text-white shadow-lg shadow-red-500/30">
                <strong class="bold">Oops!</strong> something went wrong.
            </div>
        @endif
        <div class="flex flex-wrap bg-white rounded-md p-4 border border-gray-200">
            <form id="form-quote" class="flex flex-wrap" method="POST" action="{{ route('contact.send') }}">
                @csrf
                @method('POST')
                <div class="p-2 w-full md:w-1/2">
                    <div class="relative">
                        <label for="name"
                               class="leading-7 text-sm text-gray-600 font-semibold">Name</label>
                        <input type="text" id="name" name="name" value="{{old('name')}}"
                               class="w-full bg-gray-100 bg-opacity-50 rounded border	border-gray-300 focus:border-primary-500 focus:bg-white focus:ring-2 focus:ring-primary-200 text-base	outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('name') border-red-500   @enderror">
                        @error('name')
                        <span class="text-red-500 block py-1 text-sm">
                                    {{$message}}
                                </span>
                        @enderror

                    </div>
                </div>
                <div class="p-2 w-full md:w-1/2">
                    <div class="relative">
                        <label for="surname"
                               class="leading-7 text-sm text-gray-600 font-semibold">Surname</label>
                        <input type="text" id="surname" name="surname" value="{{old('surname')}}"
                               class="w-full bg-gray-100 bg-opacity-50 rounded border	border-gray-300 focus:border-primary-500 focus:bg-white focus:ring-2 focus:ring-primary-200 text-base	outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('surname') border-red-500   @enderror">
                        @error('surname')
                        <span class="text-red-500 block py-1 text-sm">
                                    {{$message}}
                                </span>
                        @enderror

                    </div>
                </div>
                <div class="p-2 w-full md:w-1/2">
                    <div class="relative">
                        <label for="email"
                               class="leading-7 text-sm text-gray-600 font-semibold">Email</label>
                        <input type="email" id="email" name="email"
                               value="{{old('email')}}"
                               class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-primary-500 focus:bg-white focus:ring-2 focus:ring-primary-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('email') border-red-500   @enderror">
                        @error('email')
                        <span class="text-red-500 block py-1 text-sm">
                                    {{$message}}
                                </span>
                        @enderror
                    </div>
                </div>
                <div class="p-2 w-full md:w-1/2">
                    <div class="relative">
                        <label for="phone"
                               class="leading-7 text-sm text-gray-600 font-semibold">Phone</label>
                        <input type="tel" id="phone" name="phone"
                               value="{{old('phone')}}"
                               class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-primary-500 focus:bg-white focus:ring-2 focus:ring-primary-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('phone') border-red-500 @enderror">
                        @error('phone')
                        <span class="text-red-500 block py-1 text-sm">
                                    {{$message}}
                                </span>
                        @enderror
                    </div>
                </div>
                <div class="p-2 w-full">
                    <div class="relative">
                        <label for="subject"
                               class="leading-7 text-sm text-gray-600 font-semibold">Subject</label>
                        <input type="text" id="subject" name="subject"
                               value="{{old('subject')}}"
                               class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-primary-500 focus:bg-white focus:ring-2 focus:ring-primary-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('subject') border-red-500 @enderror">
                        @error('subject')
                        <span class="text-red-500 block py-1 text-sm">
                                    {{$message}}
                                </span>
                        @enderror
                    </div>
                </div>

                <div class="p-2 w-full">
                    <div class="relative">
                        <label for="message"
                               class="leading-7 text-sm text-gray-600 font-semibold">Message</label>
                        <textarea id="message" name="message"
                                  class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-primary-500 focus:bg-white focus:ring-2 focus:ring-primary-200	min-h-[15rem] text-base	outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200	ease-in-out resize-y @error('name') border-red-500 @enderror">{{old('message')}}</textarea>
                        @error('message')
                        <span class="text-red-500 block py-1 text-sm">
                                    {{$message}}
                                </span>
                        @enderror
                    </div>
                </div>
                <div class="p-2 w-full">
                    <button type="submit"
                            class="flex text-white bg-primary-600 border-0 py-2 px-8 focus:outline-none hover:bg-primary-500  disabled:bg-gray-200 disabled:text-gray-400 rounded text-lg">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </noscript>


</div>
