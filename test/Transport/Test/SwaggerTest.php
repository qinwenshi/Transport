<?php

namespace Transport\Test;

use Buzz\Message\Response;

class SwaggerTest extends IntegrationTest
{
    public function testSwaggerJson()
    {
        $client = $this->createClient();
        $crawler = $client->request('GET', '/swagger.json');

        $this->assertEquals($this->getFixture('swagger.json'), $client->getResponse()->getContent());
        $this->assertTrue($client->getResponse()->isOk());
    }
}
