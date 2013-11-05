<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/plugin.css" />

	<title>HRMS Admin</title>
</head>

<body>

    <div id="wrapper" class="clearfix">

        <div id="top">
            <div id="header">
                <div><img src="images/logo.png" style="margin-left: 20px; margin-top: 20px;"/></div>

                <div id="info">
                    <h4>Welcome James</h4>

                    <p>
                        Logged in as Admin
                        <br />
                        You have <a href="javascript:;">5 messages</a>
                    </p>

                    <img src="images/avatar.jpg" alt="avatar" />
                </div> <!-- #info -->

            </div> <!-- #header -->

        </div><!-- header -->



        <div id="nav">

            <ul class="mega-container mega-grey">

                <li class="mega">

                    <a href="./?r=site/login" class="mega-tab">
                        Dashboard2
                    </a>

                </li>

                <li class="mega">

                    <a href="javascript:;" class="mega-tab">
                        General
                    </a>

                    <div class="mega-content mega-menu ">
                        <ul>
                            <li><a href="Organization1.html">Organization</a></li>
                            <li><a href="BranchList.html">Branch</a></li>
                            <li><a href="Division.html">Division / Department</a></li>
                        </ul>
                    </div>

                </li>

                <li class="mega">

                    <a href="javascript:;" class="mega-tab hasSub">Recruitment</a>

                    <div class="mega-content mega-menu ">

                        <ul>
                            <li><a href="CandidateCV.html">Candidate CV</a></li>
                            <li><a href="jobpostpanel.html">JOb Vacancy</a></li>
                            <li><a href="Interview.html">Interview Process</a></li>
                            <li>
                                <a href="">Shortlisting</a>

                                <ul>
                                    <li><a href="candidateshortlist.html">Candidate wise Shortlist</a></li>
                                    <li><a href="CallforShortlist.html">Call forShortlist</a></li>
                                    <li><a href="InterviewedShortlist.html">Interviewed forShortlist</a></li>
                                </ul>
                            </li>
                            <li><a href="Recruitment.html">Recruitment</a></li>
                        </ul>
                    </div>

                </li>

                <li class="mega">

                    <a href="javascript:;" class="mega-tab hasSub">Staffs</a>

                    <div class="mega-content mega-menu ">

                        <ul>
                            <li><a href="staffs.html">Staff Details</a></li>
                            <li><a href="StaffTransfer.html">Staff Transfer</a></li>
                            <li><a href="StaffPerformance.html">Staff Training / Performance</a></li>
                            <li><a href="WorkTimeLogger.html">Activity Log</a></li>
                            <li><a href="StaffPerformance.html">Staff Perfomance</a></li>
                            <li><a href="SalaryStmt.html">Salary Statement</a></li>
                            <li><a href="ActivityLog.html">Work Time Logger</a></li>

                        </ul>
                    </div>

                </li>

                <li class="mega">

                    <a href="javascript:;" class="mega-tab hasSub">Payroll</a>

                    <div class="mega-content mega-menu ">

                        <ul>
                            <li><a href="Attendance.html">Attendance</a></li>
                            <li><a href="LoanAdvance.html">Loan / Advance</a></li>
                            <li><a href="SalarySettings.html">Salary Settings</a></li>
                            <li><a href="AppraisalManagement.html">Appraisal Management</a></li>

                        </ul>
                    </div>

                </li>

                <li class="mega">

                    <a href="javascript:;" class="mega-tab hasSub">Reports</a>

                    <div class="mega-content mega-menu ">

                        <ul>
                            <li><a href="rptSalarySlip.html">Salary Slip</a></li>

                            <li>
                                <a href="" class="hasSub">Performance</a>

                                <ul>
                                    <li><a href="StaffPerformance.html">Staff wise Performance</a></li>
                                    <li><a href="DepartmentPerformance.html">Dept wise Performance</a></li>
                                    <li><a href="OverallPerformance.html">Overall Performance</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="">IT Statement</a>

                                <ul>
                                    <li><a href="StaffITStmt.html">Staffs IT Statement</a></li>
                                    <li><a href="OverallITStmt.html">Overall IT Statement</a></li>
                                </ul>
                            </li>


                        </ul>

                    </div>

                </li>

            </ul>

        </div> <!-- #nav -->

        <div id="content" class="xfluid">

            <?php if(isset($this->breadcrumbs)):?>
                <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links'=>$this->breadcrumbs,
                )); ?><!-- breadcrumbs -->
            <?php endif?>

            <?php echo $content; ?>

            <div class="clear"></div>

        </div> <!-- #content -->


        <div id="footer">

            <p>Copyright &copy; 2013 <a href="http://jksinfotech.com" style="text-decoration:none;">JKS Info Tech Pvt Ltd</a>, all rights reserved.</p>

        </div>  <!-- #footer -->

    </div><!-- wrapper -->

<script  type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery/jquery.1.4.2.min.js"></script>
<script  type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/slate/slate.js"></script>
<script  type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/slate/slate.portlet.js"></script>
<script  type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/plugin.js"></script>


<script type="text/javascript" charset="utf-8">
    $(function ()
    {
        slate.init ();
        slate.portlet.init ();
    });
</script>

</body>
</html>