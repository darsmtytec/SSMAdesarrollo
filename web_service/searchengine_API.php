<?php
/**
 * Created by PhpStorm.
 * User: L03037373
 * Date: 02/09/2015
 */
//$boolean = false;
$cont=0;
//while ($boolean != true) {
    $query = 'Tec%20de%20Monterrey';
    $url = "http://ajax.googleapis.com/ajax/services/search/web?v=1.0&q=" . $query . "&userip=USERS-IP-ADDRESS&rsz=large";//&start=".$cont;
    echo $url;

    $body = file_get_contents($url);
    $json = json_decode($body);
//$responseData =array();
//$results = array();


//var_dump($json->responseData);
//http://ajax.googleapis.com/ajax/services/search/images?v=1.0&q=$query&start=4

    for ($x = 0; $x < count($json->responseData->results); $x++) {

        $GsearchResultClass = $json->responseData->results[$x]->GsearchResultClass;
        $unescapedUrl = $json->responseData->results[$x]->unescapedUrl;
        $url = $json->responseData->results[$x]->url;
        $urlvisbile = $json->responseData->results[$x]->visibleUrl;
        $cacheUrl = $json->responseData->results[$x]->cacheUrl;
        $titlulo = $json->responseData->results[$x]->title;
        $titleNoFormatting = $json->responseData->results[$x]->titleNoFormatting;
        $coment = $json->responseData->results[$x]->content;

        $responseData["responseData"]["results"][$x]["GsearchResultClass"] = $GsearchResultClass;
        $responseData["responseData"]["results"][$x]["unescapedUrl"] = $unescapedUrl;
        $responseData["responseData"]["results"][$x]["url"] = $url;
        $responseData["responseData"]["results"][$x]["visibleUrl"] = $urlvisbile;
        $responseData["responseData"]["results"][$x]["titlulo"] = $titlulo;
        $responseData["responseData"]["results"][$x]["titleNoFormatting"] = $titleNoFormatting;
        $responseData["responseData"]["results"][$x]["coment"] = $coment;

        echo $url;
        echo '</br>';

        echo '
<iframe src="' . $url . '" width="900" height="400"></iframe>

</br>
';
        //array_push($post, $responseData);

    }
//echo count($responseData["responseData"]["results"]);
    $a = 0;
    for ($a = 0; $a < count($json->responseData->cursor->pages); $a++) {

        $start = $json->responseData->cursor->pages[$a]->start;
        $label = $json->responseData->cursor->pages[$a]->label;
        $responseData["responseData"]["cursor"]["pages"][$a]["start"] = $start;
        $responseData["responseData"]["cursor"]["pages"][$a]["label"] = $label;

    }
    $resultCount = $json->responseData->cursor->resultCount;
    $estimatedResultCount = $json->responseData->cursor->estimatedResultCount;
    $currentPageIndex = $json->responseData->cursor->currentPageIndex;
    $moreResultsUrl = $json->responseData->cursor->moreResultsUrl;
    $searchResultTime = $json->responseData->cursor->searchResultTime;

    $responseData["responseData"]["cursor"]["resultCount"] = $resultCount;
    $responseData["responseData"]["cursor"]["estimatedResultCount"] = $estimatedResultCount;
    $responseData["responseData"]["cursor"]["currentPageIndex"] = $currentPageIndex;
    $responseData["responseData"]["cursor"]["moreResultsUrl"] = $moreResultsUrl;
    $responseData["responseData"]["cursor"]["searchResultTime"] = $searchResultTime;
/*
    $cont++;
    if($cont>3){
        $boolean=true;
    }
*/
//}
echo json_encode($responseData);



//array_push($post, $responseData);


//echo json_encode($post);

/*

// The request also includes the userip parameter which provides the end
// user's IP address. Doing so will help distinguish this legitimate
// server-side traffic from traffic which doesn't come from an end-user.
$url = "https://ajax.googleapis.com/ajax/services/search/web?v=1.0&"
    . "q=tec%20de%20monterrey&userip=USERS-IP-ADDRESS";

// sendRequest
// note how referer is set manually
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_REFERER, "www.google.com.mx"/* Enter the URL of your site here *);
$body = curl_exec($ch);
curl_close($ch);

// now, process the JSON string
$json = json_decode($body,true);
// now have some fun with the results...

//echo json_encode($json);
//var_dump($json);
*/