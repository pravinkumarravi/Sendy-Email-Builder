<?php require_once '_init.php';

App::setPage('builder');

require_once '_header.php';
?>
<div id="email-builder">
    <!-- Main Sidebar -->
    <div class="sidebar-main" style="display: none;">
        <div class="sidebar-header">
            <a class="logo-container" href="index.php">
                <img class="logo" src="dist/images/logo.png">
                <span class="title-container">
                    <span class="title"><?php echo APP_NAME; ?></span>
                    <span class="subtitle"><?php echo APP_TAGLINE; ?></span>
                </span>
            </a>
        </div>
        <ul class="nav" data-type="nav">
            <li class="nav-item" data-nav="has-child">
                <span class="item"><i class="icon icon-download"></i> Export</span>
                <ul class="subnav" data-type="subnav">
                    <li class="subnav-item" data-action="export-zip">Zip archive</li>
                    <li class="subnav-item" data-action="export-html">HTML only</li>
                </ul>
            </li>
        </ul>
        <div class="sidebar-footer">
            <!-- <a class="btn-main" href="#" data-action="campaign-settings">Save Campaign</a> -->
            <a class="btn-second" href="theme.php">Choose template</a>
        </div>
    </div>
    <!-- Main Container -->
    <div class="main-container">
        <!-- Second Sidebar -->
        <div class="sidebar-second" data-type="sidebar-second">
            <div class="toggle-options">
                <ul class="nav" data-type="nav">
                    <li class="subnav-item active" data-target="modules">Modules</li>
                    <li class="subnav-item" data-target="styles">Styles</li>
                </ul>
            </div>
            <div class="template-selector">
                <!-- Modules -->
                <div class="sidebar-inner" data-sidebar="modules">
                    <div class="inner-header">DRAG AND DROP MODULES</div>
                    <div class="inner-content" data-type="modules-container"></div>
                </div>
                <!-- Styles -->
                <div class="sidebar-inner" data-sidebar="styles">
                    <div class="inner-header">
                    </div>
                    <div class="inner-content">
                        <div data-type="module-options">
                        </div><!-- module-options -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Holder Container -->
        <div class="holder-container">
            <!-- Top Sidebar -->
            <div class="sidebar-top">
                <span class="item template-preview-mobile"><i class="icon-mobile"></i></span>
                <span class="item template-preview-tablet"><i class="icon-tablet"></i></span>
                <span class="item template-clear item-last"><i class="icon-close"></i> Clear</span>
            </div>
            <!-- Editor Container -->
            <div class="editor-container">
                <!-- Editor Area -->
                <div class="editor" data-type="editor">

                </div> <!-- /.editor -->
            </div>
        </div>
    </div>
    <form id="export-form" action="server/_export.php" method="POST">
        <input type="hidden" name="type" value="html" />
        <input type="hidden" name="theme" value="<?php echo $_GET['theme']; ?>" />
        <input id="templateHTML" type="hidden" name="templateHTML" value="" />
    </form> <!-- / Template Export Form  -->
</div>


<div id="linkeditor" class="modal-container">
    <div class="input-group">
        <input class="input-control" type="text" data-link="text" value="" placeholder="Text">
        <input class="input-control" type="text" data-link="url" value="" placeholder="http://example.com">
    </div>
    <div class="modal-controls">
        <button class="modal-btn-cancel">Cancel</button>
        <button class="modal-btn-ok">OK</button>
    </div>
</div>

<div id="imageeditor" class="modal-container">
    <div class="modal-container-inner">
        <div class="input-group">
            <input class="input-control" type="text" data-image="url" value="" placeholder="URL">
            <input class="input-control" type="text" data-image="alt" value="" placeholder="Alt">
            <input class="input-control input-control-small" type="text" data-image="width" value="" placeholder="Width">px X
            <input class="input-control input-control-small" type="text" data-image="height" value="" placeholder="Height">px
        </div>
        <div>
            <div class="slim" id="modal-image-uploader">
                <input type="file">
                <img src="" alt="" data-image="src">
            </div>
        </div>
    </div>
    <div class="modal-controls">
        <button class="modal-btn-cancel">Cancel</button>
        <button class="modal-btn-ok">OK</button>
    </div>
</div>

<div id="bgeditor" class="modal-container">
    <div class="slim" id="modal-bg-uploader">
        <input type="file">
        <img src="" alt="" data-image="src">
    </div>
    <div class="modal-controls">
        <button class="modal-btn-cancel">Cancel</button>
        <button class="modal-btn-ok">OK</button>
    </div>
</div>


<!-- Scripts -->

<!-- App Config -->
<script type="text/javascript">
    var config = {
        host: '<?php echo APP_PATH; ?>',
        uploads: '<?php echo APP_PATH . '/uploads'; ?>',
        send_script: '<?php echo APP_PATH . '/server/_send.php'; ?>',
        upload_script: '<?php echo APP_PATH . '/server/_upload.php'; ?>',
        bg_upload_script: '<?php echo APP_PATH . '/server/_upload.php?type=bg'; ?>'
    }
</script>
<!-- Editor -->
<script src="dist/js/editor.js?ver=<?php echo APP_VERSION; ?>"></script>
<!-- Custom Functions -->
<script src="dist/js/custom.js?ver=<?php echo APP_VERSION; ?>"></script>
<script type="text/javascript">
    var emailBuilder = new $.EmailBuilder({
        theme: '<?php echo $_GET['theme']; ?>'
    });
    emailBuilder.init();
</script>

<?php require_once '_footer.php'; ?>