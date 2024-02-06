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
        Schema::create('mail_templates', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("content", 500);
            $table->bigInteger("creator")->unsigned();
            $table->foreign("creator")->references("id")->on("users");
            $table->enum("status", ["published", "draft"]);
            $table->enum("flag", ["active", "deleted"]);
            $table->integer("used")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mail_template');
    }
};
