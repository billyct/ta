function Regex() {
	this.emailReg = /^([a-z0-9A-Z_]+[-|\.]?)+[a-z0-9A-Z]@([a-z0-9A-Z]+(-[a-z0-9A-Z]+)?\.)+[a-zA-Z]{2,}$/;
	this.mobileReg = /^0?1(3|5|8)\d{9}$/;
	this.telReg = /(^[0-9]{3,4}-[0-9]{7,8}-[0-9]{3,4}$)|(^[0-9]{3,4}-[0-9]{7,8}$)|(^[0-9]{7,8}-[0-9]{3,4}$)|(^[0-9]{7,15}$)/;
	this.domainReg = /http:\/\/.+/;
	this.zipcodeReg = /^[0-9]{6}$/;
	this.numReg = /^[0-9]+$/;
	this.userNameReg = /^[_a-zA-Z0-9\u4E00-\u9FFF]{2,20}/;
	this.zh = /[\u4E00-\u9FFF]/g;
	this.drgReg = /.*(达人工|darengong).*/;

	
	this.checkEmail = function(email) {
		return this.emailReg.test(email);
	}

	this.checkMobile = function(mobile) {
		return this.mobileReg.test(mobile);
	}

	this.checkTel = function(tel) {
		return this.telReg.test(tel);
	}

	this.checkDomain = function(domain) {
		return this.domainReg.test(domain);
	}

	this.checkZipcode = function(zipcode) {
		return this.zipcodeReg.test(zipcode);
	}
	
	this.checkNum = function(num) {
		return this.numReg.test(num);
	}

	this.checkUserName = function(userName) {
		if(userName=="") {
			return false;
		}
		
		var len = userName.length;
		var m = userName.match(this.zh);
		if(m != null) {
			len += m.length;
		}
		
		return this.userNameReg.test(userName) && !this.drgReg.test(userName) && (len>=4 && len<=32);
	}
}