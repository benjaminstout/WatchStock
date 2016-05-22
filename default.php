<?php
  ob_start();

  // Specify no-caching header controls for page
  header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Date in the past
  header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified
  header("Cache-Control: no-store, no-cache, must-revalidate"); // HTTP/1.1
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache"); // HTTP/1.0
?>

<head>
  <meta charset='utf-8'>
  <title>WatchStock</title>
  <link rel='icon' type='image/png' href='img/favicon-32x32.png' sizes='32x32'>
  <link rel='icon' type='image/png' href='img/favicon-96x96.png' sizes='96x96'>
  <link rel='icon' type='image/png' href='img/favicon-16x16.png' sizes='16x16'>
  <link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico' />
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' href='css/normalize.css'>
  <link rel='stylesheet' type='text/css' href='css/fonts.css'>
  <link rel='stylesheet' type='text/css' href='css/watchstock.css'>
</head>
<body class='body'>
  <div class='top-bar'>
    <div id='title' class='title'>WatchStock</div>
    <form id='searchForm' action='' method='get'>
      <input id='query' type='text' placeholder='GE, LNKD, Google...' class='search-field'>
    </form>
  </div>
  <div id='startHere' class='start-here'>
    <img height='70' src='img/start-arrow.png' class='start-arrow'>
    <div class='start-text'>Start Here</div>
  </div>
  <div id='navMenu' class='nav-menu'>
    <div id='navTray' class='nav-tray'></div>
    <img id='navArrow' src='img/nav-arrow.png' class='nav-arrow'>
    <img id='navSearch' src='img/search.png' class='nav-search'>
    <img id='navExit' src='img/exit-white.png' class='nav-exit'>
    <img id='navHistory' src='img/history.png' class='nav-history'>
    <img id='navQuote' src='img/quote.png' class='nav-quote'>
    <div id='navButton' class='nav-button'>WS</div>
  </div>
  <div class='content'>
    <div id='home' class='container'>
      <h2>Welcome to WatchStock!</h2>
      <h4>A unique and simple way of keeping up to date with your investments</h4>
    </div>
    <div id='results' class='container'>
    </div>
    <div id='history' class='container'>
      <h2>History</h2>
      <h3>LNKD: LinkedIn Corporation</h3>
      <table class='table-fill'>
        <thead>
          <tr>
            <th>Date</th>
            <th>Open</th>
            <th>High</th>
            <th>Low</th>
            <th>Close/Last</th>
            <th>Volume</th>
          </tr>
        </thead>
        <tbody class='table-hover'>
          <tr>
            <td>05/05/2016</td>
            <td>125.48</td>
            <td>126</td>
            <td>122.67</td>
            <td>123.11</td>
            <td>1,811,278</td>
          </tr>
          <tr>
            <td>05/04/2016</td>
            <td>124.19</td>
            <td>126.73</td>
            <td>123.7</td>
            <td>124.54</td>
            <td>1,574,023</td>
          </tr>
          <tr>
            <td>05/03/2016</td>
            <td>127.07</td>
            <td>127.995</td>
            <td>124.57</td>
            <td>124.91</td>
            <td>2,045,229</td>
          </tr>
          <tr>
            <td>05/05/2016</td>
            <td>125.48</td>
            <td>126</td>
            <td>122.67</td>
            <td>123.11</td>
            <td>1,811,278</td>
          </tr>
          <tr>
            <td>05/05/2016</td>
            <td>125.48</td>
            <td>126</td>
            <td>122.67</td>
            <td>123.11</td>
            <td>1,811,278</td>
          </tr>
          <tr>
            <td>05/05/2016</td>
            <td>125.48</td>
            <td>126</td>
            <td>122.67</td>
            <td>123.11</td>
            <td>1,811,278</td>
          </tr><tr>
            <td>05/05/2016</td>
            <td>125.48</td>
            <td>126</td>
            <td>122.67</td>
            <td>123.11</td>
            <td>1,811,278</td>
          </tr><tr>
            <td>05/05/2016</td>
            <td>125.48</td>
            <td>126</td>
            <td>122.67</td>
            <td>123.11</td>
            <td>1,811,278</td>
          </tr><tr>
            <td>05/05/2016</td>
            <td>125.48</td>
            <td>126</td>
            <td>122.67</td>
            <td>123.11</td>
            <td>1,811,278</td>
          </tr><tr>
            <td>05/05/2016</td>
            <td>125.48</td>
            <td>126</td>
            <td>122.67</td>
            <td>123.11</td>
            <td>1,811,278</td>
          </tr><tr>
            <td>05/05/2016</td>
            <td>125.48</td>
            <td>126</td>
            <td>122.67</td>
            <td>123.11</td>
            <td>1,811,278</td>
          </tr><tr>
            <td>05/05/2016</td>
            <td>125.48</td>
            <td>126</td>
            <td>122.67</td>
            <td>123.11</td>
            <td>1,811,278</td>
          </tr><tr>
            <td>05/05/2016</td>
            <td>125.48</td>
            <td>126</td>
            <td>122.67</td>
            <td>123.11</td>
            <td>1,811,278</td>
          </tr><tr>
            <td>05/05/2016</td>
            <td>125.48</td>
            <td>126</td>
            <td>122.67</td>
            <td>123.11</td>
            <td>1,811,278</td>
          </tr><tr>
            <td>05/05/2016</td>
            <td>125.48</td>
            <td>126</td>
            <td>122.67</td>
            <td>123.11</td>
            <td>1,811,278</td>
          </tr><tr>
            <td>05/05/2016</td>
            <td>125.48</td>
            <td>126</td>
            <td>122.67</td>
            <td>123.11</td>
            <td>1,811,278</td>
          </tr><tr>
            <td>05/05/2016</td>
            <td>125.48</td>
            <td>126</td>
            <td>122.67</td>
            <td>123.11</td>
            <td>1,811,278</td>
          </tr><tr>
            <td>05/05/2016</td>
            <td>125.48</td>
            <td>126</td>
            <td>122.67</td>
            <td>123.11</td>
            <td>1,811,278</td>
          </tr><tr>
            <td>05/05/2016</td>
            <td>125.48</td>
            <td>126</td>
            <td>122.67</td>
            <td>123.11</td>
            <td>1,811,278</td>
          </tr><tr>
            <td>05/05/2016</td>
            <td>125.48</td>
            <td>126</td>
            <td>122.67</td>
            <td>123.11</td>
            <td>1,811,278</td>
          </tr><tr>
            <td>05/05/2016</td>
            <td>125.48</td>
            <td>126</td>
            <td>122.67</td>
            <td>123.11</td>
            <td>1,811,278</td>
          </tr><tr>
            <td>05/05/2016</td>
            <td>125.48</td>
            <td>126</td>
            <td>122.67</td>
            <td>123.11</td>
            <td>1,811,278</td>
          </tr><tr>
            <td>05/05/2016</td>
            <td>125.48</td>
            <td>126</td>
            <td>122.67</td>
            <td>123.11</td>
            <td>1,811,278</td>
          </tr><tr>
            <td>05/05/2016</td>
            <td>125.48</td>
            <td>126</td>
            <td>122.67</td>
            <td>123.11</td>
            <td>1,811,278</td>
          </tr><tr>
            <td>05/05/2016</td>
            <td>125.48</td>
            <td>126</td>
            <td>122.67</td>
            <td>123.11</td>
            <td>1,811,278</td>
          </tr><tr>
            <td>05/05/2016</td>
            <td>125.48</td>
            <td>126</td>
            <td>122.67</td>
            <td>123.11</td>
            <td>1,811,278</td>
          </tr><tr>
            <td>05/05/2016</td>
            <td>125.48</td>
            <td>126</td>
            <td>122.67</td>
            <td>123.11</td>
            <td>1,811,278</td>
          </tr><tr>
            <td>05/05/2016</td>
            <td>125.48</td>
            <td>126</td>
            <td>122.67</td>
            <td>123.11</td>
            <td>1,811,278</td>
          </tr><tr>
            <td>05/05/2016</td>
            <td>125.48</td>
            <td>126</td>
            <td>122.67</td>
            <td>123.11</td>
            <td>1,811,278</td>
          </tr><tr>
            <td>05/05/2016</td>
            <td>125.48</td>
            <td>126</td>
            <td>122.67</td>
            <td>123.11</td>
            <td>1,811,278</td>
          </tr><tr>
            <td>05/05/2016</td>
            <td>125.48</td>
            <td>126</td>
            <td>122.67</td>
            <td>123.11</td>
            <td>1,811,278</td>
          </tr><tr>
            <td>05/05/2016</td>
            <td>125.48</td>
            <td>126</td>
            <td>122.67</td>
            <td>123.11</td>
            <td>1,811,278</td>
          </tr><tr>
            <td>05/05/2016</td>
            <td>125.48</td>
            <td>126</td>
            <td>122.67</td>
            <td>123.11</td>
            <td>1,811,278</td>
          </tr><tr>
            <td>05/05/2016</td>
            <td>125.48</td>
            <td>126</td>
            <td>122.67</td>
            <td>123.11</td>
            <td>1,811,278</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div id='quote' class='container'>
      <h2>Quote</h2>
      <h3>LNKD: LinkedIn Corporation</h3>
      <table class='table-fill'>
        <thead>
          <tr>
            <th colspan="2">05/06/2016</th>
          </tr>
        </thead>
        <tbody class='table-hover'>
          <tr>
            <td>Last</td>
            <td>121.82</td>
          </tr>
          <tr>
            <td>Change</td>
            <td>-1.29</td>
          </tr>
          <tr>
            <td>%Change</td>
            <td>-1.05 %</td>
          </tr><tr>
            <td>High</td>
            <td>122.97</td>
          </tr><tr>
            <td>Low</td>
            <td>119.46</td>
          </tr><tr>
            <td>Daily Volume</td>
            <td>2,065,917</td>
          </tr><tr>
            <td>Prev Close</td>
            <td>123.11</td>
          </tr><tr>
            <td>Bid</td>
            <td>122.09</td>
          </tr><tr>
            <td>Ask</td>
            <td>121.74</td>
          </tr><tr>
            <td>52 Week High</td>
            <td>258.39</td>
          </tr><tr>
            <td>52 Week Low</td>
            <td>98.25</td>
          </tr>
        </tbody>
      </table>
      <table class='table-fill'>
        <thead>
          <tr>
            <th colspan="2">Fundamentals</th>
          </tr>
        </thead>
        <tbody class='table-hover'>
          <tr>
            <td>PE Ratio</td>
            <td>n/a</td>
          </tr>
          <tr>
            <td>Earnings/share</td>
            <td>-1.29</td>
          </tr>
          <tr>
            <td>Div/Share</td>
            <td>n/a</td>
          </tr><tr>
            <td>Market Cap.</td>
            <td>16,440.6 Mil</td>
          </tr><tr>
            <td># Shrs Out.</td>
            <td>132,074,000</td>
          </tr><tr>
            <td>Div. Yield</td>
            <td>n/a</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <script  type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
  <script type='text/javascript' src='js/animations.js'></script>
</body>
</html>

<?php ob_end_flush(); ?>
