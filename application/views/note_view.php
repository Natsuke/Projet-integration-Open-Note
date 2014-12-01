<div id="page-wrapper">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header">
                Note - <?php echo $note['name'] ?> - <span style="color: green; font-style: italic;"> ++ <?php echo $like; ?></span> / <span style="color:red; font-style: italic;"> -- <?php echo $unlike; ?></span>
                <div class="row top15">
                    <?php
                    if ($vote_unlike == 1 || ($vote_like == 0 && $vote_unlike == 0)) {
                        echo'<div class="col-sm-1">';
                        echo form_open('note/like/' . $note['id']);
                        echo '<button type="submit" class="btn btn-outline btn-success">J\'aime</button>';
                        echo '</form>';
                        echo'</div>';
                    }
                    ?>


                    <?php
                    if ($vote_like == 1 || ($vote_like == 0 && $vote_unlike == 0)) {
                        echo'<div class="col-sm-1">';
                        echo form_open('note/unlike/' . $note['id']);
                        echo '<button type="submit" class="btn btn-outline btn-danger">Je n\'aime pas</button>';
                        echo '</form>';
                        echo'</div>';
                    }
                    ?>
                </div> 
            </h1>
        </div>
        <div class="form-group row">
            <div class="col-sm-2" style="padding-left: 10px;">
                <button class="btn btn-outline btn-primary" data-toggle="modal" data-target="#myModal">
                    Options
                </button>
            </div>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myModalLabel">Options sur la notes</h4>
                        </div>
                        <div class="modal-body">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" class="collapsed">Collapsible Group Item #1</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed" aria-expanded="false">Collapsible Group Item #2</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false">
                                        <div class="panel-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" aria-expanded="false">Collapsible Group Item #3</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false">
                                        <div class="panel-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <div class="col-sm-12">
                <?php echo validation_errors(); ?>
                <?php echo form_open(''); ?>
                <div class="col-sm-8 top15">
                    <pre><code>
                            <?php
                            foreach ($note['note_content'] as $row) {
                                echo $row;
                            }
                            ?>
                    </pre></code>
                </div>
                <script>
                    // Replace the <textarea id="editor1"> with a CKEditor
                    // instance, using default configuration.
                    //CKEDITOR.replace('editor1');
                    (function () {
                        var pre = document.getElementsByTagName('pre'),
                                pl = pre.length;
                        for (var i = 0; i < pl; i++) {
                            pre[i].innerHTML = '<span class="line-number"></span>' + pre[i].innerHTML + '<span class="cl"></span>';
                            var num = pre[i].innerHTML.split(/\n/).length;
                            for (var j = 0; j < num; j++) {
                                var line_num = pre[i].getElementsByTagName('span')[0];
                                line_num.innerHTML += '<span>' + (j + 1) + '</span>';
                            }
                        }
                    })();
                </script>
                <input class="form-control"  name="note_id" id="note_id" type="text" style="display: none" value="<?php echo $note['id'] ?>" />
                </form>
            </div>

        </div>
    </div>
</div>
