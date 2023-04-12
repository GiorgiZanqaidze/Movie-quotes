<x-layout>
    <div class="flex flex-col gap-4">
        @auth
            <div>
                <form action="/logout" method="POST">
                @csrf
                <button class="hover:underline underline-offset-1 text-center text-center text-3xl text-white">{{__('navigate-text.logout')}}<button>
                </form>
            </div>
        @endauth
        <a href="/movies/movie/create" class="text-center hover:underline block text-3xl text-white">{{__('navigate-text.create_movie')}}</a>
        <a href="/quotes/quote/create" class="text-center hover:underline block text-3xl text-white">{{__('navigate-text.create_quote')}}</a>
        <a href="/dashboard/quotes" class="text-center hover:underline block text-3xl text-white">{{__('navigate-text.all_quote')}}</a>
        <a href="/dashboard/movies" class="text-center hover:underline block text-3xl text-white">{{__('navigate-text.all_movie')}}</a>
    </div>
</x-layout>