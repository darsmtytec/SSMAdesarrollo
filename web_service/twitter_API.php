<?php
/**
 * Created by PhpStorm.
 * User: L03037373
 * Date: 28/08/2015
 * Time: 12:36 PM
 */

header("Access-Control-Allow-Origin: *");

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

$b = 0;
require_once("twitteroauth.php");
$word[] = '';
$topico[] = '';
$user[] = '';
$api = '';
$topics[] = '';
$accounts[] ='';
$post[] = '';
$showSentiment = 'true';
$notweets = 5; //cantidad de tweets a mostrar

if (isset($_POST["user"][0]) && $_POST["user"][0] != '') {
    $user = $_POST["user"];
}
if (isset($_POST["topic"][0]) && $_POST["topic"][0] != '') {
    $topico = $_POST["topic"];
}
if (isset($_POST["search"][0]) && $_POST["search"][0] != '') {
    $word = $_POST["search"];
}
if (isset($_POST["sentiment"]) && $_POST["sentiment"] != '') {
    $showSentiment = $_POST["sentiment"];
}

//$topico[0] = 'semanai';
$user[0]='garo1603';

//<editor-fold desc="Klout">
// ************* Klout API ***************************
$kloutKey = 'hjsske2mer3th85ub6e5bw82';

if ($showSentiment == 'true') {
    $showSentiment = true;
}
//</editor-fold>

//<editor-fold desc="Conexion API Twitter">
$consumerkey = "0O4NDYS28rd96Uh6uGENXvp5y";
$consumersecret = "5Bv5v0TwNctAX1XFp6IgiCNQWPIcBbbw2XjByIHKwTaTBglrp8";
$accesstoken = "2756750930-6YPZhJNzv8ndgJHM6SFY2zFJluiZRqSJjf4PpLr";
$accesstokensecret = "P29vdR1GVdDroA0UY5BGYmVGEDumuqdzfEBFevHAIAFWy";

function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret)
{
    $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
    return $connection;
}

$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
//</editor-fold>


//<editor-fold desc="Por cuenta">
if ($user[0] != '') {
    // Obtener lista de terminos
    // $users = $_POST["user"];
    foreach ($user as $eachUser) {
        array_push($accounts, $eachUser);
    }
}
//</editor-fold>

//<editor-fold desc="Por palabra o Hashtag">
if ($topico[0] != '') {

    //$topic = $_POST["topic"];
    foreach ($topico as $eachTopic) {
        array_push($topics, $eachTopic);
    }
}
if ($word[0] != '') {
    //$word = $_POST["search"];
    foreach ($word as $eachWord) {
        array_push($topics, $eachWord);
    }
}
//</editor-fold>

//<editor-fold desc="Sentiment API">
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
//</editor-fold>

// Auxiliary function to make a post request

function sendPost($api, $key, $model, $txt)
{
    /* Debug   echo' api:'.$api;
       echo' key:'.$key;
       echo' model:'.$model;
       echo' Text:'.$txt;*/
    $data = http_build_query(array('key' => $key,
        'model' => $model,
        'txt' => $txt,
        'src' => 'sdk-php-1.2')); // management internal parameter
    $context = stream_context_create(array('http' => array(
        'method' => 'POST',
        'header' =>
            'Content-type: application/x-www-form-urlencoded' . "\r\n" .
            'Content-Length: ' . strlen($data) . "\r\n",
        'content' => $data)));

    /*
              $fd = fopen($api, 'r', false, $context);
              $response = stream_get_contents($fd);
              fclose($fd);
              return $response;
    */
} // sendPost

/////////////////////////////////////////////////////////////////////////////////
if($topics[0]!=''){

for ($b = 0; $b < count($topics); $b++) {
    $tweetsSearch = $connection->get("https://api.twitter.com/1.1/search/tweets.json?q=" . $topics[$b] . "&count=" . $notweets);
    $phpArraySearch = json_decode($tweetsSearch, true);
    //var_dump($phpArraySearch);
    if (count($phpArraySearch['statuses']) == 0) {

    }
    $count = 0;
    for ($a = 0; $a < count($phpArraySearch['statuses']); $a++) {
        if ($phpArraySearch['statuses'] != null && $phpArraySearch['statuses'][$a] != null && $phpArraySearch['statuses'][$a]['id_str'] != '') {
            $rtImg = false;
            if ($phpArraySearch['statuses'][$a]['text'][0] == 'R' &&
                $phpArraySearch['statuses'][$a]['text'][1] == 'T' &&
                $phpArraySearch['statuses'][$a]['text'][2] == ' '
            ) {
                $rtImg = true;
            }

            if ($count <= 30) {
                $json = file_get_contents("http://api.klout.com/v2/identity.json/tw/" . $phpArraySearch['statuses'][$a]['user']['id'] . "?key=" . $kloutKey);
                $kloutID = json_decode($json, true);

                $json1 = file_get_contents("http://api.klout.com/v2/user.json/" . $kloutID['id'] . "?key=" . $kloutKey);
                $kloutScore = json_decode($json1, true);
                $kloutUser = $kloutScore['score']['score'];
                $scoreKlout = intval($kloutUser);
            } else { // esperar unos segundos y volver a realizar las peticiones
                sleep(15);
                $count = 0;
                $json = file_get_contents("http://api.klout.com/v2/identity.json/tw/" . $phpArraySearch['statuses'][$a]['user']['id'] . "?key=" . $kloutKey);
                $kloutID = json_decode($json, true);

                $json1 = file_get_contents("http://api.klout.com/v2/user.json/" . $kloutID['id'] . "?key=" . $kloutKey);
                $kloutScore = json_decode($json1, true);
                $kloutUser = $kloutScore['score']['score'];
                $scoreKlout = intval($kloutUser);
            }
            $count++;

            if ($showSentiment) {

                $txt = $phpArraySearch['statuses'][$a]['text'];

                $sentiment = '';
                // We make the request and parse the response to an array
                $response = sendPost($api, $key[$keyIndex], $model, $txt);

                $json = json_decode($response, true);
                if (isset($json['status']) && isset($json['status']['code'])) {
                    if ($json['status']['code'] == '0') {

                        $sentiment = $json['score_tag'];
                        switch ($json['score_tag']) {
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
                    elseif ($json['status']['code'] == '102' || $json['status']['code'] == '101') { // 102: You have exceeded the maximum number of credits per month
                        $var = true;
                        while ($var):
                            $keyIndex++;
                            // We make the request AGAIN WITH NEW KEY and parse the response to an array
                            $response = sendPost($api, $key[$keyIndex], $model, $txt);
                            $json = json_decode($response, true);
                            if (isset($json['status']) && isset($json['status']['code'])) {

                                if (isset($json['score']) && $json['status']['code'] == '0') {
                                    $sentiment = $json['score_tag'];
                                    $var = false;
                                }
                                else if ($json['status']['code'] == '102') {
                                    // nothing to do...while continue
                                }
                                elseif ($json['status']['code'] == '100') { // Servicio denegado
                                    $var = false;
                                }
                                else {
                                }
                            }
                        endwhile;
                    }
                    elseif ($json['status']['code'] == '100' || $json['status']['code'] == '202' || $json['status']['code'] == '203') {
                        //echo '<br> Sentimiento: No disponible.';
                        $sentiment = 'No disponible';
                    } elseif ($json['status']['code'] == '103') {
                        $sentiment = 'No disponible';
                        //echo '<br> Request too large.';
                    } elseif ($json['status']['code'] == '104') {
                        //echo '<br> Request rate limit exceeded.';
                    } elseif ($json['status']['code'] == '200') {
                        //echo '<br> Par�metro faltante.';
                    } elseif ($json['status']['code'] == '201' || $json['status']['code'] == '204') {
                        //echo '<br> Lenguaje no soportado.';
                    } else {
                        //echo '<br> Sentimiento: Neutral'; // No determino sentimiento positivo/negativo
                        //echo 'Sentimiento: <span class="label label-default">Neutral</span>';
                    } //Ver la manera de mandar un email a los admin, avisando de la expiraci�n de la licencia.
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
            $strText = '';
            if ($phpArraySearch['statuses'][$a]['text'] != null && $phpArraySearch['statuses'][$a]['text'] != '') {
                $strText = removeAccents($phpArraySearch['statuses'][$a]['text']);//preg_replace('/\/[^@:.A-Za-z0-9\-]/', ' ', $phpArraySearch['statuses'][$a]['text']);;
            }

            if ($rtImg) {
                // Necesitamos calcular el klout de la persona RT
                $json = file_get_contents("http://api.klout.com/v2/identity.json/tw/" . $phpArraySearch['statuses'][$a]['retweeted_status']['user']['id_str'] . "?key=" . $kloutKey);
                $kloutID = json_decode($json, true);
                $json1 = file_get_contents("http://api.klout.com/v2/user.json/" . $kloutID['id'] . "?key=" . $kloutKey);
                $kloutScore = json_decode($json1, true);
                $kloutRT = $kloutScore['score']['score'];
                $scoreKlout = intval($kloutRT);
            } else {
                // si no es RT se coloca el klout del usuario que se busco
                $scoreKlout = intval($kloutUser);
            }

            $arraySearch[$b]["id_tweet"] = $phpArraySearch['statuses'][$a]['id_str'];
            $arraySearch[$b]["cant_retweet"] = utf8_encode($phpArraySearch['statuses'][$a]['retweet_count']);
            $arraySearch[$b]["text_tweet"] = utf8_encode($phpArraySearch['statuses'][$a]['text']);
            $arraySearch[$b]["text_clean"] = utf8_encode($strText);
            $arraySearch[$b]["id_usuario"] = $phpArraySearch['statuses'][$a]['user']['id'];
            $arraySearch[$b]["nombre_usuario"] = utf8_encode($phpArraySearch['statuses'][$a]['user']['name']);
            $arraySearch[$b]["screen_name"] = utf8_encode($phpArraySearch['statuses'][$a]['user']['screen_name']);
            $arraySearch[$b]["foto_perfil"] = $phpArraySearch['statuses'][$a]['user']['profile_image_url'];
            $arraySearch[$b]["cuentas_que_sigue"] = utf8_encode($phpArraySearch['statuses'][$a]['user']['friends_count']);
            $arraySearch[$b]["cuentas_que_lo_siguen"] = utf8_encode($phpArraySearch['statuses'][$a]['user']['followers_count']);
            $arraySearch[$b]["api"] = 'twitter';
            $arraySearch[$b]["Klout"] = $scoreKlout;
            $arraySearch[$b]["sentimiento"] = $sentiment;

            //array_push($post,$arraySearch);
            $b++;
        }
    }
}


echo json_encode($arraySearch);
}
else if($accounts[0]!='') {

//var_dump($post);

    for ($c = 0; $c < count($accounts); $c++) {
        $tweetsAccount = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=" . $accounts[$c] . "&count=" . $notweets);
        $jsonData = $tweetsAccount;
        $phpArrayAccount = json_decode($jsonData, true);
        $kloutUser = 0;
        $kloutRT = 0;

        for ($a = 0; $a < count($phpArrayAccount); $a++) {
            $rtImg = false;
            if ($phpArrayAccount[$a] != null && $phpArrayAccount[$a]['id_str'] != null) {

                if ($phpArrayAccount[$a]['text'][0] == 'R' &&
                    $phpArrayAccount[$a]['text'][1] == 'T' &&
                    $phpArrayAccount[$a]['text'][2] == ' '
                ) {
                    $rtImg = true;
                }

                if ($a == 0) {
                    $json = file_get_contents("http://api.klout.com/v2/identity.json/tw/" . $phpArrayAccount[$a]['user']['id_str'] . "?key=" . $kloutKey);
                    $kloutID = json_decode($json, true);
                    $json1 = file_get_contents("http://api.klout.com/v2/user.json/" . $kloutID['id'] . "?key=" . $kloutKey);
                    $kloutScore = json_decode($json1, true);
                    $kloutUser = $kloutScore['score']['score'];
                    $scoreKlout = intval($kloutUser);
                }
                $strText = '';
                if ($phpArrayAccount[$a]['text'] != null && $phpArrayAccount[$a]['text'] != '') {
                    $strText = removeAccents($phpArrayAccount[$a]['text']); //preg_replace('/\/[^@:.A-Za-z0-9\-]/', ' ', $phpArrayAccount[$a]['text']);;
                }
                if ($showSentiment) {
                    $txt = $phpArrayAccount[$a]['text'];
                    $sentiment = '';
                    // We make the request and parse the response to an array
                    $response = sendPost($api, $key[$keyIndex], $model, $txt);
                    $json = json_decode($response, true);
                    //  echo $response;
                    if (isset($json['status']) && isset($json['status']['code'])) {
                        if (isset($json['score']) && $json['status']['code'] == '0') {
                            /*
                                P+: strong positive
                                P: positive
                                NEU: neutral
                                N: negative
                                N+: strong negative
                                NONE: without sentiment
                            */
                            $sentiment = $json['score_tag'];
                            switch ($json['score_tag']) {
                                case "P+":
                                   break;
                                case "P":

                                    break;
                                case "NEU":

                                    break;
                                case "N":

                                    break;
                                case "N+":

                                    break;
                            }
                        }
                        elseif ($json['status']['code'] == '102' || $json['status']['code'] == '101') { // 102: You have exceeded the maximum number of credits per month
                            $var = true;
                            while ($var):
                                $keyIndex++;
                                // We make the request AGAIN WITH NEW KEY and parse the response to an array
                                $response = sendPost($api, $key[$keyIndex], $model, $txt);
                                $json = json_decode($response, true);
                                if (isset($json['status']) && isset($json['status']['code'])) {
                                    if (isset($json['score']) && $json['status']['code'] == '0') {
                                        //  echo '</br> Sentimiento TAG: '.$json['score_tag'];
                                        $sentiment = $json['score_tag'];
                                        switch ($json['score_tag']) {
                                            case "P+":

                                                break;
                                            case "P":

                                                break;
                                            case "NEU":

                                                break;
                                            case "N":

                                                break;
                                            case "N+":
                                                break;
                                        }
                                        $var = false;
                                    } else if ($json['status']['code'] == '102') {
                                        // nothing to do...while continue
                                    } elseif ($json['status']['code'] == '100') { // Servicio denegado
                                        $var = false;
                                    } else {
                                        //echo '<br> Sentimiento: Neutral'; // No determin� sentimiento positivo/negativo

                                    }
                                }
                            endwhile;
                        } elseif ($json['status']['code'] == '100' || $json['status']['code'] == '202' || $json['status']['code'] == '203') {
                            //echo '<br> Sentimiento: No disponible.';
                        } elseif ($json['status']['code'] == '103') {
                            //echo '<br> Request too large.';
                        } elseif ($json['status']['code'] == '104') {
                            //echo '<br> Request rate limit exceeded.';
                        } elseif ($json['status']['code'] == '200') {
                            //echo '<br> Par�metro faltante.';
                        } elseif ($json['status']['code'] == '201' || $json['status']['code'] == '204') {
                            //echo '<br> Lenguaje no soportado.';
                        } else {
                            //echo '<br> Sentimiento: Neutral'; // No determino sentimiento positivo/negativo
                            //echo 'Sentimiento: <span class="label label-default">Neutral</span>';
                        } //Ver la manera de mandar un email a los admin, avisando de la expiraci�n de la licencia.
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

                if ($rtImg) {
                    // Necesitamos calcular el klout de la persona RT
                    $json = file_get_contents("http://api.klout.com/v2/identity.json/tw/" . $phpArrayAccount[$a]['retweeted_status']['user']['id_str'] . "?key=" . $kloutKey);
                    $kloutID = json_decode($json, true);
                    $json1 = file_get_contents("http://api.klout.com/v2/user.json/" . $kloutID['id'] . "?key=" . $kloutKey);
                    $kloutScore = json_decode($json1, true);
                    $kloutRT = $kloutScore['score']['score'];
                    $scoreKlout = intval($kloutRT);
                } else {
                    // si no es RT se coloca el klout del usuario que se busco
                    $scoreKlout = intval($kloutUser);
                }
                $array = [
                    "id_tweet" => $phpArrayAccount[$a]['id_str'],
                    "fecha_tweet" => $phpArray[$a]['created_at'],
                    "text_tweet" => $phpArrayAccount[$a]['text'],
                    "text_clean" => $strText,
                    "cant_retweet" => $phpArrayAccount[$a]['retweet_count'],
                    "cant_favoritos" => $phpArrayAccount[$a]['favorite_count'],
                    "geolocalizacion" => $phpArrayAccount[$a]['geo'],
                    "id_usuario" => $phpArrayAccount[$a]['user']['id_str'],
                    "nombre_usuario" => $phpArrayAccount[$a]['user']['name'],
                    "screen_name" => $phpArrayAccount[$a]['user']['screen_name'],
                    "imagen_perfil" => $phpArrayAccount[$a]['user']['profile_image_url'],
                    "usuario_desde" => $phpArrayAccount[$a]['user']['created_at'],
                    "cuentas_que_sigue" => $phpArrayAccount[$a]['user']['friends_count'],
                    "cuentas_que_lo_siguen" => $phpArrayAccount[$a]['user']['followers_count'],
                    "cuenta_privada" => $phpArrayAccount[$a]['user']['protected'],
                    "api" => 'twitter',
                    "sentimiento" => $sentiment
                ];
                //$coll->insert($array);
                //$coll->ensureIndex(array('id_tweet' => 1), array('unique' => 1, 'dropDups' => 1));
            }
            else {
                $response["msg"]="No existe resultado para mostrar";
                //echo '<div id="alertBox" class="alert alert-danger" role="alert" style="display:block">No existen resultados para mostrar.</div>';
            }
        }
    }

}
else{
    $response['msg']= "error en la busqueda";
    json_encode($response);
}