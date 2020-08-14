<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $client->request('GET', 'https://127.0.0.1:8000/login');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

    }

}
