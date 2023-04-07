<x-panel>
        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
            {{__('forms.add_movie')}}
        </h1>
        <form method="POST" action="/movies/movie/create" class="flex justify-center flex-col items-center" enctype="multipart/form-data">
            @csrf
                <div>
                @foreach (config('app.available_locales') as $locale)
                    <div class="mb-6">
                        <label for="title_{{$locale}}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('forms.movie_title')}} ({{ucwords($locale)}})</label>
                        <input placeholder="{{__('placeholders.movie_name')}}"  type="text" id="title_{{ $locale }}" name="title_{{ $locale }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('title')
                            <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                @endforeach
                </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{__('forms.add')}}</button>
        </form>
 </x-panel>


