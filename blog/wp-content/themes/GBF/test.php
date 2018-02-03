<!-- Nav Bar Content for www.greenberetfoundation.org -->

<?php
	$currentFile = $_SERVER["SCRIPT_NAME"];
	$parts = Explode('/',$currentFile);
	$currentFile = $parts[count($parts) - 2];
	//print('Current File = ' . $currentFile . '<br />');
	print('<div id="nav">');
	print('<ul id="nav2">');
	
		print('<li><a href="' . $siteRoot . '"'); 
		if ($currentFile == 'testSite') { print(' style="color:#D6CB98"'); }
		print('>Home</a></li>');


		print('<li><a href="#x"');
		if (($currentFile == 'lodging') || ($currentFile == 'rates') || ($currentFile == 'theLodge') || ($currentFile == 'theRanch')
				|| ($currentFile == 'riosbbq') || ($currentFile == 'dancehall')) { 
			print(' style="color:#D6CB98"'); 
		}
		print('>About GBF</a>');
?>
      <ul>
        <li><a href="<?php print($siteRoot); ?>/foundation.html">Foundation/Mission</a></li>
        <li><a href="<?php print($siteRoot); ?>/PDF/Executive SummaryJan 2013.pdf">Exec Summary</a></li>
        <li><a href="<?php print($siteRoot); ?>/financials.html">Financial Docs</a></li>
        <li><a href="<?php print($siteRoot); ?>/collaborate.html">Collaboration</a></li>
        <li><a href="<?php print($siteRoot); ?>/testimonials.html">Testimonials</a></li>
        <li><a href="<?php print($siteRoot); ?>/board.html">Board of Directors</a></li>
        <li><a href="<?php print($siteRoot); ?>/management.html">Mgmt</a></li>
        <li><a href="<?php print($siteRoot); ?>/supporters.html">Our Supporters</a></li>
        <li><a href="<?php print($siteRoot); ?>/gbfinthemedia.html">GBF in the Media</a></li>
      </ul>
		</li>

<?php
		print('<li><a href="#x"');
		if (($currentFile == 'geninfo') || ($currentFile == 'policies') || ($currentFile == 'history') || ($currentFile == 'links')) { 
			print(' style="color:#D6CB98"'); 
		}		
		print('>Programs</a>');
?>
			<ul>
        <li><a href="<?php print($siteRoot); ?>/casualtycare.html">Casualty Care</a></li>
        <li><a href="<?php print($siteRoot); ?>/ruckprogram.html">Ruck Program</a></li>
        <li><a href="<?php print($siteRoot); ?>/steelmagnolias.html">Steel Magnolias</a></li>
        <li><a href="<?php print($siteRoot); ?>/scholarships.html">Scholarships</a></li>
        <li><a href="<?php print($siteRoot); ?>/goldstar.html">Gold Star</a></li>
        <li><a href="<?php print($siteRoot); ?>/advocacy.html">Advocacy</a></li>
        <li><a href="<?php print($siteRoot); ?>/rservices.html">Request Support</a></li>
			</ul>
		</li>

<!-- disable Resources
<li><a href="#x">Resources</a>
<ul>
<li><a href="tbi.html">TBI | PTSD</a></li>
<li><a href="prosthetics.html">Prosthetics</a></li>
<li><a href="familycounseling.html">Family Counseling</a></li>
<li><a href="painmanagement.html">Pain Management</a></li>
</ul>
</li>
-->

<?php
		print('<li><a href="#x"');
		if (($currentFile == 'activities') || ($currentFile == 'area-attractions') || ($currentFile == 'nature-photography')
				|| ($currentFile == 'cooking') || ($currentFile == 'july4th')) { 
			print(' style="color:#D6CB98"'); 
		}		
		print('>Get Involved</a>');
?>
			<ul>
        <li><a href="<?php print($siteRoot); ?>/event.html">Host an Event</a></li>
        <li><a href="<?php print($siteRoot); ?>/volunteer.html">Volunteer</a></li>
        <li><a href="<?php print($siteRoot); ?>/donations.html">Donate $</a></li>
        <li><a href="<?php print($siteRoot); ?>/donations.html">Donate Inkind</a></li>
			</ul>
		</li>

<?php
		print('<li><a href="' . $siteRoot . '/faqs.html"');
		if (($currentFile == 'faqs')) { 
			print(' style="color:#D6CB98"'); 
		}		
		print('>FAQs</a></li>');
?>
<?php
		print('<li><a href="' . $siteRoot . '/memorial.html"');
		if (($currentFile == 'memorial')) { 
			print(' style="color:#D6CB98"'); 
		}		
		print('>Memorial Wall</a></li>');
?>
<?php
		print('<li><a href="http://shop.greenberetfoundation.org" title="Green Beret Shopping Cart" target="_blank"');
		if (($currentFile == 'faqs')) { 
			print(' style="color:#D6CB98"'); 
		}		
		print('>Shopping</a></li>');
?>

<?php
		print('<li><a href="' . $siteRoot . '/blog"');
		if ($currentFile == 'blog') { print(' style="color:#D6CB98"'); }		
		print('>Blog</a>');
?>

</ul>
	
</div>

