<?php

if (!function_exists('transformArray')) {
    function transformArray($array)
    {
        $result = [];
        $temp = [];

        foreach ($array as $item) {
            // Updated regex to match "section-heading-1" as well
            preg_match('/(section|faq)-(heading-)?(\d+)-(title|content)/', $item['key'], $matches);

            if (!empty($matches)) {
                $sectionNumber = $matches[3];  // Updated to use $matches[3] for section number
                $type = $matches[4];           // Updated to use $matches[4] for type

                // Initialize the section if it does not exist
                if (!isset($temp[$sectionNumber])) {
                    $temp[$sectionNumber] = ['title' => '', 'content' => ''];
                }

                // Assign the value to the appropriate key
                $temp[$sectionNumber][$type] = $item['value'];
            }
        }

        // Convert associative array to indexed array
        foreach ($temp as $section) {
            $result[] = $section;
        }

        return $result;
    }
    // function transformArray($array)
    // {
    //     $result = [];
    //     $temp = [];

    //     foreach ($array as $item) {
    //         // Split the key to get the section number and type (title or content)
    //         preg_match('/(section|faq)-(\d+)-(title|content)/', $item['key'], $matches);

    //         if (!empty($matches)) {
    //             $sectionNumber = $matches[2];
    //             $type = $matches[3];

    //             // Initialize the section if it does not exist
    //             if (!isset($temp[$sectionNumber])) {
    //                 $temp[$sectionNumber] = ['title' => '', 'content' => ''];
    //             }

    //             // Assign the value to the appropriate key
    //             $temp[$sectionNumber][$type] = $item['value'];
    //         }
    //     }

    //     // Convert associative array to indexed array
    //     foreach ($temp as $section) {
    //         $result[] = $section;
    //     }

    //     return $result;
    // }
}

if(!function_exists('transformArrayToObject')) {
    function transformArrayToObject(array $array) : object
    {
        return json_decode(json_encode($array));
    }
}
