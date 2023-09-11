<?php
/* Pre-defined vars */
// as we can create vars for us also language has own vars
// chatGPT can help in this case

/*
===================================================================
|Variable	                        | Description
===================================================================
|$_SERVER	                        |An array containing information such as headers, paths, and script locations. This array is populated by the web server and can be used to access server and environment variables, such as the IP address of the client, the path to the current script, and the name of the server.
|$_GET	                          |An associative array of variables passed to the current script via the URL parameters. The key/value pairs in this array correspond to the query string in the URL.
|$_POST	                          |An associative array of variables passed to the current script via HTTP POST method. The key/value pairs in this array correspond to the form fields submitted in the HTTP POST request.
|$_REQUEST	                      |An associative array of variables passed to the current script via both GET and POST methods. This array is a combination of the $_GET and $_POST arrays, along with any cookies that may have been set.
|$_SESSION	                      |An associative array containing session variables available to the current script. Session variables are stored on the server and can be used to maintain state across multiple pages or requests.
|$_COOKIE	                        |An associative array of variables passed to the current script via HTTP cookies. Cookies are small pieces of data that are stored on the client's computer by the web server. The $_COOKIE array contains the name and value of each cookie set by the server.
|$_FILES	                        |An associative array of variables containing information about files uploaded to the current script via HTTP POST method. The key/value pairs in this array correspond to the file upload fields submitted in the HTTP POST request.
|$_ENV	                          |An associative array of variables containing the environment variables available to the current script. Environment variables are system-wide variables that are available to all processes running on the server.
|$_SERVER['REMOTE_ADDR']	        |The IP address of the client making the current request. This variable is part of the $_SERVER array.
|$_SERVER['HTTP_USER_AGENT']	    |The user agent string of the client making the current request. This variable is part of the $_SERVER array and can be used to determine the type of browser or device the client is using.
|$_SERVER['HTTP_REFERER']	        |The URL of the page that referred the client to the current page. This variable is part of the $_SERVER array and can be used to track the navigation path of the client through your website. Note that this variable is not always set, and may be empty or contain a false value if the client navigated to the current page directly or via a bookmark.
|$GLOBALS	                        |An associative array containing references to all global variables available in the current script. Global variables are variables that are defined outside of any function or class and can be accessed from any part of the script. The $GLOBALS array allows you to access these variables from within a function or class.
|$_SERVER['REQUEST_METHOD']     	|The HTTP request method used to access the current page, such as GET, POST, or HEAD. This variable is part of the $_SERVER array.
|$_SERVER['SCRIPT_FILENAME']	    |The absolute path to the current script on the server's filesystem. This variable is part of the $_SERVER array and can be used to locate and manipulate files on the server.
===================================================================
*/
