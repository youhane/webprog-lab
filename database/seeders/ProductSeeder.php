<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $BEAUTIES = [
            [
                "name" => "Foundation",
                "slug" => "foundation",
                "description" => "Foundation is a cosmetic that is applied to the face to create an even, uniform color to the complexion, to cover flaws and, sometimes, to change the natural skin tone.",
                "price" => 150000,
                "category_id" => 1,
                'image' => 'product-images/foundation.png'
            ],
            [
                "name" => "Mascara",
                "slug" => "mascara",
                "description" => "Mascara is a cosmetic commonly used to enhance the eyelashes. It may darken, thicken, lengthen, and/or define the eyelashes.",
                "price" => 100000,
                "category_id" => 1,
                'image' => 'product-images/mascara.jpg'
            ],
            [
                "name" => "Eyeliner",
                "slug" => "eyeliner",
                "description" => "Eyeliner is a cosmetic used to define the eyes. It is applied around the contours of the eye to create a variety of effects, such as increasing the apparent size, changing the shape, or changing the color of the eye.",
                "price" => 100000,
                "category_id" => 1,
                'image' => 'product-images/eyeliner.jpg'
            ],
            [
                "name" => "Bronzer",
                "slug" => "bronzer",
                "description" => "Bronzer is a cosmetic that gives the skin a sun-kissed glow. It is typically applied to the face, neck, and shoulders.",
                "price" => 100000,
                "category_id" => 1,
                'image' => 'product-images/bronzer.jpg'
            ],
            [
                "name" => "Eyeshadow",
                "slug" => "eyeshadow",
                "description" => "Eyeshadow is a cosmetic that is applied on the eyelids and under the eyebrows. It is commonly used to make the wearer's eyes stand out or look more attractive.",
                "price" => 200000,
                "category_id" => 1,
                'image' => 'product-images/eyeshadow.jpg'
            ],
            [
                "name" => "Concealer",
                "slug" => "concealer",
                "description" => "Concealer is a cosmetic product used to hide or reduce the appearance of skin blemishes, dark circles under the eyes, and other imperfections.",
                "price" => 250000,
                "category_id" => 1,
                'image' => 'product-images/concealer.jpg'
            ],
            [
                "name" => "Nail Polish",
                "slug" => "nail-polish",
                "description" => "Nail polish is a lacquer that can be applied to the human fingernail or toenail to decorate and protect the nail plates. The formulation has been revised repeatedly to enhance its decorative effects, and to suppress cracking and chipping.",
                "price" => 100000,
                "category_id" => 1,
                'image' => 'product-images/nailpolish.jpg'
            ],
            [
                "name" => "Lip Gloss",
                "slug" => "lip-gloss",
                "description" => "Lip gloss is a cosmetic product containing pigments, oils, waxes, and emollients that apply color, texture, and protection to the lips.",
                "price" => 100000,
                "category_id" => 1,
                'image' => 'product-images/lipgloss.jpg'
            ],
            [
                "name" => "Eyebrow Pencil",
                "slug" => "eyebrow-pencil",
                "description" => "Eyebrow pencil is a cosmetic product used to fill in the eyebrows. It is typically used to create a fuller appearance to the eyebrows, or to prevent eyebrow makeup from feathering or bleeding outside the natural eyebrow line.",
                "price" => 100000,
                "category_id" => 1,
                'image' => 'product-images/eyebrowpencil.jpg'
            ],
        ];

        $CAMERAS = [
            [
                "name" => "DSLR Camera",
                "slug" => "dslr-camera",
                "description" => "A digital single-lens reflex camera (also called a digital SLR or DSLR) is a digital camera that combines the optics and the mechanisms of a single-lens reflex camera with a digital imaging sensor, as opposed to photographic film.",
                "price" => 10000000,
                "category_id" => 2,
                'image' => 'product-images/nikon5000.jpeg'
            ],
            [
                "name" => "Mirrorless Camera",
                "slug" => "mirrorless-camera",
                "description" => "A mirrorless camera is a digital camera that lacks an optical viewfinder and a reflex mirror in the optical path. Instead, the image viewed through the lens is captured by an electronic image sensor.",
                "price" => 5000000,
                "category_id" => 2,
                'image' => 'product-images/sony-zeiss.jpg'
            ],
        ];

        $CLOTHING = [
            [
                "name" => "T-Shirt",
                "slug" => "t-shirt",
                "description" => "A T-shirt is a style of unisex fabric shirt named after the T shape of its body and sleeves. Traditionally it has short sleeves and a round neckline, known as a crew neck, which lacks a collar.",
                "price" => 100000,
                "category_id" => 3,
                'image' => 'product-images/tshirt.jpg'
            ],
            [
                "name" => "Tank Top",
                "slug" => "tank-top",
                "description" => "A tank top is a sleeveless, close-fitting, and often loose-fitting garment",
                "price" => 100000,
                "category_id" => 3,
                'image' => 'product-images/tanktop.jpg'
            ],
            [
                "name" => "Sweater",
                "slug" => "sweater",
                "description" => "A sweater is a knitted garment that covers the upper body and arms. It is usually worn over a shirt, blouse, T-shirt, or other top, but it is often worn over nothing at all when it is used as a pullover.",
                "price" => 100000,
                "category_id" => 3,
                'image' => 'product-images/sweater.jpg'
            ],
            [
                "name" => "Hoodie",
                "slug" => "hoodie",
                "description" => "A hoodie is a sweatshirt with a hood. It is usually made of fleece, cotton or a cotton/polyester blend, and often includes",
                "price" => 100000,
                "category_id" => 3,
                'image' => 'product-images/hoodie.jpg'
            ],
            [
                "name" => "Jacket",
                "slug" => "jacket",
                "description" => "A jacket is a mid-stomach–length garment for the upper body. A jacket typically has sleeves, and fastens in the front or slightly on the side.",
                "price" => 100000,
                "category_id" => 3,
                'image' => 'product-images/jacket.jpg'
            ],
        ];

        $HOBBIES = [
            [
                "name" => "Guitar",
                "slug" => "guitar",
                "description" => "A guitar is a fretted musical instrument that usually has six strings. It is typically played with both hands by strumming or plucking the strings with either a guitar pick or the finger(s)/fingernails of one hand, while simultaneously fretting (pressing the strings against the frets) with the fingers of the other hand.",
                "price" => 1000000,
                "category_id" => 4,
                'image' => 'product-images/guitar.jpg'
            ],
            [
                "name" => "Piano",
                "slug" => "piano",
                "description" => "A piano is a musical instrument played by means of a keyboard. It is one of the most versatile instruments in the world, and is used to play a wide variety of musical genres.",
                "price" => 1000000,
                "category_id" => 4,
                'image' => 'product-images/piano.jpg'
            ],
            [
                "name" => "Violin",
                "slug" => "violin",
                "description" => "A violin is a string instrument in the violin family. It is the smallest and highest-pitched instrument in the family in regular use. Smaller violin-type instruments are known, including the violino piccolo and the kit violin, but these are virtually unused in the 2010s.",
                "price" => 1000000,
                "category_id" => 4,
                'image' => 'product-images/violin.jpg'
            ],
            [
                "name" => "Drum",
                "slug" => "drum",
                "description" => "A drum is a membranophone percussion instrument. In the Hornbostel-Sachs classification system, it is a membranophone. Drums consist of at least one membrane, called a drumhead or drum skin, that is stretched over a shell and struck, either directly with the player's hands, or with a percussion mallet, to produce sound.",
                "price" => 1000000,
                "category_id" => 4,
                'image' => 'product-images/drum.jpg'
            ],
            [
                "name" => "Saxophone",
                "slug" => "saxophone",
                "description" => "A saxophone is a family of woodwind instruments. Saxophones are usually made of brass and played with a single-reed mouthpiece similar to that of the clarinet.",
                "price" => 1000000,
                "category_id" => 4,
                'image' => 'product-images/saxophone.jpg'
            ],
            [
                "name" => "Trumpet",
                "slug" => "trumpet",
                "description" => "A trumpet is a musical instrument commonly used in classical and jazz ensembles. The trumpet group contains the instruments with the highest register in the brass family.",
                "price" => 1000000,
                "category_id" => 4,
                'image' => 'product-images/trumpet.jpg'
            ],
            [
                "name" => "Flute",
                "slug" => "flute",
                "description" => "A flute is a family of musical instruments in the woodwind group. According to the instrument classification of Hornbostel–Sachs, flutes are categorized as edge-blown aerophones.",
                "price" => 1000000,
                "category_id" => 4,
                'image' => 'product-images/flute.jpg'
            ],
            [
                "name" => "Trombone",
                "slug" => "trombone",
                "description" => "A trombone is a musical instrument in the brass family. Like all brass instruments, sound is produced when the player's vibrating lips (embouchure) cause the air column inside the instrument to vibrate.",
                "price" => 1000000,
                "category_id" => 4,
                'image' => 'product-images/trombone.jpg'
            ],
        ];

        $OTHERS = [
            [
                "name" => "Laptop",
                "slug" => "laptop",
                "description" => "A laptop, also called a notebook computer or just notebook, is a small, portable personal computer with a clamshell form factor, an alphanumeric keyboard on the lower part of the clamshell and a thin LCD or LED computer screen on the upper part, which is opened up to use the computer.",
                "price" => 10000000,
                "category_id" => 5,
                'image' => 'product-images/laptop.jpg'
            ]
        ];

        $products = array_merge($BEAUTIES, $CAMERAS, $CLOTHING, $HOBBIES, $OTHERS);

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
