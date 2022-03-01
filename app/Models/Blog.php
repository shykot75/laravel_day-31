<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $blog;

    public function newBlog()
    {
        $this->blog = new Blog();
        $this->blog->title = 'The lost city';
        $this->blog->author = 'Tom Black';
        $this->blog->description = 'none';
        $this->blog->save();
    }
}
