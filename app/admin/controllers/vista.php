<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="tabs topmargin-lg clearfix" id="tab-1">
                <ul class="tab-nav clearfix">
                    <?php
                    foreach ($tabs as $NoTab ){
                    ?>
                    <li><a href="#tabs-<?php echo $NoTab->tab;?>"><?php echo $NoTab->partner;?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <div class="tab-container">
                    <?php
                    foreach ($tabs as $NoTab ) {
                    $busqueda = $NoTab->tab;
                    $this->load->model('Sponsor_model');
                    $children = $this->Sponsor_model->children($busqueda);
                    if ($NoTab->tipo == "Other") {
                    ?>
<div class="tab-content clearfix" id="tabs-<?php echo $NoTab->tab;?>">
    <div class="tab-content clearfix" id="<?php echo $NoTab->tab;?>">
        <?php
        if($children == TRUE){
        foreach ($children as $kids ) {
        ?>
        <div class="col-md-3">
            <a href="<?php echo base_url();?>Action/ver/<?php echo $kids->id;?>" class="item-quick-view" data-lightbox="ajax">
                <img src="<?php echo base_url();?>upload/children/<?php echo $kids->picture;?>" alt="alternativo asociacion">
            </a>
            <h3>
            <a href="<?php echo base_url();?>Action/ver/<?php echo $kids->id;?>" class="item-quick-view text-center" data-lightbox="ajax">
                <?php echo $kids->name;?>
            </a>
            <?php $var=$kids->id_pago;?>
            </h3>
        </div>
        <?php
        }
        }else{
        echo "We don't have children in this program";
        }
        ?>
    </div>
</div>
<?php
}elseif($NoTab->tipo == "Association"){
?>
<div class="tab-content clearfix" id="tabs-<?php echo $NoTab->tab;?>">
    <div class="tab-content clearfix" id="<?php echo $NoTab->tab;?>">
        <?php
        if($children == TRUE){
        foreach ($children as $kids ) {
        ?>
        <div class="col-md-3">
            <a href="#" class="item-quick-view" data-toggle="modal" data-target="#<?php echo $kids->id;?>">
                <img src="<?php echo base_url();?>upload/children/<?php echo $kids->picture;?>" alt="alternativo asociacion">
            </a>
            <h3>
            <a href="#" class="item-quick-view" data-toggle="modal" data-target="#<?php echo $kids->id;?>">
                <?php echo $kids->name;?>
            </a>
            </h3>
        </div>
        <!-- Modal -->
        <div id="<?php echo $kids->id;?>" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"> Profile <?php echo $kids->name;?> </h4>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-4">
                            <img src="<?php echo base_url();?>upload/children/<?php echo $kids->picture;?>" alt="alternativo asociacion">
                        </div>
                        <div class="col-md-8">
                            <h5><?php echo $kids->name;?></h5>
                            <p class="text-justify"><?php echo $kids->description;?></p>
                            <div class="panel panel-default product-meta ">
                                <div class="panel-body ">
                                    <span itemprop="productID" class="sku_wrapper">Age: <span class="sku"><?php echo $kids->age;?></span></span>
                                    <span itemprop="productID" class="sku_wrapper">Partner: <span class="sku">
                                        <?php
                                        $busquedaSponsor = $kids->partner;
                                        $this->load->model('Sponsor_model');
                                        $sponsor = $this->Sponsor_model->buscarSponsor($busquedaSponsor);
                                        foreach ($sponsor as $key) {
                                        echo $key->partner;
                                        }
                                        ?>
                                    </span></span>
                                    <span itemprop="productID" class="sku_wrapper abajo">Region: <span class="sku"><?php echo $kids->region;?></span></span>
                                </div>
                            </div>
                            <?php
                            $busquedapatrocinio = $kids->id_pago;
                            $this->load->model('Sponsor_model');
                            $number = $this->Sponsor_model->nop($busquedapatrocinio);
                            $patrocinados = $this->Sponsor_model->patrocinio($busquedapatrocinio);
                            ?>
                            <form action="<?php echo base_url();?>Action/stripe/" method="post" class="form-horizontal">
                                <input type="hidden" value="<?php echo $kids->name;?>" name="nombrenino">
                                <input type="hidden" value="<?php echo $kids->picture;?>" name="picture">
                                <input type="hidden" value="<?php echo $kids->id_pago;?>" name="id_pago">
                                <input type="hidden" value="<?php echo date("F j, Y, g:i a"); ?>" name="fecha">
                                <?php
                                switch ($number) {
                                case 0:
                                ?>
                                <input type="text" name="nombre" value="" placeholder="Your Name" class="form-control abajo">
                                <input type="text" name="telefono" value="" placeholder="Phone" class="form-control abajo">
                                <select name="plans" class="form-control abajo">
                                    <option value="Full">Plan FULL $70.00 per month</option>
                                    <option value="Half">Plan HALF $35.00 per month</option>
                                </select>
                                <script src="https://button.stripe.com/v1/button.js" class="stripe-button"
                                data-key="pk_live_q44TBVqX1JRVpZL7NdoOCYFk"
                                data-amount="<?php echo $POST['plans']?> "
                                data-description="<?php echo $kids->id_pago;?>"
                                data-label="Sponsor"
                                data-image="<?php echo $kids->picture;?>">
                                </script>
                                <?php
                                break;
                                case 1:
                                foreach ($patrocinados as $datos) {
                                if ($datos->plan == 'Full') {
                                ?>
                                <h3 class="text-center">Sponsored</h3>
                                <?php
                                }else{
                                ?>
                                <input type="text" name="nombre" value="" placeholder="Your Name" class="form-control abajo">
                                <input type="text" name="telefono" value="" placeholder="Phone" class="form-control abajo">
                                <select name="plans" class="form-control abajo">
                                    <option value="HALF">Plan HALF $35.00 per month</option>
                                </select>
                                <script src="https://button.stripe.com/v1/button.js" class="stripe-button"
                                data-key="pk_test_bqIBnpZ6WG2or6wg0iAI4Wwr"
                                data-amount="1"
                                data-description="<?php echo $kids->id_pago;?>"
                                data-label="Sponsor"
                                data-image="<?php echo $kids->picture;?>">
                                </script>
                                <?php
                                }
                                }
                                break;
                                case 2:
                                ?>
                                <h3 class="text-center">Sponsored</h3>
                                <?php
                                break;
                                }
                                ?>
                                </from>
                                <?php
                                ?>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            }else{
            echo "We don't have children in this association";
            }
            ?>
        </div>
    </div>
    <?php
    }
    }
    ?>
</div>
                </div>
            </div>
        </div>
    </section>