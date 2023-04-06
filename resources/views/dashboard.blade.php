<x-layout>
    <div class="flex flex-col gap-4">
        <a href="/movies/movie/create" class="text-center hover:underline block text-3xl text-white">{{__('navigate-text.create-movie')}}</a>
        <a href="/quotes/quote/create" class="text-center hover:underline block text-3xl text-white">{{__('navigate-text.create-quote')}}</a>
        <a href="/dashboard/quotes" class="text-center hover:underline block text-3xl text-white">{{__('navigate-text.all-quote')}}</a>
        <a href="/dashboard/movies" class="text-center hover:underline block text-3xl text-white">{{__('navigate-text.all-movie')}}</a>
    </div>
</x-layout>