<?php

class Furniture extends Product{

public function inputAttribute(){ ?>
    <div id = "furniture">
        <label for="attribute">Please enter furniture dimensions in CM</label><br>
        <label for="attribute">Height:</label><br>
        <input type="text" id="height" name="Attribute[]" placeholder="Height (e.g. 120)"><br>
        <label for="attribute">Width:</label><br>
        <input type="text" id="width" name="Attribute[]" placeholder="Width (e.g. 120)"><br>
        <label for="attribute">Length:</label><br>
        <input type="text" id="length" name="Attribute[]" placeholder="Length (e.g. 120)"><br>
    </div>
<?php }



public function getAttribute() : String{
    return $this->inputs[4][0] . "W x " . $this->inputs[4][1] . "H x " .  $this->inputs[4][2] . "L";
}

}