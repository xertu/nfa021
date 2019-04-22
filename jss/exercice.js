

var src = new Array();
var i = 0;

src[i++] = '../jss/ajax.js';
src[i++] = '../jss/pages.js';
src[i++] = '../jss/init.js';

for (var j = 0; j < i; ++j)
{
  document.write('<script language="javascript" type="text/javascript" src="' + src[j] + '"></script>');
}