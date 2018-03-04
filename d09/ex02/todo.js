var todos = [];
var item_added = 0;

function add_todo(){
	console.log('eirjeworj');
	var new_todo = prompt('add something to the list my dude', 'do the thing');
	if (new_todo) {
		var temp = document.createElement('div');
		temp.className = 'list_item';
		temp.innerHTML = new_todo;
		todos.push(new_todo);
		temp.onclick = function() {
			if (confirm("was this item completed?")){
				this.parentNode.removeChild(this);
				var edit_cook = document.cookie;
				edit_cook.replace(this.innerHTML, '');
				document.cookie = edit_cook;
				// todos.splice((todos.indexOf(this.innerHTML)), 1);
			}
		}
		var list_id = document.getElementById('ft_list');
		list_id.prepend(temp);
		document.cookie = "ftlist=" + todos.join(",");
		// var ret = "data-123".replace('data-','');
		// console.log(ret);
		item_added = 1;
		var cookies = document.cookie;
		console.log(cookies);
		// document.cookie = 'website=paulund; expires=Thu, 01-Jan-70 00:00:01 GMT;';
	}
}

function remember_cookies(){
	var cookies = document.cookie;
	var cookies_list = cookies.split("=");
	var split_cookies_list = cookies_list[1].split(",");
	if (split_cookies_list[0] != "") {
		for (var i = 0; i < split_cookies_list.length; ++i){
			todos.push(split_cookies_list[i]);
		}
	}
	if (todos[0] != "" && item_added == 0) {
		for (var i = 0; i < todos.length; ++i){
			var temp = document.createElement('div');
			temp.className = 'list_item';
			temp.innerHTML = todos[i];
			temp.onclick = function() {
				if (confirm("was this item completed?")){
					this.parentNode.removeChild(this);
					var edit_cook = document.cookie;
					edit_cook.replace(this.innerHTML + ',', '');
					console.log(this.innerHTML);
					document.cookie = edit_cook;
					// todos.splice((todos.indexOf(this.innerHTML)), 1);
				}
			}
			var list_id = document.getElementById('ft_list');
			list_id.prepend(temp);
		}
	}
}
