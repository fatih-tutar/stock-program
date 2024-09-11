<?php

namespace App\Business;

use App\Models\Category;
use App\Repositories\CategoryRepository;

class CategoryManager
{
    private CategoryRepository $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getCategories(array $query = null)
    {
        $categories = Category::all();
        return response()->json($categories);
    }
}
