<?php $col = 12;
        while( $col != 0){
            if($col <= 0 ) break;
            switch(rand(2,3)){
                case 2: {
                    if( $col == 3 ) {
                        ?>
                            <div class="item-container col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="item-content">
                                    <div id="001" onclick="testOverlay(this,'Picture No.1')" class="img-item" style="background-image:url('images/1.jpg');">
                                                
                                    </div>
                                    <div class="img-description">
                                        <h1>Once upon a time....</h1>
                                    </div>                
                                </div>
                            </div>
                        <?php 
                        $col -= 3;} else {
                    
            ?>
                    <div class="item-container col-lg-2 col-md-3 col-sm-6 col-xs-12">
                        <div class="item-content">
                            <div id="001" onclick="testOverlay(this,'Picture No.1')" class="img-item" style="background-image:url('images/1.jpg');">
                                
                            </div>
                            <div class="img-description">
                                <h1>Once upon a time....</h1>
                            </div>                
                        </div>
                    </div>
                    
                <?php $col -= 2; }                    
                    break;
                } case 3: {
                
                if( $col == 2 || $col == 4){
                    ?>
                        <div class="item-container col-lg-2 col-md-3 col-sm-6 col-xs-12">
                            <div class="item-content">
                            <div id="001" onclick="testOverlay(this,'Picture No.1')" class="img-item" style="background-image:url('images/1.jpg');">
                                
                            </div>
                            <div class="img-description">
                                <h1>Once upon a time....</h1>
                            </div>                
                            </div>
                        </div>
                <?php
                    $col -= 2;
                } else {
                ?>
                    <div class="item-container col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="item-content">
                            <div id="001" onclick="testOverlay(this,'Picture No.1')" class="img-item" style="background-image:url('images/1.jpg');">
                                
                            </div>
                            <div class="img-description">
                                <h1>Once upon a time....</h1>
                            </div>                
                        </div></div>
                <?php   $col -= 3;
                    }
                break;   
                }
            }            
        }
        ?>