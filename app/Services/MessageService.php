<?php

namespace App\Services;

use App\Models\Message;
use Auth0\SDK\Auth0;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class MessageService implements MessageServiceInterface
{
    private Auth0 $auth0;
    private string $apiServerUrl;
    private Client $client;

    public function __construct(Client $client, string $apiServerUrl)
    {
        $this->auth0 = auth()->guard()->sdk();
        $this->apiServerUrl = $apiServerUrl;
        $this->client = $client;
    }

    public function getPublicMessage(): Message
    {
        return new Message("This is a public message.");
    }

    public function getProtectedMessage(): Message
    {
        return new Message("This is a protected message.");
    }

    public function getAdminMessage(): array
    {
        return $this->fetch('/api/messages/admin', [
            'Authorization' => 'Bearer ' . $this->getAccessToken()
        ]);
    }

    private function fetch(string $uri, array $headers = []): array
    {
        try {
            $result = $this->client->get(
                $this->getServerUrl($uri),
                [
                    'headers' => array_merge([
                        'Content-Type' => 'application/json'
                    ], $headers)
                ]
            );

            return json_decode($result->getBody()->getContents(), true);
        } catch (ClientException $ex) {
            return json_decode($ex->getResponse()->getBody()->getContents(), true);
        } catch (\Exception $ex) {
            return [
                'message' => 'Internal Server Error'
            ];
        }
    }

    private function getServerUrl(string $uri): string
    {
        return rtrim($this->apiServerUrl, '/') . '/' . ltrim($uri, '/');
    }

    private function getAccessToken(): ?string
    {
        return $this->auth0->getAccessToken();
    }
}
