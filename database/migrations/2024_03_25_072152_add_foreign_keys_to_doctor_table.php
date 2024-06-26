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
        Schema::table('doctor', function (Blueprint $table) {
            $table->foreign('specialist_id', 'fk_doctor_to_specialist')
            ->references('id')->on('specialist') ->onUpdate('CASCADE') ->onDelete ('CASCADE');
            });
        }
            Public function down()
            {
            Schema::table('doctor', function (Blueprint $table) {
            $table->dropForeign('fk_doctor_to_specialist');
            });
}
};