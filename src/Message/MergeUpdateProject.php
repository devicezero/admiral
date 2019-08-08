<?php
declare(strict_types=1);

namespace App\Message;

/**
 * Command message to indicate a project needs to have its update branch merged.
 */
class MergeUpdateProject
{
    /**
     * @var int
     */
    protected $projectId;

    public function __construct(int $projectId)
    {
        $this->projectId = $projectId;
    }

    public function getProjectId() : int
    {
        return $this->projectId;
    }
}
