<!DOCTYPE html>
<html lang="es">
    @include('layouts.partials.head')
<body>
    <x-app-layout>
        <div class="container mx-auto">
            <h1 class="text-blue-600 text-center font-bold my-2 block text-2xl">Ingrese los datos:</h1>
            <form action="@yield('accion')" method="post" enctype="multipart/form-data">
                @csrf
                @yield('metodo')
                @yield('body')
            </form>
        </div>
    </x-app-layout>
</body>
</html>