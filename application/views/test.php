	<p><b>Data Extraction:: Confirmation</b></p>
	<p><i><?php echo $error; ?></i></p>
	<p><b>Content from</b>  : <?php echo $filename; ?> </p>
<div align='center'>
	<form name="calais" action="<?php echo base_url() . index_page();?>/projects/do_doc_update" method="post"> 
	<p><textarea name="content" id="detail"><?php echo $content;?></textarea>
	<script language="javascript">generate_wysiwyg('detail');</script></p>
	<p><input type="submit" name="submit" value="UPDATE" />
	<input type="hidden" name="ID" value="<?php echo $ID; ?>" />
	<input type="hidden" name="filename" value="<?php echo $filename; ?>" /></p>
	</form>
</div>	
	<p><a href="<?php echo base_url() . index_page();?>/projects">Back to list </a> </p>

