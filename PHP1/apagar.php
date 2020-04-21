<?php
setcookie('nome', '', time() - 3600); //Setando o cookie para um tempo antes, fazendo apagar esse cookie.


header ("Location:  index.php");
exit;