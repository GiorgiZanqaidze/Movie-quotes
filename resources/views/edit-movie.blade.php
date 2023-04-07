<x-layout>

    <section class="bg-gray-50 dark:bg-gray-900 bg-gray-500">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        {{__('forms.edit_movie')}}
                    </h1>
                    <form method="POST" action="/movies/movie/{{$movie->slug}}/edit" class="flex justify-center flex-col items-center" enctype="multipart/form-data">
                        @csrf
                        @method("PATCH")
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
                            <div class="mb-6">
                                <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('forms.movie_slug')}}</label>
                                <input placeholder='das-dsds-das-d-as-das-dasd-ad' value="{{old('name', $movie->slug)}}" type="slug" id="slug" name="slug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @error('slug')
                                    <span class="text-xs text-red-500">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{__('forms.edit')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>