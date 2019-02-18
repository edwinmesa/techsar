<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run ()
    {
        $this->truncateTables([
            't005_us_users',
            't001_us_professions',
            't002_us_rols',
            't003_us_areas',
            't004_us_active',
            't009_rg_countries',
            't010_rg_states',
            't011_rg_city',
            't100_mm_companies',
            't101_mm_regional',
            't102_mm_operations_center',
            't111_mm_customers',
            't112_mm_providers',
            't110_mm_persons',
            't150_mc_brands',
            't151_mc_groups',
            't152_mc_categories',
            't200_mvt_cost_items',
            't153_mc_items',
            't154_mc_warehouses',

        ]);

        $this->call(ProfessionSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(ActiveSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(StateSeeder::class);
//        $this->call(CitySeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(RegionalSeeder::class);
        $this->call(OperationCenterSeeder::class);
        $this->call(PersonSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(ProviderSeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(GroupSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ItemSeeder::class);
        $this->call(CostItemSeeder::class);
        $this->call(WarehouseSeeder::class);

    }


    protected function truncateTables (array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }

}
