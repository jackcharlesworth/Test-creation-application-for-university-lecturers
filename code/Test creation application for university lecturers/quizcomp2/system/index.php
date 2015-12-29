<?php
include 'connect.php';
include 'core.php';

if(logged_in()){
	
	$session_user_id = $_SESSION['user_id'];
	$user_data = user_data($session_user_id, 'id','username','firstname','lastname','type');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="css/min.css" rel="stylesheet">
  </head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Quiz Master</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
   <div>
    <div id="status">
          </form>
        </div>
      </div>
    </nav>

        </div>
          

    <div class="jumbotron">
      <div class="container">

<div style="position:relative; bottom:25px;">
<span style="float:right; font-weight:bold; font-size:15px;">
	</br>
	</br>
	<?php echo 'Hello '.$user_data['username']; ?>
</span>	

</br>
</br>
<a title="Log Out" href="logout.php"> Logout </a></div>
      <div class="well">
        <p>Welcome, to your QuizMaster control panel. </br>
          To get started, find your quiz toolkit in the navigation bar below. 
        </p>
      </div>

</br><a href="module.php">Modules</a>
</br><a href="addModule.php">Add Module</a>
</br><a href="user.php">Students</a>
</br><a href="addUser.php">Add Student</a>
</br><a href="quizzes.php">Quizzes</a>
</br><a href="addQuiz.php">Add Quiz</a>
</br><a href="question.php">Question</a>
</br><a href="addQuestion.php">Add Question</a>
</br><a href="quiz.php">Set Quiz</a>
</br><a href="result.php">Results</a>
</br>
</br>
</br>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
<?php
}
else{
	header('location:../index.php');
}
?>