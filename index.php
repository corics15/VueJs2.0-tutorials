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
		<style>
			@import url('https://fonts.googleapis.com/css?family=Oswald');
			@import url('https://fonts.googleapis.com/css?family=Archivo+Narrow');
			div h3 {
				font-family: 'Oswald', sans-serif;
			}
			[v-cloak] {
				display: none;
			}
			li, input, label, h1 span {
				font-family: 'Archivo Narrow', sans-serif;
			}
		</style>
    </head>
    <body>

		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div id="app">
						<h3 :title="title" v-cloak>{{ message }}</h3>
						<img :src="url" :data-title="title" data-placement="bottom" data-toggle="tooltip" height="200" width="200" class="img-thumbnail">
						<ul>
							<li v-for="todo in todos" v-cloak>{{ todo.item }}</li>
						</ul>

						<p>Try changing the text below:</p>
						<p><input type="text" name="name" id="input" class="form-control" placeholder="I am bound to the above title" v-model="message"></p>
						<p>Count: {{ count }}</p>
						<p>
							<button @click="countUp" type="button" class="btn btn-info">Press me to count up</button>
							<button @click="countDown" type="button" class="btn btn-warning">Press me to count down</button>
						</p>

						<label for="">Enter a url below</label>
						<p><input type="text" class="form-control" placeholder="Enter a URL" v-model="urlB"></p>
						<p><button @click="humanizeURL" type="button" class="btn btn-primary">Strip Link</button></p>
						<p>Stripped Link: <a :href="urlB" target="_blank">{{ cleanURL }}</a></p>
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6">
					<div id="app-2">
						<div class="form-group">
							<p>
								<h1>Hello {{ fullname }}</h1>
							</p>
							<div><small>First: {{ first}}</small></div>
							<div><small>Last : {{ last }}</small></div>
						</div>
						<div class="form-group">
							<label for="fname">First Name:</label>
							<input v-model="first" type="text" id="fname" class="form-control">
						</div>
						<div class="form-group">
							<label for="lname">Last Name:</label>
							<input v-model="last" type="text" id="lname" class="form-control">
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
    			message 	: 'Hello Vue JS2.0',
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
    		},
    		computed: {
    			fullname : function() {
    				return this.first+' '+this.last;
    			}
    		}
    	});
    </script>
</html>