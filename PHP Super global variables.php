                7.PHP Super global variables
A PHP Super global variable that are accessible anywhere within the page that defines it as opposed to
a local variable that is within the page that defines it
        7a.$_GET["FormElementName"]. Collects information from a HTML Script that was sent with the method="get" then
displays the information on the browser URL bar for everyone.
        7b. $_POST["FormElementName"]. It is used to collect data from a form with the method "Post".
Is invisible to others
        7c. $_REQUEST["FormElementName"]. This can be used to collect data with both post and get method.
        7d. $_FILES["FormElementName"]. It can be used to upload files from a client computer/system to a server.
        7e. $_FILES["FormElementName"]["ArrayIndex"]. Such as File Name, File Type, File Size, File temporary name.
        7f. $_SESSION["VariableName"]. A session variable is used to store information about a single user,
and are available to all pages within one application.
        7g. $_COOKIE["VariableName"]. Used to identify a user. A cookie is a small file that the server embedded on user
computer.
        7h. $_SERVER["ConstantName"]. Holds information about headers, paths, and script locations.
Eg $_SERVER["SERVER_PORT"], $_SERVER["SERVER_NAME"], $_SERVER["REQUEST_URI"]
