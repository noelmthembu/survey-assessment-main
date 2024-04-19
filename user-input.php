<?php require ("connection.php")?>
<?php require ("transec.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible"content="IE=edge">
<meta name="viewport"content="width=device-width, initial-scale=1.0">
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<title>Survey Form</title>
</head>
<body>
    <?php include 'header.php'?>
    <div class="container" id="home">

        <form role="form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" class="mx-auto ps-lg-1" style="margin: 10px;" style="padding: 30px 40px;">
            <div class="row">
                <div class="col-4">
                    <p class="fw-bold">Personal Details:</p>
                </div>

            <div class="col-4">
                <div class="row mb-3">
                <label for="validationSurname" class="col-form-label fw-bold">Full Names:</label>
                <!-- Input Type Text -->
                    <div class="col-sm-10 border-2 rounded border-info"> 
                        <input type="text" class="form-control" name="fname" value="<?php echo $fname?>" pattern="^[a-zA-Z ]+$" required />
                    </div>
            </div>

            <div class="row mb-3">
                <label for="colFormLabel" class="col-form-label fw-bold">Email:</label>
                <!-- Input Type Text -->
                    <div class="col-sm-10 border-2 rounded border-info">
                        <input type="email" name="email" class="form-control" id="colFormLabel" required>
                    </div>
            </div>

            <div class="row mb-3">
                <label for="colFormLabel" class="col-form-label fw-bold">Date Of Birth:</label>
                <!-- Input Type Text -->
                    <div class="col-sm-10 border-2 rounded border-info">
                        <input type="date" name="birth" class="form-control" id="colFormLabel" required>
                    </div>            
            </div>

            <div class="row mb-3">
                <label for="colFormLabel" class="col-form-label fw-bold">Contact Number:</label>
                <!-- Input Type Text -->
                    <div class="col-sm-10 border-2 rounded border-info">
                        <input type="text" name="contact" pattern="^[0-9-]{10}$" class="form-control" id="colFormLabel" required>
                    </div>            
            </div>               
        </div>
        </div>

        <div class="row mt-5">
                <div class="col-4">
                    <p class="fw-bold">What is your favourite food?:</p>
                </div>

            <div class="col-4">
                <div class="row justify-content-between mb-3">
                <!-- Input Type Text -->
                    <div class="justify-content-between"> 
                        <input class="form-check-input" type="checkbox" name="food[]" value="Pizza"> Pizza</input>
                        <input class="form-check-input" type="checkbox" name="food[]" value="Pasta"> Pasta</input>
                        <input class="form-check-input" type="checkbox" name="food[]" value="Pap & Wors"> Pap & Wors</input>
                        <input class="form-check-input" type="checkbox" name="food[]" value="Other"> Other</input>
                    </div>
            </div>
              
        </div>
        </div>

        <div class="table-responsive-sm mt-4">
            <label class="fw-bold">Please rate your level of agreement on a scale from 1 to 5, with 1 being "strongly agree" and 5 being "strongly disagree"
            </label>
 
            <table class="table table-bordered border-2 mt-4 col-sm-10" id="employeeList">
                <thead class="table-secondary">
                    <tr class="text-center">
                        <th></th>
                        <th>Strongly Agree(1)</th>
                        <th>Agree(2)</th>
                        <th>Neutral(3)</th>
                        <th>Disagree(4)</th>
                        <th>Strongly Disagree(5)</th>
                    </tr>
                </thead>
                <tbody>
                    <td>I like to eat out</td>
                    <td class="text-center"><input class="form-check-input" type="radio" name="scale_eat[]" value="1" required></input></td>
                    <td class="text-center"><input class="form-check-input" type="radio" name="scale_eat[]" value="2"></input></td>
                    <td class="text-center"><input class="form-check-input" type="radio" name="scale_eat[]" value="3"></input></td>
                    <td class="text-center"><input class="form-check-input" type="radio" name="scale_eat[]" value="4"></input></td>
                    <td class="text-center"><input class="form-check-input" type="radio" name="scale_eat[]" value="5"></input></td>
                </tbody>

                <tbody>
                    <td>I like to watch movies</td>
                    <td class="text-center"><input class="form-check-input" type="radio" name="scale_mov[]" value="1" required></input></td>
                    <td class="text-center"><input class="form-check-input" type="radio" name="scale_mov[]" value="2"></input></td>
                    <td class="text-center"><input class="form-check-input" type="radio" name="scale_mov[]" value="3"></input></td>
                    <td class="text-center"><input class="form-check-input" type="radio" name="scale_mov[]" value="4"></input></td>
                    <td class="text-center"><input class="form-check-input" type="radio" name="scale_mov[]" value="5"></input></td>
                </tbody>

                <tbody>
                    <td>I like to watch TV</td>
                    <td class="text-center"><input class="form-check-input" type="radio" name="scale_tv[]" value="1" required></input></td>
                    <td class="text-center"><input class="form-check-input" type="radio" name="scale_tv[]" value="2"></input></td>
                    <td class="text-center"><input class="form-check-input" type="radio" name="scale_tv[]" value="3"></input></td>
                    <td class="text-center"><input class="form-check-input" type="radio" name="scale_tv[]" value="4"></input></td>
                    <td class="text-center"><input class="form-check-input" type="radio" name="scale_tv[]" value="5"></input></td>
                </tbody>

                <tbody>
                    <td>I like to listen to the radio</td>
                    <td class="text-center"><input type="radio" name="scale_rad[]" value="1" required></input></td>
                    <td class="text-center"><input class="form-check-input" type="radio" name="scale_rad[]" value="2"></input></td>
                    <td class="text-center"><input class="form-check-input" type="radio" name="scale_rad[]" value="3"></input></td>
                    <td class="text-center"><input class="form-check-input" type="radio" name="scale_rad[]" value="4"></input></td>
                    <td class="text-center"><input class="form-check-input" type="radio" name="scale_rad[]" value="5"></input></td>
                </tbody>
                </table>
                            
        </div>
        <div class="text-center">
          <!-- Multi-line Text Input Control -->
        <button class="btn btn-primary btn-lg" type="submit" value="submit" name="submit">
            Submit
        </button>  
        </div>
        
        </form>
    </div>
</div>
</body>
</html> 