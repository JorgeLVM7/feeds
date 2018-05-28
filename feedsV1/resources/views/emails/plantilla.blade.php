<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table style="max-width= 600px; padding: 10px; margin:0 auto; boder-collapse: collapse;">
        <tr>
            <td style="background-color: #1C1C1C; padding: 0;">
                <img type="image/png" style="display: block;" src="https://s19.postimg.cc/wqnpptpw3/feeds.png"  height="164px" width="300px" >
            </td>
        </tr>
        <tr>
		    <td style="background-color: #ecf0f1">
			    <div style="color: #34495e; margin: 4% 10% 2%; text-align: justify;font-family: sans-serif">
				    <h2 style="color: #e67e22; margin: 0 0 7px">Hola {{$name}}</h2>
				    <p style="margin: 2px; font-size: 15px">
					Activa tu cuenta ingresando <a href="{{url('http://localhost:8000/activacion/'.$code)}}">aqui</a></p>
			    </div>
		    </td>
	    </tr>
    </table>
</body>
</html>