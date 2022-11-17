<?php
foreach ($_POST as $name => $value) { // For each name and value in the submitted data (Event ID and preference)
    echo $name. ": ". $value. "<br>"; // Basic test
};
?>