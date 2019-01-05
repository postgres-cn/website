 today = new Date() ; 
 thisyear = today.getFullYear() ;
 thismon = today.getMonth() + 1 ; 
 thisday = today.getDate() ; 
 thishour = today.getHours() ; 
 thismin = today.getMinutes() ; 
 thissec = today.getSeconds() ; 
endyearMax  = 2013 ; 

 curDateTime = thisyear + "/" + thismon + "/" + thisday + ", " + thishour + ":" + thismin + ":" + thissec ; 
 curDate = thisyear + "/" + thismon + "/" + thisday ;

function outFormatDate() {
  var thisDateTime = thisyear + "/" ;
  if (thismon < 10 ) thisDateTime += "0" ;
  thisDateTime += thismon + "/" ;
  if (thisday < 10 ) thisDateTime += "0" ;
  thisDateTime += thisday  ; 
  return thisDateTime ; 
}


function outIntList(stv,endv,inxv) {
	var thisStr = "" ; 
	for (i = stv ; i <= endv ; i ++ ) {
		thisStr += "\n<option "
		if ( i == inxv ) thisStr += "selected" ; 
		thisStr += ">" ; 
		if ( i < 10 ) thisStr += "0" ; 
		thisStr += i ; 
	}
	return thisStr ; 
}

function outYearList(stv,endv,inxv) { 
	if ( inxv == 0 ) inxv = thisyear ; 
	if ( endv > endyearMax ) endv = endyearMax ; 
	return outIntList(stv,endv,inxv) ; 
}
function outMonthList(inxmv) { 
	if ( inxmv == 0  ) inxmv = thismon ; 
	return outIntList(1,12,inxmv) ; 
}

function outDayList(inxdv) { 
	if ( inxdv == 0 ) inxdv = thisday ; 
	return outIntList(1,31,inxdv) ; 
}

function outFullYearMonthDayList(styv,endyv,styinxv,stminxv,stdinxv,endyinxv,endminxv,enddinxv) {
	var thisStr = "" ;
	thisStr += "\n<select name=styear>" ; 
	thisStr += outYearList(styv,endyv,styinxv) ; 
	thisStr += "\n</select>" ; 
	thisStr += "<select name=stmon>" ; 
	thisStr += outMonthList(stminxv) ; 
	thisStr += "</select>" ; 
	thisStr += "<select name=stday>" + outDayList(stdinxv) + "</select>" ; 
	thisStr += "-- <select name=endyear>" + outYearList(styv,endyv,endyinxv) + "\n</select>" ; 
	thisStr += "\n<select name=endmon>" + outMonthList(endminxv) + "\n</select>" ; 
	thisStr += "\n<select name=endday>" + outDayList(enddinxv) + "\n</select>" ; 
	return thisStr ; 
}

function outFullYearMonthList(styv,endyv,styinxv,stminxv,endyinxv,endminxv) {
	var thisStr = "" ;
	thisStr += "\n<select name=styear>" ; 
	thisStr += outYearList(styv,endyv,styinxv) ; 
	thisStr += "\n</select>" ; 
	thisStr += "<select name=stmon>" ; 
	thisStr += outMonthList(stminxv) ; 
	thisStr += "</select>" ; 
	thisStr += "-- <select name=endyear>" ; 
	thisStr += outYearList(styv,endyv,endyinxv) ; 
	thisStr += "</select>" ; 
	thisStr += "<select name=endmon>" ; 
	thisStr += outMonthList(endminxv) ; 
	thisStr += "\n</select>" ; 
	return thisStr ; 
}


function outCustomerSelectList(thisName,stv,endv,inxv) {
	var thisStr = "<select name=" + thisName + ">" ; 
	thisStr += outYearList(stv,endv,inxv) ; 
	thisStr += "</select>" ; 
	return thisStr ; 
}


function outStYearList(stv,endv,inxv) {
	var thisStr = "<select name=styear>" ; 
	thisStr += outYearList(stv,endv,inxv) ; 
	thisStr += "</select>" ; 
	return thisStr ; 
}

function outStYearMonthList(stv,endv,inxyv,inxmv) {
	var thisStr = outStYearList(stv,endv,inxyv) ; 
	thisStr += "\n<select name=stmon>" ; 
	thisStr += outMonthList(inxmv) ; 
	thisStr += "</select>" ; 
	return thisStr ; 
}

function outStYearMonthDayList(stv,endv,inxyv,inxmv,inxdv) {
	var thisStr = outStYearList(stv,endv,inxyv) ; 
	thisStr += "\n<select name=stmon>" ; 
	thisStr += outMonthList(inxmv) ; 
	thisStr += "</select>" ; 
	thisStr += "<select name=stday>" + outDayList(inxdv) + "</select>" ; 
	return thisStr ; 
}

function outStYearFullMonthDayList(styv,endyv,styinxv,stminxv,stdinxv,endminxv,enddinxv) {
	var thisStr = outStYearMonthList(styv,endyv,styinxv,stminxv) ; 
	thisStr += "<select name=stday>" + outDayList(stdinxv) + "</select>" ; 
	thisStr += " -- <select name=endmon>" + outMonthList(endminxv) + "\n</select>" ; 
	thisStr += "\n<select name=endday>" + outDayList(enddinxv) + "\n</select>" ; 
	return thisStr ; 
}


function outStYearMonthFullDayList(styv,endyv,styinxv,stminxv,stdinxv,enddinxv) {
	var thisStr = outStYearMonthList(styv,endyv,styinxv,stminxv) ; 
	thisStr += "<select name=stday>" + outDayList(stdinxv) + "</select>" ; 
	thisStr += "\n<select name=endday>" + outDayList(enddinxv) + "\n</select>" ; 
	return thisStr ; 
}


function outStYearFullMonthList(styv,endyv,styinxv,stminxv,endminxv) {
	var thisStr = outStYearMonthList(styv,endyv,styinxv,stminxv) ; 
	thisStr += " -- <select name=endmon>" + outMonthList(endminxv) + "\n</select>" ; 
	return thisStr ; 
}


function outSelectFromTokenString(selname,token,cols,inxv) {
	var thisStr = "\n<select class='form-control input-sm' name=" + selname + ">" ;
	var selArr = token.split(",") ;
	for ( i=0 ; i < selArr.length ; i = i + cols ) {

		if ( selArr[i] == '' ) continue ; 

		thisStr += "\n<option " ; 
		if ( selArr[i] == inxv ) thisStr += "selected" ;

		if ( cols == 2 ){
			thisStr += " value=" + selArr[i] + ">" +selArr[i+1] + "</option>" ;
		}else
			thisStr += ">" + selArr[i] + "</option>" ; 
	}
	thisStr += "</select>" ; 
	return thisStr ; 
}


function createDateDelta(type,delta) {
  var oneDay = new Date() ; 
  var thisyear = oneDay.getFullYear() ;
  var thismon = oneDay.getMonth() + 1 ; 
  var thisday = oneDay.getDate() ; 
  if ( type=='Y') {
	thisyear += delta ;
	oneDay.setYear(thisyear) ; 
  }else if ( type=='M') {
	thismon += delta ; 
	oneDay.setMonth(thismon-1) ; 
  }else	{
	thisday += delta ; 
	oneDay.setDate(thisday) ; 
  }
  
  thisyear = oneDay.getFullYear() ;
  thismon = oneDay.getMonth() + 1 ; 
  thisday = oneDay.getDate() ; 
 
  var thisDateTime = thisyear + "/" ;
  if (thismon < 10 ) thisDateTime += "0" ;
  thisDateTime += thismon + "/" ;
  if (thisday < 10 ) thisDateTime += "0" ;
  thisDateTime += thisday  ; 
  return thisDateTime ; 
}

function submitall (width,prefix, subfix) {
	document.writeln("<table width='" + width + "%' border='0'>") ; 
	document.writeln("<tr><td height='40'><span class='noprint'>") ; 
	document.writeln(prefix) ; 
	document.writeln("<input type=submit name=submitbtn value=' 确认' class=mybtn>");
	document.writeln("<input type=button name=printbut value=' 打印 '  onclick='javascript:self.print();' class=mybtn>") ; 
	document.writeln("<input type=button class=mybtn value='Copy'  onclick=\"javascript: window.clipboardData.setData('Text',document.all('maintable').outerHTML); \">") ; 

	document.writeln(subfix) ; 
	document.writeln("</span><span class='printfoot'>") ;
	document.writeln("Generate from PostgreSQL website " + curDateTime ) ; 
	document.writeln("</span></td></tr></table>") ; 

}
function subgoback (width,prefix, subfix) {
	document.writeln("<table width='" + width + "%' border='0'>") ; 
	document.writeln("<tr><td height='40'><span class='noprint'>") ; 
	document.writeln(prefix) ; 
	document.writeln("<input type=button name=printbut value=' 打印 ' onclick='javascript:self.print();' class=mybtn>") ; 
	document.writeln("<input type=button name=returnbtn value='按此返回' onclick='javascript:history.go(-1);' class=mybtn>");
	document.writeln("<input type=button class=mybtn value='Copy'  onclick=\"javascript: window.clipboardData.setData('Text',document.all('maintable').outerHTML); \">") ; 

	document.writeln(subfix) ; 
	document.writeln("</span><span class='printfoot'>") ;
	document.writeln("Generate from PostgreSQL website on " + curDateTime ) ; 
	document.writeln("</span></td></tr></table>") ; 

}



