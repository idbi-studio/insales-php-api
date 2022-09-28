<?php

namespace InSales\Tests\ApiClient\CRUD;

use InSales\API\ApiResponse;
use InSales\TestCase;

class PageTest extends TestCase
{
    public function testTest12()
    {
        $client = $this->getApiClient(true);
        /** @var ApiResponse $response */
        $response = $client->createPage(
            [
                'page' => [
                    'title' => uniqid(),
                    'content' => uniqid(),
                ]
            ]
        );
        $methods = [200, 201];
        $this->assertTrue(in_array($response->getHttpCode(), $methods));
        $id = $response->getData()['id'];
        $response = $client->updatePage($id, []);
        $this->assertTrue(in_array($response->getHttpCode(), $methods));
        $response = $client->removePage($id);
        $this->assertTrue(in_array($response->getHttpCode(), $methods));
    }
}
