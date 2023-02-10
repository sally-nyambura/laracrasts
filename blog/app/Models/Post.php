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

    public function __construct($title, $excerpt, $date, $body, $slug) {

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
