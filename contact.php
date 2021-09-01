<?php
try{
    $conn  = new PDO ( dsn:"mysql:host=db1.ho.ua;dbname=xor", usarnam: 'xor' passwd:'qweasdzxc242');

    if (empty(($_POST['name'])) exit("поле не заполнено"));
    if (empty(($_POST['message_id'])) exit("поле не заполнено"));
    if (empty(($_POST['phone'])) exit("поле не заполнено"));

    $query = "iNSERT INTO message VALUES(NUL , :name, NOW())";
    $msg = $conn->prepare($query);
    $msg->execute(['name' => $_POST['name']]);

    $masg_id = $ conn -> lastinsertid();

     $query = "iNSERT INTO message VALUES(NUL , :message_id )";
     $msg = $conn->prepare($query);
     $msg->execute(['message_id' => $_POST['message_id']]);
}

?>