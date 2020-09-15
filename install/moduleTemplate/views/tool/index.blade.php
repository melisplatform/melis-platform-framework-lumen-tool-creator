$namespace = '[module_name]';
$lowerCase = strtolower($namespace);?>
<!-- header area -->
@include($namespace . "::tool/header")

<div class="innerAll spacing-x2">
    <[?]= app('LaminasServiceManager')->get('ViewHelperManager')->get('MelisDataTable')->createTable(config('[module_name]')['table_config']['table']) [?]>
</div>
<!-- temp modal -->
@include($namespace . "::tool/tmp-modal")

