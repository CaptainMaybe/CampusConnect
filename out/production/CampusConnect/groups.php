<?php include 'header.php';

$groupname = array("yolo group", "potato group", "whatever group", "whoops not a group", "pretend group");
$type = array("not for studying", "for studying", "not for studying", "not for studying", "for studying");
$description = array("a swiggety swaggy group", "woiefljdlkjweojiofjsdlkdg", "a longass dolor paragraph", "mysterious ticking noise transcript", "a fifth group's description");
$taglists = array(
	array("best", "hydrate820", "noturmumsstudygroup"),
	array("best", "hydrate820", "noturmumsstudygroup", "a fourth tag"),
	array("best", "hydrate820", "noturmumsstudygroup"),
	array("best", "hydrate820", "noturmumsstudygroup"),
	array("best", "hydrate820", "noturmumsstudygroup")
);

$ab = array("groupOdd", "groupEven");
$groupnum = 5;

echo "<div id='grouplist'>\n";
for ($i = 0; $i < $groupnum; $i++) {
	echo "<div class='", $ab[$i % 2], "'>\n";
	echo "\t<h2> ", $groupname[$i], " </h2>\n";
	echo "\t<p> ", $type[$i], " </p>\n";
	echo "\t<p> ", $description[$i], " </p>\n";
	echo "\t<ul>\n";
	for ($j = 0; $j < count($taglists[$i]); $j++) {
		echo "\t\t<li> ", $taglists[$i][$j], " </li>\n";
	}
	echo "\t</ul>\n";
	echo "</div>\n";
}
echo "</div>\n";
include 'footer.php'; ?>