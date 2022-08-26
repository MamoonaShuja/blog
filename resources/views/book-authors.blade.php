@php
    extract($data)
@endphp
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
                    <h1>Assign Authors to <b>{{$book->title}}</b></h1>
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <form action="{{route('books.update' , $book->id)}}" method="post">
                                        @csrf
                                        @method('put')
                                        <select class="p-10" multiple name="authors[]">
                                            @foreach($authors as $author)
                                                @php
                                                    $is_selected = false;
                                                foreach($book->authors as $aut):
                                                    if($aut->id == $author->id ):
                                                        $is_selected = true;
                                                        break;
                                                    endif;
                                                endforeach;
                                                @endphp
                                                <option @if($is_selected) selected @endif value="{{$author->id}}">{{$author->name}}</option>
                                            @endforeach
                                        </select>
                                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                        <br>

                                        <button class="bg-blue hover:bg-gray-100 text-gray-800 font-semibold my-5 py-2 px-4 border border-gray-400 rounded shadow">
                                            Assign
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
