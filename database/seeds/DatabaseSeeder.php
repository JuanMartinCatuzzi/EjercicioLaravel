<?php
use App\Director;
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
        // $this->call(UsersTableSeeder::class);
        $director= factory(Director::class)->times(10)->create();
        $movie= factory(Movie::class)->times(50)->create();

        
    }
}
