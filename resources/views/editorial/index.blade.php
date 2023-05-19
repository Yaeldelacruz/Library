@extends('layouts.basic')

@section('title', 'Editoriales')
    
@section('body')
    <h1 class="text-blue-600 text-center text-2xl block my-2 font-bold">Editoriales</h1>
    <div class="grid grid-cols-5 grid-flow-row gap-4">
        @foreach ($editorials as $item)
            <div class="text-gray-600 text-base font-semibold text-center mx-auto my-2 px-4 py-2 rounded-md border border-gray-600 hover:border-blue-600 w-3/4">
                <a href="{{ route('editorial.show', $item) }}">{{ $item->name }}</a>
            </div>
        @endforeach
    </div>
    {{ $editorials->links() }}
@endsection