<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="robots" content="noindex, nofollow">
		<meta name="googlebot" content="noindex, nofollow">
		<script type="text/javascript" src="/js/lib/dummy.js"></script>
		<link rel="stylesheet" type="text/css" href="/css/result-light.css">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.4/angular.js"></script>
		<script type="text/javascript" src="https://angular-file-upload.appspot.com/js/ng-file-upload-shim.js"></script><style type="text/css"></style>
		<script type="text/javascript" src="https://angular-file-upload.appspot.com/js/ng-file-upload.js"></script>
</head>
	<body ng-app="fileUpload" ng-controller="MyCtrl">
		<h4>Upload on file select</h4>
		<button type="file" ngf-select="uploadFiles($file, $invalidFiles)" accept="image/*" ngf-max-height="1000" ngf-max-size="1MB">
			Select File</button>
		<br />
		<br />

		File:
<!--		<div style="font:smaller">{{f.name}} {{errFile.name}} {{errFile.$error}} {{errFile.$errorParam}}-->
<!--            <span class="progress" ng-show="f.progress >= 0">-->
<!--        <div style="width:{{f.progress}}%" ng-bind="f.progress + '%'"></div>-->
<!--      </span>-->
<!--		</div>-->

		{{errorMsg}}

	</body>
</html>