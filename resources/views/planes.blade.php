<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tipos de usuarios') }}
        </h2>
    </x-slot>
    @role('estandar')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("¿Quieres mejorar tu plan?") }}
                </div>
            </div>
        </div>
        <br>
        <br>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container text-center">
                        <div class="row justify-content-around">
                            <div class="col-4">
                                <div class="flip-card rounded">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front rounded">
                                            <img src="{{ URL::asset('img/cesta.png') }}" alt="Usuario Premium" style="width:300px;">
                                            <h1>{{ __("USUARIO GRATUITO") }}</h1>
                                        </div>
                                        <div class="flip-card-back rounded">
                                            <h1 class="pt-5">{{ __("USUARIO GRATUITO") }}</h1>
                                            <li class="pt-3">{{ __("Insertar producto") }}</li>
                                            <li>{{ __("Eliminar producto") }}</li>
                                            <li>{{ __("Modificar producto") }}</li>
                                            <li>{{ __("50 productos máximo") }}</li>
                                            <li>{{ __("Publicidad") }}</li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="flip-card rounded">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front rounded">
                                            <img src="{{ URL::asset('img/cesta.png') }}" alt="Usuario Premium" style="">
                                            <h1>{{ __("USUARIO PREMIUM") }}</h1>
                                        </div>
                                        <div class="flip-card-back rounded">
                                            <h1 class="pt-5">{{ __("USUARIO PREMIUM") }}</h1>
                                            <li class="pt-3">{{ __("Insertar producto") }}</li>
                                            <li>{{ __("Eliminar producto") }}</li>
                                            <li>{{ __("Modificar producto") }}</li>
                                            <li>{{ __("No hay límite de productos") }}</li>
                                            <li>{{ __("No hay anuncios") }}</li>
                                            <li>{{ __("Warnings en los productos") }}</li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endrole
    @role('premium')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("¡Ya tienes el mejor plan! ¿Quieres cambiarlo?") }}
                </div>
            </div>
        </div>
        <br>
        <br>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container text-center">
                        <div class="row justify-content-around">
                            <div class="col-4">
                                <div class="flip-card rounded">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front rounded">
                                            <img src="{{ URL::asset('img/cesta.png') }}" alt="Usuario Premium" style="width:300px;">
                                            <h1>{{ __("USUARIO GRATUITO") }}</h1>
                                        </div>
                                        <div class="flip-card-back rounded">
                                            <h1 class="pt-5">{{ __("USUARIO GRATUITO") }}</h1>
                                            <li class="pt-3">{{ __("Insertar producto") }}</li>
                                            <li>{{ __("Eliminar producto") }}</li>
                                            <li>{{ __("Modificar producto") }}</li>
                                            <li>{{ __("50 productos máximo") }}</li>
                                            <li>{{ __("Publicidad") }}</li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="flip-card rounded">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front rounded">
                                            <img src="{{ URL::asset('img/cesta.png') }}" alt="Usuario Premium" style="">
                                            <h1>{{ __("USUARIO PREMIUM") }}</h1>
                                        </div>
                                        <div class="flip-card-back rounded">
                                            <h1 class="pt-5">{{ __("USUARIO PREMIUM") }}</h1>
                                            <li class="pt-3">{{ __("Insertar producto") }}</li>
                                            <li>{{ __("Eliminar producto") }}</li>
                                            <li>{{ __("Modificar producto") }}</li>
                                            <li>{{ __("No hay límite de productos") }}</li>
                                            <li>{{ __("No hay anuncios") }}</li>
                                            <li>{{ __("Warnings en los productos") }}</li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endrole
</x-app-layout>