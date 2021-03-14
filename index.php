<html>
	<head>
		<title>random</title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery-3.6.0.min.js"></script>
		<script>
			function funcBefore () {
				$('#rezult').html("<div class = 'number'>Ожидание данных...</div>");
			}
			function funcSuccess (data) {
				$('#rezult').hide();
				$('#rezult').html(data);
				$('#rezult').slideDown("show");
			}
			$(document).ready (function () {
				$('#submit').bind("click", function(){
					$.ajax ({
						url: "load.php",
						type: "POST",
						data: ({ot: $('#downSide').val(), pos: $('#upSide').val(), value: $('#value').val()}),
						dataType: "html",
						beforeSend: funcBefore,
						success: funcSuccess
					});
				});
			});
		</script>
	</head>
	<body>
		<div id="aside">
			<div class="text-center">
				<div class="author-img" style="background-image: url(images/1.png);"></div>
				<h1 id="logo">Random PRO</h1>
			</div>
			<div  align = "center">
				<div class = "row" style = "width: 60%;">
					<div class = "col" style = "padding: 0px;">
						<input type = "text" id = "downSide" placeholder = "От" style = "width: 70px"/>
					</div>
					<div class = "col">
						<input type = "text" id = "upSide" placeholder = "До" style = "width: 70px"/>
					</div>
				</div>
				<div class = "row" style = "width: 70%; padding-top: 10px;">
					<div class = "col">
						<input type = "text" id = "value" placeholder = "Количество" style = "width: 100px"/>
					</div>
				</div>
				<div class = "row" style = "padding-top: 10px;">
					<div class = "col">
						<button id = "submit" class = "btn btn-success">Сгенерировать</button>
					</div>
				</div>
			</div>

			<div class="footer">
				<p><small>&copy; Copyright <script>document.write(new Date().getFullYear());</script> Все права защищены &copy;</small></p>
			</div>
		</div>
		<div id = "main" align = "center">
			
				<span class = "number">Результат:</span><br>
			<div id = "rezult" class = "container" style = "width: 100%;">
				<span class = "number">Сгенерируйте числа</span>
			</div>
		</div>
	</body>
</html>