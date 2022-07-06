<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Task Entity
 *
 * @property int $id
 * @property string $task
 * @property int|null $priority
 * @property \Cake\I18n\FrozenTime $due_date
 * @property bool $is_active
 * @property string|null $comment
 */
class Task extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'task' => true,
        'priority' => true,
        'due_date' => true,
        'is_active' => true,
        'comment' => true,
    ];
}
