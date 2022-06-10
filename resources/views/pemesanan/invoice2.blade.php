<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            background-color: lightgray;
        }

        section {    
            margin:  80px auto;
            height: 14cm;
            width: 30cm;
            background-color: white;
        }

        article {
            padding: 15px;
        }

        .header{
            display: flex;
        }

        .title {
            width: 70%;
        }

        .note {
            width: 30%;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            overflow: hidden;
            align-items: flex-end;
        }

        .shipto{
        }   

        .datetime{
        }

        .kotak {
            height: 50px;
            width: 100%;
            border: 1px solid black;
            border-radius: 10px;
        }

        .subheader1 h5{
            padding : 5px;
            text-align: center;
        }

        .subheader2 {
            display: flex;
            margin-bottom: 15px;
        }

        .subheader2 .bag1 {
            width: 50%;
        }

        .subheader2 .bag2 {
            width: 50%;
        }

        table {
            width: 100%;
        }

        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
        }

    </style>
</head>
<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
<body>

  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
  <section>

    <!-- Write HTML just like a web page -->
    <article>
        <div class="header">
            <div class="title">
                <h5>TheBest IT Solution</h5>
                <h1>CV. SMARTMOTECARE MANDIRI</h1>
                <p>Office : Jl. Aria Adiarsa Babakan tengah. Rt. 01/05, Kel.Adiarsa Timur</p>
                <p>Telp : (0267)4671666 Fax. 0267 - 409386</p>
                <p>Home page : http://www.smi.co.if Email:info@smi.com</p>
            </div>
            <div class="note">
                <div class="shipto">
                    <p>Ship to:</p>
                </div>
                <div class="datetime">
                    <p>Date: {{ $pesanan->tanggal }}</p>
                    <p>Time:</p>
                </div>
                <div class="kotak"></div>
            </div>
        </div>
        <hr style="margin-top: 20px;">
        <div class="subheader1">
            <h5>Delivery Order</h5>
        </div>
        <div class="subheader2">
            <div class="bag1">
                <h5>Delivery No:</h5>
                <h5>Purc Ord No:</h5>
            </div>
            <div class="bag2">
                <h5>Inv No:</h5>
                <h5>Driver No:</h5>
            </div>
        </div>
        <table>
            <tr>
                <!-- <th>No.</th> -->
                <th>Nama Pemesan</th>
                <th>Alamat</th>
                <th>Nama Barang</th>
                <th>Jumlah Barang</th>
                <th>Total</th>
            </tr>
            <tr>
                <!-- <td>1</td> -->
                <td>{{ $pesanan->nama }}</td>
                <td>{{ $pesanan->alamat }}</td>
                <td>{{ $pesanan->barang }}</td>
                <td>{{ $pesanan->jumlah }}</td>
                <td>{{ $pesanan->total }}</td>
            </tr>
        </table>       
    </article>

  </section>

</body>
</html>