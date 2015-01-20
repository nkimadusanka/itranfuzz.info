<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<br />
<div ng-controller="donor_hist">
	<div class = "row">
		<div class="col-md-12">
			<h1>Your Donation History<small> Current blood donation history</small></h1>
		</div>
	</div>
	<hr/>
	<table class="table table-striped">
		<tr>
			<th>Location</th>
			<th>Date</th>
			<th>stime</th>
			<th>Donate Method</th>
		</tr>
<?php foreach ($pList as $key) {?>
		<tr>
			<td><?php echo $key->address1;?></td>
			<td><?php echo $key->date;?></td>
			<td><?php echo $key->stime;?></td>
			<td><?php echo $key->description;?></td>
		</tr>
<?php }?>
	</table>
</div>
