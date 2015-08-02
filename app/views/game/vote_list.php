<?=$temp['header_up']?>
<script>
$(function(){
	var global_json = {
		'ui_title_Str' : '任務',
		'ui_nav_name': 'vote_list'
	};
	game_init(global_json);
});
</script>
<?=$temp['header_down']?>
<?=$temp['header_bar']?>

<h2>任務資訊[ <span style="color: blue;">1勝</span> / <span style="color: red;">1敗</span> ]</h2>

<div class="task_box">
	<h3>第 1 次出任務 [<span style="color: red;">出任務失敗</span>]</h3>
	<div class="vote_box">
		<h4>楊翊 發起第 1 次任務人選投票[<span style="color: gray;">投票失敗</span>]</h4>
		<h4>出任務的人：楊翊、廖哲賢</h4>
		<p>楊翊 <span style="color: gray;">反對</span> 這次任務人選</p>
		<p>廖哲賢 <span style="color: green;">贊成</span> 這次任務人選</p>
		<p>蔡思樂 <span style="color: gray;">反對</span> 這次任務人選</p>
	</div>

	<div class="vote_box">
		<h4>楊翊 發起第 2 次任務人選投票[<span style="color: green;">投票成功</span>]</h4>
		<h4>出任務的人：楊翊、廖哲賢</h4>
		<p>楊翊 <span style="color: gray;">反對</span> 這次任務人選</p>
		<p>廖哲賢 <span style="color: green;">贊成</span> 這次任務人選</p>
		<p>蔡思樂 <span style="color: green;">贊成</span> 這次任務人選</p>
		<h4>[<span style="color: red;">出任務失敗</span>]</h4>
	</div>
</div>

<div class="task_box">
	<h3>第 2 次出任務 [<span style="color: blue;">出任務成功</span>]</h3>
	<div class="vote_box">
		<h4>楊翊 發起第 1 次任務人選投票[<span style="color: gray;">投票失敗</span>]</h4>
		<h4>出任務的人：楊翊、廖哲賢</h4>
		<p>楊翊 <span style="color: gray;">反對</span> 這次任務人選</p>
		<p>廖哲賢 <span style="color: green;">贊成</span> 這次任務人選</p>
		<p>蔡思樂 <span style="color: gray;">反對</span> 這次任務人選</p>
	</div>

	<div class="vote_box">
		<h4>楊翊 發起第 2 次任務人選投票[<span style="color: green;">投票成功</span>]</h4>
		<h4>出任務的人：楊翊、廖哲賢</h4>
		<p>楊翊 <span style="color: gray;">反對</span> 這次任務人選</p>
		<p>廖哲賢 <span style="color: green;">贊成</span> 這次任務人選</p>
		<p>蔡思樂 <span style="color: green;">贊成</span> 這次任務人選</p>
		<h4>[<span style="color: blue;">出任務成功</span>]</h4>
	</div>
</div>

<div class="task_box">
	<h3>第 3 次出任務 [<span style="color: yellow;">任務投票中</span>]</h3>
	<div class="vote_box">
		<h4>楊翊 發起第 1 次任務人選投票[<span style="color: gray;">投票失敗</span>]</h4>
		<h4>出任務的人：楊翊、廖哲賢</h4>
		<p>楊翊 <span style="color: gray;">反對</span> 這次任務人選</p>
		<p>廖哲賢 <span style="color: green;">贊成</span> 這次任務人選</p>
		<p>蔡思樂 <span style="color: gray;">反對</span> 這次任務人選</p>
	</div>
	<div class="vote_box">
		<h4>楊翊 發起第 2 次任務人選投票[<span style="color: gray;">投票失敗</span>]</h4>
		<h4>出任務的人：楊翊、廖哲賢</h4>
		<p>楊翊 <span style="color: gray;">反對</span> 這次任務人選</p>
		<p>廖哲賢 <span style="color: green;">贊成</span> 這次任務人選</p>
		<p>蔡思樂 <span style="color: gray;">反對</span> 這次任務人選</p>
	</div>
	<div class="vote_box">
		<h4>楊翊 發起第 3 次任務人選投票[<span style="color: yellow;">投票中</span>]</h4>
		<h4>出任務的人：楊翊、廖哲賢</h4>
	</div>
</div>

<?=$temp['footer_bar']?>
<?=$temp['body_end']?>