<? /**
* News Controller
*/
class news_con extends controller{
	
	function index(){
		$this->tpl->set('title','Новости');
		$this->tpl->show('news.tpl');
		
	}
}