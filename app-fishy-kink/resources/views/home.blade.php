<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>home</title>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="">
  <link rel="shortcut icon" href="">
  <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="font/css/open-iconic-bootstrap.css">

  <style>
    .accordion .inner {
      display: none;
    }

    .accordion p {
      cursor: pointer;
    }

    .accordion {
      display: inline;
    }
  </style>

<script type="test/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"> </script>
<style>
.loader {
  margin: 100px auto;
  font-size: 25px;
  width: 1em;
  height: 1em;
  border-radius: 50%;
  position: relative;
  text-indent: -9999em;
  -webkit-animation: load5 1.1s infinite ease;
  animation: load5 1.1s infinite ease;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
}
@-webkit-keyframes load5 {
  0%,
  100% {
    box-shadow: 0em -2.6em 0em 0em #000000, 1.8em -1.8em 0 0em rgba(0,0,0, 0.2), 2.5em 0em 0 0em rgba(0,0,0, 0.2), 1.75em 1.75em 0 0em rgba(0,0,0, 0.2), 0em 2.5em 0 0em rgba(0,0,0, 0.2), -1.8em 1.8em 0 0em rgba(0,0,0, 0.2), -2.6em 0em 0 0em rgba(0,0,0, 0.5), -1.8em -1.8em 0 0em rgba(0,0,0, 0.7);
  }
  12.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(0,0,0, 0.7), 1.8em -1.8em 0 0em #000000, 2.5em 0em 0 0em rgba(0,0,0, 0.2), 1.75em 1.75em 0 0em rgba(0,0,0, 0.2), 0em 2.5em 0 0em rgba(0,0,0, 0.2), -1.8em 1.8em 0 0em rgba(0,0,0, 0.2), -2.6em 0em 0 0em rgba(0,0,0, 0.2), -1.8em -1.8em 0 0em rgba(0,0,0, 0.5);
  }
  25% {
    box-shadow: 0em -2.6em 0em 0em rgba(0,0,0, 0.5), 1.8em -1.8em 0 0em rgba(0,0,0, 0.7), 2.5em 0em 0 0em #000000, 1.75em 1.75em 0 0em rgba(0,0,0, 0.2), 0em 2.5em 0 0em rgba(0,0,0, 0.2), -1.8em 1.8em 0 0em rgba(0,0,0, 0.2), -2.6em 0em 0 0em rgba(0,0,0, 0.2), -1.8em -1.8em 0 0em rgba(0,0,0, 0.2);
  }
  37.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(0,0,0, 0.2), 1.8em -1.8em 0 0em rgba(0,0,0, 0.5), 2.5em 0em 0 0em rgba(0,0,0, 0.7), 1.75em 1.75em 0 0em #000000, 0em 2.5em 0 0em rgba(0,0,0, 0.2), -1.8em 1.8em 0 0em rgba(0,0,0, 0.2), -2.6em 0em 0 0em rgba(0,0,0, 0.2), -1.8em -1.8em 0 0em rgba(0,0,0, 0.2);
  }
  50% {
    box-shadow: 0em -2.6em 0em 0em rgba(0,0,0, 0.2), 1.8em -1.8em 0 0em rgba(0,0,0, 0.2), 2.5em 0em 0 0em rgba(0,0,0, 0.5), 1.75em 1.75em 0 0em rgba(0,0,0, 0.7), 0em 2.5em 0 0em #000000, -1.8em 1.8em 0 0em rgba(0,0,0, 0.2), -2.6em 0em 0 0em rgba(0,0,0, 0.2), -1.8em -1.8em 0 0em rgba(0,0,0, 0.2);
  }
  62.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(0,0,0, 0.2), 1.8em -1.8em 0 0em rgba(0,0,0, 0.2), 2.5em 0em 0 0em rgba(0,0,0, 0.2), 1.75em 1.75em 0 0em rgba(0,0,0, 0.5), 0em 2.5em 0 0em rgba(0,0,0, 0.7), -1.8em 1.8em 0 0em #000000, -2.6em 0em 0 0em rgba(0,0,0, 0.2), -1.8em -1.8em 0 0em rgba(0,0,0, 0.2);
  }
  75% {
    box-shadow: 0em -2.6em 0em 0em rgba(0,0,0, 0.2), 1.8em -1.8em 0 0em rgba(0,0,0, 0.2), 2.5em 0em 0 0em rgba(0,0,0, 0.2), 1.75em 1.75em 0 0em rgba(0,0,0, 0.2), 0em 2.5em 0 0em rgba(0,0,0, 0.5), -1.8em 1.8em 0 0em rgba(0,0,0, 0.7), -2.6em 0em 0 0em #000000, -1.8em -1.8em 0 0em rgba(0,0,0, 0.2);
  }
  87.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(0,0,0, 0.2), 1.8em -1.8em 0 0em rgba(0,0,0, 0.2), 2.5em 0em 0 0em rgba(0,0,0, 0.2), 1.75em 1.75em 0 0em rgba(0,0,0, 0.2), 0em 2.5em 0 0em rgba(0,0,0, 0.2), -1.8em 1.8em 0 0em rgba(0,0,0, 0.5), -2.6em 0em 0 0em rgba(0,0,0, 0.7), -1.8em -1.8em 0 0em #000000;
  }
}
@keyframes load5 {
  0%,
  100% {
    box-shadow: 0em -2.6em 0em 0em #000000, 1.8em -1.8em 0 0em rgba(0,0,0, 0.2), 2.5em 0em 0 0em rgba(0,0,0, 0.2), 1.75em 1.75em 0 0em rgba(0,0,0, 0.2), 0em 2.5em 0 0em rgba(0,0,0, 0.2), -1.8em 1.8em 0 0em rgba(0,0,0, 0.2), -2.6em 0em 0 0em rgba(0,0,0, 0.5), -1.8em -1.8em 0 0em rgba(0,0,0, 0.7);
  }
  12.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(0,0,0, 0.7), 1.8em -1.8em 0 0em #000000, 2.5em 0em 0 0em rgba(0,0,0, 0.2), 1.75em 1.75em 0 0em rgba(0,0,0, 0.2), 0em 2.5em 0 0em rgba(0,0,0, 0.2), -1.8em 1.8em 0 0em rgba(0,0,0, 0.2), -2.6em 0em 0 0em rgba(0,0,0, 0.2), -1.8em -1.8em 0 0em rgba(0,0,0, 0.5);
  }
  25% {
    box-shadow: 0em -2.6em 0em 0em rgba(0,0,0, 0.5), 1.8em -1.8em 0 0em rgba(0,0,0, 0.7), 2.5em 0em 0 0em #000000, 1.75em 1.75em 0 0em rgba(0,0,0, 0.2), 0em 2.5em 0 0em rgba(0,0,0, 0.2), -1.8em 1.8em 0 0em rgba(0,0,0, 0.2), -2.6em 0em 0 0em rgba(0,0,0, 0.2), -1.8em -1.8em 0 0em rgba(0,0,0, 0.2);
  }
  37.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(0,0,0, 0.2), 1.8em -1.8em 0 0em rgba(0,0,0, 0.5), 2.5em 0em 0 0em rgba(0,0,0, 0.7), 1.75em 1.75em 0 0em #000000, 0em 2.5em 0 0em rgba(0,0,0, 0.2), -1.8em 1.8em 0 0em rgba(0,0,0, 0.2), -2.6em 0em 0 0em rgba(0,0,0, 0.2), -1.8em -1.8em 0 0em rgba(0,0,0, 0.2);
  }
  50% {
    box-shadow: 0em -2.6em 0em 0em rgba(0,0,0, 0.2), 1.8em -1.8em 0 0em rgba(0,0,0, 0.2), 2.5em 0em 0 0em rgba(0,0,0, 0.5), 1.75em 1.75em 0 0em rgba(0,0,0, 0.7), 0em 2.5em 0 0em #000000, -1.8em 1.8em 0 0em rgba(0,0,0, 0.2), -2.6em 0em 0 0em rgba(0,0,0, 0.2), -1.8em -1.8em 0 0em rgba(0,0,0, 0.2);
  }
  62.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(0,0,0, 0.2), 1.8em -1.8em 0 0em rgba(0,0,0, 0.2), 2.5em 0em 0 0em rgba(0,0,0, 0.2), 1.75em 1.75em 0 0em rgba(0,0,0, 0.5), 0em 2.5em 0 0em rgba(0,0,0, 0.7), -1.8em 1.8em 0 0em #000000, -2.6em 0em 0 0em rgba(0,0,0, 0.2), -1.8em -1.8em 0 0em rgba(0,0,0, 0.2);
  }
  75% {
    box-shadow: 0em -2.6em 0em 0em rgba(0,0,0, 0.2), 1.8em -1.8em 0 0em rgba(0,0,0, 0.2), 2.5em 0em 0 0em rgba(0,0,0, 0.2), 1.75em 1.75em 0 0em rgba(0,0,0, 0.2), 0em 2.5em 0 0em rgba(0,0,0, 0.5), -1.8em 1.8em 0 0em rgba(0,0,0, 0.7), -2.6em 0em 0 0em #000000, -1.8em -1.8em 0 0em rgba(0,0,0, 0.2);
  }
  87.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(0,0,0, 0.2), 1.8em -1.8em 0 0em rgba(0,0,0, 0.2), 2.5em 0em 0 0em rgba(0,0,0, 0.2), 1.75em 1.75em 0 0em rgba(0,0,0, 0.2), 0em 2.5em 0 0em rgba(0,0,0, 0.2), -1.8em 1.8em 0 0em rgba(0,0,0, 0.5), -2.6em 0em 0 0em rgba(0,0,0, 0.7), -1.8em -1.8em 0 0em #000000;
  }
}



</style>

<script type="text/javascript" src="{{ asset('js/assets/tweet.js') }}"></script>
<!-- <script type="test/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"> </script> -->
  <!-- <script>

    var result;
    var tweetCount;

    function getTweet(tweet) {

      $.ajax({
        type: 'POST',
        url: '/api/getTweet',
        dataType: 'json',
        async: false,
        data: {
          tweetID: tweet["originTweetID"],
          _token: '{{ csrf_token() }}'
        },
        cache: false
      }).done(function(originTweet) {
        tweet = originTweet["tweet"];
      });
      return tweet;
    };

    /******************************************************************* ページ読み込んだ瞬間に実行される *******************************************************************/
    $(function() { // 遅延処理
        $.ajax({
          type: 'POST',
          url: '/api/reloadTweets', // url: は読み込むURLを表す
          dataType: 'json', // 読み込むデータの種類を記入
          data: {
            userID: '',
            _token: '{{ csrf_token() }}'
          },
          cache: false
        }).done(function(results) {
          // 通信成功時の処理

            result = results;

            dispTweets(result);
            tweetCount = results.length;
            console.log("初期のツイートの数　" + result.length);

        }).fail(function(err) {
          // 通信失敗時の処理
          alert('ファイルの取得に失敗しました。');
      });
    });


    /******************************************************************* 1秒ごとにツイートの数を取得し数に変動があった場合にアラート表示 *******************************************************************/
    $(function() { // 遅延処理
      setInterval((function update() { //1000ミリ秒ごとに実行
        $.ajax({
          type: 'POST',
          url: '/api/reloadTweets', // url: は読み込むURLを表す
          dataType: 'json', // 読み込むデータの種類を記入
          data: {
            userID: '',
            _token: '{{ csrf_token() }}'
          },
          cache: false
        }).done(function(results) {

          if (tweetCount != results.length) {
            // アラートの追加
            document.getElementById('alertContents').innerHTML = '<div id="alert" class="alert alert-info" role="alert">' +
                                                                    '<a href="#" class="alert-link">新しいツイート</a>' +
                                                                  '</div>';
            console.log("本家のツイートの数　" + results.length);
            console.log("保持しているツイートの数　" + tweetCount);
          }
        }).fail(function(err) {
          // 通信失敗時の処理
          alert('ファイルの取得に失敗しました。');
        });
        return update;
      }()), 10000);
    });

    /******************************************************************* ファボ *******************************************************************/
    $(function() {
      $("#centerContents").on('click', ".fab", function() {
        tweetid = $(this).parents().siblings("#tweetID").val();
        var push_button = this;
        $.ajax({
          type: 'POST',
          url: '/api/fabChange',
          dataType: 'json',
          data: {
            userID: "{{ session('userID') }}",
            tweetID: tweetid,
            _token: '{{ csrf_token() }}'
          },
          cache: false
        }).done(function(results) {
          if (results["message"] == "add") {
            $(push_button).css("color", "red");
            $(push_button).children().css("color", "red");
          } else if (results["message"] == "delete") {
            $(push_button).css("color", "gray");
            $(push_button).children().css("color", "gray");
          } else{
            alert("お気に入りに追加できませんでした");
          }
        });
      });
    });

    /******************************************************************* リツイート *******************************************************************/
    $(function() {
      $("#centerContents").on('click', ".normalReTweet", function() {
        // var tweetid = $("#centerContents > #tweetID").val();
        var tweetid = $(this).parents("").siblings("#tweetID").val();
        var push_button = this;
        $.ajax({
          type: 'POST',
          url: '/api/reTweetChange',
          dataType: 'json',
          data: {
            userID: "{{ session('userID') }}",
            tweetID: tweetid,
            _token: '{{ csrf_token() }}'
          },
          cache: false
        }).done(function(results) {
          //アコーディオンを閉じる処理
          $(push_button).parents(".inner").slideToggle();

          if (results["message"] == "add") {
            $(push_button).parents().prevAll(".reTweet").children().css("color", "green");
            $(push_button).text("リツイートを取り消す");
          } else if (results["message"] == "delete") {
            $(push_button).parents().prevAll(".reTweet").children().css("color", "gray");
            $(push_button).text("リツイート");
          } else {
            alert("リツイートできませんでした。");
          }
        });
      });
    });

    /******************************************************************* ツイート表示 *******************************************************************/
    function dispTweets(results) {
      $('#centerContents').empty();

      let tweetType;
      let userIcon;
      let tweetDocument;
      let countImg;
      let iconColor;
      let reTweetText;

      results.forEach(function(tweet) {

        tweetDocument = "";
        
        tweetDocument += '<div class="tweet card">';
        
        if (tweet["type"] == "retweet") {
          tweetDocument += '<input id="tweetID" type="hidden" value=' + tweet["originTweetID"]["$oid"] + ' />';
          tweetType = '<div class="retweet-user">' + tweet["userID"] + 'さんがリツイートしました</div>';
          tweet = getTweet(tweet);
        } else {
          tweetDocument += '<input id="tweetID" type="hidden" value=' + tweet["_id"]["$oid"] + ' />';
          tweetType = "";
        }

        if (typeof tweet["userImg"] !== "undefined"){
          userIcon = tweet["userImg"];
        }else{
          userIcon = "";
        }

        tweetDocument +=`
        <div class="tweetTop card-header">
          ${tweetType}
          <div class="tweetTop-left" style="display:inline-block; vertical-align:middle;">
            <img src="${userIcon}" width="50px" height="50px" />
          </div>
          <div class="tweetTop-right" style="display:inline-block; vertical-align:middle; position:relative; left:10%;">
            <div class="tweet-user">
              <a href=/profile?user=' + ${tweet["userID"]} + '>
                ${tweet["userID"]}
              </a>
            </div>
            <div class="time">
              ${tweet["time"]}
            </div>
          </div>
        </div>
        <div class="tweetMain card-body">${tweet["text"]}</div>
        <div class="imagePlaces" style=float:left>
        `;

        //画像表示
        countImg = tweet["img"].length;
        for (var i = 0; i < countImg; i++) {
          tweetDocument += `<img src=" ${tweet["img"][i]}"width="200" height="150" />`;
        }

        tweetDocument += `
        </div>
        <div class="tweetBottom d-inline">`;

        //リプライ
        tweetDocument += '<button class=reply type=button><span class="oi oi-action-undo" style="color:blue;"></span> </button>';

        //リツイート
        iconColor = "";
        reTweetText = "";

        if (tweet["type"] == "tweet") {
          if (tweet["retweetUser"].indexOf("{{ session('userID') }}") == -1) {
            iconColor = "gray";
            reTweetText = "リツイート";
          } else {
            iconColor = "green";
            reTweetText = "リツイートを取り消す";
          }
        } else {
          //とりあえず
          iconColor = "pink";
          reTweetText = "これはリツイートです";
        }
        tweetDocument += `
        <div class="accordion">
          <button class=reTweet type=button><span class="oi oi-loop" style="color: ${iconColor} ;"></span> </button>

          <div class="inner">
            <button class=normalReTweet type=button> ${reTweetText}</button>
            <a href=javascript:open2()>🖊コメントつけてリツイート</a>
          </div>
        </div>
        `;

        //ファボ
        if (tweet["fabUser"].indexOf("{{ session('userID') }}") == -1) {
            iconColor = "gray";
          } else {
            iconColor = "red";
        }

        tweetDocument += `<button class=fab type=button><span class="oi oi-heart" style="color:${iconColor};"></span> </button>`;
        
        tweetDocument += '</div>';
        tweetDocument += '</div>';

        $('#centerContents').append(tweetDocument);
      });
    }

    /******************************************************************* 新しいツイートの表示 *******************************************************************/

    $(function() { // 遅延処理
      $(document).on("click", ".alert-link", function() {
        $.ajax({
          type: 'POST',
          url: '/api/reloadTweets', // url: は読み込むURLを表す
          dataType: 'json', // 読み込むデータの種類を記入
          data: {
            userID: '',
            _token: '{{ csrf_token() }}'
          },
          cache: false
        }).done(function(results) {

          dispTweets(results);

          $("#alert").remove();
          tweetCount = results.length;

          console.log("本家のツイートの数　" + results.length);
          console.log("保持しているツイートの数　" + tweetCount);

        }).fail(function(err) {
          // 通信失敗時の処理
          alert('ファイルの取得に失敗しました。');
        });
      });
    });


    /******************************************************************* アコーディオンの閉じたり開いたり *******************************************************************/

    $(function() {
      $("#centerContents").on("click", ".reTweet", function() {
        //クリックされた.accordion2の中のp要素に隣接する.accordion2の中の.innerを開いたり閉じたりする。
        $(this).next('.inner').slideToggle();
      });
    });

    /******************************************************************* 別タブで表示 *******************************************************************/
    function open1() {
      var w = (screen.width - 600) / 2;
      var h = (screen.height - 600) / 2;
      window.open("/tweet", "hoge", "width=600, height=500" + ",left=" + w + ",top=" + h + ",directions=0 , location=0  , menubar=0 , scrollbars=0 , status=0 , toolbar=0 , resizable=0");      
    }

    /******************************************************************* 別タブで表示２（仮） *******************************************************************/
    function open2() {
      window.open("/tweet", "hoge", "width=600, height=600 , location=no");
    }
  </script> -->
</head>

<body>
  <div id="menu row d-inline col-md-12">
    <button type="button" class="link_button btn page-link text-dark d-inline-block" onclick="location.href='/home'">home</button>
    <button type="button" class="link_button btn page-link text-dark d-inline-block" onclick="location.href='/notify'">通知</button>
    <button type="button" class="link_button btn page-link text-dark d-inline-block" onclick="location.href='/DM'">メッセージ</button>
    <button type="button" class="link_button btn page-link text-dark d-inline-block" onclick="location.href='/story'">ストーリー</button>
    <input type="image" class="link_button btn page-link text-dark d-inline-block" onclick="location.href='/profile'" src="{{ $userIcon }}" height="40" width="40" class="img-thumbnail" style="width: auto; padding:0; margin:0; background:none; border:0; font-size:0; line-height:0; overflow:visible; cursor:pointer;">
    </button>

    <form method='get' action="/search" class="form-inline d-inline">
      <!-- <div class="form-group"> -->
      <input class="form-control" type=text name="searchString">
      <button class="form-control" type=input> <span class="oi oi-magnifying-glass"></span> 検索 </button>
      <!-- </div> -->
    </form>
    <button type="button" class="link_button btn page-link text-dark d-inline-block" target=”_blank” onclick='open1();'">ツイート</button>
        <button type=" button" class="link_button btn page-link text-dark d-inline-block" onclick="location.href='/logout'">ログアウト</button>
  </div>
  <div id="alertContents"></div>
  <div class="loader">Loading...</div>
  <div class="row">
    <div id="leftContents" class="col-sm-3"></div>
    <div id="centerContents" class="col-sm-6"></div>
    <div id="rightContents" class="col-sm-3"></div>
  </div>
</body>
</html>