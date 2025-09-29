<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_form2b', function (Blueprint $table) {
            $table->string('form2BID')->primary();
            $table->string('user_ID'); // 👈 must exist before foreign key
            $table->string('protocol');
            $table->string('pi_name');
            $table->string('pi_email');
            $table->timestamps();

            // Add foreign key after declaring column
            $table->foreign('user_ID')
                  ->references('user_ID')
                  ->on('tbl_users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_form2b');
    }
};
