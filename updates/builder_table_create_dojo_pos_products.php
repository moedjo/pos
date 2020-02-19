<?php namespace Dojo\Pos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDojoPosProducts extends Migration
{
    public function up()
    {
        Schema::create('dojo_pos_products', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('barcode', 100);
            $table->string('name', 100);

            $table->integer('quantity')->default(0);
            $table->integer('reorder_level')->default(0);

            $table->decimal('wholesale_price', 15, 2)->default(0);
            $table->decimal('retail_price', 15, 2)->default(0);


            $table->integer('sort_order')->default(0);
            
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();

            $table->string('description');

            $table->integer('product_id')->unsigned()->nullable();
            $table->foreign('product_id')->references('id')->on('dojo_pos_products');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dojo_pos_products');
    }
}
