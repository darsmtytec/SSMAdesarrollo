<?php
//oauth token fetch and api request endpoints
define("ENDPOINT_OAUTH", "https://oauth.reddit.com");
define('ENDPOINT_OAUTH_AUTHORIZE', 'https://ssl.reddit.com/api/v1/authorize');
define('ENDPOINT_OAUTH_TOKEN', 'https://ssl.reddit.com/api/v1/access_token');
define('ENDPOINT_OAUTH_REDIRECT', 'http://10.2.27.52/modx/index.php?id=9');

//access token configuration from https://ssl.reddit.com/prefs/apps
define('CLIENT_ID', 'WEQvHgCpqcWmMA'); // YOUR CLIENT ID -extract WEQvHgCpqcWmMA - lab IEq_dbHgE50gLw
define('CLIENT_SECRET', 'ZyUYbjynVPoJ5y2FQNN8xkkqKIs'); // YOUR CLIENT SECRET

//access token request scopes
//full list at http://www.reddit.com/dev/api/oauth
define('SCOPES', 'modposts,identity,edit,flair,history,modconfig,modflair,modlog,modposts,modwiki,mysubreddits,privatemessages,read,report,save,submit,subscribe,vote,wikiedit,wikiread');                                           
