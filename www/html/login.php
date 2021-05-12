<?php
// conf...confingの略　confingは設定という意味
// constとは　定義という意味
// ここでは定数を定義しているconst.phpを読み込む
require_once '../conf/const.php';
// MODEL_PATHとはモデルを定義しているディレクトリへの道筋
// この定数はconst.phpに定義されている
// ここではモデルのfunction.phpを読み込む
require_once MODEL_PATH . 'functions.php';
// セッションを開始する
session_start();
// be動詞＋過去分詞だと受動態の意味になる
// すなわちis_loginedはログインされているという意味になる
// つまり、is＿logined()がtrueということはログインされていればという意味になる
// このis_loginedの関数は９行目で読み込んだfunctions.phpに定義されている
if(is_logined() === true){
// すでにログイン済みあればユーザー登録ページを表示する必要がないので商品一覧ページに飛ぶ
  redirect_to(HOME_URL);
}
// includeは含めるという意味
// ここではlogin_view.phpをここに取り込む
include_once VIEW_PATH . 'login_view.php';