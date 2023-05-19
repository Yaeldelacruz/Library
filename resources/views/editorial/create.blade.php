@extends('layouts.form')

@section('title', 'Crear')
    
@section('accion')
    {{ route('editorial.store') }}
@endsection

@section('body')
    <div class="grid grid-cols-4 grid-flow-row gap-4">
        <div>
            <label class="text-gray-600 text-lg font-bold text-center my-2 block">Nombre de la editorial:</label>
            <input type="text" name="name" value="{{ old('name') }}" class="text-gray-600 text-base font-semibold my-2 px-4 py-2 rounded-md border border-gray-600 hover:border-blue-600 focus:ring-1 w-full">
            @error('name')
                <p class="text-red-600 font-bold text-sm block my-2"><small>*{{ $message }}</small></p>
            @enderror
        </div>
        <div>
            <label class="text-gray-600 text-lg font-bold text-center my-2 block">Genero de editorial:</label>
            <select name="gender_id" class="text-gray-600 text-base font-semibold my-2 px-4 py-2 rounded-md border border-gray-600 hover:border-blue-600 focus:ring-1 w-full">
                @foreach ($genders as $gender)
                    <option value="{{ $gender->id }}">{{ $gender->type }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label class="text-gray-600 text-lg font-bold text-center my-2 block">Pais de editorial:</label>
            <select name="nacionality_id" class="text-gray-600 text-base font-semibold my-2 px-4 py-2 rounded-md border border-gray-600 hover:border-blue-600 focus:ring-1 w-full">
                @foreach ($nacionalities as $nacionality)
                    <option value="{{ $nacionality->id }}">{{ $nacionality->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="text-center">
            <button type="submit" class="text-blue-600 text-lg border border-blue-600 bg-white hover:bg-blue-600 hover:text-white rounded-md px-4 py-2 my-10">Subir editorial</button>
        </div>
    </div>
@endsection