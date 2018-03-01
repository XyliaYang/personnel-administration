<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:width="http://www.w3.org/1999/xhtml">

<head>
<title>干部报名系统</title>
<link rel="stylesheet"
href="/trainee/Application/admin/Common/resources/css/reset.css"
type="text/css" media="screen"/>
<link rel="stylesheet"
href="/trainee/Application/admin/Common/resources/css/style.css"
type="text/css" media="screen"/>
<link rel="stylesheet"
href="/trainee/Application/admin/Common/resources/css/invalid.css"
type="text/css" media="screen"/>
<script type="text/javascript"
src="/trainee/Application/admin/Common/resources/scripts/jquery-1.3.2.min.js"></script>
<script type="text/javascript"
src="/trainee/Application/admin/Common/resources/scripts/simpla.jquery.configuration.js"></script>
<script type="text/javascript"
src="/trainee/Application/admin/Common/resources/scripts/facebox.js"></script>
<script type="text/javascript"
src="/trainee/Application/admin/Common/resources/scripts/jquery.wysiwyg.js"></script>
<script type="text/javascript"
src="/trainee/Application/admin/Common/resources/scripts/jquery.datePicker.js"></script>
<script type="text/javascript"
src="/trainee/Application/admin/Common/resources/scripts/jquery.date.js"></script>
<script type="text/javascript"
src="/trainee/Application/Common/Common/resources/scripts/myjs.js"></script>


    <style type="text/css">
        .text_left{
            font-weight: bold;
            text-align: right;
            width: 50px;
        }

        .head_project{
            color: #ffffff;
            text-align: right;
            margin-bottom: 50px;
            margin-right: 10px;
            font-size: 30px;
        }


    </style>

</head>

<body>


<div id="body-wrapper">
    <!-- Wrapper for the radial gradient background -->
    <div id="sidebar">
        <div id="sidebar-wrapper">
            <!-- Sidebar with logo and menu -->
            <h1 id="sidebar-title">
                <a href="#">Simpla Admin</a>
            </h1>
            <!-- Logo (221px wide) -->
            <a href="#"><img id="logo"
            /></a>
            <!-- Sidebar Profile links -->


            <div  class="head_project">
                <?php echo ($proname); ?>
            </div>
<ul id="main-nav">

<!-- Accordion Menu -->
<li><a href="/trainee/Admin/Project/addProject" class="nav-top-item current">
<!-- Add the class "current" to current menu item -->
会议信息</a>
<ul>
    <li><a href="/trainee/Home/Project/showUnitProject" class="current">会议详情</a></li>
</ul>


</li>


<li><a href="/trainee/Home/Trainee/showTrainee" class="nav-top-item">报名信息 </a>
<ul>
    <li><a href="/trainee/Home/Trainee/showTrainee">学员列表</a></li>
</ul>
</li>

<li><a href="/trainee/Admin/Project/addProject" class="nav-top-item">
<!-- Add the class "current" to current menu item -->
单位信息</a>
<ul>
    <li><a href="/trainee/Home/Unit/showUnit">单位详情</a></li>
    <li><a href="/trainee/Home/Unit/updateUnit">修改信息</a></li>
    <li><a href="/trainee/Home/Unit/updatePwd">修改密码</a></li>

</ul>

</li>

    <ul>
        <li><a href="/trainee/Home/Index/loginout">退出</a> </li>
    </ul>



</ul>


<!-- End #main-nav -->

<div id="messages" style="display: none">
<!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->
<h3>3 Messages</h3>
<p>
<strong>17th May 2009</strong> by Admin<br/> Lorem ipsum dolor
sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi
at felis aliquet congue.
<small><a href="#"
          class="remove-link" title="Remove message">Remove</a></small>
</p>
<p>
<strong>2nd May 2009</strong> by Jane Doe<br/> Ut a est eget
ligula molestie gravida. Curabitur massa. Donec eleifend, libero
at sagittis mollis, tellus est malesuada tellus, at luctus turpis
elit sit amet quam. Vivamus pretium ornare est.
<small><a
        href="#" class="remove-link" title="Remove message">Remove</a></small>
</p>
<p>
<strong>25th April 2009</strong> by Admin<br/> Lorem ipsum dolor
sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi
at felis aliquet congue.
<small><a href="#"
          class="remove-link" title="Remove message">Remove</a></small>
</p>
<form action="#" method="post">
<h4>New Message</h4>
<fieldset>
    <textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
</fieldset>
<fieldset>
    <select name="dropdown" class="small-input">
        <option value="option1">Send to...</option>
        <option value="option2">Everyone</option>
        <option value="option3">Admin</option>
        <option value="option4">Jane Doe</option>
    </select> <input class="button" type="submit" value="Send"/>
</fieldset>
</form>
</div>
<!-- End #messages -->
</div>
</div>
<!-- End #sidebar -->
<div id="main-content">
<!-- Main Content Section with everything -->
<noscript>
<!-- Show a notification if the user has disabled javascript -->
<div class="notification error png_bg">
<div>
Javascript is disabled or is not supported by your browser. Please
<a href="http://browsehappy.com/"
   title="Upgrade to a better browser">upgrade</a> your browser or <a
    href="http://www.google.com/support/bin/answer.py?answer=23852"
    title="Enable Javascript in your browser">enable</a> Javascript
to navigate the interface properly. Download From <a
    href="http://www.exet.tk">exet.tk</a>
</div>
</div>
</noscript>
<!-- Page Head -->
<h2 style="color: #0c0c0c">欢迎您, <?php echo ($unitname); ?> 管理员</h2>
<ul class="shortcut-buttons-set">


</ul>
<!-- End .shortcut-buttons-set -->
<div class="clear"></div>
<!-- End .clear -->
<div class="content-box">
<!-- Start Content Box -->
<div class="content-box-header">
<h3 style="color: #0c0c0c">会议详情</h3>
<ul class="content-box-tabs">

</ul>
<div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">

<div class="col-lg-6">
<div class="panel panel-default">

    <!-- /.panel-heading -->
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <td   width="72"></td>
                    <td  class="text_left" width="72" align="right">会议名称：</td>
                    <td width="272"><?php echo ($projectinfo['pro_name']); ?></td>
                </tr>

                <tr>
                    <td width="72"></td>
                    <td  class="text_left" width="72">限制人数：</td>
                    <td width="272"><?php echo ($projectinfo['pro_limit']); ?></td>
                </tr>

                <tr>
                    <td width="72"></td>
                    <td  class="text_left" width="72">起始时间：</td>
                    <td width="272"><?php echo ($projectinfo['pro_time_start']); ?></td>
                </tr>

                <tr>
                    <td width="72"></td>
                    <td class="text_left" width="72">结束时间：</td>
                    <td width="272"><?php echo ($projectinfo['pro_time_end']); ?></td>
                </tr>

                <tr>
                    <td width="72"></td>
                    <td  class="text_left" width="72" >说明：</td>
                    <td width="272"><?php echo ($projectinfo['pro_instruct']); ?></td>
                </tr>

                <tr>
                    <td width="72"></td>
                    <td  class="text_left" width="72">项目状态：</td>
                    <td width="272">正在进行中</td>
                </tr>

                <tr>
                    <td width="72"></td>
                    <td  class="text_left" width="72">备注：</td>
                    <td width="272"><?php echo ($projectinfo['pro_remark']); ?></td>
                </tr>
            </table>
        </div>
        <!-- /.table-responsive -->
    </div>
    <!-- /.panel-body -->


</div>
<!-- /.panel -->
</div>
<!-- /.col-lg-6 -->
</div>

<Script>
if (<?php echo ($project['pro_isConfirm']); ?> == 1) {
document.getElementById("notconfirm/<?php echo ($project['id']); ?>").style.display = "none";
document.write("已确认");
}
</Script>
</td>
</tr>

</volist>


</tbody>
</table>
</div>
<!-- End #tab1 -->

</div>
<!-- End .content-box-content -->
</div>
<!-- End .content-box -->


</div>
<!-- End .content-box-content -->
</div>
<!-- End .content-box -->


<!-- End #main-content -->
</div>
</body>
<!-- Download From www.exet.tk-->
</html>