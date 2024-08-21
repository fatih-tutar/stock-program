<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Company;
use App\Models\Factory;
use App\Models\Product;
use App\Models\User;
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

        // foreach($urunler as $urun) {
        //     Product::create([
        //         'main_category' => $urun->
        //     ]);
        // }
    }
}
