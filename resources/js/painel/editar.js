/**
 * Pega o valor de um campo de formulário
 * 
 * @method gv
 * @param {string} campo_id ID do campo
 * @return {string}
 */
function gv(campo_id) {
	return $('#'+campo_id).val();
}

/**
 * Retorna `true` se um campo de formulário estiver vazio
 * ou `false` se tiver algum conteúdo lá
 * 
 * @method vazio
 * @param {string} campo_id ID do campo
 * @return {boolean}
 */
function vazio(campo_id) {
	return $.trim(gv(campo_id))=='';
}


// Configurações gerais
var painel_editar = {
	minHour: 9,
	maxHour: 23
};

/**
 * Se o número for menor que 10, acrescenta um 0 na frente
 * 
 * @method nzero
 * @param {int} n
 * @return {string}
 */
function nzero(n) {
	return ''+(n<10?'0'+n:n);
}

/**
 * Formata uma data/hora javascript para o formato mysql
 * 
 * @method datetime_format_mysql
 * @param {Date} dt Data para ser convertida
 * @return {string}
 */
function datetime_format_mysql(dt) {
	var tm = {
		h: dt.getHours(),
		m: dt.getMinutes(),
		s: dt.getSeconds()
	};
	
	return dt.getFullYear()+'-'+nzero(dt.getMonth()+1)+'-'+nzero(dt.getDate())+' '
			+ nzero(tm.h)+':'+nzero(tm.m)+':'+nzero(tm.s);
}

/**
 * Formata "Y-m-d H:i:s" para "d/m/Y"
 * 
 * @method datetime_mysql2brdate
 * @param {string} dt Data/Hora em formato mysql
 * @return {string}
 */
function datetime_mysql2brdate(dt) {
	if(!dt) return '';
	var dtarr = dt.split(' ',2)[0];
		dtarr = dtarr.split('-',3);
	return dtarr[2]+'/'+dtarr[1]+'/'+dtarr[0];
}

/**
 * Formata "Y-m-d H:i:s" para "H;i"
 * 
 * @method datetime_mysql2time
 * @param {string} dt Data/Hora em formato mysql
 * @return {string}
 */
function datetime_mysql2time(dt) {
	if(!dt) return '';
	return dt.substr(11,5);
}
