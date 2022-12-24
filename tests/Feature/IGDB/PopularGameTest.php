<?php

namespace Tests\Feature;

use App\Http\Livewire\PopularGame;
use Livewire\Livewire;
use Tests\TestCase;

class PopularGameTest extends TestCase
{
    use MockService;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_render_popular_game()
    {
        $response = Livewire::test(PopularGame::class)->call('loadGames');

        $response->assertSee('Demon Horde Master');
        $response->assertSee('PC');
        $response->assertSee('Gemstone IV');
        $response->assertSee('Linux');
        $response->assertSee('Lode Runner Classic');
        $response->assertSee('lode-runner-classic');

    }

    private function getFakeReponse()
    {
        return
            [
                [
                    "id" => 35004,
                    "name" => "Demon Horde Master",
                    "platforms" => [
                        [
                            "id" => 6,
                            "abbreviation" => "PC",
                            "alternative_name" => "mswin",
                            "category" => 4,
                            "created_at" => 1297555200,
                            "name" => "PC (Microsoft Windows)",
                            "platform_logo" => 203,
                            "slug" => "win",
                            "updated_at" => 1470009600,
                            "url" => "https://www.igdb.com/platforms/win",
                            "versions" => [
                                1,
                                13,
                                14,
                                15,
                                124,
                            ],
                            "websites" => [
                                2,
                            ],
                            "checksum" => "5aae54d0-390e-a4ec-a9ee-4ad4cc346992",
                        ],
                    ],
                    "screenshots" => [
                        [
                            "id" => 82910,
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/fht408rcsvoctjpirpuc.jpg",
                        ],
                        [
                            "id" => 82911,
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/nbcrizros37amqnpptn5.jpg",
                        ],
                        [
                            "id" => 82912,
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/wqzj76ul9nrairlbg2ml.jpg",
                        ],
                        [
                            "id" => 82913,
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/bkxcnhdhu07yax9uabx1.jpg",
                        ],
                        [
                            "id" => 82914,
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/swhorgknvh1fg3jydrd8.jpg",
                        ],
                    ],
                    "slug" => "demon-horde-master",
                ],
                [
                    "id" => 79899,
                    "cover" => [
                        "id" => 57339,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/ns5med7gdz6hct5nzouy.jpg",
                    ],
                    "name" => "Gemstone IV",
                    "platforms" => [
                        [
                            "id" => 3,
                            "abbreviation" => "Linux",
                            "alternative_name" => "GNU/Linux",
                            "category" => 4,
                            "created_at" => 1297555200,
                            "name" => "Linux",
                            "platform_logo" => 380,
                            "platform_family" => 4,
                            "slug" => "linux",
                            "summary" => "Linux is a free and open-source (FOSS/FLOSS) Operating System. In a more precise and complex definition, Linux is an open-source OS kernel on which a large variety of Operating Systems (known as Linux distributions) are built.",
                            "updated_at" => 1392940800,
                            "url" => "https://www.igdb.com/platforms/linux",
                            "versions" => [
                                44,
                            ],
                            "websites" => [
                                1,
                            ],
                            "checksum" => "b810fb9c-65f7-b297-3658-da9c4d52bf11",
                        ],
                        [
                            "id" => 6,
                            "abbreviation" => "PC",
                            "alternative_name" => "mswin",
                            "category" => 4,
                            "created_at" => 1297555200,
                            "name" => "PC (Microsoft Windows)",
                            "platform_logo" => 203,
                            "slug" => "win",
                            "updated_at" => 1470009600,
                            "url" => "https://www.igdb.com/platforms/win",
                            "versions" => [
                                1,
                                13,
                                14,
                                15,
                                124,
                            ],
                            "websites" => [
                                2,
                            ],
                            "checksum" => "5aae54d0-390e-a4ec-a9ee-4ad4cc346992",
                        ],
                        [
                            "id" => 14,
                            "abbreviation" => "Mac",
                            "alternative_name" => "Mac OS",
                            "category" => 4,
                            "created_at" => 1297641600,
                            "name" => "Mac",
                            "platform_logo" => 100,
                            "slug" => "mac",
                            "updated_at" => 1394236800,
                            "url" => "https://www.igdb.com/platforms/mac",
                            "versions" => [
                                45,
                                141,
                                142,
                                143,
                                144,
                                145,
                                146,
                                147,
                                148,
                                149,
                                150,
                                151,
                            ],
                            "websites" => [
                                5,
                            ],
                            "checksum" => "19c9dcae-80a2-e137-50ff-11b823738827",
                        ],
                        [
                            "id" => 82,
                            "abbreviation" => "browser",
                            "alternative_name" => "Internet",
                            "category" => 3,
                            "created_at" => 1395273600,
                            "name" => "Web browser",
                            "platform_logo" => 381,
                            "slug" => "browser",
                            "updated_at" => 1553299200,
                            "url" => "https://www.igdb.com/platforms/browser",
                            "versions" => [
                                86,
                            ],
                            "checksum" => "42d5444b-505c-d210-5992-c06b7010651a",
                        ],
                    ],
                    "slug" => "gemstone-iv",
                ],
                [
                    "id" => 89616,
                    "cover" => [
                        "id" => 192106,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co448a.jpg",
                    ],
                    "name" => "Bubble Whirl Shooter",
                    "platforms" => [
                        [
                            "id" => 34,
                            "abbreviation" => "Android",
                            "alternative_name" => "Infocusa3",
                            "category" => 4,
                            "created_at" => 1302566400,
                            "name" => "Android",
                            "platform_logo" => 376,
                            "slug" => "android",
                            "updated_at" => 1556150400,
                            "url" => "https://www.igdb.com/platforms/android",
                            "versions" => [
                                7,
                                8,
                                9,
                                10,
                                11,
                                12,
                                236,
                                237,
                                238,
                                239,
                                320,
                            ],
                            "websites" => [
                                7,
                            ],
                            "checksum" => "fe27cf28-ec61-df1a-e378-ae233b2eea73",
                        ],
                        [
                            "id" => 39,
                            "abbreviation" => "iOS",
                            "category" => 4,
                            "created_at" => 1317686400,
                            "name" => "iOS",
                            "platform_logo" => 248,
                            "slug" => "ios",
                            "updated_at" => 1391644800,
                            "url" => "https://www.igdb.com/platforms/ios",
                            "versions" => [
                                43,
                            ],
                            "checksum" => "fefe4a2b-7c90-0e89-e811-902ea1cf2b58",
                        ],
                    ],
                    "slug" => "bubble-whirl-shooter",
                ],
                [
                    "id" => 64881,
                    "cover" => [
                        "id" => 45673,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/iy4tiuepdpljziibgcvt.jpg",
                    ],
                    "name" => "Lode Runner Classic",
                    "slug" => "lode-runner-classic",
                ],
            ];
    }
}
