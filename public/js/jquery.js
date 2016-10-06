//Add another anchor to #listMain div group
function addListItem() {
	var li = document.createElement("A"); //create an anchor
	var t = document.createTextNode("Lavoro"); //create text
	li.setAttribute("href", "#"); //set anchor link to none
	li.setAttribute("contenteditable", "true"); //add editable attribute
	li.classList.add("list-group-item"); //add the list-group-item class
	li.classList.add("list-item-default"); //add the list-group-item class
	//add the onclick select function / requires double click
	li.ondblclick = function() {
		selectItem(this);
	};

	/*li.onclick = function() {
		$("a").click(function() {
			var self = $(this);

			self.toggleClass("list-item-selected");
		});
	};*/

	li.appendChild(t); //add the text to the li


	document.getElementById("listDefault").appendChild(li); //add the new list item to the main list
}

/* to delete...(pseudo code)
on clicking a list item add a "selected class"
on clicking delete remove items from list with class selected
on clear selection remove all selected classes
on clear list delete all list items
*/

function deleteListItems() {
	$(".list-item-selected").remove();
}

function deleteAll() {
	$(".list-group-item").remove();
}

function clearListItems() {
	$(".list-group-item").removeClass("list-item-selected");
}

//When clicking a list item toggle the class selected
//double click select
function selectItem(item) {
	var self = $(item);
		self.toggleClass("list-item-selected");
}

//On document load
$(document).ready(function() {

// save list and load list. Comment out when working on code

	var listMain = document.getElementById('listMain'); //set #listMain as a var
	$('#saveAll').click(function(){ //when click the #saveAll button
		localStorage.setItem('todoList', listMain.innerHTML); //copy the contents of list to storage
		alert("List saved!"); //let user know it's saved
	});

	$('#deleteSave').click(function(){ //when click the #deleteSave button
		localStorage.removeItem('todoList', listMain.innerHTML); //Remove saved list
		alert("Saved list removed from storage!!"); //let user know it's removed
	});

	loadList(); //on load page load the list
	function loadList() {
		if(localStorage.getItem('todoList')) { //if was saved before load it
			listMain.innerHTML = localStorage.getItem('todoList')
		}
	}

});


/* Change Importance
on click add the desired importance class and remove all others.
.list-item-default //default
.list-item-important //very important
.list-item-warning //important
*/

function setVeryImportant() {
	$(".list-item-selected").addClass("list-item-important");
	$(".list-item-selected").removeClass("list-item-warning");
	$(".list-item-selected").removeClass("list-item-default");
	$(".list-item-selected").removeClass("list-item-complete");
	$(".list-item-selected").appendTo("#listVeryImportant")

	$(".list-item-selected").removeClass("list-item-selected");
};

function setImportant() {
	$(".list-item-selected").addClass("list-item-warning");
	$(".list-item-selected").removeClass("list-item-important");
	$(".list-item-selected").removeClass("list-item-default");
	$(".list-item-selected").removeClass("list-item-complete");
	$(".list-item-selected").appendTo("#listImportant")

	$(".list-item-selected").removeClass("list-item-selected");
};

function setDefault() {
	$(".list-item-selected").addClass("list-item-default");
	$(".list-item-selected").removeClass("list-item-warning");
	$(".list-item-selected").removeClass("list-item-important");
	$(".list-item-selected").removeClass("list-item-complete");
	$(".list-item-selected").appendTo("#listDefault")

	$(".list-item-selected").removeClass("list-item-selected");
};

function setComplete() {
	$(".list-item-selected").addClass("list-item-complete");
	$(".list-item-selected").removeClass("list-item-default");
	$(".list-item-selected").removeClass("list-item-warning");
	$(".list-item-selected").removeClass("list-item-important");
	$(".list-item-selected").appendTo("#listCompleted")

	$(".list-item-selected").removeClass("list-item-selected");
};

function deleteComplete() {
	$(".list-item-complete").remove();
};

//Prevent list item links from going to a link or top of the page
//Don't want to use an actual ul li list so turn off all anchors
$('a').click(function(event) {
	event.preventDefault();
});
