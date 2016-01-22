<?php
/**
 * Created by PhpStorm.
 * User: L03037373
 * Date: 01/09/2015
 */
require_once("reddit.php");
$reddit = new reddit();
$post = [];
$topicsReddit = [];
$accounts = [];
$topics = [];
$showSentiment = false ;
$sentiment = '';

//<editor-fold desc="Remove accents">
/**
 * Replace accented characters with non accented
 *
 * @param $str
 * @return mixed
 * @link http://myshadowself.com/coding/php-function-to-convert-accented-characters-to-their-non-accented-equivalant/
 */
function removeAccents($str)
{
    $a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'Ā', 'ā', 'Ă', 'ă', 'Ą', 'ą', 'Ć', 'ć', 'Ĉ', 'ĉ', 'Ċ', 'ċ', 'Č', 'č', 'Ď', 'ď', 'Đ', 'đ', 'Ē', 'ē', 'Ĕ', 'ĕ', 'Ė', 'ė', 'Ę', 'ę', 'Ě', 'ě', 'Ĝ', 'ĝ', 'Ğ', 'ğ', 'Ġ', 'ġ', 'Ģ', 'ģ', 'Ĥ', 'ĥ', 'Ħ', 'ħ', 'Ĩ', 'ĩ', 'Ī', 'ī', 'Ĭ', 'ĭ', 'Į', 'į', 'İ', 'ı', 'Ĳ', 'ĳ', 'Ĵ', 'ĵ', 'Ķ', 'ķ', 'Ĺ', 'ĺ', 'Ļ', 'ļ', 'Ľ', 'ľ', 'Ŀ', 'ŀ', 'Ł', 'ł', 'Ń', 'ń', 'Ņ', 'ņ', 'Ň', 'ň', 'ŉ', 'Ō', 'ō', 'Ŏ', 'ŏ', 'Ő', 'ő', 'Œ', 'œ', 'Ŕ', 'ŕ', 'Ŗ', 'ŗ', 'Ř', 'ř', 'Ś', 'ś', 'Ŝ', 'ŝ', 'Ş', 'ş', 'Š', 'š', 'Ţ', 'ţ', 'Ť', 'ť', 'Ŧ', 'ŧ', 'Ũ', 'ũ', 'Ū', 'ū', 'Ŭ', 'ŭ', 'Ů', 'ů', 'Ű', 'ű', 'Ų', 'ų', 'Ŵ', 'ŵ', 'Ŷ', 'ŷ', 'Ÿ', 'Ź', 'ź', 'Ż', 'ż', 'Ž', 'ž', 'ſ', 'ƒ', 'Ơ', 'ơ', 'Ư', 'ư', 'Ǎ', 'ǎ', 'Ǐ', 'ǐ', 'Ǒ', 'ǒ', 'Ǔ', 'ǔ', 'Ǖ', 'ǖ', 'Ǘ', 'ǘ', 'Ǚ', 'ǚ', 'Ǜ', 'ǜ', 'Ǻ', 'ǻ', 'Ǽ', 'ǽ', 'Ǿ', 'ǿ', 'Ά', 'ά', 'Έ', 'έ', 'Ό', 'ό', 'Ώ', 'ώ', 'Ί', 'ί', 'ϊ', 'ΐ', 'Ύ', 'ύ', 'ϋ', 'ΰ', 'Ή', 'ή');
    $b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o', 'Α', 'α', 'Ε', 'ε', 'Ο', 'ο', 'Ω', 'ω', 'Ι', 'ι', 'ι', 'ι', 'Υ', 'υ', 'υ', 'υ', 'Η', 'η');
    return str_replace($a, $b, $str);
}

//</editor-fold>


//<editor-fold desc="Sentiment API">
//https://www.meaningcloud.com/developer/apis

$api = 'http://api.meaningcloud.com/sentiment-2.0';
$key[0] = 'e9ce37fc21e2fbfba29bde1d2fbd3b61'; //socialmediadaac@gmail.com
$key[1] = '21089e2646a625584cee07cc52421d24'; //socialmediadaac0@gmail.com
$key[2] = '2662039e381619d652afa4bd08b11cf0'; //socialmediadaac1@gmail.com
$key[3] = '247d733eb8fc2c8e8fe8e2f5492f1598'; //socialmediadaac2@gmail.com
$key[4] = '6e09fa82b045b09fee2e0410baeee945'; //socialmediadaac3@gmail.com
$key[5] = '91aa5264fa77df2e3c928cce324d6658'; //socialmediadaac4@gmail.com
$key[6] = 'cf803ded8f0c20d1d3247694afb1a3b2'; //socialmediadaac5@gmail.com
$key[8] = 'd5af72bc04ee7c663840212cd71edd1a'; //e.acosta@itesm.mx
$key[9] = ''; // Sacar del while
$txt = '';
$model = 'auto'; //general_es general_en general_fr auto  // es-general/en-general/fr-general/en-reputation/es-reputation DEPRECATED
$keyIndex = 0;
if (isset($_POST["sentiment"]) && $_POST["sentiment"] != '') {
    $showSentiment = $_POST["sentiment"];

    if ($showSentiment == 'true') {
        $showSentiment = true;
    }
}

// Auxiliary function to make a post request
function sendPost($api, $key, $model, $txt)
{
    $data = http_build_query(array('key' => $key,
        'model' => $model,
        'txt' => $txt,
        'src' => 'sdk-php-2.0')); // management internal parameter
    $context = stream_context_create(array('http' => array(
        'method' => 'POST',
        'header' =>
            'Content-type: application/x-www-form-urlencoded' . "\r\n" .
            'Content-Length: ' . strlen($data) . "\r\n",
        'content' => $data)));

    $fd = fopen($api, 'r', false, $context);
    $response = stream_get_contents($fd);
    fclose($fd);
    return $response;
} // sendPost


//</editor-fold>


//<editor-fold desc="Usuario y Topicos">
if (isset($_POST["accounts"][0]) && $_POST["accounts"][0] != '') {
    $accounts = $_POST["accounts"];
}
if (isset($_POST["topics"]) && $_POST["topics"] != '') {
    $topics = $_POST["topics"];
}

if ($accounts != '') {
    foreach ($accounts as $eachAcc) {
        array_push($topicsReddit, $eachAcc);
    }
}
if ($topics != '') {
    foreach ($topics as $eachTopic) {
        array_push($topicsReddit, $eachTopic);
    }
}
//</editor-fold>

//$reddit->login("socialmediadaac", "socialMediaDaac123");


$topicsReddit = ['TecdeMonterrey'];
$showSentiment = true;

for ($d = 0; $d < count($topicsReddit); $d++) { // count($topicsReddit)
    // $user = $reddit->getUser();
    $string_reddit = file_get_contents("http://reddit.com/api/subreddits_by_topic.json?query=" . $topicsReddit[$d]); // GET [/r/subreddit]/search[ .json | .xml ]
    $json = json_decode($string_reddit, true);
    $count = count($json);
    // tenemos la lista de subreddits que tienen el tema buscado
    for ($c = 0; $c < $count; $c++) {
        $string_redditSub = file_get_contents("http://reddit.com/r/" . $json[$c]['name'] . ".json");
        $jsonSub = json_decode($string_redditSub, true);

        //var_dump($jsonSub);

        $children = $jsonSub['data']['children'];
        foreach ($children as $child) {


            $id = $child['data']['id'];
            $title = $child['data']['title'];
            $url = $child["data"]["url"];
            $num_comments = $child['data']['num_comments'];
            $permalink = $child['data']['permalink'];
            $author = $child['data']['author'];
            $name = $child['data']['name'];
            $likes = $child["data"]["likes"];
            $score = $child["data"]["score"];
            $over_18 = $child["data"]["over_18"];

            if ($showSentiment) {
                $txt = $title;
                $sentiment = '';
                // We make the request and parse the response to an array
                $response = sendPost($api, $key[$keyIndex], $model, $txt);

                $jsonSentiment = json_decode($response, true);

                if (isset($jsonSentiment['status']) && isset($jsonSentiment['status']['code'])) {
                    if ($jsonSentiment['status']['code'] == '0') {

                        $sentiment = $jsonSentiment['score_tag'];
                        switch ($jsonSentiment['score_tag']) {
                            case "P+":
                                $sentiment = 'P+';
                                break;
                            case "P":
                                $sentiment = 'P';
                                break;
                            case "NEU":
                                $sentiment = 'NEU';
                                break;
                            case "N":
                                $sentiment = 'N';
                                break;
                            case "N+":
                                $sentiment = 'N+';
                                break;
                            case "NONE":
                                $sentiment = 'NONE';
                                break;
                        }
                    }
                    // 102: You have exceeded the maximum number of credits per month
                    elseif ($jsonSentiment['status']['code'] == '102' || $jsonSentiment['status']['code'] == '101') {
                        $var = true;
                        while ($var) {
                            $keyIndex++;
                            // We make the request AGAIN WITH NEW KEY and parse the response to an array
                            $response = sendPost($api, $key[$keyIndex], $model, $txt);
                            $json = json_decode($response, true);
                            if (isset($json['status']) && isset($json['status']['code'])) {

                                if (isset($json['score']) && $json['status']['code'] == '0') {
                                    $sentiment = $json['score_tag'];
                                    $var = false;
                                } else if ($json['status']['code'] == '102') {
                                    // nothing to do...while continue
                                } elseif ($json['status']['code'] == '100') { // Servicio denegado
                                    $var = false;
                                } else {
                                }
                            }
                        }//endwhile;
                    }
                    elseif ($jsonSentiment['status']['code'] == '100' || $jsonSentiment['status']['code'] == '202' || $jsonSentiment['status']['code'] == '203') {
                        $sentiment = 'N/A';
                        //$sentiment = 'No disponible';
                    }
                    elseif ($jsonSentiment['status']['code'] == '103') {
                        //$sentiment = 'Request too large.';
                        $sentiment = 'N/A';
                    }
                    elseif ($jsonSentiment['status']['code'] == '104') {
                        ///$sentiment=' Request rate limit exceeded.';
                        $sentiment = 'N/A';
                    }
                    elseif ($jsonSentiment['status']['code'] == '200') {
                        //$sentiment='Parametro faltante.';
                        $sentiment = 'N/A';
                    }
                    elseif ($jsonSentiment['status']['code'] == '201' || $jsonSentiment['status']['code'] == '204') {
                       // $sentiment= 'Lenguaje no soportado.';
                        $sentiment = 'N/A';
                    }
                    else {
                        $sentiment= 'NEU'; // No determino sentimiento positivo/negativo
                        //echo 'Sentimiento: <span class="label label-default">Neutral</span>';
                    }
                    //Ver la manera de mandar un email a los admin, avisando de la expiraci�n de la licencia.
                    // 101: The license has expire
                    /*
                        0: OK -- Listo
                        100: Operation denied -- Listo
                        101: License expired -- Listo
                        102: Credits per suscription exceeded -- Listo
                        103: Request too large -- Listo
                        104: Request rate limit exceeded
                        200: Missing required parameter(s) - [name of the parameter]
                        201: Model not supported
                        202: Engine internal error
                        203: Cannot connect to service
                        204: Model not suitable for the identified text language
                    */
                }
            }

            //limpieza reddit
            $redditClean = '';
            if ($child['data']['title'] != null && $child['data']['title'] != '') {
                $redditClean = removeAccents($child['data']['title']);
            }

            $arrayRedditTema = [
                "id" => $id,
                "num_comments" => $num_comments,
                "title" => $title,
                "text_clean" => $redditClean,
                "url" => $url,
                "nombre_usuario" => $author,
                "screen_name" => $name,
                "permalink" => $permalink,
                "likes" => $likes,
                "score" => $score,
                "over_18" => $over_18,
                "sentiment" => $sentiment,
                "api" => 'reddit'
            ];

            array_push($post, $arrayRedditTema);


        }
    }
}
echo json_encode($post);

