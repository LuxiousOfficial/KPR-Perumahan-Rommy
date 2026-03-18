<?php

namespace App\services;

use App\Models\Category;
use App\Models\City;
use App\Models\House;

class HouseService
{
    public function getCategoriesAndCities()
    {
        return [
            'categories' => Category::latest()->get(),
            'cities' => City::latest()->get()
        ];
    }

    public function searchHouse($filters)
    {
        $query = House::query();

        if(!empty($filters['city'])) {
            $query->where('city_id', $filters['city']);
        }

        if(!empty($filters['category'])) {
            $query->where('category_id', $filters['category']);
        }

        $houses = $query->get();
        $category = Category::findOrFail($filters['category'] ?? null);
        $city = City::findOrFail($filters['city'] ?? null);

        return compact('houses', 'category', 'city');
    }

    public function getHouseDetails($house)
    {
        $house->load(['photos', 'facilities', 'facilities.facility']);
        return $house;
    }
}