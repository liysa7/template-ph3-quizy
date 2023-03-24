<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('ph3Webapp.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

  <title>Document</title>
</head>
<body>
  {{-- <div>
    <h2>webappです</h2>
    <p>{{ $study_date }}</p>
    <p>{{ $study_month->total_hour }}</p>
    <p>{{ $study_today }}</p>
  </div> --}}
  
  <div class="container">
    <div class="topBox">
      <div class="leftbox">
        <div class="time">
          <div class="timecard today"><span class="unit">Today</span> <br><span class="number">    <p>{{ $study_date }}</p>
          </span> <br> <span
              class="hour">hour</span></div>
          <div class="timecard month"><span class="unit">Month</span> <br><span class="number">    <p>{{ $study_month->total_hour }}</p>
          </span> <br><span
              class="hour">hour</span></div>
          <div class="timecard total"><span class="unit">Total</span> <br><span class="number">    <p>{{ $study_today }}</p></span> <br><span
              class="hour">hour</span> </div>
        </div>
        <div class="BarGraphBox">
          <div class="chart_div" id="chart_div" style="width:100%"></div>
          <div class="chart_div_sp" id="chart_div_sp" style="width:100%"></div>
          <canvas id="column" class="column"></canvas>
        </div>
      </div>
      <div class="rightbox">
      <div class="rightInner">
        <h2 class="heading">学習言語</h2>
        <div class="graphBox" id="graph1">
        </div>
        <ul class="lists">
          <li class="list-language-item"><span class=" dot dotJava"> </span>Javascript</li>
          <li class="list-language-item"><span class=" dot dotCss"> </span>CSS</li>
          <li class="list-language-item"><span class=" dot dotPhp"> </span>PHP</li>
          <li class="list-language-item"><span class=" dot dotHtml"> </span>HTML</li>
          <li class="list-language-item"><span class=" dot dotLaravel"> </span>Laravel</li>
          <li class="list-language-item"><span class=" dot dotSql"> </span>SQL</li>
          <li class="list-language-item"><span class=" dot dotShell"> </span>SHELL</li>
          <li class="list-language-item"><span class=" dot dotInfo"> </span>情報システム基礎知識(その他)</li>
        </ul>
      </div>
      <div class="rightInner">
        <h2 class="heading
          ">学習コンテンツ</h2>
        <div class="graphBox" id="graph2">
        </div>
        <ul class="lists2">
          <li class="list-content-item"><span class="dot2 dotNyobi"></span> N予備校</li>
          <li class="list-content-item"><span class="dot2 dotPosseHw"></span>POSSE課題</li>
          <li class="list-content-item"><span class="dot2 dotDotinstall"></span>ドットインストール</li>
        </ul>
      </div>
    </div>
    <div class="bottomBox">
      <div class="BottomBoxInner">
        <p>2020年10月</p>
      </div>
    </div>
  </div>
  <div id="modal" class="modal">
    <div class="modalInner">
      <div class="modalTop">
        <span class="modalCloseBtn" id="jsModalCloseBtn"></span>
      </div>
      <div class="modalMiddle">
        <div class="modalLeftBox">
          <div class="modalStudyDate">
            <h2 class="modalHeading">学習日</h2>
            <input type="text" name="datepicker" id="js-datepicker" class="modalDate">
          </div>
          <div class="modalStudyContent">
            <h2 class="modalHeading">学習コンテンツ（複数選択可）</h2>
            <ul class="checkList">
              <li class="checkListItem">
                <input class="visually-hidden" type="checkbox" name="" id="nyobi" />
                <label for="nyobi">N予備</label>
              </li>
              <li class="checkListItem">
                <input class="visually-hidden" type="checkbox" name="" id="dotinstall" />
                <label for="dotinstall">ドットインストール</label>
              </li>
              <li class="checkListItem">
                <input class="visually-hidden" type="checkbox" name="" id="possehw" />
                <label for="possehw">POSSE課題</label>
              </li>
            </ul>
          </div>
          <div class="modalStudyLang">
            <h2 class="modalHeading">学習言語（複数選択可）</h2>
            <ul class="checkList2">
              <li class="checkListItem">
                <input class="visually-hidden" type="checkbox" name="" id="html" />
                <label for="html">HTML</label>
              </li>
              <li class="checkListItem">
                <input class="visually-hidden" type="checkbox" name="" id="css" />
                <label for="css">CSS</label>
              </li>
              <li class="checkListItem">
                <input class="visually-hidden" type="checkbox" name="" id="javas" />
                <label for="javas">JavaScript</label>
              </li>
              <li class="checkListItem">
                <input class="visually-hidden" type="checkbox" name="" id="php" />
                <label for="php">PHP</label>
              </li>
              <li class="checkListItem">
                <input class="visually-hidden" type="checkbox" name="" id="Laravel" />
                <label for="Laravel">Laravel</label>
              </li>
              <li class="checkListItem">
                <input class="visually-hidden" type="checkbox" name="" id="sql" />
                <label for="sql">SQL</label>
              </li>
              <li class="checkListItem">
                <input class="visually-hidden" type="checkbox" name="" id="shell" />
                <label for="shell">SHELL</label>
              </li>
              <li class="checkListItem">
                <input class="visually-hidden" type="checkbox" name="" id="infobasic" />
                <label for="infobasic">情報システム基礎（その他）</label>
              </li>
            </ul>
          </div>
        </div>
        <div class="modalRightBox">
          <div class="modalRightBoxTop">
            <div class="modalStudyHours">
              <h2 class="modalHeading">学習時間</h2>
              <input type="text" name="date" class="studyhour" id="calendar">
            </div>
            <div class="modalTwitterComment">
              <h2 class="modalHeading">Twitter用コメント</h2>
              <textarea name="text" id="tweetCommenting" cols="30" rows="10" class="commenting" ></textarea>
            </div>
          </div>
          <div class="modalRightBoxBottom">
            <div class="modalTweetInner">
              <li class="modalTweet">
                <input class="visually-hidden" type="checkbox" name="" id="modalTweetBtn" />
                <label for="modalTweetBtn">Twitterにシェアする</label>
              </li>
            </div>
          </div>
        </div>
      </div>
      <div class="modalBottom">
        <div id="submit" class="modalDoneBtn" onclick="post()">
          記録・投稿
        </div>
      </div>
    </div>
  </div>
  <div class="modal2" id="modal2">
    <div class="modal2Top">
      <span class="modalCloseBtn" id="jsModalCloseBtn2"></span>
    </div>
    <div class="modal2Bottom">
      <div class="modal2Inner">
        <h2 class="modal2Heading">AWESOME!</h2>
        <div class="modal2Check"></div>
        <p class="modal2message">記録・投稿<br>完了しました</p>
      </div>
    </div>
  </div>
  <div class="loaderHidden" id="loader">
    <div class="loaderHidden" id="loaderInbox" >Loading...</div>
  </div>
  <!-- </div> -->
  </div>
</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <script>
      function renderStudyContents() {
      var graph2 = document.getElementById('graph2');
      var options = {
        legend: {
          position: 'none'
        },
        pieHole: 0.4,
        colors: ['#1754EF', '#0F71BD', '#20BDDE'],
        chartArea: {
          width: '100%',
          height: '100%'
        }
      };
  
  
  var chart = new google.visualization.PieChart(graph2);
  
  data = new google.visualization.arrayToDataTable([
    ['content', 'ratio'],
      @foreach ($contents as $content) 
        ["{{ $content["content_name"] }}", {{ $content["gakushu_content"] }}],
      @endforeach
      ]);
      chart.draw(data, options);
    }

  
    function renderLanguageContents() {
      var graph1 = document.getElementById('graph1');
      var options = {
        legend: {
          position: 'none'
        },
        pieHole: 0.4,
        colors: ['#3CCEFE', '#0F71BD', '#1754EF', '#20BDDE', '#B29EF3', '#6D46EC', '#4A17EF', '#3105C0'],
        chartArea: {
          width: '100%',
          height: '100%'
        },
      };
  
      var chart = new google.visualization.PieChart(graph1);
  
      data = new google.visualization.arrayToDataTable([
        ['language', 'ratio'],
          @foreach ($languages as $language) 
          ["{{ $language["language_name"] }}", {{ $language["gakushu_language"] }}],
          @endforeach
          ]);
  
      chart.draw(data, options);
      }
  
  
      function renderStudyTime() {
        var data = new google.visualization.DataTable()
        data.addColumn('string', 'day')
        data.addColumn('number', 'hour')
        data.addRows([
          @foreach ($date_sum as $key => $date) 
          ["{{$key+1}}",{{$date}}],
          @endforeach
        ]);
  
        var options = {
          height: 400,
          bar: {
            groupWidth: "50%"
          },
          legend: {
            position: "none"
          },
          vAxis: {
            format: '0h',
            gridlines: {
              color: '#fff'
            }
          }
        }
  
        var spOptions = {
          height: 200,
          bar: {
            groupWidth: "50%"
          },
          legend: {
            position: "none"
          },
          vAxis: {
            format: '0h',
            gridlines: {
              color: '#fff'
            }
          }
        }
  
        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);
  
        var spChart = new google.visualization.ColumnChart(document.getElementById('chart_div_sp'));
        spChart.draw(data, spOptions);
      }
  
      function drawChart() {
  
        renderStudyContents()
  
        renderLanguageContents()

        renderStudyTime()
      }
  
      google.charts.load('current', {
        'packages': ['corechart']
      });
      google.charts.setOnLoadCallback(drawChart);
  
      window.addEventListener('resize', drawChart)
      
  </script>
</body>
</html>
