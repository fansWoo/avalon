<?=$temp['header_up']?>
<script>
$(function(){
	var global_json = {
		'ui_title_Str' : '遊戲大廳'
	};
	game_init(global_json);
});
</script>
<?=$temp['header_down']?>
<?=$temp['header_bar']?>

<div>
	<?=form_open_multipart("game/avatar") ?>

	<div class="select_box">
		<h3>遊戲設定</h3>
		<div>房間編號：<input type="number" min="10000000" max="99999999" value="99999999"></div>
		<div>設定人數：<input type="number" min="5" max="10" value="5"></div>
	</div>
	<div class="select_box">
		<h3>選擇至少兩個正義陣營角色</h3>
		<label><input type="checkbox" checked disabled> 梅林</label>
		<label><input type="checkbox" checked disabled> 忠臣</label>
		<label><input type="checkbox"> 帕西瓦</label>
	</div>
	<div class="select_box" style="margin-bottom: 50px;">
		<h3>選擇至少一個邪惡陣營角色</h3>
		<label><input type="checkbox" checked disabled> 爪牙</label>
		<label><input type="checkbox"> 魔甘娜</label>
		<label><input type="checkbox"> 莫德雷德</label>
		<label><input type="checkbox"> 白臉</label>
		<label><input type="checkbox"> 刺客</label>
	</div>
	<div class="submit_box">
		<div class="submit"><input type="submit" value="遊戲開始"></div>
	</div>

	</form>
</div>

<?=$temp['footer_bar']?>
<?=$temp['body_end']?>