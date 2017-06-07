<?php
session_start();
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><i class="fa fa-newspaper-o"></i> <span class="meteo-font">News<s>Paper</s>Letter</span></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <div class="navbar-btn">
                        <div id="main-navbar" class="btn-group" role="group">
                            <a id="ploader" class="btn btn-primary" href="?p=loaderMail">
                                <i class="fa fa-file-text"></i> Loader
                            </a>
                            <a id="pdocuments" class="btn btn-primary" href="?p=groupes">
                                <i class="fa fa-folder"></i> Groupes
                            </a>
                            <a id="prepositories" class="btn btn-primary" href="?p=redaction">
                                <i class="fa fa-list"></i> Rédaction NL
                            </a>
                            <a id="pstats" class="btn btn-primary"  title="stats" href="?p=stats">
                                <i class="fa fa-area-chart" ></i> Stats
                            </a>
                            <a id="parchive" class="btn btn-primary"  title="ctrl + m" disabled="disabled">
                                <i class="fa fa-file-archive-o"></i> archivage
                            </a>
                        </div>
                    </div>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="pointer"><i class="fa fa-code-fork"></i> DEV 2.1.0</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->

    <a href="#top" id="back-to-top">
        <i class="fa fa-level-up"></i>
    </a>

</nav>
<script type="text/javascript">

    $(document).keydown(function (e) {

        var evtobj = window.event ? event : e;
        if (evtobj.keyCode === 77 && evtobj.ctrlKey) {//si on appuie sur ctrl+m on active ou desactive le bouton archivage
            if ($('#parchive').attr("href") === undefined) {
                $('#parchive').attr("href", "?p=loader&opt=archivage");
                $('#parchive').removeAttr("disabled");
            } else {
                $('#parchive').removeAttr("href");
                $('#parchive').attr("disabled", "disabled");
            }
        }
    });
</script>
