<!DOCTYPE html>
<html>

<head>
	<!-- Meta data -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />

	<!-- Page title -->
	<title>Giles Deacon</title>

	<!-- Favicon call -->
	<link rel="shortcut icon" href="assets/img/site-assets/giles-favicon.png" />

	<!-- CSS call -->
	<link rel="stylesheet" href="assets/css/app.min.css" />

</head>

<body>
	<!-- Holding page proper -->
	<div class="holding-page">
		<div class="holding-page-box">
			<div class="holding-page-content">
				<!-- Branding -->
				<header class="small-12 columns branding">
					<h1 class="giles-brand">Giles</h1>
					<p class="giles-holding-description">To hear more about Giles and his work, and for access to exclusive news and collection previews, please register your details below.</p>
				</header>
				<!-- Sign up form -->
				<form
				id="commentForm"
				name="holding_signup"
				data-validate="parsley"
				novalidate
				class="holding-signup"
				>
					<div class="row">
				    <div class="small-12 columns">
			        <input
			        	id="name"
				        name="name"
								type="text"
								placeholder="Name"
								data-required="true"
								data-required-message="Can we get a name?"
								data-trigger="change"
								data-maxlength="88"
								data-maxlength-message="Thats a very, very long name! Can we get a shorter version?"
							/>
			      </div>
				  </div>
				  <div class="row">
				    <div class="small-12 columns">
			        <input
			        	id="email"
				        name="email"
				        type="text"
				        placeholder="Email address"
				        data-type="email"
				        data-type-email-message="Your email address doesn't look quite right. Can you check it again?"
				        data-required="true"
								data-required-message="Can we get a email address to contact you?"
								data-trigger="change"
				        data-maxlength="88"
								data-maxlength-message="Your email address seems a little long? Want to try a different one"
							/>
			      </div>
				  </div>

			  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		  	  <div class="row">
		  	    <div class="small-12 columns">
		          <button type="submit" class="submit-holding-form">Sign up</button>
		        </div>
		  	  </div>
				</form>
				<!-- Social networks link section -->
				<div class="row">
					<div class="small-12 columns social-links">
						<ul>
						  <li><a href="https://twitter.com/gilesgilesgiles"><img title="Giles on Twitter" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNS4xLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iNTYuNjkzcHgiIGhlaWdodD0iNTYuNjkzcHgiIHZpZXdCb3g9IjAgMCA1Ni42OTMgNTYuNjkzIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1Ni42OTMgNTYuNjkzIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIGZpbGw9IiMzMTQ2NjUiIGQ9Ik0yOC4zNDgsMy4zNDZjLTEzLjgwOCwwLTI1LjAwMSwxMS4xOTYtMjUuMDAxLDI1LjAwMWMwLDEzLjgwOCwxMS4xOTMsMjQuOTk5LDI1LjAwMSwyNC45OTkNCgljMTMuODA4LDAsMjQuOTk5LTExLjE5MSwyNC45OTktMjQuOTk5QzUzLjM0NywxNC41NDIsNDIuMTU1LDMuMzQ2LDI4LjM0OCwzLjM0NnogTTQwLjk0MSwyMy4zMDcNCgljMC4wMTQsMC4yNywwLjAxOSwwLjU0MSwwLjAxOSwwLjgxNWMwLDguMzI2LTYuMzM3LDE3LjkyNi0xNy45MjYsMTcuOTI2Yy0zLjU1NywwLTYuODctMS4wNDMtOS42NTgtMi44Mw0KCWMwLjQ5MywwLjA1OCwwLjk5MywwLjA4OCwxLjUwMiwwLjA4OGMyLjk1MywwLDUuNjY5LTEuMDA4LDcuODI1LTIuNjk3Yy0yLjc1Ni0wLjA1Mi01LjA4Mi0xLjg3NC01Ljg4NC00LjM3Ng0KCWMwLjM4NCwwLjA3NSwwLjc3OCwwLjExMiwxLjE4NSwwLjExMmMwLjU3NSwwLDEuMTMxLTAuMDc1LDEuNjYtMC4yMjFjLTIuODgzLTAuNTc4LTUuMDU1LTMuMTI3LTUuMDU1LTYuMTc3DQoJYzAtMC4wMjcsMC0wLjA1NCwwLjAwMS0wLjA4MWMwLjg0OSwwLjQ3MywxLjgyLDAuNzU1LDIuODU0LDAuNzg5Yy0xLjY5MS0xLjEzMi0yLjgwMy0zLjA1OC0yLjgwMy01LjI0NQ0KCWMwLTEuMTU0LDAuMzExLTIuMjM4LDAuODUzLTMuMTY3YzMuMTA4LDMuODExLDcuNzUsNi4zMiwxMi45ODcsNi41ODNjLTAuMTA3LTAuNDYtMC4xNjQtMC45NDMtMC4xNjQtMS40MzYNCgljMC0zLjQ3OCwyLjgyLTYuMyw2LjMwMS02LjNjMS44MTIsMCwzLjQ0OSwwLjc2Niw0LjU5OSwxLjk4OWMxLjQzNi0wLjI4MiwyLjc4NC0wLjgwNyw0LjAwMS0xLjUyOQ0KCWMtMC40NzMsMS40NzMtMS40NywyLjcwNy0yLjc3MSwzLjQ4NWMxLjI3NS0wLjE1MiwyLjQ5LTAuNDkxLDMuNjE5LTAuOTkyQzQzLjI0MiwyMS4zMDksNDIuMTczLDIyLjQxOCw0MC45NDEsMjMuMzA3eiIvPg0KPC9zdmc+DQo="></a></li>
						  <li><a href="https://www.facebook.com/pages/Giles-Deacon/261787757281205"><img title="Giles on Facebook" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNS4xLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iNTYuNjkzcHgiIGhlaWdodD0iNTYuNjkzcHgiIHZpZXdCb3g9IjAgMCA1Ni42OTMgNTYuNjkzIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1Ni42OTMgNTYuNjkzIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIGZpbGw9IiMzMTQ2NjUiIGQ9Ik0yOC4zNDcsMy4zNDZjLTEzLjgwOCwwLTI1LDExLjE5Ni0yNSwyNS4wMDFjMCwxMy44MDgsMTEuMTkyLDI0Ljk5OSwyNSwyNC45OTkNCgljMTMuODA3LDAsMjUtMTEuMTkxLDI1LTI0Ljk5OUM1My4zNDcsMTQuNTQyLDQyLjE1MywzLjM0NiwyOC4zNDcsMy4zNDZ6IE0zNC45NjQsMjguMjQzaC00LjMyOWMwLDYuOTE3LDAsMTUuNDM4LDAsMTUuNDM4aC02LjQxNw0KCWMwLDAsMC04LjQzNCwwLTE1LjQzOGgtMy4wNTF2LTUuNDUxaDMuMDUxVjE5LjI2YzAtMi41MjgsMS4yLTYuNDc0LDYuNDc2LTYuNDc0bDQuNzUxLDAuMDE5djUuMjk0YzAsMC0yLjg4OSwwLTMuNDQ5LDANCgljLTAuNTYyLDAtMS4zNiwwLjI4MS0xLjM2LDEuNDgzdjMuMjExaDQuODkyTDM0Ljk2NCwyOC4yNDN6Ii8+DQo8L3N2Zz4NCg=="></a></li>
						  <li><a href="http://instagram.com/guineapiggiles"><img title="Giles on Instagram" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNS4xLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iNTYuNjkzcHgiIGhlaWdodD0iNTYuNjkzcHgiIHZpZXdCb3g9IjAgMCA1Ni42OTMgNTYuNjkzIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1Ni42OTMgNTYuNjkzIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxwb2x5Z29uIGZpbGw9IiMzMTQ2NjUiIHBvaW50cz0iMzguNTQ1LDIxLjkzNyAzOC41NDUsMTcuOTI5IDM4LjU0NSwxNy4zMzEgMzcuOTQ1LDE3LjMzMyAzMy45MzgsMTcuMzQ2IDMzLjk1MywyMS45NTIgCSIvPg0KCTxwYXRoIGZpbGw9IiMzMTQ2NjUiIGQ9Ik0yOC4xLDMyLjU3M2MyLjYzOCwwLDQuNzg1LTIuMTQ2LDQuNzg1LTQuNzgzYzAtMS4wNDEtMC4zMzktMi4wMDUtMC45MDctMi43OQ0KCQljLTAuODY4LTEuMjA0LTIuMjgyLTEuOTk1LTMuODc4LTEuOTk1Yy0xLjU5NiwwLTMuMDA4LDAuNzkyLTMuODc4LDEuOTk1Yy0wLjU2NywwLjc4NS0wLjkwNCwxLjc0OS0wLjkwNCwyLjc5DQoJCUMyMy4zMTgsMzAuNDI3LDI1LjQ2MiwzMi41NzMsMjguMSwzMi41NzN6Ii8+DQoJPHBhdGggZmlsbD0iIzMxNDY2NSIgZD0iTTI4LjIyNSwyLjQwOWMtMTMuODA4LDAtMjUuMDAxLDExLjE5Mi0yNS4wMDEsMjQuOTk5YzAsMTMuODA4LDExLjE5MywyNS4wMDEsMjUuMDAxLDI1LjAwMQ0KCQljMTMuODA2LDAsMjQuOTk5LTExLjE5MywyNC45OTktMjUuMDAxQzUzLjIyNCwxMy42MDEsNDIuMDMsMi40MDksMjguMjI1LDIuNDA5eiBNNDEuNjksMjV2MTEuMTI4YzAsMi44OTYtMi4zNTcsNS4yNTEtNS4yNTMsNS4yNTENCgkJSDE5Ljc2MmMtMi44OTcsMC01LjI1Mi0yLjM1NC01LjI1Mi01LjI1MVYyNXYtNS41NDdjMC0yLjg5NywyLjM1NS01LjI1Miw1LjI1Mi01LjI1MmgxNi42NzVjMi44OTYsMCw1LjI1MywyLjM1NSw1LjI1Myw1LjI1MlYyNXoiDQoJCS8+DQoJPHBhdGggZmlsbD0iIzMxNDY2NSIgZD0iTTM1LjUzMiwyNy43OWMwLDQuMDk3LTMuMzMzLDcuNDMyLTcuNDMyLDcuNDMycy03LjQzLTMuMzM1LTcuNDMtNy40MzJjMC0wLjk4OCwwLjE5Ni0xLjkyOCwwLjU0NS0yLjc5DQoJCWgtNC4wNTd2MTEuMTI4YzAsMS40MzYsMS4xNjgsMi42MDQsMi42MDQsMi42MDRoMTYuNjc1YzEuNDM3LDAsMi42MDQtMS4xNjgsMi42MDQtMi42MDRWMjVoLTQuMDYNCgkJQzM1LjMzNCwyNS44NjIsMzUuNTMyLDI2LjgwMywzNS41MzIsMjcuNzl6Ii8+DQo8L2c+DQo8L3N2Zz4NCg=="></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<footer>
		<!-- JS call -->
		<script src="assets/js/app.min.js"></script>
		
		<!-- Foundation JS init -->
		<script>$(document).foundation();</script>
	</footer>
</body>
</html>