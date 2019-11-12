<div class="form-group pull-right">
<input type="text" class="search form-control" placeholder="What you looking for?">
</div>
<span class="counter pull-right"></span>


<table class="table table-hover table-bordered results">
<?php foreach($servicecon as $ns){
        $status = $ns->current_status; 
} ?> 
   

<thead>
    <tr>
        <th>Service ID</th>
        <th>Agent Name</th>
        <th>Service Name</th>
        <th>Service Type</th>

        <th>View Invoice</th>
    </tr>
    <tr class="warning no-result">
        <td colspan="4"><i class="fa fa-warning"></i> No result</td>
    </tr>
</thead>
<tbody>
<?php if(isset($status)): ?>
<?php if($status == '1'):?>
    <?php foreach($servicecon as $ns): ?>
    <tr>
        <th scope="row">
            <?php echo $ns->appartment_id; ?>
        </th>
        <td>
            <?php echo $ns->agent_name; ?>
        </td>
        <td>
            <?php echo $ns->service; ?>
        </td>
        <td>
            <?php echo $ns->service_type; ?>
        </td>

        <td><button class="btn btn-success" onclick="location.href='<?php echo site_url('Dashboard/ViewServices/'.$ns->agent_id.'/'.$ns->appartment_id)?>'">Click To View</button></td>
    </tr>
    <?php endforeach;?>
</tbody>
</table>
<?php else: ?>
<div class="container">

      <div class="starter-template">
        <h1>No New Order Found</h1>
       
      </div>

    </div><!-- /.container -->

<?php endif; ?>
<?php endif; ?>

<script>
$(document).ready(function() {
    $(".search").keyup(function() {
        var searchTerm = $(".search").val();
        var listItem = $('.results tbody').children('tr');
        var searchSplit = searchTerm.replace(/ /g, "'):containsi('")

        $.extend($.expr[':'], {
            'containsi': function(elem, i, match, array) {
                return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
            }
        });

        $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e) {
            $(this).attr('visible', 'false');
        });

        $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e) {
            $(this).attr('visible', 'true');
        });

        var jobCount = $('.results tbody tr[visible="true"]').length;
        $('.counter').text(jobCount + ' item');

        if (jobCount == '0') {
            $('.no-result').show();
        } else {
            $('.no-result').hide();
        }
    });
});
</script>