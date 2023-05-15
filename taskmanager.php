<?php
if(isset($_POST['submit']))
{
  echo $task = $_POST['task1'];
}
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Task Manager</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <h1>Task Manager</h1>
    </header>
    <main>
      <form>
        <label for="project">Project:</label>
        <input type="text" id="project" name="project">
    
      </form>
      <form>
        <label for="task">Task:</label>
        <input type="text" id="task" name="task">
       
      </form>
      <div class="task-list-container">
        <div class="task-list">
          <h2>To Do</h2>
          <ul id="todo">
            <form>
              <label for="task">Task:</label>
        <input type="text" id="task" name="task1">
            </form>
          </ul>
        
        </div>
        <div class="task-list">
          <h2>Doing</h2>
          <ul id="doing">
            <form>
              <label for="task">Task:</label>
        <input type="text" id="task" name="task2">
            </form>
            
          </ul>
       
        </div>
        <div class="task-list">
          <h2>Done</h2>
          <ul id="done">
            <form>
              <label for="task">Task:</label>
        <input type="text" id="task" name="task3">
            </form>
           
          </ul>
       
        </div>
      </div>
	  <div class="section-container">
        <section class="section-tasks">
         
          <form>
            <label for="task">Task:</label>
            <input type="text" id="task" name="task">
            <label for="reminder">Reminder:</label>
            <input type="datetime-local" id="reminder" name="reminder">
            
          </form>
          <ul id="task-list">
           
          </ul>
        </section>
        <section class="section-priority">
          <h2>Priority Level</h2>
          <ul id="priority-list">
            <li>
              <span>Task 1</span>
              <select>
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
              </select>
            </li>
            <li>
              <span>Task 2</span>
              <select>
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
              </select>
            </li>
            <li>
              <span>Task 3</span>
              <select>
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
              </select>
            </li>
          </ul>
          <form>
          <button type="submit" name="submit" value="submit" >Submit</button>
</form>
        </section>
      </div>
    </main>
  </body>
</html>


	
<style>
body {
	font-family: Arial, sans-serif;
	background-color: #f2f2f2;
  }
  
  header {
	background-color: #333;
	color: #fff;
	text-align: center;
	padding: 20px;
  }
  
  form {
	margin: 20px 0;
  }
  
  label {
	display: block;
	margin-bottom: 5px;
  }
  
  input[type="text"] {
	padding: 5px;
	font-size: 16px;
	border: none;
	border-radius: 3px;
	margin-right: 10px;
  }
  
  button {
	background-color: #333;
	color: #fff;
	border: none;
	padding: 5px 10px;
  }
  
  .task-list-container {
	display: flex;
	justify-content: space-between;
  }
  
  .task-list {
	background-color: #fff;
	border-radius: 3px;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
	padding: 10px;
	width: 30%;
  }
  
  .task-list h2 {
	border-bottom: 1px solid #ccc;
	padding-bottom: 5px;
	margin-bottom: 10px;
  }
  
  .task-list ul {
	list-style: none;
	margin: 0;
	padding: 0;
  }
  
  .task-list li {
	margin-bottom: 5px;
  }
  
  .submit-btn {
	background-color: #007bff;
	color: #fff;
	border: none;
	border-radius: 3px;
	padding: 5px 10px;
	margin-top: 10px;
	cursor: pointer;
  }
  
  .submit-btn:hover {
	background-color: #0069d9;
  }
  </style>
  
<style>
	body {
  font-family: Arial, sans-serif;
  background-color: rgb(173,216,230);
}

header {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 20px;
}

form {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="datetime-local"] {
  padding: 5px;
  font-size: 16px;
  border: none;
  border-radius: 3px;
  margin-right: 10px;
}

button {
  background-color: #333;
  color: #fff;
  border: none;
  padding: 5px 10px
}
</style>