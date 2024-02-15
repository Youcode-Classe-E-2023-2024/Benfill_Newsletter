<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mail_sents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("member")->unsigned();
            $table->bigInteger("mail_template")->unsigned();
            $table->bigInteger("sender")->unsigned();
            $table->foreign("member")->references("id")->on("members");
            $table->foreign("mail_template")->references("id")->on("mail_templates");
            $table->foreign("sender")->references("id")->on("users");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mail_sent');
    }
};
