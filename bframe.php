<!DOCTYPE html>
<style type="text/css">
	body {
		margin: 0;
		padding: 0;
	}
</style>
<head>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<?php
$store = (isset($_GET['s'])) ? $_GET['s'] : '';
$instagram = (isset($_GET['i'])) ? "&i={$_GET['i']}" : '';

switch ($store) {
	case 'bmine':
		?>
		<script src="http://test.be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'test.be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						// 헤시테그 메세지 전달 추가 2018-03-20 : messageEvent.data["hashtag"]
						var hashtag = '';
						if(messageEvent.data["hashtag"]) hashtag = messageEvent.data["hashtag"];
						document.getElementById("BframePopUp").src = 'http://test.be.show/bframe/popup/bmine?s=bmine&m=' + messageEvent.data["iframe"] + '&h=' + hashtag;
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://test.be.show/bframe/content/bmine?s=bmine<?php echo $instagram?>" frameborder="0" scrolling="no" style="width:1255px;height:739px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;
	case 'gaenso':
		?>
		<script src="http://test.be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'test.be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://test.be.show/bframe/popup/gaenso?s=gaenso&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://test.be.show/bframe/content/gaenso?s=gaenso" frameborder="0" scrolling="no" style="width:955px;height:739px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;






	case 'ssunny':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/ssunny?s=ssunny&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/ssunny?s=ssunny" frameborder="0" scrolling="no" style="width:1200px;height:739px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


			case 'iammari':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/iammari?s=iammari&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/iammari?s=iammari" frameborder="0" scrolling="no" style="width:1200px;height:739px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

			case '23pack':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/23pack?s=23pack&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/23pack?s=23pack" frameborder="0" scrolling="no" style="width:1200px;height:739px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

					case 'sweetglam':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/sweetglam?s=sweetglam&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/sweetglam?s=sweetglam" frameborder="0" scrolling="no" style="width:1200px;height:739px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

					case 'espoir':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				console.log(messageEvent);
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["solution"] == 'bframe' && messageEvent.data['wrapperClass'] == 'scrollFrame' && messageEvent.data["height"]) {
						document.getElementById('Bframe').style.height = messageEvent.data["height"] + 'px';
					}else if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/espoir?s=espoir&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<? if(isset($_GET['subFrame']) == false){ ?>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/espoir?s=espoir" frameborder="0" scrolling="no" style="width:1192px;height:1266px;position:relative;"></iframe>
		<? }else { ?>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/content?s=espoir&i=espoir_review&itemPaging=4&limit=4&isSlider=&wrapperClass=scrollFrame&isLoadSlide" frameborder="0" scrolling="no" style="height: 350px; width: 100%;"></iframe>
		<? } ?>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


							case 'shoesdeblanc':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/shoesdeblanc?s=shoesdeblanc&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/shoesdeblanc?s=shoesdeblanc" frameborder="0" scrolling="no" style="width:1200px;height:739px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


									case 'hotsunglass':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/hotsunglass?s=hotsunglass&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/hotsunglass?s=hotsunglass" frameborder="0" scrolling="no" style="width:1200px;height:739px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;



							case 'balibiki':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/balibiki?s=balibiki&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/balibiki?s=balibiki" frameborder="0" scrolling="no" style="width:100%;height:350px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


							case 'andar':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/andar?s=andar&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/andar?s=andar" frameborder="0" scrolling="no" style="width:1200px;height:739px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;



					case 'thedazejp':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/thedazejp?s=thedazejp&l=jp&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/thedazejp?s=thedazejp&l=jp" frameborder="0" scrolling="no" style="width:1200px;height:739px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;



					case 'littleblackjp':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/littleblackjp?s=littleblackjp&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/littleblackjp?s=littleblackjp" frameborder="0" scrolling="no" style="width:1100px;height:739px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;



					case 'cocoblacken':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/cocoblacken?s=cocoblacken&l=en&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/cocoblacken?s=cocoblacken&l=en" frameborder="0" scrolling="no" style="width:1200px;height:739px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


	case 'modernon':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/modernon?s=modernon&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/modernon?s=modernon" frameborder="0" scrolling="no" style="width:1100px;height:739px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


	case 'dailymonday':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/dailymonday?s=dailymonday&i=dailymonday_korea&debug=1&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/dailymonday?s=dailymonday&debug=1&i=dailymonday_korea" frameborder="0" scrolling="no" style="width:1020px;height:750px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;



		case 'luckyface':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/luckyface?s=luckyface&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/content?s=luckyface&i=luckyface_insta" frameborder="0" scrolling="no" style="width:1100px;height:739px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

				case 'secretkey':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/secretkey?s=secretkey&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/secretkey?s=secretkey" frameborder="0" scrolling="no" style="width:1100px;height:739px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


				case 'depuang':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/depuang?s=depuang&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/depuang?s=depuang" frameborder="0" scrolling="no" style="width:1100px;height:739px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


		case 'mossbean':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/mossbean?s=mossbean&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/mossbean?s=mossbean" frameborder="0" scrolling="no" style="width:1100px;height:739px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;



			case 'roanjane':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/roanjane?s=roanjane&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/roanjane?s=roanjane" frameborder="0" scrolling="no" style="width:1100px;height:739px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

					case 'commonunique':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/roanjane?s=commonunique&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/commonunique?s=commonunique" frameborder="0" scrolling="no" style="width:1100px;height:739px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

							case 'wexyou':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/wexyou?s=wexyou&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/wexyou?s=wexyou" frameborder="0" scrolling="no" style="width:1100px;height:739px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

									case 'dorosiwa':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/dorosiwa?s=dorosiwa&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/dorosiwa?s=dorosiwa" frameborder="0" scrolling="no" style="width:1100px;height:739px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;



case 'joliema':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/joliema?s=joliema&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/joliema?s=joliema" frameborder="0" scrolling="no" style="width:1100px;height:900px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;





	case 'sroom':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/sroom?s=sroom&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/sroom?s=sroom" frameborder="0" scrolling="no" style="width:1250px;height:1011px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'hansstyle':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/hansstyle?s=hansstyle&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/hansstyle?s=hansstyle" frameborder="0" scrolling="no" style="width:1150px;height:936px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'evajunie':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/evajunie?s=evajunie&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/evajunie?s=evajunie" frameborder="0" scrolling="no" style="width:1230px;height:645px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'bellissima':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/bellissima?s=bellissima&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/bellissima?s=bellissima" frameborder="0" scrolling="no" style="width:955px;height:534px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'skinisgood':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/skinisgood?s=skinisgood&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/skinisgood?s=skinisgood" frameborder="0" scrolling="no" style="width:955px;height:686px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'cherrykoko':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/cherrykoko?s=cherrykoko&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/cherrykoko?s=cherrykoko" frameborder="0" scrolling="no" style="width:955px;height:686px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'cherrykokocn':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/cherrykokocn?s=cherrykokocn&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/cherrykokocn?s=cherrykokocn" frameborder="0" scrolling="no" style="width:955px;height:686px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'lemite':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/lemite?s=lemite&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/lemite?s=lemite" frameborder="0" scrolling="no" style="width:1130px;height:574px;position:relative;z-index:100;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'jogunshop':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/jogunshop?s=jogunshop&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/jogunshop?s=jogunshop" frameborder="0" scrolling="no" style="width:955px;height:686px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'liphop':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/liphop?s=liphop&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/liphop?s=liphop" frameborder="0" scrolling="no" style="width:955px;height:686px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'hotping':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/hotping?s=hotping&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/hotping?s=hotping" frameborder="0" scrolling="no" style="width:955px;height:686px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'hotpingjp':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/hotpingjp?s=hotpingjp&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/hotpingjp?s=hotpingjp" frameborder="0" scrolling="no" style="width:955px;height:686px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'kclub':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/kclub?s=kclub&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/kclub?s=kclub" frameborder="0" scrolling="no" style="width:1150px;height:936px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'dint':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/dint?s=dint&debug_btn=<?=$_GET['debug_btn']?>&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/dint?s=dint&debug_btn=<?=$_GET['debug_btn']?>" frameborder="0" scrolling="no" style="width:1272px;height:1252px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'mocobling':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/mocobling?s=mocobling&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/mocobling?s=mocobling" frameborder="0" scrolling="no" style="width:1272px;height:1266px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'ippngirl':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/ippngirl?s=ippngirl&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/ippngirl?s=ippngirl" frameborder="0" scrolling="no" style="width:1370px;height:753px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'frombeginning':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/frombeginning?s=frombeginning&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/frombeginning?s=frombeginning" frameborder="0" scrolling="no" style="width:1200px;height:750px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'candyglow':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/candyglow?s=candyglow&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/candyglow?s=candyglow" frameborder="0" scrolling="no" style="width:1140px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case '11am':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/11am?s=11am&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/11am?s=11am" frameborder="0" scrolling="no" style="width:1260px;height:668px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'stylenanda':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						// 헤시테그 메세지 전달 추가 2018-03-20 : messageEvent.data["hashtag"]
						var hashtag = '';
						if(messageEvent.data["hashtag"]) hashtag = messageEvent.data["hashtag"];
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/stylenanda?s=stylenanda&debug=1&m=' + messageEvent.data["iframe"] + '&h=' + hashtag;
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/stylenanda?s=stylenanda" frameborder="0" scrolling="no" style="width:100%;height:373px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'stylenandajp':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/stylenandajp?s=stylenandajp&l=jp&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/stylenandajp?s=stylenandajp&l=jp" frameborder="0" scrolling="no" style="width:100%;height:373px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'iamyuri':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/iamyuri?s=iamyuri&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/iamyuri?s=iamyuri" frameborder="0" scrolling="no" style="width:1205px;height:686px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'gogosing':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/gogosing?s=gogosing&debug=1&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/gogosing?s=gogosing" frameborder="0" scrolling="no" style="width:1109px;height:686px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'ddaddadda':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/ddaddadda?s=ddaddadda&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/ddaddadda?s=ddaddadda" frameborder="0" scrolling="no" style="width:1298px;height:686px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;



	case 'theoro':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/theoro?s=theoro&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/theoro?s=theoro" frameborder="0" scrolling="no" style="width:1200px;height:712px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'mybany':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/mybany?s=mybany&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/mybany?s=mybany" frameborder="0" scrolling="no" style="width:1200px;height:865px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'yubsshop':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/yubsshop?s=yubsshop&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/yubsshop?s=yubsshop" frameborder="0" scrolling="no" style="width:1200px;height:909px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'pippin':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/pippin?s=pippin&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/pippin?s=pippin" frameborder="0" scrolling="no" style="width:1316px;height:772px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'peper':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/peper?s=peper&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/peper?s=peper" frameborder="0" scrolling="no" style="width:1235px;height:909px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


	case 'skinnypig':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/skinnypig?s=skinnypig&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/skinnypig?s=skinnypig" frameborder="0" scrolling="no" style="width:1100px;height:1137px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'dintstyle':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/dintstyle?s=dintstyle&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/dintstyle?s=dintstyle" frameborder="0" scrolling="no" style="width:1272px;height:1358px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'comeonvincent':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/comeonvincent?s=comeonvincent&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/comeonvincent?s=comeonvincent" frameborder="0" scrolling="no" style="width:1030px;height:849px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'paknamae':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/paknamae?s=paknamae&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/paknamae?s=paknamae" frameborder="0" scrolling="no" style="width:1240px;height:1358px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'sugarfun':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/sugarfun?s=sugarfun&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/sugarfun?s=sugarfun" frameborder="0" scrolling="no" style="width:1221px;height:1358px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'momnuri':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/momnuri?s=momnuri&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/momnuri?s=momnuri" frameborder="0" scrolling="no" style="width:1200px;height:689px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'minsshop':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/minsshop?s=minsshop&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/minsshop?s=minsshop" frameborder="0" scrolling="no" style="width:1200px;height:689px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case '2per':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/2per?s=2per&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/2per?s=2per" frameborder="0" scrolling="no" style="width:1305px;height:724px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'ain':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/ain?s=ain&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/ain?s=ain" frameborder="0" scrolling="no" style="width:1100px;height:724px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'ode':
		?>
		<script src="http://test.be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'test.be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://test.be.show/bframe/popup/ode?s=ode&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://test.be.show/bframe/content/ode?s=ode" frameborder="0" scrolling="no" style="width:1200px;height:705px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'monobarbie':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/monobarbie?s=monobarbie&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/monobarbie?s=monobarbie" frameborder="0" scrolling="no" style="width:1240px;height:819px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'sezwick':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/sezwick?s=sezwick&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/sezwick?s=sezwick" frameborder="0" scrolling="no" style="width:1240px;height:819px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'miamasvin':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/miamasvin?s=miamasvin&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe1');
				windowProxy1.addEventListener(onMessage);
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe2');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
<img src="//be.show/asset/img/bframe/miamasvin_miyu_topFrame_title.gif" usemap="#bframeTopMap">
<map name="bframeTopMap">
    <area shape="rect" coords="185, 15, 288, 32" href="https://www.instagram.com/miamasvin_miyu/" alt="miamasvin_miyu 인스타그램" />
    <area shape="rect" coords="185, 33, 288, 48" href="https://www.instagram.com/miamasvin.co.kr/" alt="miamasvin.co.kr 인스타그램" />
</map>
		<iframe id="Bframe1" name="Bframe1" src="http://be.show/bframe/content/content?s=miamasvin&limit=5&wrapperClass=topFrame&i=miamasvin_miyu&isLoadSlide=" frameborder="0" scrolling="no" style="height: 136px; width: 100%;"></iframe>
		<iframe id="Bframe2" name="Bframe2" src="http://be.show/bframe/content/content?s=miamasvin&limit=5&wrapperClass=topFrame&i=miamasvin.co.kr&isLoadSlide=" frameborder="0" scrolling="no" style="height: 65px; width: 100%;"></iframe>

		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'roompacker':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/roompacker?s=roompacker&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/roompacker?s=roompacker" frameborder="0" scrolling="no" style="width:1250px;height:736px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'chlodmanon':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/chlodmanon?s=chlodmanon&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/chlodmanon?s=chlodmanon" frameborder="0" scrolling="no" style="width:1218px;height:736px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'leandj':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/leandj?s=leandj&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/leandj?s=leandj" frameborder="0" scrolling="no" style="width:1225px;height:736px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'arima':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/arima?s=arima&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/arima?s=arima" frameborder="0" scrolling="no" style="width:1200px;height:736px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'shezgood':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/shezgood?s=shezgood&m=' + messageEvent.data["iframe"] + '&i=<?=$_GET['i']?>';
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/shezgood?s=shezgood&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="width:1260px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'secondedition':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/secondedition?s=secondedition&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/secondedition?s=secondedition" frameborder="0" scrolling="no" style="width:1300px;height:770px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'reflower':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/reflower?s=reflower&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/reflower?s=reflower" frameborder="0" scrolling="no" style="width:1260px;height:770px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'mombbe':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/mombbe?s=mombbe&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/mombbe?s=mombbe" frameborder="0" scrolling="no" style="width:1146px;height:770px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'somedayn':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/somedayn?s=somedayn&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/somedayn?s=somedayn" frameborder="0" scrolling="no" style="width:995px;height:454px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'pinkwonder':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/pinkwonder?s=pinkwonder&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/pinkwonder?s=pinkwonder" frameborder="0" scrolling="no" style="width:1200px;height:528px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'myblin_official':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/myblin?s=myblin&i=myblin_official&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/myblin?s=myblin&i=myblin_official" frameborder="0" scrolling="no" style="width:100%;height:725px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'myblin_muse':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/myblin?s=myblin&i=myblin_muse&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/myblin?s=myblin&i=myblin_muse" frameborder="0" scrolling="no" style="width:100%;height:725px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


	case 'unbutton':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/unbutton?s=unbutton&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/unbutton?s=unbutton" frameborder="0" scrolling="no" style="width:1050px;height:725px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'gildong':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/gildong?s=gildong&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/gildong?s=gildong" frameborder="0" scrolling="no" style="width:1200px;height:725px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'hellosweety':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/hellosweety?s=hellosweety&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/hellosweety?s=hellosweety" frameborder="0" scrolling="no" style="width:1280px;height:781px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'imvely':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/imvely?s=imvely&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/imvely?s=imvely" frameborder="0" scrolling="no" style="width:955px;height:686px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'happy10':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/happy10?s=happy10&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/happy10?s=happy10" frameborder="0" scrolling="no" style="width:1120px;height:677px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'dayel':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/dayel?s=dayel&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/dayel?s=dayel" frameborder="0" scrolling="no" style="width:1227px;height:755px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'pinksecret':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/pinksecret?s=pinksecret&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/pinksecret?s=pinksecret" frameborder="0" scrolling="no" style="width:1000px;height:677px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'gogobeach':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/gogobeach?s=gogobeach&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/gogobeach?s=gogobeach" frameborder="0" scrolling="no" style="width:1310px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'chuu':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/chuu?s=chuu&m=' + messageEvent.data["iframe"] + '&i=<?=$_GET['i']?>';
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/chuu?s=chuu&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="width:1260px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


			case 'hynt':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/hynt?s=hynt&m=' + messageEvent.data["iframe"] + '&i=<?=$_GET['i']?>';
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/hynt?s=hynt&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="width:1260px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


			case 'conella':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/conella?s=conella&m=' + messageEvent.data["iframe"] + '&i=<?=$_GET['i']?>';
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/conella?s=conella&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="width:1260px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


	case 'joosoon':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/joosoon?s=joosoon&m=' + messageEvent.data["iframe"] + '&i=<?=$_GET['i']?>';
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/joosoon?s=joosoon&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="width:1260px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;



			case 'bbanana':
		?>
		<script src="http://test.be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'test.be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://test.be.show/bframe/popup/bbanana?s=bbanana&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://test.be.show/bframe/content/bbanana?s=bbanana<?=$instagram?>" frameborder="0" scrolling="no" style="width:1260px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;




			case 'jbshop':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/jbshop?s=jbshop&m=' + messageEvent.data["iframe"] + '&i=<?=$_GET['i']?>';
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/jbshop?s=jbshop&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="width:1260px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


					case 'badblood':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/badblood?s=badblood&m=' + messageEvent.data["iframe"] + '&i=<?=$_GET['i']?>';
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/badblood?s=badblood&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="width:1260px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;






			case 'daysome':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/daysome?s=daysome&m=' + messageEvent.data["iframe"] + '&i=<?=$_GET['i']?>';
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/daysome?s=daysome&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="width:1360px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


			case 'loveloveme':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/loveloveme?s=loveloveme&m=' + messageEvent.data["iframe"] + '&i=<?=$_GET['i']?>';
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/loveloveme?s=loveloveme&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="width:1260px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;




	case 'shehj':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/shehj?s=shehj&m=' + messageEvent.data["iframe"] + '&i=<?=$_GET['i']?>';
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/shehj?s=shehj&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="width:1260px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;






			case 'colorfuldna':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/colorfuldna?s=colorfuldna&m=' + messageEvent.data["iframe"] + '&i=<?=$_GET['i']?>';
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/colorfuldna?s=colorfuldna&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="width:1260px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;





			case 'blingshop':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/blingshop?s=blingshop&m=' + messageEvent.data["iframe"] + '&i=<?=$_GET['i']?>';
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/blingshop?s=blingshop&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="width:1260px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


			case 'vivadaily':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/vivadaily?s=vivadaily&m=' + messageEvent.data["iframe"] + '&i=<?=$_GET['i']?>';
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/vivadaily?s=vivadaily&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="width:1260px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;




			case 'merongshop':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/merongshop?s=merongshop&l=jp&m=' + messageEvent.data["iframe"] + '&i=<?=$_GET['i']?>';
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/merongshop?s=merongshop&l=jp&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="width:1260px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


					case 'ainjp':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/ainjp?s=ainjp&l=jp&m=' + messageEvent.data["iframe"] + '&i=<?=$_GET['i']?>';
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/ainjp?s=ainjp&l=jp&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="width:1260px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;



			case 'melrosemood':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/melrosemood?s=melrosemood&m=' + messageEvent.data["iframe"] + '&i=<?=$_GET['i']?>';
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/melrosemood?s=melrosemood&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="width:1260px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


					case 'vividplan':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/vividplan?s=vividplan&m=' + messageEvent.data["iframe"] + '&i=<?=$_GET['i']?>';
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/vividplan?s=vividplan&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="width:1260px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;



			case 'bitwobin':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/bitwobin?s=bitwobin&m=' + messageEvent.data["iframe"] + '&i=<?=$_GET['i']?>';
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/bitwobin?s=bitwobin&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="width:1260px;height:860px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


	case 'mondaymarket':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/mondaymarket?s=mondaymarket&m=' + messageEvent.data["iframe"] + '&i=<?=$_GET['i']?>';
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/mondaymarket?s=mondaymarket&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="width:1260px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;




			case 'envylook':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/envylook?s=envylook&m=' + messageEvent.data["iframe"] + '&i=<?=$_GET['i']?>';
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/envylook?s=envylook&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="width:1260px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;



			case 'romistory':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/romistory?s=romistory&m=' + messageEvent.data["iframe"] + '&i=<?=$_GET['i']?>';
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/romistory?s=romistory&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="width:1260px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;





			case 'dcollect':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">

		window.addEventListener('message', receiveMessage, false);
		function receiveMessage(event) {
		    if (event.origin !== "http://be.show") return;
		    $("#Bframe").height(event.data);
		}
		var guestDomain='be.show';
		function onMessage(messageEvent){
		    if(messageEvent.origin=="http://"+guestDomain){
		        if(messageEvent.data["iframe"]){
		            document.body.style.overflow="hidden";
		            if($(window).width() >500 ){
		                document.getElementById("BframePopUp").src='http://be.show/bframe/popup/dcollect?s=dcollect&m='+messageEvent.data["iframe"];
		            }else{
		                document.location.href = 'http://' + guestDomain + '/bframe/popup/dcollect_m?s=dcollect&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
		            }
		            document.getElementById("BframePopUp").style.display="block";
		        }else{document.body.style.overflow="auto";document.getElementById("BframePopUp").style.display="none";document.getElementById("BframePopUp").src='';}}}
		var windowProxy1,windowProxy2;
		window.onload=function(){
		    windowProxy1=new Porthole.WindowProxy('http://'+guestDomain+'/proxy.html','Bframe');
		    windowProxy1.addEventListener(onMessage);
		    windowProxy2=new Porthole.WindowProxy('http://'+guestDomain+'/proxy.html','BframePopUp');
		    windowProxy2.addEventListener(onMessage);
		};

		</script>
		<div style="width: 1px; min-width:100%; *width: 100%; position:relative;">
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/dcollect?s=dcollect" frameborder="0" scrolling="no" style="width: 100%; position: relative;height:923px;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="border:0px;display:none;position:fixed;top:0px;left:-2px;width:100%;z-index:99999; border:0;"></iframe>
		<?
		break;


					case 'girlsdaily':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/girlsdaily?s=girlsdaily&m=' + messageEvent.data["iframe"] + '&i=<?=$_GET['i']?>';
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/girlsdaily?s=girlsdaily&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="width:1260px;height:1260px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


	case 'beshow_kr':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/beshow_kr?s=beshow_kr&m=' + messageEvent.data["iframe"] + '&i=<?=$_GET['i']?>';
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/beshow_kr?s=beshow_kr&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="width:1260px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


	case 'lalablanc':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/lalablanc?s=lalablanc&m=' + messageEvent.data["iframe"] + '&i=<?=$_GET['i']?>';
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/lalablanc?s=lalablanc&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="width:1260px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


			case 'locopie':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/locopie?s=locopie&m=' + messageEvent.data["iframe"] + '&i=<?=$_GET['i']?>';
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/locopie?s=locopie&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="width:1260px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;



			case 'millet':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/millet?s=millet&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/millet?s=millet" frameborder="0" scrolling="yes" style="width:100%;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;



			case 'mantory':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/mantory?s=mantory&m=' + messageEvent.data["iframe"] + '&i=<?=$_GET['i']?>';
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/mantory?s=mantory&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="width:1104px;height:543px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'vonze':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/vonze?s=vonze&m=' + messageEvent.data["iframe"] + '&i=<?=$_GET['i']?>';
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/vonze?s=vonze&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="width:1260px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

			case 'zemmaworldjp':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/zemmaworldjp?s=zemmaworldjp&m=' + messageEvent.data["iframe"] + '&i=<?=$_GET['i']?>';
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/zemmaworldjp?s=zemmaworldjp&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="width:1110px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;



	case 'surfersco':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/surfersco?s=surfersco&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/surfersco?s=surfersco" frameborder="0" scrolling="no" style="width:1603px;height:965px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


	case 'darkvictory':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/darkvictory?s=darkvictory&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/darkvictory?s=darkvictory" frameborder="0" scrolling="no" style="width:1100px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'ponyzn':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/ponyzn?s=ponyzn&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/ponyzn?s=ponyzn" frameborder="0" scrolling="no" style="width:1250px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'wconcept':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/wconcept?s=wconcept&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/wconcept?s=wconcept" frameborder="0" scrolling="no" style="width:976px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'justone':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/justone?s=justone&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/justone?s=justone" frameborder="0" scrolling="no" style="width:1200px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'rinibong':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/rinibong?s=rinibong&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/rinibong?s=rinibong" frameborder="0" scrolling="no" style="width:1200px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'meosidda':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/meosidda?s=meosidda&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/meosidda?s=meosidda" frameborder="0" scrolling="no" style="width:1260px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'tomonari':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/tomonari?s=tomonari&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/tomonari?s=tomonari" frameborder="0" scrolling="no" style="width:1300px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'crassiang':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/crassiang?s=crassiang&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/crassiang?s=crassiang" frameborder="0" scrolling="no" style="width:1250px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case '2lve':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/2lve?s=2lve&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/2lve?s=2lve" frameborder="0" scrolling="no" style="width:1278px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


	case 'thedalkom':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/thedalkom?s=thedalkom&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/thedalkom?s=thedalkom" frameborder="0" scrolling="no" style="width:1250px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'raonjena':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/raonjena?s=raonjena&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/raonjena?s=raonjena" frameborder="0" scrolling="no" style="width:1150px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case '4xtyle':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/4xtyle?s=4xtyle&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/4xtyle?s=4xtyle" frameborder="0" scrolling="no" style="width:1200px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'banibella':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/banibella?s=banibella&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/banibella?s=banibella" frameborder="0" scrolling="no" style="width:1400px;height:835px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'eranzi':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/eranzi?s=eranzi&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/eranzi?s=eranzi" frameborder="0" scrolling="no" style="width:1250px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'vivaruby':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/vivaruby?s=vivaruby&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/vivaruby?s=vivaruby" frameborder="0" scrolling="no" style="width:484px;height:477px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'blancnew':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/blancnew?s=blancnew&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/blancnew?s=blancnew" frameborder="0" scrolling="no" style="width:1100px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'dashu':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/dashu?s=dashu&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/dashu?s=dashu" frameborder="0" scrolling="no" style="width:1126px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'uptowngirl':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/uptowngirl?s=uptowngirl&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/uptowngirl?s=uptowngirl" frameborder="0" scrolling="no" style="width:1529px;height:1322px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'mominique':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/mominique?s=mominique&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/mominique?s=mominique" frameborder="0" scrolling="no" style="width:1000px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'makmaks':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/makmaks?s=makmaks&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/makmaks?s=makmaks" frameborder="0" scrolling="no" style="width:1280px;height:551px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'grimdiary':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/grimdiary?s=grimdiary&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/grimdiary?s=grimdiary" frameborder="0" scrolling="no" style="width:1000px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'pinpop':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/pinpop?s=pinpop&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/pinpop?s=pinpop" frameborder="0" scrolling="no" style="width:1170px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'bebeganic':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/bebeganic?s=bebeganic&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/bebeganic?s=bebeganic" frameborder="0" scrolling="no" style="width:1000px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'uuzone':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/uuzone?s=uuzone&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/uuzone?s=uuzone" frameborder="0" scrolling="no" style="width:1200px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'bonjourlady':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/bonjourlady?s=bonjourlady&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/bonjourlady?s=bonjourlady" frameborder="0" scrolling="no" style="width:1280px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'merryaround':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/merryaround?s=merryaround&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/merryaround?s=merryaround" frameborder="0" scrolling="no" style="width:1200px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'lfmall':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/lfmall?s=lfmall&i=a.t.corner&&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/lfmall?s=lfmall&i=a.t.corner" frameborder="0" scrolling="no" style="width:1510px;height:1167px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'a.t.corner':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/atcorner?s=lfmall&i=a.t.corner&&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/lfmall_atcorner?s=lfmall&i=a.t.corner" frameborder="0" scrolling="no" style="width:1510px;height:1658px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'ribbontie':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/ribbontie?s=ribbontie&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/ribbontie?s=ribbontie" frameborder="0" scrolling="no" style="width:100%;height:925px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'hiblogger':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/hiblogger?s=hiblogger&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/hiblogger?s=hiblogger" frameborder="0" scrolling="no" style="width:1280px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'magjay':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/magjay?s=magjay&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/magjay?s=magjay" frameborder="0" scrolling="no" style="width:1166px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0px;left:-2px;width:100%;height:100%;z-index:99999; border:none;"></iframe>
		<?
		break;

	case 'im3':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/im3?s=im3&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/im3?s=im3" frameborder="0" scrolling="no" style="width:100%;height:100%;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'gangnamladys':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/gangnamladys?s=gangnamladys&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/gangnamladys?s=gangnamladys" frameborder="0" scrolling="no" style="width:1200px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:67px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'nain':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/nain?s=nain&m=' + messageEvent.data["iframe"] + '&i=<?=$_GET['i']?>';
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/nain?s=nain&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="width:1260px;height:785px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'rolarola':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/nain?s=nain&i=rolarola.official&&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/rolarola?s=nain&i=rolarola.official" frameborder="0" scrolling="no" style="width:1356px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:67px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'vittz':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/vittz?s=vittz&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/vittz?s=vittz" frameborder="0" scrolling="no" style="width:1200px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:67px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'canmart':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/canmart?s=canmart&l=en&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/canmart?s=canmart&l=en" frameborder="0" scrolling="no" style="width:1200px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:67px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'undervi':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/undervi?s=undervi&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/undervi?s=undervi" frameborder="0" scrolling="no" style="width:1200px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:67px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


	case 'clicknfunny':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/clicknfunny?s=clicknfunny&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/clicknfunny?s=clicknfunny" frameborder="0" scrolling="no" style="width:1200px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:67px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


	case 'okdgg':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/okdgg?s=okdgg&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/okdgg?s=okdgg" frameborder="0" scrolling="no" style="width:1240px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:67px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'hnhn':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/hnhn?s=hnhn&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/hnhn?s=hnhn" frameborder="0" scrolling="no" style="width:1320px;height:808px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:67px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'cocoblack':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/cocoblack?s=cocoblack&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/cocoblack?s=cocoblack" frameborder="0" scrolling="no" style="width:1200px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'annpiona':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/annpiona?s=annpiona&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/annpiona?s=annpiona" frameborder="0" scrolling="no" style="width:1280px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:67px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'blackup':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/blackup?s=blackup&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/blackup?s=blackup" frameborder="0" scrolling="no" style="width:1100px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:67px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case '66girls':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/66girls?s=66girls&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/66girls?s=66girls" frameborder="0" scrolling="no" style="width:1010px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:67px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


			case '66girlsjp':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/66girlsjp?s=66girlsjp&l=jp&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/66girlsjp?s=66girlsjp&l=jp" frameborder="0" scrolling="no" style="width:1184px;height:930px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0px;left:-2px;width:100%;height:100%;z-index:99999; border:none;"></iframe>
		<?
		break;

	case 'gogosingjp':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/gogosingjp?s=gogosingjp&debug=1&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/gogosingjp?s=gogosingjp" frameborder="0" scrolling="no" style="width:1300px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'sistershu':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/sistershu?s=sistershu&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/sistershu?s=sistershu" frameborder="0" scrolling="no" style="width:1200px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:67px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'openingbutton':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/openingbutton?s=openingbutton&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/openingbutton?s=openingbutton" frameborder="0" scrolling="no" style="width:1100px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:67px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'thedaze':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/thedaze?s=thedaze&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/thedaze?s=thedaze" frameborder="0" scrolling="no" style="width:1180px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:67px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'danswer':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/danswer?s=danswer&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/danswer?s=danswer" frameborder="0" scrolling="no" style="width:1366px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:67px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'lulus':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/lulus?s=lulus&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/lulus?s=lulus" frameborder="0" scrolling="no" style="width:1260px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:67px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'thesienne':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/thesienne?s=thesienne&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/thesienne?s=thesienne" frameborder="0" scrolling="no" style="width:1200px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'hatson':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/hatson?s=hatson&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/hatson?s=hatson" frameborder="0" scrolling="no" style="width:1100px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case '9room':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/9room?s=9room&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/9room?s=9room" frameborder="0" scrolling="no" style="width:1240px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'hiphoper':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/hiphoper?s=hiphoper&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/hiphoper?s=hiphoper" frameborder="0" scrolling="no" style="width:1240px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'ahchoo':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/ahchoo?s=ahchoo&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/ahchoo?s=ahchoo" frameborder="0" scrolling="no" style="width:1460px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'shurub':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/shurub?s=shurub&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/shurub?s=shurub" frameborder="0" scrolling="no" style="width:1230px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


	case 'icecream12':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/icecream12?s=icecream12&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/icecream12?s=icecream12" frameborder="0" scrolling="no" style="width:1260px;height:1030px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'gosister':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/gosister?s=gosister&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/gosister?s=gosister" frameborder="0" scrolling="no" style="width:1000px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'gonyshop':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/gonyshop?s=gonyshop&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/gonyshop?s=gonyshop" frameborder="0" scrolling="no" style="width:1200px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


	case 'wizwid':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/wizwid?s=wizwid&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/wizwid?s=wizwid" frameborder="0" scrolling="no" style="width:100%;height:373px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'suecommabonnie':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/suecommabonnie?s=suecommabonnie&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/suecommabonnie?s=suecommabonnie" frameborder="0" scrolling="no" style="width:1200px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'supercommab':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/supercommab?s=supercommab&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/supercommab?s=supercommab" frameborder="0" scrolling="no" style="width:1200px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'chango':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/chango?s=chango&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/chango?s=chango" frameborder="0" scrolling="no" style="width:980px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


	case 'superstari':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/superstari?s=superstari&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/superstari?s=superstari" frameborder="0" scrolling="no" style="width:1200px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'nalrarikr':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/nalrarikr?s=nalrarikr&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/nalrarikr?s=nalrarikr" frameborder="0" scrolling="no" style="width:1200px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'bubbleandchic':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/bubbleandchic?s=bubbleandchic&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/bubbleandchic?s=bubbleandchic" frameborder="0" scrolling="no" style="width:1140px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'lovelyshoes':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/lovelyshoes?s=lovelyshoes&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/lovelyshoes?s=lovelyshoes" frameborder="0" scrolling="no" style="width:1110px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


	case 'lovelyshoes':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/lovelyshoes?s=lovelyshoes&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/lovelyshoes?s=lovelyshoes" frameborder="0" scrolling="no" style="width:1110px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'areaplus':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/areaplus?s=areaplus&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/areaplus?s=areaplus" frameborder="0" scrolling="no" style="width:1420px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'jellpe':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/jellpe?s=jellpe&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/jellpe?s=jellpe" frameborder="0" scrolling="no" style="width:1200px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'modernif':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/modernif?s=modernif&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/modernif?s=modernif" frameborder="0" scrolling="no" style="width:1175px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'buttonoff':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/buttonoff?s=buttonoff&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/buttonoff?s=buttonoff" frameborder="0" scrolling="no" style="width:1200px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'jeimish':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/jeimish?s=jeimish&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/jeimish?s=jeimish" frameborder="0" scrolling="no" style="width:1200px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'snipershop':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/snipershop?s=snipershop&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/snipershop?s=snipershop" frameborder="0" scrolling="no" style="width:1230px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'vividnco':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/vividnco?s=vividnco&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/vividnco?s=vividnco" frameborder="0" scrolling="no" style="width:1250px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'deden':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/deden?s=deden&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/deden?s=deden" frameborder="0" scrolling="no" style="width:1000px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'bullanggirl':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/bullanggirl?s=bullanggirl&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/bullanggirl?s=bullanggirl" frameborder="0" scrolling="no" style="width:1150px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'bullanggirljp':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/bullanggirljp?s=bullanggirljp&l=jp&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/bullanggirljp?s=bullanggirljp&l=jp" frameborder="0" scrolling="no" style="width:1150px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'ssomuch':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/ssomuch?s=ssomuch&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/ssomuch?s=ssomuch" frameborder="0" scrolling="no" style="width:1150px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'thezam':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/thezam?s=thezam&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/thezam?s=thezam" frameborder="0" scrolling="no" style="width:1210px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'reticella':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/reticella?s=reticella&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/reticella?s=reticella" frameborder="0" scrolling="no" style="width:1300px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'hwangbarbie':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/hwangbarbie?s=hwangbarbie&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/hwangbarbie?s=hwangbarbie" frameborder="0" scrolling="no" style="width:1200px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'realyellow':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/realyellow?s=realyellow&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/realyellow?s=realyellow" frameborder="0" scrolling="no" style="width:1200px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'therethere':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/therethere?s=therethere&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/therethere?s=therethere" frameborder="0" scrolling="no" style="width:1200px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'nanasalon':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/nanasalon?s=nanasalon&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/nanasalon?s=nanasalon" frameborder="0" scrolling="no" style="width:1238px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'obbangstyle':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/obbangstyle?s=obbangstyle&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/obbangstyle?s=obbangstyle" frameborder="0" scrolling="no" style="width:1300px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'kikiko':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/kikiko?s=kikiko&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/kikiko?s=kikiko" frameborder="0" scrolling="no" style="width:1200px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'holicholic':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/holicholic?s=holicholic&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/holicholic?s=holicholic" frameborder="0" scrolling="no" style="width:1200px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'hypnotic':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/hypnotic?s=hypnotic&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/hypnotic?s=hypnotic" frameborder="0" scrolling="no" style="width:1218px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'shoemaru':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/shoemaru?s=shoemaru&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/shoemaru?s=shoemaru" frameborder="0" scrolling="no" style="width:1232px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'canmartkr':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/canmartkr?s=canmartkr&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/canmartkr?s=canmartkr" frameborder="0" scrolling="no" style="width:1168px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'loloten':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/loloten?s=loloten&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/loloten?s=loloten" frameborder="0" scrolling="no" style="width:1310px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'abbamart':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/abbamart?s=abbamart&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/abbamart?s=abbamart" frameborder="0" scrolling="no" style="width:1300px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'laurenhi':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/laurenhi?s=laurenhi&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/laurenhi?s=laurenhi" frameborder="0" scrolling="no" style="width:1200px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'roem':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/roem?s=roem&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/roem?s=roem" frameborder="0" scrolling="no" style="width:1080px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'lumissy':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/lumissy?s=lumissy&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/lumissy?s=lumissy" frameborder="0" scrolling="no" style="width:1100px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'mutnam':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/mutnam?s=mutnam&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/mutnam?s=mutnam" frameborder="0" scrolling="no" style="width:1200px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'tamnana':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/tamnana?s=tamnana&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/tamnana?s=tamnana" frameborder="0" scrolling="no" style="width:1100px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'kormarch':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/kormarch?s=kormarch&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/kormarch?s=kormarch" frameborder="0" scrolling="no" style="width:1000px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


	case 'firstj':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/firstj?s=firstj&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/firstj?s=firstj" frameborder="0" scrolling="no" style="width:1190px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'realcoco':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/realcoco?s=realcoco&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/realcoco?s=realcoco" frameborder="0" scrolling="no" style="width:1254px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


	case 'benito':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/benito?s=benito&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/benito?s=benito" frameborder="0" scrolling="no" style="width:1250px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'benign':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/benign?s=benign&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/benign?s=benign" frameborder="0" scrolling="no" style="width:1100px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;

	case 'wonlog':
		?>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var guestDomain = 'be.show';
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.body.style.overflow = "hidden";
						document.getElementById("BframePopUp").src = 'http://be.show/bframe/popup/wonlog?s=wonlog&m=' + messageEvent.data["iframe"];
						document.getElementById("BframePopUp").style.display = "block";
					}
					else {
						document.body.style.overflow = "auto";
						document.getElementById("BframePopUp").style.display = "none";
						document.getElementById("BframePopUp").src = '';
					}
				}
			}

			var windowProxy1, windowProxy2;
			window.onload = function() {
				windowProxy1 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'Bframe');
				windowProxy1.addEventListener(onMessage);

				windowProxy2 = new Porthole.WindowProxy('http://' + guestDomain + '/proxy.html', 'BframePopUp');
				windowProxy2.addEventListener(onMessage);
			};
		</script>
		<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/wonlog?s=wonlog" frameborder="0" scrolling="no" style="width:1200px;height:714px;position:relative;"></iframe>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:0;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<?
		break;


}
?>
</html>
