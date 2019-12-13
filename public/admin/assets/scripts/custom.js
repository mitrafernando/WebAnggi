$(document).ready(function(){
    $.ajax({
        method: "GET",
        url: "https://randomuser.me/api",
        success: function(result) {
            var firstName = result.results[0].name.first;
            var lastName = result.results[0].name.last;
            var fullName = firstName +" "+ lastName;
            var gender = result.results[0].gender;
            var streetNumber = result.results[0].location.street.number;
            var streetName = result.results[0].location.street.name;
            var city = result.results[0].location.city;
            var state = result.results[0].location.state;
            var country = result.results[0].location.country;
            var address = streetNumber +" "+ streetName +", "+ city +", "+ state +", "+ country;
            var email = result.results[0].email;
            var dob = result.results[0].dob.date;
            var age = result.results[0].dob.age;
            var phone = result.results[0].phone;
            var picture = result.results[0].picture.large;
            $('#name').val(fullName);
            $('#gender').val(gender);
            $('#address').val(address);
            $('#email').val(email);
            $('#dob').val(dob);
            $('#age').val(age);
            $('#phone').val(phone);
            $('#picture').attr("src", picture);
        }
    });
});
