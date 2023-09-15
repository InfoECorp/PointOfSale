<?php

declare(strict_types=1);

use App\Models\Adjustment;
use App\Models\Product;
use App\Models\Warehouse;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdjustedProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adjusted_products', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Adjustment::class)->constrained()->onDelete("NO ACTION");
            $table->foreignIdFor(Product::class)->nullable()->constrained()->onDelete("NO ACTION");
            $table->foreignIdFor(Warehouse::class)->nullable()->constrained()->onDelete("NO ACTION");

            $table->integer('quantity');
            $table->string('type');
            $table->softDeletes();
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
        Schema::dropIfExists('adjusted_products');
    }
}
