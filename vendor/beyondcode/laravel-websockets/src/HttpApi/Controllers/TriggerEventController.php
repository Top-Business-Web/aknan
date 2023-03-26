<?php

namespace BeyondCode\LaravelWebSockets\HttpApi\Controllers;

use BeyondCode\LaravelWebSockets\Dashboard\DashboardLogger;
use BeyondCode\LaravelWebSockets\Facades\StatisticsLogger;
use Illuminate\Http\Request;

class TriggerEventController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->ensureValidSignature($request);
        $payload = $request->json();

        if ($payload->has('channel')) {
            $channels = [$payload->get('channel')];
        } else {
            $channels = $payload->get('channels', []);

            if (is_string($channels)) {
                $channels = [$channels];
            }
        }

        foreach ($channels as $channelName) {
            $channel = $this->channelManager->find($request->appId, $channelName);

            optional($channel)->broadcastToEveryoneExcept([
                'channel' => $channelName,
                'event' => $request->json()->get('name'),
                'data' => $request->json()->get('data'),
            ], $request->json()->get('socket_id'));

            DashboardLogger::apiMessage(
                $request->appId,
                $channelName,
                $request->json()->get('name'),
                $request->json()->get('data')
            );

            StatisticsLogger::apiMessage($request->appId);
        }

        return (object) [];
    }
}
