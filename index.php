<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>VueJS2.0</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<style>
			@import url('https://fonts.googleapis.com/css?family=Oswald');
			@import url('https://fonts.googleapis.com/css?family=Archivo+Narrow');
			h1, h3, h4 {
				font-family: 'Oswald', sans-serif;
			}
			[v-cloak] {
				display: none;
			}
			li, input, label, span {
				font-family: 'Archivo Narrow', sans-serif;
			}
			.same-width {
				width: 60%;
			}
			.whatLevel {
				color: #EF6733 !important;
			}
			ul {
				margin-left: 135px;
			}
		</style>
    </head>
    <body>

		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div id="app">
						<h1 :title="title" v-cloak>{{ message }}</h1>
						<img :src="url" :data-title="title" data-placement="bottom" data-toggle="tooltip" height="150" width="150" class="img-thumbnail pull-left">
						<div class="form-group">
							<span>&nbsp;&nbsp;&nbsp;<strong>Using a foreach loop:</strong></span>
							<ul>
								<li v-for="todo in todos" v-cloak>{{ todo.item }}</li>
							</ul>
						</div>

						<div class="form-group">
							<label for="input">Data Binding: Try changing the text below:</label>
							<p><input type="text" name="name" id="input" class="form-control" placeholder="I am bound to the above title" v-model="message"></p>
							<label>Count: {{ count }}</label>
						</div>

						<div class="form-group">
							<div class="col-md-6">
								<button @click="countUp" type="button" class="btn btn-info btn-block same-width">Count up</button>
							</div>
							<div class="col-md-6">
								<button @click="countDown" type="button" class="btn btn-warning btn-block same-width">Count down</button>
							</div>
						</div>

						<div class="form-group">
							<label for="">Enter a url below</label>
							<p><input type="text" class="form-control" placeholder="Enter a URL" v-model="urlB"></p>
							<p><button @click="humanizeURL" type="button" class="btn btn-primary">Strip Link</button></p>
							<p>Stripped Link: <a :href="urlB" target="_blank">{{ cleanURL }}</a></p>
						</div>
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6">
					<div id="app-2">
						<div class="form-group">
							<p>
								<h1>Hello {{ fullname }}</h1>
							</p>
							<div class="well">
								<div><small>First: {{ first}}</small></div>
								<div><small>Last: {{ last }}</small></div>
							</div>
						</div>

						<div class="form-group">
							<label for="fname">First Name:</label>
							<input v-model="first" type="text" id="fname" class="form-control">
						</div>

						<div class="form-group">
							<div><small><em>Getter</em></small></div>
							<label for="lname">Last Name:</label>
							<input v-model="last" type="text" id="lname" class="form-control">
						</div>

						<div class="form-group">
							<div><small><em>Setter</em></small></div>
							<label for="fullName">Fullname:</label>
							<input type="text" id="fullName" class="form-control" v-model="fullname">
						</div>

						<hr>

						<div class="form-group text-center">
							<h1>You are: <span class="whatLevel">{{ whatLevel }}</span></h1>
							<hr>
							<div class="row">
								<div class="col-md-12">
									<h4>Current XP: <strong>{{ xp }}</strong></h4>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<button @click="addXP" type="button" class="btn btn-success same-width"><i class="fa fa-caret-square-o-up"></i> Add XP</button>
								</div>
								<div class="col-md-6">
									<button @click="decXP" type="button" class="btn btn-danger same-width"><i class="fa fa-caret-square-o-down"></i> Decrease XP</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<hr>

			<div class="row">
				<div class="col-md-6 col-lg-6">
					<div><h1>AJAX to external API</h1></div>
					<div id="app-3">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="text1">Enter a zip code:</label>
									<input type="text" class="form-control" placeholder="Enter a zip code" v-model="startZip">
									<span class="span-result help-block" v-cloak>{{ startCity }}</span>
								</div>

								<div class="form-group">
									<a href="http://www.cexx.org/zipcode.htm" target="_blank">US Zipcode Listing</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

    </body>

    <script src="https://unpkg.com/vue/dist/vue.js"></script>
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script type="text/javascript">
    	var app = new Vue({
    		el 		: '#app',
    		data 	: {
    			message 	: 'Vue JS 2.0',
    			title 		: 'Welcome to VueJS2 ' + new Date(),
    			url 		: 'http://vuejs.org/images/logo.png',
    			todos 		: [
    				{ item : 'Angular JS2' },
    				{ item : 'Vue JS2' },
    				{ item : 'jQuery 2.2' },
    				{ item : 'Laravel 5.3' },
    				{ item : 'CodeIgniter 3.1.2' },
    				{ item : 'PHP/MySQL' },
    			],
    			count 		: 0,
    			urlB 		: '',
    			cleanURL 	: '',
    			level 		: '',
    		},
			methods 	: {
				countUp 	: function() {
					this.count += 1;
				},
				countDown 	: function() {
					this.count -= 1;
				},
				humanizeURL	: function() {
					this.cleanURL = this.urlB.replace(/^https?:\/\//, '').replace(/\/$/, '');
				}
			}
    	});

    	var app2 = new Vue({
    		el 		: '#app-2',
    		data 	: {
    			first 	: '',
    			last 	: '',
    			xp 		: 10,
    		},
    		methods : {
    			addXP 	: function(){
    				this.xp += 5;
    			},
    			decXP 	: function() {
    				this.xp -= 5;
    			},
    		},
    		computed: {
    			fullname : {
    				// getter function
    				get: function() {
    					return this.first+' '+this.last;
    				},
    				// setter function
    				set: function(value) {
    					var name = value.split(' ');
    					this.first = name[0];
    					this.last  = name[name.length - 1];
    				}
    			},
    			whatLevel: function(){
    				if (this.xp <= 0) {
    					return 'A Loser';
    				} else if (this.xp <= 50) {
    					return 'Beginner';
    				} else if (this.xp <= 75) {
    					return 'Novice';
    				} else if (this.xp <= 100) {
    					return 'Expert';
    				} else {
    					return 'Master';
    				}
    			},
    		}
    	});

    	var app3 = new Vue({
    		el 		: '#app-3',
    		data 	: {
    			startZip	: '',
    			startCity	: '',
    			endZip 		: '',
    			endCity 	: '',
    		},
    		watch 	: {
    			startZip 	: function() {
    				this.startCity = '';
    				if (this.startZip.length >= 5) {
    					// call API method
    					this.lookupStartZip();
    				}
    			}
    		},
    		methods : {
    			lookupStartZip: function() {
    				var json = this;
    				setTimeout(function() {
    					json.startCity = 'Searching...';
    					$.getJSON('http://ziptasticapi.com/'+json.startZip, function(data) {
    						if (data.error != '') {
    							json.startCity = data.error;
    						}
    						if (data.error === undefined) {
    							json.startCity = data.city + ', ' + data.state;
    						}
    					})
    				}, 500)
    			},
    		}
    	});
    </script>
</html>