<?php
/**
 * Created by PhpStorm.
 * User: L03037373
 * Date: 01/09/2015
 */
function removeAccents($str)
{
    $a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', 'Œ', 'œ', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', 'Š', 'š', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', 'Ÿ', '?', '?', '?', '?', 'Ž', 'ž', '?', 'ƒ', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?');
    $b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?');
    return str_replace($a, $b, $str);
}

// api.tumblr.com/v2/blog/{base-hostname}/...
//tecdemty.tumblr.com
$topicsTumblr = [];
$post[]='';


// Obtener lista de terminos

if ($_POST["topic"][0] != '') {
    $topicTumblr = $_POST["topic"];
    foreach ($topicTumblr as $eachTopic) {
        array_push($topicsTumblr, $eachTopic);
    }
}
if ($_POST["search"][0] != '') {
    $word = $_POST["search"];
    foreach ($word as $eachWord) {
        array_push($topicsTumblr, $eachWord);
    }
}

//$consumerKey = 'shETGvB4luJt7WZj48JWs2gjsbrbrE9gGYXeJWij3vypSwSBDA';
//$consumerSecret = 'lBVphsyJai5Lr500gbQ9KtuYASLrzEfAXeiVxLM84RJxVQ1XwM';


include "./lib/tumblrPHP.php";

// Enter your Consumer (Also known as oyur API KEY)
$consumer = "shETGvB4luJt7WZj48JWs2gjsbrbrE9gGYXeJWij3vypSwSBDA";

// Create a new instance of the Tumblr Class with your Conumser when you create your app. You can pass an empty string for the secret, or you can add it.
$tumblr = new Tumblr($consumer, "");

for($b=0; $b< count($topicsTumblr); $b++){
    $word = '/search/'.$topicsTumblr[$b];
    $info = $tumblr->get($word);

    $blogs = $info->response->blogs;

    if(count($blogs) == 0){
        continue;
    }
    //var_dump($blogs);
    foreach ($blogs as $blog) {
        $title         = $blog->title;
        $description      = $blog->description;
        $name      = $blog->name;
        $url      = $blog->url;
        $posts    = $blog->posts;
        if($blog->is_nsfw==true){
            $nsfw = "true";
        }else{
            $nsfw = "false";
        }

        //Limpieza Tumblr
        $tumblrClean = '';
        if($blog->description != null && $blog->description != ''){
            $tumblrClean = removeAccents($blog->description);
        }
        ///Arreglo
        $arraySearch = [
            "id_tweet" => '', // pueden quedar vacío? evitar insert duplicados?
            "cant_retweet" => '',
            "text_tweet" => '',
            "text_clean" => utf8_encode($tumblrClean),
            "id_usuario" => '',
            "nombre_usuario" => '',
            "screen_name" => '',
            "foto_perfil" => '',
            "cuentas_que_sigue" => '',
            "cuentas_que_lo_siguen" => '',
            "title" => $title,
            "name" => $name,
            "description" => utf8_encode($description),
            "url" => $url,
            //"posts" => utf8_encode($posts),
            "nsfw" => $nsfw,
            "api" => 'tumblr'
        ];
        array_push($post,$arraySearch);
    }
}
echo json_encode($post);
