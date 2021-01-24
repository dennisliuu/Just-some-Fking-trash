<!DOCTYPE html>
<html>
	<head>

		<title>TradingView Charting Library demo -- Mobile (black)</title>

		<!-- Fix for iOS Safari zooming bug -->
		<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">

		<script type="text/javascript" src="charting_library/charting_library.min.js"></script>
		<script type="text/javascript" src="datafeeds/udf/dist/polyfills.js"></script>
		<script type="text/javascript" src="datafeeds/udf/dist/bundle.js"></script>

		<script type="text/javascript">

			function getParameterByName(name) {
				name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
				var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
					results = regex.exec(location.search);
				return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
			}

		  function initOnReady() {
				var widget = new TradingView.widget({
					fullscreen: true,
					symbol: 'AAPL',
					interval: 'D',
					container_id: "tv_chart_container",
					//	BEWARE: no trailing slash is expected in feed URL
					datafeed: new Datafeeds.UDFCompatibleDatafeed("https://demo_feed.tradingview.com"),
					library_path: "charting_library/",
					locale: getParameterByName('lang') || "en",

					disabled_features: ["use_localstorage_for_settings"],
					preset: "mobile",
					overrides: {
						"paneProperties.background": "#222222",
						"paneProperties.vertGridProperties.color": "#454545",
						"paneProperties.horzGridProperties.color": "#454545",
						"symbolWatermarkProperties.transparency": 90,
						"scalesProperties.textColor" : "#AAA"
					}
				});
			};

			window.addEventListener('DOMContentLoaded', initOnReady, false);
		</script>

	</head>

	<body style="margin:0px;">
		<div id="tv_chart_container"></div>
	</body>

</html>