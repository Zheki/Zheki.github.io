<?php

class Book extends Product{
    

    public function getAttribute() : String{
        return $this->inputs[4][0] . " KG";
    }

    public function inputAttribute(){ ?>
        <div id = "book">
            <label for="attribute">Please enter book weight in KG</label><br>
            <input type="text" id="weight" name="Attribute[]" placeholder="Book weight (e.g. 0.7)"><br>
        </div>
    <?php }

}

