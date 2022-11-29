<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id')->constrained('menus')->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum('type', ['1', '2'])->comment("1=divider, 2=module");
            $table->string('module_name');
            $table->string('title');
            $table->string('divider_title');
            $table->string('icon_class');
            $table->string('url');
            $table->integer('order');
            $table->unsignedInteger('parent_id')->nullable();
            $table->enum('target', ['_self', '_blank'])->default('_self');
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
        Schema::dropIfExists('modules');
    }
};
