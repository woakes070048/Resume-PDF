<?php
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    // This is a server using Windows
    $binary_pdf = base_path('vendor\wemersonjanuario\wkhtmltopdf-windows\bin\64bit\wkhtmltopdf');
    $binary_image = base_path('vendor\wemersonjanuario\wkhtmltopdf-windows\bin\64bit\wkhtmltoimage');
} else {
    // This is a server not using Windows
    $binary_pdf = base_path('vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64');
    $binary_image = base_path('vendor/h4cc/wkhtmltoimage-amd64/bin/wkhtmltoimage-amd64');

    // Check for CentOS
    $vars = array();
    $files = glob('/etc/*-release');

    foreach ($files as $file) {
        $lines = array_filter(array_map(function($line) {
            // split value from key
            $parts = explode('=', $line);

            // makes sure that "useless" lines are ignored (together with array_filter)
            if (count($parts) !== 2) return false;

            // remove quotes, if the value is quoted
            $parts[1] = str_replace(array('"', "'"), '', $parts[1]);
            return $parts;

        }, file($file)));

        foreach ($lines as $line) {
            $vars[$line[0]] = $line[1];
        }
    }
    
    if (
        isset($vars['REDHAT_SUPPORT_PRODUCT']) && 
        trim($vars['REDHAT_SUPPORT_PRODUCT']) == 'centos' &&
        isset($vars['REDHAT_SUPPORT_PRODUCT_VERSION']) && 
        trim($vars['REDHAT_SUPPORT_PRODUCT_VERSION']) == '7'
    ) {
        $binary_pdf = base_path('/vendor/jjcarmu/wkhtmltopdf-symfony4/bin/wkhtmltopdf');
    }
}

return [

    /*
    |--------------------------------------------------------------------------
    | Snappy PDF / Image Configuration
    |--------------------------------------------------------------------------
    |
    | This option contains settings for PDF generation.
    |
    | Enabled:
    |    
    |    Whether to load PDF / Image generation.
    |
    | Binary:
    |    
    |    The file path of the wkhtmltopdf / wkhtmltoimage executable.
    |
    | Timout:
    |    
    |    The amount of time to wait (in seconds) before PDF / Image generation is stopped.
    |    Setting this to false disables the timeout (unlimited processing time).
    |
    | Options:
    |
    |    The wkhtmltopdf command options. These are passed directly to wkhtmltopdf.
    |    See https://wkhtmltopdf.org/usage/wkhtmltopdf.txt for all options.
    |
    | Env:
    |
    |    The environment variables to set while running the wkhtmltopdf process.
    |
    */
    
    'pdf' => [
        'enabled' => true,
        'binary'  => $binary_pdf,
        'timeout' => false,
        'options' => [],
        'env'     => [],
    ],
    
    'image' => [
        'enabled' => true,
        'binary'  => $binary_image,
        'timeout' => false,
        'options' => [],
        'env'     => [],
    ],

];
