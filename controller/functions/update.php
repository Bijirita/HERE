<?php
    function update ($route){
        global $conn;
        if ($route == 'updateAdmin'){
            $email = 'errorfixingVar';
            $event = 'errorfixingVar';
            $next = $_POST['next'];
            $username = $_POST['user'];
            $password = $_POST['password'];
            $user1 = $_POST['user1'];
            $salt = (function () {
                $genSalt = "";
                for ($i = 0; $i < 22; $i++)
                //===========If random # is > 0.5 == TRUE, A-Z.  If FALSE, a-z.===============//
                        $genSalt .= rand(0, 1) > 0.5 ? chr(rand(65, 90)) : chr(rand(97,122));
                        return $genSalt;
                })();
            $hash = crypt($password, '$2a$07$' . $salt . '$') . "\n";

            include './../DB/queries/updateQueries.php';

            $stmt = $conn->prepare($updateAdmin);
            $stmt->execute([$username, $hash, $salt, $user1]);
            header("Location: $next");
        }
        else if ($route == 'updateEvent'){

        }
        else if ($route == 'updateUser'){

        }
    }
?>