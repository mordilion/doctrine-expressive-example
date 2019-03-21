<?php

declare(strict_types=1);

namespace Announcements\Model;

use Announcements\Entity\Announcement;
use Ramsey\Uuid\UuidInterface;

/**
 * @author Henning Huncke <mordilion@gmx.de>
 */
class AnnouncementWrapper
{
    /**
     * @var UuidInterface
     */
    public $id;

    /**
     * @var int
     */
    public $sort;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $isAdmin;

    /**
     * @var int
     */
    public $isActive;


    /**
     * AnnouncementWrapper constructor.
     *
     * @param Announcement $entity
     */
    public function __construct(Announcement $entity)
    {
        $this->id = $entity->getId();
        $this->sort = $entity->getSort();
        $this->content = $entity->getContent();
        $this->isAdmin = $entity->getIsAdmin();
        $this->isActive = $entity->getIsActive();
    }
}
