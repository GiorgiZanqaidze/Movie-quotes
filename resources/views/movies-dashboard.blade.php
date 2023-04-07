<x-layout>
    @if ($movies)
        <div class="relative overflow-x-auto sm:rounded-lg">
            <h1 class="text-white text-center text-3xl mb-4">{{__('forms.movies')}}</h1>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 shadow-md ">
                <tbody>
                    @foreach ($movies as $movie)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <div class="pl-3">
                                    <div class="text-base font-semibold">{{$movie->title}}</div>
                                </div>  
                            </th>
                            <td class="px-6 py-4">
                                <form action="/movies/movie/{{$movie->id}}/delete" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{__('forms.delete')}}</button>
                                </form>
                            </td>
                            <td class="px-6 py-4">
                                <a href="/movies/movie/{{$movie->id}}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{__('forms.edit')}}</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <h1 class="text-white">There are no movie</h1>
    @endif

</x-layout>