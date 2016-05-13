<?php foreach ($publish as $k_publish=>$v_publish): ?>
	<div class="position-box">
            <div class="company-mess">
                <img src="<?php echo $v_publish['img_logo'];?>" class="logo">
                <div class="com" >
                    <p class="com-name"><?php echo $v_publish['name']?></p>
                    <p>发布了职位</p>
                </div>
                <div class="title">
                    <span class="data">
                        <?php echo time_line($v_publish['create_time']);?>
                    </span>
                </div>
            </div>
            <a href="position-design.html" class="position-edit">
                <img src="<?php echo $v_publish['img_title'];?>" class="company-img test-lazyload">
                <div class="lable">
                    <p></p>
                    <p>
                        <span>10-12K/月<span class="point">.</span>初级</span>
                    </p>
                    <p>
                        <em>
                            <i class="iconfont">&#xe638;</i>
                            <span>大型项目</span>
                        </em>
                        <em>
                            <i class="iconfont">&#xe638;</i>
                            <span>核心项目职位</span>
                        </em>
                        <em>
                            <i class="iconfont">&#xe638;</i>
                            <span>团队有技术咖</span>
                        </em>
                    </p>
                </div>
            </a>
            <div class="interset-head">
                <span>
                    <img src="../images/boy.png">
                    <img src="../images/girl.png">
                    <img src="../images/boy.png">
                    <img src="../images/girl.png">
                    <img src="../images/boy.png">
                    <img src="../images/girl.png">
                    <img src="../images/girl.png">
                    <img src="../images/boy.png">
                    <img src="../images/girl.png">
                </span>
                <p class="people-mont">9个人感兴趣</p>

            </div>
        </div>
<?php endforeach; ?>