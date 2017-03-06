<?php

/**
 * Created by PhpStorm.
 * User: rimmertzelle
 * Date: 20/02/2017
 * Time: 11:03
 */
class Video{

    protected $title;
    protected $url;
    protected $id;

    //constructor gives an Error

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}