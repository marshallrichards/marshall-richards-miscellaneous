
<?php
	$page = file_get_contents('http://www.wsdot.com/ferries/vesselwatch/TerminalDetail.aspx?terminalid=3');
$doc = new DOMDocument();
$doc->loadHTML($page);
$divs = $doc->getElementsByTagName('div');
foreach($divs as $div) {
    // Loop through the DIVs looking for one withan id of "content"
    // Then echo out its contents (pardon the pun)
    if ($div->getAttribute('id') === 'realtimecontent') {
         echo $div->nodeValue;
    }
}
	 ?>