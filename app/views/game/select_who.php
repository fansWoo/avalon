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

<?=form_open_multipart("game/vote_who") ?>
<div class="vote_box">
	<h3>選擇第 3 次出任務人選</h3>
	<label><input type="checkbox"> 楊翊</label>
	<label><input type="checkbox"> 廖哲賢</label>
	<label><input type="checkbox"> 蔡思樂</label>
</div>
<div class="submit_box">
	<div class="submit"><input type="submit" value="選擇這些人出任務"></div>
</div>
<div>所有人正在等候 楊翊 作出決策...</div>

</form>

<?=$temp['footer_bar']?>
<?=$temp['body_end']?>