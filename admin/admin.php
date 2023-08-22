
<form action="addlesson.php" method="post" enctype="multipart/form-data">
        <label>Title</label>
        <input type="text" name="title" required="" id="validationTooltip01" class="form-control" />

        <label>Date</label>
        <input class="form-control" type="date" name="datee" required="" id="validationTooltip01" />
        <label for="exampleFormControlTextarea1">Message</label>
        <textarea class="form-control" name="announcement" id="exampleFormControlTextarea1" rows="3"> </textarea>


        <label class="control-label" for="input01">Video:</label>



        <input type="file" name="video" class="font" style="border:1px solid black" onchange="getImage(this.value);" required>
        <button type="submit" name="submit" class="btn btn-success">Submit</button>





    </form>






    <a href="registration.php">Reg</a>
    <a href="lessonStart.php">less</a>