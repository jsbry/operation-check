<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
</head>
<body>

<?php
define("DS", DIRECTORY_SEPARATOR);
$green = "data:image/png;base64,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";
$red = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMwAAADMCAYAAAA/IkzyAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsIAAA7CARUoSoAAAAVDSURBVHhe7dk7YhNJGIVRzBKIh2zY/4IIiYcteBCWQJb16Kvuqq7HOQnO9X+63eLl9ZdPVPXz67fjX+t8+fH9+Be1CKaArYJYS1DbE8xKrcSxlIjWEUyot0AeEVBGMA+MFsgjArpPMFfMFskt4vlIMGeEcp1w/po+GJFkZo9nymBEso0Z45kqGKGUMVM4UwQjlDpmCGfoYISyj5HDGTIYobRhxHCGCkYobRopnM/Hf7snlnaN9Nl0vzBC6Uvva9N1MGLpV6/hdBmMUMbQYzTdvcOIZRw9fpbdLIxQxtbL2nSxMGIZXy+fcfPBiGUePXzWzT6SCWVurT6iNbkwYqHVG2guGLFw0uItNBWMWLjU2k00E4xYuKWl22jipV8sLLX3jwG7BiMUnrFnNLs9komFZ+15O7sEIxbW2uuGqgcjFrayxy019bMypGpHUzUY60LvqgUjFkqpeVtVghELpdW6seLBiIVaatxa0WDEQm2lb65YMGJhLyVvr9pLP9RUKpoiwVgXRrV5MGKhFSVucdNgxEJrtr5J7zAQ2CwY60KrtrzNTYIRC63b6kY9kjGNLaJZHYx1YSarghELvVl7sx7JIPB0MNaFXq253aeCEQu9e/aGPZJBIA7GujCKZ27ZwkAgCsa6MJr0pi0MBBYHY10YVXLbFgYCi4KxLoxu6Y1bGAg8DMa6MIslt25hICAYCNwNxuMYs3l08xYGAoKBC/dW5mYwHsfgIwsDgavBWBdmd6sBCwMBwUDgQzAex+DNtRYsDAQEAwHBQOBdMN5f4L3LJiwMBAQDAcFA4E8w3l/guvM2LAwEBAMBwUBAMBD4HYwXfrjv1IiFgYBgICAYCAgGAoKBgGBgocMvZYKBwMt///z7evwbeMDCQEAwEBAMBAQDAcFAQDAQEAwEBAMBwUBAMBAQDAQEAwHBQEAwEBAMBAQDAcFA4POXH9+PfwKPWBhY6DAugoGAYCAgGAgIBgKCgYBgIPA7GP8XA/edGrEwEBAMBAQDAcFA4E8wXvzhuvM2LAwEBAMBwUDgXTDeY+C9yyYsDAQEAwHBQOBDMN5j4M21FiwMBAQDgavBeCxjdrcasDAQEAwEbgbjsYxZ3bt9CwOBu8FYGWbz6OYtDAQEA4GHwXgsYxZLbt3CQGBRMFaG0S29cQsDgcXBWBlGldy2hYFAFIyVYTTpTVsYCMTBWBlG8cwtWxgIPBWMlaF3z97w0wsjGnq15nY9kkFgVTBWht6svdnVCyMaZuKRjGls8eW+STBWhtZtdaObLYxomIFHMoa35Zf5psFYGVqz9U1uvjCioRUlbrHII5loGJV3GIZU6ku7WDBWhr2UvL2iCyMaait9c8UfyURDLTVurco7jGgordaNVXvpFw0jqBbMgWgooeZdVQ0Gtlb7S7h6MFaGrexxS7ssjGhYa68b2u2RTDQ8a8/b2fUdRjSk9r6Zl9dfjn/v6ufXb8e/4KNWvlyb+ZXM2nBLS7fRTDAHouFSazfRVDAHouGkxVtoLpgD0dDqDTQZzIFo5tXyZ9/Mr2T3+AVtDj18STa7MOeszfh6+Yy7WJhz1mY8PX0hdhfMgWjG0OOTQxePZJc8ovWv18+wy4U5Z2360vuXXffBnAinbaM8FXT5SHaNx7R2jfTZDLMw56xNG0b8EhsymBPh7GPktR86mBPh1DHDY/EUwZwIp4yZ3h+nCuZEONuYKZSTKYM5J57MjJGcmz6YE+HcN3soJ4K5QjxvRPKRYB6YLR6R3CeY0GgBCSQjmJV6C0gg6wimgFYiEsf2BFNZiZiEUcunT/8D6D0HirAaMXsAAAAASUVORK5CYII=";

$permissionCheckList = array(
	// test
	"test" => array(
		"path" => ".",
		"permission" => "0777",
	),
);
?>
	<div style="width: 100%;">

		<?php foreach($permissionCheckList as $target => $value): ?>
		<p>
			<span><?php echo $target; ?>：</span>
<?php if(!file_exists($value["path"])): ?>
				<img src="<?php echo $red; ?>" width="25px" height="25px" style="vertical-align:middle;" alt="error" />
				&ensp;No such file or directory
<?php else: ?>
	<?php $file_permission =  substr(sprintf('%o', fileperms($value["path"])), -4); ?>
	<?php if($file_permission == $value["permission"]): ?>
				<img src="<?php echo $green; ?>" width="25px" height="25px" style="vertical-align:middle;" alt="success" />
	<?php else: ?>
				<img src="<?php echo $red; ?>" width="25px" height="25px" style="vertical-align:middle;" alt="error" />
				&ensp;<?php echo $file_permission; ?>&ensp; => <?php echo $value["permission"]; ?>
	<?php endif; ?>
<?php endif; ?>
		</p>
		<?php endforeach; ?>

	</div>
</body>
</html>