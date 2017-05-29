// <![CDATA[
$(function () {
	
        function calculateBonuses1() {
            var coinPrice = parseFloat($('#unitpayForm1 #coinPrice').val());
            var coins = parseInt($('#unitpayForm1 #coins').val());
           
            if (isNaN(coins) || isNaN(coinPrice) || coins <= 0) {
                $('#unitpayForm1 #sum').val('');
                return;
            }
            var price = coins * coinPrice;
            if (price > 15000) {
                price = 15000;
            }
            $('#unitpayForm1 #sum').val(price);
        }
        
        function calculateBonuses2() {
            var coinPrice = parseFloat($('#unitpayForm2 #coinPrice').val());
            var coins = parseInt($('#unitpayForm2 #coins').val());

            if (isNaN(coins) || isNaN(coinPrice) || coins <= 0) {
                $('#unitpayForm2 #sum').val('');
                return;
            }
            var price = coins * coinPrice;
            if (price > 15000) {
                price = 15000;
            }
            $('#unitpayForm2 #sum').val(price);
        }

        function calculateBonuses4() {
            var coinPrice = parseFloat($('#unitpayForm4 #coinPrice').val());
            var coins = parseInt($('#unitpayForm4 #coins').val());

            if (isNaN(coins) || isNaN(coinPrice) || coins <= 0) {
                $('#unitpayForm4 #sum').val('');
                return;
            }
            var price = coins * coinPrice;
            if (price > 15000) {
                price = 15000;
            }
            $('#unitpayForm4 #sum').val(price);
        }
        
        $('#unitpayForm1 input#coins').keyup(function () {
            calculateBonuses1();
        });
        $('#unitpayForm2 input#coins').keyup(function () {
            calculateBonuses2();
        });
        $('#unitpayForm4 input#coins').keyup(function () {
            calculateBonuses4();
        });
        calculateBonuses1();
        calculateBonuses2();
        calculateBonuses4();
        
        $('#unitpayForm1').submit(function(){
        
            var sum = parseFloat($('#unitpayForm1 #sum').val());
            var account = String($('#unitpayForm1 #account').val());
	
        //    if(!char_exist(account)) {
        //    	alert('Персонаж не существует!');
        //    	return false;
        //    }
            if (account.length==0) {
                alert('Введите имя персонажа');
                return false;
            }
            if (isNaN(sum) || sum <= 0 || sum > 15000) {
                alert('Неверная сумма платежа');
                return false;
            }
        });
        
        $('#unitpayForm2').submit(function(){
            var sum = parseFloat($('#unitpayForm2 #sum').val());
            var account = String($('#unitpayForm2 #account').val());

        //    if(!char_exist(account)) {
        //    	alert('Персонаж не существует!');
        //    	return false;
        //    }
            if (account.length==0) {
                alert('Введите имя персонажа');
                return false;
            }
            if (isNaN(sum) || sum <= 0 || sum > 15000) {
                alert('Неверная сумма платежа');
                return false;
            }
        });

        $('#unitpayForm4').submit(function(){
            var sum = parseFloat($('#unitpayForm4 #sum').val());
            var account = String($('#unitpayForm4 #account').val());

        //    if(!char_exist(account)) {
        //    	alert('Персонаж не существует!');
        //    	return false;
        //    }
            if (account.length==0) {
                alert('Введите имя персонажа');
                return false;
            }
			if (isNaN(sum) || sum <= 0 || sum > 15000) {
                alert('Неверная сумма платежа');
                return false;
            }
        });
    });
    	function char_exist(char_name) {
    	 	$.ajaxSetup({async: false});
		$.getJSON("/?f=unitpay2&char_name="+char_name, function(json){
		  	res = json.k;
		});
		$.ajaxSetup({async: true});
		return (res=='1')?true:false;
	} 
	
	function SetUnitPayPage(k) {
		for(var i=0;i<=4;i++) {
			if(i!=k)
				$( "#unitpage"+i ).hide( "slow" );
			else
				$( "#unitpage"+i ).show( "slow" );
		}
	}
// ]]>