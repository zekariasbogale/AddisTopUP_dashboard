<?php require './header.php'?>

<?php

/**
  * Uploading EVs in CSV format updated and maintained by Birhanu Hailemichael 
 */

    <form class="form-horizontal well" action="test.php" method="post" enctype="multipart/form-data">
                
                <fieldset>
                    <label for="csvFileInput"> 
                        <strong>CSV File:</strong>
                    </label>
                    <input type="file" name="csvFileInput" id="csvFileInput" >
                    <input type="submit" value="Submit" name="submit">
                </fieldset>
            </form>

?>

<?php require './footer.php'?>
