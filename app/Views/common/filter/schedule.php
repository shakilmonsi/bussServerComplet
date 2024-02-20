<label for="schedule_id" class="form-label">Schedule Time</label>
<select  name="schedule_id" class="testselect1" required>
      <option value="" >None</option>
			<?php foreach ($schedule as $schedulevalue): ?>

				<option value="<?php echo $schedulevalue->id ?>"><?php echo $schedulevalue->start_time ?> - <?php echo $schedulevalue->end_time ?></option>

			<?php endforeach?>
    </select>