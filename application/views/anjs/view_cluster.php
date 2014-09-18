<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<br/>
<div ng-controller="cluter_table">
	<div class="row">
		<div class="col-md-3">
			<dl class="dl-horizontal">
				<dt>Province</dt>
				<dd >{{province}}</dd>
				<dt>Address1</dt>
				<dd>{{address1}}</dd>
				<dt>Address2</dt>
				<dd>{{address2}}</dd>
				<dt>Phone</dt>
				<dd>{{phone}}</dd>
				<dt>Type</dt>
				<dd>{{type}}</dd>
			</dl>
		</div>
		<div class="col-md-offset-4">
			<div id="map-canvas" style="height: 150px;width: 100%;"/>
		</div>
	</div>
	<div class="row">
		<div class="div_scroll list-group col-md-10">
			<a ng-click = "viewcenter(center.cId)" class="list-group-item" ng-repeat="center in centers"> <img
				class="pull-left"
				src="<?php echo base_url()?>icons/defualt/center_64.png">
				<h4 class="list-group-item-heading">{{ center.address1 }} {{ x.address2
					}}</h4>
				<p class="list-group-item-text">Province: {{center.province}} Phone:
					{{x.phone}}</p>
				<button class="btn pull-right" style="margin-top: -20px;"
					ng-click="viewcenter(center.cId)">
					<span class="glyphicon glyphicon-pencil"></span> View
				</button>
			</a>
		</div>
	</div>
</div>