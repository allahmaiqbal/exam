<?php

namespace App\Helpers;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class UniqueSlugGenerator
{
    public $slug;

    public static function builder(
        string $model,
        string $value,
        string $column = 'slug',
        ?string $except = null,
        ?string $exceptColumnName = 'id'
      ): static
    {
        return new static(
            $model,
             $value,
             $column,
             $except, $exceptColumnName
            );
    }

    public function __construct(
        protected string $model,
        protected string $value,
        protected string $column = 'slug',
        protected  ? string $except = null,
        protected  ? string $exceptColumnName = 'id'
        )
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
        ->when($this->except, fn(Builder $query): Builder => $query->whereNot($this->exceptColumnName, $this->except))
        ->exists();
        if (!$is_exists) {
            return $slug;
        }
        return $this->checkUnique($attempt + 1);
    }
}

