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
                'due_date' => '2022-07-06 19:37:23',
                'is_active' => 1,
                'comment' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
