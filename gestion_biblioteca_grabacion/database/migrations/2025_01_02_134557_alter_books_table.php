<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('books', function (Blueprint $table){
            $table ->unsignedBigInteger('author_id')->nullable(); //nueva columna,permite null
            $table->foreign('author_id')->references('id')->on('author')->onDelete('set null');
            //decir que es una foreign key, referencia id de autores
            //si se borra el autor dejamos autor en null y no se borra el libro
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
