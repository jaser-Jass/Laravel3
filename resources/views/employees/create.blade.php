<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добавить сотрудника</title>
</head>
<body>
    <h1>Добавить нового сотрудника</h1>

    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <label for="name">Имя:</label>
        <input type="text" name="name" required>
        <br>
        <label for="position">Должность:</label>

        <input type="text" name="position" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>
        <button type="submit">Добавить</button>
    </form>
</body>
</html>

