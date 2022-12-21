<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Crear</title>
</head>
<body>
<div class="py-4">
    <h1 class="text-center font-semibold text-4xl">Registrar estudiante</h1>
</div>
<div class="py-12 mx-16">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-gray-300 border-b border-gray-200 ">
                <form action="{{ route('students.store') }}" method="post">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols2 gap-5 md:gap-8 mt-5 mx-7">
                        <div class="grid grid-cols-1">
                            <label class="uppercase md:text-sm text-xs text-gray-800 font-semibold">Nombre:</label>
                            <input name="name" class="py-2 px-3 rounded-lg border-2 border-indigo-300 mt-1 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-transparent" type="text"/>
                            @error('name')
                            <small style="color:darkred">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols2 gap-5 md:gap-8 mt-5 mx-7">
                        <div class="grid grid-cols-1">
                            <label class="uppercase md:text-sm text-xs text-gray-800 font-semibold">Documento</label>
                            <input name="document" class="py-2 px-3 rounded-lg border-2 border-indigo-300 mt-1 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-transparent" type="text"/>
                        </div>
                        @error('document')
                        <small style="color:darkred">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols2 gap-5 md:gap-8 mt-5 mx-7">
                        <div class="grid grid-cols-1">
                            <label class="uppercase md:text-sm text-xs text-gray-800 font-semibold">Apellido:</label>
                            <input name="last_name" class="py-2 px-3 rounded-lg border-2 border-indigo-300 mt-1 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-transparent" type="text"/>
                        </div>
                        @error('last_name')
                        <small style="color:darkred">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols2 gap-5 md:gap-8 mt-5 mx-7">
                        <div class="grid grid-cols-1">
                            <label class="uppercase md:text-sm text-xs text-gray-800 font-semibold">Telefono de contacto</label>
                            <input name="phone_number" class="py-2 px-3 rounded-lg border-2 border-indigo-300 mt-1 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-transparent" type="text"/>
                        </div>
                        @error('phone_number')
                        <small style="color:darkred">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols2 gap-5 md:gap-8 mt-5 mx-7">
                        <div class="grid grid-cols-1">
                            <label class="uppercase md:text-sm text-xs text-gray-800 font-semibold">Correo</label>
                            <input name="email" class="py-2 px-3 rounded-lg border-2 border-indigo-300 mt-1 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-transparent" type="text"/>
                        </div>
                        @error('email')
                        <small style="color:darkred">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols2 gap-5 md:gap-8 mt-5 mx-7">
                        <div class="grid grid-cols-1">
                            <label class="uppercase md:text-sm text-xs text-gray-800 font-semibold">Dirección</label>
                            <input name="address" class="py-2 px-3 rounded-lg border-2 border-indigo-300 mt-1 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-transparent" type="text"/>
                        </div>
                        @error('address')
                        <small style="color:darkred">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols2 gap-5 md:gap-8 mt-5 mx-7">
                        <div class="grid grid-cols-1">
                            <label class="uppercase md:text-sm text-xs text-gray-800 font-semibold">Ciudad:</label>
                            <input name="city" class="py-2 px-3 rounded-lg border-2 border-indigo-300 mt-1 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-transparent" type="text"/>
                        </div>
                        @error('city')
                        <small style="color:darkred">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="grid grid-cols-2 text-center py-6">
                        <a class="mx-8 border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline" href="{{ route('students.index') }}">Cancelar</a>
                        <button class="mx-6 border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline" type="submit">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
