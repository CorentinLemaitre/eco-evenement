<?php
    global $secretKey, $filePath, $name, $zoom, $accuracy, $height, $width;

    // This key must be entered in OsmAnd's tracking URL as &key=
    $secretKey = 'CHANGEME';

	// API key from MapQuest. Get one from developer.mapquest.com
	$apikey = 'gzioGldt5eorbziKTxOo2TA3w9GaFfhw';

    // Used to round the lat/lon values so you aren't sharing your *exact* location
    $accuracy = 1; // in number of decimal positions

	// Where to store your last location
    $filePath = '/tmp/location';

	// Used in page title
    $name = 'Toby';

	// Zoom on the map
	// 8 gives a high overview; 12 gives a more zoomed-in map. Lower or higher values also possible.
    $zoom = "12";

    $height = "500";
    $width = "600";

