<?php 


?>
<div class="container-fluid">
    

    <!-- Main row -->
    <div class="">
    

        <!-- Main Class -->
        <main class="col">

            <div class="container ">

                <!-- button to initialize toast -->
               

                <!-- Toast -->
                <div class="position-fixed top-0 end-0 py-3 pe-2 mt-5" style="z-index: 5">
                    <div id="deletionError" class="toast hide text-dark bg-warning" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                        <!-- <img src="..." class="rounded me-2" alt="..."> -->
                        <strong class="me-auto">Ooops...</strong>
                        <span class="badge bg-danger">Error</span>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                        Looks like its used in other parts of the system
                        </div>
                    </div>
                </div>

                <div class="position-fixed top-0 end-0 p-3 mt-5" style="z-index: 5">
                    <div id="duplicateError" class="toast hide text-dark bg-warning" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                        <!-- <img src="..." class="rounded me-2" alt="..."> -->
                        <strong class="me-auto">Ooops...</strong>
                        <span class="badge bg-danger">Error</span>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                        It has already been added
                        </div>
                    </div>
                </div>

                

            </div>

            

            
        

        </main>
    </div>
</div>





<script>
var error = "<?php echo $_GET['error']?>"; 
if(error == 1){
    console.log(error);
    var myAlert =document.getElementById('deletionError');//select id of toast
    var bsAlert = new bootstrap.Toast(myAlert);//inizialize it
    bsAlert.show();//show it
} else if (error == 2){
    console.log(error);
    var myAlert =document.getElementById('duplicateError');//select id of toast
    var bsAlert = new bootstrap.Toast(myAlert);//inizialize it
    bsAlert.show();//show it
}
   


</script>