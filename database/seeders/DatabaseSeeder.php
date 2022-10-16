<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
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
        // User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'gender' => 'Male',
            'dob' => '1990-01-01',
            'country' => 'Nigeria',
            'password' => bcrypt('password'),
            'is_admin' => true
        ]);

        Category::create([
            'name' => 'Beauty',
            'slug' => 'beauty'
        ]);
        Category::create([
            'name' => 'Camera',
            'slug' => 'camera'
        ]);
        Category::create([
            'name' => 'Clothing',
            'slug' => 'clothing'
        ]);
        Category::create([
            'name' => 'Hobby',
            'slug' => 'hobby'
        ]);
        Category::create([
            'name' => 'Others',
            'slug' => 'others'
        ]);

        Product::create([
            'name' => 'Lipstick',
            'slug' => 'lipstick',
            'description' => 'Lipstick is a cosmetic product containing pigments, oils, waxes, and emollients that apply color, texture, and protection to the lips.',
            'price' => 100000,
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Canon EOS 5D Mark IV',
            'slug' => 'canon-eos-5d-mark-iv',
            'description' => 'Canon EOS 5D Mark IV is a full frame DSLR camera with 30.4MP resolution. It has a 61-point AF system and 4K video recording capability.',
            'price' => 30000000,
            'category_id' => 2
        ]);
        Product::create([
            'name' => 'T-Shirt',
            'slug' => 't-shirt',
            'description' => 'A T-shirt is a style of unisex fabric shirt named after the T shape of its body and sleeves. Traditionally it has short sleeves and a round neckline, known as a crew neck, which lacks a collar.',
            'price' => 100000,
            'category_id' => 3
        ]);
        Product::create([
            'name' => 'Guitar',
            'slug' => 'guitar',
            'description' => 'A guitar is a fretted musical instrument that usually has six strings. It is typically played with both hands by strumming or plucking the strings with either a guitar pick or the finger(s)/fingernails of one hand, while simultaneously fretting (pressing the strings against the frets) with the fingers of the other hand.',
            'price' => 1000000,
            'category_id' => 4
        ]);
        Product::create([
            'name' => 'Bottle',
            'slug' => 'bottle',
            'description' => 'A bottle is a rigid container with a neck that is narrower than the body and a mouth. The bottle is typically made of glass, clay, plastic, aluminum or other impervious materials, and often has a shape that facilitates its intended use.',
            'price' => 100000,
            'category_id' => 5
        ]);

        Product::create([
            'name' => 'Foundation',
            'slug' => 'foundation',
            'description' => 'Foundation is a makeup base applied to the face to create an even, uniform color to the complexion, to cover flaws and, sometimes, to change the natural skin tone.',
            'price' => 150000,
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Nikon D850',
            'slug' => 'nikon-d850',
            'description' => 'Nikon D850 is a full frame DSLR camera with 45.7MP resolution. It has a 153-point AF system and 4K video recording capability.',
            'price' => 40000000,
            'category_id' => 2
        ]);
        Product::create([
            'name' => 'Hoodie',
            'slug' => 'hoodie',
            'description' => 'A hoodie is a sweatshirt with a hood. The hood is usually lined with a soft material, such as cotton, and has a drawstring to adjust its size.',
            'price' => 200000,
            'category_id' => 3
        ]);
        Product::create([
            'name' => 'Drum',
            'slug' => 'drum',
            'description' => 'A drum is a member of the percussion group of musical instruments. In the Hornbostel-Sachs classification system, it is a membranophone.',
            'price' => 2000000,
            'category_id' => 4
        ]);

        Product::create([
            'name' => 'Eyeshadow',
            'slug' => 'eyeshadow',
            'description' => 'Eyeshadow is a cosmetic that is applied on the eyelids and under the eyebrows. It is commonly used to make the wearer\'s eyes stand out or look more attractive.',
            'price' => 200000,
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Jeans',
            'slug' => 'jeans',
            'description' => 'Jeans are pants typically made from denim or dungaree cloth. Often the term "jeans" refers to a particular style of pants, called "blue jeans", which were invented by Jacob Davis in partnership with Levi Strauss & Co. in 1873.',
            'price' => 300000,
            'category_id' => 3
        ]);
        Product::create([
            'name' => 'Piano',
            'slug' => 'piano',
            'description' => 'A piano is a musical instrument played by pressing keys, which cause hammers to strike strings that vibrate to produce sound inside a wooden case.',
            'price' => 3000000,
            'category_id' => 4
        ]);
        Product::create([
            'name' => 'Pen',
            'slug' => 'pen',
            'description' => 'A pen is a writing instrument used to apply ink to a surface, usually paper, for writing or drawing. Historically, reed pens, quill pens, and dip pens were used, with a nib dipped in ink. The nib was a piece of metal shaped to a point for writing. Modern pens may use a non-liquid ink, such as a gel, which is then applied to paper or other surface.',
            'price' => 200000,
            'category_id' => 5
        ]);

        Product::create([
            'name' => 'Keyboard',
            'slug' => 'keyboard',
            'description' => 'A keyboard is a typewriter-style device which uses an arrangement of buttons or keys to act as mechanical levers or electronic switches. Following the decline of punch cards and paper tape, interaction via teleprinter-style keyboards became the main input method for computers.',
            'price' => 4000000,
            'category_id' => 4
        ]);
        Product::create([
            'name' => 'Book',
            'slug' => 'book',
            'description' => 'A book is a set of written, printed, illustrated, or blank sheets, made of paper, parchment, or other materials, fastened together to hinge at one side. A single sheet within a book is a leaf, and each side of a leaf is a page. Writing or images can be printed or drawn on a document\'s pages. An electronic image that is formatted to resemble a book on a computer screen, smartphone or e-reader device is known as an electronic book, or e-book.',
            'price' => 300000,
            'category_id' => 5
        ]);
    }
}
