<x-panel>
        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
            {{__('forms.add_quote')}}
        </h1>
        <form class="space-y-4 md:space-y-6" method="POST" action="/quotes/quote/create" enctype="multipart/form-data">
                @csrf
                <x-form.input name="name_en" placeholder="{{__('placeholders.quote_name')}}" label="{{__('forms.quote_name')}} ({{__('forms.en')}})">{{old('name_en')}}</x-form-input>
                <x-form.input name="name_ka" placeholder="{{__('placeholders.quote_name')}}" label="{{__('forms.quote_name')}} ({{__('forms.ka')}})">{{old('name_ka')}}</x-form-input>
                <x-form.input name="thumbnail" type="file" label="{{__('forms.quote_image')}}" />
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
            <x-form.button>{{__('forms.add')}}</x-form.button>
        </form>
</x-panel>