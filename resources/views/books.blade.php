<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-hidden">

                                    <table class="min-w-full">
                                        <thead class="border-b">
                                        <tr>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                #
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Title
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Authors
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Action
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($books as $book)
                                        <tr class="border-b">
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                {{ $book->title }}
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">

                                                @if(count($book->authors) == 0)
                                                    Not Assigned Yet
                                                @endif
                                                @foreach($book->authors as $book_author)
                                                    {{$book_author->name}}
                                                    @if(!$loop->last)
                                                        ,
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                               <a href="{{route('books.show' , $book->id)}}"> <button class="bg-gray-300 p-3">Assign Authors</button></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        {{$books->links()}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
