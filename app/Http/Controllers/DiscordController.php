<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscordController extends Controller
{
    private static function renameChannel($channelId, $newName) {
        echo "rename channel $channelId";
        // Replace 'your_bot_token' with your actual bot token
        $botToken = config('services.discord')['bot_token'];
        echo "Token:";
        var_dump($botToken);
        // Discord API endpoint for updating a channel
        $endpoint = "https://discord.com/api/v10/channels/{$channelId}";
    
        // Data to be sent in the request body
        $data = [
            'name' => $newName
        ];
    
        // Headers for the request
        $headers = [
            'Authorization: Bot ' . $botToken,
            'Content-Type: application/json',
        ];
    
        // Initialize cURL session
        $ch = curl_init($endpoint);
    
        // Set cURL options
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
        // Execute cURL session and get the response
        $response = curl_exec($ch);
    
        // Check for cURL errors
        if (curl_errno($ch)) {
            echo "cURL Error: " . curl_error($ch) . "\n";
        }
    
        // Close cURL session
        curl_close($ch);
    
        // Output the response
        echo "Response: " . $response . "\n";
    }

    public static function setStat($channel, $value){
        switch($channel) {
            case 'servers':
                DiscordController::setServerStat($value);
                break;
            case 'users':
                DiscordController::setUserStat($value);
                break;
            case 'games':
                DiscordController::setGameStat($value);
                break;
        }
    }

    public static function setServerStat($value) {
        echo "Set Server Stat";
        if(!$value) {echo "No Value"; return;}

        $channelId = config('services.discord')["stat_servers_id"];
        if(!$value) {echo "No Channel"; return;}


        $text = "Connected Servers: $value";

        DiscordController::renameChannel($channelId, $text);

    }

    public static function setUserStat($value) {

        if(!$value) return;

        $channelId = env("STAT_USERS");
        if(!$channelId) return;

        $text = "Registered Users: $value";

        DiscordController::renameChannel($channelId, $text);

    }

    public static function setGameStat($value) {

        if(!$value) return;

        $channelId = env("STAT_GAMES");
        if(!$channelId) return;

        $text = "Registered Games: $value";

        DiscordController::renameChannel($channelId, $text);

    }
    
}
