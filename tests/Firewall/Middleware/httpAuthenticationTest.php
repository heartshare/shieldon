<?php
/*
 * This file is part of the Shieldon package.
 *
 * (c) Terry L. <contact@terryl.in>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Shieldon\Firewall\Middleware;

class httpAuthenticationTest extends \PHPUnit\Framework\TestCase
{
    public function testHeaderDeny()
    {
        $_SERVER['REQUEST_URI'] = '/wp-amdin';
        
        $firewall = new \Shieldon\Firewall\Firewall();
        $firewall->add(new \Shieldon\Firewall\Middleware\httpAuthentication());
        $response = $firewall->run();
        $this->assertSame($response->getStatusCode(), 401);
    }
}
