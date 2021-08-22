<?php
require_once ("MainStudentClass.php");
if(isset($_POST['btnSubmit'])){
    $obj = new MainStudent();
    $data=$obj->searchRecord($_POST['id']);
    if(!$data){
        echo '<span class="alert alert-danger ">No User Exists</span>';
    }
    else{

        echo "
                 <div class='col-lg-4 mb-sm-4 ftco-animate'>
                <div class='staff'>
                    <div class='d-flex mb-4'>
                        <div class='img' style='background-image: url(images/dumy.jpg);'></div>
                        <div class='info ml-4'>
                            <h3><a href='teacher-single.html'>$data[1] $data[2]</a></h3>
                            <span class='position'>$data[9]</span>
                            
                        </div>
                    </div>
                    <div class='text'>
                      <ul class='list-group'>
                                  
                              <li class='list-group-item'>Gender $data[3]</li>
                              <li class='list-group-item'>Date of Birth :$data[4]</li>
                               <li class='list-group-item'>Phone : $data[6]</li>
                                <li class='list-group-item'>Email: $data[7]</li>
                                 <li class='list-group-item'>Place Of Birth : $data[8]</li>
                            </ul>
                        <p>Address<br/>$data[5] </p>
                    </div>
                     
                </div>
            </div>
                   ";

    }
}
?>


