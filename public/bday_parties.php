<?php
require 'functions.php';
$page = "Birthday Parties";
openHeader($page);
closeHeader();
drawMainMenu();
drawActivitiesMenu("bDayParties");
openContent($page);
function popup($row,$partyName)
{
	return '<a class="bdayBtn" href="javascript:void(0);" onclick="window.open(\'bday_parties_list.php#' . $row . '\',\'bdayParties\',\'width=730,height=430,left=0,top=0,scrollbars\');">' . $partyName . '</a>';
}
?>
<!--begin content-->

<img class="block margin0" src="photos/birthday_parties_1.jpg" />
<img class="block marginT10 marginB15" src="photos/birthday_parties_2.jpg" />
<p class="pgraph">Give your child a party they will always remember and your guests will enjoy!</p>

<p class="pgraph">Enjoy 2 hours at our eco-friendly farm with our expert staff to run the party for you, including all set up and clean up. The children will enjoy our award winning petting zoo, music, art or any of the themes listed below.</p>

<table id="bdayLinks" class="fullWidth marginB20" border="0" cellspacing="1" cellpadding="4">
	<tr>
		<td class="bdayBg1"><?php echo popup(1,"Standard Art Farm Party")?></td>
		<td class="bdayBg2"><?php echo popup(1,"Farm Animal Party")?></td>
		<td class="bdayBg3"><?php echo popup(1,"Exotic Animal Party")?></td>
	</tr>
	<tr>
		<td class="bdayBg4"><?php echo popup(1,"Princess &amp; Knights Party")?></td>
		<td class="bdayBg5"><?php echo popup(2,"Treasure Hunt Party")?></td>
		<td class="bdayBg6"><?php echo popup(2,"Cooking Party")?></td>
	</tr>
	<tr>
		<td class="bdayBg7"><?php echo popup(2,"Mad Science Party")?></td>
		<td class="bdayBg8"><?php echo popup(2,"Wendy The Pipe Cleaner Party")?></td>
		<td class="bdayBg9"><?php echo popup(3,"Do It Yourself Party")?></td>
	</tr>
	<tr>
		<td class="bdayBg10"><?php echo popup(3,"Weekday Party")?></td>
		<td class="bdayBg11"><?php echo popup(3,"The Art Farm on The Moove! Party")?></td>
	</tr>
</table>

<p class="pgraph">A $200 Non-Refundable deposit is required to reserve a date. Please see <a class="rust" href="schedule.php">schedule</a> to see party times. 
Meal choices include regular, whole wheat or kosher pizza or organic chicken fingers with carrots. Organic juice is $10 extra.</p>

<table class="marginB20" cellpadding="0" cellspacing="1">
	<thead>
		<tr class="yellowBg1 bold rust">
			<td class="pad5">Birthday Party Add-Ons<br /><span class="size11 normal">Face Painters, Balloon Animals & Magician prices vary</span></td>
			<td class="pad5 alignR">Price</td>
		</tr>
	</thead>
	<tbody class="gray1">
		<tr>
			<td class="pad5 size13">Farm Animals</td>
			<td class="pad5 size13 alignR">$395</td>
		</tr>
		<tr>
			<td class="pad5 size13">Exotic Animals</td>
			<td class="pad5 size13 alignR">$395</td>
		</tr>
		<tr>
			<td class="pad5 size13">Princess</td>
			<td class="pad5 size13 alignR">$225</td>
		</tr>
		<tr>
			<td class="pad5 size13">Art Farm Guitarist</td>
			<td class="pad5 size13 alignR">$125</td>
		</tr>
	</tbody>
</table>

<span class="title2 rust">Birthday Party Frequently Asked Questions</span>

<p class="pgraph"><b><font color="0066CC">What is the sequence of a party?</font></b>
Music, Art, Animal Time, Food.  We do it in that order so that while the kids are downstairs we can clean up art  and set up for food. </p>

<p class="pgraph"><b><font color="0066CC">What is included in an Art Farm Party?</font></b>
Everything is included for the children.  Food, drinks, party favors and entertainment.</p>

<p class="pgraph"><b><font color="0066CC">How do I schedule a party?</font></b>
To reserve your child's celebration, please contact call 212-410-3260 to book your party or email our Party Coordinator at christina@theartfarms.org .</p>


<p class="pgraph"><b><font color="0066CC">What is the maximum amount of guests?</font></b>
We can accommodate 25-30 children.</p>

<p class="pgraph"><b><font color="0066CC">How long is the party?</font></b>
We schedule party timeslots for 2 hours.  That includes the entry and the exit of guests.  After a 15 minute grace period a $60 service fee will be charged for each additional 15 minutes at the end of the party.</p>

<p class="pgraph"><b><font color="0066CC">Will other people be allowed to be in the Art Farm during my party?</font></b>
No, during your party the Art Farm becomes a private space and the entire facility is yours.</p>

<p class="pgraph"><b><font color="0066CC">What are your party time slots?</font></b>
On the weekends, we offer 11-1, 2-4, and 5-7.  During the week, 4:30-6:30 or 5:00-7:00.</p>



<!--end content-->
<?php
closeContent();
drawFooter();
?>