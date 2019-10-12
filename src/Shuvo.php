<?php


namespace Muhin\WithShaharia;

class Shuvo implements AlbumInterface
{

    public function getThumbnail()
    {
        $thumbnails = array(
            "https://images.unsplash.com/photo-1500322969630-a26ab6eb64cc?ixlib=rb-1.2.1&w=1000&q=80",
            "https://i.ytimg.com/vi/BgIJ45HKDpw/maxresdefault.jpg"
        );
        return $thumbnails;
    }

    public function getPublishedAt()
    {
        $publishedAt = array(
            "4 minutes ago",
            "5 minutes ago"
        );
        return $publishedAt;
    }

    public function getDescription()
    {
        $descriptions = array(
            "Description 1",
            "Description 2",
        );
        return $descriptions;
    }
}
