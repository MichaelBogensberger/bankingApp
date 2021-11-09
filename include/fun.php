<?php
        function getTransaktions($id){
            $db = connect();
            $sql = "SELECT * FROM transaktion WHERE sender = :id OR empfaenger = :id";
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $data;
        }

        function getUser($id){

            $db = connect();
            $sql = "SELECT * FROM user WHERE id = :id";
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            return $user;
        }

        function updateGuthaben($id){
            $db = connect();
            $sql = "SELECT guthaben FROM user WHERE id = :id";
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            $guthaben = $stmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION["guthaben"] = $guthaben["guthaben"];
        }


        function getIdFromIban($iban){
            $db = connect();
            $sql = "SELECT id FROM user WHERE iban = :iban";
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':iban', $iban);
            $stmt->execute();
            $id = $stmt->fetch(PDO::FETCH_ASSOC);
            return $id["id"];
        }


        function getGuthabenFromId($id){
            $db = connect();
            $sql = "SELECT guthaben FROM user WHERE id = :id";
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            $guthaben = $stmt->fetch(PDO::FETCH_ASSOC);
            return $guthaben["guthaben"];
        }




?>