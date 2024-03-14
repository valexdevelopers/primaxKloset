<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rule;

class NewProductRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'product_variation' => ['bail', 'filled', 'array'],
            'product_variation.*' => ['bail', 'required', 'array'],
            'product_name' => ['bail', 'required', 'string'],
            'product_description' => ['bail', 'nullable', 'string'],
            'product_price' => ['bail', Rule::excludeIf(is_array($request->product_variation)) , 'numeric'],
            'product_discount_price' => ['bail', Rule::excludeIf(is_array($request->product_variation)), 'filled', 'numeric'],
            'product_collection' => ['bail', 'required', 'array'],
            'product_inventory' => ['bail', Rule::excludeIf(is_array($request->product_variation)), 'numeric'],
            'product_images' => ['bail', 'required', 'array'],
            'product_images.*' => ['bail', 'required', 'images', 'file', File::image()->max('10mb')],
            
        ];
    }
}
