var now = new Date();
var today = now.getFullYear()  + '-' + (('0' + (now.getMonth() + 1)).slice(-2)) + '-' +  (('0' + (now.getDate())).slice(-2));// now.getDate();

var type_global = "";
var branch_global = "all";
var start_date_global = "0000-00-00";
var end_date_global = today;
var period_of_time_global = "1";
var table;
var status_global = null;

const getApi = async (url) => {
    return await fetch(url, {
        method: 'GET'
    }).then(res => {
        return res.json();
    });
}

function currentlySelectedButton(array_id_unselected, id_selected){
    array_id_unselected.forEach(id => {
        $("#"+id).removeClass("btn-dark");
        $("#"+id).addClass( "btn-inverse-dark");
    });
    $("#"+id_selected).removeClass("btn-inverse-dark");
    $("#"+id_selected).addClass( "btn-dark");
}


function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}