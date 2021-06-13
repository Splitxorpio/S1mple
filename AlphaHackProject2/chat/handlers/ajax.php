<?php
include("../config.php");
if( isset($_REQUEST['action']) ){
    switch($_REQUEST['action']){
        case"SendMessage":
            $query = $db->prepare("INSERT INTO chat SET user=?, message=?");
            $query->execute([$_REQUEST['username'],$_REQUEST['message']]);
        break;

        case "getChat":
            $query = $db->prepare("SELECT * from chat");
            $query->execute();
            $chat = '';
            $rs = $query->fetchAll(PDO::FETCH_OBJ);
            foreach( $rs as $r ){
                $chat .= $r->user.' says: '.$r->message.'<hr style="width: 300px;"/>';
            }
            echo $chat;
        break;
    }
}


?>