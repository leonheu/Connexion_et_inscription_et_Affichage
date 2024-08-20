<?php

function existUser()
{
    $db = new PDO('mysql:host=localhost;dbname=exercice', 'root', '', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    $rquserexist = $db->prepare('SELECT * FROM Utilisateurs Where email = :email');
    $rquserexist->bindValue(':email', strip_tags($_POST['email']), PDO::PARAM_STR);
    if ($rquserexist->execute()) {
        return $rquserexist->rowCount() == 1 ? true : false;
    } else {
        return false;
    }
}

function uploadingFile($path)
{
    if (!file_exists('./' . $path)) {
        mkdir('./' . $path);
    }
    if (is_uploaded_file($_FILES['photo']['tmp_name'])) {
        if (searchExt($_FILES['photo']['name'])) {
            if (!file_exists('./' . $path . '/' . $_FILES['photo']['name'])) {
                if (move_uploaded_file($_FILES['photo']['tmp_name'], $path . '/' . $_FILES['photo']['name'])) {
                    return true;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}

function searchExt($nom)
{
    $listextensions = ['.JPG', '.JPEG', '.PNG', '.GIF'];
    $extension = strrchr($nom, '.');
    if (in_array(mb_strtoupper($extension), $listextensions)) {
        return true;
    } else {
        return false;
    }
}
