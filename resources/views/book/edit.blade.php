@extends('layouts.form')

@section('title', 'Editar')
    
@section('accion')
    {{ route('book.update',$book) }}
@endsection

@section('metodo')
    @method('put')
@endsection

@section('body')
<input type="hidden" name="user_id" value="{{ $user->id }}">
<div class="grid grid-cols-3 grid-flow-row gap-4">
    <div>
        <label class="text-gray-600 text-lg font-bold text-center my-2 block">Nombre del libro:</label>
        <input type="text" name="name" value="{{ old('name', $book->name) }}" class="text-gray-600 text-base font-semibold my-2 px-4 py-2 rounded-md border border-gray-600 hover:border-blue-600 focus:ring-1 w-full">
        @error('name')
                <p class="text-red-600 font-bold text-sm block my-2"><small>*{{ $message }}</small></p>
        @enderror
    </div>
    <div>
        <label class="text-gray-600 text-lg font-bold text-center my-2 block">Foto del libro:</label>
        <input type="file" name="url" accept="image/*" class="text-gray-600 text-base font-semibold my-2 px-4 py-2 rounded-md border border-gray-600 hover:border-blue-600 focus:ring-1 w-full">
        @error('url')
                <p class="text-red-600 font-bold text-sm block my-2"><small>*{{ $message }}</small></p>
        @enderror
    </div>
    <div>
        <label class="text-gray-600 text-lg font-bold text-center my-2 block">Cantidad de libros disponibles:</label>
        <input type="number" name="count" value="{{ old('count', $book->count) }}" class="text-gray-600 text-base font-semibold my-2 px-4 py-2 rounded-md border border-gray-600 hover:border-blue-600 focus:ring-1 w-full">
        @error('count')
            <p class="text-red-600 font-bold text-sm block my-2"><small>*{{ $message }}</small></p>
        @enderror
    </div>
</div>
<div class="grid grid-cols-2 grid-flow-row gap-4">
    <div>
        <label class="text-gray-600 text-lg font-bold text-center my-2 block">Selecciona la editorial:</label>
        <select name="editorial_id" class="text-gray-600 text-base font-semibold my-2 px-4 py-2 rounded-md border border-gray-600 hover:border-blue-600 focus:ring-1 w-full">
            @foreach ($editorials as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label class="text-gray-600 text-lg font-bold text-center my-2 block">Selecciona el autor:</label>
        <select name="author_id" class="text-gray-600 text-base font-semibold my-2 px-4 py-2 rounded-md border border-gray-600 hover:border-blue-600 focus:ring-1 w-full">
            @foreach ($authors as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="w-full text-center">
    <button type="submit" class="text-green-600 text-lg border border-green-600 bg-white hover:bg-green-600 hover:text-white rounded-md px-4 py-2 my-10">Actualizar libro</button>
</div>
@endsection