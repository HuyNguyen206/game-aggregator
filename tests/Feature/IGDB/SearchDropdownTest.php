<?php

namespace Tests\Feature;

use App\Http\Livewire\SearchGame;
use Livewire\Livewire;
use Tests\TestCase;

class SearchDropdownTest extends TestCase
{
    use MockService;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_search_game()
    {
        Livewire::test(SearchGame::class)->set('q', 'zelda')
            ->assertSee('Fake BS The Legend of Zelda')
            ->assertSee('Zelda II: The Adventure of Link')
            ->assertSee('The Legend of Zelda');
    }

    private function getFakeReponse()
    {
        return [
            [
                "id" => 1025,
                "cover" => [
                    "id" => 86234,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1uje.jpg",
                ],
                "name" => "Zelda II: The Adventure of Link",
                "platforms" => [
                    [
                        "id" => 5,
                        "abbreviation" => "Wii",
                        "alternative_name" => "Revolution",
                        "category" => 1,
                        "created_at" => 1297639288,
                        "generation" => 7,
                        "name" => "Wii",
                        "platform_logo" => 326,
                        "platform_family" => 5,
                        "slug" => "wii",
                        "updated_at" => 1615884750,
                        "url" => "https://www.igdb.com/platforms/wii",
                        "versions" => [
                            72,
                            283,
                        ],
                        "websites" => [
                            275,
                        ],
                        "checksum" => "d56c975f-909c-1af3-bdf6-e57c03e11bce",
                    ],
                    [
                        "id" => 18,
                        "abbreviation" => "NES",
                        "alternative_name" => "NES",
                        "category" => 1,
                        "created_at" => 1297941636,
                        "generation" => 3,
                        "name" => "Nintendo Entertainment System",
                        "platform_logo" => 229,
                        "platform_family" => 5,
                        "slug" => "nes",
                        "updated_at" => 1660212114,
                        "url" => "https://www.igdb.com/platforms/nes",
                        "versions" => [
                            53,
                            175,
                        ],
                        "checksum" => "e5286baa-27cd-f24d-bf1a-f37abb776219",
                    ],
                    [
                        "id" => 37,
                        "abbreviation" => "3DS",
                        "alternative_name" => "3DS",
                        "category" => 5,
                        "created_at" => 1317600000,
                        "generation" => 8,
                        "name" => "Nintendo 3DS",
                        "platform_logo" => 240,
                        "platform_family" => 5,
                        "slug" => "3ds",
                        "updated_at" => 1473984000,
                        "url" => "https://www.igdb.com/platforms/3ds",
                        "versions" => [
                            50,
                        ],
                        "websites" => [
                            9,
                        ],
                        "checksum" => "acee0d28-d3b8-b891-fc1c-768782c775a4",
                    ],
                    [
                        "id" => 41,
                        "abbreviation" => "WiiU",
                        "category" => 1,
                        "created_at" => 1317686400,
                        "generation" => 8,
                        "name" => "Wii U",
                        "platform_logo" => 239,
                        "platform_family" => 5,
                        "slug" => "wiiu",
                        "updated_at" => 1489968000,
                        "url" => "https://www.igdb.com/platforms/wiiu",
                        "versions" => [
                            73,
                        ],
                        "websites" => [
                            10,
                        ],
                        "checksum" => "13712d1c-3c5d-44d8-2d54-b2adc47f5416",
                    ],
                    [
                        "id" => 51,
                        "abbreviation" => "fds",
                        "alternative_name" => "Famicom Disk System, FDS",
                        "category" => 1,
                        "created_at" => 1339250964,
                        "generation" => 3,
                        "name" => "Family Computer Disk System",
                        "platform_logo" => 299,
                        "platform_family" => 5,
                        "slug" => "fds",
                        "updated_at" => 1633117070,
                        "url" => "https://www.igdb.com/platforms/fds",
                        "versions" => [
                            38,
                        ],
                        "checksum" => "6518150e-93d8-5bae-b8f4-d68315f0ca7a",
                    ],
                ],
                "rating" => 65.1426128259,
                "rating_count" => 210,
                "screenshots" => [
                    [
                        "id" => 19444,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/hqhg84m1938opiactwvx.jpg",
                    ],
                    [
                        "id" => 179229,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/rmdhzefetito3kaewgmy.jpg",
                    ],
                    [
                        "id" => 179230,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/ayfky3lub2r11kvoh5pp.jpg",
                    ],
                    [
                        "id" => 179231,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/cakoghkyhlvhprfkdtcw.jpg",
                    ],
                    [
                        "id" => 179232,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/s88qvaejqozjfwvcvnr5.jpg",
                    ],
                    [
                        "id" => 179233,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/xynfvbtkeymblhw7z0iz.jpg",
                    ],
                    [
                        "id" => 179234,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/goiyxdnf6uov4nuwzh75.jpg",
                    ],
                    [
                        "id" => 179235,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/nnhx8ulbz4ozjubiwdng.jpg",
                    ],
                    [
                        "id" => 179236,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/d1ho6mr2gmnb3okbhbsl.jpg",
                    ],
                ],
                "slug" => "zelda-ii-the-adventure-of-link",
            ],
            [
                "id" => 1022,
                "cover" => [
                    "id" => 86202,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1uii.jpg",
                ],
                "name" => "The Legend of Zelda",
                "platforms" => [
                    [
                        "id" => 5,
                        "abbreviation" => "Wii",
                        "alternative_name" => "Revolution",
                        "category" => 1,
                        "created_at" => 1297639288,
                        "generation" => 7,
                        "name" => "Wii",
                        "platform_logo" => 326,
                        "platform_family" => 5,
                        "slug" => "wii",
                        "updated_at" => 1615884750,
                        "url" => "https://www.igdb.com/platforms/wii",
                        "versions" => [
                            72,
                            283,
                        ],
                        "websites" => [
                            275,
                        ],
                        "checksum" => "d56c975f-909c-1af3-bdf6-e57c03e11bce",
                    ],
                    [
                        "id" => 18,
                        "abbreviation" => "NES",
                        "alternative_name" => "NES",
                        "category" => 1,
                        "created_at" => 1297941636,
                        "generation" => 3,
                        "name" => "Nintendo Entertainment System",
                        "platform_logo" => 229,
                        "platform_family" => 5,
                        "slug" => "nes",
                        "updated_at" => 1660212114,
                        "url" => "https://www.igdb.com/platforms/nes",
                        "versions" => [
                            53,
                            175,
                        ],
                        "checksum" => "e5286baa-27cd-f24d-bf1a-f37abb776219",
                    ],
                    [
                        "id" => 37,
                        "abbreviation" => "3DS",
                        "alternative_name" => "3DS",
                        "category" => 5,
                        "created_at" => 1317600000,
                        "generation" => 8,
                        "name" => "Nintendo 3DS",
                        "platform_logo" => 240,
                        "platform_family" => 5,
                        "slug" => "3ds",
                        "updated_at" => 1473984000,
                        "url" => "https://www.igdb.com/platforms/3ds",
                        "versions" => [
                            50,
                        ],
                        "websites" => [
                            9,
                        ],
                        "checksum" => "acee0d28-d3b8-b891-fc1c-768782c775a4",
                    ],
                    [
                        "id" => 41,
                        "abbreviation" => "WiiU",
                        "category" => 1,
                        "created_at" => 1317686400,
                        "generation" => 8,
                        "name" => "Wii U",
                        "platform_logo" => 239,
                        "platform_family" => 5,
                        "slug" => "wiiu",
                        "updated_at" => 1489968000,
                        "url" => "https://www.igdb.com/platforms/wiiu",
                        "versions" => [
                            73,
                        ],
                        "websites" => [
                            10,
                        ],
                        "checksum" => "13712d1c-3c5d-44d8-2d54-b2adc47f5416",
                    ],
                    [
                        "id" => 51,
                        "abbreviation" => "fds",
                        "alternative_name" => "Famicom Disk System, FDS",
                        "category" => 1,
                        "created_at" => 1339250964,
                        "generation" => 3,
                        "name" => "Family Computer Disk System",
                        "platform_logo" => 299,
                        "platform_family" => 5,
                        "slug" => "fds",
                        "updated_at" => 1633117070,
                        "url" => "https://www.igdb.com/platforms/fds",
                        "versions" => [
                            38,
                        ],
                        "checksum" => "6518150e-93d8-5bae-b8f4-d68315f0ca7a",
                    ],
                    [
                        "id" => 99,
                        "abbreviation" => "famicom",
                        "alternative_name" => "Famicom",
                        "category" => 1,
                        "created_at" => 1428863630,
                        "generation" => 3,
                        "name" => "Family Computer",
                        "platform_logo" => 277,
                        "platform_family" => 5,
                        "slug" => "famicom",
                        "updated_at" => 1633117151,
                        "url" => "https://www.igdb.com/platforms/famicom",
                        "versions" => [
                            123,
                        ],
                        "checksum" => "3e878454-b3da-ae45-1f81-63837be3a167",
                    ],
                ],
                "rating" => 81.186097195916,
                "rating_count" => 545,
                "screenshots" => [
                    [
                        "id" => 331,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/qtezq0lhzskhpacnbtst.jpg",
                    ],
                    [
                        "id" => 332,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/a6zqijms8v3rtcdmee2n.jpg",
                    ],
                    [
                        "id" => 334,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/x5c0ow4ehmxbpvckxsld.jpg",
                    ],
                    [
                        "id" => 335,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/p5ixuaseeqhge5joabjf.jpg",
                    ],
                    [
                        "id" => 837876,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/schyic.jpg",
                    ],
                ],
                "slug" => "the-legend-of-zelda",
            ],
            [
                "id" => 150080,
                "cover" => [
                    "id" => 164200,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co3ip4.jpg",
                ],
                "name" => "Fake BS The Legend of Zelda",
                "platforms" => [
                    [
                        "id" => 19,
                        "abbreviation" => "SNES",
                        "alternative_name" => "SNES, Super Nintendo",
                        "category" => 1,
                        "created_at" => 1297941647,
                        "generation" => 4,
                        "name" => "Super Nintendo Entertainment System",
                        "platform_logo" => 535,
                        "platform_family" => 5,
                        "slug" => "snes",
                        "updated_at" => 1660212083,
                        "url" => "https://www.igdb.com/platforms/snes",
                        "versions" => [
                            68,
                            95,
                            97,
                            139,
                            177,
                            391,
                        ],
                        "websites" => [
                            209,
                        ],
                        "checksum" => "8b2b4298-17ca-05a6-8420-26d6fca32a8a",
                    ],
                ],
                "screenshots" => [
                    [
                        "id" => 473136,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sca52o.jpg",
                    ],
                    [
                        "id" => 473137,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sca52p.jpg",
                    ],
                ],
                "slug" => "bs-the-legend-of-zelda-mottzilla-patch",
            ]
        ];
    }
}
