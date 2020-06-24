<?php


class ErreurController
{

    public function showError($message){
        die($message);
    }

}