<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:width="http://www.w3.org/1999/xhtml"
xmlns:height="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>干部报名系统</title>
<!--                       CSS                       -->
<!-- Reset Stylesheet -->
<link rel="stylesheet" href="/trainee/Application/admin/Common/resources/css/reset.css" type="text/css" media="screen" />
<!-- Main Stylesheet -->
<link rel="stylesheet" href="/trainee/Application/admin/Common/resources/css/style.css" type="text/css" media="screen" />
<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
<link rel="stylesheet" href="/trainee/Application/admin/Common/resources/css/invalid.css" type="text/css" media="screen" />
<!--                       Javascripts                       -->
<!-- jQuery -->
<script type="text/javascript" src="/trainee/Application/admin/Common/resources/scripts/jquery-1.3.2.min.js"></script>
<!-- jQuery Configuration -->
<script type="text/javascript" src="/trainee/Application/admin/Common/resources/scripts/simpla.jquery.configuration.js"></script>
<!-- Facebox jQuery Plugin -->
<script type="text/javascript" src="/trainee/Application/admin/Common/resources/scripts/facebox.js"></script>
<!-- jQuery WYSIWYG Plugin -->
<script type="text/javascript" src="/trainee/Application/admin/Common/resources/scripts/jquery.wysiwyg.js"></script>
<!-- jQuery Datepicker Plugin -->
<script type="text/javascript" src="/trainee/Application/admin/Common/resources/scripts/jquery.datePicker.js"></script>
<script type="text/javascript" src="/trainee/Application/admin/Common/resources/scripts/jquery.date.js"></script>
<script language="JavaScript" src="/trainee/Application/admin/Common/resources/scripts/mydate.js"></script>
    <script type="text/javascript"
            src="/trainee/Application/admin/Common/resources/scripts/myjs.js"></script>

<?php
date_default_timezone_set("PRC"); $nowtime = time(); $rq = date("Y-m-d ",$nowtime); ?>

    <style type="text/css">
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
        <li><a href="/trainee/Admin/Project/addProject" class="nav-top-item ">
            <!-- Add the class "current" to current menu item -->
            会议信息</a>
            <ul>
                <li><a href="/trainee/Home/Project/showUnitProject">会议详情</a></li>
            </ul>


        </li>


        <li><a href="/trainee/Home/Trainee/showTrainee" class="nav-top-item current">报名信息 </a>
            <ul>
                <li><a href="/trainee/Home/Trainee/showTrainee" class="current">学员列表</a></li>
            </ul>
        </li>

        <li><a href="/trainee/Admin/Project/addProject" class="nav-top-item">
            <!-- Add the class "current" to current menu item -->
            单位信息</a>
            <ul>
                <li><a href="/trainee/Home/Unit/showUnit">单位详情</a></li>
                <li><a href="/trainee/Home/Unit/updateUnit">修改信息</a></li>
                <li><a href="/trainee/Home/Unit/updatePwd" >修改密码</a></li>

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
<ul class="shortcut-buttons-set">
<li><a class="shortcut-button"
href="/trainee/Home/Trainee/addTrainee">
<span>
<img
src="/trainee/Application/admin/Common/resources/images/icons/pencil_48.png";
alt="icon"/><br/> 新增学员
</span></a></li>

</ul>
<!-- End .shortcut-buttons-set -->
<div class="clear"></div>
<!-- End .clear -->
<div class="content-box">
<!-- Start Content Box -->
<div class="content-box-header">
<h3 style="color: #0c0c0c">学员列表</h3>
<ul class="content-box-tabs">

</ul>
<div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
<div class="tab-content default-tab" id="tab1">
<!-- This is the target div. id must match the href of this div's tab -->

<table>
<thead>
<tr>
<th><input class="check-all" type="checkbox"/></th>
<th>学员姓名</th>
<th>性别</th>
<th>院系</th>
<th>职务</th>
<th>移动电话</th>
<th>固定电话</th>
<th>邮编</th>
<th>电子邮箱</th>
<th>地址</th>
<th>备注</th>
<th>操作</th>


</tr>
</thead>
<tfoot>
<tr>
<td colspan="6">
    <div class="bulk-actions align-left">
        <select name="batch_op" id="sel">
            <option value="option1" name="op">批量操作</option>
            <option value="delete" name="delete">删除</option>

        </select> <a class="button" href="#" onclick="batchDelete('batchDelete')">确定</a>
    </div>
    <div class="pagination">
       <?php echo ($page); ?>
    </div> <!-- End .pagination -->
    <div class="clear"></div>
</td>
</tr>
</tfoot>
<tbody>
<?php if(is_array($trainees)): $i = 0; $__LIST__ = $trainees;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$trainee): $mod = ($i % 2 );++$i;?><tr>

    <td><input type="checkbox" name="check" value="<?php echo ($trainee['id']); ?>"/></td>

    <td><?php echo ($trainee['tra_name']); ?>  </td>
    <td><?php echo ($trainee['tra_sex']); ?>  </td>
    <td><?php echo ($trainee['tra_depart']); ?>  </td>
    <td><?php echo ($trainee['tra_job']); ?>  </td>
    <td><?php echo ($trainee['tra_telephone']); ?>  </td>
    <td><?php echo ($trainee['tra_fixphone']); ?>  </td>
    <td><?php echo ($trainee['tra_zidcode']); ?>  </td>
    <td><?php echo ($trainee['tra_email']); ?>  </td>
    <td><?php echo ($trainee['tra_address']); ?>  </td>
    <td><?php echo ($trainee['tra_remark']); ?>  </td>

    <td><a
            href="/trainee/Home/Trainee/showDetailTrainee/trainee_id/<?php echo ($trainee['id']); ?>"
            title="Look"><img
            src="/trainee/Application/admin/Common/resources/images/icons/glass.png"
            alt="Look" height="18"></a>
         <a
            href="/trainee/Home/Trainee/updateTrainee/trainee_id/<?php echo ($trainee['id']); ?>"
            title="Edit"><img
            src="/trainee/Application/admin/Common/resources/images/icons/pencil.png"
            alt="Edit"/></a>

        <a
            href="/trainee/Home/Trainee/delete/trainee_id/<?php echo ($trainee['id']); ?>"
            title="Delete"><img
            src="/trainee/Application/admin/Common/resources/images/icons/cross.png"
            alt="Delete"/></a></td>

</tr><?php endforeach; endif; else: echo "" ;endif; ?>


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
<script type="text/javascript">

    function batchDelete(path) {
        if (select() == "delete") {
            obj = document.getElementsByName("check");
            var check_val ="";
            for (k in obj) {
                if (obj[k].checked)
                    check_val += obj[k].value+" " ;

            }
//无法传递数组类型，所以拆违string 传递
            $.post(path,
                    {data: check_val},
                    function (data) {
                        if(data==1){
                            alert('删除成功');
                            //刷新
                            location.reload();
                        }else{
                            alert('删除失败');
                            location.reload();
                        }

                    }
            );

            // alert(check_val);
        }
    }

    //判断批处理选中情况
    function select() {
        var result = $("#sel").val();
        return result;
    }



</script>
</body>
<!-- Download From www.exet.tk-->
</html>