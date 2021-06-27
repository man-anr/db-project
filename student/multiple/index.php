<?php
session_start();
include_once("../../database/config.php");
include_once("../../template/navs-lecturer-assignment.php");

$_SESSION['enroll_id'] = $_GET['enroll_id'];
echo "<script> console.log(". $_SESSION['enroll_id'] .") </script>";
$_SESSION['current_table'] = "mult_quiz";

$find_quiz_id = "SELECT id FROM quiz where workload_id = " . $_GET['workload_id'] . " AND type = '" . $_GET['quiz_type']."'";
// echo $find_quiz_id;
$result_find_quiz_id = mysqli_query($con, $find_quiz_id);
$row_quiz_id = mysqli_fetch_array($result_find_quiz_id);

$_SESSION['quiz_id'] = $row_quiz_id['id'];
echo "<br>" . $_SESSION['quiz_id'];

$num_row = 0;

$sql = "

SELECT * FROM mult_quiz WHERE quiz_id = ".$row_quiz_id['id']."

  ";

  // echo $sql;

$result = mysqli_query($con, $sql);
  
$row = mysqli_fetch_array($result) ;


  // $result = mysqli_query($con, $sql);
  
  // $row = mysqli_fetch_array($result) ;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Lecturer Dashboard</title>
  </head>
  <body class="bg-light ">

 
    <!-- Main Container -->
    <div class="container-fluid ">

      <!-- Main row -->
      <div class="row">

    
        <!-- Main div -->
        <main class="col">
          <form action="validate-answer.php" method="POST">

        <div class="row py-4 md-3 shadow-sm">
            <div class="col-mb-12">
              <span class="border rounded-2 shadow-sm p-3 align-middle"><i class="bi bi-speedometer text-dark"></i></span>
                <span class="mx-3 text-center fs-3 fw-bold align-middle"><?php echo $_SESSION['current_table']?></span>
                
            </div>
          </div>

          <!-- <div class="col p-4 mb-4 bg-white shadow-sm rounded-4" style="max-width: 30rem;">
            
          </div> -->


          <div id="content" class="row row-cols-1 row-cols-md-3 g-4 m-2">

          <?php
          
          if($result = mysqli_query($con, $sql)){
            if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_array($result)){ $num_row++;

                
                 ?>

        
                <div class="col">

                  <div class="card shadow-lg">
                    <!-- card header -->
                    <div id="num_question" class="card-header text-center bg-primary text-white">
                      Question <?php echo $num_row?>
                    </div>
                    <!-- card header -->
                    <!-- card body -->
                    <div class="card-body bg-white p-3 shadow-sm">
                      <div class="form-floating mx-1 mb-3 shadow-sm">
                        <textarea id="question-<?php echo $row['id'];?>" class="form-control border-secondary" style="height: 7rem;" wrap="hard" rows="3" readonly="true"><?php echo $row['question'];?></textarea>
                        <label for="floatingTextarea">Question</label>
                      </div>
                      <?php echo "<script> console.log('".$num_row."Debug Objects answers: ".$row['answer']."');</script>"; ?>

                  <div class="col d-flex flex-column mb-3 mx-3 shadow-sm">

                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">A</span>
                      <input name="a" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="<?php echo $row['a'];?>" disabled>
                      <div class="invalid-feedback">
                        Please type an answer
                      </div>
                      <div class="input-group-text">
                        <input name="correct_answer-<?php echo $row['id']?>"  class="form-check-input mt-0" type="radio" value="a" aria-label="Checkbox for following text input" >
                      </div>
                    </div>

                  </div>

                  <div class="col d-flex flex-column mb-3 mx-3 shadow-sm">

                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">B</span>
                      <input name="b"  type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="<?php echo $row['b'];?>" disabled>
                      <div class="invalid-feedback">
                        Please type an answer
                      </div>
                      <div class="input-group-text">
                        <input name="correct_answer-<?php echo $row['id']?>" class="form-check-input mt-0" type="radio" value="b" aria-label="Checkbox for following text input">
                      </div>
                    </div>

                  </div>


                  <div class="col d-flex flex-column mb-3 mx-3 shadow-sm">

                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">C</span>
                      <input name="c"  type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="<?php echo $row['c'];?>" disabled>
                      <div class="invalid-feedback">
                        Please type an answer
                      </div>
                      <div class="input-group-text">
                        <input name="correct_answer-<?php echo $row['id']?>" class="form-check-input mt-0" type="radio" value="c" aria-label="Checkbox for following text input">
                      </div>
                    </div>


                  </div>

                  <div class="col d-flex flex-column mb-3 mx-3 shadow-sm">

                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">D</span>
                      <input name="d"  type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="<?php echo $row['d'];?>" disabled>
                      <div class="invalid-feedback">
                        Please type an answer
                      </div>
                      <div class="input-group-text">
                        <input name="correct_answer-<?php echo $row['id']?>" class="form-check-input mt-0" type="radio" value="d" aria-label="Checkbox for following text input" >
                      </div>
                    </div>


                  </div>

             
                      
                    </div>
                    <!-- card body -->
                    <!-- card footer -->
                    <!-- <div class="card-footer text-center text-light justify-content-center shadow-sm">

                    <span class="row badge bg-warning m-1 shadow-sm text-dark">Modified by: <?php echo $row['mod_by']?></span>
                    <span class="row badge bg-info m-1 shadow-sm text-dark">Modified on: <?php echo $row['mod_date']?></span>

                    </div> -->
                    <!-- card footer -->
                  </div>
                  </div>


                  <?php
                  
                }
              }
            }
  
            ?>




                </div>
                
          


          <div class="d-grid"><input type="submit" class="btn btn-success m-4" value="Finish"></input></div>

         
   
          </form>
        </main>
        <!-- Main div -->


        
    </div>

    <script>


      function myFunction(quizId, elementId, elementQuestion, elementAnswer, elementA, elementB, elementC, elementD) {
        console.log("question id: "+elementId + "\nanswer: "+elementAnswer);
        document.getElementById("updatequestion").innerHTML = elementQuestion;
        document.getElementById("updateform").action = "update.php?id="+elementId+"&quiz_id="+quizId;
        console.log(elementA);
        console.log("innerhtml: " + elementA);
        document.getElementById("answer_a").value = elementA;
        document.getElementById("answer_b").value = elementB;
        document.getElementById("answer_c").value = elementC;
        document.getElementById("answer_d").value = elementD;


        if(elementAnswer == "a"){

          document.getElementById("a").checked = true;
        } else if (elementAnswer == "b") {
          document.getElementById("b").checked = true;
        } else if (elementAnswer == "c") {
          document.getElementById("c").checked = true;
        } else{
          document.getElementById("c").checked = true;

        }

      }

   

    

    
    </script>

   
    <script >
    var num_question = 0;
      function addRow () {

        num_question += 1;
        question = "Question " + num_question;
        
        $(document).ready(
            function()
            {
              document.getElementById('num_counter').innerHTML = num_question;
              document.getElementById('num_question').innerHTML = question;
              
            }
        );

       


      function removeRow (input) {
          input.parentNode.remove()
        }


   
    </script>
    
      
  </body>
</html>
