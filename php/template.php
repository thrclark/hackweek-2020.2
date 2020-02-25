<?php
$section = '';
$page_title = 'asdf';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/styles-admin.php') ?>
</head>
<body class="int-admin">
<?php include('includes/admin-navigation.php') ?>
<div class="container mt-3 mt-md-5 mb-7">
    <main class="main-content" id="main-content">
        <h1 class="mb-3 mb-md-6 rbt-ts-23 rbt-ts-32-md-up"> <?php echo $page_title; ?></h1>
        <div class="demo"> 
            <!-- ## MusicXML input
OSMD can display [MusicXML][0] in both `.xml` and `.mxl` containers. On this demo page, you can either choose from the list of music below or just drop your own MusicXML on this page.

## Renderer
You can select the rendering strategy, by choosing either the Canvas option, or the SVG one.

## Zoom level
You control the zoom level of the music sheet displayed. Right now, OSMD is rendering the music piece at <span id="zoom-str">100</span>% on <span id="size-str">0</span>px width.

## Cursor
OSMD is able to display a simple cursor. You can control the visibility of the cursor and navigate through the piece using the following controls. You can also use the right arrow key to step through the piece. -->
            
            <h3 class="centered"> <img alt="OSMD logo" src="https://osmd.org/wp-content/uploads/2016/05/OSMD_3_icon_only.svg" height="60" /> OpenSheetMusicDisplay Demo </h3>
            <div class="button group">
                <div class="control-container">
                    <h4 class="centered">Cursor</h4>
                    <input type="button" value="Show" id="show-cursor-btn" class="btn btn-demo" />
                    <input type="button" value="Hide" id="hide-cursor-btn" class="btn btn-demo" />
                    <input type="button" value="Next" id="next-cursor-btn" class="btn btn-demo" />
                    <input type="button" value="Reset" id="reset-cursor-btn" class="btn btn-demo" />
                </div>
                <div class="control-container">
                    <h4 class="centered">Zoom</h4>
                    <input type="button" value="Zoom In" id="zoom-in-btn" class="btn btn-demo" />
                    <input type="button" value="Zoom Out" id="zoom-out-btn" class="btn btn-demo" />
                    <p id="zoom-str">100</p>
                </div>
                <div class="control-container">
                    <h4 class="centered">Renderer</h4>
                    <select id="backend-select" class="btn btn-demo" value="svg">
                        <option value="svg">SVG</option>
                        <option value="canvas">Canvas</option>
                        &gt;
                    </select>
                    <input type="button" value="Re-Render" id="debug-re-render-btn" class="btn btn-demo" />
                    <input type="button" value="Clear" id="debug-clear-btn" class="btn btn-demo" />
                </div>
                <div class="control-container">
                    <h4 class="centered">Select score</h4>
                    <select id="selectSample" class="btn btn-demo">
                    </select>
                    <h4 class="centered">Or just drop your own MusicXML on this page.</h4>
                </div>
            </div>
            <div id="error-tr" class="error-container">
                <div id="error-td"></div>
            </div>
            <div class="demo-canvas" id="osmd-demo-canvas"></div>
        </div>
    </main>
</div>
<?php include('includes/all-footerscripts.php') ?>
</body>
</html>