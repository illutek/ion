<div class="container">
        <div id="header" class="col-md-12">
            <div class="row">
                <?php if ($page['header_top']): ?>

                    <div id="header_top">
                        <div class="slogan"><?php print render($page['header_top']); ?></div>
                    </div><!-- end header_top -->
                <?php endif; ?>
            </div><!-- end row -->
            <div class="row">
                <div id="header_logo">
                    <?php if ($logo): ?>
                        <div id="logo" class="col-xs-4 col-md-4">
                            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                                <img class="img-responsive" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                            </a>
                        </div>
                    <?php endif; ?>

                    <?php if ($page['slider']): ?>
                        <div id="slider" class="col-xs-7 col-md-7 col-md-offset-1">
                            <?php print render($page['slider']); ?>
                        </div>
                    <?php endif; ?>
                </div><!-- end header_logo -->
            </div><!-- end row -->
        </div><!-- end header -->
            <div class="row">
                    <div id="navigatie" class="col-md-12">
                        <div class="navbar navbar-default" role="navigation">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse">
                                    <?php if ($page['menu']): ?>
                                        <?php print render($page['menu']); ?>
                                    <?php endif; ?>
                                </div><!--/.nav-collapse -->
                            </div><!--/.container-fluid -->
                        </div>
                    </div><!-- end #navigatie -->
            </div>
        <div class="row">
        <div id="content_all" class="col-md-12">
            <?php if ($page['sidebar-first']): ?>
                <div id="sidebar-first" class="col-md-3">
                    <?php print render($page['sidebar-first']); ?>
                </div>
            <?php endif; ?>

            <?php if ($page['sidebar-first']) { ?>
            <div id="content-right" class="col-md-9">
                <?php } else { ?>
                <div id="content-right" class="col-md-12">
                    <?php } ?>
                    <?php print $breadcrumb; ?>
                    <a id="main-content"></a>
                    <?php if ($tabs): ?>
                    <div id="tabs-wrapper" class="clearfix"><?php endif; ?>
                        <?php print render($title_prefix); ?>
                        <?php if ($title): ?>
                            <h1<?php print $tabs ? ' class="with-tabs"' : '' ?>><?php print $title ?></h1>
                        <?php endif; ?>
                        <?php print render($title_suffix); ?>
                        <?php if ($tabs): ?><?php print render($tabs); ?>
                    </div>
                <?php endif; ?>

                    <?php print render($tabs2); ?>
                    <?php print $messages; ?>
                    <?php print render($page['help']); ?>
                    <?php if ($action_links): ?>
                        <ul class="action-links">
                            <?php print render($action_links); ?>
                        </ul>
                    <?php endif; ?>
                    <?php print render($page['content']); ?>


                    <div id="wide-top" class="col-md-12">
                        <?php print render($page['wide-top']); ?>
                    </div>
            </div><!-- end content-right -->


            <div id="top_region" class="col-md-9">
                <?php if ($page['content-top-1']): ?>
                    <div id="content-top-1" class="col-md-4 col-sm-4">
                        <?php print render($page['content-top-1']); ?>
                    </div>
                <?php endif; ?>

                <?php if ($page['content-top-2']): ?>
                    <div id="content-top-2" class="col-md-4 col-sm-4">
                        <?php print render($page['content-top-2']); ?>
                    </div>
                <?php endif; ?>

                <?php if ($page['content-top-3']): ?>
                    <div id="content-top-3" class="col-md-4 col-sm-4">
                        <?php print render($page['content-top-3']); ?>
                    </div>
                <?php endif; ?>
            </div>


                <div id="content-bottom-wrap" class="col-md-9">
                    <?php if ($page['content-bottom-1']): ?>
                        <div id="content-bottom-1" class="col-md-4 col-sm-4">
                            <?php print render($page['content-bottom-1']); ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($page['content-bottom-2']): ?>
                        <div id="content-bottom-1" class="col-md-4 col-sm-4">
                            <?php print render($page['content-bottom-2']); ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($page['content-bottom-3']): ?>
                        <div id="content-bottom-1" class="col-md-4 col-sm-4">
                            <?php print render($page['content-bottom-3']); ?>
                        </div>
                    <?php endif; ?>
                </div><!-- end content-bottom-wrap -->

        </div><!-- /#content_all -->
        </div>
            <div class="row">
                <footer class="col-md-12">
                    <div class="footer_content">
                        <?php print render($page['footer_content']); ?>
                    </div>
                </footer>
            </div>
</div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php print base_path() . path_to_theme(); ?>/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php print base_path() . path_to_theme(); ?>/js/ie10-viewport-bug-workaround.js"></script>

