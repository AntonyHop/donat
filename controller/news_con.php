<? /**
* News Controller
*/
class news_con extends controller{
	
	function index(){
		$this->tpl->set('title','Новости');
		$this->tpl->show('news.tpl');
		$user = $this->load_model("user");
		//$user->delete("Anton"); 
		//$user->add("Anton","123458ckvjjvA");
		$user->ch_passwort("Anton","123456"); 
	}
}