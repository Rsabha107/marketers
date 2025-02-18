<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('simple_otps', function (Blueprint $table) {
            $table->id();
            $table->string('identity')->index();
            $table->string('code')->index();
            $table->timestamp('validated_at')->nullable();
            $table->timestamp('expires_at')->nullable();
            $table->tinyInteger('attempts')->unsigned()->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('simple_otps');
    }
};
