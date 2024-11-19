<?php

use App\Models\Product;
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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title',30);
            $table->string('description',100);
            $table->integer('price')->min(0)->default(0);
            $table->string('category',20);
            $table->string('image',250)->default('//');
            $table->timestamps();
        });
        Product::create([
            'title' => "Fekete póló",
            'description' => "fekete férfi póló pamutból",
            'price' => 4995, 
            'category' => 'ruha',
        ]);
        Product::create([
            'title' => "Kék farmer",
            'description' => "Divatos kék farmer nadrág",
            'price' => 8995,
            'category' => 'ruha',
        ]);
        Product::create([
            'title' => "Arany fülbevaló",
            'description' => "Elegáns arany fülbevaló nőknek",
            'price' => 29995,
            'category' => 'ékszer',
        ]);
        Product::create([
            'title' => "Gyémánt nyaklánc",
            'description' => "Ragyogó gyémánt nyaklánc, kiváló minőség",
            'price' => 159995,
            'category' => 'ékszer',
        ]);
        Product::create([
            'title' => "Női sportcipő",
            'description' => "Kényelmes női sportcipő futáshoz",
            'price' => 19995,
            'category' => 'cipő',
        ]);
        Product::create([
            'title' => "Férfi bőrcipő",
            'description' => "Elegáns férfi bőrcipő, ideális alkalmi viselethez",
            'price' => 34995,
            'category' => 'cipő',
        ]);
        Product::create([
            'title' => "Vezeték nélküli fülhallgató",
            'description' => "Bluetooth technológiás prémium fülhallgató",
            'price' => 24995,
            'category' => 'elektronika',
        ]);
        Product::create([
            'title' => "Okosóra",
            'description' => "Vízálló okosóra beépített pulzusmérővel",
            'price' => 49995,
            'category' => 'elektronika',
        ]);
        Product::create([
            'title' => "Ezüst karkötő",
            'description' => "Letisztult, modern ezüst karkötő",
            'price' => 15995,
            'category' => 'ékszer',
        ]);
        Product::create([
            'title' => "Drágaköves gyűrű",
            'description' => "Exkluzív drágaköves gyűrű, kézzel készített",
            'price' => 84995,
            'category' => 'ékszer',
        ]);
        Product::create([
            'title' => "Női magassarkú cipő",
            'description' => "Elegáns női magassarkú cipő estére",
            'price' => 25995,
            'category' => 'cipő',
        ]);
        Product::create([
            'title' => "Férfi túracipő",
            'description' => "Tartós férfi túracipő a szabadtéri kalandokhoz",
            'price' => 29995,
            'category' => 'cipő',
        ]);
        Product::create([
            'title' => "Okostelefon",
            'description' => "Legújabb generációs okostelefon nagyképernyővel",
            'price' => 249995,
            'category' => 'elektronika',
        ]);
        Product::create([
            'title' => "Hordozható hangszóró",
            'description' => "Kompakt méretű Bluetooth hangszóró kiváló hangminőséggel",
            'price' => 19995,
            'category' => 'elektronika',
        ]);
        Product::create([
            'title' => "Rubin medál",
            'description' => "Gyönyörű rubin medál arany láncon",
            'price' => 74995,
            'category' => 'ékszer',
        ]);
        Product::create([
            'title' => "Férfi sportcipő",
            'description' => "Lélegző férfi sportcipő mindennapi használatra",
            'price' => 19995,
            'category' => 'cipő',
        ]);
        Product::create([
            'title' => "Táblagép",
            'description' => "Könnyű és nagy teljesítményű táblagép",
            'price' => 149995,
            'category' => 'elektronika',
        ]);
        Product::create([
            'title' => "Női bokacsizma",
            'description' => "Stílusos női bokacsizma bőr felsőrésszel",
            'price' => 39995,
            'category' => 'cipő',
        ]);
        Product::create([
            'title' => "Digitális fényképezőgép",
            'description' => "Professzionális digitális fényképezőgép cserélhető objektívvel",
            'price' => 399995,
            'category' => 'elektronika',
        ]);
        Product::create([
            'title' => "Okos asztali lámpa",
            'description' => "Többfunkciós okos lámpa állítható fényerővel",
            'price' => 12995,
            'category' => 'elektronika',
        ]);
        
    
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
