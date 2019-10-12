<?php


namespace Muhin\WithShaharia;


class Muhin implements AlbumInterface
{
    public $name = "Muhin";

    public function getThumbnail()
    {
        $thumbnails = array(
            '0' => 'thumb_01',
            '1' => 'thumb_02',
            '2' => 'thumb_03',
        );
        return $thumbnails;
    }

    public function getPublishedAt()
    {
        $publishedAt = array(
            '0' => '2019-10-10',
            '1' => '2019-10-11',
            '2' => '2019-10-12',
        );
        return $publishedAt;
    }

    public function getDescription()
    {
        $descriptions = array(
            '0' => 'Description one',
            '1' => 'Description two',
            '2' => 'Description three',
        );
        return $descriptions;
    }
}