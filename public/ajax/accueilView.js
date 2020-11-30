getFriendsSurveys();
getMySurveys();

function getFriendsSurveys() {
    $.ajax({
        url: "?action=get-friends-surveys",
        dataType: 'json',
        success: function (response) {
            $("#friends-surveys").empty();
            response.forEach(survey => {
                $("#friends-surveys").append(`
                <li>
                    <a href="#">${survey.survey_title}</a> fait par ${survey.friend_username}
                </li>            
                `)
            });
        }
    })
}

function getMySurveys() {
    $.ajax({
        url: "?action=get-my-surveys",
        dataType: 'json',
        success: function (response) {
            console.log(response);
            $("#my-surveys").empty();
            response.forEach(survey => {
                $("#my-surveys").append(`
                <li>
                    <a href="#">${survey.survey_title}</a>
                </li>            
                `)
            });
        }
    })
}

