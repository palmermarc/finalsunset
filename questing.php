<?php include_once 'header.php'; ?>
<section id="directions">
  <div class="content_bin">
    <article id="main-content">
      <h1>Questing FAQs</h1>
      <div class="question">What is questing?</div>
      <div class="answer">Questing is the one of the main points to a mud. Questing is sorta like being hired to complete a mission. Your mission is to find a certain 4 items in exchange for 100 quest points.</div>

      <div class="question">Why should I quest? What are quest points?</div>
      <div class="answer">Questing is how you get stronger. When first starting, a character has a high armour class (AC) and low hitroll (HR) and damroll (DR). Certain items will effect these stats, but by questing and getting quest points, you can decrease your AC and increase your HR and DR much more. There are many uses for quest points. A listing of uses, the maximum amount by which an item can affect a stat and the number of quest points needed to affect a stat can be seen by typing: quest.</div>


      <div class="question">How do I begin?</div>
      <div class="answer">
        First of all you need to get the skill quest.  You can get this by typing 'prac quest' and it should cost around 5k exp.  Your quest card will cause mana to create and also primal.<br />
        Primal cost 500 exp for first and 1000 for second and so on.<br />
        Quest card limit is 100 points per card, so that means 100 primal (2,525,000 exp).
      </div>

      <div class="question">I have a Quest Card. Now what do I do?</div>
      <div class="answer">First of all, you need to find out what items you need to get. This is done by typing: complete card. This will list all the items you still need to get to finish a quest. As you progress in the mud, you might get 2,3 or more Quest Cards. You can view the items left to get on a certain Quest Card by typing: complete &lt;number of card&gt;.card where &lt;number of card&gt; is the number of the Quest Card you wish to check.</div>

      <div class="question">Where do I find these items?</div>
      <div class="answer">The items are located all over the mud. To help out with this is the skill locate object. This should be one of the first skills practiced after kick. Locate object is used by typing: cast locate &lt;keyword&gt; where &lt;keyword&gt; is the name of the object to be located. Locate object will list every object in the mud with the keyword typed in and the mob that carries it or the room it is in. If you don't know where the mob is at, ask one of the others online. If the mob is too tough for you, sometimes you can ask one of the stronger characters on the mud to get it for you.</div>

      <div class="question">I have found an item on a card. What now?</div>
      <div class="answer">After locating an item and getting the item from the mob who has it, you need to end that part of the quest. This is done by typing: complete card &lt;keyword&gt; or complete &lt;number of card&gt;.card &lt;keyword&gt;. This will remove that item from the list on the card. You can now continue the quest.</div>

      <div class="question">I have found all 4 items on my Quest Card and finished the quest.</div>
      <div class="answer">Now take the finished Quest Card back to the quest machine, which is located in the quest area.  To recharge your card and get the qps for it type: receive card machine or receive &lt;number of card>.card machine. The machine will then recharge your Quest Card and give you a new one.  It will also give you 100 qps (if you get a maxed card, which is optimal).  You then eat the token.</div>

      <div class="question">How do I use quest points?</div>
      <div class="answer">
        <p>First you must decide what stat you wish to enhance. You can change HR, DR, AC, STR, WIS, INT, DEX, CON, hit points, move points, add a spell, or had an extra flag. But before an item can be quested, it must be claimed. This is done by removing the item and typing: claim &lt;item&gt;</p>
        <p>HR/DR can be raised a maximum of 5. This is done by typing: quest &lt;item&gt; hitroll 5 or quest &lt;item&gt; damroll 5. You should always increase HR and DR in units of 5.</p>
        <p>AC can be lowered a maximum of 25. This is done by typing: quest &lt;item&gt; ac -25. You should always lower AC in units of 25.</p>
        <p>STR, WIS, INT, DEX, CON can have a maximum value of 25. However, it can only be trained to 18. To add STR, WIS, INT, DEX, CON type: quest &lt;item&gt; &lt;stat to be modified&gt; &lt;amount to raise&gt;. STR, WIS, INT, DEX, CON can only be raised a maximum of 3.</p>
        <p>Items can also have spells added. You are allowed one spell per item. What each spell does is discussed below. To quest a spell type: quest &lt;item&gt; spell &lt;name of spell&gt;. You can see a list of spells by typing: quest &lt;item&gt; spell.</p>
        <p>There are also some miscellaneous flags that can be quested to items. The main ones are: Antigood, Antineutral, Antievil, loyality, noremove and nodrop. Antigood, Antineutral and Antievil toggle those flags that keeps a character of a certain alignment from using an item. Loyality is used on weapons to cause a weapon that has been disarmed to return to your hand. Noremove toggles the flag that determines whether of not an item being worn can be removed. Nodrop toggles the flag that determines whether or not and item in you inventory can be dropped. These flags can be changed by typing: quest &lt;item&gt; extra &lt;flag&gt;. You can see a list of the extra flags by typing: quest &lt;item&gt; extra.</p>
      </div>

      <div class="question">What are the different spells that can be quested?</div>
      <div class="answer">
        <p>Spells are broken down into two different types. Weapon spells and armor spells.</p>
        <h4>Weapon Spells</h4>
        <ul>
          <li>Acid - Your weapon will periodically cast the spell Acid Blast when fighting.</li>
          <li>Dark - Your weapon will periodically cast the spell Blindness when fighting.</li>
          <li>Holy -</li>
          <li>Vampiric - When this spell hits, you gain hit points until you reach your maximum.</li>
          <li>Flaming - Your weapon will periodically cast the spell Fireball when fighting.</li>
          <li>Electrified - Your weapon will periodically cast the spell Lightening Bolt when fighting.</li>
          <li>Poisonous - Your weapon will poison your opponent causing him/her/it to continue to loose hitpoints for as long as the poison is present.</li>
        </ul>

        <h4>Armor Spells</h4>
        <ul>
          <li>Fly - Allows you to fly.</li>
          <li>Infravision - Allows you to see in the dark.</li>
          <li>Invis - Makes you invisible.</li>
          <li>Passdoor - Allows you to move through closed doors that are not pass proof.</li>
          <li>Protection - Reduces damage by 25%</li>
          <li>Sanct - The spell Sanctuary. It reduces damage by 50%.</li>
          <li>Seeinvis - Allows you to see invisible players and mobs.</li>
          <li>Sneak - Allows you to move in and out of rooms without being noticed.</li>
          <li>Acid Shield - Casts the spell Acid Blast every round of a fight.</li>
          <li>Fire Shield - Casts the spell Fireball every round of a fight.</li>
          <li>Ice Shield - Casts the spell Chilling Touch every round of a fight.</li>
          <li>Shock Shield - Casts the spell Lightening Bolt every round of a fight.</li>
        </ul>
      </div>
      
      <div class="question">Can I quest everything onto a single item?</div>
      <div class="answer">Only the characters with the highest status can. The amount of quest points you can put on a single item is determined by your status. The higher the status, the more quest points you can put on a single item. Another factor to this is whether the item is quest created or not. Quested spells DO NOT figure into the amount of quest points spent on an item.</div>

      <div class="question">What are Quest Created Items?</div>
      <div class="answer">All gods and deities have the ability to create more power and specialized items. These items can have twice the affect on a stat than a standard item can. Quest created items can also be named to your choosing. Giving you the ability to create a theme to your character. The total cost of a quest created armor is 40 quest points. A quest created weapon costs 50 quest points. Other items that can be bought:&nbsp; Weapon &lt;type&gt; (50 QP), Armor (40 QP), Container (15 QP),&nbsp; Fountain &lt;type&gt; (10 QP), Stake (30 QP).</div>

      <div class="question">Can I get quest points back  after spending them?</div>
      <div class="answer">Yes and no. By sacrificing an item you will receive the quest points that have been spent on it. But, there are limits. You <u>cannot</u> get back quest points spent on spells, extras, and quest creation. You can only reclaim quest points spent on hitroll, damroll, armor class, hit points, move points, STR, WIS, INT, DEX, and CON.</div>
      
    </article>
  </div>
</section>
<?php include_once 'footer.php'; ?>