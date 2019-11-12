<div class="container">
<div class="form-group pull-right">
    <input type="text" class="search form-control" placeholder="What you looking for?">
   
</div>
<span class="counter pull-right"></span>
<div class="col-md-12 col-md-offset-3 flash">
    <?php echo $this->session->flashdata('success'); ?>
</div>
<table class="table table-hover table-bordered results"  id"loading">
  <thead>
    <tr >
      <th>Agent ID</th>
      <th>Agent Name</th>
      <th>Agent Email</th>
      <th>Agent Location</th>    
    </tr>
    <tr class="warning no-result">
      <td colspan="4"><i class="fa fa-warning"></i> No result</td>
    </tr>
  </thead>
  <tbody>
  <?php foreach($AgentList as $alist): ?>
    <tr>
      <th scope="row"><?php echo $alist->agent_id; ?></th>
      <td> <?php echo $alist->agent_name;?></td>
      <td><?php echo $alist->agent_email; ?></td>
      <td><?php echo $alist->agent_location; ?></td>
       
      </td>
    </tr>
  <?php endforeach;?>  
  </tbody>
</table>

<script>
$(document).ready(function() {
  $(".search").keyup(function () {
    var searchTerm = $(".search").val();
    var listItem = $('.results tbody').children('tr');
    var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
    
  $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
        return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }
  });
    
  $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','false');
  });

  $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','true');
  });

  var jobCount = $('.results tbody tr[visible="true"]').length;
    $('.counter').text(jobCount + ' item');

  if(jobCount == '0') {$('.no-result').show();}
    else {$('.no-result').hide();}
		  });
});
</script>

</div>