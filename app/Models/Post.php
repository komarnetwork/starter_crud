<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title','excerpt','body'];

    protected $guarded = ['id'];

    protected $with = ['category', 'author'];

    // Pencarian Scope
    public function scopeFilter($query, array $filters)
    {
        // jika ada pencarian maka pakai ini,
        // ! jika didalam $filters ini ada search, jika ada maka ambil apa yg ada di dalam search, jika tidak ada false

        //! Cara Pertama
        // if (isset($filters['search']) ? $filters['search'] : false) {
        //     # pencarion dengan judul
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //     ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }


        //! Cara kedua
        // Versi Callback
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        // Versi aero function fn
        $query->when(
            $filters['author'] ?? false,
            fn ($query, $author) =>
            $query->whereHas(
                'author',
                fn ($query) =>
                $query->where('username', $author)
            )
        );
    }

    // Relations Ship
    public function category()
    {
        // Satu category di miliki oleh satu post
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
