<? include "header.tpl" ?>
<article>
	<div class="kon">
		<h2>На кону <?=$this->winner?> грн!</h2><br>
		<div data-toggle="modal" data-target="#modal_reg"  class="circle">
		<h3>Участвовать!</h3></div>
	</div>
</article>
<?if (!is_auth()){?> 
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="modal_reg">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="gridSystemModalLabel">Регистрация</h4>
			      </div>
			      <div class="modal-body">
			        <div class="row form-horizontal">
			         <!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="textinput">Логин</label>  
						  <div class="col-md-5">
						  <input id="textinput" name="textinput" type="text" placeholder="ms_root" class="form-control input-md login_form">
						
						  </div>
						</div>

						<!-- Password input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="passwordinput">Пароль</label>
						  <div class="col-md-5">
						    <input id="passwordinput" name="passwordinput" type="password" placeholder="123456" class="form-control input-md pass_form">
						  
						  </div>
						</div>

						<!-- Password input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="passwordinput">Подтвердить пароль</label>
						  <div class="col-md-5">
						    <input id="passwordinput" name="passwordinput" type="password" placeholder="123456" class="form-control input-md pass_form_con">
						  
						  </div>
						</div>
			        </div>
			      </div>
			      <div class="errors" style="margin:10px;color:red"></div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-primary regist">Зарегистрироватся</button>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
			<script type="text/javascript">
				$(document).ready(function(){
					$('.regist').click(function(){
						$(".errors").empty();
						if($('.pass_form').val() == $('.pass_form_con').val() && $('.pass_form').val() != "" && $('.pass_form_con').val() != ""){
							$.post("/main/regist",{user:{name:$('.login_form').val(),pass:$('.pass_form').val()}},function(data){
								if(data != "done"){
									$(".errors").html(data);

								}else{
									$("#modal_reg").modal("hide");
								}
							});
						}else{
							$(".errors").append("<p>Пароли не совпадают</p>");
						}
						
					});
				});
			</script>
			<?}?> 

<? include "footer.tpl"?>