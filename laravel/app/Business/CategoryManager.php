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
        $type = $query['type'] ?? null;

        $categories = Category::query();

        if ($type) {
            $categories->where('type', $type);
        }

        $result = $categories->get();

        return response()->json($result);
    }


}
