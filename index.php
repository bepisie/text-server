<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['text'])) {
    $textToSave = $_POST['text'];
    $file = 'saved_text.txt';
    if (file_put_contents($file, $textToSave) !== false) {
        echo 'Text saved successfully!';
    } else {
        http_response_code(500);
        echo 'Error saving text!';
    }
} else {
    http_response_code(400);
    echo 'Invalid request!';
}
?>
