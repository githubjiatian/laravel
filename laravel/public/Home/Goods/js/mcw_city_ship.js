var city_ship = {
	yto	: {
		'安徽,江苏,上海,浙江':6,
		'北京,福建,甘肃,广东,广西,贵州,海南,河北,河南,黑龙江,湖北,湖南,吉林,江西,辽宁,山东,山西,陕西,四川,天津,云南,重庆':10,
		'内蒙古,宁夏,青海,西藏,新疆':15
	},
	sf	: {
		'安徽,江苏,上海,浙江':12,
		'北京,福建,甘肃,广东,广西,贵州,海南,河北,河南,黑龙江,湖北,湖南,吉林,江西,辽宁,山东,山西,陕西,四川,天津,云南,重庆':20,
		'内蒙古,宁夏,青海,西藏,新疆':25
	}
};
for(var i in city_ship.yto){
	for(var j in i.split(',')){
		city_ship.yto[i.split(',')[j]] = city_ship.yto[i];
	}
}
for(var i in city_ship.sf){
	for(var j in i.split(',')){
		city_ship.sf[i.split(',')[j]] = city_ship.sf[i];
	}
}