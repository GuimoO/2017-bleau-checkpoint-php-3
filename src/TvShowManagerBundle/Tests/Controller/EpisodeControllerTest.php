<?php

namespace TvShowManagerBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EpisodeControllerTest extends WebTestCase
{
    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/delete/{id}');
    }

}
