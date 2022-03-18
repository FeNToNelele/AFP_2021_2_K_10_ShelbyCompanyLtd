function showExtra() {
    var accountType = document.getElementById('accountType');

    var guestUIState = document.getElementById('guest');
    var studentUIState = document.getElementById('student');
    var teacherUIState = document.getElementById('teacher');

    switch (accountType.value) {
        case "guest":
            guestUIState.style.display = "block";
            studentUIState.style.display = "none";
            document.getElementById('neptun').value = "";
            teacherUIState.style.display = "none";
            document.getElementById('institute').value = "";
            break;
        case "student":
            guestUIState.style.display = "none";
            document.getElementById('address').value = "";
            studentUIState.style.display = "block";
            teacherUIState.style.display = "none";
            document.getElementById('institute').value = "";
            break;
        case "teacher":
            guestUIState.style.display = "none";
            document.getElementById('address').value = "";
            studentUIState.style.display = "none";
            document.getElementById('neptun').value = "";
            teacherUIState.style.display = "block";
            break;
        default:
            guestUIState.style.display = "none";
            document.getElementById('address').value = "";
            studentUIState.style.display = "none";
            document.getElementById('neptun').value = "";
            teacherUIState.style.display = "none;"
            document.getElementById('institute').value = "";
            break;
    }
}