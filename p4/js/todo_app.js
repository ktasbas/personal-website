// M. Kaan Tasbas | mktasbas@gmail.com
// p4/todo_app.js

// Update local storage with current list
function updateLocalStorage() {
	var list = $('#todo_list');
	localStorage.setItem('list', $(list).html());
	console.log(localStorage.getItem('list'));
}

// Load previous list from local storage
function loadLocalStorage() {
	var list = localStorage.getItem('list');
	$('#todo_list').html(list);
	console.log($('#todo_list').html());
}

// Add an item to the list
function addTodoItem() {
	// Get text entry for item
	var todoItem = $("#new_item").val();

	// Check for empty input
	if(todoItem === "") return;

	// Add item to the unordered list
	$("#todo_list").append(
		 "<li class='mb-3'>" 
		+	"<div class='row'>"
		+		"<div class='col-md-auto'>"
					// Add Complete checkbox
		+			"<h5>"		
		+			"<input type='checkbox' id='item' name='item_done' class='item_done'"
						// Add To Do Item as "label" of checkbox
		+				"value='" + todoItem + "' /> " + todoItem
		+			"</h5>"
		+		"</div>"
		+		"<div class='col-md-auto'>"
					// Add Edit button
		+			"<button class='modify_item btn btn-sm btn-primary my-1 my-sm-0'>"
		+				"<span class='fas fa-edit mr-1'></span>"
		+				"Edit"
		+			"</button>"
		+		"</div>"
		+		"<div class='col-md-auto'>"
					// Add Delete button
		+			"<button class='delete_item btn btn-sm btn-danger my-1 my-sm-0'>"
		+				"<span class='fas fa-trash mr-1'></span>"
		+				"Delete"
		+			"</button>"
		+		"</div>"
		+	"</div>"
		+"</li>"
		);

	// Clear text entry in submission box
	$("#new_item").val("");
	updateLocalStorage();
}

// Modify an item from the list
function modifyTodoItem(e, item) {
	// Stop browser from default click behavior
	e.preventDefault();
	// Select row of clicked edit button
	var row = $(item).parent().parent().parent();
	// Select todo text
	var input_value = $(row).find("h5").text();
	// Replace to do text with input to modify
	$(row).find("h5").html(
		  "<div class='row'>"
		+ 	"<div class='col-sm-auto'>"
		+ 		"<input type='text' id='modifying' class='form-control' value='" + input_value + "'>"
		+ 	"</div>"
		+ 	"<div class='col-sm-auto'>"
		+ 		"<h6><button type='submit' id='confirm_item' class='confirm_item btn btn-sm btn-primary my-1 my-sm-0'>Confirm</button></h6>"
		+ 	"</div>"
		+ "</div>"
		);
	updateLocalStorage();
}

// Confirm modified value of to do item
function confirmTodoItem(e, item) {
	// Stop browser from default click behavior
	e.preventDefault();
	// Select row of clicked edit button
	var todo_item = $(item).parent().parent().parent().parent();
	var new_input = $(todo_item).find('#modifying').val();
	$(todo_item).html(
		"<input type='checkbox' id='item' name='item_done' class='item_done' value='" + new_input + "' /> " + new_input
		);
	updateLocalStorage();
}

// Delete an item from the list
function deleteTodoItem(e, item) {
	// Stop browser from acting on the click itself
	e.preventDefault();
	// Select row to remove
	var row = $(item).parent().parent().parent();
	// Remove item from list
	row.fadeOut('slow', function () {
		row.remove();
		updateLocalStorage();
	});
}

// Mark item as complete
function completeTodoItem() {
	// Strike through item
	$(this).parent().toggleClass("complete");
	updateLocalStorage();
}

// Event handlers
$(function () {

	// Load list from local storage when page DOM is ready
	$(document).ready(loadLocalStorage());

	// Add item button event handler
	$("#add_item").on('click', function (e) {
		// Stop browser from acting on click itself
		e.preventDefault();
		// Add item to list
		addTodoItem()
	});

	// Modify item button event handler
	// #todo_list used as handler because #modify_item doesn't exist until an entry is made
	$("#todo_list").on('click', '.modify_item', function(e) {
		var item = this;
		modifyTodoItem(e, item);
	})

	// Confirm item buton event handler
	// #todo_list used as handler because #confirm_item is spawned by and replaces #modify_item
	$("#todo_list").on('click', '.confirm_item', function(e) {
		var item = this;
		confirmTodoItem(e, item);
	})

	// Delete item button event handler
	// #todo_list used as handler because #delete_item doesn't exist until an entry is made
	$("#todo_list").on('click', '.delete_item', function (e) {
		var item = this;
		deleteTodoItem(e, item)
	})

	// Completed item checkbox event handler
	$(document).on('click', ".item_done", completeTodoItem)

});