<?php
use App\Models\Category;
use App\Models\Group;
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
        Category::create([
            'f152_mc_category_cod' => 10001,
            'f152_mc_category_des' => 'Portatiles',
            'f152_mc_id_group'     =>  $groupId =
                Group::where('f151_mc_id_group', 1)
                ->value('f151_mc_id_group'),
        ]);

        Category::create([
            'f152_mc_category_cod' => 10002,
            'f152_mc_category_des' => 'Monitores',
            'f152_mc_id_group'     =>  $groupId =
                Group::where('f151_mc_id_group', 1)
                    ->value('f151_mc_id_group'),
        ]);

        Category::create([
            'f152_mc_category_cod' => 10003,
            'f152_mc_category_des' => 'Software',
            'f152_mc_id_group'     =>  $groupId =
                Group::where('f151_mc_id_group', 1)
                    ->value('f151_mc_id_group'),
        ]);

        Category::create([
            'f152_mc_category_cod' => 10004,
            'f152_mc_category_des' => 'WorkStations',
            'f152_mc_id_group'     =>  $groupId =
                Group::where('f151_mc_id_group', 1)
                    ->value('f151_mc_id_group'),
        ]);

        Category::create([
            'f152_mc_category_cod' => 10005,
            'f152_mc_category_des' => 'Consolas Video Juegos',
            'f152_mc_id_group'     =>  $groupId =
                Group::where('f151_mc_id_group', 1)
                    ->value('f151_mc_id_group'),
        ]);

        Category::create([
            'f152_mc_category_cod' => 10006,
            'f152_mc_category_des' => 'Gadgets',
            'f152_mc_id_group'     =>  $groupId =
                Group::where('f151_mc_id_group', 1)
                    ->value('f151_mc_id_group'),
        ]);

        Category::create([
            'f152_mc_category_cod' => 10007,
            'f152_mc_category_des' => 'Audio',
            'f152_mc_id_group'     =>  $groupId =
                Group::where('f151_mc_id_group', 2)
                    ->value('f151_mc_id_group'),
        ]);

        Category::create([
            'f152_mc_category_cod' => 10008,
            'f152_mc_category_des' => 'Componentes y Video',
            'f152_mc_id_group'     =>  $groupId =
                Group::where('f151_mc_id_group', 2)
                    ->value('f151_mc_id_group'),
        ]);

        Category::create([
            'f152_mc_category_cod' => 10009,
            'f152_mc_category_des' => 'Accesorios Audio y Video',
            'f152_mc_id_group'     =>  $groupId =
                Group::where('f151_mc_id_group', 2)
                    ->value('f151_mc_id_group'),
        ]);

        Category::create([
            'f152_mc_category_cod' => 10010,
            'f152_mc_category_des' => 'Electrodomesticos',
            'f152_mc_id_group'     =>  $groupId =
                Group::where('f151_mc_id_group', 3)
                    ->value('f151_mc_id_group'),
        ]);

        Category::create([
            'f152_mc_category_cod' => 10011,
            'f152_mc_category_des' => 'Cocina',
            'f152_mc_id_group'     =>  $groupId =
                Group::where('f151_mc_id_group', 3)
                    ->value('f151_mc_id_group'),
        ]);

        Category::create([
            'f152_mc_category_cod' => 10012,
            'f152_mc_category_des' => 'Decoracion',
            'f152_mc_id_group'     =>  $groupId =
                Group::where('f151_mc_id_group', 3)
                    ->value('f151_mc_id_group'),
        ]);


        Category::create([
            'f152_mc_category_cod' => 10013,
            'f152_mc_category_des' => 'Medicamentos',
            'f152_mc_id_group'     =>  $groupId =
                Group::where('f151_mc_id_group', 4)
                    ->value('f151_mc_id_group'),
        ]);

        Category::create([
            'f152_mc_category_cod' => 10014,
            'f152_mc_category_des' => 'Maquillaje',
            'f152_mc_id_group'     =>  $groupId =
                Group::where('f151_mc_id_group', 4)
                    ->value('f151_mc_id_group'),
        ]);

        Category::create([
            'f152_mc_category_cod' => 10015,
            'f152_mc_category_des' => 'Perfumeria',
            'f152_mc_id_group'     =>  $groupId =
                Group::where('f151_mc_id_group', 4)
                    ->value('f151_mc_id_group'),
        ]);

        Category::create([
            'f152_mc_category_cod' => 10016,
            'f152_mc_category_des' => 'Moda',
            'f152_mc_id_group'     =>  $groupId =
                Group::where('f151_mc_id_group', 5)
                    ->value('f151_mc_id_group'),
        ]);
    }
}
