document.addEventListener('DOMContentLoaded', function (){

    function displayTime(){

        var date = new Date();

        var month = date.getMonth();
        var day = date.getDate();
        var year = date.getFullYear();


        if (day < 10)
        {
            day = '0' + day;
        }

        month = month + 1;
        if (month >= 13)
        {
            month = 1;
        }

        if (month < 10)
        {
            month = '0' + month;
        }

        var pageDate = document.getElementById('date');
        var currentDay = month + '/' + day  + '/' + year;

        pageDate.append(currentDay);
    }

    displayTime();

    window.print();
});





