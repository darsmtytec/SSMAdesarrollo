<?php
/**
 * Created by PhpStorm.
 * User: L03037373
 * Date: 29/08/2015
 * Time: 03:17 PM
 */

function removeAccents($str)
{
    $a = array('�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '�', '�', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '�', '�', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '�', '?', '?', '?', '?', '�', '�', '?', '�', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?');
    $b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?');
    return str_replace($a, $b, $str);
}

$client_id = '79ef585f61934698943db989482d7258';
$client_secret = 'b9fd07119f7c4424ab90b7d98c37c9bd';
$client_token = '1690894050.79ef585.be4d8e2b93a9448e97d6765ff9542d86';

// ************* Klout API ***************************
$kloutKey = 'hjsske2mer3th85ub6e5bw82';
///////////////////////////////////////////////////
$post[] = '';
//$json = file_get_contents("https://instagram.com/oauth/authorize/?client_id=79ef585f61934698943db989482d7258&redirect_uri=http://10.2.27.52/modx/index.php&response_type=token");

$topics[0] = "TecdeMonterrey";

/************INSTAGRAM API**///////////////////////

for ($b = 0; $b < count($topics); $b++) {
    //echo '<br><STRONG>Instagram Search:</STRONG> ' . $topics[$b] . ' <br><br>';
    //$json1 = file_get_contents("https://api.instagram.com/v1/media/popular?client_id=".$client_id);// Most popular posts
    $json1 = file_get_contents("https://api.instagram.com/v1/tags/" . $topics[$b] . "/media/recent?client_id=" . $client_id);
    $posts = json_decode($json1, true);
    $children = $posts['data'];
    var_dump($children);

    foreach ($children as $child) {
        $id = $child['id'];
        $type = $child['type'];
        $desc = $child['caption']['text'];
        $location = $child['location'];
        $created = $child['created_time'];
        $likes = $child['likes']['count'];
        $thumbnail = $child['images']['thumbnail'];
        $link = $child['link'];
        $user_id = $child['user']['id'];
        $user_name = $child['user']['username'];
        $full_name = $child['user']['full_name'];
        //$website = $child['user']['website'];
        $profile_pic = $child['user']['profile_picture'];
        // echo ($user_id);


        //echo "<div>Descripcion: " . $desc . "<br/> Usuario:" . $full_name . "<div class='embed-container'><iframe src='" . $link . "embed/' frameborder='0' scrolling='no' allowtransparency='true'></iframe></div></div>";


        //limpieza instagram
        $instaClean = '';
        if ($child['caption']['text'] != null && $child['caption']['text'] != '') {
            $instaClean = removeAccents($child['caption']['text']);
        }

        $arraySearch = [
            "id_post" => $id,
            "cant_retweet" => $likes,
            "text_tweet" => '',
            "text_clean" => utf8_encode($instaClean),
            "id_usuario" => $user_id,
            "nombre_usuario" => utf8_encode($user_name),
            "screen_name" => utf8_encode($full_name),
            "foto_perfil" => $profile_pic,
            "cuentas_que_sigue" => '',
            "cuentas_que_lo_siguen" => '',
            "title" => '',
            "name" => '',
            "description" => utf8_encode($desc),
            "url" => $link,
            "posts" => '',
            "nsfw" => '',
            "api" => 'instagram'
        ];

        //array_push($post, $arraySearch);

        // $coll->insert($arraySearch);

    }
}
// http://instagram.com/p/y78iHVmO1q test
/*
// TEST -- DELETE
echo "<div class='width:50%'><div class='embed-container'><iframe src='//instagram.com/p/y78iHVmO1q/embed/' frameborder='0' scrolling='no' allowtransparency='true'></iframe></div></div>";
//* embed Instagram -
echo '<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="4"
style = " background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px;
    padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);" >
    <div style = "padding:8px;" > <div style = " background:#F8F8F8; line-height:0; margin-top:40px; padding:50% 0; text-align:center; width:100%;" >
    <div style = " background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAAGFBMVEUiIiI9PT0eHh4gIB4hIBkcHBwcHBwcHBydr+JQAAAACHRSTlMABA4YHyQsM5jtaMwAAADfSURBVDjL7ZVBEgMhCAQBAf//42xcNbpAqakcM0ftUmFAAIBE81IqBJdS3lS6zs3bIpB9WED3YYXFPmHRfT8sgyrCP1x8uEUxLMzNWElFOYCV6mHWWwMzdPEKHlhLw7NWJqkHc4uIZphavDzA2JPzUDsBZziNae2S6owH8xPmX8G7zzgKEOPUoYHvGz1TBCxMkd3kwNVbU0gKHkx+iZILf77IofhrY1nYFnB/lQPb79drWOyJVa/DAvg9B/rLB4cC+Nqgdz/TvBbBnr6GBReqn/nRmDgaQEej7WhonozjF+Y2I/fZou/qAAAAAElFTkSuQmCC);
        display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;" ></div ></div >
        <p style = " margin:8px 0 0 0; padding:0 4px;" >
        <a href = "https://instagram.com/p/y-n2McypKz/" style = " color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal;
        font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target = "_top" > Aprendiendo nuevos trucos #Router #ITESM #CampusLaguna</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">Una foto publicada por ihanelly (@ihanellyhdz) el <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2015-02-11T22:57:50+00:00">11 de Feb de 2015 a la(s) 2:57 PST</time></p></div></blockquote>
< script async defer src = "//platform.instagram.com/en_US/embeds.js" ></script > ';
///DELETE
//*/
///////////////************************************////////////////////////

// ************** Sentiment API ***********************

$key[0] = 'e9ce37fc21e2fbfba29bde1d2fbd3b61'; //socialmediadaac@gmail.com
$key[1] = '21089e2646a625584cee07cc52421d24'; //socialmediadaac0@gmail.com
$key[2] = '2662039e381619d652afa4bd08b11cf0'; //socialmediadaac1@gmail.com
$key[3] = '247d733eb8fc2c8e8fe8e2f5492f1598'; //socialmediadaac2@gmail.com
$key[4] = '6e09fa82b045b09fee2e0410baeee945'; //socialmediadaac3@gmail.com
$key[5] = '91aa5264fa77df2e3c928cce324d6658'; //socialmediadaac4@gmail.com
$key[6] = 'cf803ded8f0c20d1d3247694afb1a3b2'; //socialmediadaac5@gmail.com
$key[7] = ''; // Sacar del while
$txt = '';
$model = 'auto';//general_es general_en general_fr auto  // es-general/en-general/fr-general/en-reputation/es-reputation DEPRECATED
$keyIndex = 0;
$showSentiment = false;
/*
if($_POST["sentiment"] == 'true'){
    $showSentiment = true;
}
// Auxiliary function to make a post request
function sendPost($api, $key, $model, $txt) {
    //  echo' api:'.$api;
    //* Debug
       echo' key:'.$key;
       echo' model:'.$model;
       echo' Text:'.$txt;
    $data = http_build_query(array('key'=>$key,
        'model'=>$model,
        'txt'=>$txt,
        'src'=>'sdk - php - 1.2')); // management internal parameter
    $context = stream_context_create(array('http'=>array(
        'method'=>'POST',
        'header'=>
            'Content - type: application / x - www - form - urlencoded'."\r\n".
            'Content - Length: '.strlen($data)."\r\n",
        'content'=>$data)));

    $fd = fopen($api, 'r', false, $context);
    $response = stream_get_contents($fd);
    fclose($fd);
    return $response;
}

// sendPost
//*/


echo json_encode($post);