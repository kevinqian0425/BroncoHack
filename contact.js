require 'autoload.php';

Parse.initialize("SR1cvwd4CVY9Lon9WOWJC6GuDzXySA9ew9mBcRZQ");
Parse.serverURL = 'http://YOUR_PARSE_SERVER:1337/parse'

var TestObject = Parse.Object.extend("TestObject");
var testObject = new TestObject();
testObject.save({foo: "bar"}).then(function(object) {
  alert("yay! it worked");
});