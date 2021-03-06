<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=$this->title?></title>
	<link rel="stylesheet" href="/tpl/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<header class="col-md-12">
		<div class="logo col-md-5">
			<h1>Лотeрея DonAt</h1>
			<p>Выиграть может каждый!</p>
		</div>
		
			<ul class="main_menu col-md-7">
				<?if (!is_auth()){?>
				<li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal">Вход</button></li><?}else{?>
				<li><a href="/main/logout" class="btn btn-primary">Выход</a></li>
				<?}?>
				<li><a href="/news">Новости</a></li>
				<li><a href="/about">О проэкте</a></li>
				<li><a href="/">Главная</a></li>
				
			</ul>
		
			<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="modal">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="gridSystemModalLabel">Вход</h4>
			      </div>
			      <div class="modal-body">
			        <div class="row form-horizontal">
			         <!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="textinput">Логин</label>  
						  <div class="col-md-5">
						  <input id="textinput" name="textinput" type="text" placeholder="ms_root" class="form-control input-md log_log">
						
						  </div>
						</div>

						<!-- Password input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="passwordinput">Пароль</label>
						  <div class="col-md-5">
						    <input id="passwordinput" name="passwordinput" type="password" placeholder="123456" class="form-control input-md log_pass">
						  
						  </div>
						</div>
			        </div>
			      </div>
			      <div class="errors" style="margin:10px;color:red"></div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-primary login">Войти</button>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		<script type="text/javascript">
				$(document).ready(function(){
					$('.login').click(function(){
						$(".errors").empty(); 
						$.post("/main/login",{user:{name:$('.log_log').val(),pass:$('.log_pass').val()}},function(data){
							if(data != "done"){
								$(".errors").html(data);

							}else{
								$("#modal").modal("hide");
								location.reload();
							}
						});
						
					});

					$("[data-toggle='modal']").click(function(){
						$(".errors").empty(); 
					});
				});
			</script>
	</header>
	<div class="clear"></div>

	
