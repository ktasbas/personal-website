// Add an item to the list
function addTodoItem() {
	// Get text entry for item
	var todoItem = $("#new_item").val();

	// Add item to the unordered list
	$("#todo_list").append("<li><input type='checkbox'" +
		" name='todo-item-done'" +
		" class='todo-item-done'" +
		" value='" + todoItem + "' /> " +
		todoItem +
		" <button class='delete_item'>" +
		"Delete</button></li>");

	// Clear text entry in submission box
	$("#new_item").val("");
}

// Delete an item from the list
function deleteTodoItem(e, item) {
	// Stop browser from acting on the click itself
	e.preventDefault();
	// Remove item from list
	$(item).parent().fadeOut('slow', function () {
		$(item).parent().remove();
	});
}

// Mark item as complete
function completeTodoItem() {
	// Strike through item
	$(this).parent().css("text-decoration", "line-through");
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