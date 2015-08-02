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

<?=form_open_multipart("game/vote_list") ?>
<div class="vote_box">
	<h3>決定第 3 次任務成敗</h3>
</div>
<div class="submit_box">
	<div class="submit"><input type="submit" value="讓任務成功"></div>
	<div class="submit"><input type="submit" value="讓任務失敗"></div>
</div>
<div>所有人正在等候 楊翊 作出決策...</div>

</form>

<?=$temp['footer_bar']?>
<?=$temp['body_end']?>