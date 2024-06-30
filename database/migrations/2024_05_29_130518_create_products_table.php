<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
   // 2023_xx_xx_create_products_table.php
public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->decimal('price', 8, 2);
        $table->text('description');
        $table->string('image'); // store only the filename
        $table->timestamps();
    });
}


    public function down()
    {
        Schema::dropIfExists('products');
    }
}
