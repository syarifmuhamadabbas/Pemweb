<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum CSS</title>
</head>
    <style>
        /* Konsistensi dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* style body */
        body{
            font-family: Arial, Helvetica, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #7dded6;
            margin-botom: 50px;
            margin-top: 70px;
        }

        /* content: Layout utama */
        #content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* footer style */
        #footer{
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: white;
            margin-top: 20px;
            position: fixed;
            bottom: 10px;
            width: 100%;

            /* responsive */
            @media (max-width: 600px) {
                #content {
                    padding: 10px;
                }
            }
        }


    </style>
</head>
<body>
    <div id="content">
        <div class="container">
            <h3>Pertemuan 5 Pemrograman Web</h3>
        </div>
        <div class="container">
            <h5>Pertemuan kali ini belajar pengenalan CSS</h5>
        </div>
    </div>
</body>
</html>