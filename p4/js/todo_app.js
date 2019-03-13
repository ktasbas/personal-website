function addTodoItem() {
	var todoItem = $("#new_item").val();
	$("#todo_list").append("<li><input type='checkbox'" + 
						   " name='todo-item-done'" + 
						   " class='todo-item-done'"+ 
						   " value='" + todoItem + "' /> " + 
						   todoItem +
						   " <button class='delete_item'>"+
						   "Delete</button></li>");
	
   $("#new_item").val("");
  }
  
  function deleteTodoItem(e, item) {
	e.preventDefault();
	$(item).parent().fadeOut('slow', function() { 
	  $(item).parent().remove();
	});
  }
  
							 
  function completeTodoItem() {  
	$(this).parent().css("text-decoration", "line-through");
  }
  
  
  $(function() {
   
	 $("#add_item").on('click', function(e){
	   e.preventDefault();
	   addTodoItem()
	 });
	
  //EVENT DELEGATION
  //#todo-list is the event handler because .todo-item-delete doesn't exist when the document loads, it is generated later by a todo entry
  //https://learn.jquery.com/events/event-delegation/
	$("#todo_list").on('click', '.delete_item', function(e){
	  var item = this; 
	  deleteTodoItem(e, item)
	})
	
	$(document).on('click', ".item_done", completeTodoItem)
  
  });