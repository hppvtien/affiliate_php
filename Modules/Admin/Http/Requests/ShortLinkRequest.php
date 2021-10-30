<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShortLinkRequest extends FormRequest
{
    public function rules()
    {
        return [
            'url_ads' => 'required|unique:short_links,url_ads'. $this->id,
        ];
    }

    public function messages()
    {
        return [
            'url_ads.required' => 'Dữ liệu không được để trống',
            'url_ads.unique' => 'Dữ liệu đã tồn tại',
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
