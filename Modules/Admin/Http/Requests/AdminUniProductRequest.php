<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUniProductRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'content' => 'required',
            'desscription' => 'required|min:200|max:300',
            'slug' => 'required|unique:uni_product,slug,'. $this->id,
            'meta_title'=>'required|min:50|max:70',
            'meta_desscription'=>'required|min:100|max:150',
            'name_en' => 'required',
            'content_en' => 'required',
            'desscription_en' => 'required|min:200|max:300',
            'slug_en' => 'required|unique:uni_product,slug,'. $this->id,
            'meta_title_en'=>'required|min:50|max:70',
            'meta_desscription_en'=>'required|min:100|max:150',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Dữ liệu không được để trống',
            'content.required' => 'Dữ liệu không được để trống',
            'desscription.required' => 'Dữ liệu không được để trống',
            'desscription.min' => 'Dữ liệu không nhỏ 200 ký tự',
            'desscription.max' => 'Dữ liệu không lớn 300 ký tự',
            'slug.required' => 'Dữ liệu không được để trống',
            'slug.unique' => 'Slug đã tồn tại',
            'meta_title.required' => 'Tiêu đề SEO không được để trống',
            'meta_title.min'   => 'Tiêu đề SEO không được nhỏ hơn 50 ký tự',
            'meta_title.max'   => 'Tiêu đề SEO không được lớn hơn 70 ký tự',
            'meta_desscription.required' => 'Mô tả SEO không được để trống',
            'meta_desscription.min'   => 'Tiêu đề SEO không được nhỏ hơn 100 ký tự',
            'meta_desscription.max'   => 'Tiêu đề SEO không được lớn hơn 150 ký tự',
            'name_en.required' => 'Data can not empty',
            'content_en.required' => 'Data can not empty',
            'desscription_en.required' => 'Data can not empty',
            'desscription_en.min' => 'Desscription must be at least 200 characters',
            'desscription_en.max' => 'Desscription must be at limited 300 characters',
            'slug_en.required' => 'Data can not empty',
            'slug_en.unique' => 'Slug is not unique',
            'meta_title_en.required' => 'Data can not empty',
            'meta_title_en.min'   => 'Meta title must be at least 50 characters',
            'meta_title_en.max'   => 'Meta title must be at limited 70 characters',
            'meta_desscription_en.required' => 'Data can not empty',
            'meta_desscription_en.min'   => 'Meta desscription must be at least 100 characters',
            'meta_desscription_en.max'   => 'Meta desscription must be at limited 150 characters',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
