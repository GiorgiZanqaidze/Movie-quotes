<x-panel>
        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
            {{__('forms.add_quote')}}
        </h1>
        <form class="space-y-4 md:space-y-6" method="POST" action="/quotes/quote/create" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="name_en" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('forms.quote_name')}} ({{__('forms.en')}})</label>
                    <input placeholder="{{__('placeholders.quote_name')}}" type="text" name="name_en" id="name_en" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @error('name_en')
                        <span class="text-xs text-red-500">{{$message}}</span>
                    @enderror
                </div>
                 <div>
                    <label for="name_ka" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('forms.quote_name')}} ({{__('forms.ka')}})</label>
                    <input placeholder="{{__('placeholders.quote_name')}}" type="text" name="name_ka" id="name_ka" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @error('name_ka')
                        <span class="text-xs text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="thumbnail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('forms.quote_image')}}</label>
                    <input type="file" id="thumbnail" name="thumbnail" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                    @error('thumbnail')
                        <span class="text-xs text-red-500">{{$message}}</span>
                    @enderror
                </div>
            <div class="mb-6">
                <label for="movie_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('forms.select_movie')}}</label>
                <select name="movie_id" id="movie_id" class="max-w-[50%]">

                    @foreach ($movies as $movie)
                        <option 
                        value="{{$movie->id}}" 
                        >
                            {{ucwords($movie->title)}}
                        </option>  
                    @endforeach
                </select>
                @error('movie_id')
                    <span class="text-xs text-red-500">{{$message}}</span>
                @enderror
            </div>
            <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 bg-blue-500">{{__('forms.add')}}</button>
            </p>
        </form>
</x-panel>