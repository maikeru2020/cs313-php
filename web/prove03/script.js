function addItem(name) {
    $.ajax({
        type: 'get',
        url: 'add_item.php',
        data: {
            prophet:name
        },
        success: function(numItems) {
            document.getElementById('cart').innerHTML = "My Cart (" + numItems + ")";
        }
    });
    
}

function removeItem(name) {
    $.ajax({
        type: 'get',
        url: 'remove_item.php',
        data: {
            prophet:name
        },
        success: function() {
            window.location.reload(true); 
        }
    });
    
}

