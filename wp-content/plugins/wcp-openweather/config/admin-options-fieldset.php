<?php
return array(
    'temp' => array(
        'c' => __('&deg;C', 'wcp-openweather'),
        'f' => __('&deg;F', 'wcp-openweather'),
    ),
    'windSpeed' => array(
        'mph' => __('mph', 'wcp-openweather'),
        'kmh' => __('km/h', 'wcp-openweather'),
        'ms' => __('m/s', 'wcp-openweather'),
        'Knots' => __('Knots', 'wcp-openweather'),
    ),
    'pressure' => array(
        'atm' => __('atm', 'wcp-openweather'),
        'bar' => __('bar', 'wcp-openweather'),
        'hPa' => __('hPa', 'wcp-openweather'),
        'kgfcm2' => __('kgf/cm²', 'wcp-openweather'),
        'kgfm2' => __('kgf/m²', 'wcp-openweather'),
        'kPa' => __('kPa', 'wcp-openweather'),
        'mbar' => __('mbar', 'wcp-openweather'),
        'mmHg' => __('mmHg', 'wcp-openweather'),
        'inHg' => __('inHg', 'wcp-openweather'),
        'Pa' => __('Pa', 'wcp-openweather'),
        'psf' => __('psf', 'wcp-openweather'),
        'psi' => __('psi', 'wcp-openweather'),
        'torr' => __('torr', 'wcp-openweather'),
    ),
    'refreshPeriod' => array (
        '0' => __('Always', 'wcp-openweather'),
        '1800' => __('0.5h - Not Recommended', 'wcp-openweather'),
        '3600' => __('1h - Recommended', 'wcp-openweather'),
        '7200' => __('2h', 'wcp-openweather'),        
        '10800' => __('3h', 'wcp-openweather'),
        '21600' => __('6h', 'wcp-openweather'),
        '32400' => __('9h', 'wcp-openweather'),
        '43200' => __('12h', 'wcp-openweather'),
        '86400' => __('24h', 'wcp-openweather')
    ),
    'theme' => array('Webcodin\WCPOpenWeather\Plugin\Settings', 'getThemesFieldSet'),
    'lang' => array('Webcodin\WCPOpenWeather\Plugin\Settings', 'getLanguages'),
    'languages' => array(
        'en_US' => 'English (United States)',
        'ru_RU' => 'Русский (Россия)',
        'uk_UA' => 'Український (Україна)',
        'sq_AL' => 'Shqiptar (Shqipëri)',
        'fr_FR' => 'Français (France)',
        'nl_NL' => 'Nederlands (Nederland)',
        'nl_BE' => 'Nederlands (België)',
        'sr_RS' => 'Српски језик (Србија)',
        'lt_LT' => 'Lietuvių kalba (Lietuva)',
        'es_EC' => 'Español (Ecuador)',
        'es_ES' => 'Español (España)',
        'pt_PT' => 'Português (Portugal)',
        'sl_SI' => 'Slovenščina (Slovenija)',
        'ro_RO' => 'Română (România)',
        'de_DE' => 'Deutsch (Deutschland)',        
        'it_IT' => 'Italiano (Italia)',
        'tr_TR' => 'Türkçe (Türkiye)', 
        'hr_HR' => 'Hrvatski (Hrvatska)',
        'bg_BG' => 'Български (България)',
        'pl_PL' => 'Polski (Polska)',
        'ca_CA' => 'Català (Catalunya)',
        'fa_IR' => 'فارسی',
        'el_GR' => 'Ελληνικά (Ελλάδα)',
        'da_DK' => 'Dansk (Danmark)',
    ),
    'partial_languages' => array(
        //'xx_XX' => 75, 
    ),
    'dayofweeks' => array (
        __('mon', 'wcp-openweather'),
        __('tue', 'wcp-openweather'),
        __('wed', 'wcp-openweather'),
        __('thu', 'wcp-openweather'),
        __('fri', 'wcp-openweather'),
        __('sat', 'wcp-openweather'),
        __('sun', 'wcp-openweather'),
    ),
    'months' => array (
        __('jan', 'wcp-openweather'),
        __('feb', 'wcp-openweather'),
        __('mar', 'wcp-openweather'),
        __('apr', 'wcp-openweather'),
        __('may', 'wcp-openweather'),
        __('jun', 'wcp-openweather'),
        __('jul', 'wcp-openweather'),
        __('aug', 'wcp-openweather'),
        __('sep', 'wcp-openweather'),
        __('oct', 'wcp-openweather'),
        __('nov', 'wcp-openweather'),
        __('dec', 'wcp-openweather'),
    ),    
    'shortcodeTemplates' => array('Webcodin\WCPOpenWeather\Plugin\Settings', 'getShortcodeTemplates'),
);
