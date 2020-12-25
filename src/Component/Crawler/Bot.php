<?php


namespace App\Component\Crawler;

use GuzzleHttp\Client;
use GuzzleHttp\Pool;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Uri;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\UriInterface;

class Bot
{
    private Client $client;
    private UriInterface $baseUrl;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function startCrawling($baseUrl)
    {
        if (! $baseUrl instanceof UriInterface) {
            $baseUrl = new Uri($baseUrl);
        }
        if ($baseUrl->getScheme() === '') {
            $baseUrl = $baseUrl->withScheme('http');
        }
        if ($baseUrl->getPath() === '') {
            $baseUrl = $baseUrl->withPath('/');
        }

        $this->baseUrl = $baseUrl;



    }

}