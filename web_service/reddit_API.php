<?php
/**
 * Created by PhpStorm.
 * User: L03037373
 * Date: 01/09/2015
 */
require_once("reddit.php");
$reddit = new reddit();

function removeAccents($str)
{
    $a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', 'Œ', 'œ', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', 'Š', 'š', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', 'Ÿ', '?', '?', '?', '?', 'Ž', 'ž', '?', 'ƒ', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?');
    $b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?');
    return str_replace($a, $b, $str);
}



$topicsReddit = ['Semanai'];
// Obtener lista de terminos
/*
if ($accounts[0] != '') {
    foreach ($accounts as $eachAcc) {
        array_push($topicsReddit, $eachAcc);
    }
}
if ($topics[0] != '') {
    foreach ($topics as $eachTopic) {
        array_push($topicsReddit, $eachTopic);
    }
}
*/
//$reddit->login("socialmediadaac", "socialMediaDaac123");

for($d=0; $d< count($topicsReddit); $d++){ // count($topicsReddit)
    // $user = $reddit->getUser();
    $string_reddit = file_get_contents("http://reddit.com/api/subreddits_by_topic.json?query=".$topicsReddit[$d]); // GET [/r/subreddit]/search[ .json | .xml ]
    $json = json_decode($string_reddit, true);
    // tenemos la lista de subreddits que tienen el tema buscado
    for($c=0; $c< count($json); $c++){
        $string_redditSub = file_get_contents("http://reddit.com/r/".$json[$c]['name'].".json");
        $jsonSub = json_decode($string_redditSub, true);
        $children = $jsonSub['data']['children'];
        foreach ($children as $child){
            $id = $child['data']['id'];
            $title = $child['data']['title'];
            $num_comments = $child['data']['num_comments'];
            $permalink = $child['data']['permalink'];
            $author = $child['data']['author'];
            $name = $child['data']['name'];
            // echo 'id: '.($id)."<br />";


            //limpieza reddit
            $redditClean = '';
            if($child['data']['title'] != null && $child['data']['title'] != ''){
                $redditClean = removeAccents($child['data']['title']);
            }

            $arrayRedditTema = [
                "id_tweet" => $id,
                "cant_retweet" => $num_comments,
                "text_tweet" => $title,
                "text_clean" => $redditClean,
                "id_usuario" => '',
                "nombre_usuario" => $author,
                "screen_name" => $name,
                "foto_perfil" => $permalink,
                "cuentas_que_sigue" => '',
                "cuentas_que_lo_siguen" => '',
                "api" => 'reddit'
            ];

        }
    }
}
echo json_encode($arrayRedditTema);

