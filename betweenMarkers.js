function betweenMarkers(str,start,end){
    var v1 = str.indexOf(start);   
	var v2 = str.indexOf(end);
    var qtd = start.length;
	if (v1>v2 && v2!=-1){
		return "";
	}
	if (v1==-1&&v2==-1){
		return str;
	}
	if (v1==-1 && v2!=v1){ //tenho fim da tag mas n tenho começo
		return str.substr(0,v2);
	}
	else if (v2==-1 && v2!=v1){ //nao tenho fim, mas tenho começo
		return str.substr((v1+(qtd-1))+1);
	}
    return str.substring((v1+(qtd-1))+1,v2);
}