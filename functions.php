<?php
    function autoCompileLess() {

    // include lessc.inc
    require_once( get_template_directory().'/style/less/lessc.inc.php' );

    // input and output location
    $inputFile = get_template_directory().'/style/less/style.less';
    $outputFile = get_template_directory().'/style/css/style.css';
    
    // load the cache
    $cacheFile = $inputFile.".cache";

    if (file_exists($cacheFile)) {
        $cache = unserialize(file_get_contents($cacheFile));
    } else {
        $cache = $inputFile;
    }

    $less = new lessc;
    // create a new cache object, and compile
    $newCache = $less->cachedCompile($cache);

    // output a LESS file, and cache file only if it has been modified since last compile
    if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
        file_put_contents($cacheFile, serialize($newCache));
        file_put_contents($outputFile, $newCache['compiled']);
    }
//Second iteration for home theme.
    // input and output location
    $inputFile = get_template_directory().'/style/less/templates/page-home.less';
    $outputFile = get_template_directory().'/style/css/templates/page-home.css';

    // load the cache
    $cacheFile = $inputFile.".cache";

    if (file_exists($cacheFile)) {
        $cache = unserialize(file_get_contents($cacheFile));
    } else {
        $cache = $inputFile;
    }

    $less = new lessc;
    // create a new cache object, and compile
    $newCache = $less->cachedCompile($cache);

    // output a LESS file, and cache file only if it has been modified since last compile
    if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
        file_put_contents($cacheFile, serialize($newCache));
        file_put_contents($outputFile, $newCache['compiled']);
    }
}

add_action('init', 'autoCompileLess');
?>
