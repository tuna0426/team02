<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camps', function (Blueprint $table) {
            $table->id()->unsigned()->comment("編號");
            $table->string('name',191)->comment("名稱");
            $table->string('r_or_b',191)->comment("陣營別(碧藍航線/赤色中軸)");
            $table->string('country',191)->comment("國家");
            $table->timestamp('created_at')->nullable(true)->comment('創建時間');
            $table->timestamp('updated_at')->nullable(true)->comment('修改時間');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camps');
    }
}
