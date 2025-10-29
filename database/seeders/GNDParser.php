<?php

namespace Database\Seeders;

class GndParser {
    public static function parseLine(string $line): ?array {
        $parts = preg_split('/\t/u', trim($line));
        if (count($parts) === 4) {
            return [
                'gnd_uid' => $parts[0],
                'gnd_code' => $parts[1],
                'gnd_number' => $parts[3],
                'gnd_name' => $parts[2],
                'ds_id' => substr($parts[0], 0, 4),
            ];
        } elseif (trim($line) === '') return null;

        return null;
    }

    public static function parseBulk(string $textBlock): array {
        return array_values(array_filter(array_map([self::class, 'parseLine'], explode("\n", $textBlock))));
    }
}

