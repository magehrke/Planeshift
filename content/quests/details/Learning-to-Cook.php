<!doctype html>
<html>
<head>
	<title>Learning to Cook</title>

	<?php
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/html_header.php";
		include($path);
	?>

	<!-- import the css for quests -->
	<link href="/styles/quest_single.css" type="text/css" rel="stylesheet" />
</head>

<!-- BODY -->
<body>
<table align="center">
	<tr>
		<td>
			<div id="root_site_container">

				<!-- include Header and Navigation -->
				<?php
					$path = $_SERVER['DOCUMENT_ROOT'];
					$path .= "/header_and_navigation.php";
					include($path);
				?>

				<!-- Content section -->
				<div id="content_main_container">
					<table class="quest_main_table">

					<tr class="quest_title">
						<td>Learning to Cook</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: Nothing.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>â†’ Go to 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Archilaya Gurpleferd';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Archilaya Gurpleferd</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you teach me about cooking?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Sure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: My brother and I are both expert bakers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Cooking and baking skills are considered separate but are often practiced in tandem.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: I can teach you to make some basic foods like bread and cookies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: As you practice and increase your skill, you'll find you can make more things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: So, ready to begin?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I am ready.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Like any craft, whether it be cooking, baking, herbal, or even making weapons…the first thing you need to become familiar with is the ingredients used to make an item, and the tools used to make them with.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: So first, let's start with some of the tools you'll need.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: The most common tool is a kitchen knife.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: If you're serious about making the most of your baking skill, I'd also suggest getting a Circle Cutter, Rolling Pin, Scoop, Spreader, and Wooden Spoon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: You'll need different tools for different preparations so best to have them handy.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Where can I get these tools?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: I sell most of what you need, but I'll give you some tools to start out with.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: The next thing to become familiar with is the equipment.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Unlike tools, which you buy and keep yourself, equipment is available in kitchens or cooking and baking areas like this one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: You should become familiar with the following pieces of equipment: the Preparation Table, Oven, Grill, Mortar and Pestle, Iron Skillet, and Pots.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Notice you can use the table beside me and there is another against the wall by the oven.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Take a moment to check the area here, then come back and tell me when you are ready to continue.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I found everything.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Great.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Next you'll need to know where to find various ingredients.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: In addition to some common items like apples which you can pick from trees, bread which you can buy from numerous merchants, or eggs you get from merchants or directly from kikiri, there are also more specific ingredients you'll need to buy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Examples of these are flour, salt, strimptor, and butter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: I sell most of them but for learning, I'll give you some to make what you need.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: In addition to me, there are other merchants you can buy these things from as well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Be sure to ask me about it later.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Finally, you'll need a recipe book to know how to put it all together, which I'll give you shortly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: So, let's get started by picking a food item and I'll teach you how to make it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: You have a choice of the following: Baked Apple, Buttered Bread, or Sand Cookies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Which do you want to try and make?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'd like to make Baked Apples.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: A good choice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: So, obviously you need some apples.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: I'll give you one to get started.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: You'll also need a kitchen knife.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Do you have one of those?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No, I don't have a knife.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Here you can have this one.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Archilaya hands you a kitchen knife.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: On the preparation table, take an apple and peel it using the kitchen knife.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: I find it easiest to hold the knife in my right hand, leaving my left hand free to adjust the food on the table as needed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Here is an apple and if you want more you can just buy them from me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Of course you can also just go and pick them from the trees around the smithy by the plaza.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: This book is called The Art of Baking.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Here you'll find some recipes to get you started.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Archilaya goes to a bookshelf and pulls down a small book and hands it to you along with an apple.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Just peel the apple and if you want, keep it on the table and core it with the knife, but don't make slices.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: We need a cored apple, so remember, peel then core the apple.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Remember to consult the book and return to me with a cored apple and we'll continue.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I cored the apple.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Good job.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Now, take the cored apple and put it in the oven until it turns into a baked apple then show it to me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You show Archilaya the baked apple.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Archilaya smiles and nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Very good!</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: See?</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: It's not that hard.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: That was a very simple dish, though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: You can continue practicing cutting apples or bread and getting training from me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Remember to get training for both baking and cooking.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: About every five lessons or so, you should find you can make more things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Any questions?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What else can I make?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Ah, there's all sorts of baked goods.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: At first you can make the items I mentioned: baked apples, buttered bread, and sand cookies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: As your skills increase, you'll be able to make many more things, like various types of breads and doughs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: You can also make biscuits and spread various jams on bread.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How can I make bread?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Once you get 10 lessons in both baking and cooking, you'll just need the right ingredients.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Bread requires some strimptor and powdered bread rise, which you can buy as an ingredient.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: From there you add things like lard and salt to make a dough.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Just study the book and it shouldn't be too hard to figure out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: The first time is always the most difficult.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Where can I get other ingredients?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: If I don't sell what you need, you can also get some items from Jomed or Allelia at Kada-El's tavern.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: In Ojaveda, there is Reffitia, the cook in the kitchen of the Broken Door tavern.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: In the warehouse district, you might want to see what Jirosh Mikana sells.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: He has a wide variety of ingredients and tools.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Be sure to visit my brother's shop there, too, and on your way to Ojaveda, you can look out for a farmer girl who often sells things like eggs and butter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: In the wilderness not far from Hydlaa near Gugrontid, there is a Kran merchant, Grok Idon, who also sells some goods.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: A good practice in general is to make note of what all merchants you encounter sell.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Then you'll always know where to get what.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How do I get the exact ingredients a recipe calls for?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: You can consult The Art of Baking book for that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: For instance, a common tool used for measuring ingredients is a scoop.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: You can buy one from me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: To get a scoop of strimptor, for example, get a sack of strimptor, and hold a scoop in your right hand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: You should be able to get 5 scoops at a time.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What is strimptor?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: It is a sweet, granular substance which is soluble in water.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: It is what gives things like cookies and pies their sweet taste.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Why do I need to train both cooking and baking?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Mmm, very good question.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: They are separate skills but very much intertwined.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: There are other recipe books you can get.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: There is the meat and stews book you can get from Jomed Parcen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: My brother will teach you about The Pastry Chef Book.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: And there is one other involving fish.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: In each book, some recipes depend more on baking and some more on cooking.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Sometimes, even though a final dish falls into one category or the other, making some intermediate items may require the other skill.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: I'll train you for some time on baking and once I can train you no more in cooking, it will be time to see Jomed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: He is in the kitchen on the second floor of Kada's.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Then you can get baking training from me while learning cooking from him.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thanks for the lesson, I don't have any more questions.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Good luck to you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Remember, just practice with the simple stuff.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Something as simple as slicing apples or bread with your kitchen knife will help you progress in the beginning.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Then keep checking your book and trying new things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: The more complex the dish, the more practice and experience you will get.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Once you've reached about ten lessons, check in with Jomed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Down the road, you might want to start an apprenticeship with Reffitia in Ojaveda.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_questComplete">
						<td>QUEST COMPLETED</td>
					</tr>
					<tr class="quest_emptyRow_afterQuestComplete">
						<td></td>
					</tr>
					<tr class="quest_reward">
						<td>Rewards: Nothing.</td>
					</tr>
					<tr class="quest_emptyRow_afterReward">
						<td></td>
					</tr>

					</table>
				</div>

				<!-- include Footer -->
				<?php
					$path = $_SERVER['DOCUMENT_ROOT'];
					$path .= "/footer.php";
					include($path);
				?>

			</div>
		</td>
	</tr>
</table>

</body>
</html>
