<?php

namespace App\Helpers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class UniqueSlugGenerator
{

    public $slug;

    public static function builder(
        string $model,
        string $value,
        string $column = 'slug'
      ): static
    {
        return new static(
            $model,
             $value,
             $column
            );
    }

    public function __construct(
        protected string $model,
        protected string $value,
        protected string $column = 'slug')
    {
        $this->slug = Str::slug($value);
    }


    public function generate(): string
    {
        return $this->checkUnique();
    }


    private function checkUnique(int $attempt = 1): string
    {
        $model = new $this->model;

            if ($attempt > 1) {
                $slug = $this->slug . '-' . $attempt;
        } else {
            $slug = $this->slug;
        }

        $is_exists = $model->where($this->column, $slug)
            ->exists();
        if (!$is_exists) {
            return $slug;
        }
        return $this->checkUnique($attempt + 1);
    }
}

