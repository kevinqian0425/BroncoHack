    <?
    require 'vendor/autoload.php';

    ParseClient::initialize( $SR1cvwd4CVY9Lon9WOWJC6GuDzXySA9ew9mBcRZQ, $juBRcJf1TfO8iwWV5QN14g9nF5FOZusu0VygB7OG, $PjoqDQr3V1ZNtVefuA4xRaJtMfK1dZkM4qXNW0mb );
    // Users of Parse Server will need to point ParseClient at their remote URL:
    ParseClient::setServerURL('http://smallbizz.parseapp.com/');


    use Parse\ParseObject;


    // define variables and set to empty values
    $name = $email = $message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["fullName"]);
        $email = test_input($_POST["email"]);
        $message = test_input($_POST["message"]);
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    $object = ParseObject::create("TestObject");
    $objectId = $object->getObjectId();
    $php = $object->get("elephant");

    // Set values:
    $object->set("Name", $fullName);
    $object->set("Email Adress", $email);
    $object->set("Message", $message);

    // Save:
    $object->save();

    ?>