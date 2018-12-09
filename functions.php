<?php 

function createCardGeneral($titleCard, $numberCard, $color, $classAdded, $iconName, $subtitleCard, $indexElement){
    echo '<div class="'.$classAdded.' cardInfo" >';
    echo gerarCard($titleCard, $numberCard, $color, 'col-12', $iconName, $subtitleCard, $indexElement);
    echo '</div>';
}

function gerarCard($titleCard, $numberCard, $color, $classAdded, $iconName, $subtitleCard, $indexElement){
    echo '<div class="row shadow mb-2 bg-white rounded "><div class="col-12 titleGeneral" style="background-color:'.$color.';">';
    gererateTitleCard($titleCard, $numberCard);
    generateArrow($color, $indexElement);
    echo '</div>';
    generateCard($color,$classAdded,$iconName, $subtitleCard);
    echo '</div>';
}

function generateCard($color, $classAdded, $iconName,$subtitleCard){
    echo '<div class="'.$classAdded.' subtitleCard">
        <b>'.$subtitleCard.'</b>
    </div>
    <div class="'.$classAdded.' divIcon">
        <i style="color:'.$color.'" class="'.$iconName.' iconCard"></i>
    </div>
    <div class="'.$classAdded.' textIconCard">
        It is a long established fact that a reader will be distracted by the readable content of a
        page when looking at its layout. 
    </div>';
}

function gererateTitleCard($name, $number){
    echo '<div class="titleCard">'.$name.'</div><div class="numberCard"><b>'.$number.'</b></div>';
}

function generateArrow($color,$indexElement){
    echo '<div class="arrowDownCard cl'.$indexElement.'" style="border-top: 20px solid '.$color.' !important; "></div>';
}

?>