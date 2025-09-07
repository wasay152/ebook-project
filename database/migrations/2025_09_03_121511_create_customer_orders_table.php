<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Book;

class CreateCustomerOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('customer_orders', function (Blueprint $table) {
        $table->id();
        $table->string('customer_name');
        $table->string('email');
        $table->string('phone');
        $table->text('address');
        $table->foreignId('book_id')->constrained('books')->onDelete('cascade');
        $table->integer('quantity');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_orders');
    }
}
