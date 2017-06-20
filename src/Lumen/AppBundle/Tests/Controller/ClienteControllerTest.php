<?php

namespace Lumen\AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ClienteControllerTest extends WebTestCase
{
    public function testMain()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/main');
    }

    public function testRegistro()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/registro');
    }

}
