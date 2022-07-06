<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TasksFixture
 */
class TasksFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'task' => 'Lorem ipsum dolor sit amet',
                'priority' => 1,
                'due_date' => 'Lorem ipsum dolor sit amet',
                'is_active' => 1,
                'comment' => 'Lorem ipsum dolor sit amet',
                'done' => 1,
            ],
        ];
        parent::init();
    }
}
