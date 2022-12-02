<?php

class Disc extends Product{
    
    public function getAttribute() : String{
        return $this->inputs[4][0] . " MB";
    }

    public function inputAttribute(){ ?>
        <div id="disc" class ="input_field">
            <label for="attribute">Please enter disc size in MB</label><br>
            <input type="text" id="size" name="Attribute[]" placeholder="Disc size (e.g. 285)"><br>
        </div>
    <?php }
    

}