@extends('layouts.form')

@section('title', 'Crear')
    
@section('accion')
    {{ route('gender.store') }}
@endsection

@section('body')
    <div class="grid grid-cols-2 grid-flow-row">
        <div>
            <label class="text-gray-600 text-lg font-bold text-center my-2 block">Tipo del genero:</label>
            <input type="text" name="type" value="{{ old('type') }}" class="text-gray-600 text-base font-semibold my-2 px-4 py-2 rounded-md border border-gray-600 hover:border-blue-600 focus:ring-1 w-full">
            @error('type')
                <p class="text-red-600 font-bold text-sm block my-2"><small>*{{ $message }}</small></p>
            @enderror
        </div>
        <div class="text-center">
            <button type="submit" class="text-blue-600 text-lg border border-blue-600 bg-white hover:bg-blue-600 hover:text-white rounded-md px-4 py-2 my-10">Subir genero</button>
        </div>
    </div>
@endsection