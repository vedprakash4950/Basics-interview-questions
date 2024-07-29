<?php
function findStartAndEndPoints($travelHistory)
{
    // Split the travel history string by comma to get individual segments
    $segments = explode(',', $travelHistory);

    // Initialize arrays to hold start and end points
    $starts = [];
    $ends = [];

    // Process each segment
    foreach ($segments as $segment) {
        // Split each segment by dash to get start and end points
        list($start, $end) = explode('-', $segment);

        // Add start and end points to respective arrays
        $starts[] = trim($start);
        $ends[] = trim($end);
    }

    // The overall start point is the first element of the starts array
    $overallStart = $starts[0];

    // The overall end point is the last element of the ends array
    $overallEnd = $ends[count($ends) - 1];

    return [
        'start' => $overallStart,
        'end' => $overallEnd
    ];
}

// Example usage
$travelHistory = "kol-ahm, lku-kol, ahm-mumbai ";
$result = findStartAndEndPoints($travelHistory);

echo "Start point: " . $result['start'] . "\n";
echo "End point: " . $result['end'] . "\n";
