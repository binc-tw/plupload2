var 
  uglify = require('./build/BuildTools').uglify
, less = require('./build/BuildTools').less
, yuidoc = require('./build/BuildTools').yuidoc
, jshint = require('./build/BuildTools').jshint
, zip = require('./build/BuildTools').zip
, exec = require('child_process').exec
, path = require('path')
, fs = require('fs')
;

function exit(message) {
	if (message) {
		console.info(message);
	}
	complete();
	process.exit(arguments[1] || 0);
}

desc("Build mOxie");
task("moxie", [], function (params) {
	var oPath = "src/moxie";
	exec("cd " + oPath + "; jake lib; cd ../..;", function(error, stdout, stderr) {
		if (!error) {
			if (!path.existsSync(oPath + "/js/Moxie.swf")) {
				exit("mOxie: Error: Flash shim doesn't exist.");
			}

			if (!path.existsSync(oPath + "/js/moxie.min.js")) {
				exit("mOxie: Error: Minified JavaScript not available.");
			}

			fs.renameSync(oPath + "/js/Moxie.swf", "js/Moxie.swf");
			fs.renameSync(oPath + "/js/moxie.min.js", "js/moxie.min.js");
			fs.renameSync(oPath + "/js/moxie.full.js", "js/moxie.full.js");
		} else {
			exit("mOxie: Build process failed.", 1);
		}
		complete();
	});
}, true);


