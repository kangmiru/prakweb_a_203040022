<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Hafadz Hazmirullah',
        //     'email' => '203040022@mail.unpas.ac.id',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Asep Sutisna',
        //     'email' => 'asep@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis esse adipisci nobis.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis esse adipisci nobis. A aliquid sapiente eos, sed itaque deleniti iusto expedita, ipsam fugiat sequi animi officia aspernatur eius odit ipsum, assumenda debitis delectus quidem tempore rem. Molestias laudantium fugit consequatur magnam doloremque repellat quam cum facilis iusto laborum natus incidunt, nam hic! Cupiditate ratione natus, incidunt, reiciendis vel laboriosam modi inventore vero iure nobis aspernatur aliquam ut voluptatibus temporibus illo cum aperiam corrupti deleniti. Error minima excepturi consequuntur cupiditate accusantium aspernatur neque praesentium. Eveniet harum, ullam hic quasi sequi et saepe possimus, voluptates doloremque nihil iusto cumque cum, vitae earum?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis esse adipisci nobis.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis esse adipisci nobis. A aliquid sapiente eos, sed itaque deleniti iusto expedita, ipsam fugiat sequi animi officia aspernatur eius odit ipsum, assumenda debitis delectus quidem tempore rem. Molestias laudantium fugit consequatur magnam doloremque repellat quam cum facilis iusto laborum natus incidunt, nam hic! Cupiditate ratione natus, incidunt, reiciendis vel laboriosam modi inventore vero iure nobis aspernatur aliquam ut voluptatibus temporibus illo cum aperiam corrupti deleniti. Error minima excepturi consequuntur cupiditate accusantium aspernatur neque praesentium. Eveniet harum, ullam hic quasi sequi et saepe possimus, voluptates doloremque nihil iusto cumque cum, vitae earum?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis esse adipisci nobis.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis esse adipisci nobis. A aliquid sapiente eos, sed itaque deleniti iusto expedita, ipsam fugiat sequi animi officia aspernatur eius odit ipsum, assumenda debitis delectus quidem tempore rem. Molestias laudantium fugit consequatur magnam doloremque repellat quam cum facilis iusto laborum natus incidunt, nam hic! Cupiditate ratione natus, incidunt, reiciendis vel laboriosam modi inventore vero iure nobis aspernatur aliquam ut voluptatibus temporibus illo cum aperiam corrupti deleniti. Error minima excepturi consequuntur cupiditate accusantium aspernatur neque praesentium. Eveniet harum, ullam hic quasi sequi et saepe possimus, voluptates doloremque nihil iusto cumque cum, vitae earum?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis esse adipisci nobis.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis esse adipisci nobis. A aliquid sapiente eos, sed itaque deleniti iusto expedita, ipsam fugiat sequi animi officia aspernatur eius odit ipsum, assumenda debitis delectus quidem tempore rem. Molestias laudantium fugit consequatur magnam doloremque repellat quam cum facilis iusto laborum natus incidunt, nam hic! Cupiditate ratione natus, incidunt, reiciendis vel laboriosam modi inventore vero iure nobis aspernatur aliquam ut voluptatibus temporibus illo cum aperiam corrupti deleniti. Error minima excepturi consequuntur cupiditate accusantium aspernatur neque praesentium. Eveniet harum, ullam hic quasi sequi et saepe possimus, voluptates doloremque nihil iusto cumque cum, vitae earum?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
