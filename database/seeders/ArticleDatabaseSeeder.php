<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;


class ArticleDatabaseSeeder extends Seeder
{

    public function run()
    {
        //first Article
        Article::firstOrCreate([
            'title' => 'How to Find the Video Games of Your Youth 0',
            'slug' => 'How-to-Find-the-Video-Games-of-Your-Youth-0',
            'excerpt' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.',
            'min_to_read' => rand(1, 10),
            'image' =>'seeder/img_1.jpg',
            'views' => rand(1, 500),
            'is_published' => 1,
            //'user_id'=>1,

            'body' => '
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium nam quas inventore, ut iure iste modi eos adipisci ad ea itaque labore earum autem nobis et numquam, minima eius. Nam eius, non unde ut aut sunt eveniet rerum repellendus porro.

            Sint ab voluptates itaque, ipsum porro qui obcaecati cumque quas sit vel. Voluptatum provident id quis quo. Eveniet maiores perferendis officia veniam est laborum, expedita fuga doloribus natus repellendus dolorem ab similique sint eius cupiditate necessitatibus, magni nesciunt ex eos.

            Quis eius aspernatur, eaque culpa cumque reiciendis, nobis at earum assumenda similique ut? Aperiam vel aut, ex exercitationem eos consequuntur eaque culpa totam, deserunt, aspernatur quae eveniet hic provident ullam tempora error repudiandae sapiente illum rerum itaque voluptatem. Commodi, sequi.
            ',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
  //2  Article
  Article::firstOrCreate([
    'title' => 'How to Find the Video Games of Your Youth 2',
    'slug' => 'How-to-Find-the-Video-Games-of-Your-Youth-2',
    'excerpt' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.',
    'min_to_read' => rand(1, 10),
    'image' =>'seeder/img_2.jpg',
    'views' => rand(1, 500),
    'is_published' => 1,
    //'user_id'=>1,

    'body' => '
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium nam quas inventore, ut iure iste modi eos adipisci ad ea itaque labore earum autem nobis et numquam, minima eius. Nam eius, non unde ut aut sunt eveniet rerum repellendus porro.

    Sint ab voluptates itaque, ipsum porro qui obcaecati cumque quas sit vel. Voluptatum provident id quis quo. Eveniet maiores perferendis officia veniam est laborum, expedita fuga doloribus natus repellendus dolorem ab similique sint eius cupiditate necessitatibus, magni nesciunt ex eos.

    Quis eius aspernatur, eaque culpa cumque reiciendis, nobis at earum assumenda similique ut? Aperiam vel aut, ex exercitationem eos consequuntur eaque culpa totam, deserunt, aspernatur quae eveniet hic provident ullam tempora error repudiandae sapiente illum rerum itaque voluptatem. Commodi, sequi.
    ',
    'created_at'=>now(),
    'updated_at'=>now(),
]);
  //6 Article
  Article::firstOrCreate([
    'title' => 'How to Find the Video Games of Your Youth 3',
    'slug' => 'How-to-Find-the-Video-Games-of-Your-Youth-3',
    'excerpt' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.',
    'min_to_read' => rand(1, 10),
    'image' =>'seeder/img_3.jpg',
    'views' => rand(1, 500),
    'is_published' => 1,
    //'user_id'=>1,

    'body' => '
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium nam quas inventore, ut iure iste modi eos adipisci ad ea itaque labore earum autem nobis et numquam, minima eius. Nam eius, non unde ut aut sunt eveniet rerum repellendus porro.

    Sint ab voluptates itaque, ipsum porro qui obcaecati cumque quas sit vel. Voluptatum provident id quis quo. Eveniet maiores perferendis officia veniam est laborum, expedita fuga doloribus natus repellendus dolorem ab similique sint eius cupiditate necessitatibus, magni nesciunt ex eos.

    Quis eius aspernatur, eaque culpa cumque reiciendis, nobis at earum assumenda similique ut? Aperiam vel aut, ex exercitationem eos consequuntur eaque culpa totam, deserunt, aspernatur quae eveniet hic provident ullam tempora error repudiandae sapiente illum rerum itaque voluptatem. Commodi, sequi.
    ',
    'created_at'=>now(),
    'updated_at'=>now(),
]);
  //3 Article
  Article::firstOrCreate([
    'title' => 'How to Find the Video Games of Your Youth 4',
    'slug' => 'How-to-Find-the-Video-Games-of-Your-Youth-4',
    'excerpt' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.',
    'min_to_read' => rand(1, 10),
    'image' =>'seeder/img_4.jpg',
    'views' => rand(1, 500),
    'is_published' => 1,
    //'user_id'=>1,

    'body' => '
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium nam quas inventore, ut iure iste modi eos adipisci ad ea itaque labore earum autem nobis et numquam, minima eius. Nam eius, non unde ut aut sunt eveniet rerum repellendus porro.

    Sint ab voluptates itaque, ipsum porro qui obcaecati cumque quas sit vel. Voluptatum provident id quis quo. Eveniet maiores perferendis officia veniam est laborum, expedita fuga doloribus natus repellendus dolorem ab similique sint eius cupiditate necessitatibus, magni nesciunt ex eos.

    Quis eius aspernatur, eaque culpa cumque reiciendis, nobis at earum assumenda similique ut? Aperiam vel aut, ex exercitationem eos consequuntur eaque culpa totam, deserunt, aspernatur quae eveniet hic provident ullam tempora error repudiandae sapiente illum rerum itaque voluptatem. Commodi, sequi.
    ',
    'created_at'=>now(),
    'updated_at'=>now(),
]);



  //4 Article
  Article::firstOrCreate([
    'title' => 'How to Find the Video Games of Your Youth 5',
    'slug' => 'How-to-Find-the-Video-Games-of-Your-Youth-5',
    'excerpt' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.',
    'min_to_read' => rand(1, 10),
    'image' =>'seeder/img_5.jpg',
    'views' => rand(1, 500),
    'is_published' => 1,
    //'user_id'=>1,

    'body' => '
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium nam quas inventore, ut iure iste modi eos adipisci ad ea itaque labore earum autem nobis et numquam, minima eius. Nam eius, non unde ut aut sunt eveniet rerum repellendus porro.

    Sint ab voluptates itaque, ipsum porro qui obcaecati cumque quas sit vel. Voluptatum provident id quis quo. Eveniet maiores perferendis officia veniam est laborum, expedita fuga doloribus natus repellendus dolorem ab similique sint eius cupiditate necessitatibus, magni nesciunt ex eos.

    Quis eius aspernatur, eaque culpa cumque reiciendis, nobis at earum assumenda similique ut? Aperiam vel aut, ex exercitationem eos consequuntur eaque culpa totam, deserunt, aspernatur quae eveniet hic provident ullam tempora error repudiandae sapiente illum rerum itaque voluptatem. Commodi, sequi.
    ',
    'created_at'=>now(),
    'updated_at'=>now(),
]);

  //5 Article
  Article::firstOrCreate([
    'title' => 'How to Find the Video Games of Your Youth-5',
    'slug' => 'How-to-Find-the-Video-Games-of-Your-Youth-5',
    'excerpt' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.',
    'min_to_read' => rand(1, 10),
    'image' =>'seeder/img_5.jpg',
    'views' => rand(1, 500),
    'is_published' => 1,
    //'user_id'=>1,

    'body' => '
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium nam quas inventore, ut iure iste modi eos adipisci ad ea itaque labore earum autem nobis et numquam, minima eius. Nam eius, non unde ut aut sunt eveniet rerum repellendus porro.

    Sint ab voluptates itaque, ipsum porro qui obcaecati cumque quas sit vel. Voluptatum provident id quis quo. Eveniet maiores perferendis officia veniam est laborum, expedita fuga doloribus natus repellendus dolorem ab similique sint eius cupiditate necessitatibus, magni nesciunt ex eos.

    Quis eius aspernatur, eaque culpa cumque reiciendis, nobis at earum assumenda similique ut? Aperiam vel aut, ex exercitationem eos consequuntur eaque culpa totam, deserunt, aspernatur quae eveniet hic provident ullam tempora error repudiandae sapiente illum rerum itaque voluptatem. Commodi, sequi.
    ',
    'created_at'=>now(),
    'updated_at'=>now(),
]);
  //6 Article
  Article::firstOrCreate([
    'title' => 'How to Find the Video Games of Your Youth 11',
    'slug' => 'How-to-Find-the-Video-Games-of-Your-Youth-11',
    'excerpt' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.',
    'min_to_read' => rand(1, 10),
    'image' =>'seeder/img_11.jpg',
    'views' => rand(1, 500),
    'is_published' => 1,
    //'user_id'=>1,

    'body' => '
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium nam quas inventore, ut iure iste modi eos adipisci ad ea itaque labore earum autem nobis et numquam, minima eius. Nam eius, non unde ut aut sunt eveniet rerum repellendus porro.

    Sint ab voluptates itaque, ipsum porro qui obcaecati cumque quas sit vel. Voluptatum provident id quis quo. Eveniet maiores perferendis officia veniam est laborum, expedita fuga doloribus natus repellendus dolorem ab similique sint eius cupiditate necessitatibus, magni nesciunt ex eos.

    Quis eius aspernatur, eaque culpa cumque reiciendis, nobis at earum assumenda similique ut? Aperiam vel aut, ex exercitationem eos consequuntur eaque culpa totam, deserunt, aspernatur quae eveniet hic provident ullam tempora error repudiandae sapiente illum rerum itaque voluptatem. Commodi, sequi.
    ',
    'created_at'=>now(),
    'updated_at'=>now(),
]);
  //7 Article
  Article::firstOrCreate([
    'title' => 'How to Find the Video Games of Your Youth 7',
    'slug' => 'How-to-Find-the-Video-Games-of-Your-Youth-7',
    'excerpt' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.',
    'min_to_read' => rand(1, 10),
    'image' =>'seeder/img_7.jpg',
    'views' => rand(1, 500),
    'is_published' => 1,
    //'user_id'=>1,

    'body' => '
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium nam quas inventore, ut iure iste modi eos adipisci ad ea itaque labore earum autem nobis et numquam, minima eius. Nam eius, non unde ut aut sunt eveniet rerum repellendus porro.

    Sint ab voluptates itaque, ipsum porro qui obcaecati cumque quas sit vel. Voluptatum provident id quis quo. Eveniet maiores perferendis officia veniam est laborum, expedita fuga doloribus natus repellendus dolorem ab similique sint eius cupiditate necessitatibus, magni nesciunt ex eos.

    Quis eius aspernatur, eaque culpa cumque reiciendis, nobis at earum assumenda similique ut? Aperiam vel aut, ex exercitationem eos consequuntur eaque culpa totam, deserunt, aspernatur quae eveniet hic provident ullam tempora error repudiandae sapiente illum rerum itaque voluptatem. Commodi, sequi.
    ',
    'created_at'=>now(),
    'updated_at'=>now(),
]);
  //8 Article
  Article::firstOrCreate([
    'title' => 'How to Find the Video Games of Your Youth 8',
    'slug' => 'How-to-Find-the-Video-Games-of-Your-Youth-8',
    'excerpt' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.',
    'min_to_read' => rand(1, 10),
    'image' =>'seeder/img_8.jpg',
    'views' => rand(1, 500),
    'is_published' => 1,
    //'user_id'=>1,

    'body' => '
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium nam quas inventore, ut iure iste modi eos adipisci ad ea itaque labore earum autem nobis et numquam, minima eius. Nam eius, non unde ut aut sunt eveniet rerum repellendus porro.

    Sint ab voluptates itaque, ipsum porro qui obcaecati cumque quas sit vel. Voluptatum provident id quis quo. Eveniet maiores perferendis officia veniam est laborum, expedita fuga doloribus natus repellendus dolorem ab similique sint eius cupiditate necessitatibus, magni nesciunt ex eos.

    Quis eius aspernatur, eaque culpa cumque reiciendis, nobis at earum assumenda similique ut? Aperiam vel aut, ex exercitationem eos consequuntur eaque culpa totam, deserunt, aspernatur quae eveniet hic provident ullam tempora error repudiandae sapiente illum rerum itaque voluptatem. Commodi, sequi.
    ',
    'created_at'=>now(),
    'updated_at'=>now(),
]);

  //first Article
  Article::firstOrCreate([
    'title' => 'How to Find the Video Games of Your Youth 9',
    'slug' => 'How-to-Find-the-Video-Games-of-Your-Youth-9',
    'excerpt' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.',
    'min_to_read' => rand(1, 10),
    'image' =>'seeder/img_9.jpg',
    'views' => rand(1, 500),
    'is_published' => 1,
    //'user_id'=>1,

    'body' => '
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium nam quas inventore, ut iure iste modi eos adipisci ad ea itaque labore earum autem nobis et numquam, minima eius. Nam eius, non unde ut aut sunt eveniet rerum repellendus porro.

    Sint ab voluptates itaque, ipsum porro qui obcaecati cumque quas sit vel. Voluptatum provident id quis quo. Eveniet maiores perferendis officia veniam est laborum, expedita fuga doloribus natus repellendus dolorem ab similique sint eius cupiditate necessitatibus, magni nesciunt ex eos.

    Quis eius aspernatur, eaque culpa cumque reiciendis, nobis at earum assumenda similique ut? Aperiam vel aut, ex exercitationem eos consequuntur eaque culpa totam, deserunt, aspernatur quae eveniet hic provident ullam tempora error repudiandae sapiente illum rerum itaque voluptatem. Commodi, sequi.
    ',
    'created_at'=>now(),
    'updated_at'=>now(),
]);
  //first Article
  Article::firstOrCreate([
    'title' => 'How to Find the Video Games of Your Youth 10',
    'slug' => 'How-to-Find-the-Video-Games-of-Your-Youth-10',
    'excerpt' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.',
    'min_to_read' => rand(1, 10),
    'image' =>'seeder/img_10.jpg',
    'views' => rand(1, 500),
    'is_published' => 1,
    //'user_id'=>1,

    'body' => '
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium nam quas inventore, ut iure iste modi eos adipisci ad ea itaque labore earum autem nobis et numquam, minima eius. Nam eius, non unde ut aut sunt eveniet rerum repellendus porro.

    Sint ab voluptates itaque, ipsum porro qui obcaecati cumque quas sit vel. Voluptatum provident id quis quo. Eveniet maiores perferendis officia veniam est laborum, expedita fuga doloribus natus repellendus dolorem ab similique sint eius cupiditate necessitatibus, magni nesciunt ex eos.

    Quis eius aspernatur, eaque culpa cumque reiciendis, nobis at earum assumenda similique ut? Aperiam vel aut, ex exercitationem eos consequuntur eaque culpa totam, deserunt, aspernatur quae eveniet hic provident ullam tempora error repudiandae sapiente illum rerum itaque voluptatem. Commodi, sequi.
    ',
    'created_at'=>now(),
    'updated_at'=>now(),
]);


















    }
}
