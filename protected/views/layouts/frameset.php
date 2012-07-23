<?php $menuurl = Yii::app()->createUrl('/site/menu');?>
<?php $contenturl = Yii::app()->createUrl('/site/login');?>
<?php $footerurl = Yii::app()->createUrl('/site/footer');?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="en" />
<link rel="stylesheet" type="text/css" href="<?php echo  Yii::app()->request->baseUrl; ?>/css/main.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
<title><?php echo $this->pageTitle; ?></title>
</head>

<frameset id="myframeset" rows="40%,36%,*" frameborder=0 noresize framespacing=0>
<frame src="http://p3d.in/e/YjWQL" frameborder="0" height="300" width="400" allowtransparency="true"></frame>
<frame frameborder=0 name="main" src="<?=$contenturl?>" marginwidth="0" marginheight="0" >
<frame frameborder=0 name="footer"  noresize src="<?=$footerurl?>" marginwidth="0" marginheight=0>
</frameset>

</html>