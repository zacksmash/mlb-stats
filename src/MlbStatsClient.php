<?php

namespace Zacksmash\MlbStats;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Zacksmash\MlbStats\Exceptions\RequestFailedException;

class MlbStatsClient
{
    /**
     * Send a request to the MLB Stats API.
     */
    public function send(MlbStatsPendingRequest $request): MlbStatsResponse|array
    {
        if (empty(trim($request->endpoint))) {
            throw new \Exception('No endpoint was provided. Please provide an endpoint to make a request.');
        }

        $response = $this->http()->send($request->method, $request->getPath(), [
            'query' => $request->query,
        ]);

        return $this->response($response);
    }

    /**
     * Send a request to the MLB Stats API using a PendingRequest pool.
     */
    private function response(Response $response): MlbStatsResponse|array
    {
        if ($response->failed()) {
            throw new RequestFailedException($response);
        }

        $data = new MlbStatsCollection($response->json());

        if ($data->isEmpty()) {
            return [
                'message' => 'No data in response.',
            ];
        }

        return new MlbStatsResponse(
            copyright: $data->get('copyright'),
            data: $data->except('copyright')
        );
    }

    /**
     * Create a new HTTP client instance with the base URL and timeout.
     */
    private function http(): PendingRequest
    {
        $config = config('mlb-stats');

        $base_url = rtrim($config['base_url'], '/');

        return Http::baseUrl($base_url)
            ->timeout(120);
    }
}
