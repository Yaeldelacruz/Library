@extends('layouts.form')

@section('title', 'Editar')
    
@section('accion')
    {{ route('nacionality.update', $nacionality) }}
@endsection

@section('metodo')
    @method('put')
@endsection

@section('body')
    <div class="grid grid-cols-2 grid-flow-row">
        <div>
            <label class="text-gray-600 text-lg font-bold text-center my-2 block">Nombre del pais:</label>
            <input type="text" name="name" value="{{ old('name', $nacionality->name) }}" class="text-gray-600 text-base font-semibold my-2 px-4 py-2 rounded-md border border-gray-600 hover:border-blue-600 focus:ring-1 w-full">
            @error('name')
                <p class="text-red-600 font-bold text-sm block my-2"><small>*{{ $message }}</small></p>
            @enderror
        </div>
        <div class="text-center">
            <button type="submit" class="text-green-600 text-lg border border-green-600 bg-white hover:bg-green-600 hover:text-white rounded-md px-4 py-2 my-10">Actulizar pais</button>
        </div>
    </div>
@endsection