	
	<div id='extract'>
	<p><b>Data Extraction:: Confirmation</b></p>
	<p><a href="<?php echo base_url() . index_page();?>/projects"><< Back to project list <<</a> </p>
	<p><i><?php echo $error; ?></i></p>
	<p><b>Content from</b>  : <?php echo $filename; ?> </p>
		<div class='content'>
		<form name="calais" action="<?php echo base_url() . index_page();?>/projects/do_doc_update" method="post"> 
		<p><textarea name="content" id="detail"><pre style="word-wrap: break-word; white-space: pre-wrap;"><?php echo strip_tags($content);?></pre></textarea>
		<script language="javascript">generate_wysiwyg('detail');</script></p>
		<p><input type="submit" name="submit" value="UPDATE" />
		<input type="hidden" name="ID" value="<?php echo $ID; ?>" />
		<input type="hidden" name="filename" value="<?php echo $filename; ?>" /></p>
		</form>
		</div>
		<?php if ($words>2){;?></p>
		<div class='extract'>
		<p><b>Sentences found - </b><?php echo $sentences;?></p>
		<p><b>Words found - </b><?php echo $words;?></p>
		<form name="calais" action="<?php echo base_url() . index_page();?>/projects/do_entity_extract" method="post"> 
		<p> </p>
		<p><input type="submit" name="submit" value="EXTRACT" />
		<input type="hidden" name="ID" value="<?php echo $ID; ?>" />
		<input type="hidden" name="words" value="<?php echo $words; ?>" />
		<input type="hidden" name="sentences" value="<?php echo $sentences; ?>" />
		<input type="hidden" name="filename" value="<?php echo $filename; ?>" /></p>
		</form>
		<p><?php if(is_array($entities)){
			echo '<ul>';
			foreach ($entities as $entity){ echo '<li>'. $entity .'</li>';}
			echo '</ul>';
			}?></p>
		</div>
		<?php } ?>
	</div>	
	
