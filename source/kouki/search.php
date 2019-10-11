<?php
function search($search){
    $db = connect_mongo();
    $search = mb_convert_kana($search, 's');//全角スペースを半角にする
    $search = explode(" ", $search);
    $count = count($search);
    $find_tweet = [];
    $find_user = [];
    for($i = 0; $i < $count; $i++){
        $search_word = $search[$i];
        //検索する文字列の数に応じて下の配列を増やす
        $tweet = array("text" => new \MongoDB\BSON\Regex("$search_word"));
        $user = array('$or' => array(array("userName" => new \MongoDB\BSON\Regex("$search_word")),
            array("userID" => new \MongoDB\BSON\Regex("$search_word")),
            array("profile" => new \MongoDB\BSON\Regex("$search_word"))));

        array_push($find_tweet,$tweet);
        array_push($find_user,$user);
    }
    $tweet_result = $db ["tweetDB"] -> find(['$and' => $find_tweet]);//ツイート検索
    $user_result = $db ["userDB"] -> find(['$and' => $find_user]);
    print_r("ツイート"."<br>");
    foreach($tweet_result as $obj){
        print_r($obj);
    }
    print_r("<br>");
    print_r("ユーザー"."<br>");
    foreach($user_result as $obj){
        print_r($obj);
    }
    print_r("<br>");
    return true;
}
?>
