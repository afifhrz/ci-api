const result = document.getElementById('show').innerHTML;
document.getElementById('show').innerHTML = '';

function f_action(){
    document.getElementById('show').innerHTML = result;
    var location = $('#location').val();

    const settings = {
        "async": true,
        "crossDomain": true,
        "url": "http://api.weatherapi.com/v1/current.json?key=0abc0e3d4508450fa02151424222006&q="+location+"&aqi=yes",
        "method": "GET"
    };
    
    $.ajax(settings).done(function (response) {
        console.log(response);
        var pm = response['current']['air_quality']['pm2_5'];
        pm = pm.toFixed(2);
        var condition = '';
        var advice = '';
        if (pm < 51){
            condition = 'Good';
            advice = 'Air quality is considered satisfactory, and air pollution poses little or no risk';
        } else if (pm > 50  && pm <= 100) {
            condition = 'Moderate';
            advice = 'Active children and adults, and people with respiratory disease, such as asthma, should limit prolonged outdoor exertion.';
        } else if (pm > 100 && pm <= 150  ) {
            condition = 'Unhealthy for Sensitive Groups';
            advice = 'Active children and adults, and people with respiratory disease, such as asthma, should limit prolonged outdoor exertion.';
        } else if (pm > 150 && pm <= 200  ) {
            condition = 'Unhealthy';
            advice = 'Active children and adults, and people with respiratory disease, such as asthma, should avoid prolonged outdoor exertion<br>everyone else, especially children, should limit prolonged outdoor exertion';
        } else if (pm > 200 && pm <= 300  ) {
            condition = 'Very Unhealthy';
            advice = 'Active children and adults, and people with respiratory disease, such as asthma, should avoid all outdoor exertion<br>everyone else, especially children, should limit outdoor exertion.';
        } else {
            condition = 'Hazardous';
            advice = 'Everyone should avoid all outdoor exertion';
        } 

        document.getElementById('result_city').innerHTML = location + " Air Quality Index";
        document.getElementById('result_pm').innerHTML = "Current Air PM<sub>25</sub> value <b>" + pm +"</b><br>";
        document.getElementById('result_advice').innerHTML = "Current Air Condition is <b><i>" + condition + "</i></b><br><br>" + "Advice<br><i><b>" + advice+"</b></i>";
    });
}