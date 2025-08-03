<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Kolom untuk nama
            $table->string('email'); // Kolom untuk email
            $table->text('message'); // Kolom untuk pesan
            $table->timestamps(); // Kolom untuk created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
