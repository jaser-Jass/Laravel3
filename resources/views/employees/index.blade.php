<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Список сотрудников</title>
</head>
<body>
    <h1>Список сотрудников</h1>
    <a href="{{ route('employees.create') }}">Добавить сотрудника</a>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Должность</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->position }}</td>
                    <td>{{ $employee->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
