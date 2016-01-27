<?php
/**
 * Created by PhpStorm.
 * User: L03037373
 * Date: 25/01/2016
 * Time: 05:17 PM
 */
require_once 'Google/Client.php';
require_once 'Google/Service/YouTube.php';

$topic="tec de monterry";
$maxResults = 25;
$htmlBody = '';
$videos = '';
$channels = '';
$playlists = '';
$post = [];

// This code will execute if the user entered a search query in the form
// and submitted the form. Otherwise, the page displays the form above.
//if ($_GET['topic'] && $_GET['maxResults']) {
    // Call set_include_path() as needed to point to your client library.

    /*
     * Set $DEVELOPER_KEY to the "API key" value from the "Access" tab of the
     * Google Developers Console <https://console.developers.google.com/>
     * Please ensure that you have enabled the YouTube Data API for your project.
     */
    $DEVELOPER_KEY = 'AIzaSyC9KIroJs2GbaA-m1K2-X6xOdRdVVhY9VM';

    $client = new Google_Client();
    $client->setDeveloperKey($DEVELOPER_KEY);

    // Define an object that will be used to make all API requests.
    $youtube = new Google_Service_YouTube($client);

        // Call the search.list method to retrieve results matching the specified
        // query term.
        $searchResponse = $youtube->search->listSearch('id,snippet', array('q' => $topic,'maxResults' => $maxResults,));

        // Add each result to the appropriate list, and then display the lists of
        // matching videos, channels, and playlists.
        foreach ($searchResponse['items'] as $searchResult) {


            switch ($searchResult['id']['kind']) {
                case 'youtube#video':
                    //var_dump($searchResult);
                    $arraySearch = [
                       "title" => $searchResult['snippet']['title'],
                       "description" => $searchResult['snippet']['description'],
                       "id"=>$searchResult['id']['videoId'],
                       "publishedAt"=>$searchResult['snippet']['publishedAt'],
                       "channelTitle" => $searchResult['snippet']['channelTitle'],
                        "type"=>"video",
                        "api" => 'youtube'
                    ];
                    break;
                case 'youtube#channel':
                    $arraySearch = [
                        "title" => $searchResult['snippet']['title'],
                        "description" => $searchResult['snippet']['description'],
                        "channelTitle" => $searchResult['snippet']['channelTitle'],
                        "id"=> $searchResult['id']['channelId'],
                        "type"=>"channel",
                        "api" => 'youtube'
                    ];
                    break;
                case 'youtube#playlist':
                    $arraySearch = [
                        "title" => $searchResult['snippet']['title'],
                        "publishedAt"=>$searchResult['snippet']['publishedAt'],
                        "id"=>$searchResult['id']['playlistId'],
                        "type"=>"playlist",
                        "api" => 'youtube'
                    ];
                    break;
            }
            array_push($post, $arraySearch);
        }
echo json_encode($post);
