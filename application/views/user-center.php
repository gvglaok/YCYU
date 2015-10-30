<div class="container">
        <!-- 个人信息 - 头像 - 昵称 - 能力 ->能力描述 图片，文字描述，技能星级（动态评定） -->
        <div class="row">
            <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1">
                <img class="img-circle" src="/t6/skin/img/4.png" width="100%">
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <h3><?php  echo $this->session->userdata('userName') ;  ?></h3>
            </div>
            <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9">
                <ol class="breadcrumb ckNav2">
                    <li>
                        <a href="#addTec" data-toggle="modal" data-target="#addTec">添加技能片</a>
                    </li>
                </ol>
                <!-- <i class="glyphicon glyphicon-tags"></i>标签：-->
            </div>
        </div>
        <hr>
        <div class="row">
            <?php if (is_null($mes)) : ?>
            <?php foreach ($skill->result_array() as $card): ?>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="panel panel-info ckpanel">
                    <div class="panel-heading">
                        <h4 class="panel-title"><i class=" glyphicon glyphicon-file"></i> 技能片</h4>
                    </div>
                    <div class="panel-body">
                        <img src="/t6/skin/img/1.png" width="100%">
                        <h4 id="name<?=$card['skillID']?>"> <?=$card['name']; ?> </h4>
                        <p class="text-primary">
                            熟练度：<span id="level<?=$card['skillID']?>"><?=$card['level']; ?></span> 星
                            <!-- <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            <span class="glyphicon glyphicon-star-empty"></span> -->
                        </p>
                        <p id="descript<?=$card['skillID']?>"> <?=$card['description']; ?></p>
                    </div>
                    <div class="panel-footer text-right">
                        <button name="updata" sid="<?=$card['skillID']?>" type="button" class="btn btn-primary" data-toggle="modal" data-target="#tecModify">编辑资料</button>
                        <button name="delete" sid="<?=$card['skillID']?>" type="button" class="btn btn-primary" data-toggle="modal" data-target="">删除资料</button>
                    </div>
                </div>
            </div>

            <?php endforeach; ?>
        <?php else: ?>
            <div class="alert alert-warning" role="alert"><?=$mes ?></div>
        <?php endif; ?>
        </div>
    </div>
    
    <!-- 添加技能窗口 -->
    <div id="addTec" ng-controller="addTec" tabindex="-1" role="dialog" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">技能片添加</h4>
                </div>
                <div class="modal-body">
                    
                    <form novaildate role="form" enctype="multipart" >
                       <!--  <img id="addImg" class="img-rounded" src="http://i1.tietuku.com/f5f1a25ee37d78c0.jpg" width="100%" data-toggle="tooltip" data-placement="top" title="点击更换图片"> -->
                        
                        <!-- <input type="file" name="imgSelect"/> -->
                        <input id="usid" type="hidden">
                        <div class="form-group">
                            <br>
                            <input type="text" class="form-control" ng-model="tec.name" name="jname" placeholder="技能名">
                            <br>
                            <div class="input-group">
                                <div class="input-group-addon">熟练度：</div>
                                <input type="number" class="form-inline form-control" ng-model="tec.level" name="jlevel"/>
                                <div class="input-group-addon">星</div>
                            </div>
                            <br>
                            <textarea class="form-control" placeholder="详述" ng-model="tec.descript" name="jj" rows="3"></textarea>
                        </div>

                        <button type="button" ng-click="AddSkill()" class="btn btn-primary">保存</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- 修改编辑 -->
    <div id="tecModify"  tabindex="-1" role="dialog" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">技能片修改</h4>
                </div>
                <div class="modal-body">

                        <img class="img-rounded" src="/t6/skin/img/2.png" width="100%" data-toggle="tooltip" data-placement="top" title="点击更换图片">
                        <div class="form-group">
                            <br>
                            <input id="upName"  type="text" class="form-control" placeholder="Skill Name">
                            <br>
                            <div class="input-group">
                                <div class="input-group-addon">熟练度：</div>
                                <input id="upLevel"  type="number" class="form-inline form-control" />
                                <div class="input-group-addon">星</div>
                            </div>
                            <br>
                            <textarea id="upDes"  class="form-control" placeholder="Description" rows="3"></textarea>
                        </div>
                        <button id="usbtn" type="button" class="btn btn-primary">保存</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                </div>
                <!--<div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button type="button" class="btn btn-primary">保存</button>
                </div>-->
            </div>
        </div>
    </div>

<script type="text/javascript">

</script>

