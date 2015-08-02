<?=$temp['header_up']?>
<script>
$(function(){
	var global_json = {
		'ui_title_Str' : '決策',
		'ui_nav_name': 'select_vote'
	};
	game_init(global_json);
});
</script>
<?=$temp['header_down']?>
<?=$temp['header_bar']?>

<?=form_open_multipart("game/vote_success") ?>
<div class="vote_box">
	<h3>楊翊 派這些人出第 3 次任務</h3>
	<p>廖哲賢</p>
	<p>楊翊</p>
	<p>蔡思樂</p>
</div>
<div class="submit_box">
	<div class="submit"><input type="submit" value="贊成這些人出任務"></div>
	<div class="submit"><input type="submit" value="反對這些人出任務"></div>
</div>
<div>所有人正在等候 廖哲賢 作出決策...</div>
<div>所有人正在等候 楊翊 作出決策...</div>

</form>

<?=$temp['footer_bar']?>
<?=$temp['body_end']?>