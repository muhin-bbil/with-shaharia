<?php


namespace Muhin\WithShaharia;

class Albums
{
    protected $album;

    public function __construct(AlbumInterface $album)
    {
        $this->album = $album;
    }

    public function generateView()
    {
    }
}
