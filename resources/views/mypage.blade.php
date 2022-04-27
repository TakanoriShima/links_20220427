<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <title>マイページ</title>
  <link rel="stylesheet" href="./css/mypage.css" type="text/css" />
</head>
<body>
  <div class="h">
    <span></span>
    <span></span>
    <span></span>
  </div>
  <div class="h2">
    <nav id="spmenu">
      <ul class="menu">
        <li>
          <a href="mypage">
            <img src="images/MYPAGE.png" alt="マイページ">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="images/COMMUNITY.png" alt="コミュニティ">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="images/TIMELINE.png" alt="タイムライン">
          </a>
        </li>
        <li>
          <a href="/logout">
            <img src="images/LOGOUT.png" alt="ログアウト">
          </a>
        </li>
      </ul>
    </nav>
  </div>
  <div class="nav">
    <div class="mypage">
      <ul>
       <li>
          <a href="mypage">マイページ</a>
        </li>
      </ul>
      <img class="myp" src="images/komyu.jpeg" alt="マイページ">
    </div>
    <div class="logout">
      <ul>
         <li>
          <a href="/logout">ログアウト</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="profile">
    <img id="img" src="images/profilesample.png" alt="プロフィール">
  </div>
  <div>
    <a href="/profiles/{{ \Auth::id() }}">プロフィールを見る</a>
  </div>
  <div class="gr">
   <div>
      <img class="event" src="images/audience.jpg" alt="イベント">
      <a href="eventdisplay.html"><p>イベント</p></a>
    </div>
    <div>
      <img class="event2" src="images/audience.jpg" alt="参加予定のイベント">
      <p><a href="join_community_display.html">参加予定のイベント</a></p>
    </div>
  </div>
  <div class="gr">
    <div>
      <img class="komyuran2" src="images/chairs.jpg" alt="コミュニティ一覧">
      <a href="/communities"><p>コミュニティ一覧</p></a>
    </div>
    <div>
      <img class="topic" src="images/glasses-book.jpg" alt="トピック一覧">
      <p><a href="topicdisplay.html">トピック一覧</a></p>
    </div>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="./js/mypage.js"></script>
</body> 