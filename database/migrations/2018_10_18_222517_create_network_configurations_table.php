<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateNetworkConfigurationsTable
 *
 * @todo
 */
class CreateNetworkConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     */
    public function up()
    {
        Schema::create('network_configurations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('switchport_information_id')->unsigned();
            $table->longText('configuration');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     */
    public function down()
    {
        Schema::dropIfExists('network_configurations');
    }
}