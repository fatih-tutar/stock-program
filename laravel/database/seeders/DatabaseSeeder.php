<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Client;
use App\Models\Company;
use App\Models\DailyMovement;
use App\Models\Factory;
use App\Models\Inventory;
use App\Models\Mold;
use App\Models\MoldList;
use App\Models\Offer;
use App\Models\OfferForm;
use App\Models\Order;
use App\Models\OrderForm;
use App\Models\Price;
use App\Models\Product;
use App\Models\Sale;
use App\Models\Transaction;
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

        $oldCategoryIds = [1,2,3,4,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,41,42,43,44,45,46,47,48,49,50,55,56,57,66,67,69,70,71,79,91,96];
        $newCategoryIds = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40];

        $oldUserIds = [1,2,9,12,14,16,18,20,21,23,25,32,33,51,52,53,54,55];
        $newUserIds = [7,8,10,13,9,12,14,15,11,16,17,19,20,24,23,18,21,22];

        $oldFactoryIds = [2,3,4,5,6,14,16,17,18,19,20,22,23,24,25,27,30,31,32,34,36,37,38,39,40,41];
        $newFactoryIds = [1,2,3,4,5,8,7,9,6,10,11,14,15,16,17,18,19,20,21,23,22,12,13,24,25,26];

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
        //         'permissions' => $uye->yetkiler,
        //         'is_active' => $uye->pasiflik,
        //         'is_deleted' => $uye->uye_silik
        //     ]);
        // }

        // $uyeler = DB::table('uyeler')->get();
        // foreach($uyeler as $uye) {
        //     $id = $newUserIds[array_search($uye->uye_id, $oldUserIds)];
        //     User::where('id',$id)->update([
        //         'permissions' => $uye->uye_yetkiler
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

        // $fiyatlar = DB::table('fiyatlar')->get();
        // foreach($fiyatlar as $fiyat) {
        //     Price::create([
        //         'product_no' => $fiyat->urunno,
        //         'code' => $fiyat->kod,
        //         'model' => $fiyat->model,
        //         'amount' => $fiyat->adetmetre,
        //         'price' => $fiyat->fiyat,
        //         'technical_drawing' => $fiyat->resim1,
        //         'product_image' => $fiyat->resim2,
        //         'description' => $fiyat->aciklama,
        //         'order' => $fiyat->sira,
        //         'is_deleted' => $fiyat->silik,
        //         'company_id' => 2
        //     ]);
        // }

        // $gelengidenler = DB::table('gelengiden')->get();
        // foreach($gelengidenler as $gelengiden) {
        //     DailyMovement::create([
        //         'store_incoming' => $gelengiden->gelen,
        //         'store_outgoing' => $gelengiden->giden,
        //         'warehouse_incoming' => $gelengiden->alkop_gelen,
        //         'warehouse_outgoing' => $gelengiden->alkop_giden,
        //         'is_deleted' => $gelengiden->silik,
        //         'company_id' => 2
        //     ]);
        // }

        // $islemler = DB::table('islemler')->get();
        // foreach($islemler as $islem) {
        //     $product = DB::table('products')->where('code', $islem->urunid)->first();
        //     if($product) {
        //         Transaction::create([
        //             'user_id' => $newUserIds[array_search($islem->yapanid, $oldUserIds)],
        //             'product_id' => $product->id,
        //             'old_quantity' => $islem->eskiadet,
        //             'new_quantity' => $islem->yeniadet,
        //             'type' => $islem->islem_tipi == 0 ? 'incoming' : 'outcoming',
        //             'company_id' => 2
        //         ]);
        //     }
        // }

        // $kaliplar = DB::table('kaliplar')->get();
        // foreach($kaliplar as $kalip) {
        //     Mold::create([
        //         'customer_name' => $kalip->musteriadi,
        //         'mold_number' => $kalip->kalipnumarasi,
        //         'factory_id' => $newFactoryIds[array_search($kalip->fabrikaid, $oldFactoryIds)],
        //         'pdf' => $kalip->pdf,
        //         'company_id' => 2
        //     ]);
        // }

        // $kaliplistesi = DB::table('kalip_listesi')->get();
        // foreach($kaliplistesi as $kalip) {
        // $moldListStatuses = ['normal', 'deleted', 'archived_add', 'arciheved_remove'];
        //     MoldList::create([
        //         'customer' => $kalip->musteri,
        //         'contact_person' => $kalip->ilgilikisi,
        //         'product_info' => $kalip->urunmiktar,
        //         'price' => $kalip->fiyat,
        //         'factory' => $kalip->fabrika,
        //         'factory_price' => $kalip->fabrikafiyat,
        //         'user_id' => $newUserIds[array_search($kalip->teklifveren, $oldUserIds)],
        //         'description' => $kalip->aciklama,
        //         'status' => $moldListStatuses[$kalip->silik],
        //         'company_id' => 2
        //     ]);
        // }

        // $sevkiyatlar = DB::table('sevkiyat')->get();
        // foreach($sevkiyatlar as $sevkiyat) {
        //     $firma = DB::table('firmalar')->where('firmaid',$sevkiyat->firma_id)->first();
        //     if($firma) {
        //         $client = DB::table('clients')->where('name',$firma->firmaadi)->first();
        //         $deliveryMethods = ['store', 'depot', 'local', 'warehouse'];
        //         $statuses = ['received', 'preparing', 'invoiced', 'archived'];
        //         if(empty($sevkiyat->sevk_tipi)) $sevkiyat->sevk_tipi = 0;
        //         if(in_array($sevkiyat->olusturan,$oldCategoryIds) && in_array($sevkiyat->hazirlayan,$oldCategoryIds) & in_array($sevkiyat->faturaci,$oldCategoryIds)) {
        //             $productIdsArray = explode(",", $sevkiyat->urunler);
        //             $productIds = '';
        //             foreach($productIdsArray as $item) {
        //                 $newProductId = DB::table('products')->where('code', $item)->first()->id;
        //                 $productIds = empty($productIds) ? $newProductId : $productIds.",".$newProductId;
        //             }
        //             Sale::create([
        //                 'products' => $productIds,
        //                 'client_id' => $client->id,
        //                 'quantities' => $sevkiyat->adetler,
        //                 'weights' => $sevkiyat->kilolar,
        //                 'prices' => $sevkiyat->fiyatlar,
        //                 'created_by' => $newUserIds[array_search($sevkiyat->olusturan,$oldCategoryIds)],
        //                 'prepared_by' => $newUserIds[array_search($sevkiyat->hazirlayan,$oldCategoryIds)],
        //                 'invoiced_by' => $newUserIds[array_search($sevkiyat->faturaci,$oldCategoryIds)],
        //                 'delivery_method' => $deliveryMethods[$sevkiyat->sevk_tipi],
        //                 'description' => $sevkiyat->aciklama,
        //                 'status' => $statuses[$sevkiyat->durum],
        //                 'is_deleted' => $sevkiyat->silik,
        //                 'company_id' => 2
        //             ]);
        //         }
        //     }
        // }

        // $siparisler = DB::table('siparis')->get();
        // foreach($siparisler as $siparis) {
        //     $termin = $siparis->terminsaniye;
        //     $dueDate = Carbon::createFromTimestamp($termin)->format('Y-m-d');
        //     $preparedBy = DB::table('users')->where('name', $siparis->hazirlayankisi)->first();
        //     $product = DB::table('products')->where('code', $siparis->urun_id)->first();
        //     if($preparedBy && $product){
        //         Order::create([
        //             'prepared_by' => $preparedBy->id,
        //             'factory_id' => $newFactoryIds[array_search($siparis->urun_fabrika_id, $oldFactoryIds)],
        //             'contact_person' => $siparis->ilgilikisi,
        //             'product_id' => $product->id,
        //             'quantity' => $siparis->urun_siparis_aded,
        //             'length' => $siparis->siparisboy,
        //             'due_date' => $dueDate,
        //             'is_draft' => $siparis->taslak,
        //             'is_form' => $siparis->formda,
        //             'is_deleted' => $siparis->silik,
        //             'company_id' => 2,
        //              'oldId' => $siparis->siparis_id
        //         ]);
        //     }
        // }

        // $siparisFormlari = DB::table('siparisformlari')->get();
        // foreach($siparisFormlari as $siparisFormu) {
        //     $orderIdsArray = explode(",", $siparisFormu->siparisler);
        //     $orderIds = '';
        //     foreach($orderIdsArray as $item) {
        //         $newOrder = DB::table('orders')->where('oldId', $item)->first();
        //         if($newOrder){
        //             $newOrderId = $newOrder->id;
        //             $orderIds = empty($orderIds) ? $newOrderId : $orderIds.",".$newOrderId;
        //         }
        //     }
        //     OrderForm::create([
        //         'orders' => $orderIds,
        //         'factory_id' => $newFactoryIds[array_search($siparisFormu->fabrikaid, $oldFactoryIds)],
        //         'company_id' => 2,
        //         'is_deleted' => $siparisFormu->silik
        //     ]);
        // }

        // $teklifler = DB::table('teklif')->get();
        // foreach($teklifler as $teklif) {
        //     $product = DB::table('products')->where('code', $teklif->turunid)->first();
        //     $firma = DB::table('firmalar')->where('firmaid',$teklif->tverilenfirma)->first();
        //     if($firma) {
        //         $client = DB::table('clients')->where('name',$firma->firmaadi)->first();
        //         if($product) {
        //             Offer::create([
        //                 'product_id' => $product->id,
        //                 'client_id' => $client->id,
        //                 'quantity' => $teklif->tadet,
        //                 'price' => $teklif->tsatisfiyati,
        //                 'is_form' => $teklif->formda,
        //                 'is_deleted' => $teklif->silik,
        //                 'company_id' => 2,
        //                 'old_id' => $teklif->teklifid
        //             ]);
        //         }
        //     }
        // }

        $teklifFormlari = DB::table('teklifformlari')->get();
        foreach($teklifFormlari as $teklifFormu) {
            $offerIdsArray = explode(",", $teklifFormu->tekliflistesi);
            $offerIds = '';
            foreach($offerIdsArray as $item) {
                $newOffer = DB::table('offers')->where('old_id', $item)->first();
                if($newOffer){
                    $newOfferId = $newOffer->id;
                    $offerIds = empty($offerIds) ? $newOfferId : $offerIds.",".$newOfferId;
                }
            }
            $firma = DB::table('firmalar')->where('firmaid',$teklifFormu->firmaid)->first();
            if($firma) {
                $client = DB::table('clients')->where('name',$firma->firmaadi)->first();
                OfferForm::create([
                    'offers' => $offerIds,
                    'client_id' => $client->id,
                    'company_id' => 2,
                    'is_deleted' => $teklifFormu->silik
                ]);
            }
        }
    }
}
