@extends('layouts.basic')

@section('title', 'Inicio')
    
@section('body')
    <h1 class="text-blue-600 text-2xl font-bold text-center my-2">Autores</h1>
    <table class="w-full text-center">
        <thead>
            <tr>
                <th class="text-lg text-center border border-gray-600 font-bold my-2 mx-auto px-4 py-2">Nombre:</th>
                <th class="text-lg text-center border border-gray-600 font-bold my-2 mx-auto px-4 py-2">Accion:</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $item)
            <tr>
                <td class="text-base text-center border border-gray-600 font-semibold my-2 mx-auto px-4 py-2">
                        {{ $item->name }}
                    </td>
                    <td class="text-base text-center border border-gray-600 font-semibold my-2 mx-auto px-4 py-2">
                        <button class="text-yellow-400 text-sm bg-white border border-yellow-400 hover:bg-yellow-400 hover:text-white rounded-md px-4 py-2 mx-auto my-2">
                            <a href="{{ route('author.edit',$item) }}">Editar</a>
                        </button>
                        <form action="{{ route('author.destroy',$item) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="text-red-600 text-sm bg-white border border-red-600 hover:bg-red-600 hover:text-white rounded-md px-4 py-2 mx-auto my-2">
                                Eliminar
                            </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $authors->links() }}
@endsection