@extends('layouts.basic')

@section('title', 'Inicio')
    
@section('body')
    <div class="grid grid-cols-5 grid-flow-row gap-4 my-2">
        <div>
            <button class="text-blue-600 text-lg border border-blue-600 bg-white hover:bg-blue-600 hover:text-white rounded-md px-4 py-2 my-2 w-3/4">
                <a href="{{ route('author.index') }}">Autores</a>
            </button>
        </div>
        <div>
            <button class="text-blue-600 text-lg border border-blue-600 bg-white hover:bg-blue-600 hover:text-white rounded-md px-4 py-2 my-2 w-3/4">
                <a href="{{ route('book.index') }}">Libros</a>
            </button>
        </div>
        <div>
            <button class="text-blue-600 text-lg border border-blue-600 bg-white hover:bg-blue-600 hover:text-white rounded-md px-4 py-2 my-2 w-3/4">
                <a href="{{ route('editorial.index') }}">Editoriales</a>
            </button>
        </div>
        <div>
            <button class="text-blue-600 text-lg border border-blue-600 bg-white hover:bg-blue-600 hover:text-white rounded-md px-4 py-2 my-2 w-3/4">
                <a href="{{ route('gender.index') }}">Generos</a>
            </button>
        </div>
        <div>
            <button class="text-blue-600 text-lg border border-blue-600 bg-white hover:bg-blue-600 hover:text-white rounded-md px-4 py-2 my-2 w-3/4">
                <a href="{{ route('nacionality.index') }}">Paises</a>
            </button>
        </div>
    </div>
@endsection