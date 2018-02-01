// object that holds the faculties and departments and level
var datas = {
    Faculties: ['Engineering', 'Agriculture', 'Management Science', 'Physical Science', 'Art','Education'],
    Engineering: ['Electronics and Computer Engineering',
                  'Electrical Engineering',
                  'Agric and BioResource Engineering',
                  'Civil Engineering',
                  'Chemical Engineering', 
                  'Industrial and Production Engineering', 
                  'Material and Metallurgical Engineering', 
                  'Mechanical Engineering', 
                  'Polymer and Textile Engineering'],
    Agriculture: ['Fishery','Soil Science','Crop Science'],
    "Management Science": ['Accountancy','Political Science',''],
    "Physical Science": ['Computer Science', 
                         'Geology', 
                         'Physics and Industrial Physics', 
                         'Industrial Chemistry'],
    Art: ['Music','Theatre Arts','Literature'],
    level: [100,200,300,400,500,600]
}


// intializes the faculties and level array
const fac = datas.Faculties;
const lvl = datas.level;


// appends the faculties to the input select field
for (let i = 0; i < fac.length; i++) {
    $('#faculty').append("<option class='cm-option' id='faculti' value='"+fac[i]+"'>"+fac[i]+"</option>");
} 
// method to get the faculty selected by the user
function getFac(){ 
  var facValue = $('#faculty').find(':selected').text();
  return facValue;
}

$('#faculty').click(function(){
    // removes previously populated departments and level in the select field to make way for new ones
    $('option').remove('#dept');
    $('option').remove('#level');

    // returns the value of the selected faculty and saves it.
    getFac;
    var betFac = getFac();

    // stores the above selected variable and then  matches it to the respected data property matching the selected faculty 
    var dept = datas[betFac]; 
    
    // appends the department to the input select field after a particular faculty has been choosen
    for (let x = 0; x < dept.length; x++) {
        $('#dep').append("<option class='cm-option' id='dept' value='"+dept[x]+"'>"+dept[x]+"</option>");
        //console.log(i);
    }

    // appends the levels to the input select field any faculty has been choosen
    for (let y = 0; y < lvl.length; y++) {
        $('#sel1').append("<option class='cm-option' id='level' value='"+lvl[y]+"'>"+lvl[y]+"</option>");
        //console.log(i);
    } 
});

/*
alert();
$.ajax({
    url: 'about.php',
    type: 'GET',
    data: 'online=stuff',
    success: function(result){
        alert('App is online!')
    },
    error:function (e){
        console.log(e);
        alert('App is Offline')
    }
}) */
 