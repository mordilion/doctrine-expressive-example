<?php

declare(strict_types=1);

namespace Announcements\Entity;

use Announcements\Model\AnnouncementWrapper;
use Doctrine\ORM\Tools\Pagination\Paginator;

class AnnouncementCollection extends Paginator
{
    /**
     * @return \ArrayIterator|\Traversable
     */
    public function getIterator()
    {
        $items = [];
        $parentIterator = parent::getIterator();

        foreach ($parentIterator as $item) {
            /** @var Announcement $item */
            $items[] = new AnnouncementWrapper($item);
        }

        return new \ArrayIterator($items);
    }
}
