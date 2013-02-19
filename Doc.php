<!DOCTYPE html>
<html lang="en">
<head>
	<title>Simple-ConnectDB</title>
    <meta charset="utf-8">
    <title>Getting � Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="assets/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/prettify/prettify.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->
  </head>
  <body data-spy="scroll" data-target=".bs-docs-sidebar">
    <!-- Navbar  ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="./index.html">Bootstrap</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="">
                <a href="#contents">Contents</a>
              </li>
              <li class="">
                <a href="#download">Download</a>
              </li>
              <li class="">
                <a href="#installation">Installation</a>
              </li>
              <li class="">
                <a href="#documentation">Documentation</a>
              </li>
              <li class="">
                <a href="#examples">Examples</a>
              </li>
              <li class="">
                <a href="#contact">Contact</a>
              </li>
              <li class="">
                <a href="#what-next">Whats Next</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
<!-- Subhead
================================================== -->

  <div class="container">
    <!-- Docs nav  ================================================== -->
    <div class="row">
      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
          <li><a href="#contents"><i class="icon-chevron-right"></i> Simple-ConnectDB</a></li>
          <li><a href="#download"><i class="icon-chevron-right"></i> Download</a></li>
          <li><a href="#installation"><i class="icon-chevron-right"></i> Installation</a></li>
          <li><a href="#documentation"><i class="icon-chevron-right"></i> Documentation</a></li>
          <li><a href="#examples"><i class="icon-chevron-right"></i> Examples</a></li>
          <li><a href="#contact"><i class="icon-chevron-right"></i> Contact</a></li>
          <li><a href="#what-next"><i class="icon-chevron-right"></i> What next?</a></li>
        </ul>
      </div>

     <div class="span9">

        <!-- Contents
        ================================================== -->
        <section id="contents">
         <div class="page-header">
            <h2><span type="button" class="btn btn-large btn-primary disabled">1</span> Simple-ConnectDB</h2>
          </div>
          <p class="lead">It's simple the way SIMPLE should be</a>.</p>
		  <p> Simple-ConnectDB is a quick and simple way to put any basic mySql database on line.</p>
		  <p> Simply edit the pre made db_Config.php template with your settings</p>
		  <p> For a basic database, about 2 minutes and Whow! it's on line<p>
          <p>All that is needed to put it online are these five(5) lines</p>
          <pre class="prettyprint">
		  $db_user = &acute;root&acute;;
		  $db_password = &acute;muffin&acute;;
		  $db_Name = &acute;sakila&acute;;
		  $db_Table = &acute;customer&acute;;
		  $db_port = &acute;3307&acute;; //optional
		  </pre>
		  <p>This will display all Records, all Fields and a View link to view that Record<p>
          <p>I built this application using Bootstrap, Xpeditable, TableSorter and fancybox along with meekroDB for the mySQL connection. (still needed is meekroDB implemented on the add new record, I had to use the old mySql connection type until I can figure this out.</p>
		  <p>Please see their web sites for the license and rights for your use.</p>
          <h3>Here are some of the additional Options you can activate</h3>
          <p>This is only a strat of the options included</p>
          <ul>
            <li>Theme's</li>
            <li>List View</li>
            <li>Record View</li>
            <li>Add New Records</li>
            <li>Delete Records</li>
            <li>Set the Fields to View</li>
            <li>Set the Fields to Add</li>
            <li>Set the Fields to Edit</li>
            <li>Define your owm Field Names</li>
            <li>Set the Field Types - text.
            		textarea,
            		email,
            		date,
            		combodate,
            		select,
            		password,
            		url,
            		number,
            		range,
            		checklist,
            		typeahead,
            		wysihtml5.
            		select2</li>
			<li>Groups</li>
            <li>Inline Edit</li>
            <li>Set which Fields to Inline Edit</li>
            <li>Child row with and with out template (template requires editing)</li>
            <li>Display Images</li>
            <li>Resizable columns</li>
            <li>Filters</li>
            <li>Can View option</li>
            <li>Can Edit option </li>
            <li>Can Delete option</li>
            <li>Can Add option</li>
            <li>Page Size</li>
            <li>Start Page</li>
			<li>Order by</li>
			<li>Where clause</li>
			<li>Column Sort</li>
            <li>Widget Options</li>
            <li>Language file (requires editing)</li>
            <li>And More</li>
            </ul>
           <p>For Deatil settings, look at each of them in the Documentation</p>
        </section>

        <!-- Download
        ================================================== -->
        <section id="download">
           	 <div class="page-header">
         	 	<h2><span type="button" class="btn btn-large btn-primary disabled">2</span> Download</h2>
         	 </div>

         	 <div class="row-fluid">
               	<h4>Download the complete Application</h4>
               	<h4>(all-in - one)</h4>
               	<h4>Then read the simple installation in Step 3</h4>
               	<p></p>
               	<p><a class="btn btn-medium btn-primary" href="#">Download</a></p>
           	 </div>
        </section>

        <!-- Installation
        ================================================== -->
        <section id="installation">
       		 <div class="page-header">
         	  <h2><span type="button" class="btn btn-large btn-primary disabled">3</span>  Installation</h2>
         	 </div>
           <h4>Note: the mySQL database must already be created.  You do need to know the structure of the database. For the Field Type such as text, textarea, blog, date etc. for the additional settings</h4>
            <p>It's Real SIMPLE</p>
			<p>1) Unzip the Simple-ConnectDB Zip to a place where you can do a little editting.</p>
			<p>2) Locate the db_Config.php in the includes folder.</p>
			<p>3) Using a good text editor (I recommend <a href="http://www.sublimetext.com/2">Sublime Text 2</a>)</p>
			<p>Edit the db_Config.php with your settings.<p>
			<p>See the documentation on how to set them.</p>
			<p>4) Save the db_Config.php back to the orginal place you got it.</p>
			<p>5) Upload the complete folder Simple-ConnectDB to the root of your web site.
			<p>You may rename this folder to what ever suits you. Just keep the file structure in it as is.</p>
			<p>6) Open browswr and goto http://Localhost/Simple-ConnectDB</p>
       </section>

        <!-- Documentation
        ================================================== -->
        <section id="documentation">
          <div class="page-header">
            <h2><span type="button" class="btn btn-large btn-primary disabled">4</span> Documentation</h2>
          </div>
		 <h4>The db_Config.php</h4>
		 <p>GO THROUGH EACH SETTING BEFORE YOU START.</p>
		 <p>THIS WAY YOU WILL KNOW HOW TO SET EACH SETTING WITH THE OTHER SETTINGS</p>
		 <p>Note: If a setting is not used, then it is best to set it to '' in the pre made config Template.</p>
		<h4><span class="badge badge-info">1</span> Connectiong to Database (REQUIRED)</h4>
		<p>This is the only Required settings to display your project</p>

		<pre class="prettyprint">
		// Set the mySql connection
		$db_user = &acute;root&acute;;
		$db_password = &acute;muffin&acute;;
		$db_Name = &acute;a1-sales&acute;;
		$db_Table = &acute;customers&acute;;
		$db_port = &acute;3307&acute;;  // optional(only to connect other than port 3306
		</pre>
		<h4><span class="badge badge-info">2</span> Sets the Main Title (OPTIONAL - defaults to TableName)</h4>
		<pre class="prettyprint">
		$appTitle = &acute;Customers&acute;;
		</pre>

		<h4><span class="badge badge-info">3</span> Theme (OPRIONAL - defaults to blue)</h4>
		<p>Options: blue, green, bootstrap, dropbox, dark, ice, black-ice, default and grey</p>
		<pre class="prettyprint">
		$appTheme = &acute;green&acute;;
		</pre>

		<h4><span class="badge badge-info">4</span> Set the Widget Options (OPTIONAL)</h4>
		<p>Options = filter, columns, resizable</p>
		<p>If Not Set then filter,columns abd resizable are disabled<p>
		<pre class="prettyprint">
		$db_WidgetOptions = &quot;&acute;filter&acute;,  &acute;resizable&acute;&quot;;
		</pre>

		<h4><span class="badge badge-info">5</span> Set the Where in SQL (Optional)</h4>
		<P> %s =	string<br>
			%i = integer<br>
			%d = decimal/double<br>
			%ss = search string (string surrounded with % for use with LIKE)
			</p>
		<pre class="prettyprint">
		$db_Where = &acute;LastName=%s,Jones&acute;;
		</pre>

		<h4><span class="badge badge-info">6</span> Sets the Default Order by in the SQL(OPTIONAL)</h4>
		<p>See $db_ColumnSort in the next setting</p>
		<pre class="prettyprint">
		$db_OrderBy = &quot;CompanyName&quot;;
		</pre>

		<h4><span class="badge badge-info">7</span> Sets the Columns to Sort On (OPTIONAL)</h4>
		<p>This overrides the $db_OrderBy</p>
		<p>0 = 1st columnm, 0 - asc and 1 - desc</p>
		<p>This overrides the $db_OrderBy</p>
		<p>default = &quot;0,0&quot;</p>
		<p>if columns are set in widget then you will get highlighting on the sorted columns.</p>
		<p>List in order of the column sorted</p>
		<p>example sort on column 3 then column2 column = &quot;[3,0],[2,0]&quot;</p>
		<pre class="prettyprint">
		$db_ColumnSort = &quot;[2,0],[1,0]&quot;;
		</pre>

	   <h4><span class="badge badge-info">8</span> Set the Page Size (OPTIONAL)</h4>
	   <p>If not set the default is 10</p>
		<pre class="prettyprint">
		$db_PageSize = 5;
		</pre>

	    <h4><span class="badge badge-info">9</span> Set the Start Page (OPTIONAL)</h4>
	    <p>This is the Page # to start on</p>
		<pre class="prettyprint">
		$db_StartPage = 0;
		</pre>

	    <h4><span class="badge badge-info">10</span> Set the Pager Selector (OPTIONAL)</h4>
		<p>any # 1 to etc. and all=2000 rows</p>
		<pre class="prettyprint">
		$db_PageSelector = &quot;5,10,15,20,50,100,ALL&quot;;
		</pre>

		<h4><span class="badge badge-info">11</span> Enable Pager (OPTIONAL)</h4>
		<p>Defaults to 1 if not set in config</p>
		<p>0 = NO Pager, 1 = Display on Top, 2 = Bottom</p>
		<pre class="prettyprint">
		$db_Pager = 3;
		</pre>

		<h4><span class="badge badge-info">12</span> Set User definded Field Names (OPTIONAL)</h4>
		<p>If not set, than the field names will default to the database field names.</p>
		<pre class="prettyprint">
		$strFieldNames = &quot;ID,COMPANY,FIRSTNAME,LASTNAME,ADDRESS,CITY,STATE,ZIP&quot;;
		</pre>

		<h4><span class="badge badge-info">13</span> Set the Field Types (OPTIONAL)</h4>
		<p>REQUIRED FOR Inline Edit, Edit Record and Adding New Records</p>
		<p>Ones with four ****&acute;s require $arrSelect settings below</p>
		<p>     text. 		<br>
				textarea,	<br>
				email, 		validation only<br>
				date, 		<br>
				combodate,	<br>
				select, 	****<br>
				password, 	<br>
				url, 		validation only<br>
				number, 	0- etc.<br>
				range, 		slider 0-100<br>
				checklist, 	****<br>
				typeahead, 	****<br>
				wysihtml5.	<br>
				select2,    <br>
		</p>
		<pre class="prettyprint">
		$strFieldType  	= &acute;text,select,text,typeahead,email,checklist,date,wysihtml5&acute;;
		</pre>
        </section>

		<h4><span class="badge badge-info">14</span> Define Select options for adding and editting records</h4>
		<p>The field must be set to select in $strFieldType (above)</p>
		<p>make sure you define $arrSelect as an array</p>
		<pre class="prettyprint">
		$arrSelect = array();
        // Then set these to the fields you need them on
		$arrSelect[1] = &quot;{&acute;&acute;: &acute;Select Company&acute;, &acute;A1-SALES&acute;: &acute;A1-SALES&acute;, &acute;A2-SALES&acute;: &acute;A2-SALES&acute;, &acute;A3-SALES&acute;: &acute;A3-SALES&acute;}&quot;;
		$arrSelect[12] = &quot;{&acute;&acute;: &acute;Select Sales Rep&acute;, &acute;Chuck&acute;: &acute;Chuck Simple&acute;&acute;Kevin&acute;: &acute;Kevin Lewis&acute;}&quot;;
		$arrSelect[16] = &quot;[{value: &acute;1&acute;, text: &acute;Level-1&acute;}, {value: &acute;2&acute;, text: &acute;Level-2&acute;}, {value: &acute;3&acute;, text: &acute;Level-3&acute;}]&quot;;
		$arrSelect[17] = &quot;[{value: &acute;Red&acute;, text: &acute;Red&acute;}, {value: &acute;White&acute;, text: &acute;White&acute;}, {value: &acute;Blue&acute;, text: &acute;Blue&acute;}}]&quot;;
		$arrSelectValue[17] = &quot;&quot;;
		$arrSelect[18] = &quot;{&acute;&acute;: &acute;Select&acute;, &acute;Active&acute;: &acute;Active&acute;, &acute;Non-Active&acute;: &acute;Non-Active&acute;, &acute;Vaccation&acute;: &acute;Vaccation&acute;}&quot;;
		</pre>

		<h4><span class="badge badge-info">15</span> Define typeahead Options for adding and editting records</h4>
		<pre class="prettyprint">
		$arrSelect[7] = &quot;[{value: &acute;AL&acute;, text: &acute;Alabama&acute;},{value: &acute;AK&acute;, text: &acute;Alaska&acute;},{value: &acute;AZ&acute;, text: &acute;Arizona&acute;},{value: &acute;AR&acute;, text: &acute;Arkansas&acute;},{value: &acute;CA&acute;, text: &acute;California&acute;},{value: &acute;CO&acute;, text: &acute;Colorado&acute;},{value: &acute;CT&acute;, text: &acute;Connecticut&acute;},{value: &acute;DE&acute;, text: &acute;Delaware&acute;},{value: &acute;FL&acute;, text: &acute;Florida&acute;},{value: &acute;GA&acute;, text: &acute;Georgia&acute;},{value: &acute;HI&acute;, text: &acute;Hawaii&acute;},{value: &acute;ID&acute;, text: &acute;Idaho&acute;},{value: &acute;IL&acute;, text: &acute;Illinois&acute;},{value: &acute;IN&acute;, text: &acute;Indiana&acute;},{value: &acute;IA&acute;, text: &acute;Iowa&acute;},{value: &acute;KA&acute;, text: &acute;Kansas&acute;},{value: &acute;KT&acute;, text: &acute;Kentucky&acute;},{value: &acute;LO&acute;, text: &acute;Louisiana&acute;},{value: &acute;ME&acute;, text: &acute;Maine&acute;},{value: &acute;MD&acute;, text: &acute;Maryland&acute;},{value: &acute;MA&acute;, text: &acute;Massachusetts&acute;},{value: &acute;MI&acute;, text: &acute;Michigan&acute;},{value: &acute;MN&acute;, text: &acute;Minnesota&acute;},{value: &acute;MS&acute;, text: &acute;Mississippi&acute;},{value: &acute;MO&acute;, text: &acute;Missouri&acute;},{value: &acute;MT&acute;, text: &acute;Montana&acute;},{value: &acute;NE&acute;, text: &acute;Nebraska&acute;},{value: &acute;NV&acute;, text: &acute;Nevada&acute;},{value: &acute;NH&acute;, text: &acute;New Hampshire&acute;},{value: &acute;NJ&acute;, text: &acute;New Jersey&acute;},{value: &acute;NM&acute;, text: &acute;New Mexico&acute;},{value: &acute;NY&acute;, text: &acute;New York&acute;},{value: &acute;ND&acute;, text: &acute;North Dakota&acute;},{value: &acute;NC&acute;, text: &acute;North Carolina&acute;},{value: &acute;OH&acute;, text: &acute;Ohio&acute;},{value: &acute;OK&acute;, text: &acute;Oklahoma&acute;},{value: &acute;OR&acute;, text: &acute;Oregon&acute;},{value: &acute;PA&acute;, text: &acute;Pennsylvania&acute;},{value: &acute;RI&acute;, text: &acute;Rhode Island&acute;},{value: &acute;SC&acute;, text: &acute;South Carolina&acute;},{value: &acute;SD&acute;, text: &acute;South Dakota&acute;},{value: &acute;TN&acute;, text: &acute;Tennessee&acute;},{value: &acute;TX&acute;, text: &acute;Texas&acute;},{value: &acute;UT&acute;, text: &acute;Utah&acute;},{value: &acute;VT&acute;, text: &acute;Vermont&acute;},{value: &acute;VA&acute;, text: &acute;Virginia&acute;},{value: &acute;WA&acute;, text: &acute;Washington&acute;},{value: &acute;WV&acute;, text: &acute;West Virginia&acute;},{value: &acute;WI&acute;, text: &acute;Wisconsin&acute;},{value: &acute;WY&acute;, text: &acute;Wyoming&acute;}]&quot;;

	    OR

	    $arrSelectgroups[8] = &quot;includes/groups/groups.php&quot;;
		</pre>

		<h4><span class="badge badge-info">16</span> Define group Options for adding and editting records</h4>
        <ul class="nav nav-tabs" id="text-tabs">
			<li class="active"><a href="#text-settings" data-toggle="tab">Settings</a></li>
			<li><a href="#text-group" data-toggle="tab">GroupFile</a></li>
			</ul>
			<div class="tab-content">
		<div class="tab-pane active" id="text-settings">
		<p>The # between the [] is the field number</p>
		<pre class="prettyprint">
		$arrSelectgroups[8] = &quot;includes/groups/groups.php&quot;;
		</pre>
		</div>
		<div class="tab-pane offset1" id="text-group">
		<p>Name this file to match the group file name set in the group settings</p>
		<p>Save this file in the includes/groups folder</p>
		<p> Script outputs data in json format suitable for &acute;source&acute; option in X-editable</p>
		<pre class="prettyprint">
		&lt;?php
		sleep(1);
		$groups = array(
		array(&acute;value&acute; =&gt; &acute;37010&acute;, &acute;text&acute; =&gt; &acute;ADAMS TN 37010&acute;),
		array(&acute;value&acute; =&gt; &acute;37011&acute;, &acute;text&acute; =&gt; &acute;ANTIOCH TN 37011&acute;),
		array(&acute;value&acute; =&gt; &acute;37012&acute;, &acute;text&acute; =&gt; &acute;ALEXANDRIA TN 37012&acute;),
		array(&acute;value&acute; =&gt; &acute;37013&acute;, &acute;text&acute; =&gt; &acute;ANTIOCH TN 37013&acute;),
		array(&acute;value&acute; =&gt; &acute;37014&acute;, &acute;text&acute; =&gt; &acute;ARRINGTON TN 37014&acute;),
		array(&acute;value&acute; =&gt; &acute;37015&acute;, &acute;text&acute; =&gt; &acute;ASHLAND CITY TN 37015&acute;),
		array(&acute;value&acute; =&gt; &acute;37016&acute;, &acute;text&acute; =&gt; &acute;AUBURNTOWN TN 37016&acute;),
		array(&acute;value&acute; =&gt; &acute;37018&acute;, &acute;text&acute; =&gt; &acute;BEECHGROVE TN 37018&acute;),
		array(&acute;value&acute; =&gt; &acute;37019&acute;, &acute;text&acute; =&gt; &acute;BELFAST TN 37019&acute;),
		array(&acute;value&acute; =&gt; &acute;37020&acute;, &acute;text&acute; =&gt; &acute;BELL BUCKLE TN 37020&acute;),
		array(&acute;value&acute; =&gt; &acute;37022&acute;, &acute;text&acute; =&gt; &acute;BETHPAGE TN 37022&acute;),
		array(&acute;value&acute; =&gt; &acute;37023&acute;, &acute;text&acute; =&gt; &acute;BIG ROCK TN 37023&acute;),
		);
		echo json_encode($groups);
		?&gt; &gt;
		</pre>
		</div>
		</div>
		<h4><span class="badge badge-info">17</span> Define Select2 Options for adding and editting records(OPTIONAL)</h4>
        <ul class="nav nav-tabs" id="text-tabs">
		<li class="active"><a href="#text-settings3" data-toggle="tab">Settings</a></li>
		<li><a href="#text-group3" data-toggle="tab">Additional Settings</a></li>
		</ul>
		<div class="tab-content">
		<div class="tab-pane active" id="text-settings3">
		<p>The # between the [] is the field number</p>
		<p>User can also enter his own tag as well as from the list</p>
		<p>Just Type in the input box and then select that tag</p>
		<pre class="prettyprint">
		$arrSelect2[20] = "[&acute;html&acute;, &acute;javascript&acute;, &acute;css&acute;, &acute;ajax&acute;]";
		OR
		$arrSelect2[20] = &acute;[{id: &quot;EN&quot;, text: &quot;EN&quot;}, {id: &quot;RU&quot;, text: &quot;RU&quot;}, {id: &quot;GB&quot;, text: &quot;GB&quot;}]&acute;;
		</pre>
		</div>
		<div class="tab-pane offset1" id="text-group3">
		<h4><span class="badge badge-success">17-1</span> MaxSelection2 in Select2 (OPTIONAL)</h4>
		<p>Limits the number of Selection you can have</p>
		<p><The example set only 2 selections can be entered</p>
		<pre>
		$MaxSelection2[20] = 2;
		</pre>
		<h4><span class="badge badge-success">17-2</span> MinInputLength2 in Select2 (OPTIONAL)</h4>
		<p>Makes user enter a character for the selection</p>
		<p>1 = User has to enter 1 character</p>
		<p>2 = User has to enter 2 character</p>
		<p>when entering the character a list will be displayed if a character match is made from $arrSelect2</p>
		<pre>
		$MinInputLength2[20] = 1;
		</pre>
		<h4><span class="badge badge-success">17-3</span> MaxInputLength2 in Select2 (OPTIONAL)</h4>
		<p>Max # of characters you can enter </p>
		<p>If user enters more characters than the # set.  It tells them to enter less characters and disables the enter option</p>
		<pre>
		$MaxInputLength2[20] = 1;
		</pre>

		<h4><span class="badge badge-success">17-4</span> AutoTokenSeparators2 in Select2 (OPTIONAL)</h4>
		<p>supports ability to add choices automatically as the user is typing into the search field. This is especially convenient in the tagging where the user can quickly enter a number of tags by separating them with a comma or a space.</p>
		<pre>
		$AutoTokenSeparators2[20] = 1;
		</pre>

		<h4><span class="badge badge-success">17-5</span> CustomMatcher22 in Select2 (OPTIONAL)</h4>
		<p>Matches options only if the term appears in the beginning of the string as opposed to anywhere in the string</p>
		<pre>
		$CustomMatcher2[20] = "yes";
		</pre>

		</div>
		</div>
	    <h4><span class="badge badge-info">18</span> Show icons for VIEW,EDIT,DELETE on db_List.php (OPTIONAL)</h4>
	    <p>defaults to 1 to show as Text</p>
	    <p>0 = Text. 1 = Buttons</p>
  		<pre class="prettyprint">
		$dbButtons = 1;
		</pre>

	    <h4><span class="badge badge-info">19</span> Set if can View Record from db_List.php (OPTIONAL)</h4>
	    <p>Defaults to 1 to show link</p>
	    <p>1 = Alows and shows a link on the right side of the row.</p>
  		<p>0 = Hide the link and don't allow View Record</p>
  		<pre class="prettyprint">
		$dbCanView =
		</pre>

	    <h4><span class="badge badge-info">20</span> Set if can Edit Record from db_List.php (Optional)</h4>
	    <p>Defaults to 0 - Can Not Edit Record</p>
	    <p>Required if you want to edit the record</p>
	    <p>1 = Alows and shows a link on the right side of the row.</p>
  		<p>0 = Hide the link and don't allow Edit Record</p>
  		<p>You can still enable inline editting. See settings for $strDisplayInlineEdit
  		<pre class="prettyprint">
		$dbCanEdit = 1;
		</pre>

	    <h4><span class="badge badge-info">21</span> Set if can Add Record from db_List.php (OPTIONAL)</h4>
	    <p>Defaults to 0 - Can Not Add New Record</p>
	    <p>1 = Alows and shows a link on the right side of Pager</p>
  		<p>0 = Hide the link and don't allow Add Record</p>
  		<pre class="prettyprint">
		$dbCanAdd = 1;
		</pre>

	    <h4><span class="badge badge-info">22</span> Set if can Delete Record from db_List.php (OPTIONAL)</h4>
	    <p>Defaults to 0 - Can Not Delete Record</p>
	    <p>1 = Alows and shows a link on the right side of the row.</p>
  		<p>0 = Hide the link and don't allow Delete Record</p>
  		<pre class="prettyprint">
		$dbCanDelete = 1;
		</pre>

	    <h4><span class="badge badge-info">23</span> Sets a Field to Display as an Image (OPTIONAL)</h4>
	    <p>Only the path and image name is stored in the database field</p>
	    <p>The Image Field Name in the database MUST be Named 'IMGPhoto'</p>
	    <p>This only allows one image per record to be displayed</p>
	    <p>The next version will allow multi inages</p>
  		<pre class="prettyprint">
		$db_ImageFieldName = &quot;IMGPhoto&quot;;
		</pre>

	    <h4><span class="badge badge-info">24</span> Set if can Add Record from db_List.php (OPTIONAL)</h4>
	    <p>If noy set then the link to Add New Record is disabled</p>
	    <p>1 = Alows and shows a link on the right side of Pager</p>
  		<p>0 = Hide the link and don't allow Add Record</p>
  		<pre class="prettyprint">
		$dbCanAdd = 1;
		</pre>

	    <h4><span class="badge badge-info">25</span> Set the Fields to Display for LIST and Child Rows (OPTIONAL)</h4>
	    <p>Default is 1 - Must be set if usinf Inline Edit or Child Rows</p>
	    <p>Note: If $strDisplayList NOT SET IN CONFIG all records will show</p>
		<p>If Using a Child Row refer to $db_ChildTemplate and $ChildRowHeader</p>
  		<p>The Fields on the Child Row must also be fields from the parent $db_Name and $db_Table</p>
  		<p>This option is great for rows that have many fields</p>
  		<p>It enables you to still display them in the child row (no inline edit)</p>
  		<p>Set the Field Display option from the chart below</p>
  		<p>Note: the 1st Field # is 0</p>
  		<p>Note: Child Rows are not editable in this version</p>
  		<p>Note: If not using the Child Row then only use option 0 and 1</p>
		<p>
		 0 = No Show<br>
		 1 = Show on Table List only<br>
		 2 = Show on Table List as the Link to Child Row<br>
		 3 = Show on Child Row only<br>
		 4 = Show on Table List and Child Row<br>
		</p>
   		<pre class="prettyprint">
		$strDisplayList = &quot;244430333310000000013&quot
		</pre>

	    <h4><span class="badge badge-info">26</span> Set the Fields to View when Viewing a Record (OPTIONAL)</h4>
	    <p>Defaults to 1 - All Fileds Show in View</p>
	    <p>This allows you to hide certain Fields for security etc.</p>
	    <p>0 = No Show</p>
  		<p>1 = Show</p>
  		<pre class="prettyprint">
		$strDisplayView  = &quot;01111110001011111111&quot;;
		</pre>

	    <h4><span class="badge badge-info">27</span> Set the Fields to view and edit (OPTIONAL)</h4>
	    <p>This allows you to hide certain Fields for security etc.</p>
	    <p>Defaults to 1 - All Fields are set as a popup</p>
	    <p>0 = No Show</p>
  		<p>1 = Show and is Editable with a popup edit</p>
  		<p>2 = Show and is Editable with inline edit</p>
  		<p>3 = Shows but Not Editable</p>
  		<pre class="prettyprint">
		$strDisplayViewEdit = &quot;02112222221221222222&quot;
		</pre>

	    <h4><span class="badge badge-info">28</span> Set the Fields allowed for Inline Edit (OPTIONAL)</h4>
  		<p>Defaults to 1 as a popup</p>
  		<p>0 = Field is not editable</p>
  		<p>1 = Field is Editable with a popup edit</p>
  		<p>2 = Field is Editable with inline edit</p>
  		<pre class="prettyprint">
		$strDisplayViewEdit = &quot;02112222221221222222&quot;
		</pre>

	    <h4><span class="badge badge-info">29</span> Set the Fields that will show when adding a new record (OPTIONAL)</h5>
	    <p>Defaults to 1 as a popup<p>
	    <p>$dbCanEdit = 1; must be enabled for the add link to show</p>
	    <p>0 = Field is not editable and will not show</p>
  		<p>1 = Field is Editable with a popup edit</p>
  		<p>2 = Field is Editable with inline edit</p>
  		<pre class="prettyprint">
		$strDisplayAdd = &quot;02112222222122122222&quot;ot;
		</pre>

	    <h4><span class="badge badge-info">30</span> Set Field to be Required when Adding/Editting (OPTIONAL)</h4>
	    <p>$dbCanEdit = 1; must be enabled for this feature</p>
  		<p>It will Display a red * by the Field Name when Adding a new record</p>
	    <p>0 = Field is not Required</p>
  		<p>1 = Field is Required</p>
  		<pre class="prettyprint">
		$strRequired = &quot;01110000000000000000&quot;;
		</pre>

	    <h4><span class="badge badge-info">31</span> Set the Columns that are Sortable (OPTIONAL)</h4>
	    <p>Defaults to No Sort on any Column</p>
	   	<p>0 = Field is not Sortable</p>
  		<p>1 = Field is Sortable</p>
  		<pre class="prettyprint">
		$strSortable = &quot;11110011100011011110&quot;;0000&quot;;
		</pre>

	    <h4><span class="badge badge-info">32</span> Set the Columns that are Resizable (OPTIONAL)</h4>
	    <p>Defaults to No Resize of Columns</p>
	   	<p>0 = Field is not Resizable</p>
  		<p>1 = Field is Resizable</p>
  		<pre class="prettyprint">
		$strResizable = &quot;11110011100100100000&quot;;
		</pre>

	    <h4><span class="badge badge-info">33</span> Set the Columns Filter (OPTIONAL)</h4>
	    <p>Defaults to No Filter</p>
	   	<p>0 = Field has no Filter</p>
  		<p>1 = Field has Filter</p>
  		<pre class="prettyprint">
		$strFilter = &quot;01110000000000010010&quot;;
		</pre>

	    <h4><span class="badge badge-info">34</span> Set the Columns Filter to always show or hide (OPTIONAL) </h4>
	    <p>Defaults to false</p>
	    <p>true = Filter will hide until mouse is over it</p>
  		<p>false = Filters always shows</p>
  		<pre class="prettyprint">
		$db_HideFilter = &acute;true&acute;;
		</pre>

	    <h4><span class="badge badge-info">35</span> Set the option for filter to TEXT FIELD or SELECT (OPTIONAL)</h4>
	    <p>Defaults to TEXT</p>
	   	<p>0 = Filter will be a input text box</p>
  		<p>1 = Filter will be a select box (values for the select option bome from the data in that column</p>
  		<pre class="prettyprint">
		$strFilterSelect = &quot;01110000000000010010&quot;;
		</pre>

		<h4><span class="badge badge-info">36</span> Using a Child Row Template  (OPTIONAL)</h4>
		<p<Defaults to no Template</p>
            <ul class="nav nav-tabs" id="text-tabs">
			<li class="active"><a href="#text-settings1" data-toggle="tab">Settings</a></li>
			<li><a href="#text-template" data-toggle="tab">Template</a></li>
			<li><a href="#text-css" data-toggle="tab">CSS</a></li>

			</ul>
			<div class="tab-content">
		<div class="tab-pane active" id="text-settings1">
		<p>Using a Child Row Template is optional</p>
		<p>It Requires you to create a Template for the display</p>
		<p>Add additional CSS to enhance the looks(optional)
		<pre class="prettyprint">
		$db_ChildTemplate = &quot;Customers-Child-Template.html&quot;;
		</pre>
		</div>
		<div class="tab-pane offset1" id="text-template">
		<p>Name this file to match the $db_ChildTemplate path settings</p>
		<p>Save this file in the root of the Simple-ConnectDB main folder</p>
		<p>Enclose the Field Name in curley brakets {} Note: the Field names must be exactly as in the database</p>
		<p>Note: This Template is an only an example however it is used in this demo </p>
		<p>Review <a href="http://twitter.github.com/bootstrap/index.html">Bootstrap</a> for more info on how to build the Template with css</p>
		<pre class="prettyprint">
	&lt;div class=&quot;wrapper&quot;&gt;
	&lt;div class=&quot;row&quot;&gt;
		  &lt;div class=&quot;span1&quot;&gt;
		  &lt;img class=&quot;img-rounded&quot; src=&quot;{IMGPhoto}&quot; width=&quot;60&quot;&gt;
		  &lt;/div&gt;
		  &lt;div class=&quot;span2&quot;&gt;
		  &lt;h5&gt;
		  {ContactFirstName} {ContactLastName}&lt;br&gt;
		  {Address1}&lt;br&gt;
		  {City}, {State} {zip}&lt;br&gt;
		  {Phone}
		  &lt;/h5&gt;
		  &lt;/div&gt;
		  &lt;div class=&quot;span3&quot;&gt;
			&lt;dl class=&quot;dl-horizontal&quot;&gt;
				  &lt;dt&gt;DateEntered&lt;/dt&gt;&lt;dd&gt;{DateEntered}&lt;/dd&gt;
				  &lt;dt&gt;Email&lt;/dt&gt;&lt;dd&gt;{Email}&lt;/dd&gt;
				  &lt;dt&gt;Level&lt;/dt&gt;&lt;dd&gt;{PriceLevel}&lt;/dd&gt;
				  &lt;dt&gt;CreditLimit&lt;/dt&gt;&lt;dd&gt;{CreditLimit}&lt;/dd&gt;
			&lt;/dl&gt;
		  &lt;/div&gt;
			&lt;div class=&quot;span3&quot;&gt;
			&lt;dl class=&quot;dl-horizontal&quot;&gt;
				  &lt;dd&gt;{Memo}&lt;/dd&gt;
			&lt;/dl&gt;
		  &lt;/div&gt;
	&lt;/div&gt;
	&lt;/div&gt;
		</pre>
		</div>
		<div class="tab-pane offset1" id="text-css">
		<p>You can add additional css ti the db_Styles.css located in the assets/css folder</p>
		<p></p>
		<p>DO NOT alter any of the other css already there, It is needed for the contents of the main application.</p>
		<p>you will find /* Child Row CSS */ at the bottom of the db_Styles.css</p>
		<p>It already has the class wrapper in it</p>
		<p>Note: This Template is only an example, however it is used in the demo </p>

		<pre class="prettyprint">
		/* Child Row CSS */
		.wrapper{
			float: left;
			left: 11.00%;
			width: 80%;
			padding:.20%;
			border: 1px solid #336699;
			background-color: #ffffff;
		}
		/* End Child Row CSS */
		</pre>
		</div>
	</div>

		<h4><span class="badge badge-info">37</span> Set the Child Row Header Name</h4>
		<p>Optional</p>
		<pre class="prettyprint">
		$ChildRowHeader = &quot;SHIP TO&quot;;
		</pre>

		<h4><span class="badge badge-info">38</span> Adds a Link to the Documentation (OPTIONAL)
		<p>This is for setting up Simple-ConnectDB </h4>
		<p>Now you can refer to the Documentation for help</p>
		<p>0 = No Link, 1 = Show Link</p>
		<pre class="prettyprint">
		$dbSetup == 1;
		</pre>

		<h4><span class="badge badge-info">39</span> PopupPlacement (OPTIONAL)
		<p>Sets the popup location for the popup when editting</h4>
		<p>The field must be set to popup for this feature</p>
		<p>0 = top</p>
		<p>1 = right</p>
		<p>2 = bottom</p>
		<p>3 = left</p>
		<pre class="prettyprint">
		$strPopupPlacement    = "012330000000000000003";
		</pre>

		<h5>END OF Documentation</h5>
		<p>Will add more as time goes on</p>

		<!-- Examples
		================================================== -->
	    <section id="examples">
		 <div class="page-header">
		 <h2><span type="button" class="btn btn-large btn-primary disabled">5</span>  Example</h2>
		 </div>
		 <div>
		 <p class="text-warning">!!! Comming Soon !!!</p>
		 </div>
	   </section>

        <!-- CONTACT
        ================================================== -->
        <section id="contact">
		  <div class="page-header">
            <h2><span type="button" class="btn btn-large btn-primary disabled">6</span>  Contact</h2>
          </div>
          <p class="text-warning">!!! COMING SOON !!!</p>
        </section>

        <!-- Next
        ================================================== -->
        <section id="what-next">
          <div class="page-header">
            <h2><span type="button" class="btn btn-large btn-primary disabled">7</span> What's next?</h2>
          </div>
          <p class="lead">Update and Customize Simple-ConnectDB project with your own features.</p>
		  <p>Then send them to Simple-ConnectDB@gmail.com  attn: UPDATES</p>
		  <p>We will look at them and if all meets the needs. We will add it and show credit to you for a great addon</p>
		</section>
      </div>
    </div>

  </div>



    <!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container">
        <p>Designed and built by Chuck Speerly. 2013</p>
      </div>
    </footer>



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<script type='text/javascript' src='assets/jquery/jquery-1.9.1.min.js'></script>
	<script type='text/javascript' src='assets/jquery/jquery-migrate-1.1.1.min.js'></script>
    <script src="assets/bootstrap/js/bootstrap-transition.js"></script>
    <script src="assets/bootstrap/js/bootstrap-alert.js"></script>
    <script src="assets/bootstrap/js/bootstrap-modal.js"></script>
    <script src="assets/bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="assets/bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="assets/bootstrap/js/bootstrap-tab.js"></script>
    <script src="assets/bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="assets/bootstrap/js/bootstrap-popover.js"></script>
    <script src="assets/bootstrap/js/bootstrap-button.js"></script>
    <script src="assets/bootstrap/js/bootstrap-collapse.js"></script>
    <script src="assets/bootstrap/js/bootstrap-carousel.js"></script>
    <script src="assets/bootstrap/js/bootstrap-typeahead.js"></script>
    <script src="assets/bootstrap/js/bootstrap-affix.js"></script>
	<script src="assets/holder/js/holder.js"></script>
    <script src="assets/prettify/prettify.js"></script>
	<script src="assets/js/application.js"></script>
  </body>
</html>
