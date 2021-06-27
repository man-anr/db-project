<?php
session_start();
include_once("../../../database/config.php");
include("../../../template/navs-lecturer.php");
$_SESSION['current_table'] = "tf_quiz";


$sql = "

SELECT * FROM tf_quiz WHERE quiz_id = ".$_GET['quiz_id']."

  ";

  // echo $sql;

$result = mysqli_query($con, $sql);
  
$row = mysqli_fetch_array($result) ;

$num_row = 0;


  // $result = mysqli_query($con, $sql);
  
  // $row = mysqli_fetch_array($result) ;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Lecturer Dashboard</title>
  </head>
  <body class="bg-light ">



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

                <div class="row p-1">

                  <div class="col d-flex flex-column">

                  <input type="radio" class="btn-check" name="correct_answer" id="option1" autocomplete="off" value="1">
                  <label class="btn btn-outline-primary shadow" for="option1">True</label>

                  </div>

                  <div class="col d-flex flex-column">

                  <input type="radio" class="btn-check" name="correct_answer" id="option2" autocomplete="off" value="0">
                  <label class="btn btn-outline-danger shadow" for="option2">False</label>
                  

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




    

















   

      
    <!-- Main Container -->
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
              while($row = mysqli_fetch_array($result)){
                $num_row++;

                
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
                              <textarea name="updatequestion" class="form-control border-secondary" style="height: 10rem;" wrap="hard" placeholder="addquestion" id="updatequestion" rows="3"></textarea>
                              <label for="floatingTextarea">Start Typing Your Question</label>
                            </div>

                            <div class="row p-1">

                              <div class="col d-flex flex-column">

                              <input type="radio" class="btn-check" name="update_correct_answer" id="update_correct_answer_true" autocomplete="off" value="1" >
                              <label class="btn btn-outline-primary shadow" for="update_correct_answer_true">True</label>

                              </div>

                              <div class="col d-flex flex-column">

                              <input type="radio" class="btn-check" name="update_correct_answer" id="update_correct_answer_false" autocomplete="off" value="0">
                              <label class="btn btn-outline-danger shadow" for="update_correct_answer_false">False</label>
                              

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









                
                
                
                <div class="col">

                  <div class="card shadow-lg">
                    <!-- card header -->
                    <div id="num_question" class="card-header text-center bg-primary text-white">
                      Question <?php echo $num_row;?>
                    </div>
                    <!-- card header -->
                    <!-- card body -->
                    <div class="card-body bg-white p-3 shadow-sm">
                      <div class="form-floating mx-1 mb-3 shadow-sm">
                        <textarea id="question-<?php echo $row['id'];?>" class="form-control border-secondary" style="height: 7rem;" wrap="hard" rows="3" readonly="true"><?php echo $row['question'];?></textarea>
                        <label for="floatingTextarea">Question</label>
                      </div>
                      <?php echo "<script> console.log('Debug Objects answers: ".$row['answer']."');</script>"; ?>
                      <div class="row p-1">

                        <div class="col d-flex flex-column">

                        <input type="radio" class="btn-check" name="answer-<?php echo $row['id'];?>" id="true-<?php echo $row['id'];?>" autocomplete="off" disabled="true" <?php if($row['answer'] == 1){echo "checked";}?>>
                        <label class="btn btn-light btn-outline-primary shadow-sm" for="true-<?php echo $row['id'];?>">True</label>

                        </div>

                        <div class="col d-flex flex-column">

                        <input type="radio" class="btn-check" name="answer-<?php echo $row['id'];?>" id="false-<?php echo $row['id'];?>" autocomplete="off" disabled="true" <?php if($row['answer'] == 0){echo "checked";}?>>
                        <label class="btn btn-light btn-outline-danger shadow-sm" for="false-<?php echo $row['id'];?>">False</label>
                        

                        </div>

                        

                      </div>


                      
                      <div class="btn-group dropend">
                        <button type="button" class="btn btn-secondary dropdown-toggle shadow mx-1 mt-3" data-bs-toggle="dropdown" aria-expanded="false" >
                          Actions
                        </button>
                        <ul class="dropdown-menu list-inline">
                          <li><a data-bs-toggle="modal" data-bs-target="#update" class="dropdown-item" href="#" onClick="myFunction('<?php echo $row['quiz_id'];?>','<?php echo $row['id'];?>','<?php echo $row['question']?>',<?php echo $row['answer']?>)">Update</a></li>
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


      function myFunction(quizId,elementId, elementQuestion,elementAnswer) {
        console.log("question id: "+elementId + "\nanswer: "+elementAnswer);
        document.getElementById("updatequestion").innerHTML = elementQuestion;
        document.getElementById("updateform").action = "update.php?id="+elementId+"&quiz_id="+quizId;


        if(elementAnswer == 1){

          document.getElementById("update_correct_answer_true").checked = true;

        } else{
          document.getElementById("update_correct_answer_false").checked = true;

        }

      }

   

    

    // function enableEdit(id) {

    //   var idquestion = "question-" + id;
    //   var idtrue = "true-" + id;
    //   var idfalse = "false-" + id;
    //   var idsave_update = "save_update-" + id;
      
        
    //   var question = document.getElementById(idquestion);
    //   var trues = document.getElementById(idtrue);
    //   var falses = document.getElementById(idfalse);
    //   var save_update = document.getElementById(idsave_update);
      
      
    //   question.readOnly = false;
    //   question.autofocus;
    //   trues.disabled = false;
    //   falses.disabled = false;
    //   save_update.style.display = "inline";
    //   console.log(trues);
    //   console.log(falses);

    // }


    // function saveFunction(id) {
    //   var idquestion = "question-" + id;
    //   var idtrue = "true-" + id;
    //   var idfalse = "false-" + id;
    //   var idsave_update = "save_update-" + id;
      
        
    //   var question = document.getElementById(idquestion);
    //   var trues = document.getElementById(idtrue);
    //   var falses = document.getElementById(idfalse);
    //   var save_update = document.getElementById(idsave_update);

    //   question.readOnly = true;
    //   trues.disabled = true;
    //   falses.disabled = true;
    //   save_update.style.display = "none";
    // }
    
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

        console.log("new");
        document.querySelector('#content').insertAdjacentHTML(
            'afterbegin',
            ` 
<div class="col">

<div class="card shadow-lg">
  <!-- card header -->
  <div id="num_question" class="card-header text-center bg-primary text-white">
    Question 1
  </div>
  <!-- card header -->
  <!-- card body -->
  <div class="card-body bg-white p-3 shadow-sm">
    <div class="form-floating mx-1 my-3 shadow-sm">
      <textarea class="form-control border-secondary" placeholder="Leave a comment here" id="floatingTextarea" rows="3"></textarea>
      <label for="floatingTextarea">Start Typing Your Question</label>
    </div>

    <div class="row p-1">

      <div class="col d-flex flex-column">

      <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off">
      <label class="btn btn-light btn-outline-primary shadow-sm" for="option1">True</label>

      </div>

      <div class="col d-flex flex-column">

      <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
      <label class="btn btn-light btn-outline-danger shadow-sm" for="option2">False</label>
      

      </div>

    

    </div>
  </div>
  <!-- card body -->
  <!-- card footer -->
  <div class="card-footer text-center text-light justify-content-center shadow-sm">

  <span class="row badge bg-warning m-1 shadow-sm text-dark">Modified by: 10001</span>
  <span class="row badge bg-info m-1 shadow-sm text-dark">Modified on: 2222335550</span>

  </div>
  <!-- card footer -->
</div>

</div>`      
          )
        }


      function removeRow (input) {
          input.parentNode.remove()
        }


   
    </script>
    
      
  </body>
</html>