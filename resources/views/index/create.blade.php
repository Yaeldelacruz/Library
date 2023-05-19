@extends('layouts.basic')

@section('title', 'Crear')
    
@section('body')
    <div class="grid grid-cols-5 grid-flow-row gap-4">
        <div>
            <button class="text-blue-600 text-lg border border-blue-600 bg-white hover:bg-blue-600 hover:text-white rounded-md px-4 py-2 my-2">
                <a href="{{ route('author.create') }}">Autores</a>
            </button>
        </div>
        <div>
            <button class="text-blue-600 text-lg border border-blue-600 bg-white hover:bg-blue-600 hover:text-white rounded-md px-4 py-2 my-2">
                <a href="{{ route('book.create') }}">Libros</a>
            </button>
        </div>
        <div>
            <button class="text-blue-600 text-lg border border-blue-600 bg-white hover:bg-blue-600 hover:text-white rounded-md px-4 py-2 my-2">
                <a href="{{ route('editorial.create') }}">Editoriales</a>
            </button>
        </div>
        <div>
            <button class="text-blue-600 text-lg border border-blue-600 bg-white hover:bg-blue-600 hover:text-white rounded-md px-4 py-2 my-2">
                <a href="{{ route('gender.create') }}">Generos</a>
            </button>
        </div>
        <div>
            <button class="text-blue-600 text-lg border border-blue-600 bg-white hover:bg-blue-600 hover:text-white rounded-md px-4 py-2 my-2">
                <a href="{{ route('nacionality.create') }}">Paises</a>
            </button>
        </div>
    </div>
@endsection