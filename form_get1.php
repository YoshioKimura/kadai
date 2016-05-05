<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>フォーム：GET</title>
    <link>
    <script src="//code.jquery.com/jquery-2.1.0.min.js"></script>
    <script src="//jpostal-1006.appspot.com/jquery.jpostal.js"></script>
    <link rel="stylesheet" href="rangeslider.css">
    <link rel="stylesheet" href="style.css">
    <script src="jquery.min.js"></script>
    <script src="rangeslider.js"></script>


    <script type="text/javascript">
        $('input[type="range"]').rangeslider();
        //破棄する場合は以下
        $('input[type="range"]').rangeslider('destroy');

        $('input[type="range"]').rangeslider({
            // polyfillの設定
            polyfill: true,

            // CSS用クラス
            rangeClass: 'rangeslider',
            fillClass: 'rangeslider__fill',
            handleClass: 'rangeslider__handle',

            // 初期化時のコールバック関数
            onInit: function () {},

            // スライド時のコールバック関数
            onSlide: function (position, value) {},

            // スライド終了時のコールバック関数
            onSlideEnd: function (position, value) {}
        });

        $(document).ready(function () {
                    $('#postcode1').jpostal({
                                postcode: [
			'#postcode1',
			'#postcode2'
		],
        address: {
        '#address1': '%3%4%5'
        }
        });
        })

    </script>
</head>

<body>

   
    <form method="post" action="fputs.php">
        <div class="form-item">名前
            <input type="text" name="name" size="10">
        </div>
        <div class="form-item">MAIL:
            <input type="text" name="mail" size="20">
        </div>
        <div class="form-item">郵便番号:
            <input type="text" id="postcode1" name="postcode1" maxlength="3">-
            <input type="text" id="postcode2" name="postcode2" maxlength="4">
            <br />
            <label class="form-item" for="address1">住所</label>:
            <input type="text" name="address1" id="address1" placeholder="都道府県">
            <br>

        </div>
        <div class="form-item">
        性別：
        </div>
        <input type="radio" name="sex" value="男" /> 男
        <input type="radio" name="sex" value="女" /> 女
        <br>
        <div class="form-item">今日の学習の満足度は100点中何点ですか？:<br>
            <input type="text" name="satisfaction" size="10">点
        </div>
        <br>
        <div class="form-item">わからない所は解消できましたか？:<br>
            <input type="text" name="solving" size="10">
        </div>
        <br>
        <div class="form-item">今日学んだことの中で、特に印象に残った所はありましたか？:<br>
            <input type="text" name="learning" size="10">
        </div>
        <br>
        <div class="form-item">もう少し知りたい事があれば書いてください:<br>
            <input type="text" name="satisfaction" size="10">
        </div>
        <br>
        <div class="form-item">その他にメンターへご要望、コメントがあれば記入してください:<br>
            <input type="text" name="request" size="10">
        </div>
        <br>
        
        
        <p>
            <input type="submit" value="送信">
        </p>
    </form>

</body>

</html>