<x-layout>
    @if ($movies)
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="text-sm text-left text-gray-500 dark:text-gray-400 flex">
                <tbody>
                 @foreach ($movies as $movie)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 flex items-center">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$movie->title}}
                            <img src="/storage/{{$movie->thumbnail}}" alt="" width="50px"/>
                        </th>
                        <td class="px-6 py-4">
                            <form action="/movies/movie/{{$movie->slug}}/delete" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</button>
                            </form>
                        </td>
                        <td class="px-6 py-4">
                            <a href="/movies/movie/{{$movie->slug}}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    @endif

</x-layout>