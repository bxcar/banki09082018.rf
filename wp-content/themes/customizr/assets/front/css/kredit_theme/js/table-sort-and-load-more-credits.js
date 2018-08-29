var sort_params = document.getElementById('sort-params');
var sort_params_2 = document.getElementById('sort-params-2');

jQuery(sort_params).click(function(e) {
    if (e.target.getAttribute('data-cust-att') != 'sort-parameter') return;
    // jQuery('div#list_bank ul').empty(); //I don't know why, but it's not necessary
    sort_credits(e.target.getAttribute('data-type'));
});

jQuery(sort_params_2).click(function(e) {
    if (e.target.getAttribute('data-cust-att') != 'sort-parameter') return;
    // jQuery('div#list_bank ul').empty(); //I don't know why, but it's not necessary
    sort_credits_2(e.target.getAttribute('data-type'));
});

function sort_credits(type) {
    var elemObj = jQuery("div#list_bank ul li._1EEzS");

    elemObj.sort(function(a,b){
        if(Number(jQuery(a).attr("data-"+ type)) < Number(jQuery(b).attr("data-"+ type))) {
            return -1;
        } else {
            return 1;
        }
    }).each(function() {
        jQuery( "div#list_bank ul" ).append(this);
        // console.log(jQuery(this).find("._2BVob")[0].innerHTML);
    });
}

function sort_credits_2(type) {
    var elemObj = jQuery("div#list_bank-2 ul li._1EEzS");

    elemObj.sort(function(a,b){
        if(Number(jQuery(a).attr("data-"+ type)) < Number(jQuery(b).attr("data-"+ type))) {
            return -1;
        } else {
            return 1;
        }
    }).each(function() {
        jQuery( "div#list_bank-2 ul" ).append(this);
        // console.log(jQuery(this).find("._2BVob")[0].innerHTML);
    });
}


//load more credits
jQuery(function () {
    jQuery("div#list_bank li._1EEzS").slice(0, 3).show();
    jQuery("#loadMore").on('click', function (e) {
        e.preventDefault();
        jQuery("div#list_bank li._1EEzS:hidden").slice(0, 15).slideDown();
        if (jQuery("div#list_bank li._1EEzS:hidden").length == 0) {
            // jQuery("#loadMore").fadeOut('slow');
        }
        /*jQuery('html,body').animate({
            scrollTop: $(this).offset().top
        }, 1500);*/
    });
});

jQuery(function () {
    jQuery("div#list_bank-2 li._1EEzS").slice(0, 3).show();
    jQuery("#loadMore-2").on('click', function (e) {
        e.preventDefault();
        jQuery("div#list_bank-2 li._1EEzS:hidden").slice(0, 15).slideDown();
        if (jQuery("div#list_bank-2 li._1EEzS:hidden").length == 0) {
            // jQuery("#loadMore").fadeOut('slow');
        }
        /*jQuery('html,body').animate({
            scrollTop: $(this).offset().top
        }, 1500);*/
    });
});