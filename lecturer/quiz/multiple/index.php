<?php
session_start();
include_once("../../../database/config.php");
include("../../../template/navs-lecturer.php");
$_SESSION['current_table'] = "mult_quiz";

$num_row = 0;

$sql = "

SELECT * FROM mult_quiz WHERE quiz_id = ".$_GET['quiz_id']."

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


    <!-- modal -->
    <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add a question</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <!-- Modal Content -->
            <h6 class=""><strong>Think twice, </strong>you are adding questions...</h6>
            <form class="" id="addform" name="addform"  method = "POST" action="add.php?quiz_id=<?php echo $_GET['quiz_id'];?>" autocomplete="off">
              
            
              <!-- card body -->
                <div class="form-floating mx-1 my-3 shadow">
                  <textarea name="addquestion" class="form-control border-secondary" placeholder="addquestion" id="floatingTextarea" rows="3"></textarea>
                  <label for="floatingTextarea">Start Typing Your Question</label>
                </div>

                
                  <div class="col d-flex flex-column mb-3 mx-3 shadow-sm">

                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">A</span>
                      <input name="a" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Start Typing a question" required>
                      <div class="invalid-feedback">
                        Please type an answer
                      </div>
                      <div class="input-group-text">
                        <input name="correct_answer"  class="form-check-input mt-0" type="radio" value="a" aria-label="Checkbox for following text input">
                      </div>
                    </div>

                  </div>

                  <div class="col d-flex flex-column mb-3 mx-3 shadow-sm">

                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">B</span>
                      <input name="b"  type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Start Typing an answer" required>
                      <div class="invalid-feedback">
                        Please type an answer
                      </div>
                      <div class="input-group-text">
                        <input name="correct_answer" class="form-check-input mt-0" type="radio" value="b" aria-label="Checkbox for following text input">
                      </div>
                    </div>

                  </div>

                



                  <div class="col d-flex flex-column mb-3 mx-3 shadow-sm">

                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">C</span>
                      <input name="c"  type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Start Typing an answer" required>
                      <div class="invalid-feedback">
                        Please type an answer
                      </div>
                      <div class="input-group-text">
                        <input name="correct_answer" class="form-check-input mt-0" type="radio" value="c" aria-label="Checkbox for following text input">
                      </div>
                    </div>


                  </div>

                  <div class="col d-flex flex-column mb-3 mx-3 shadow-sm">

                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">D</span>
                      <input name="d"  type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Start Typing an answer" required>
                      <div class="invalid-feedback">
                        Please type an answer
                      </div>
                      <div class="input-group-text">
                        <input name="correct_answer" class="form-check-input mt-0" type="radio" value="d" aria-label="Checkbox for following text input">
                      </div>
                    </div>


                  </div>

                

              <!-- card body -->

              <div class="modal-footer mt-3 pt-3">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
              
              
                
            </form>
            <!-- Modal Content -->
          </div>
          
        </div>
      </div>
    </div>
    <!-- modal -->


      
    <!-- Main Container -->
      <!-- modal -->
      <div class="container-fluid ">

      

        <!-- Main row -->
        <div class="row">

      
          <!-- Main div -->
          <main class="col">

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







      

      <div class="modal fade" id="update" tabindex="-1" aria-labelledby="a" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Update a Question <?php echo $row['id'];?></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <!-- Modal Content -->
              <h6 class=""><strong>Think twice, </strong>you are adding questions...</h6>
              <form class="" id="updateform" name="updateform"  method = "POST"  autocomplete="off">
                
              
                <!-- card body -->
                  <div class="form-floating mx-1 my-3 shadow">
                    <textarea id="updatequestion" name="updatequestion" class="form-control border-secondary" style="height: 10rem;" wrap="hard" placeholder="addquestion" rows="3"></textarea>
                    <label for="floatingTextarea">Start Typing Your Question</label>
                  </div>

                  <div class="col d-flex flex-column mb-3 mx-3 shadow-sm">

                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">A</span>
                        <input id="answer_a" name="a" type="text" class="form-control" aria-describedby="inputGroupPrepend" placeholder="Start Typing an answer">
                        <div class="invalid-feedback">
                          Please type an answer
                        </div>
                        <div class="input-group-text">
                          <input id="a" name="correct_answer"  class="form-check-input mt-0" type="radio" value="a" aria-label="Checkbox for following text input">
                        </div>
                      </div>

                    </div>

                    <div class="col d-flex flex-column mb-3 mx-3 shadow-sm">

                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">B</span>
                        <input id="answer_b"  name="b"  type="text" class="form-control" aria-describedby="inputGroupPrepend" placeholder="Start Typing an answer">
                        <div class="invalid-feedback">
                          Please type an answer
                        </div>
                        <div class="input-group-text">
                          <input id="b" name="correct_answer" class="form-check-input mt-0" type="radio" value="b" aria-label="Checkbox for following text input">
                        </div>
                      </div>

                    </div>

                  



                    <div class="col d-flex flex-column mb-3 mx-3 shadow-sm">

                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">C</span>
                        <input id="answer_c"  name="c"  type="text" class="form-control" aria-describedby="inputGroupPrepend" placeholder="Start Typing an answer" required>
                        <div class="invalid-feedback">
                          Please type an answer
                        </div>
                        <div class="input-group-text">
                          <input id="c" name="correct_answer" class="form-check-input mt-0" type="radio" value="c" aria-label="Checkbox for following text input">
                        </div>
                      </div>


                    </div>

                    <div class="col d-flex flex-column mb-3 mx-3 shadow-sm">

                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">D</span>
                        <input id="answer_d"  name="d"  type="text" class="form-control"  aria-describedby="inputGroupPrepend" placeholder="Start Typing an answer" required>
                        <div class="invalid-feedback">
                          Please type an answer
                        </div>
                        <div class="input-group-text">
                          <input id="d" name="correct_answer" class="form-check-input mt-0" type="radio" value="d" aria-label="Checkbox for following text input">
                        </div>
                      </div>


                    </div>
                <!-- card body -->

                <div class="modal-footer mt-3 pt-3">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                
                
                  
              </form>
              <!-- Modal Content -->
            </div>
            
          </div>
        </div>
      </div>
      <!-- modal -->


                
                
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
                      <?php echo "<script> console.log('Debug Objects answers: ".$row['answer']."');</script>"; ?>

                  <div class="col d-flex flex-column mb-3 mx-3 shadow-sm">

                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">A</span>
                      <input name="a" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="<?php echo $row['a'];?>" disabled>
                      <div class="invalid-feedback">
                        Please type an answer
                      </div>
                      <div class="input-group-text">
                        <input name="correct_answer<?php echo $row['id']?>"  class="form-check-input mt-0" type="radio" value="a" aria-label="Checkbox for following text input" disabled <?php if($row['answer'] == "a"){echo "checked";}?>>
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
                        <input name="correct_answer<?php echo $row['id']?>" class="form-check-input mt-0" type="radio" value="b" aria-label="Checkbox for following text input" disabled <?php if($row['answer'] == "b"){echo "checked";}?>>
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
                        <input name="correct_answer<?php echo $row['id']?>" class="form-check-input mt-0" type="radio" value="c" aria-label="Checkbox for following text input" disabled <?php if($row['answer'] == "c"){echo "checked";}?>>
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
                        <input name="correct_answer<?php echo $row['id']?>" class="form-check-input mt-0" type="radio" value="d" aria-label="Checkbox for following text input" disabled <?php if($row['answer'] == "d"){echo "checked";}?>>
                      </div>
                    </div>


                  </div>


                      
                      <div class="btn-group dropend">
                        <button type="button" class="btn btn-secondary dropdown-toggle shadow mx-1 mt-3" data-bs-toggle="dropdown" aria-expanded="false" >
                          Actions
                        </button>
                        <ul class="dropdown-menu list-inline">
                          <li><a data-bs-toggle="modal" data-bs-target="#update" class="dropdown-item" href="#" onClick="myFunction('<?php echo $row['quiz_id'];?>','<?php echo $row['id'];?>','<?php echo $row['question']?>','<?php echo $row['answer']?>','<?php echo $row['a']?>','<?php echo $row['b']?>','<?php echo $row['c']?>' ,'<?php echo $row['d']?>')">Update</a></li>
                          <li><a class="dropdown-item" href="delete.php?id=<?php echo $row['id']?>&quiz_id=<?php echo $row['quiz_id']?>">Delete</a></li>
                        </ul>
                      </div>

                      <button class="btn btn-outline-success shadow mx-1 mt-3 " type="button" style="display: none;" onClick="" id="save_update-<?php echo $row['id'];?>">Save</button>
                      
                    </div>
                    <!-- card body -->
                    <!-- card footer -->
                    <div class="card-footer text-center text-light justify-content-center shadow-sm">

                    <span class="row badge bg-warning m-1 shadow-sm text-dark">Modified by: <?php echo $row['mod_by']?></span>
                    <span class="row badge bg-info m-1 shadow-sm text-dark">Modified on: <?php echo $row['mod_date']?></span>

                    </div>
                    <!-- card footer -->
                  </div>
                  </div>


                  <?php
                  
                }
              }
            }
  
            ?>


                  <div class="col">

                    <div class="card" style="height: 16rem;">
                    
                      <!-- card body -->
                      <div class="card-body btn p-3 position-relative ">
                      <button data-bs-toggle="modal" data-bs-target="#add" type="button" class="btn btn-outline-success position-relative d-flex justify-content-center" style="width:100%;height:100%;" onClick="">
                      <div class="mb-4 position-absolute top-50 start-50 translate-middle" style="font-size: 1.5rem;"><i class="bi bi-journal-plus me-1"></i>Add A Question</div>
                        <span id="num_counter" class="badge rounded-pill bg-primary text-light position-absolute top-0 start-100 translate-middle ">0</span>
                        </button>
                      </div>
                      <!-- card body -->
                      
                    </div>
                  </div>




                </div>
                
                
                
                
               


          

         
   
          
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
