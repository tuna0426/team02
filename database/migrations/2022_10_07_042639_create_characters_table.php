<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) 
        {
            $table->id()->unsigned()->comment("編號");
            $table->string('name')->comment("艦船名字");
            $table->foreignId('cid')->comment("陣營編號(外部鍵)");
            $table->foreign('cid')->references('id')->on('camps')->onDelete("cascade");
            $table->string('rank',191)->comment("艦船級別");
            $table->string('type',191)->comment("艦船類型(7種)");
            $table->string('get',191)->comment("取得方式");
            $table->string('rarity',191)->comment("稀有度");
            $table->time('build_at')->comment("建造所需時間");
            $table->integer("year")->unsigned()->comment("年資");
            $table->integer("displacement")->unsigned()->comment("排水量");
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
        Schema::dropIfExists('characters');
    }
}
