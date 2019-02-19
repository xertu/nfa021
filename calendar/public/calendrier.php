<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="../../css/app.css">
   
  </head>

<body>
	
	<?php
	require '../source/dates/Month.php';

	 $month = new App\dates\Month($_GET['month'] ?? null, $_GET['year'] ?? null);

	 $start = $month->getStartingDay()->modify('last monday');
	  ?> 

<div class="">
<h1><?= $month->toString(); ?></h1>
<div>
	<a href="/nfa021/calendar/public/calendrier.php?month=<?= $month->previousMonth()->month; ?>&year=<?= $month->previousMonth()->year; ?>" class=""> <- </a>
	<a href="/nfa021/calendar/public/calendrier.php?month=<?= $month->nextMonth()->month; ?>&year=<?= $month->nextMonth()->year; ?>" class=""> -> </a>
</div>
</div>
<table >
	
<?php 

for ($i=0; $i < $month->getWeeks(); $i++):
	?>
<tr>
	<?php foreach($month->days as $k => $day): 
		$date = (clone $start)->modify("+" . ($k + $i * 7) . "days")
		?>
	<td class="<?= $month->withinMonth($date) ? '' : 'calendar_othermonth'; ?>">
		<?php if ($i === 0): ?>
		
		<div class="calendar_weekday">
		<?= $day; ?>
	</div>
<?php endif; ?>
	<div class="calendar_day"><?= $date->format('d'); ?></div>
	</td>
	<?php endforeach; ?>
</tr>
<?php endfor; ?>


</table>

</body>