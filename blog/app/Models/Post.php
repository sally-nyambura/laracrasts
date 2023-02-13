<?php

namespace App\Models;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Post extends Model
{
    use HasFactory;

    public $title;
    public $excerpt;
    public $date;
    public $body;
    public $slug;

    public function __construct($title, $excerpt, $date, $slug, $body) {

        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->slug = $slug;
        $this->body = $body;
    }

    public static function allPosts() {

        return cache()->rememberForever('posts.all', function() {

        $files =  File::files(resource_path("posts/"));

        return collect($files)->map(function($file) {
            $document = YamlFrontMatter::parseFile($file);

            return new Post(
                $document->title,
                $document->excerpt,
                $document->date,
                $document->slug,
                $document->body(),
            );
         })->sortByDesc('date');

         });

    }

    public static function find($slug) {

         return static::allPosts()->firstWhere('slug', $slug);

     }
     public static function findOrFail($slug) {

         $post = static::find($slug);
         if (! $post) {
             throw new ModelNotFoundException();
         }
         return $post;
     }
}
