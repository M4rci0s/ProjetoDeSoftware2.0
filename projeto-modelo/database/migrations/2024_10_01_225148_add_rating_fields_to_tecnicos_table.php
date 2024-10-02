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
        Schema::table('tecnicos', function (Blueprint $table) {
            $table->unsignedInteger('total_rating')->default(0)->after('descricao');
            $table->unsignedInteger('rating_count')->default(0)->after('total_rating');
            $table->float('rating', 3, 2)->default(0.00)->after('rating_count'); // Média de 0.00 a 5.00
        });
    }

    /**
     * Reverte a migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tecnicos', function (Blueprint $table) {
            $table->dropColumn(['total_rating', 'rating_count', 'rating']);
        });
    }
};
