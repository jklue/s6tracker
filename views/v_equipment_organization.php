<div class="page">
	<ul>

		<!-- Platoon page determined in controller if no vehicle designated -->
		<?php if ($data == 'platoon'): ?>
			<?php $nameUsed = array(); // Initialize arry which will prevent duplicate li's ?>
			<?php foreach($equipments as $equipment): // Iterate through master data ?>
				<?php if(!in_array($equipment['platoon'], $nameUsed)): ?>
					<li class="platoon"><a href="/equipment/organization/<?=$equipment['platoon']?>"><?=$equipment['platoon']?> <?php if($equipment['platoon']!='Headquarters'): ?>Platoon <?php endif; ?></a></li>
				<?php endif; ?>
				<?php $nameUsed[] = $equipment['platoon']; // add platoon name to array ?>
			<?php endforeach; ?>

		<!-- Vehicle page -->
		<?php elseif ($data == 'vehicle'): ?>
			<?php foreach($vehicleInfos as $vehicleInfo): // Iterate through vehicle data ?>			
				<li class="vehicle" data-status='<?=$vehicleInfo['status'] // set data-status to change background color ?>'>
					<a href="/equipment/organization/<?=$vehicleInfo['platoon']?>/<?=$vehicleInfo['bumper-number']?>"><?=$vehicleInfo['bumper-number'] // echo bumper number for link and display ?></a>
				</li>
			<?php endforeach; ?>
		
		<!-- Equipment page -->
		<?php elseif ($data == 'equipment'): ?>
			<li class="equipment title" ><?=$vehicle?></li>
			<?php foreach($equipmentInfos as $equipmentInfo): // Iterate through equipment data ?>			
				<li class="equipment" data-status='<?=$equipmentInfo['status'] // set data-status to change background color ?>'>
					<a href="/equipment/organization/<?=$equipmentInfo['platoon']?>/<?=$equipmentInfo['vehicle']?>/<?=$equipmentInfo['equipment']?>"><?=$equipmentInfo['equipment'] // echo bumper number for link and display ?></a>
				</li>
			<?php endforeach; ?>
				
		<!-- Else show status because one piece of equipment is selected -->
		<?php else: ?>
			<?php foreach($statusInfo as $status): // Iterate through equipment data ?>
				<li class="status"><?=$status['vehicle']?> - <?=$status['equipment']?></li>
				<li class="status">
					<form class="pure-form" method="POST" action="/equipment/p_changeSN">
				    <fieldset>
				      <legend>SN#</legend>
							
							<label for="sn">SN#: </label>
							
							<input type="text" name="sn" id="sn" class="form-control" value="<?=$status['sn']?>" >
							
							<input type="hidden" name="id" value="<?=$status['id']?>">
							<input type="hidden" name="platoon" value="<?=$status['platoon']?>">
							<input type="hidden" name="vehicle" value="<?=$status['vehicle']?>">
							<input type="hidden" name="equipment" value="<?=$status['equipment']?>">
				      
				      <button type="submit" class="pure-button pure-button-primary">Update</button>
				    
				    	<span id="serialnSuccess">
								<img src="/assets/checkbox.png" alt="">
							</span>

				    </fieldset>
					</form>
				</li>
				<li class="status statusBlock" data-status='<?=$status['status'] // set data-status to change background color ?>'>
					<p>Status:</p>
				  	<a class="pure-button pure-button-red" href="/equipment/p_changeStatus/<?=$status['id']?>/<?=$status['platoon']?>/<?=$status['vehicle']?>/<?=$status['equipment']?>/r">red</a>
				  	<a class="pure-button pure-button-amber" href="/equipment/p_changeStatus/<?=$status['id']?>/<?=$status['platoon']?>/<?=$status['vehicle']?>/<?=$status['equipment']?>/a">amber</a>
					  <a class="pure-button pure-button-green" href="/equipment/p_changeStatus/<?=$status['id']?>/<?=$status['platoon']?>/<?=$status['vehicle']?>/<?=$status['equipment']?>/g">green</a>
				</li>
				<li class="status comment">
					<form class="pure-form" method="POST" action="/equipment/p_addComment">
				    <fieldset>
				      <legend>Comment</legend>
							
							<label for="comment">Comment: </label>
							
							<textarea name="comment" id="comment" class="form-control" placeholder="Comment" autofocus><?=$status['comment']?></textarea>
							
							<input type="hidden" name="id" value="<?=$status['id']?>">
							<input type="hidden" name="platoon" value="<?=$status['platoon']?>">
							<input type="hidden" name="vehicle" value="<?=$status['vehicle']?>">
							<input type="hidden" name="equipment" value="<?=$status['equipment']?>">

				      <button type="submit" class="pure-button pure-button-primary">Update</button>

							<span id="commentSuccess">
								<img src="/assets/checkbox.png" alt="">
							</span>

				    </fieldset>
					</form>
				</li>
			<?php endforeach; ?>
		<?php endif; ?>
				
	</ul>
</div>