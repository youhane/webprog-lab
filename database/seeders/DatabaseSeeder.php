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
            'slug' => 'beauty',
            'image' => 'https://media-assets.vanityfair.it/photos/62ced23aa21376bd525894e1/4:3/w_3359,h_2519,c_limit/1057154458'
        ]);
        Category::create([
            'name' => 'Camera',
            'slug' => 'camera',
            'image' => 'https://shotkit.com/wp-content/uploads/2020/05/dslrvsmirrorless-2.jpg'
        ]);
        Category::create([
            'name' => 'Clothing',
            'slug' => 'clothing',
            'image' => 'https://i.insider.com/5b524c3467627a37008b4568?width=1000&format=jpeg&auto=webp'
        ]);
        Category::create([
            'name' => 'Hobby',
            'slug' => 'hobby',
            'image' => 'https://static.vecteezy.com/system/resources/previews/000/146/658/original/vector-hobby-icon-set.jpg'
        ]);
        Category::create([
            'name' => 'Others',
            'slug' => 'others',
            'image' => 'https://simplissimus.s3.amazonaws.com/production/production/project/29/images/etc.jpg'
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
            'name' => 'Pencil',
            'slug' => 'pencil',
            'description' => 'A pencil is a writing implement used to apply ink to a surface, usually paper, for writing or drawing. Historically, reed pens, quill pens, and dip pens were used, with a nib dipped in ink.',
            'price' => 50000,
            'category_id' => 5
        ]);

        Product::create([
            'name' => 'Eyeshadow',
            'slug' => 'eyeshadow',
            'description' => 'Eyeshadow is a cosmetic that is applied on the eyelids and under the eyebrows. It is commonly used to make the wearer\'s eyes stand out or look more attractive.',
            'price' => 200000,
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Canon EOS 5D Mark III',
            'slug' => 'canon-eos-5d-mark-iii',
            'description' => 'Canon EOS 5D Mark III is a full frame DSLR camera with 22.3MP resolution. It has a 61-point AF system and 4K video recording capability.',
            'price' => 25000000,
            'category_id' => 2
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
            'name' => 'Concealer',
            'slug' => 'concealer',
            'description' => 'Concealer is a cosmetic product used to hide or reduce the appearance of skin blemishes, dark circles under the eyes, and other imperfections.',
            'price' => 250000,
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Nikon D750',
            'slug' => 'nikon-d750',
            'description' => 'Nikon D750 is a full frame DSLR camera with 24.3MP resolution. It has a 51-point AF system and 4K video recording capability.',
            'price' => 35000000,
            'category_id' => 2
        ]);
        Product::create([
            'name' => 'Jacket',
            'slug' => 'jacket',
            'description' => 'A jacket is a mid-stomach–length garment for the upper body. A jacket typically has sleeves, and fastens in the front or slightly on the side.',
            'price' => 400000,
            'category_id' => 3
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
