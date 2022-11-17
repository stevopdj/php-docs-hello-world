<form action="post.php" method="post"> <!-- Form data sent elsewhere -->
    <?php
    $form_content = ""; // String containing form content
    $events = array(array("100m", 1), array("Long Jump", 2)); // Will be populated with DB data
      
    foreach ($events as $data) { // Create form data
    $form_content = $form_content. $data[0]. "\n"; // Event name label
    for ($x = 1; $x < 6; $x++) {
    	$form_content = $form_content. "<input type=\"radio\" id=\"e". $data[1]. "c". $x. "\" name=\"". $data[1]. "\" value=\"". $x. "\">\n"; // Creates 5 radio button inputs for each preference level, unique IDs made, name is event ID for the sake of processing
    };
      $form_content = $form_content. "<br>\n"; // Line break between each event
    };
      
    trim($form_content); // Remove whitespace
      
    echo $form_content;
    ?>
    <input type="submit" value="Submit"> <!-- Fun little submission button -->
</form>