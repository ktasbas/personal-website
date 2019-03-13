// M. Kaan Tasbas | mktasbas@gmail.com
// p4/todo_app.js

// Add an item to the list
function addTodoItem() {
	// Get text entry for item
	var todoItem = $("#new_item").val();

	// Add item to the unordered list
	$("#todo_list").append(
		 "<li>" 
		+	"<div class='row'>"
		+		"<div class='col-md-auto'>"
					// Add Complete checkbox
		+			"<h5>"		
		+			"<input type='checkbox' name='item_done' class='item_done'"
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
		+"<br>");

	// Clear text entry in submission box
	$("#new_item").val("");
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
	});
}

// Mark item as complete
function completeTodoItem() {
	// Strike through item
	$(this).parent().toggleClass("complete");
}

// Event handlers
$(function () {

	// Add item button event handler
	$("#add_item").on('click', function (e) {
		// Stop browser from acting on click itself
		e.preventDefault();
		// Add item to list
		addTodoItem()
	});

	// Delete item button event handler
	// #todo_list used as handler because #delete_item doesn't exist until an entry is made
	$("#todo_list").on('click', '.delete_item', function (e) {
		var item = this;
		deleteTodoItem(e, item)
	})

	// Completed item checkbox event handler
	$(document).on('click', ".item_done", completeTodoItem)

});