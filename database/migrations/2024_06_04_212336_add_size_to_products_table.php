<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // In the up() method
public function up()
{
    Schema::table('products', function (Blueprint $table) {
        $table->string('size')->nullable();
    });
}

// In the down() method
public function down()
{
    Schema::table('products', function (Blueprint $table) {
        $table->dropColumn('size');
    });
}

};
