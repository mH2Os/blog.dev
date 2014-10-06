@extens('layouts.master')

@section('content')
	<h1>Roll the dice!</h1>
	<h3>Your guess: <?= $guess ?></h3>
	<h3>Your roll: <?= $random ?></h3>
	<?php if ($guess == $random): ?>
		<h2>You Win!</h2>
	<?php else : ?>
		<h2>You Lose!</h2>
	<?php endif ?>
@stop