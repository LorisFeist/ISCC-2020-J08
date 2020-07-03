
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST['Name'];
    $mail = $_POST['E-mail'];
    $message = $_POST['subject'];
    
if(empty($name) and empty($mail) and empty($message))
{
    echo "<p>Aucunes données reçues.</p>";
}
else
{
    echo "<ul>
    <li><p>Nom et prénom : $name</p></li>
    <li><p>E-mail : $mail</p></li>
    <li><p>Message : $message</p></li>
    </ul>";
}
}
?>