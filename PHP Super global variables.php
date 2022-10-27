PHP SUPER GLOBAL VARIABLES

A PHP Super global variable that are accessible anywhere within the page that defines it as opposed to
a local variable that is within the page that defines it
     A. $_GET["FormElementName"]. Collects information from a HTML Script that was sent with the method="get" then
displays the information on the browser URL bar for everyone.
     B. $_POST["FormElementName"]. It is used to collect data from a form with the method "Post".
Is invisible to others
     C. $_REQUEST["FormElementName"]. This can be used to collect data with both post and get method.
     D. $_FILES["FormElementName"]. It can be used to upload files from a client computer/system to a server.
     E. $_FILES["FormElementName"]["ArrayIndex"]. Such as File Name, File Type, File Size, File temporary name.
     F. $_SESSION["VariableName"]. A session variable is used to store information about a single user,
and are available to all pages within one application.
     G. $_COOKIE["VariableName"]. Used to identify a user. A cookie is a small file that the server embedded on user
computer.
     H. $_SERVER["ConstantName"]. Holds information about headers, paths, and script locations.
            $_SERVER['PHP_SELF']. It is used to display the filename of the currently executing script
            $_SERVER['GATEWAY_INTERFACE'].It is used to display the version of the Common Gateway Interface (CGI)the server is using
            $_SERVER['SERVER_ADDR'].It is used to display the IP address of the host server
            $_SERVER['SERVER_NAME'].It is used to display the host server's name
            $_SERVER['SERVER_SOFTWARE'].It is used to display the server identification string.
            $_SERVER['SERVER_PROTOCOL'].It is used to display the name and revision of the information protocol
            $_SERVER['REQUEST_METHOD'].	It is used to display the request method used to access the page. i.e. 'GET','POST'
            $_SERVER['REQUEST_TIME'].It is used to display the timestamp of the start of the request.
            $_SERVER['QUERY_STRING'].It is used to display the query string if the page is accessed via a query string
            $_SERVER['HTTP_ACCEPT'].It is used to display the Accept header from the current request
            $_SERVER['HTTP_ACCEPT_CHARSET'].It is used to display the Accept_Charset header from the current request
            $_SERVER['HTTP_HOST'].It is used to display the Host header from the current request
            $_SERVER['HTTP_REFERER'].It is used to display the complete URL of the current page (not reliable because not all user-agents support it)
            $_SERVER['HTTPS'].Is the script queried through a secure HTTP protocol
            $_SERVER['REMOTE_PORT'].It is used to display the port being used on the user's machine to communicate with the web server
            $_SERVER['SCRIPT_FILENAME']	It is used to display the absolute pathname of the currently executing script
            $_SERVER['SERVER_ADMIN']It is used to display the value given to the SERVER_ADMIN directive in the web server configuration file.
            $_SERVER['REMOTE_ADDR']	It is used to display the IP address from where the user is viewing the current page
            $_SERVER['REMOTE_HOST']	It is used to display the Host name from where the user is viewing the current page
            $_SERVER['SERVER_PORT']	It is used to display the port which is being used on the local machine to communicate with the web server.
            $_SERVER['SERVER_SIGNATURE']It is used to display the server version and virtual host name which are added to server-generated pages
            $_SERVER['PATH_TRANSLATED']	It is used to display the file system based path to the current script
            $_SERVER['SCRIPT_NAME']	It is used to display the current script's path
            $_SERVER['SCRIPT_URI']	It is used to display the current page's URI
