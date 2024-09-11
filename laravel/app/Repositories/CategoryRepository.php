<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class CategoryRepository extends BaseRepository
{
    public function __construct(Category $model)
    {
        $this->model = $model;
    }

    protected function queryBuilder(array $query = NULL, $pagination = NULL)
    {
        return QueryBuilder::for(Category::class, new Request($query))
            ->allowedFilters([
                AllowedFilter::exact('id'),
                AllowedFilter::exact('name'),
                AllowedFilter::exact('type'),
                AllowedFilter::exact('parent_id'),
                AllowedFilter::exact('company_id')
            ])
            ->defaultSort('-id')
            ->allowedIncludes(['company','productsInMainCategory','productsInSubCategory'])
            ->allowedSorts(['name']);
    }
}
