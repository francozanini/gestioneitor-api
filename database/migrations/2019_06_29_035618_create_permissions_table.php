<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->enum('type', [
                'edit',
                'create',
                'delete',
                'see',
                'pay']);

            $table->bigInteger('expense_id')
                ->references('expenses')
                ->on('id')
                ->nullable(false);

            $table->bigInteger('detail_id')
                ->refences('expenses_details')
                ->on('id')
                ->nullable(false);

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
        Schema::dropIfExists('permissions');
    }
}
