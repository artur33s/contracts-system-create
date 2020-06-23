<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('contract_number');
            $table->string('place');
            $table->date('date');

             // SELLER (PARDAVEJAS)
             $table->string('seller_full_name');
             $table->string('seller_place_of_residence');
             $table->date('seller_date_of_birth');
             $table->bigInteger('seller_phone_number');

              // BUYER (PIRKEJAS)
              $table->string('buyer_full_name');
              $table->string('buyer_company_name');
              $table->bigInteger('buyer_personal_code');
              $table->string('buyer_place_of_residence');
              $table->bigInteger('buyer_phone_number');

            //sklypo paskirtis
            $table->string('plot_goal');
            // kadastrinis Nr. ____xxxx/yyyy:zzzz____ (ne labai buvo aiskai as padariau string)
            $table->string('cadastral_number');
            $table->string('address');
            $table->string('plot_area');

            // Turto kaina ir atsiskaitymo sąlygos
            $table->string('sum');
            $table->string('bank_name');
            $table->string('invoice_number');
            $table->string('fine_sum');
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
        Schema::dropIfExists('contracts');
    }
}
