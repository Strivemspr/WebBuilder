<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Bebop::class);
        $this->call(Daruma::class);
        $this->call(DragonBoat::class);
        $this->call(GenzuiRamen::class);
        $this->call(MasterChef::class);
        $this->call(PepperKitchen::class);
        $this->call(SpiceOfIndia::class);
        $this->call(SpillCafe::class);
        $this->call(TheGourmetThai::class);
        $this->call(UmiSushi::class);
        $this->call(VietnameseDelight::class);
        $this->call(WaroengBali::class);
    }
}
