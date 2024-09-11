<?php

namespace App\Http\Requests\Category;

use App\Traits\HasFilterRequest;
use Illuminate\Http\Request;

class IndexRequest extends Request
{
    use HasFilterRequest {
        validated as traitValidated;
    }
}
