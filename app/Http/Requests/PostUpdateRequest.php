<?php

namespace App\Http\Requests;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;

class PostUpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:191',
            'content' => 'required|string|max:5000',
            'is_published' => 'required|boolean',
        ];
    }
    public function validated($key = null, $default = null)
    {
        $validated_data = parent::validated();

        return $validated_data + [
            'slug' => Str::uniqueSlug(Post::class, $this->title, 'slug', $this->route()->originalParameter('post')),
            'published_at' => $this->boolean('is_published') ? now() : null,
        ];
    }

}