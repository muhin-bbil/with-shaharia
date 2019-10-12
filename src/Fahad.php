<?php


namespace Muhin\WithShaharia;


class Fahad implements AlbumInterface
{

    public function getThumbnail()
    {
        $thumbnails = array(
            '0' => 'img_1',
            '1' => 'img_2',
            '2' => 'img_3'
        );
    }

    public function getPublishedAt()
    {
        $publishedAt = array(
            '0' => '01-01-01',
            '1' => '01-01-18',
            '2' => '01-01-17'
        );
    }

    public function getDescription()
    {
        $description = array(
            '0' => 'lorem ipusm',
            '1' => 'lorem ipusm',
            '2' => 'lorem ipusm'
        );
    }
}