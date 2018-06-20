<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
body {
	Margin: 0!important;
	padding: 15px;
	background-color: #FFF;
}
.wrapper {
	width: 100%;
	table-layout: fixed;
}
.wrapper-inner {
	width: 100%;
	background-color: #eee;
	max-width: 670px;
	Margin: 0 auto;
}
table {
	border-spacing: 0;
	font-family: sans-serif;
	color: #727f80;
}
.outer-table {
	width: 100%;
	max-width: 670px;
	margin: 0 auto;
	background-color: #FFF;
}
td {
    padding: 0;
}
.header {
    background-color: #585858;
    border-bottom: 3px solid #e67e22;
}
p {
    Margin:0;
}
.header p {
    text-align: center;
    padding: 1%;
    font-weight: 500;
    font-size: 11px;
    text-transform: uppercase;
}
a {
    color: #F1F1F1;
    text-decoration: none;
}
/*--- End Outer Table 1 --*/
.main-table-first {
	width: 100%;
	max-width: 610px;
	Margin: 0 auto;
	background-color: #FFF;
	border-radius: 6px;
	margin-top: 25px;
}
/*--- Start Two Column Sections --*/
.two-column {
    text-align: center;
    font-size: 0;
    padding: 5px 0 10px 0;
}
.two-column .section {
    width: 100%;
    max-width: 300px;
    display: inline-block;
    vertical-align: top;
}
.two-column .content {
    font-size: 16px;
    line-height: 20px;
    text-align: justify;
}
.content {
    width: 100%;
    padding-top: 20px;
}
.center {
    display: table;
    Margin: 0 auto;
}
img {
    border: 0;
}
img.logo {
    float: left;
    margin-left: 13%;
    max-width: 200px!important;

}
#callout {
    float: right;
    Margin: 4% 5% 2% 0;
    height: auto;
    overflow: hidden;
}
#callout img {
    max-width: 20px;
}
.social {
    list-style-type: none;
    Margin-top: 1%;
    padding: 0;
}
.social li {
    display: inline-block;
}
.social li img {
    max-width: 15px;
    Margin-bottom: 0;
    padding-bottom: 0;
}
/*--- Start Outer Table Banner Image, Text & Button --*/
.image img {
    width: 100%;
    max-width: 670px;
    height: auto;
}
.main-table {
    width: 100%;
    max-width: 610px;
    margin: 0 auto;
    background-color: #FFF;
    border-radius: 6px;
}
.one-column .inner-td {
    font-size: 16px;
    line-height: 20px;
    text-align: justify;
}
.inner-td {
    padding: 10px;
}
.h2 {
    text-align: center;
    font-size: 23px;
    font-weight: 600;
    line-height: 45px;
    Margin: 12px;
    color: #4A4A4A;
}
p.center {
    text-align: center;
    max-width: 580px;
    line-height: 24px;
}
.button-holder-center {
    text-align: center;
    Margin: 5% 2% 3% 0;
}
.button-holder {
    float: right;
    Margin: 5% 0 3% 0;
}
.btn {
    font-size: 15px;
    font-weight: 600;
    background: #e67e22;
    color: #FFF;
    text-decoration: none;
    padding: 9px 16px;
    border-radius: 28px;
}
/*--- Start Two Column Image & Text Sections --*/
.two-column img {
    width: 100%;
    max-width: 280px;
    height: auto;
}
.two-column .text {
    padding: 10px 0;
}
/*--- Start 3 Column Image & Text Section --*/
.outer-table-2 {
	width: 100%;
	max-width: 670px;
	margin: 22px auto;
	background-color: #C2C1C1;
    border-bottom: 3px solid #81B9C3;
    border-top: 3px solid #81B9C3;
}
.three-column {
    text-align: center;
    font-size: 0;
    padding: 10px 0 30px 0;
}
.three-column .section {
    width: 100%;
    max-width: 200px;
    display: inline-block;
    vertical-align: top;
}
.three-column .content {
    font-size: 16px;
    line-height: 20px;
}
.three-column img {
    width: 100%;
    max-width: 125px;
    height: auto;
}
.outer-table-2 p {
	margin-top: 6px;
	color: #FFF;
	font-size: 18px;
	font-weight: 500;
	line-height: 23px;
}
/*--- Start Two Column Article Section --*/
.outer-table-3 {
    width: 100%;
    max-width: 670px;
    margin: 22px auto;
    background-color: #585858;
    border-top: 3px solid #e67e22;
}
.h3 {
	text-align: center;
	font-size: 21px;
	font-weight: 600;
	Margin-bottom: 8px;
	color: #4A4A4A;
}
/*--- Start Bottom One Column Section --*/
.inner-bottom {
	padding: 22px;
}
.h1 {
    text-align: center!important;
    font-size: 25px!important;
    font-weight: 600;
    line-height: 45px;
    Margin: 12px 0 20px 0;
    color: #4A4A4A;
}
.inner-bottom p {
	font-size: 16px;
	line-height: 24px;
	text-align: justify;
}
/*--- Start Footer Section --*/
.footer {
	width: 100%;
	background-color: #585858;
	Margin: 0 auto;
    color: #fff;
}
.footer  img {
	max-width: 80px;
	Margin: 0 auto;
	display: block;
	padding: 4% 0 1% 0;
}
p.footer {
	text-align: center;
	color: #fff!important;
	line-height: 30px;
	padding-bottom: 4%;
    text-transform: uppercase;
}
/*--- Media Queries --*/
@media screen and (max-width: 400px) {
	.h1 {
		font-size: 22px;
	}
	.two-column .column, .three-column .column {
		max-width: 100%!important;
	}
	.two-column img {
		width: 100%!important;
	}
	.three-column img {
		max-width: 60%!important;
	}
}
@media screen and (min-width: 401px) and (max-width: 400px) {

	.two-column .column {
		max-width: 50%!important;
	}
	.three-column .column {
		max-width: 33%!important;
}
}
@media screen and (max-width:768px) {
img.logo {
	float:none !important;
	margin-left:0% !important;
	max-width: 200px!important;
}

#callout {
	float:none !important;
	margin: 0% 0% 0% 0;
	height: auto;
	text-align:center;
	overflow: hidden;
}
#callout img {
    max-width:26px !important; 
}
.two-column .section {
	width: 100% !important;
	max-width: 100% !important;
	display: inline-block;
	vertical-align: top;
}

.two-column img {
	width: 100% !important;
 	height: auto !important;
}
img.img-responsive {
    width:100% !important;
    height:auto !important;
    max-width:100% !important;
}
.content {
	width: 100%;
	padding-top:0px !important;
}
}
</style>
 </head>
<body>
    <div class="wrapper">
    	<div class="wrapper-inner">
    		<table class="outer-table">
    			<tr>
    				<td class="header">
    					<p><a href=""></a></p>
    				</td>
    			</tr> <!--- End Header -->
            </table> <!--- End Outer Table -->
            <table class="main-table-first">
                <tr>
                    <td class="two-column">
                        <div class="section">
                            <table width="100%">
                                <tr>
                                    <td class="inner-td">
                                        <table class="content">
                                            <tr>
                                                <td align="center">
                                                    <img src="https://s19.postimg.cc/rgln5cqgj/feeds.png" class="logo">
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div> <!--- End First Column of Two Columns -->
                    </td>
                </tr> <!--- End Two Column Section -->
                </table> <!--- End Main Table -->
            <table class="main-table">
    			<tr>
    				<td class="one-column">
    					<table width="100%">
    						<tr>
    							<td class="inner-td">
    								<p class="h2">Hola {{$name}}</p>
    								<p class="center">Te damos la bienvenida a nuestra plataforma para corroborar tus datos
                                    te invitamos a dar click.</p>
    								<p class="button-holder-center">
    									<a class="btn" href="{{url('http://localhost:8000/activacion/'.$code)}}">Ingresa aquí</a>
    								</p>
    							</td>
    						</tr>
    					</table>
    				</td>
    			</tr> <!--- End Heading, Paragraph & Button Section -->
            <table class="outer-table-3">
    			<tr>
    				<td class="one-column">
    					<table width="100%">
    						<tr>
    							<td class="footer">
    								<img src="https://s19.postimg.cc/wsjds9pj7/feeds_blanco.png">
    								<p class="footer">Contacto: feedscampeche@gmail.com<br>&copy; feeds, 2018.<br></p>
    							</td>
    						</tr>
    					</table>
    				</td>
    			</tr>
    		</table> <!--- End Main Table -->
    	</div> <!--- End Wrapper Inner -->
    </div> <!--- End Wrapper -->
    <br>
</body>
</html>