   <?php

   use Illuminate\Database\Migrations\Migration;
   use Illuminate\Database\Schema\Blueprint;
   use Illuminate\Support\Facades\Schema;

   return new class extends Migration
   {
       /**
        * Запускает миграцию.
        */
       public function up(): void
       {
           Schema::create('employees', function (Blueprint $table) {
               $table->id();
               $table->string('name'); // Имя сотрудника
               $table->string('position'); // Должность
               $table->string('email')->unique(); // Электронная почта
               $table->timestamps(); // Дата создания и обновления
           });

           Schema::create('password_reset_tokens', function (Blueprint $table) {
               $table->string('email')->primary();
               $table->string('token');
               $table->timestamp('created_at')->nullable();
           });

           Schema::create('sessions', function (Blueprint $table) {
               $table->string('id')->primary();
               $table->foreignId('user_id')->nullable()->index();
               $table->string('ip_address', 45)->nullable();
               $table->text('user_agent')->nullable();
               $table->longText('payload');
               $table->integer('last_activity')->index();
           });
       }

       /**
        * Откатывает миграцию.
        */
       public function down(): void
       {
           Schema::dropIfExists('employees'); // Удаление таблицы employees
           Schema::dropIfExists('password_reset_tokens');
           Schema::dropIfExists('sessions');
       }
   };
