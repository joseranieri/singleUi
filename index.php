<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/animate.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<?php include 'functions.php';?>

<body>
    <div class="container">
        <div style="margin:30px">
        </div>
        <div class="row">
            <?php 
            
            $colors = ['red', 'orange', 'blue', 'green', 'purple','orangered'];
            
            for($i = 0; $i < 4;$i++){
                echo createCardGeneral("STEP", "01",$colors[$i],"col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3", "fas fa-asterisk", "Option 0".($i+1), $i);
            }
            
            ?>
        </div>
        <div style="margin:30px">      
        </div>
        <div class="row shadow mb-2 bg-white rounded ">
            <div class="col-md-12 columnTriCard" style="background-color: orange;">
                <div class="row">
                    <div class="col-3 backgroundTriCard backTriCard">
                        <div class="numberTri" style="color:orange !important"><b>01</b></div>
                        <div class="textTri">Lorem ipsum</div>
                    </div>
                    <div >
                        <div class="cardTri rightFirsTriCard">
                        </div>
                    </div>
                    <div class="col-4">
                    </div>                    
                    <div>
                        <div class="rightSecTriExternal cardTri">
                        </div>
                        <div class="rightSecTriInternal cardTri">
                        </div>
                        <div class="rightSecTri cardTri ">
                        </div>
                    </div>
                    <div class="col-5 backTriCard">
                        <div class="row">
                            <div class="col-6">
                                <div class="titleCardTri">
                                    Step One
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="iconTriCard">
                                    <i class="fab fa-accusoft"></i>
                                </div>
                            </div>
                            <div class="col-12 textRightTriCard textTriCard">
                                Eiusmod laboris laboris irure aliquip id veniam sint eiusmod velit. Ad et labore
                                excepteur dolor mollit deserunt ex duis fugiat. Ullamco eiusmod amet irure est nisi
                                elit ad exercitation culpa. Cillum magna velit Lorem exercitation excepteur in do
                                reprehenderit non laborum ad.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin:30px">
        </div>
        <div class="row shadow mb-2 bg-white rounded">
            <div class="col-12 columnTriCard" style="background-color: red;">
                <div class="row" >
                    <div class="col-5 backTriCard">
                        <div id="linha" class="row">
                            <div class="col-6">
                                <div class="titleCardTri">
                                    Step Two
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="iconTriCard">
                                    <i  class="fab fa-accusoft"></i>
                                </div>
                            </div>
                            <div class="col-12 textLeftTriCard textTriCard">
                                Eiusmod laboris laboris irure aliquip id veniam sint eiusmod velit. Ad et labore
                                excepteur dolor mollit deserunt ex duis fugiat. Ullamco eiusmod amet irure est nisi
                                elit ad exercitation culpa. Cillum magna velit Lorem exercitation excepteur in do
                                reprehenderit non laborum ad.
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="leftSecondTriExternal cardTri">
                        </div>
                        <div class="leftSecondTriInternal cardTri">
                        </div>
                        <div class="leftSecondTri cardTri">
                        </div>
                    </div>
                    <div class="col-4">
                    </div>
                    <div class="col-3 backgroundTriCard backTriCard">
                        <div><b class="numberTri">02</b></div>
                        <div class="textTri">Lorem ipsum Elit irure culpa ad deserunt commodo. </div>
                    </div>
                    <div >
                        <div class="leftFistTri cardTri">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin:30px">
        </div>        
        <div style="margin:60px">
        </div>
    </div>
</body>
</html>