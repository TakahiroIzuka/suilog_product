<?php

namespace Tests\Feature\Http\Controllers;

use App\Store;
use App\User;
use App\Geo;
use App\Url;
use App\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Tests\TestCase;

class CardControllerTest extends TestCase
{
    public function testShow()
    {
        $store = factory(Store::class)->create();
        $user = factory(User::class)->create();
        $geo = factory(Geo::class)->create(['store_id' => $store->id]);
        $url = factory(Url::class)->create(['store_id' => $store->id]);
        $article = factory(Article::class)->create(['store_id' => $store->id, 'user_id' => $user->id]);

        $response = $this->get("/show/{$store->id}");

        $response->assertStatus(Response::HTTP_OK);

        $response->assertSee($store->name);
        $response->assertsee($store->type);
    }
}
