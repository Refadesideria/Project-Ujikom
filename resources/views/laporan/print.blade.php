
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>laporan</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <style>
            body{
                font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                color:#333;
                text-align:left;
                font-size:18px;
                margin:0;
                margin-top: 17px
            }
            .container{
                margin:0 auto;
                margin-top:35px;
                padding:40px;
                width:750px;
                height:auto;
                background-color:#fff;
            }
            caption{
                font-size:28px;
                margin-bottom:15px;
            }
            table{
                border:1px solid #333;
                border-collapse:collapse;
                margin:0 auto;
                width:740px;
            }
            td, tr, th{
                padding:12px;
                border:1px solid #333;
                width:185px;
            }
            th{
                background-color: royalblue;
                color: white;
            }
            h4, p{
                margin:0px;
            }
            caption{
                color: blue;
                font-weight: bold;
                font-family: 'Courier New', Courier, monospace;
            }
        </style>
    </head>
    <body>
        @foreach ($ticketing as $data)
        <div class="container">
            <table>
                <caption>
                  TICKETING
                </caption>
                <thead>
                    <tr>
                        <th colspan="3">Transaksi Ticketing <strong>#{{ $data->id }}</strong></th>
                        <th>{{ $data->created_at->format('D, d M Y') }}</th>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <h4>Perusahaan: </h4>
                            <p>PT.MGI ASPAC.<br>
                                Jl. Cibaduyut Gg Sauyunan<br>
                                08815733482<br>
                               refadesi@gmail.com
                            </p>
                        </td>
                        <td colspan="2">
                            <h4>Ticketing: </h4>
                            <p>{{ $data->ticketing->jneisrequest->kode }}<br>
                              {{ $data->ticketing->nama_subject }}<br>
                              {{ $data->ticketing->customer->name }} <br>
                              {{ $data->ticketing->department->name }}
                            </p>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Tanggal Request</th>
                        <th>Tanggal Selesai</th>
                        <th>Nama PIC</th>
                        <th>Deskripsi</th>
                    </tr>
                    <tr>
                        <td>{{ $data->ticketing->tanggal_request }}</td>
                        <td>{{ $data->ticketing->tanggal_selesai }}</td>
                        <td>{{ $data->ticketing->nama_pic }} </td>
                        <td>{{ $data->ticketing->deskripsi }} </td>

                    </tr>

                </tbody>
            </table>

        </div>
        @endforeach
    </body>
    </html>
