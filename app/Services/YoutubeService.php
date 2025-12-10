<?php

namespace App\Services;

class YouTubeService
{
    /**
     * Extract YouTube video ID from any URL
     */
    public static function getVideoId(string $url): ?string
    {
        $patterns = [
            '/youtube\.com.*[?&]v=([^&#]+)/',
            '/youtu\.be\/([^&#?]+)/',
            '/youtube\.com\/embed\/([^&#?]+)/',
            '/youtube\.com\/v\/([^&#?]+)/',
        ];

        foreach ($patterns as $pattern) {
            if (preg_match($pattern, $url, $matches)) {
                return $matches[1];
            }
        }

        return null;
    }

    /**
     * Generate embed URL with options
     */
    public static function embedUrl(string $url, array $options = []): ?string
    {
        $videoId = self::getVideoId($url);
        if (!$videoId) return null;

        $defaults = [
            'rel' => 0,
            'modestbranding' => 1,
            'controls' => 1,
            'showinfo' => 0,
            'autoplay' => 0,
            'mute' => 0,
            'loop' => 0,
            'playlist' => $videoId, // needed for loop
        ];

        $options = array_merge($defaults, $options);
        if ($options['loop']) {
            $options['playlist'] = $videoId;
        }

        $params = http_build_query($options);
        return "https://www.youtube.com/embed/{$videoId}?{$params}";
    }

    /**
     * Generate full iframe embed code
     */
    public static function embed(string $url, array $options = [], string $class = 'w-full h-full'): string
    {
        $embedUrl = self::embedUrl($url, $options);
        if (!$embedUrl) {
            return '<div class="bg-gray-200 border-2 border-dashed rounded-xl w-full h-64 flex items-center justify-center text-gray-500">Invalid YouTube URL</div>';
        }

        return "<iframe class=\"{$class}\" src=\"{$embedUrl}\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
    }
}
