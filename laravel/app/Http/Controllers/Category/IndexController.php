<?php

namespace App\Http\Controllers\Category;

use App\Business\CategoryManager;
use App\Http\Controllers\Controller;
use App\Http\Requests\Category\IndexRequest;

class IndexController extends Controller
{
    public function __invoke(IndexRequest $request, CategoryManager $categoryManager){
        $result = $categoryManager->getCategories(
            $request->all()
        );

        return $result;
    }
}
