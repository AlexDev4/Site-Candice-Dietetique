<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NewslettersFixture
 */
class NewslettersFixture extends TestFixture
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
                'mail' => 'Lorem ipsum dolor sit amet',
                'is_active' => 1,
            ],
        ];
        parent::init();
    }
}
