<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post extends Model
{
    use HasFactory;

    public $title;
    public $excerpt;
    public $date;
    public $body;

    public function __construct($title, $excerpt, $date) {

        $this->title = $title
        $this->excerpt = $excerpt
        $this->date = $date
        $this->body = $body
    }

    public static function allPosts() {
        $files =  File::files(resource_path("posts/"));

        return array_map(function ($file) {
            return $file->getContents();
        }, $files);
    }

    public static function find($slug) {

        if(! file_exists($path = resource_path("posts/{$slug}.html"))) {
            throw new ModelNotFoundException();

        // return redirect('/');
          // abort(404);
        // ddd("File does not exist");
        // dd("File does not exist");
        }

        return cache()->remember("posts.{$slug}", now()->addMinutes(20), function() use($path) {
            // var_dump('file_get_contents');
            return file_get_contents($path);
        });
    }
}
