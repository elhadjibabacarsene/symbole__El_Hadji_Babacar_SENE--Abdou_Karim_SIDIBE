<?php


class Validator
{
    private $error = [];

    /**
     * @return array
     */
    public function getError()
    {
        return $this->error;
    }
    /*
     * Fonction qui permet de savoir si'l y'a erreur ou pas
     * Retourne true s'il n'ya pas d'erreur
     */
    public function isValid()
    {
        return count($this->error) == 0;
    }

    /**
     * @param $champ string la value du champ
     * @param $key string permettant d'indexer le message
     * @param string $sms le message d'erreur
     */
    public function isEmpty($champ,$key,$sms="Ce champ est obligatoire")
    {
        if($champ==="")
        {
            $this->error[$key] = $sms;
        }
    }

    /**
     * @param $champ
     * @param $key
     * @param string $sms
     */
    public function checkEmail($champ,$key,$sms="L'email est incorrect")
    {
        if (preg_match('/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\ .,;:\s@"]+)*)|(" . +"))@((\[[0-9]{1,3}\.[0-9]{
1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/', $champ))
        {
            $this->error[$key] = $sms;
        }
    }

    /**
     * @param $champ
     * @param $key
     * @param string $sms
     */
    public function checkTelephone($champ,$key,$sms="Numéro de téléphone incorrect")
    {
        if (preg_match("#^7[78065]{1}([-.; ]?[0-9]{2,3}){3}$#", $champ))
        {
            $this->error[$key] = $sms;
        }
    }




}