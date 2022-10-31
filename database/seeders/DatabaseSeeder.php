<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
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

        $BEAUTIES = [
            [
                "name" => "Foundation",
                "slug" => "foundation",
                "description" => "Foundation is a cosmetic that is applied to the face to create an even, uniform color to the complexion, to cover flaws and, sometimes, to change the natural skin tone.",
                "price" => 150000,
                "category_id" => 1,
                'image' => 'https://image.femaledaily.com/dyn/640/images/prod-pics/product_1614682348_033_remove_800x800.png'
            ],
            [
                "name" => "Lipstick",
                "slug" => "lipstick",
                "description" => "Lipstick is a cosmetic product containing pigments, oils, waxes, and emollients that apply color, texture, and protection to the lips.",
                "price" => 100000,
                "category_id" => 1,
                'image' => 'https://www.maccosmetics.com/media/export/cms/products/640x600/mac_sku_M2LP70_640x600_0.jpg'
            ],
            [
                "name" => "Mascara",
                "slug" => "mascara",
                "description" => "Mascara is a cosmetic commonly used to enhance the eyelashes. It may darken, thicken, lengthen, and/or define the eyelashes.",
                "price" => 100000,
                "category_id" => 1,
                'image' => 'https://www.ultimaii.com/product_images/WW-Ultra-Dramatic-Mascara-0721.jpg'
            ],
            [
                "name" => "Eyeliner",
                "slug" => "eyeliner",
                "description" => "Eyeliner is a cosmetic used to define the eyes. It is applied around the contours of the eye to create a variety of effects, such as increasing the apparent size, changing the shape, or changing the color of the eye.",
                "price" => 100000,
                "category_id" => 1,
                'image' => 'https://cf.shopee.co.id/file/095f88948e0e59e93e4435cb6e743eee'
            ],
            [
                "name" => "Blush",
                "slug" => "blush",
                "description" => "Blush is a cosmetic typically used to give the cheeks a rosy glow. It is applied to the apples of the cheeks, or the cheekbones, to give the face a more youthful appearance.",
                "price" => 100000,
                "category_id" => 1,
                'image' => 'https://sdcdn.io/mac/my/mac_sku_M22017_1x1_0.png?width=1080&height=1080'
            ],
            [
                "name" => "Bronzer",
                "slug" => "bronzer",
                "description" => "Bronzer is a cosmetic that gives the skin a sun-kissed glow. It is typically applied to the face, neck, and shoulders.",
                "price" => 100000,
                "category_id" => 1,
                'image' => 'https://cf.shopee.co.id/file/9e724f88e3a3e7951c6385f9e10b1d2e'
            ],
            [
                "name" => "Eyeshadow",
                "slug" => "eyeshadow",
                "description" => "Eyeshadow is a cosmetic that is applied on the eyelids and under the eyebrows. It is commonly used to make the wearer's eyes stand out or look more attractive.",
                "price" => 200000,
                "category_id" => 1,
                'image' => 'https://cf.shopee.co.id/file/334fe7a7342940699eb3683f606e48df'
            ],
            [
                "name" => "Concealer",
                "slug" => "concealer",
                "description" => "Concealer is a cosmetic product used to hide or reduce the appearance of skin blemishes, dark circles under the eyes, and other imperfections.",
                "price" => 250000,
                "category_id" => 1,
                'image' => 'https://image.femaledaily.com/dyn/640/images/prod-pics/product_1610536585_22_800x800.jpg'
            ],
            [
                "name" => "Nail Polish",
                "slug" => "nail-polish",
                "description" => "Nail polish is a lacquer that can be applied to the human fingernail or toenail to decorate and protect the nail plates. The formulation has been revised repeatedly to enhance its decorative effects, and to suppress cracking and chipping.",
                "price" => 100000,
                "category_id" => 1,
                'image' => 'https://cf.shopee.co.id/file/49c4a38ffa1550199a8789bbd0308f39'
            ],
            [
                "name" => "Lip Gloss",
                "slug" => "lip-gloss",
                "description" => "Lip gloss is a cosmetic product containing pigments, oils, waxes, and emollients that apply color, texture, and protection to the lips.",
                "price" => 100000,
                "category_id" => 1,
                'image' => 'https://cf.shopee.co.id/file/fce0230075749ff76801b872f428c229'
            ],
            [
                "name" => "Lip Liner",
                "slug" => "lip-liner",
                "description" => "Lip liner is a cosmetic product used to define the lips. It is typically used to create a fuller appearance to the lips, or to prevent lipstick from feathering or bleeding outside the natural lip line.",
                "price" => 100000,
                "category_id" => 1,
                'image' => 'https://sdcdn.io/mac/us/mac_sku_M38050_1x1_0.png?width=1080&height=1080'
            ],
            [
                "name" => "Eyebrow Pencil",
                "slug" => "eyebrow-pencil",
                "description" => "Eyebrow pencil is a cosmetic product used to fill in the eyebrows. It is typically used to create a fuller appearance to the eyebrows, or to prevent eyebrow makeup from feathering or bleeding outside the natural eyebrow line.",
                "price" => 100000,
                "category_id" => 1,
                'image' => 'https://cf.shopee.co.id/file/fa1ce31269bcbafa341b2ec99236089a'
            ],
            [
                "name" => "Eyebrow Gel",
                "slug" => "eyebrow-gel",
                "description" => "Eyebrow gel is a cosmetic product used to set the eyebrows. It is typically used to create a fuller appearance to the eyebrows, or to prevent eyebrow makeup from feathering or bleeding outside the natural eyebrow line.",
                "price" => 100000,
                "category_id" => 1,
                'image' => 'https://cf.shopee.co.id/file/09bb598268456c640cae91f55e65796c'
            ],
            [
                "name" => "Eyebrow Mascara",
                "slug" => "eyebrow-mascara",
                "description" => "Eyebrow mascara is a cosmetic product used to set the eyebrows. It is typically used to create a fuller appearance to the eyebrows, or to prevent eyebrow makeup from feathering or bleeding outside the natural eyebrow line.",
                "price" => 100000,
                "category_id" => 1,
                'image' => 'https://cf.shopee.co.id/file/510192c06611740ba4fb7978774b756c'
            ]
        ];

        $CAMERAS = [
            [
                "name" => "DSLR Camera",
                "slug" => "dslr-camera",
                "description" => "A digital single-lens reflex camera (also called a digital SLR or DSLR) is a digital camera that combines the optics and the mechanisms of a single-lens reflex camera with a digital imaging sensor, as opposed to photographic film.",
                "price" => 10000000,
                "category_id" => 2,
                'image' => 'https://cdn1.productnation.co/stg/sites/5/6049f4516f838.jpeg'
            ],
            [
                "name" => "Mirrorless Camera",
                "slug" => "mirrorless-camera",
                "description" => "A mirrorless camera is a digital camera that lacks an optical viewfinder and a reflex mirror in the optical path. Instead, the image viewed through the lens is captured by an electronic image sensor.",
                "price" => 5000000,
                "category_id" => 2,
                'image' => 'https://www.popphoto.com/uploads/2021/06/25/377A3429.jpg?auto=webp&width=1440&height=960.48'
            ],
            [
                "name" => "Point and Shoot Camera",
                "slug" => "point-and-shoot-camera",
                "description" => "A point-and-shoot camera is a still camera designed to be easy to use and compact. It is typically a small, lightweight camera with a fixed lens and a limited range of controls.",
                "price" => 2000000,
                "category_id" => 2,
                'image' => 'https://i.pcmag.com/imagery/reviews/05bltoeNph7qnCxFlRO8r3G-1..v1595602213.jpg'
            ],
            [
                "name" => "Action Camera",
                "slug" => "action-camera",
                "description" => "An action camera is a camera designed for recording action while being immersed in it. They are typically small, rugged, and mounted on a flexible or rigid support.",
                "price" => 1000000,
                "category_id" => 2
            ],
            [
                "name" => "Instant Camera",
                "slug" => "instant-camera",
                "description" => "An instant camera is a camera that uses instant film to produce a chemically developed print shortly after taking the picture. The print is produced by a photochemical reaction that occurs when the film is exposed to light.",
                "price" => 1000000,
                "category_id" => 2
            ],
            [
                "name" => "360 Camera",
                "slug" => "360-camera",
                "description" => "A 360 camera is a camera that captures a complete 360-degree view of its surroundings. It is typically a small, lightweight camera with a fixed lens and a limited range of controls.",
                "price" => 1000000,
                "category_id" => 2
            ],
            [
                "name" => "Drone Camera",
                "slug" => "drone-camera",
                "description" => "A drone camera is a camera that is mounted on a drone. It is typically a small, lightweight camera with a fixed lens and a limited range of controls.",
                "price" => 1000000,
                "category_id" => 2
            ],
            [
                "name" => "Video Camera",
                "slug" => "video-camera",
                "description" => "A video camera is a camera used for electronic motion picture acquisition, initially developed for the television industry but now common in other applications as well.",
                "price" => 1000000,
                "category_id" => 2
            ],
            [
                "name" => "Security Camera",
                "slug" => "security-camera",
                "description" => "A security camera is a camera used for surveillance in areas that may need monitoring such as banks, casinos, airports, military installations, and convenience stores.",
                "price" => 1000000,
                "category_id" => 2
            ],
            [
                "name" => "Webcam",
                "slug" => "webcam",
                "description" => "A webcam is a video camera that feeds or streams its image in real time to or through a computer to a computer network. When \"captured\" by the computer, the video stream may be saved, viewed or sent on to other networks via systems such as the internet, and email as an attachment.",
                "price" => 1000000,
                "category_id" => 2
            ]
        ];

        $CLOTHING = [
            [
                "name" => "T-Shirt",
                "slug" => "t-shirt",
                "description" => "A T-shirt is a style of unisex fabric shirt named after the T shape of its body and sleeves. Traditionally it has short sleeves and a round neckline, known as a crew neck, which lacks a collar.",
                "price" => 100000,
                "category_id" => 3
            ],
            [
                "name" => "Tank Top",
                "slug" => "tank-top",
                "description" => "A tank top is a sleeveless, close-fitting, and often loose-fitting garment",
                "price" => 100000,
                "category_id" => 3
            ],
            [
                "name" => "Sweater",
                "slug" => "sweater",
                "description" => "A sweater is a knitted garment that covers the upper body and arms. It is usually worn over a shirt, blouse, T-shirt, or other top, but it is often worn over nothing at all when it is used as a pullover.",
                "price" => 100000,
                "category_id" => 3
            ],
            [
                "name" => "Hoodie",
                "slug" => "hoodie",
                "description" => "A hoodie is a sweatshirt with a hood. It is usually made of fleece, cotton or a cotton/polyester blend, and often includes",
                "price" => 100000,
                "category_id" => 3
            ],
            [
                "name" => "Jacket",
                "slug" => "jacket",
                "description" => "A jacket is a mid-stomach–length garment for the upper body. A jacket typically has sleeves, and fastens in the front or slightly on the side.",
                "price" => 100000,
                "category_id" => 3
            ],
            [
                "name" => "Coat",
                "slug" => "coat",
                "description" => "A coat is a clothing something that someone wear balbalsdalba idk what im writing copilot doesnt work",
                "price" => 100000,
                "category_id" => 3
            ],
            [
                "name" => "Jeans",
                "slug" => "jeans",
                "description" => "Jeans are pants made from denim or dungaree cloth. Traditionally, they were made from denim, a sturdy cotton twill textile in which the weft passes under two or more warp threads.",
                "price" => 100000,
                "category_id" => 3
            ],
            [
                "name" => "Shorts",
                "slug" => "shorts",
                "description" => "Shorts are a type of clothing that are worn on the lower part of the body, covering the area from the waist to the upper part of the legs. Shorts are usually made of a light, flexible material.",
                "price" => 100000,
                "category_id" => 3
            ],
            [
                "name" => "Skirt",
                "slug" => "skirt",
                "description" => "A skirt is the lower part of a dress or gown, covering the person from the waist downwards, or a separate outer garment serving this purpose.",
                "price" => 100000,
                "category_id" => 3
            ],
            [
                "name" => "Dress",
                "slug" => "dress",
                "description" => "A dress is a garment consisting of a skirt with an attached bodice (or a matching bodice giving the effect of a one-piece garment).",
                "price" => 100000,
                "category_id" => 3
            ]
        ];

        $HOBBIES = [
            [
                "name" => "Guitar",
                "slug" => "guitar",
                "description" => "A guitar is a fretted musical instrument that usually has six strings. It is typically played with both hands by strumming or plucking the strings with either a guitar pick or the finger(s)/fingernails of one hand, while simultaneously fretting (pressing the strings against the frets) with the fingers of the other hand.",
                "price" => 1000000,
                "category_id" => 4
            ],
            [
                "name" => "Piano",
                "slug" => "piano",
                "description" => "A piano is a musical instrument played by means of a keyboard. It is one of the most versatile instruments in the world, and is used to play a wide variety of musical genres.",
                "price" => 1000000,
                "category_id" => 4
            ],
            [
                "name" => "Violin",
                "slug" => "violin",
                "description" => "A violin is a string instrument in the violin family. It is the smallest and highest-pitched instrument in the family in regular use. Smaller violin-type instruments are known, including the violino piccolo and the kit violin, but these are virtually unused in the 2010s.",
                "price" => 1000000,
                "category_id" => 4
            ],
            [
                "name" => "Drum",
                "slug" => "drum",
                "description" => "A drum is a membranophone percussion instrument. In the Hornbostel-Sachs classification system, it is a membranophone. Drums consist of at least one membrane, called a drumhead or drum skin, that is stretched over a shell and struck, either directly with the player's hands, or with a percussion mallet, to produce sound.",
                "price" => 1000000,
                "category_id" => 4
            ],
            [
                "name" => "Saxophone",
                "slug" => "saxophone",
                "description" => "A saxophone is a family of woodwind instruments. Saxophones are usually made of brass and played with a single-reed mouthpiece similar to that of the clarinet.",
                "price" => 1000000,
                "category_id" => 4
            ],
            [
                "name" => "Trumpet",
                "slug" => "trumpet",
                "description" => "A trumpet is a musical instrument commonly used in classical and jazz ensembles. The trumpet group contains the instruments with the highest register in the brass family.",
                "price" => 1000000,
                "category_id" => 4
            ],
            [
                "name" => "Flute",
                "slug" => "flute",
                "description" => "A flute is a family of musical instruments in the woodwind group. According to the instrument classification of Hornbostel–Sachs, flutes are categorized as edge-blown aerophones.",
                "price" => 1000000,
                "category_id" => 4
            ],
            [
                "name" => "Trombone",
                "slug" => "trombone",
                "description" => "A trombone is a musical instrument in the brass family. Like all brass instruments, sound is produced when the player's vibrating lips (embouchure) cause the air column inside the instrument to vibrate.",
                "price" => 1000000,
                "category_id" => 4
            ],
            [
                "name" => "Clarinet",
                "slug" => "clarinet",
                "description" => "A clarinet is a musical-instrument family belonging to the group known as the woodwind instruments. It has a single-reed mouthpiece, a straight cylindrical tube with an almost cylindrical bore, and a flared bell.",
                "price" => 1000000,
                "category_id" => 4
            ],
            [
                "name" => "Oboe",
                "slug" => "oboe",
                "description" => "An oboe is a double reed woodwind instrument. It has a conical bore, a flared bell, and is made primarily of wood. The most common oboe plays in the treble or soprano range.",
                "price" => 1000000,
                "category_id" => 4
            ],
            [
                "name" => "Bassoon",
                "slug" => "bassoon",
                "description" => "A bassoon is a double reed woodwind instrument in the oboe family. It is the lowest-pitched woodwind instrument in regular use. The bassoon is a transposing instrument, as it appears an octave lower than written.",
                "price" => 1000000,
                "category_id" => 4
            ]
        ];

        $OTHERS = [
            [
                "name" => "Laptop",
                "slug" => "laptop",
                "description" => "A laptop, also called a notebook computer or just notebook, is a small, portable personal computer with a clamshell form factor, an alphanumeric keyboard on the lower part of the clamshell and a thin LCD or LED computer screen on the upper part, which is opened up to use the computer.",
                "price" => 10000000,
                "category_id" => 5
            ],
            [
                "name" => "Smartphone",
                "slug" => "smartphone",
                "description" => "A smartphone is a mobile phone with an advanced mobile operating system that combines features of a personal computer operating system with other features useful for mobile or handheld use.",
                "price" => 10000000,
                "category_id" => 5
            ],
            [
                "name" => "Tablet",
                "slug" => "tablet",
                "description" => "A tablet computer, commonly shortened to tablet, is a mobile device, typically with a mobile operating system and touchscreen display processing circuitry, and a rechargeable battery in a single, thin and flat package.",
                "price" => 10000000,
                "category_id" => 5
            ],
            [
                "name" => "Car",
                "slug" => "car",
                "description" => "A car (or automobile) is a wheeled motor vehicle used for transportation. Most definitions of car say they run primarily on roads, seat one to eight people, have four tires, and mainly transport people rather than goods.",
                "price" => 10000000,
                "category_id" => 5
            ],
            [
                "name" => "Motorcycle",
                "slug" => "motorcycle",
                "description" => "A motorcycle is a two- or three-wheeled motor vehicle. Motorcycle design varies greatly to suit a range of different purposes: long distance travel, commuting, cruising, sport including racing, and off-road riding.",
                "price" => 10000000,
                "category_id" => 5
            ],
            [
                "name" => "Bicycle",
                "slug" => "bicycle",
                "description" => "A bicycle, also called a cycle or bike, is a human-powered, pedal-driven, single-track vehicle, having two wheels attached to a frame, one behind the other.",
                "price" => 10000000,
                "category_id" => 5
            ],
            [
                "name" => "Airplane",
                "slug" => "airplane",
                "description" => "An airplane or aeroplane (informally plane) is a powered, fixed-wing aircraft that is propelled forward by thrust from a jet engine, propeller or rocket engine.",
                "price" => 10000000,
                "category_id" => 5
            ],
            [
                "name" => "Boat",
                "slug" => "boat",
                "description" => "A boat is a watercraft of a large range of sizes designed to float, plane, work or travel on water. Small boats are typically found on inland waterways (e.g. rivers and lakes) or in protected coastal areas.",
                "price" => 10000000,
                "category_id" => 5
            ],
            [
                "name" => "Train",
                "slug" => "train",
                "description" => "A train is a form of rail transport consisting of a series of connected vehicles that generally run along a rail track to transport cargo or passengers.",
                "price" => 10000000,
                "category_id" => 5
            ],
            [
                "name" => "Helicopter",
                "slug" => "helicopter",
                "description" => "A helicopter is a type of rotorcraft in which lift and thrust are supplied by rotors. This allows the helicopter to take off and land vertically, to hover, and to fly forward, backward, and laterally.",
                "price" => 10000000,
                "category_id" => 5
            ],
            [
                "name" => "Rocket",
                "slug" => "rocket",
                "description" => "A rocket is a missile, spacecraft, aircraft or other vehicle that obtains thrust from a rocket engine. Rocket engine exhaust is formed entirely from propellant carried within the rocket before use.",
                "price" => 10000000,
                "category_id" => 5
            ]
        ];

        $products = array_merge($BEAUTIES, $CAMERAS, $CLOTHING, $HOBBIES, $OTHERS);

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
