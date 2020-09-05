<?php

class View {

    public function render($view){
        require('classes/views/'.$view.".php");
    }

}