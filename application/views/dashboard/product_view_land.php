<div class="container-fluid">
<div class="row">
    
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="text-center"><strong>Service Request SUMMERY</strong></h1>
                <div class="col-md-12 col-md-offset-3">
                           <?php echo $this->session->flashdata('success'); ?>
                </div>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8">

                            <?php foreach($newServiceRequest as $ns) :?>
                            <h2>Customer Details</h2>
                            <p>Name:
                                <?php echo $ns->agent_name;?> </p>
                            <p>Agent Location :
                                <?php echo $ns->agent_location;?>
                            </p>
                            <p>Agent Mobile NO.:
                                <?php echo $ns->agent_mobile;?>
                            </p>
                            <p>Agent Email:
                                <?php echo $ns->agent_email;?>
                            </p>
                            <?php endforeach;?>

                        </div>
                        <div class="col-md-4">
                            <?php foreach($newServiceRequest as $ns) :
                                                                    $order_status =  $ns->current_status;
                                                                    if($order_status == '0'){
                                                                        $set_order_status = "Pending";
                                                                    }
                                                                    if($order_status == '1'){
                                                                        $set_order_status = "Confirmed";
                                                                    }
                                                                    if($order_status == '2'){
                                                                        $set_order_status = "Canceled";
                                                                    }
                                                                ?>
                            <h2>Service Request Details</h2>
                            <p>Service number:
                                <?php echo $ns->land_id;?> </p>
                            <p>Service Name:
                                <?php echo $ns->service;?> </p>
                            <p>Service Type:
                                <?php echo $ns->service_type;?> </p>    
                            <p>Request Date:
                                <?php echo date("d F, Y ", strtotime($ns->time_created)); ?> </p>
                            <p>Request Time:
                                <?php echo date("h:i A", strtotime($ns->time_created)); ?> </p>
                            <p style="font-weight:bold;">Request Status:
                                <?php echo $set_order_status;?>
                            </p>


                            <?php endforeach;?>

                        </div>

                    </div>

                </div>
            </div>
            <div class="panel-bnsy">
                <div class="table-responsive">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <td class="text-center"><strong>Service Title</strong></td>
                                <td class="text-center"><strong>Space</strong></td>
                                <td class="text-center"><strong>Overview</td>
                                <td class="text-center"><strong>Price</td>

                            </tr>
                       
                        </thead>
                        <tbody>
                        <?php foreach($newServiceRequest as $ns) : ?>
                            <tr>
                                <td class="text-center">
                                    <?php echo $ns->land_title;?>
                                </td>
                                <td class="text-center">
                                    <?php echo $ns->space;?>
                                </td>
                                <td class="text-center">
                                    <?php echo $ns->land_overview;?>
                                </td>
                                <td class="text-center">
                                    <?php echo $ns->land_price;?>
                                </td>

                            </tr>
                            <?php endforeach; ?>     
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="panel-bnsy">
                <div class="table-responsive">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <td class="text-center"><strong>Land Images</strong></td>
                               
                                

                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($newServiceRequest as $ns) : ?>
                            <tr>
                                <td>
                                    <img style="height:200px;width;500px" src="<?php echo site_url($ns->land_image); ?>" alt="">
                                </td>
                               

                            </tr>
                            <?php endforeach;?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="btn-group">
            <a href="<?php echo site_url('Dashboard/ServiceConfirmRequestForLand/'.$ns->land_id.'/'.$ns->agent_email); ?>"><button type="button" class="btn btn-success">Confirm</button></a>
            <a href="<?php echo site_url('Dashboard/ServicePendingRequestForLand/'.$ns->land_id); ?>"><button type="button" class="btn btn-warning">Pending</button></a>
            <a href="<?php echo site_url('Dashboard/ServiceCancelRequestForLand/'.$ns->land_id.'/'.$ns->agent_email); ?>"><button type="button" class="btn btn-danger">Cancel</button></a>
        </div>



    </div>
  
</div>
</div>
</div>