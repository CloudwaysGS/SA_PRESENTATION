<?php
    //convertir le json chaine en tableau/recuperation des données du fichiers
    function json_to_array(string $key): array{
        $getjson = file_get_contents(PATH_DB);
        // var_dump($getjson);die;
        $data = json_decode($getjson, true);

        return $data[$key];
    }

    //Enregistrement et Mise à jour du fichier json
    function array_to_json(string $key, array $data): array{
        $getjson= file_get_contents(PATH_DB);
        $data=json_encode($getjson, true);

        return [$data];

    }