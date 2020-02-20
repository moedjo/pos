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
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dojo_pos_inventory_data_trackings');
    }
}
