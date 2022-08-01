<?php
namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class CustomPost{

        public static function find($slug){
                $dir = resource_path()."/views/posts/".$slug.".html";
                if(file_exists($dir)):
                    $post = Cache::remember("post.".$slug , now()->addSeconds(5) , fn() => YamlFrontMatter::parse(file_get_contents($dir))) ;
                return $post;
                else:
                    return throw new ModelNotFoundException;
                endif;
        }

        public static function all(){
            $files = File::files(resource_path()."/views/posts/");
            return array_map(function ($file){
                return YamlFrontMatter::parse($file->getContents());
            } , $files);
        }
}


?>

