var kylin = (function(){
		// dom函数会选择符合条件的第一个标签
		// dom函数合并了document.querySelector,document.getElementById,document.getElementByTagName,document.getElementsByClassName等
		dom:function(dom){
			return document.querySelector(dom)
		},
		// domAll函数会选择符合条件的所有标签
		domAll:function(dom){
			return document.querySelectorAll(dom);
		}
	}
}())