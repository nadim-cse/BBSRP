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
                            <p>Agent website :
                                <?php echo $ns->agent_reference;?> </p>
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
                                <?php echo $ns->appartment_id;?> </p>
                            <p>Service Name:
                                <?php echo $ns->service;?> </p>
                            <p>Service Type:
                                <?php echo $ns->service_type;?> </p>    
                            <p>Request Date:
                                <?php echo date("d F, Y ", strtotime($ns->time_created)); ?> </p>
                            <p>Request Time:
                                <?php echo date("h:i A", strtotime($ns->time_created)); ?> </p>
                            <p>Request Status:
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
                                <td class="text-center"><strong>Total Bed</strong></td>
                                <td class="text-center"><strong>Total Bath </td>
                                <td class="text-center"><strong>Overview</td>
                                <td class="text-center"><strong>Price</td>

                            </tr>
                       
                        </thead>
                        <tbody>
                        <?php foreach($newServiceRequest as $ns) : ?>
                            <tr>
                                <td class="text-center">
                                    <?php echo $ns->appartment_title;?>
                                </td>
                                <td class="text-center">
                                    <?php echo $ns->bed;?>
                                </td>
                                <td class="text-center">
                                    <?php echo $ns->bath;?>
                                </td>
                                <td class="text-center">
                                    <?php echo $ns->overview;?>
                                </td>
                                <td class="text-center">
                                    <?php echo $ns->appertment_price;?>
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
                                <td class="text-center"><strong>Bed Image</strong></td>
                                <td class="text-center"><strong>Bath Image</strong></td>
                                <td class="text-center"><strong>Exterior Image</strong></td>
                                

                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($newServiceRequest as $ns) : ?>
                            <tr>
                                <td>
                                    <img style="height:200px;width;200px" src="<?php echo site_url($ns->bed_image_url); ?>" alt="">
                                </td>
                                <td class="text-center">
                                <img  style="height:200px;width;200px" src="<?php echo site_url($ns->bath_image_url); ?>" alt="">
                                </td>
                                <td class="text-center">
                                <img style="height:200px;width;200px" src="<?php echo site_url($ns->exterior_image_url); ?>" alt="">
                                </td>

                            </tr>
                            <?php endforeach;?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="btn-group">
            <a href="<?php echo site_url('Dashboard/ServiceConfirmRequest/'.$ns->appartment_id.'/'.$ns->agent_email); ?>"><button type="button" class="btn btn-success">Confirm</button></a>
            <a href="<?php echo site_url('Dashboard/ServicePendingRequest/'.$ns->appartment_id); ?>"><button type="button" class="btn btn-warning">Pending</button></a>
            <a href="<?php echo site_url('Dashboard/ServiceCancelRequest/'.$ns->appartment_id.'/'.$ns->agent_email); ?>"><button type="button" class="btn btn-danger">Cancel</button></a>
        </div>



    </div>
  
</div>
</div>
</div>