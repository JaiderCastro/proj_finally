<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category              = new Category();
        $category->name        = 'Lacteos';
        $category->description = 'Incluye Quesos, Leches y mas';
        $category->save();

      

        $category1                = new Category();
        $category1->name           = 'Panaderia';
        $category1->description    = 'Incluye Reposteria, Panaderia y demas derivados';
        $category1->save();

        $category2                = new Category();
        $category2->name           = 'Aseo';
        $category2->description    = 'Elementos del aseo y demas derivados';
        $category2->save();

        $category3                = new Category();
        $category3->name           = 'Electrodmesticos';
        $category3->description    = 'Tv,Neveras Y Lavadores';
        $category3->save();
    }
}
