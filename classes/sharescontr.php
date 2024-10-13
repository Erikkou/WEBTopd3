<?php

class sharescontr {

        public function shares() {
            include 'shares.php';

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $userId = $_SESSION['id'];
                $title = $_POST['title'];
                $body = $_POST['body'];
                $link = $_POST['link'];

                $sharesModel = new Shares();
                $sharesModel->createShare($userId, $title, $body, $link);

                header("Location: shares");
            } else {
                require "sharesview.php";
            }
        }

        public function sharesomething() {
                require "sharing.php";
            }

}
