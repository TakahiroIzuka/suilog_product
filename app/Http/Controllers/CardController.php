<?php

namespace App\Http\Controllers;

use App\Store;
use App\Url;
use App\Geo;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index()
    {
        $stores = Store::where('status', 1)->orderBy('id', 'ASC')->paginate(22);
        $geos = Geo::paginate(22);

        return view('cards.index', compact('stores', 'geos'));
    }

    public function show($id)
    {
        $store = Store::where('id', $id)->where('status', 1)->first();
        $url = Url::where('store_id', $id)->first();
        $geo = Geo::where('store_id', $id)->first();


        return view('cards.show', compact('store', 'url', 'geo'));
    }

    public function map() {

        $stores = Store::where('status', 1)->orderBy('id', 'ASC')->get();
        $urls = Url::get();
        $geos = Geo::get();

        return view('cards.map', compact('stores', 'urls', 'geos'));
    }

    public function like(Request $request, Store $store)
    {
        $store->likes()->detach($request->user()->id);
        $store->likes()->attach($request->user()->id);

        return [
            'id' => $store->id,
            'countLikes' => $store->count_likes,
        ];
    }

    public function unlike(Request $request, Store $store)
    {
        $store->likes()->detach($request->user()->id);

        return [
            'id' => $store->id,
            'countLikes' => $store->count_likes,
        ];
    }
}
