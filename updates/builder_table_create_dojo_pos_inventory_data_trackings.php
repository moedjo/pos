<?php namespace Dojo\Pos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDojoPosInventoryDataTrackings extends Migration
{
    public function up()
    {
        Schema::create('dojo_pos_inventory_data_trackings', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('backend_users');

            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('dojo_pos_products');

            $table->integer('in_out_quantity')->default(0);

            $table->string('remaks');

            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dojo_pos_inventory_data_trackings');
    }
}
