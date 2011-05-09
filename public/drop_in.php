<?php
require_once('functions.php');
require_once('../inc/config.php');
$page = "Drop In";
openHeader($page);
closeHeader();
drawMainMenu();
drawActivitiesMenu("dropIn");
openContent($page);
?>
<!--begin content-->

<img class="pageImg" src="photos/drop_in.jpg" />
<span id="wpt" class="block bold size18 blue2">Play Time Package</span>
<?= PLAY_TIME_MESSAGE_1 ?>
<span class="subtitle1 gray1">6 months+<br />
Monday - Thursday | 12:30pm - 3:30pm</span>
<p class="pgraph">Come and play all afternoon or just for an hour. All ages can drop in for animal time, arts & crafts and creative play in our playroom. You can pay by the day or buy a weekly or monthly package. Drop off available for 2&#189;+ years.</p>


<div class="clearB">
	<table id="winterPlayChart" class="fullWidth marginB5" cellpadding="0" cellspacing="1">
		<thead>
			<tr class="blueBg2 white bold size13">
				<td class="pad5">
					Play Time
				</td>
				<td class="pad5">
					Price
				</td>
				<td class="pad5">
					Current Clients
				</td>
				<td class="pad5">
					Drop Off Price
				</td>
				<td class="pad5">
					Drop Off Current Clients
				</td>
			</tr>
		</thead>
		<tfoot><tr><td></td></tr></tfoot>
		<tbody>
			<tr class="gray1 size12">
				<td class="pad5">
					Daily
				</td>
				<td class="pad5">
					$20
				</td>
				<td class="pad5">
					$20
				</td>
				<td class="pad5">
					$40
				</td>
				<td class="pad5">
					$40
				</td>
			</tr>
			<tr class="gray1 size12">
				<td class="pad5">
					Weekly
				</td>
				<td class="pad5">
					$65
				</td>
				<td class="pad5">
					$45
				</td>
				<td class="pad5">
					$95
				</td>
				<td class="pad5">
					$80
				</td>
			</tr>
			<tr class="gray1 size12">
				<td class="pad5">
					Monthly
				</td>
				<td class="pad5">
					$200
				</td>
				<td class="pad5">
					$145
				</td>
				<td class="pad5">
					$360
				</td>
				<td class="pad5">
					$250
				</td>
			</tr>
		</tbody>
	</table>

	<p class="pgraph">*$15/day for friends and family of current clients. Art Farm members receive 20% off current client package</p>

	<div id="" class="floatR clearB">
		<a id="btn1R" class="" href="register.php?d=dropIn">
		<div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Pay Now!</div><div class="btn1RL"><span class="invisible">.</span></div>
		</a>
	</div>
</div>

<div class="formSeparator1 marginB10 marginT10 clearB"></div>

<div class="clearB">
	<span id="oh" class="block bold size18 blue2">Open House</span>
	<?= OPEN_HOUSE_MESSAGE_1 ?>
	<span class="subtitle1 gray1">All ages <span class="size12">(Drop Off optional for 2+ years)</span><br />
	Friday 9:30am - 12:00pm<br />
	<a class="rust mouseCursor" onclick="window.open('open_house_schedule.php','ohSchedule','width=400,height=135,left=100,top=100');">View Schedule</a></span>
	<span class="blue2 size13 block">One-Time Visit <span class="size12 normal gray2">$45 | $20 for children currently registered in a class</span></span>
	<span class="blue2 size13 block">Value Passes (per semester) <span class="size12 normal gray2">5 visit: $200 | 10 visit: $300 | 20 visit: $500</span></span>

	<p class="pgraph">Drop by during these 2&#189; hours for baking, arts/crafts, music, singing and plenty of cuddling time with the animals. To see the animal you must arrive between 9:30am and 10:00am.  The farm closes at 10:15am.<br />All passes are fully transferable, so you can share them with friends and family.</p>

	<div id="" class="floatR clearB">
		<a id="btn1R" class="" href="register.php?d=dropIn">
		<div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Pay Now!</div><div class="btn1RL"><span class="invisible">.</span></div>
		</a>
	</div>
</div>

<div class="formSeparator1 marginB10 marginT10"></div>

<div class="clearB">
	<span id="motf" class="block bold size18 blue2">Mornings on The Farm</span>
	<span class="subtitle1 gray1">1+ years<br />
	Saturday/Sunday 8am - 10am</span>
	<span class="size12 gray2">1 visit: $15 | Adults: $5 | Members: $5</span>

	<p class="pgraph">Where else in New York City can you begin your day on the farm?  With a basket full of hay and goodies, you and your children can spend the morning feeding and snuggling animals right here in our indoor farm on the Upper East Side.</p>






	
</div>

<div class="formSeparator1 marginB10 marginT10 clearB"></div>

<div class="clearB">
	<img class="" src="images/mc_logo.png" /><span id="mc" class="block bold size18 blue2">Mini Chef Cooking Class</span>
	<?= MINI_CHEF_MESSAGE_1 ?>
	<span class="subtitle1 rust"><br />
	<span class="subtitle1 gray1">After-school/weekend program<br />
	Thursday 3:30pm - 4:30pm | 2 - 8 years mixed ages<br />
	Saturday 9am - 10am | 2 - 8 years<br />
	<a class="rust mouseCursor" onclick="window.open('mini_chef_schedule.php','mcSchedule','width=400,height=275,left=100,top=100,scrollbars=yes');">View Cooking Schedule</a><br />
	<span class="size12 gray2">Drop In: $40 | Winter: $444 | Spring: $444 | Fall: $555</span></span>

	<p class="pgraph">Get ready to mix, measure and create as Mini Chef brings their "Culinary Playground" to The Art Farm. The popular children's cooking program, Mini Chef helps kids of all ages develop a love of cooking through cooking classes and birthday parties with age appropriate menus. It's all about learning about good nutrition and creating good food through the hands-on cooking activities. Creating local and global cuisine, Mini Chef's head chef, Sylvie Berger, brings children on a taste bud voyage and cooking adventure. Create, make, eat, enjoy!</p>

	<div id="" class="floatR clearB">
		<a id="btn1R" class="" href="register.php?d=class">
		<div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Register!</div><div class="btn1RL"><span class="invisible">.</span></div>
		</a>
	</div>

<div class="clearB">
	<span id="aam" class="title2 blue2">Art, Adventures and More</span>
	<img class="padR10 padT10 padB10" src="photos/aam.jpg" />
	<span class="subtitle1 gray1">After-school program <br />Tuesday: 3:30pm - 4:30pm | 4-10 years<br />
	<span class="size12 gray2">Drop In: $45 | Winter: $480 | Spring: $480 | Summer: $320</span></span>
	<p class="pgraph">Art, Adventures and More brings their art studio to The Art Farm. Children will learn techniques using acrylic paints, pastels, clay sculpting and other media. Classes will be led by two experienced artists who will educate through demonstrations and samples. Your child will be inspired and their imagination and creativity will flow. They will paint seascapes, underwater themes, landscapes, flora, and learn about the animals living in their natural habitats. There will also be an introduction to Master Artists of Impressionism, Expressionism, Contemporary Art, Caribbean Art and they will explore art across cultures. We connect the visual arts to other disciplines to interpret the world. Each child will take home their own "Masterpeice!"</p>
	<div id="" class="floatR clearB">
<a id="btn1R" class="" href="register.php?d=class">
		<div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Register!</div><div class="btn1RL"><span class="invisible">.</span></div>
		</a>
	</div>
</div>
</div>

<!--end content-->
<?php
closeContent();
drawFooter();
?>