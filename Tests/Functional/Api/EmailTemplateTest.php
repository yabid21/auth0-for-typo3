<?php

declare(strict_types=1);

/*
 * This file is part of the "Auth0" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * Florian Wessels <f.wessels@Leuchtfeuer.com>, Leuchtfeuer Digital Marketing
 */

namespace Bitmotion\Auth0\Tests\Functional\Api;

use Bitmotion\Auth0\Api\Management\EmailTemplateApi;
use Bitmotion\Auth0\Scope;
use Bitmotion\Auth0\Tests\Functional\Auth0TestCase;

class EmailTemplateTest extends Auth0TestCase
{
    protected $scopes = [
        Scope::EMAIL_TEMPLATE_CREATE,
        Scope::EMAIL_TEMPLATE_READ,
        Scope::EMAIL_TEMPLATE_UPDATE,
    ];

    /**
     * @test
     * @covers \Bitmotion\Auth0\Utility\ApiUtility::getEmailTemplateApi
     */
    public function instantiateApi(): EmailTemplateApi
    {
        $emailTemplateApi = $this->getApiUtility()->getEmailTemplateApi(...$this->scopes);
        self::assertInstanceOf(EmailTemplateApi::class, $emailTemplateApi);

        return $emailTemplateApi;
    }

    // TODO: implement
}
