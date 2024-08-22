<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Client;
use App\Models\Company;
use App\Models\Factory;
use App\Models\Inventory;
use App\Models\Price;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $sirketler = DB::table('sirketler')->get();

        // foreach($sirketler as $sirket) {
        //     Company::create([
        //         'name' => $sirket->sirketadi,
        //         'description' => $sirket->sirketaciklama,
        //         'logo' => $sirket->sirketlogo,
        //         'price_list' => $sirket->fiyatlistesi,
        //         'last_back_up' => date('Y-m-d H:i:s', $sirket->yedekalmasaniye)
        //     ]);
        // }

        // $uyeler = DB::table('uyeler')->get();

        // foreach($uyeler as $uye) {
        //     User::create([
        //         'name' => $uye->uye_adi,
        //         'email' => $uye->uye_mail,
        //         'password' => '$2y$12$NzRmoPeI5QeJ5yV8mVPTFOJ4Bx3WEx53FB6vQpXTiAJJryIJmzP1C', //123456789
        //         'phone' => $uye->uye_tel,
        //         'company_id' => $uye->uye_firma,
        //         'role' => $uye->uye_tipi == 2 ? 'admin' : 'employee',
        //         'is_active' => $uye->pasiflik,
        //         'is_deleted' => $uye->uye_silik
        //     ]);
        // }

        // $fabrikalar = DB::table('fabrikalar')->get();

        // foreach($fabrikalar as $fabrika) {
        //     Factory::create([
        //         'name' => $fabrika->fabrika_adi,
        //         'phone' => $fabrika->fabrikatel,
        //         'email' => $fabrika->fabrikaeposta,
        //         'labor' => $fabrika->fabrikaiscilik,
        //         'address' => $fabrika->fabrikaadres,
        //         'amount_due' => $fabrika->fabrikaalacak,
        //         'due_date' => date('Y-m-d'),
        //         'company_id' => $fabrika->sirketid
        //     ]);
        // }

        // $kategoriler = DB::table('kategori')->get();

        // foreach($kategoriler as $kategori) {
        //     Category::create([
        //         'name' => $kategori->kategori_adi,
        //         'type' => $kategori->kategori_tipi == 0 ? 'main' : 'sub',
        //         'parent_id' => $kategori->kategori_ust,
        //         'image' => $kategori->resim,
        //         'columns' => $kategori->sutunlar,
        //         'profit_percentage' => $kategori->karyuzdesi,
        //         'company_id' => $kategori->sirketid
        //     ]);
        // }

        // $urunler = DB::table('urun')->get();

        // $oldCategoryIds = [1,2,3,4,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,41,42,43,44,45,46,47,48,49,50,55,56,57,66,67,69,70,71,79,91,96];
        // $newCategoryIds = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40];
        // $oldFactoryIds = [2,3,4,5,6,14,16,17,18,19,20,22,23,24,25,27,30,31,32,34,36,37,38,39,40,41];
        // $newFactoryIds = [1,2,3,4,5,8,7,9,6,10,11,14,15,16,17,18,19,20,21,23,22,12,13,24,25,26];
        // foreach($urunler as $urun) {
        //     Product::create([
        //         'main_category' => $newCategoryIds[array_search($urun->kategori_bir, $oldCategoryIds)],
        //         'sub_category' => $newCategoryIds[array_search($urun->kategori_iki, $oldCategoryIds)],
        //         'code' => $urun->urun_kodu,
        //         'name' => $urun->urun_adi,
        //         'quantity' => $urun->urun_adet,
        //         'pallet_quantity' => $urun->urun_palet,
        //         'warehouse_quantity' => $urun->urun_depo_adet,
        //         'shelf' => $urun->urun_raf,
        //         'unit_kg' => $urun->urun_birimkg,
        //         'length' => $urun->urun_boy_olcusu,
        //         'cost_price' => $urun->urun_alis,
        //         'selling_price' => $urun->satis,
        //         'factory_id' => $newFactoryIds[array_search($urun->urun_fabrika, $oldFactoryIds)],
        //         'description' => $urun->urun_aciklama,
        //         'stock_quantity' => $urun->urun_stok,
        //         'alert_quantity' => $urun->urun_uyari_stok_adedi,
        //         'warehouse_alert_quantity' => $urun->urun_depo_uyari_adet,
        //         'order' => $urun->urun_sira,
        //         'customer_name' => $urun->musteri_ismi,
        //         'date' => $urun->tarih ? Carbon::createFromFormat('d-m-Y', $urun->tarih)->format('Y-m-d') : null,
        //         'due_date' => $urun->termin ? Carbon::createFromFormat('d-m-Y', $urun->termin)->format('Y-m-d') : null,
        //         'company_id' => $urun->sirketid
        //     ]);
        // }

        // $envanterler = DB::table('envanter')->get();

        // foreach($envanterler as $envanter) {
        //     $product = DB::table('products')->where('code', $envanter->urun_id)->first();

        //     if ($product) {
        //         Inventory::create([
        //             'product_id' => $product->id,
        //             'code' => $envanter->kod,
        //             'diameter' => $envanter->cap,
        //             'width' => $envanter->kalinlik,
        //             'height' => $envanter->c,
        //             'mass' => $envanter->kutle,
        //             'factory' => $envanter->fabrika,
        //             'is_deleted' => $envanter->silik,
        //             'company_id' => $envanter->sirket_id
        //         ]);
        //     }
        // }

        // $firmalar = DB::table('firmalar')->get();

        // foreach($firmalar as $firma) {
        //     Client::create([
        //         'name' => $firma->firmaadi,
        //         'phone' => $firma->firmatel,
        //         'email' => $firma->firmaeposta,
        //         'address' => $firma->firmaadres,
        //         'amount_due' => $firma->firmaalacak,
        //         'due_date' => '2024-08-22',
        //         'company_id' => $firma->sirketid
        //     ]);
        // }

        $fiyatlar = DB::table('fiyatlar')->get();

        foreach($fiyatlar as $fiyat) {
            Price::create([
                'product_no' => $fiyat->urunno,
                'code' => $fiyat->kod,
                'model' => $fiyat->model,
                'amount' => $fiyat->adetmetre,
                'price' => $fiyat->fiyat,
                'technical_drawing' => $fiyat->resim1,
                'product_image' => $fiyat->resim2,
                'description' => $fiyat->aciklama,
                'order' => $fiyat->sira,
                'is_deleted' => $fiyat->silik,
                'company_id' => 2
            ]);
        }
    }
}
