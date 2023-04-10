<x-panel>
        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
            {{__('forms.edit_movie')}}
        </h1>
        <form method="POST" action="/movies/movie/{{$movie->id}}/edit" class="flex justify-center flex-col items-center" enctype="multipart/form-data">
            @csrf
            @method("PATCH")
            <div class="flex flex-col">
                    <x-form.input name="title_en" placeholder="{{__('placeholders.movie_name')}}" label="{{__('forms.movie_title')}} ({{__('forms.en')}})">{{ old('title', $movie->title) }}</x-form-input>
                    <x-form.input name="title_ka" placeholder="{{__('placeholders.movie_name')}}" label="{{__('forms.movie_title')}} ({{__('forms.ka')}})">{{ old('title', $movie->title) }}</x-form-input>
                    <x-form.button>{{__('forms.add')}}</x-form.button>
                </div>
        </form>
</x-panel>



