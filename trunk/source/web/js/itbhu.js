function SentenceCase(text){
	text.value = text.value.substr(0, 1).toUpperCase() + text.value.substr(1);
}
function showpicture(){
	menu=$('targetid');
	if(menu.selectedIndex > 0 ){
		$('detailpagetr').style.display='';
		$('detailcheck').checked=true;
		$('urltr').style.display='none';
	}
}	
function showdetailpage(check){
	if(check.checked == true){
		$('detailpagetr').style.display='';
		$('urltr').style.display='none';
	}else{
		$('detailpagetr').style.display='none';
		$('urltr').style.display='';
	}
}
function loadmenu() {
		var node=$('childmenu');
		if(node){
		node.onmouseover=function() {
			this.className+="over";
  		}
  		node.onmouseout=function() {
  			this.className=this.className.replace("over", "");
   		}
   		}
}


