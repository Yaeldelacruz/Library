@extends('layouts.basic')

@section('title', 'Editorial')
    
@section('body')
    <h1 class="text-blue-600 text-2xl font-bold text-center my-2">Editorial {{ $editorial->name }}</h1>
    <table class="w-full text-center">
        <thead>
            <tr>
                <th class="text-lg text-center border border-gray-600 font-bold my-2 mx-auto px-4 py-2">Nombre:</th>
                <th class="text-lg text-center border border-gray-600 font-bold my-2 mx-auto px-4 py-2">Genero:</th>
                <th class="text-lg text-center border border-gray-600 font-bold my-2 mx-auto px-4 py-2">Nacionalidad:</th>
                <th class="text-lg text-center border border-gray-600 font-bold my-2 mx-auto px-4 py-2">Accion:</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-base text-center border border-gray-600 font-semibold my-2 mx-auto px-4 py-2">
                        {{ $editorial->name }}
                    </td>
                    <td class="text-base text-center border border-gray-600 font-semibold my-2 mx-auto px-4 py-2">
                        @foreach ($gender as $item)
                            {{ $item->type }}
                        @endforeach
                    </td>
                    <td class="text-base text-center border border-gray-600 font-semibold my-2 mx-auto px-4 py-2">
                        @foreach ($nacionality as $nacion)
                            {{ $nacion->name }}
                        @endforeach
                    </td>
                    <td class="text-base text-center border border-gray-600 font-semibold my-2 mx-auto px-4 py-2">
                        <button class="text-yellow-400 text-sm bg-white border border-yellow-400 hover:bg-yellow-400 hover:text-white rounded-md px-4 py-2 mx-auto my-2">
                            <a href="{{ route('editorial.edit',$editorial) }}">Editar</a>
                        </button>
                        <form action="{{ route('editorial.destroy',$editorial) }}" method="post">
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