<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Estudiantes</title>
</head>
<body>
<div class="py-4">
    <h1 class="text-center font-semibold text-4xl">Estudiantes registrados</h1>
</div>
<div class="pl-6">
    <a href="{{ route('students.create') }}" class="border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline">Nuevo</a>
</div>
<div class="py-4">
    <div class=" mx-auto sm:px-6 lg:px-8">
        <div class="bg-gray-200 overflow-hidden shadow-sm">
            <table class="rounded-t-lg m-5 w-5/6 mx-auto">
                <thead class="bg-gray-700">
                <tr class="text-left border-b border-gray-300">
                    <th class="px-4 py-3">document</th>
                    <th class="px-4 py-3">name</th>
                    <th class="px-4 py-3">last_name</th>
                    <th class="px-4 py-3">phone_number</th>
                    <th class="px-4 py-3">email</th>
                    <th class="px-4 py-3">address</th>
                    <th class="px-4 py-3">city</th>
                    <th class="px-4 py-3">Acciones</th>
                </thead>
                </tr>
                </tr>
                @foreach($students as $student)
                    <tr class=" border-b border-gray-600">
                        <td class="px-4 py-3">{{$student->document}}</td>
                        <td class="px-4 py-3">{{$student->name}}</td>
                        <td class="px-4 py-3">{{$student->last_name}}</td>
                        <td class="px-4 py-3">{{$student->phone_number}}</td>
                        <td class="px-4 py-3">{{$student->email}}</td>
                        <td class="px-4 py-3">{{$student->address}}</td>
                        <td class="px-4 py-3">{{$student->city}}</td>
                        <td>
                            <div class="flex flex-grow">
                               <a href="{{ route('students.edit', $student) }}" class="border border-blue-500 bg-blue-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-blue-600 focus:outline-none focus:shadow-outline">Editar</a>
                                <form action="{{ route('students.destroy', $student->id) }}" method="post" class="formDelete">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline">Eliminar</button>
                                </form>
                            </div>
                        </td>
                @endforeach
            </table>
        </div>
    </div>
</div>
<div class="pl-6">
{!! $students->links() !!}
</div>
</div>
</body>
</html>
