<div name="body">
        <!-- 个人简略信息- 头像 -昵称 - 能力 个人技能展示->图文、文字、图片 招募 -> 详细资料 技能星级 评价-回复 -->
        <div class="container">
        
            <div class="row">
            <?php foreach ($sc->result_array() as $data ): ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">  
                    <div class="panel panel-info ckpanel">
                        <div class="panel-heading">
                            <h4 class="panel-title"><span class="glyphicon glyphicon-th"></span> Skill Card</h4>
                        </div>
                        <div class="panel-body">
                            <img src="/t6/skin/img/2.png" width="100%">
                            <h4><?=$data['name'] ?></h4> 
                            <p class="text-primary"> 熟练度：<?=$data['level']?> </p>
                            
                            <p><?=$data['description'] ?></p>
                        </div>
                        <div class="panel-footer text-right">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detail">详细资料</button>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

        </div>

    </div>


    <!-- modal模态 查看详情 -->
    <div id="detail" tabindex="-1" role="dialog" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">详细资料</h4>
                </div>
                <div class="modal-body">
                    <div class="">
                            <img src="/t6/skin/img/3.png" width="100%">
                            <h4>Node.js应用开发</h4>
                            <p class="text-primary">
                            熟练度：
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>    
                            </p>
                            <p>PS 广告设计PS 广告设计PS 广告设计PS 广告设计PS 广告设计PS 广告设计PS 广告设计PS 广告设计PS 广告设计PS 广告设计PS 广告设计PS 广告设计PS 广告设计PS 广告设计PS 广告设计PS 广告设计</p>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                </div>
            </div>
        </div>
    </div>