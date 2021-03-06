<?php
/**
 * @Author: PHP Poets IT Solutions Pvt. Ltd.
 */
$this->set('title', 'View');
?>
<div class="row">
	<div class="col-md-9">
		<div class="portlet light ">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-bar-chart font-green-sharp hide"></i>
					<span class="caption-subject font-green-sharp bold ">View Goods Recieve Note</span>
				</div>
			</div>
			<div class="portlet-body">
				<?= $this->Form->create($grn) ?>
				<div class="row">
					<div class="col-md-3">
						<label>Voucher No :<?php echo '#'.str_pad($grn->voucher_no, 4, '0', STR_PAD_LEFT); ?></label>
					</div>
					<div class="col-md-4 form-group">
						<label>Transaction Date: <?php echo $grn->transaction_date; ?></label>
					</div>
					<div class="col-md-3 form-group">
						<label>Reference No.: <?php echo $grn->reference_no; ?></label>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="table-responsive">
					<?php if (!empty($grn->grn_rows)): ?>
						<table id="main_table" class="table table-condensed table-bordered" style="margin-bottom: 4px;" width="100%">
							<thead>
								<tr>
									<td><label>Item<label></td>
									<td><label>Quantity<label></td>
									<td><label>Purchase Rate<label></td>
									<td><label>Sale Rate<label></td>
								</tr>
							</thead>
							<tbody id='main_tbody' class="tab">
								<?php foreach ($grn->grn_rows as $grnRows): ?>
								<tr class="main_tr" class="tab">
									<td><?= h($grnRows->item->name) ?></td>
									<td class="rightAligntextClass"><?= h($grnRows->quantity) ?></td>
									<td class="rightAligntextClass"><?= h($grnRows->purchase_rate) ?></td>
									<td class="rightAligntextClass"><?= h($grnRows->sale_rate) ?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
							<!--<tfoot>
								<td class="rightAligntextClass" colspan="2" ><b>Total</b></td>
								<td class="rightAligntextClass"><b><?php echo $grn->total_purchase; ?></b></td>
								<td class="rightAligntextClass"><b><?php echo $grn->total_sale; ?></b></td>
							</tfoot>-->
						</table>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
