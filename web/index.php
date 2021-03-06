<?php
$models = array(
'beta_cell' => array('name'=>'cell03_def.obj','scriptName'=>'beta_cell.js','modelPath'=>'models/beta_cell/','metadataFile'=>'entity_metadata.json','texturePath'=>'models/common/','numLayers'=>5),
'astro' => array('name'=>'tumor_astrocyte_soma_process.obj','scriptName'=>'tumor_astrocyte_soma_process.js','modelPath'=>'models/astro/','metadataFile'=>'entity_metadata.json','texturePath'=>'models/common/','numLayers'=>3),
'granule_cell' => array('name'=>'granule-cell.obj','scriptName'=>'granule-cell.js','modelPath'=>'models/granule_cell/','metadataFile'=>'entity_metadata.json','texturePath'=>'models/common/','numLayers'=>4),
);
?>
<!doctype html>
<html>
<head>
<title>open cell viewer</title>

<!-- jQuery -->
<link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/themes/base/jquery-ui.css" rel="Stylesheet" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>

<!-- o3v styles -->
<link type="text/css" href="main_ui.css" rel="Stylesheet" />

<!-- Local -->
<script type="text/javascript">
  var o3v = {};  // open-3d-viewer namespace
</script>

<!-- Webgl -->
<script type="text/javascript" src="scripts/gl-matrix-min.js"></script>
<script type="text/javascript" src="scripts/webgl.js"></script>
<script type="text/javascript" src="scripts/loader.js"></script>
<script type="text/javascript" src="scripts/renderer.js"></script>
<script type="text/javascript" src="scripts/webgl_util.js"></script>

<!-- o3v specific -->
<script type="text/javascript" src="scripts/common.js"></script>
<!--<script type="text/javascript" src="scripts/models.js"></script>-->
<script type="text/javascript">
o3v.MODELS = [{
<?php
  $m = (array_key_exists('model', $_REQUEST) && array_key_exists($_REQUEST['model'], $models)) ? $models[$_REQUEST['model']] : array_shift($models);
  foreach ($m as $k=>$v)
    echo "  $k:'$v',";
?>
}];
</script>
<script type="text/javascript" src="scripts/entities.js"></script>
<script type="text/javascript" src="scripts/content.js"></script>
<script type="text/javascript" src="scripts/layer.js"></script>
<script type="text/javascript" src="scripts/history.js"></script>
<script type="text/javascript" src="scripts/layers_ui.js"></script>
<script type="text/javascript" src="scripts/gestures.js"></script>
<script type="text/javascript" src="scripts/select.js"></script>
<script type="text/javascript" src="scripts/label.js"></script>
<script type="text/javascript" src="scripts/nav_ui.js"></script>
<script type="text/javascript" src="scripts/navigate.js"></script>
<script type="text/javascript" src="scripts/input_handler.js"></script>
<script type="text/javascript" src="scripts/search.js"></script>
<script type="text/javascript" src="scripts/select.js"></script>
<script type="text/javascript" src="scripts/interpolant.js"></script>
<script type="text/javascript" src="scripts/opacity.js"></script>
<script type="text/javascript" src="scripts/main_ui.js"></script>
<script type="text/javascript" src="scripts/render_interface.js"></script>
<script type="text/javascript" src="scripts/viewer.js"></script>

<script type="text/javascript">
  <!-- Start viewer. -->
  $(document).ready(function() {
    // The assignment to window.viewer_ is ONLY for debugging.
    // This variable should NEVER be accessed from code.
    window.viewer_ = new o3v.Viewer();
  });
</script>

</head>

<body>

<!-- Canvas for verifying webgl -->
<!-- TODO(dkogan): dynamically create this -->
<canvas id="gltest" style="display:none"></canvas>

<!-- Container for labels -->
<!-- TODO(dkogan): dynamically create this and use css -->
<div id="labelcontainer" style="width:0px; height:0px; left:0px; top:0px; position:absolute; z-index:1"></div>

<!-- Quick help panel -->
<div id="help" class="help">
<b>Quick guide ('?' to toggle)</b>
<br>
<br>
<b>Navigation</b>
<li>Click+drag with the mouse to rotate, scroll to zoom.
<li>Or use the buttons in the upper left. The Home button resets the view.
<li>Or use the arrow keys and Page Up / Page Down. The Home key resets the view.
<br>
<br>
<b>Slider</b>
<li>Use the opacity slider on the left to reveal layers.
<li>Click on the toggle below the slider to control layers individually.
<br>
<br>
<b>Selection</b>
<li>Use the searchbox at the upper right to search, or click on entities to select them.
<li>Click on the background or on a label to undo selection.
<li>Ctrl+click on entities or labels to hide entities. (Cmd+click on mac.)
<li>Shift+click on entities or labels (or click on the 'pin' icon in a label) to pin an entity. This will keep it selected while you select more.
<li>Some entities can be expanded by clicking on the 'plus' on a label.
<br>
<br>
<b>Models</b>
<li>Use the model button at the top of the slider to switch models (if others available).
</div>
<div id="help-hidden" class="help-hidden">
<b>Quick guide ('?' to toggle)</b>
</div>
<div id="opac_idx" style="display:none;left:50%;top:100%;position:absolute;margin-top:-50px;color:#06F;z-index:3;margin-left:-89px"></div>

<div id="r0" class="indicator"> </div>
<div id="r1" class="indicator"> </div>
<div id="r2" class="indicator"> </div>
<div id="r3" class="indicator"> </div>
<div id="r4" class="indicator"> </div>
<div id="r5" class="indicator"> </div>
<div id="r6" class="indicator"> </div>
<div id="r7" class="indicator"> </div>

<div id="loading-feedback" class="loading-feedback">Loading...</div>

</body>
</html>
