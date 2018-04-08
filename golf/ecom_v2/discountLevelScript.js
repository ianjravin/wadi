var quantityBasedDiscounts = new Array();
var currencySymbol = '';
function loadJSONIfNotPresent() {
    if(!this.JSON) {
	var head = document.getElementsByTagName('head')[0];
	var script = document.createElement('script');
	script.type = 'text/javascript';
	script.src = '/lib/json2.js';
	head.appendChild(script);
    }
}

function initializeQuantityBasedDiscounts(jsonString, currency) {
    loadJSONIfNotPresent();
    quantityBasedDiscounts = jQuery.parseJSON(jsonString);
    quantityBasedDiscounts = sortQuantityBasedDiscounts(quantityBasedDiscounts);
    currencySymbol = currency;
} 
function sortQuantityBasedDiscounts(discountArray) {
    var arrayOfFloors = new Array();
    for(i=0;i<discountArray.length;i++) 
        arrayOfFloors.push(discountArray[i]['floor']*1);
    arrayOfFloors.sort(function(a,b) { return a-b});
    var newOrder = new Array();
    for(i=0;i<arrayOfFloors.length;i++) {
        for(j=0;j<discountArray.length;j++) {
            if(discountArray[j]['floor'] == arrayOfFloors[i])
                newOrder.push(discountArray[j]);
        }
    }
    return newOrder;
}


function addQuantityBasedDiscount() {
    var quantity = $('#add_discount_level_qty').val();
    var price = $('#add_discount_level_price').val(); 
    if(isNaN(quantity) || quantity == '') {
        alert('Please enter a numeric value for quantity.');
        return false;
    }
    if(isNaN(price) || price == '') {
        alert('Please enter a numeric value for price.');
        return false;
    }
    for(i=0;i<quantityBasedDiscounts.length;i++) {
        if(quantityBasedDiscounts[i]['floor'] == quantity) {
            quantityBasedDiscounts[i]['price'] = price;
            displayQuantityBasedDiscounts();
            return true;
        }
    }
    newLevelArray = {floor: quantity, price: price};
    quantityBasedDiscounts.push(newLevelArray);
    displayQuantityBasedDiscounts();
    return true;
}
function deleteQuantityBasedDiscount(deleteIndex) {
    quantityBasedDiscounts.splice(deleteIndex,1);
    displayQuantityBasedDiscounts();
}
function displayQuantityBasedDiscounts() {
    quantityBasedDiscounts = sortQuantityBasedDiscounts(quantityBasedDiscounts);
    var ranges = new Array();
    var beginRange = false;
    var endRange = false;
    for(i=quantityBasedDiscounts.length-1;i>=0;i--) {
        var individualRange = new Array();
        if(!beginRange)
            individualRange['begin'] = quantityBasedDiscounts[i]['floor'];
        individualRange['end'] = endRange;
        individualRange['price'] = quantityBasedDiscounts[i]['price'];
        endRange = individualRange['begin']-1;
        ranges[i] = individualRange;
    }
    
    $('#quantityBasedDiscountList').html('');
    var discountLevelList = '<table width=100% border=0><tr><td colspan=5><b>Discount Levels</b></td></tr>';
    for(i=0;i<ranges.length;i++) {
        if(ranges[i]['begin'] == ranges[i]['end'])
            rangeText = ranges[i]['begin'] + ' items ';
        else if(!ranges[i]['end'])
            rangeText = ranges[i]['begin'] + ' or more items ';
        else
            rangeText = 'between ' + ranges[i]['begin'] + ' and ' + ranges[i]['end'] + ' items '; 
        discountLevelList += '<tr><td><b>For</b></td>';
        discountLevelList += '<td>' + rangeText + '</td>';
        discountLevelList += '<td><b>the discount price will be</b></td>'; 
        discountLevelList += '<td>' + currencySymbol + ' ' + ranges[i]['price'] + '</td>';
        discountLevelList += '<td><input type=button value=\'X\' onclick=deleteQuantityBasedDiscount(' + i +')></td></tr>';
    }
    discountLevelList += '</table>';
    $('#quantityBasedDiscountList').html(discountLevelList);
    loadJSONIfNotPresent();
    $('#quantityBasedDiscountLevelsJSON').val(JSON.stringify(quantityBasedDiscounts));
}
function getPriceForDiscountLevel(quantity) {
    var price = false;
    for(var i=0;i<quantityBasedDiscounts.length;i++) {
	if(quantity*1 >= quantityBasedDiscounts[i]['floor']*1) {
	    price = quantityBasedDiscounts[i]['price'];
	}
    }
    return price;
}
