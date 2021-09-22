<?php
declare(strict_types=1);

namespace App\Containers\Enterprise\Tests\V1;

use App\Containers\Enterprise\Models\Enterprise;
use App\Containers\Enterprise\Tests\EnterpriseTestCase;

final class SendEmailEnterprisesListTest extends EnterpriseTestCase
{
    protected $endpoint = '';

    private const COUNT_ENTERPRISES = 5;

    public function testItSendEmailWithEnterprises():void
    {
        $mainEnterprise = factory(Enterprise::class)->create(
            [
                'objid' => 8800000,
                'objidref' => 8800000,
                'objsname' => 'Головной офис',
                'is_root' => true,
            ]
        );

        $enterprise = factory(Enterprise::class)->create(
            [
                'objid' => 11111111,
                'objidref' => 8800000,
                'objsname' => 'ООО Самая лучшая компания',
                'is_root' => false,
            ]
        );

        $count = 1;
        while ($count < self::COUNT_ENTERPRISES) {
            $count++;
            $this->getUserForTest(
                [
                    'user_asup' => [
                        'orgid' => $enterprise->getAttribute('objid'),
                    ]
                ]
            );
        }

        $response = $this->makeCall(
            [],
            $this->getAuthorizationParams()
        );
        $data = $response->decodeResponseJson()['data'];
    }
}
