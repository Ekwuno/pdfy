new Vue({
    el: '#app',
    data: {
        show: false,
        faculties: ['-- select faculty --','Engineering', 'Agriculture','Physical Science'],
        departments: ['-- select department --','Engineering', 'Agriculture','Physical Science'],
        levels: ['-- select level --', 100, 200, 300, 400],
    }
});




var upload = new Vue({
    el: '#upload',
    data: {
        selected: '',
        faculties: ['-- select faculty --','Engineering', 'Agriculture','Physical Science'],
        Engineering: ['-- select department --','ECE', 'EE','ABE', 'CVE', 'CHE', 'IPE', 'MME', 'MECH', 'PTE'],
        levels: ['-- select level --', 100, 200, 300, 400, 500],
    }

});

$('#faculty').click(function(){
    $('#faculty').find(':selected').text();
   console.log(fac);
});
