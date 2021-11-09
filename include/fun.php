<?php
        function getTransaktions($id)
        {
            include 'include/database.php';

            $db = connect();
            $sql = "SELECT * FROM transaktion WHERE sender = :id OR empfaenger = :id";
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $data;
        }

        function getSender($id)
        {
            include 'include/database.php';

            $db = connect();
            $sql = "SELECT * FROM user WHERE id = :sender";
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':sender', $id);
            $stmt->execute();
            $sender = $stmt->fetch(PDO::FETCH_ASSOC);

            return $sender;
        }

        function getEmpfaenger($id)
        {
            include 'include/database.php';

            $db = connect();
            $sql = "SELECT * FROM user WHERE id = :empfaenger";
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':empfaenger', $id);
            $stmt->execute();
            $empfaenger = $stmt->fetch(PDO::FETCH_ASSOC);

            return $empfaenger;
        }
?>