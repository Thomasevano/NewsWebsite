<?php

function get_user($params)
{
    global $bdd;

    $user = $bdd->prepare("SELECT id_u, login, mdp,level FROM user WHERE login=:login AND mdp=:mdp");
    $user->bindValue(':login', $params['login'],PDO::PARAM_STR);
    $user->bindValue(':mdp', sha1($params['mdp']),PDO::PARAM_STR); // mdp a cryter dans la bdd
    $user->execute();
    return $user->fetch();
}