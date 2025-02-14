<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employee;

Route::get('/test_database', function () {
    $employee = new Employee();
    $employee->name = 'Пётр Иванович Петров';
    $employee->position = 'Директор';
    $employee->email = 'petrpetrov@example.com';

    $employee->save();

    return "Новый сотрудник успешно добавлен!";
});
