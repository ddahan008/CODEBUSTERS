<?php

class Chat extends Model {
    CONST _TYPES = ['TEXT'=>0, 'MEDIA'=>1];

    public $id; // message ID
    public $sid; // sender ID
    public $rid; // recipient ID
    public $type; // message type, see CONST _TYPES above
    public $content; // message content, either text or a relative path to a file
    public $timestamp; // date and time of the message


    public function insert() {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "INSERT INTO chat(sid, rid, type, content) 
                  VALUES (:sid, :rid, :type, :content)"
        );

        // supply the replacement parameters to the query
        $stmt->execute(['sid'=>$this->sid, 'rid'=>$this->rid, 'type'=>$this->type, 'content'=>$this->content]);
        return $stmt->rowCount(); // execute the query and return the number of affected rows (should be 1)
    }

    public function getConversation() {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "SELECT *
             FROM chat
             WHERE (sid=:sid AND rid=:rid) OR (rid=:sid AND sid=:rid)
             ORDER BY timestamp ASC"
        );

        // supply the replacement parameters to the query
        $stmt->execute(['sid'=>$this->sid, 'rid'=>$this->rid]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "Chat"); // set the retrieval to match an object of type Chat
        return $stmt->fetchAll(); // return the array of chats, or false
    }
}

?>
