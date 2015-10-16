<?
$page = $_GET['p'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PolyQuiz</title>
<script src="bower_components/skel/dist/skel.min.js"></script>
<script src="bower_components/skel/dist/skel-layout.min.js"></script>
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic">
<script>
skel.breakpoints({
	xlarge: "(max-width: 1680px)",
	large:  "(max-width: 1280px)",
	medium: "(max-width: 980px)",
	small:  "(max-width: 736px)",
	xsmall: "(max-width: 580px)",
	xxsmall: "(max-width: 480px)",
	xxxsmall: "(max-width: 360px)"
});
skel.layout({
	reset: "full",
	grid: {
		gutters: "40px"
	},
	containers: true,
	conditionals: true,
	breakpoints: {
		large: {
			containers: "95%"
		},
		medium: {
			containers: "95%",
			grid: {
				gutters: "30px"
			}
		},
		small: {
			containers: "95%",
			grid: {
				gutters: "20px"
			}
		},
		xsmall: {
			grid: {
				gutters: "10px"
			}
		},
		xxsmall: {
			grid: {
				gutters: "5px"
			}
		},
		xxxsmall: {
			containers: "100%"
		}
	}
});
</script>
<script src="bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<link rel="import" href="elements/polygrades-page.htm">
<link rel="import" href="bower_components/paper-radio-button/paper-radio-button.html">
<link rel="import" href="bower_components/paper-radio-group/paper-radio-group.html">
<link rel="import" href="bower_components/iron-selector/iron-selector.html">
<link rel="import" href="bower_components/iron-selector/iron-selectable.html">
<link rel="import" href="bower_components/iron-icons/image-icons.html">
<link rel="import" href="bower_components/iron-form/iron-form.html">
<link rel="import" href="bower_components/paper-material/paper-material.html">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />

<script src="bower_components/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.PluginManager.load('equationeditor', '/js/equationeditor/plugin.min.js');
tinymce.init({
	selector: "textarea.mce",
	plugins: [
	<?
	if($page=="takequiz" || $page=="home"){
		?>
		 "autolink link lists charmap spellchecker",
		 "searchreplace wordcount fullscreen",
		 "table contextmenu paste textcolor equationeditor"
		 <?
	} else {
		?>
		 "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
		 "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
		 "save table contextmenu directionality emoticons template paste textcolor equationeditor"
		<?
	}
	?>
   ],
   toolbar: ['undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | equationeditor'],
   content_css: '/js/mathquill-foraker/mathquill.css'
 });
</script>
<style is="custom-style">
	body{
		font-family: Roboto;
	}
	:root {
		--dark-primary-color:       #1976D2;
		--default-primary-color:    #2196F3;
		--light-primary-color:      #BBDEFB;
		--text-primary-color:       #FFFFFF;
		--accent-color:             #8BC34A;
		--primary-background-color: #BBDEFB;
		--primary-text-color:       #212121;
		--secondary-text-color:     #727272;
		--disabled-text-color:      #BDBDBD;
		--divider-color:            #B6B6B6;
		
		
		/* Components */
		
		/* paper-drawer-panel */
		--drawer-menu-color:           #ffffff;
		--drawer-border-color:         1px solid #ccc;
		--drawer-toolbar-border-color: 1px solid rgba(0, 0, 0, 0.22);
		
		/* paper-menu */
		--paper-menu-background-color: #fff;
		--menu-link-color:             #111111;
		
		/* paper-input */
		/*
		--paper-input-container-color: rgba(0,0,0,0.75);
		--paper-input-container-focus-color: #2196F3;
		*/
		--paper-menu-selected-item: {
			color: #2196F3;
		}
	}

	.list {
		padding-top: 12px;
		background-color: white;
		display: inline-block;
		width: 240px;
		height: 228px;
		margin: 12px;
		@apply(--shadow-elevation-2dp);
	}
	.sidebarlist {
		/* @apply(--shadow-elevation-2dp); */
	}
	.homepagecontent {
		padding: 10px;
		margin: 10px;
	}
	paper-material {
		margin-top: 10px;
		margin-bottom: 10px;
		background-color: white;
	}
		
</style>
</head>
<body>
<polygrades-page></polygrades-page>
</body>
</html>