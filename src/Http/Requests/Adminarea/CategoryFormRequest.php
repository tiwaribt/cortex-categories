<?php

declare(strict_types=1);

namespace Cortex\Categories\Http\Requests\Adminarea;

use Rinvex\Support\Http\Requests\FormRequest;

class CategoryFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $category = $this->route('category') ?? app('rinvex.categories.category');
        $category->updateRulesUniques();

        return $category->getRules();
    }
}
