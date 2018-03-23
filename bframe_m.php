<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<style type="text/css">
	body {
		margin: 0;
		padding: 0;
	}
</style>
<?php
// 상점아아디 를 받아온다.
$store = (isset($_GET['s'])) ? $_GET['s'] : '';	// 상점
$instagram = (isset($_GET['i'])) ? "&i={$_GET['i']}" : ''; // 인스타그램

/*
브렌치 테스트
*/
$test = $_GET['t'];
echo $test;

switch ($store) {
	// 테스트 상점을 위한 처리
	case 'bmine':
		?>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width: 1px; min-width:100%; *width: 100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://test.be.show/bframe/content/bmine_m?s=bmine" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://test.be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'test.be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						// 2018-03-20 헤시테그 메세지 전달 추가 : messageEvent.data["hashtag"]
						var hashtag = '';
						if(messageEvent.data["hashtag"]) hashtag = messageEvent.data["hashtag"];	// 해시테그
						document.location.href = 'http://' + guestDomain + '/bframe/popup/bmine_m?s=bmine&m=' + messageEvent.data["iframe"] + '&h=' + hash_tag + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'gaenso':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/gaenso_m?s=gaenso" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/gaenso_m?s=gaenso&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

			case 'ssunny':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/ssunny_m?s=ssunny" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/ssunny_m?s=ssunny&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

					case 'thedazejp':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/thedazejp_m?s=thedazejp" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/thedazejp_m?s=thedazejp&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


						case 'beshow_kr':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/beshow_kr_m?s=beshow_kr" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/beshow_kr_m?s=beshow_kr&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


						case 'hotsunglass':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/hotsunglass_m?s=hotsunglass" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/hotsunglass_m?s=hotsunglass&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;



					case 'iammari':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/iammari_m?s=iammari" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/iammari_m?s=iammari&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


							case '23pack':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/23pack_m?s=23pack" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/23pack_m?s=23pack&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

									case 'locopie':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/locopie_m?s=locopie" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/locopie_m?s=locopie&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


											case 'lalablanc':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/lalablanc_m?s=lalablanc" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/lalablanc_m?s=lalablanc&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


									case 'sweetglam':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/sweetglam_m?s=sweetglam" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/sweetglam_m?s=sweetglam&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;



							case 'shoesdeblanc':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/shoesdeblanc_m?s=shoesdeblanc" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/shoesdeblanc_m?s=shoesdeblanc&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


					case 'andar':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/andar_m?s=andar" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/andar_m?s=andar&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


							case 'espoir':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/espoir_m?s=espoir" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/espoir_m?s=espoir&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;




							case 'littleblackjp':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/littleblackjp_m?s=littleblackjp" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/littleblackjp_m?s=littleblackjp&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

					case 'secretkey':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/secretkey_m?s=secretkey" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/secretkey_m?s=secretkey&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


							case 'depuang':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/depuang_m?s=depuang" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/depuang_m?s=depuang&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


					case 'cocoblacken':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/cocoblacken_m?s=cocoblacken&l=en" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/cocoblacken_m?s=cocoblacken&l=en&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


			case 'mossbean':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/mossbean_m?s=mossbean" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/mossbean_m?s=mossbean&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


	case 'mossbean':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/mossbean_m?s=mossbean" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/mossbean_m?s=mossbean&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

			case 'wexyou':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/wexyou_m?s=wexyou" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/wexyou_m?s=wexyou&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


					case 'balibiki':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/balibiki_m?s=balibiki" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/balibiki_m?s=wexyou&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;



					case 'dorosiwa':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/dorosiwa_m?s=dorosiwa" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/dorosiwa_m?s=dorosiwa&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


			case 'danoshop':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/danoshop_m?s=danoshop" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/danoshop_m?s=danoshop&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


			case 'fashionfull':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/fashionfull_m?s=fashionfull" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/fashionfull_m?s=fashionfull&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;



			case 'oddgallery':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/oddgallery_m?s=oddgallery" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/oddgallery_m?s=oddgallery&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;




			case 'luckyface':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/luckyface_m?s=luckyface" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/luckyface_m?s=luckyface&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;





			case 'gaenso':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/gaenso_m?s=gaenso" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/gaenso_m?s=gaenso&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


			case 'roanjane':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/roanjane_m?s=roanjane" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/roanjane_m?s=roanjane&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


			case 'modernon':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/modernon_m?s=modernon" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/modernon_m?s=modernon&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


					case 'commonunique':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/commonunique_m?s=commonunique" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/commonunique_m?s=commonunique&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


			case 'joliema':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/joliema_m?s=joliema" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/joliema_m?s=joliema&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;






	case 'sroom':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/sroom_m?s=sroom" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/sroom_m?s=sroom&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'hansstyle':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/hansstyle_m?s=hansstyle" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/hansstyle_m?s=hansstyle&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'evajunie':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/evajunie_m?s=evajunie" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/evajunie_m?s=evajunie&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'bellissima':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/bellissima_m?s=bellissima" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/bellissima_m?s=bellissima&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'skinisgood':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/skinisgood_m?s=skinisgood" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/skinisgood_m?s=skinisgood&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'cherrykoko':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/cherrykoko_m?s=cherrykoko" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/cherrykoko_m?s=cherrykoko&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'cherrykokocn':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/cherrykokocn_m?s=cherrykokocn" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/cherrykokocn_m?s=cherrykokocn&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'lemite':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/lemite_m?s=lemite" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/lemite_m?s=lemite&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'jogunshop':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="positio:relative;width:100%;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/jogunshop_m?s=jogunshop" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/jogunshop_m?s=jogunshop&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'liphop':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="positio:relative;width:100%;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/liphop_m?s=liphop" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/liphop_m?s=liphop&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'hotping':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/hotping_m?s=hotping" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/hotping_m?s=hotping&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'hotpingjp':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/hotpingjp_m?s=hotpingjp" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/hotpingjp_m?s=hotpingjp&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'kclub':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/kclub_m?s=kclub" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/kclub_m?s=kclub&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'dint':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/dint_m?s=dint&debug_btn=<?=$_GET['debug_btn']?>" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/dint_m?s=dint&debug_btn=<?=$_GET['debug_btn']?>&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;



	case 'mocobling':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/mocobling_m?s=mocobling" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/mocobling_m?s=mocobling&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'ippngirl':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/ippngirl_m?s=ippngirl" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/ippngirl_m?s=ippngirl&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'frombeginning':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/frombeginning_m?s=frombeginning" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/frombeginning_m?s=frombeginning&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'candyglow':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/candyglow_m?s=candyglow" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/candyglow_m?s=candyglow&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case '11am':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/11am_m?s=11am" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/11am_m?s=11am&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'stylenanda':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/stylenanda_m?s=stylenanda" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%; min-height: 400px;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						// 헤시테그 메세지 전달 추가 2018-03-20 : messageEvent.data["hashtag"]
						var hashtag = '';
						if(messageEvent.data["hashtag"]) hashtag = messageEvent.data["hashtag"];
						document.location.href = 'http://' + guestDomain + '/bframe/popup/stylenanda_m?s=stylenanda&m=' + messageEvent.data["iframe"] + '&h=' + hashtag + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'stylenandajp':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/stylenanda_m?s=stylenandajp&l=jp" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%; min-height: 400px;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/stylenandajp_m?s=stylenandajp&l=jp&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'iamyuri':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/iamyuri_m?s=iamyuri" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%; min-height: 400px;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/iamyuri_m?s=iamyuri&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'gogosing':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/gogosing_m?s=gogosing" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%; min-height: 400px;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/gogosing_m?s=gogosing&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'ddaddadda':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/ddaddadda_m?s=ddaddadda" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%; min-height: 400px;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/ddaddadda_m?s=ddaddadda&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


	case 'theoro':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/theoro_m?s=theoro" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%; min-height: 400px;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/theoro_m?s=theoro&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'mybany':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/mybany_m?s=mybany" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%; min-height: 400px;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/mybany_m?s=mybany&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'yubsshop':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/yubsshop_m?s=yubsshop" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%; min-height: 400px;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/yubsshop_m?s=yubsshop&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'pippin':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/pippin_m?s=pippin" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%; min-height: 400px;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/pippin_m?s=pippin&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'peper':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/peper_m?s=peper" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%; min-height: 400px;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/peper_m?s=peper&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'dailymonday':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/dailymonday_m?s=dailymonday" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%; min-height: 400px;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/dailymonday_m?s=dailymonday&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'skinnypig':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/skinnypig_m?s=skinnypig" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%; min-height: 400px;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/skinnypig_m?s=skinnypig&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'dintstyle':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/dintstyle_m?s=dintstyle" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/dintstyle_m?s=dintstyle&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'comeonvincent':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/comeonvincent_m?s=comeonvincent" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/comeonvincent_m?s=comeonvincent&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'paknamae':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/paknamae_m?s=paknamae" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/paknamae_m?s=paknamae&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'sugarfun':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/sugarfun_m?s=sugarfun" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/sugarfun_m?s=sugarfun&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


	case 'momnuri':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/momnuri_m?s=momnuri" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/momnuri_m?s=momnuri&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'minsshop':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/minsshop_m?s=minsshop" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/minsshop_m?s=minsshop&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case '2per':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/2per_m?s=2per" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/2per_m?s=2per&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


	case 'ain':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/ain_m?s=ain" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/ain_m?s=ain&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'ode':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://test.be.show/bframe/content/ode_m?s=ode" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://test.be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'test.be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/ode_m?s=ode&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'monobarbie':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/monobarbie_m?s=monobarbie" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/monobarbie_m?s=monobarbie&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'sezwick':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/sezwick_m?s=sezwick" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/sezwick_m?s=sezwick&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'miamasvin':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/miamasvin_m?s=miamasvin" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/miamasvin_m?s=miamasvin&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'roompacker':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/roompacker_m?s=roompacker" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/roompacker_m?s=roompacker&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'chlodmanon':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/chlodmanon_m?s=chlodmanon" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/chlodmanon_m?s=chlodmanon&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'leandj':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/leandj_m?s=leandj" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/leandj_m?s=leandj&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'arima':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/arima_m?s=arima" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/arima_m?s=arima&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'shezgood':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/shezgood_m?s=shezgood&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/shezgood_m?s=shezgood&i=<?=$_GET['i']?>&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'secondedition':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/secondedition_m?s=secondedition" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/secondedition_m?s=secondedition&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'reflower':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/reflower_m?s=reflower" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/reflower_m?s=reflower&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'mombbe':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/mombbe_m?s=mombbe" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/mombbe_m?s=mombbe&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


	case 'somedayn':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/somedayn_m?s=somedayn" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/somedayn_m?s=somedayn&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'pinkwonder':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/pinkwonder_m?s=pinkwonder" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/pinkwonder_m?s=pinkwonder&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'myblin_official':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/myblin_m?s=myblin&i=myblin_official" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/myblin_m?s=myblin&i=myblin_official&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'myblin_muse':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/myblin_m?s=myblin&i=myblin_muse" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/myblin_m?s=myblin&i=myblin_muse&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'unbutton':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/unbutton_m?s=unbutton" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/unbutton_m?s=unbutton&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'gildong':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/gildong_m?s=gildong" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/gildong_m?s=gildong&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'hellosweety':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/hellosweety_m?s=hellosweety" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/hellosweety_m?s=hellosweety&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'imvely':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/imvely_m?s=imvely" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if(messageEvent.origin == "http://" + guestDomain) {
					if(messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/imvely_m?s=imvely&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'happy10':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/happy10_m?s=happy10" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/happy10_m?s=happy10&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'dayel':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/dayel_m?s=dayel" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/dayel_m?s=dayel&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


	case 'pinksecret':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/pinksecret_m?s=pinksecret" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/pinksecret_m?s=pinksecret&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'gogobeach':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/gogobeach_m?s=gogobeach" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/gogobeach_m?s=gogobeach&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'chuu':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/chuu_m?s=chuu&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/chuu_m?s=chuu&i=<?=$_GET['i']?>&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;



			case 'hynt':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/hynt_m?s=hynt&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/hynt_m?s=hynt&i=<?=$_GET['i']?>&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


			case 'conella':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/conella_m?s=conella&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/conella_m?s=conella&i=<?=$_GET['i']?>&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;



			case 'bbanana':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/bbanana_m?s=bbanana&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/bbanana_m?s=bbanana&i=<?=$_GET['i']?>&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;




			case 'badblood':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/badblood_m?s=badblood&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/badblood_m?s=badblood&i=<?=$_GET['i']?>&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;



			case 'joosoon':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/joosoon_m?s=joosoon&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/joosoon_m?s=joosoon&i=<?=$_GET['i']?>&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;




			case 'jbshop':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/jbshop_m?s=jbshop&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/jbshop_m?s=jbshop&i=<?=$_GET['i']?>&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;



			case 'loveloveme':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/loveloveme_m?s=loveloveme&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/loveloveme_m?s=loveloveme&i=<?=$_GET['i']?>&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;




			case 'daysome':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/daysome_m?s=daysome&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/daysome_m?s=daysome&i=<?=$_GET['i']?>&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


			case 'shehj':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/shehj_m?s=shehj&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/shehj_m?s=shehj&i=<?=$_GET['i']?>&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


			case 'ainjp':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/ainjp_m?s=ainjp&l=jp&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/ainjp_m?s=ainjp&l=jp&i=<?=$_GET['i']?>&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;



			case 'colorfuldna':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/colorfuldna_m?s=colorfuldna&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/colorfuldna_m?s=colorfuldna&i=<?=$_GET['i']?>&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;




			case 'blingshop':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/blingshop_m?s=blingshop&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/blingshop_m?s=blingshop&i=<?=$_GET['i']?>&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


			case 'vivadaily':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/vivadaily_m?s=vivadaily&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/vivadaily_m?s=vivadaily&i=<?=$_GET['i']?>&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


			case 'merongshop':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/merongshop_m?s=merongshop&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/merongshop_m?s=merongshop&i=<?=$_GET['i']?>&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


	case 'melrosemood':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/melrosemood_m?s=melrosemood&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/melrosemood_m?s=melrosemood&i=<?=$_GET['i']?>&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


	case 'vividplan':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/vividplan_m?s=vividplan&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/vividplan_m?s=vividplan&i=<?=$_GET['i']?>&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;



	case 'bitwobin':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/bitwobin_m?s=bitwobin&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/bitwobin_m?s=bitwobin&i=<?=$_GET['i']?>&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


	case 'mondaymarket':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/mondaymarket_m?s=mondaymarket&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/mondaymarket_m?s=mondaymarket&i=<?=$_GET['i']?>&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;




			case 'envylook':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/envylook_m?s=envylook&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/envylook_m?s=envylook&i=<?=$_GET['i']?>&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


					case 'romistory':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/romistory_m?s=romistory&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/romistory_m?s=romistory&i=<?=$_GET['i']?>&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;



			case 'girlsdaily':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/girlsdaily_m?s=girlsdaily&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/girlsdaily_m?s=girlsdaily&i=<?=$_GET['i']?>&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

			case 'dcollect':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/dcollect_m?s=dcollect&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/dcollect_m?s=dcollect&i=<?=$_GET['i']?>&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;



			case 'millet':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/millet_m?s=millet&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="width: 1px;min-width: 100%; *width: 100%"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/millet_m?s=millet&i=<?=$_GET['i']?>&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


		case 'mantory':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/mantory_m?s=mantory&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="min-width: 100%;width: 1px; *width: 100%"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/mantory_m?s=mantory&i=<?=$_GET['i']?>&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'vonze':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/vonze_m?s=vonze&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/vonze_m?s=vonze&i=<?=$_GET['i']?>&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


			case 'zemmaworldjp':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/zemmaworldjp_m?s=zemmaworldjp&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/zemmaworldjp_m?s=zemmaworldjp&i=<?=$_GET['i']?>&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;



	case 'surfersco':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/surfersco_m?s=surfersco" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/surfersco_m?s=surfersco&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'darkvictory':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/darkvictory_m?s=darkvictory" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/darkvictory_m?s=darkvictory&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'ponyzn':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/ponyzn_m?s=ponyzn" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/ponyzn_m?s=ponyzn&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'wconcept':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/wconcept_m?s=wconcept" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/wconcept_m?s=wconcept&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'justone':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/justone_m?s=justone" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/justone_m?s=justone&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'rinibong':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/rinibong_m?s=rinibong" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/rinibong_m?s=rinibong&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'meosidda':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/meosidda_m?s=meosidda" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/meosidda_m?s=meosidda&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'tomonari':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/tomonari_m?s=tomonari" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/tomonari_m?s=tomonari&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'crassiang':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/crassiang_m?s=crassiang" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/crassiang_m?s=crassiang&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case '2lve':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/2lve_m?s=2lve" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/2lve_m?s=2lve&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'thedalkom':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/thedalkom_m?s=thedalkom" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/thedalkom_m?s=thedalkom&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'raonjena':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/raonjena_m?s=raonjena" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/raonjena_m?s=raonjena&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case '4xtyle':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/4xtyle_m?s=4xtyle" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/4xtyle_m?s=4xtyle&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'banibella':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/banibella_m?s=banibella" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/banibella_m?s=banibella&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


	case 'eranzi':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/eranzi_m?s=eranzi" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/eranzi_m?s=eranzi&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'vivaruby':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/vivaruby_m?s=vivaruby" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/vivaruby_m?s=vivaruby&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'blancnew':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/blancnew_m?s=blancnew" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/blancnew_m?s=blancnew&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'dashu':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/dashu_m?s=dashu" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/dashu_m?s=dashu&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'uptowngirl':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/uptowngirl_m?s=uptowngirl" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/uptowngirl_m?s=uptowngirl&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'mominique':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/mominique_m?s=mominique" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/mominique_m?s=mominique&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'makmaks':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/makmaks_m?s=makmaks" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/makmaks_m?s=makmaks&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'grimdiary':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/grimdiary_m?s=grimdiary" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/grimdiary_m?s=grimdiary&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'pinpop':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/pinpop_m?s=pinpop" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/pinpop_m?s=pinpop&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


	case 'bebeganic':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/bebeganic_m?s=bebeganic" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/bebeganic_m?s=bebeganic&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'uuzone':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/uuzone_m?s=uuzone" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/uuzone_m?s=uuzone&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'bonjourlady':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/bonjourlady_m?s=bonjourlady" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/bonjourlady_m?s=bonjourlady&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'merryaround':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/merryaround_m?s=merryaround" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/merryaround_m?s=merryaround&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'lfmall':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/lfmall_m?s=lfmall&i=a.t.corner" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/lfmall_m?s=lfmall&i=a.t.corner&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'a.t.corner':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/lfmall_m_atcorner?s=lfmall&i=a.t.corner" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/lfmall_m_atcorner?s=lfmall&i=a.t.corner&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'ribbontie':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/ribbontie_m?s=ribbontie" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/ribbontie_m?s=ribbontie&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'hiblogger':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/hiblogger_m?s=hiblogger" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/hiblogger_m?s=hiblogger&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'magjay':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/magjay_m?s=magjay" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/magjay_m?s=magjay&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'im3':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/im3_m?s=im3" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/im3_m?s=im3&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'gangnamladys':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/gangnamladys_m?s=gangnamladys" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/gangnamladys_m?s=gangnamladys&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


	case 'nain':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/nain_m?s=nain&i=<?=$_GET['i']?>" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/nain_m?s=nain&i=<?=$_GET['i']?>&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


	case 'rolarola':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/rolarola_m?s=rolarola" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/rolarola_m?s=rolarola&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'vittz':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/vittz_m?s=vittz" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/vittz_m?s=vittz&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'canmart':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/canmart_m?s=canmart&l=en" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/canmart_m?s=canmart&l=en&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'undervi':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/undervi_m?s=undervi" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/undervi_m?s=undervi&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'clicknfunny':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/clicknfunny_m?s=clicknfunny" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/clicknfunny_m?s=clicknfunny&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'okdgg':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/okdgg_m?s=okdgg" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/okdgg_m?s=okdgg&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'hnhn':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/hnhn_m?s=hnhn" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/hnhn_m?s=hnhn&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'cocoblack':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/cocoblack_m?s=cocoblack" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/cocoblack_m?s=cocoblack&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'annpiona':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/annpiona_m?s=annpiona" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/annpiona_m?s=annpiona&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'blackup':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/blackup_m?s=blackup" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/blackup_m?s=blackup&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case '66girls':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/66girls_m?s=66girls" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/66girls_m?s=66girls&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


			case '66girlsjp':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/66girlsjp_m?s=66girlsjp&l=jp" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/66girlsjp_m?s=66girlsjp&l=jp&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'gogosingjp':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/gogosingjp_m?s=gogosingjp" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/gogosingjp_m?s=gogosingjp&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


	case 'sistershu':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/sistershu_m?s=sistershu" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/sistershu_m?s=sistershu&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'openingbutton':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/openingbutton_m?s=openingbutton" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/openingbutton_m?s=openingbutton&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'thedaze':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/thedaze_m?s=thedaze" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/thedaze_m?s=thedaze&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'danswer':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/danswer_m?s=danswer" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/danswer_m?s=danswer&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'lulus':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/lulus_m?s=lulus" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/lulus_m?s=lulus&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'thesienne':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/thesienne_m?s=thesienne" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/thesienne_m?s=thesienne&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'hatson':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/hatson_m?s=hatson" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/hatson_m?s=hatson&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case '9room':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/9room_m?s=9room" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/9room_m?s=9room&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'hiphoper':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/hiphoper_m?s=hiphoper" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/hiphoper_m?s=hiphoper&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'shurub':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/shurub_m?s=shurub" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/shurub_m?s=shurub&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'icecream12':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/icecream12_m?s=icecream12" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/icecream12_m?s=icecream12&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'gonyshop':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/gonyshop_m?s=gonyshop" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/gonyshop_m?s=gonyshop&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'wizwid':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/wizwid_m?s=wizwid" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%; min-height: 400px;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/wizwid_m?s=wizwid&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'suecommabonnie':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/suecommabonnie_m?s=suecommabonnie" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/suecommabonnie_m?s=suecommabonnie&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'supercommab':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/supercommab_m?s=supercommab" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/supercommab_m?s=supercommab&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'chango':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/chango_m?s=chango" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/chango_m?s=chango&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'superstari':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/superstari_m?s=superstari" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/superstari_m?s=superstari&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'nalrarikr':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/nalrarikr_m?s=nalrarikr" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/nalrarikr_m?s=nalrarikr&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'bubbleandchic':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/bubbleandchic_m?s=bubbleandchic" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/bubbleandchic_m?s=bubbleandchic&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'lovelyshoes':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/lovelyshoes_m?s=lovelyshoes" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/lovelyshoes_m?s=lovelyshoes&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'areaplus':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/areaplus_m?s=areaplus" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/areaplus_m?s=areaplus&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'jellpe':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/jellpe_m?s=jellpe" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/jellpe_m?s=jellpe&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'modernif':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/modernif_m?s=modernif" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/modernif_m?s=modernif&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'buttonoff':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/buttonoff_m?s=buttonoff" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/buttonoff_m?s=buttonoff&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'jeimish':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/jeimish_m?s=jeimish" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/jeimish_m?s=jeimish&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'snipershop':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/snipershop_m?s=snipershop" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/snipershop_m?s=snipershop&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'vividnco':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/vividnco_m?s=vividnco" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/vividnco_m?s=vividnco&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'deden':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/deden_m?s=deden" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/deden_m?s=deden&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'bullanggirl':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/bullanggirl_m?s=bullanggirl" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/bullanggirl_m?s=bullanggirl&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'bullanggirljp':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/bullanggirljp_m?s=bullanggirljp&l=jp" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/bullanggirljp_m?s=bullanggirljp&l=jp&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'ssomuch':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/ssomuch_m?s=ssomuch" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/ssomuch_m?s=ssomuch&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'thezam':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/thezam_m?s=thezam" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/thezam_m?s=thezam&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'reticella':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/reticella_m?s=reticella" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/reticella_m?s=reticella&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'hwangbarbie':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/hwangbarbie_m?s=hwangbarbie" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/hwangbarbie_m?s=hwangbarbie&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'realyellow':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/realyellow_m?s=realyellow" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/realyellow_m?s=realyellow&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'therethere':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/therethere_m?s=therethere" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/therethere_m?s=therethere&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'nanasalon':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/nanasalon_m?s=nanasalon" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/nanasalon_m?s=nanasalon&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'obbangstyle':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/obbangstyle_m?s=obbangstyle" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/obbangstyle_m?s=obbangstyle&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'kikiko':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/kikiko_m?s=kikiko" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/kikiko_m?s=kikiko&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'holicholic':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/holicholic_m?s=holicholic" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/holicholic_m?s=holicholic&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'hypnotic':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/hypnotic_m?s=hypnotic" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/hypnotic_m?s=hypnotic&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'shoemaru':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/shoemaru_m?s=shoemaru" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/shoemaru_m?s=shoemaru&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'canmartkr':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/canmartkr_m?s=canmartkr" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/canmartkr_m?s=canmartkr&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'loloten':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/loloten_m?s=loloten" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/loloten_m?s=loloten&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'abbamart':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/abbamart_m?s=abbamart" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/abbamart_m?s=abbamart&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'laurenhi':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/laurenhi_m?s=laurenhi" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/laurenhi_m?s=laurenhi&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'roem':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/roem_m?s=roem" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/roem_m?s=roem&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'lumissy':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/lumissy_m?s=lumissy" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/lumissy_m?s=lumissy&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'mutnam':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/mutnam_m?s=mutnam" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/mutnam_m?s=mutnam&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'tamnana':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/tamnana_m?s=tamnana" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/tamnana_m?s=tamnana&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'kormarch':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/kormarch_m?s=kormarch" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/kormarch_m?s=kormarch&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'firstj':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/firstj_m?s=firstj" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/firstj_m?s=firstj&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'benito':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/benito_m?s=benito" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/benito_m?s=benito&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'benign':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/benign_m?s=benign" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/benign_m?s=benign&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;

	case 'wonlog':
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<div style="width:100%; position:relative;">
			<iframe id="Bframe" name="Bframe" src="http://be.show/bframe/content/wonlog_m?s=wonlog" frameborder="0" scrolling="no" style="min-width: 100%;width: 100%;"></iframe>
		</div>
		<iframe id="BframePopUp" name="BframePopUp" src="" style="display:none;position:fixed;top:-2px;left:-2px;width:100%;height:100%;z-index:99999;"></iframe>
		<script src="http://be.show/plugins/porthole/porthole.min.js"></script>
		<script type="text/javascript">
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			var guestDomain = 'be.show';
			eventer(messageEvent, function(e) {
				if(e.origin == "http://" + guestDomain) {
					if (typeof e.data["height"] != 'undefined') document.getElementById('Bframe').height = e.data["height"] + 'px';
				}
			}, false);
			function onMessage(messageEvent) {
				if (messageEvent.origin == "http://" + guestDomain) {
					if (messageEvent.data["iframe"]) {
						document.location.href = 'http://' + guestDomain + '/bframe/popup/wonlog_m?s=wonlog&m=' + messageEvent.data["iframe"] + '&close_url=' + document.location.href;
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
		<?
		break;


}
?>
