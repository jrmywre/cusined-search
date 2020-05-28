function active() {
    var searchBar = document.getElementById('searchBar');

    if(searchBar.value == 'Find a Recipe'){
        searchBar.value = ''
        searchBar.placeholder = 'Find a Recipe'
    }
}

function inactive() {
    var searchBar = document.getElementById('searchBar');

    if(searchBar.value == ''){
        searchBar.value = 'Find a Recipe'
        searchBar.placeholder = ''
    }
}


// {
//     "require": {
//         "ext-mysql": "*"
//     }
// }