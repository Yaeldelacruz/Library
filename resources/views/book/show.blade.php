@extends('layouts.basic')

@section('title', $book->name)
    
@section('body')
<h1 class="text-blue-600 text-2xl font-bold text-center my-2">Datos del libro {{ $book->name }}</h1>
<table class="w-full text-center">
    <thead>
        <tr>
            <th class="text-lg text-center border border-gray-600 font-bold my-2 mx-auto px-4 py-2">Nombre del usuario:</th>
            <th class="text-lg text-center border border-gray-600 font-bold my-2 mx-auto px-4 py-2">Nombre del libro:</th>
            <th class="text-lg text-center border border-gray-600 font-bold my-2 mx-auto px-4 py-2">Autor:</th>
            <th class="text-lg text-center border border-gray-600 font-bold my-2 mx-auto px-4 py-2">Editorial:</th>
            <th class="text-lg text-center border border-gray-600 font-bold my-2 mx-auto px-4 py-2">Cantidad:</th>
            <th class="text-lg text-center border border-gray-600 font-bold my-2 mx-auto px-4 py-2">Accion:</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="text-base text-center border border-gray-600 font-semibold my-2 mx-auto px-4 py-2">{{ $user->name }}</td>
            <td class="text-base text-center border border-gray-600 font-semibold my-2 mx-auto px-4 py-2">{{ $book->name }}</td>
            <td class="text-base text-center border border-gray-600 font-semibold my-2 mx-auto px-4 py-2">
                @foreach ($author as $item)
                    {{ $item->name }}
                @endforeach
            </td>
            <td class="text-base text-center border border-gray-600 font-semibold my-2 mx-auto px-4 py-2">
                    @foreach ($editorial as $item)
                        {{ $item->name }}
                    @endforeach
                </td>
                <td class="text-base text-center border border-gray-600 font-semibold my-2 mx-auto px-4 py-2">{{ $book->count }}</td>
                <td class="text-base text-center border border-gray-600 font-semibold my-2 mx-auto px-4 py-2">
                    <button class="text-yellow-400 text-sm bg-white border border-yellow-400 hover:bg-yellow-400 hover:text-white rounded-md px-4 py-2 mx-auto my-2">
                        <a href="{{ route('book.edit',$book) }}">Editar</a>
                    </button>
                    <form action="{{ route('book.destroy',$book) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="text-red-600 text-sm bg-white border border-red-600 hover:bg-red-600 hover:text-white rounded-md px-4 py-2 mx-auto my-2">
                            Eliminar
                        </button>
                </form>
            </td>
        </tr>
    </tbody>
</table>
@endsection